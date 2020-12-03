<?php
class ControllerAccountAccount extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/account');

		$this->document->setTitle($this->language->get('heading_title'));

                    /**
                    * Marketplace
                    */

                    $this->load->model('account/customerpartner');

                    $data['is_seller'] = 0;

                    $data['marketplace_seller_mode'] = 0;

                    if ($this->config->get('module_marketplace_status') && $this->model_account_customerpartner->chkIsPartner()) {

                        $data['is_seller'] = 1;

                        $data['action'] = $this->url->link('account/account', '', true);

                        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {

                            if (isset($this->request->post['marketplace_seller_mode']) && $this->request->post['marketplace_seller_mode']) {
                                $this->session->data['marketplace_seller_mode'] = $this->request->post['marketplace_seller_mode'];
                            } else {
                                $this->session->data['marketplace_seller_mode'] = 0;
                            }
                        }

                        if(isset($this->session->data['marketplace_seller_mode'])){
                            $data['marketplace_seller_mode'] = $this->session->data['marketplace_seller_mode'];
                        } else {
                            $data['marketplace_seller_mode'] = 1;
                            $this->session->data['marketplace_seller_mode'] = 1;
                        }

                        $this->load->language('extension/module/marketplace');

                        $data['text_mode_seller'] = $this->language->get('text_mode_seller');

                        $data['text_mode_customer'] = $this->language->get('text_mode_customer');

                        $this->document->addScript("https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js");

                        $this->document->addStyle("https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css");
                    }
                    /**
                    * Marketplace
                    */
                

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		} 
		
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		
		$data['credit_cards'] = array();
		
		$files = glob(DIR_APPLICATION . 'controller/extension/credit_card/*.php');
		
		foreach ($files as $file) {
			$code = basename($file, '.php');
			
			if ($this->config->get('payment_' . $code . '_status') && $this->config->get('payment_' . $code . '_card')) {
				$this->load->language('extension/credit_card/' . $code, 'extension');

				$data['credit_cards'][] = array(
					'name' => $this->language->get('extension')->get('heading_title'),
					'href' => $this->url->link('extension/credit_card/' . $code, '', true)
				);
			}
		}
		

        $this->load->model('account/wishlist');
        $total_wishlist_items = $this->model_account_wishlist->getTotalWishlist();
        $this->load->language('account/wishlist');
        $data['text_wishlist'] = sprintf($this->language->get('text_wishlist'),$total_wishlist_items);
            
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		
		if ($this->config->get('total_reward_status')) {
			$data['reward'] = $this->url->link('account/reward', '', true);
		} else {
			$data['reward'] = '';
		}		
		
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);
		
		$this->load->model('account/customer');
		
		$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());
		
		if (!$affiliate_info) {	
			$data['affiliate'] = $this->url->link('account/affiliate/add', '', true);
		} else {
			$data['affiliate'] = $this->url->link('account/affiliate/edit', '', true);


			//+mod by yp start
		if($this->config->get('mta_ypx_status')) {
			$data['mta_status'] = true;
			$this->load->language('extension/mta/mta');					
			$data['signup_link'] = $this->url->link('affiliate/register', 'tracking=' . $affiliate_info['tracking'], true);
			$data['show_downline'] = $this->config->get('mta_ypx_downline');
			$data['link_affiliate_downline'] = $this->url->link('extension/module/mta/downline', '', true);
		} else {
			$data['mta_status'] = false;
		}
		//+mod by yp end
			

		}
		
		if ($affiliate_info) {		
			$data['tracking'] = $this->url->link('account/tracking', '', true);
			$data['tracking_link'] = $this->url->link('common/home', 'tracking=' . $affiliate_info['tracking'], true);
		} else {
			$data['tracking'] = '';
		}
		
		$text_address = $this->language->get('text_address');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['text_address'] = $text_address;

		$this->response->setOutput($this->load->view('account/account', $data));
	}

	public function country() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}