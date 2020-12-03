<?php

class ControllerExtensionModuleMtaAffiliateDownline extends Controller {
	
	public function index() {
		$this->load->language('extension/mta/affiliate_downline');
		foreach(array('heading_title', 'text_legend', 'text_abbr_te', 'text_abbr_elm', 'text_te', 'text_elm') as $_v) {
			$data[$_v] = $this->language->get('affd_' . $_v);
		}	
		if(!isset($this->request->get['affiliate_id']) || !preg_match("/^\d+$/", $this->request->get['affiliate_id'])) {			
			$data['aff_id'] = 0;
			$data['text_shop'] = $this->config->get('config_name');
			$data['aff_status'] = true;
		} else {
			$data['aff_id'] = intval($this->request->get['affiliate_id']);
			$this->load->model('customer/customer');
			$_c = $this->model_customer_customer->getCustomer($data['aff_id']);
			$_a = $this->model_customer_customer->getAffiliate($data['aff_id']);
			$data['aff_status'] = $_c['status'] && $_a['status'];
			$aff = array_merge($_c, $_a);
			$data['text_shop'] = $aff['firstname'] . ' ' . $aff['lastname'];
		}
		
    	$this->document->setTitle($data['heading_title']);
		$this->document->addStyle('view/stylesheet/affiliate_downline.css');
			
		$this->load->model('extension/mta/affiliate_downline');
		
		$data['top_count'] = $this->model_extension_mta_affiliate_downline->countSubs($data['aff_id']);		
		$data['link'] = html_entity_decode($this->url->link('customer/customer/edit', 'user_token=' . $this->session->data['user_token'], true), ENT_QUOTES, 'UTF-8');
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/mta/affiliate_downline', $data));		
	}	
	
	public function l() {
		$affiliate_id = isset($this->request->request['affiliate_id']) ? intval($this->request->request['affiliate_id']) : 0;	
		$this->load->model('extension/mta/affiliate_downline');
		$res = $this->model_extension_mta_affiliate_downline->loadSubs($affiliate_id);
		foreach($res as $id => $v) {
			$res[$id]['aff_status'] = $v['c_status'] && $v['a_status'];
			foreach(array('te', 'elm') as $_v) {
				if(!isset($res[$id]['e_' . $_v])) $res[$id]['e_' . $_v] = 0;
				$res[$id]['e_' . $_v] = $this->currency->format($res[$id]['e_' . $_v], $this->config->get('config_currency'));
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode(array_values($res)));
	}
	
}

