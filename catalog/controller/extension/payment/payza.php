<?php
class ControllerExtensionPaymentPayza extends Controller {
	public function index() {
		$data['button_confirm'] = $this->language->get('button_confirm');

		$this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		/*payza程式碼
		$data['action'] = 'https://secure.payza.com/checkout';

		$data['ap_merchant'] = $this->config->get('payment_payza_merchant');
		$data['ap_amount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false);
		$data['ap_currency'] = $order_info['currency_code'];
		$data['ap_purchasetype'] = 'Item';
		$data['ap_itemname'] = $this->config->get('config_name') . ' - #' . $this->session->data['order_id'];
		$data['ap_itemcode'] = $this->session->data['order_id'];
		$data['ap_returnurl'] = $this->url->link('checkout/success');
		$data['ap_cancelurl'] = $this->url->link('checkout/checkout', '', true);
		*/	

		//台銀		
		$data['merchant'] = $this->config->get('payment_payza_merchant');
		$data['order_id'] = $order_info['order_id'];
		$data['amount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false);
		$data['currency'] = $order_info['currency_code'];
		$data['description'] = $this->config->get('config_name') . ' - #' . $order_info['order_id'];
		$data['name'] = $order_info['payment_firstname'] . ' ' . $order_info['payment_lastname'];
		
		//台灣銀行
		//測試
		/*
		$data['action'] = 'https://www.focas-test.fisc.com.tw/FOCAS_WEBPOS/online/';
		$ordnum = date('Ymd');
		$data['lidm'] = $order_info['order_id'].'-'.$ordnum;
		$data['TerminalID'] = '90010001';
		$data['MerchantID'] = '004245036369001';
		$data['MerchantName'] = 'VEGEDEN';
		$data['merID'] = '24503636';
		$data['customize'] = '1';
		$data['AutoCap'] = '1';
		$data['purchAmt'] = sprintf('%d',$this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false));
	*/
		
		//正式	
	
		$data['action'] = 'https://www.focas.fisc.com.tw/FOCAS_WEBPOS/online/';		
		$ordnum = date('Ymd');
		$data['lidm'] = $order_info['order_id'].'-'.$ordnum;
		$data['TerminalID'] = '90010001';
		$data['MerchantID'] = '004245036369001';
		$data['MerchantName'] = 'VEGEDEN';
		$data['merID'] = '1367';
		$data['customize'] = '1';
		$data['AutoCap'] = '1';
		$data['purchAmt'] = sprintf('%d',$this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false));
	
		$data['AuthResURL'] = HTTP_SERVER . 'index.php?route=extension/payment/payza/callback';
		
		return $this->load->view('extension/payment/payza', $data);
		//return $this->load->view('extension/payment/worldpay_bank', $data);
	}

	public function callback() {
		$this->load->language('extension/payment/payza');
		
		$data['title'] = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));
		
		if (!$this->request->server['HTTPS']) {
			$data['base'] = $this->config->get('config_url');
		} else {
			$data['base'] = $this->config->get('config_ssl');
		}

		$data['language'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['heading_title'] = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));

		$data['text_response'] = $this->language->get('text_response');
		$data['text_success'] = $this->language->get('text_success');
		$data['text_success_wait'] = sprintf($this->language->get('text_success_wait'), $this->url->link('checkout/success'));
		$data['text_failure'] = $this->language->get('text_failure');
		$data['text_failure_wait'] = sprintf($this->language->get('text_failure_wait'), $this->url->link('checkout/checkout', '', 'SSL'));

		//if (isset($this->request->post['transStatus']) && $this->request->post['transStatus'] == 'Y') {
		if (isset($_REQUEST['status']) && $_REQUEST['status'] == 0) {
			$message = '';

			if (isset($this->request->post['transId'])) {
				$message .= 'transId: ' . $this->request->post['transId'] . "\n";
			}

			if (isset($this->request->post['transStatus'])) {
				$message .= 'transStatus: ' . $this->request->post['transStatus'] . "\n";
			}

			if (isset($this->request->post['countryMatch'])) {
				$message .= 'countryMatch: ' . $this->request->post['countryMatch'] . "\n";
			}

			if (isset($this->request->post['AVS'])) {
				$message .= 'AVS: ' . $this->request->post['AVS'] . "\n";
			}

			if (isset($this->request->post['rawAuthCode'])) {
				$message .= 'rawAuthCode: ' . $this->request->post['rawAuthCode'] . "\n";
			}

			if (isset($this->request->post['authMode'])) {
				$message .= 'authMode: ' . $this->request->post['authMode'] . "\n";
			}

			if (isset($this->request->post['rawAuthMessage'])) {
				$message .= 'rawAuthMessage: ' . $this->request->post['rawAuthMessage'] . "\n";
			}

			if (isset($this->request->post['wafMerchMessage'])) {
				$message .= 'wafMerchMessage: ' . $this->request->post['wafMerchMessage'] . "\n";
			}

			$this->load->model('checkout/order');
			
			// If returned successful but callbackPW doesn't match, set order to pendind and record reason
			/*if (isset($this->request->post['callbackPW']) && ($this->request->post['callbackPW'] == $this->config->get('worldpay_password'))) {
				$this->model_checkout_order->addOrderHistory($this->request->post['cartId'], $this->config->get('worldpay_order_status_id'), $message, false);
			} else {
				$this->model_checkout_order->addOrderHistory($this->request->post['cartId'], $this->config->get('config_order_status_id'), $this->language->get('text_pw_mismatch'));
			}*/
			//表示未決定，台銀回傳為0，但OPENCART不能為0
			$status=1;
			$lidm=explode("-",$_REQUEST['lidm']);

			$order_status_id = 1;

			$this->model_checkout_order->addOrderHistory($lidm[0], $order_status_id, $message, false);

			$data['continue'] = $this->url->link('checkout/success');

			$this->response->setOutput($this->load->view('extension/payment/payza_success', $data));
		} else {
			$data['continue'] = $this->url->link('checkout/cart');

			$this->response->setOutput($this->load->view('extension/payment/payza_failure', $data));
		}
		
		/*
		if (isset($this->request->post['ap_securitycode']) && ($this->request->post['ap_securitycode'] == $this->config->get('payment_payza_security'))) {
			$this->load->model('checkout/order');

			$this->model_checkout_order->addOrderHistory($this->request->post['ap_itemcode'], $this->config->get('payment_payza_order_status_id'));
		}*/
	}

	public function confirm() {
		$json = array();
		
		if ($this->session->data['payment_method']['code'] == 'payza') {
			$json['test'] = 'test';
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}

}