<?php
class ControllerAccountTracking extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/tracking', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->model('account/customer');

		$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());
			
		if ($affiliate_info) {
			$this->load->language('account/tracking');
	
			$this->document->setTitle($this->language->get('heading_title'));
	
			$data['breadcrumbs'] = array();
	
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/home')
			);
	
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_account'),
				'href' => $this->url->link('account/account', '', true)
			);
	
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('account/tracking', '', true)
			);
	
			$data['text_description'] = sprintf($this->language->get('text_description'), $this->config->get('config_name'));
	
			$data['code'] = $affiliate_info['tracking'];

			/* 新增QRcode用追蹤碼連結 */
			/* ===================Start=================== */
			$google_qrcode = "https://chart.googleapis.com/chart?chs=177x177&cht=qr&choe=UTF-8&chl=";
			$data['entry_qrcode'] = $this->language->get('entry_qrcode');
			$data['entry_home_qrcode'] = $this->language->get('entry_home_qrcode');
			$data['entry_product_qrcode'] = $this->language->get('entry_product_qrcode');
			$data['entry_register_qrcode'] = $this->language->get('entry_register_qrcode');
			$data['tracking_link'] = $this->url->link('common/home', 'tracking=' . $affiliate_info['tracking'], true);
			$data['qrcode_tracking'] = $google_qrcode . str_replace('&amp;', '%26', $this->url->link('common/home', 'tracking=' . $affiliate_info['tracking'], true)); 
			/* ===================End=================== */
	
			$data['continue'] = $this->url->link('account/account', '', true);
	
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
	
			$this->response->setOutput($this->load->view('account/tracking', $data));
		} else {
			return new Action('error/not_found');
		}
	}

	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name'])) {

			/*
			if (isset($this->request->get['tracking'])) {
				$tracking = $this->request->get['tracking'];
			} else {
				$tracking = '';
			}
			*/

			/* by toastguo start */
			$this->load->model('account/customer');
			$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());
			if($affiliate_info){
				$tracking = $affiliate_info['tracking'];
			}else{
				$tracking = '';
			}
			/* by toastugo end */

			$this->load->model('catalog/product');

			$filter_data = array(
				'filter_name' => $this->request->get['filter_name'],
				'start'       => 0,
				'limit'       => 5
			);

			$results = $this->model_catalog_product->getProducts($filter_data);

			$google_qrcode = "https://chart.googleapis.com/chart?chs=177x177&cht=qr&choe=UTF-8&chl=";

			foreach ($results as $result) {
				$json[] = array(
					'name' => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'link' => str_replace('&amp;', '&', $this->url->link('product/product', 'product_id=' . $result['product_id'] . '&tracking=' . $tracking)),
					'qrcode' => $google_qrcode . str_replace('&amp;', '%26', $this->url->link('product/product', 'product_id=' . $result['product_id'] . '&tracking=' . $tracking))	
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}