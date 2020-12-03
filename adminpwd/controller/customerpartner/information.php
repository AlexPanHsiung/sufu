<?php
class ControllerCustomerpartnerInformation extends Controller {
	private $error = array();

	public function index() {
		$data = $this->load->language('customerpartner/information');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customerpartner/information');

		$this->load->model('customerpartner/partner');

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('customerpartner/information', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['informations'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$data['user_token'] = $this->session->data['user_token'];

		$data['partners'] = $this->model_customerpartner_partner->getCustomers();

		$information_total = $this->model_customerpartner_information->getTotalInformations();

		$results = $this->model_customerpartner_information->getInformations($filter_data);

		foreach ($results as $result) {
			$data['informations'][] = array(
				'seller_id' => $result['seller_id'],
				'information_id' => $result['information_id'],
				'name'        => $result['title'],
				'sort_order'  => $result['sort_order'],
				'status'  => $result['status'],
				'edit'        => $this->url->link('catalog/information/edit', 'user_token=' . $this->session->data['user_token'] . '&information_id=' . $result['information_id'] . '&mpcheck=1' . $url, true),
				'delete'      => $this->url->link('customerpartner/information/delete', 'user_token=' . $this->session->data['user_token'] . '&information_id=' . $result['information_id'] . $url, true)
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('customerpartner/information', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_sort_order'] = $this->url->link('customerpartner/information', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $information_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('customerpartner/information', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($information_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($information_total - $this->config->get('config_limit_admin'))) ? $information_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $information_total, ceil($information_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customerpartner/information_list', $data));
	}

	public function approve() {

	  $json = array();

	  if (isset($this->request->post['information_id']) && $this->request->post['information_id']) {

	    $this->load->model('customerpartner/information');

	    $this->load->language('customerpartner/information');

	    $this->model_customerpartner_information->updateInformationStatus($this->request->post['information_id']);

	    $json['success'] = $this->language->get('text_approve_success');
	  }

	  $this->response->setOutput(json_encode($json));
	}

	public function changeSeller() {

	  $json = array();

	  if (isset($this->request->post['information_id']) && $this->request->post['information_id'] && isset($this->request->post['seller_id'])) {

			if ($this->request->post['seller_id']) {
				$seller_id = $this->request->post['seller_id'];
			} else {
				$seller_id = 0;
			}

	    $this->load->model('customerpartner/information');

	    $this->load->language('customerpartner/information');

	    $this->model_customerpartner_information->updateInformationSeller($this->request->post['information_id'], $seller_id);

	    $json['success'] = $this->language->get('text_seller_success');
	  }

	  $this->response->setOutput(json_encode($json));
	}
}
