<?php

//   * Total Order Discount v1.2 (https://github.com/underr-ua/ocmod3-total-order-discount)
//   * Copyright 2018 Burkatskyi Andrii aka underr
//   * Licensed under MIT - https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount/master/LICENSE.txt

class ControllerExtensionTotalOrderDiscount extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/total/order_discount');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('total_order_discount', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_total_order_discount_success');
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token']  . '&type=total', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/total/order_discount', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/total/order_discount', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true);

		if (isset($this->request->post['total_order_discount_status'])) {
			$data['total_order_discount_status'] = $this->request->post['total_order_discount_status'];
		} else {
			$data['total_order_discount_status'] = $this->config->get('total_order_discount_status');
		}

		if (isset($this->request->post['total_order_discount_base'])) {
			$data['total_order_discount_base'] = $this->request->post['total_order_discount_base'];
		} else {
			$data['total_order_discount_base'] = $this->config->get('total_order_discount_base');
		}

		if (isset($this->request->post['total_order_discount_point'])) {
			$data['total_order_discount_point'] = abs($this->request->post['total_order_discount_point']);
		} else {
			$data['total_order_discount_point'] = abs($this->config->get('total_order_discount_point'));
		}

		if (isset($this->request->post['total_order_discount_type'])) {
			$data['total_order_discount_type'] = $this->request->post['total_order_discount_type'];
		} else {
			$data['total_order_discount_type'] = $this->config->get('total_order_discount_type');
		}

		if (isset($this->request->post['total_order_discount_value'])) {
			$data['total_order_discount_value'] = abs($this->request->post['total_order_discount_value']);
		} else {
			$data['total_order_discount_value'] = abs($this->config->get('total_order_discount_value'));
		}

		// Clear if discount more then 100%
		if ($data['total_order_discount_type'] == "pct" & $data['total_order_discount_value'] >= 100) {
			$data['total_order_discount_value'] = 0;
		}

		// Clear if fixed discount value more then price of all products in the cart.
		if ($data['total_order_discount_base'] == 'sum' &&
				$data['total_order_discount_type'] == 'fix' &&
				$data['total_order_discount_value'] >= $data['total_order_discount_point']) {
			$data['total_order_discount_value'] = 0;
			$data['total_order_discount_point'] = 0;
		}

		if (isset($this->request->post['total_order_discount_sort_order'])) {
			$data['total_order_discount_sort_order'] = $this->request->post['total_order_discount_sort_order'];
		} else {
			$data['total_order_discount_sort_order'] = $this->config->get('total_order_discount_sort_order');
		}

		$data['heading_title'] = $this->language->get('heading_title');

		// $data['entry_total_order_discount_status'] = $this->language->get('entry_total_order_discount_status');
		// $data['entry_total_order_discount_base'] = $this->language->get('entry_total_order_discount_base');
		// $data['entry_total_order_discount_point'] = $this->language->get('entry_total_order_discount_point');
		// $data['entry_total_order_discount_type'] = $this->language->get('entry_total_order_discount_type');
		// $data['entry_total_order_discount_value'] = $this->language->get('entry_total_order_discount_value');
		// $data['entry_total_order_discount_sort_order'] = $this->language->get('entry_total_order_discount_sort_order');

		$data['text_total_order_discount_edit'] = $this->language->get('text_total_order_discount_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_total_order_discount_pct'] = $this->language->get('text_total_order_discount_pct');
		$data['text_total_order_discount_fix'] = $this->language->get('text_total_order_discount_fix');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/total/order_discount', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/total/order_discount')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
