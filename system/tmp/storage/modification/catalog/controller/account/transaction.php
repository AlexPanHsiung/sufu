<?php
class ControllerAccountTransaction extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/transaction', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/transaction');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['text_empty'] = $this->language->get('text_empty');
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
			'text' => $this->language->get('text_transaction'),
			'href' => $this->url->link('account/transaction', '', true)
		);

		$this->load->model('account/transaction');
		
		$data['column_amount'] = sprintf($this->language->get('column_amount'), $this->config->get('config_currency'));

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['transactions'] = array();

		$filter_data = array(
			'sort'  => 'date_added',
			'order' => 'DESC',
			'start' => ($page - 1) * 10,
			'limit' => 10
		);

		$transaction_total = $this->model_account_transaction->getTotalTransactions();

		$results = $this->model_account_transaction->getTransactions($filter_data);

		foreach ($results as $result) {
			$data['transactions'][] = array(
				'amount'      => $this->currency->format($result['amount'], $this->config->get('config_currency')),
				'description' => $result['description'],
				'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$pagination = new Pagination();
		$pagination->total = $transaction_total;
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('account/transaction', 'page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($transaction_total) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($transaction_total - 10)) ? $transaction_total : ((($page - 1) * 10) + 10), $transaction_total, ceil($transaction_total / 10));

		$data['total'] = $this->currency->format($this->customer->getBalance(), $this->session->data['currency']);


			
	//+mod by yp start
	if($this->config->get('mta_ypx_status')) {		
		$data['mta_status'] = true;
		$this->load->model('extension/mta/mta_affiliate');
		$this->load->language('extension/mta/mta');

		$data['total_earnings'] = $this->currency->format($this->model_extension_mta_mta_affiliate->getTotalEarnings(), $this->session->data['currency']);
		$limit = $this->config->get('mta_ypx_downline_limit');
		if($limit) {			
			$self_aff = $this->model_extension_mta_mta_affiliate->getAffiliate($this->customer->getId());
			$max_level = intval($self_aff['level_original']) + intval($limit);
		} else {
			$max_level = false;
		}
		
		$_sub_affs = $this->model_extension_mta_mta_affiliate->getSubAffiliates(((int)$this->customer->getId()), $max_level);
		if($_sub_affs) {
			$data['sub_affiliates'] = array();
			foreach($_sub_affs as $_i => $_num) {
				$data['sub_affiliates'][] = array('level' => ($_i + 1), 'num' => $_num);
			}
		} else {
			$data['sub_affiliates'] = false;
		}
		$data['show_downline'] = $this->config->get('mta_ypx_downline');
		$data['link_affiliate_downline'] = $this->url->link('extension/module/mta/downline', '', true);		
	} else {
		$data['mta_status'] = false;
	}		
	//+mod by yp end



				// cash transactions code starts here
				
				$data['cash_transaction_add'] = $this->url->link('extension/module/cash_transactions');
				
				// cash transactions code ends here

		$data['continue'] = $this->url->link('account/account', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/transaction', $data));
	}
}