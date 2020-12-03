<?php
class ControllerExtensionRestapiAccountProfile extends Controller {

    private $error = array();

	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('extension/restapi/account/address', '', true);
			return new Action('extension/restapi/account/login');
		}

		$this->load->language('account/address');

		$this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('account/address');
        
		$this->getDetails();
    }
    
    protected function getDetails() {
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('extension/restapi/common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_account'),
            'href' => $this->url->link('extension/restapi/account/account', '', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/restapi/account/address', '', true)
        );

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

        $customer_id = $this->customer->getId();


        $data['firstname'] = $this->customer->getFirstName();
        $data['lastname'] = $this->customer->getLastName();
        $data['email'] = $this->customer->getEmail();
        $data['telephone'] = $this->customer->getTelephone();
        $data['balance'] = $this->customer->getBalance() == null ? 0 : $this->customer->getBalance();

        $this->load->model('account/customer');

        $affiliate_info = $this->model_account_customer->getAffiliate($customer_id);

        if (!empty($affiliate_info)) {
			$data['company'] = $affiliate_info['company'];
		} else {
			$data['company'] = '';
		}
		
		if (!empty($affiliate_info)) {
			$data['website'] = $affiliate_info['website'];
		} else {
			$data['website'] = '';
		}
				
		if (!empty($affiliate_info)) {
			$data['tax'] = $affiliate_info['tax'];
		} else {
			$data['tax'] = '';
		}

		if (!empty($affiliate_info)) {
			//$data['payment'] = $affiliate_info['payment'];
			$data['payment'] = 'bank';
		} else {
			$data['payment'] = 'bank';
		}

		if (!empty($affiliate_info)) {
			$data['cheque'] = $affiliate_info['cheque'];
		} else {
			$data['cheque'] = '';
		}

		if (!empty($affiliate_info)) {
			$data['paypal'] = $affiliate_info['paypal'];
		} else {
			$data['paypal'] = '';
		}

		if (!empty($affiliate_info)) {
			$data['bank_name'] = $affiliate_info['bank_name'];
		} else {
			$data['bank_name'] = '';
		}

		if (!empty($affiliate_info)) {
			$data['bank_branch_number'] = $affiliate_info['bank_branch_number'];
		} else {
			$data['bank_branch_number'] = '';
		}

		if (!empty($affiliate_info)) {
			$data['bank_swift_code'] = $affiliate_info['bank_swift_code'];
		} else {
			$data['bank_swift_code'] = '';
		}

		if (!empty($affiliate_info)) {
			$data['bank_account_name'] = $affiliate_info['bank_account_name'];
		} else {
			$data['bank_account_name'] = '';
		}

		if (!empty($affiliate_info)) {
			$data['bank_account_number'] = $affiliate_info['bank_account_number'];
		} else {
			$data['bank_account_number'] = '';
		}

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            $this->response->addHeader("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            $this->response->addHeader('Access-Control-Allow-Credentials: ' . 'true');
            $this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
            $this->response->addHeader('Access-Control-Max-Age: 1000');
            $this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
            }
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($data));
        }

    protected function getList() {
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('extension/restapi/common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_account'),
            'href' => $this->url->link('extension/restapi/account/account', '', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/restapi/account/address', '', true)
        );

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

        $data['addresses'] = array();

        $results = $this->model_account_address->getAddresses();

        foreach ($results as $result) {
            if ($result['address_format']) {
                $format = $result['address_format'];
            } else {
                $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
            }

            $find = array(
                '{firstname}',
                '{lastname}',
                '{company}',
                '{address_1}',
                '{address_2}',
                '{city}',
                '{postcode}',
                '{zone}',
                '{zone_code}',
                '{country}'
            );

            $replace = array(
                'firstname' => $result['firstname'],
                'lastname'  => $result['lastname'],
                'company'   => $result['company'],
                'address_1' => $result['address_1'],
                'address_2' => $result['address_2'],
                'city'      => $result['city'],
                'postcode'  => $result['postcode'],
                'zone'      => $result['zone'],
                'zone_code' => $result['zone_code'],
                'country'   => $result['country']
            );

            $data['addresses'][] = array(
                'address_id' => $result['address_id'],
                'address'    => str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format)))),
                'update'     => $this->url->link('extension/restapi/account/address/edit', 'address_id=' . $result['address_id'], true),
                'delete'     => $this->url->link('extension/restapi/account/address/delete', 'address_id=' . $result['address_id'], true)
            );
        }

        $data['add'] = $this->url->link('extension/restapi/account/address/add', '', true);
        $data['back'] = $this->url->link('extension/restapi/account/account', '', true);

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            $this->response->addHeader("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            $this->response->addHeader('Access-Control-Allow-Credentials: ' . 'true');
            $this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
            $this->response->addHeader('Access-Control-Max-Age: 1000');
            $this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($data));
    }
}

