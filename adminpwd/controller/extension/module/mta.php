<?php

class ControllerExtensionModuleMta extends Controller {

	private $version = 181010;

	private $_perms = array(
		'extension/module/mta',
		'extension/module/mta/mta',
		'extension/module/mta/mta_affiliate_dt',
		'extension/module/mta/mta_pds',		
		'extension/module/mta/mta_set_scheme',
		'extension/module/mta/affiliate_downline',
		'extension/module/mta/mta_event'
	);	
	
	protected $_events = array(
		array('admin_delete_coupon','admin/model/marketing/coupon/deleteCoupon/before', 'extension/module/mta/event/eventDeleteCoupon'),
		array('admin_add_product', 'admin/model/catalog/product/addProduct/after', 'extension/module/mta/event/eventAddProductPost'),
		array('admin_delete_affiliate','admin/model/customer/customer/deleteCustomer/before', 'extension/module/mta/event/eventDeleteAffiliate'),
		array('admin_get_customer', 'admin/model/customer/customer/getCustomer/after', 'extension/module/mta/event/eventGetCustomerPost'),		
		array('admin_get_customer_byemail', 'admin/model/customer/customer/getCustomerByEmail/after', 'extension/module/mta/event/eventGetCustomerPost'),		
		array('admin_add_affiliate', 'admin/model/customer/customer/addCustomer/after', 'extension/module/mta/event/eventAddAffiliatePost'),		
		array('admin_edit_affiliate', 'admin/model/customer/customer/editCustomer/before', 'extension/module/mta/event/eventEditAffiliatePre'),
		array('admin_edit_product_pre', 'admin/model/catalog/product/editProduct/before', 'extension/module/mta/event/eventEditProductPre'),			
		array('admin_edit_product_post', 'admin/model/catalog/product/editProduct/after', 'extension/module/mta/event/eventEditProductPost'),			
		array('admin_delete_product','admin/model/catalog/product/deleteProduct/before', 'extension/module/mta/event/eventDeleteProduct'),						
		array('get_customer', 'catalog/model/account/customer/getCustomer/after', 'extension/module/mta/event/eventGetCustomerPost'),			
		array('get_customer_byemail', 'catalog/model/account/customer/getCustomerByEmail/after', 'extension/module/mta/event/eventGetCustomerPost'),			
		array('get_customer_bycode', 'catalog/model/account/customer/getCustomerByCode/after', 'extension/module/mta/event/eventGetCustomerPost'),			
		array('get_customer_byemail', 'catalog/model/account/customer/getCustomerByToken/after', 'extension/module/mta/event/eventGetCustomerPost'),
		array('add_customer', 'catalog/model/account/customer/addCustomer/after', 'extension/module/mta/event/eventAddCustomerPost'),			
		array('add_affiliate', 'catalog/model/account/customer/addAffiliate/after', 'extension/module/mta/event/eventAddAffiliatePost'),	
		array('add_order_history_before', 'catalog/model/checkout/order/addOrderHistory/before', 'extension/module/mta/event/eventAddOrderHistoryPre'),
		array('add_order_history_after', 'catalog/model/checkout/order/addOrderHistory/after', 'extension/module/mta/event/eventAutoAddCommissions'),
		//array('add_transaction_after', 'catalog/model/account/customer/addTransaction/after', 'extension/module/mta/event/eventAddTransactionPost'),
		array('delete_order_before', 'catalog/model/checkout/order/deleteOrder/before', 'extension/module/mta/event/eventDeleteOrder'),			
		array('add_order_after', 'catalog/model/checkout/order/addOrder/after', 'extension/module/mta/event/eventAddOrderPost'),			
		array('edit_order_after', 'catalog/model/checkout/order/editOrder/after', 'extension/module/mta/event/eventEditOrderPost'),
		array('dq_update_order_after', 'catalog/model/d_quickcheckout/order/updateOrder/after', 'extension/module/mta/event/eventEditOrderPost'),
		array('xdq_update_order_after','catalog/model/extension/d_quickcheckout/order/updateOrder/after', 'extension/module/mta/event/eventEditOrderPost')
	);		
	
	public function install() {
		$this->load->model('extension/mta/affiliate');
		$this->model_extension_mta_affiliate->install();

		$this->load->model('setting/setting');
		$this->model_setting_setting->editSetting('mta_version', array('mta_version' => $this->version));

		$this->addPermissions();
		
		$this->load->model('setting/event');
		foreach($this->_events as $_e) {
			if(!$this->model_setting_event->getEventByCode('mta_' . $_e[0])) $this->model_setting_event->addEvent('mta_' . $_e[0], $_e[1], $_e[2]);
		}
	}
	
	public function index() {
		$this->response->redirect($this->url->link('extension/module/mta/mta', 'user_token=' . $this->session->data['user_token'], true));	
	}

	public function uninstall() {
		if (!$this->user->hasPermission('modify', 'extension/module/mta')) return;		
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('mta_version');
		$this->model_setting_setting->deleteSetting('mta_ypx');

		$this->load->model('setting/event');
		foreach($this->_events as $_e) {
			$this->model_setting_event->deleteEventByCode('mta_' . $_e[0]);
		}
		
		$this->removePermissions();
	}		

	protected function addPermissions() {
		$this->load->model('user/user_group');		
		foreach($this->_perms as $route) {
			foreach(array('access', 'modify') as $perm_type) {
				if(!$this->user->hasPermission($perm_type, $route)) {
					$this->model_user_user_group->addPermission($this->user->getGroupId(), $perm_type, $route);				
				}
			}
		}
	}

	protected function removePermissions() {
		$this->load->model('user/user_group');		
		foreach($this->_perms as $route) {
			foreach(array('access', 'modify') as $perm_type) {
				if($this->user->hasPermission($perm_type, $route)) {
					$this->model_user_user_group->removePermission($this->user->getGroupId(), $perm_type, $route);				
				}
			}
		}
	}	
	
}
