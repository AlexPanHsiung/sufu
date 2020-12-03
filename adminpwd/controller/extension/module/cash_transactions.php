<?php
    class ControllerExtensionModuleCashTransactions extends Controller {
        private $error = array();

	    public function index() {
            $this->getList();
        }

        protected function validate() {

        }

        public function install() {
            $this->load->model('extension/module/cash_transactions');
            $this->model_extension_module_cash_transactions->install();
            //$this->load->model('setting/setting');
	        //$this->model_setting_setting->editSetting('module_CashTransactions', ['module_CashTransactions_status' => 1]);
        }

        public function uninstall() {

        }

        public function accept(){

            $this->load->language('extension/module/cash_transactions');

            if(isset($this->request->get['cash_transaction_id'])){
                $cash_transaction_id = $this->request->get['cash_transaction_id'];
            }else{
                //Todo $this->error['warning'] = $this->language->get('error_id');
                $this->response->redirect($this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'], true));
            }

            $this->load->model('extension/module/cash_transactions');

            $this->model_extension_module_cash_transactions->updataStatus($cash_transaction_id, "completed");

            $this->session->data['success'] = $this->language->get('text_success');
            

            
            $this->response->redirect($this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'], true));
        }

        public function cancel(){

            $this->load->language('extension/module/cash_transactions');

            if(isset($this->request->get['cash_transaction_id'])){
                $cash_transaction_id = $this->request->get['cash_transaction_id'];
            }else{
                //Todo $this->error['warning'] = $this->language->get('error_id');
                $this->response->redirect($this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'], true));
            }
            
            $this->load->model('extension/module/cash_transactions');
            $cash_transaction = $this->model_extension_module_cash_transactions->getTransactionById($cash_transaction_id);
            $this->model_extension_module_cash_transactions->updataStatus($cash_transaction_id, "canceled");

            $transaction_info = $this->model_extension_module_cash_transactions->getCustomerTransactionById($cash_transaction['customer_transaction_id']);
            

            $this->load->model('customer/customer');
            //$transaction_info = $this->model_customer_customer->getTransactionById($cash_transaction['customer_transaction_id']);
            $description = "申請編號 #" . $cash_transaction_id . " " . $this->language->get('description_cancel');
            $this->model_customer_customer->addTransaction($cash_transaction['customer_id'], $description, -$transaction_info['amount'], 0);


            $this->session->data['success'] = $this->language->get('text_success');
            
            $this->response->redirect($this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'], true));
        }

        public function customNotification(){

            

            $data['header'] = $this->load->controller('common/header');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['footer'] = $this->load->controller('common/footer');

        }
        
        protected function mail_send($route, $args, $output) {
            if (isset($args[0])) {
                $customer_id = $args[0];
            } else {
                $customer_id = '';
            }
            
            if (isset($args[1])) {
                $description = $args[1];
            } else {
                $description = '';
            }		
            
            if (isset($args[2])) {
                $amount = $args[2];
            } else {
                $amount = '';
            }
            
            if (isset($args[3])) {
                $order_id = $args[3];
            } else {
                $order_id = '';
            }
                
            $this->load->model('customer/customer');
                            
            $customer_info = $this->model_customer_customer->getCustomer($customer_id);
    
            if ($customer_info) {
                $this->load->language('mail/transaction');
    
                $this->load->model('setting/store');
    
                $store_info = $this->model_setting_store->getStore($customer_info['store_id']);
    
                if ($store_info) {
                    $store_name = $store_info['name'];
                } else {
                    $store_name = $this->config->get('config_name');
                }
    
                $data['text_received'] = sprintf($this->language->get('text_received'), $this->currency->format($amount, $this->config->get('config_currency')));
                $data['text_total'] = sprintf($this->language->get('text_total'), $this->currency->format($this->model_customer_customer->getTransactionTotal($customer_id), $this->config->get('config_currency')));
                
                $mail = new Mail($this->config->get('config_mail_engine'));
                $mail->parameter = $this->config->get('config_mail_parameter');
                $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
                $mail->smtp_port = $this->config->get('config_mail_smtp_port');
                $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
    
                $mail->setTo($customer_info['email']);
                $mail->setFrom($this->config->get('config_email'));
                $mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
                $mail->setSubject(sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8')));
                $mail->setText($this->load->view('mail/transaction', $data));
                $mail->send();
            }
        }	
        

        protected function getList(){
            $this->load->language('extension/module/cash_transactions');

            $data['user_token'] = $this->session->data['user_token'];

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

            if (isset($this->request->get['filter_cash_transaction_id'])) {
                $filter_cash_transaction_id = $this->request->get['filter_cash_transaction_id'];
            } else {
                $filter_cash_transaction_id = '';
            }
    
            if (isset($this->request->get['filter_customer'])) {
                $filter_customer = $this->request->get['filter_customer'];
            } else {
                $filter_customer = '';
            }
    
            if (isset($this->request->get['filter_status'])) {
                $filter_status = $this->request->get['filter_status'];
            } else {
                $filter_status = '';
            }
            
            if (isset($this->request->get['filter_total'])) {
                $filter_total = $this->request->get['filter_total'];
            } else {
                $filter_total = '';
            }
    
            if (isset($this->request->get['filter_date_added'])) {
                $filter_date_added = $this->request->get['filter_date_added'];
            } else {
                $filter_date_added = '';
            }
    
            if (isset($this->request->get['filter_date_modified'])) {
                $filter_date_modified = $this->request->get['filter_date_modified'];
            } else {
                $filter_date_modified = '';
            }
    
            if (isset($this->request->get['sort'])) {
                $sort = $this->request->get['sort'];
            } else {
                $sort = 'cash.cash_transaction_id';
            }
    
            if (isset($this->request->get['order'])) {
                $order = $this->request->get['order'];
            } else {
                $order = 'DESC';
            }

            if (isset($this->request->get['page'])) {
                $page = $this->request->get['page'];
            } else {
                $page = 1;
            }

            $url = '';

            if (isset($this->request->get['filter_cash_transaction_id'])) {
                $url .= '&filter_cash_transaction_id=' . $this->request->get['filter_cash_transaction_id'];
            }

            if (isset($this->request->get['filter_customer'])) {
                $url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            if (isset($this->request->get['filter_total'])) {
                $url .= '&filter_total=' . $this->request->get['filter_total'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
            }

            if (isset($this->request->get['filter_date_modified'])) {
                $url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
            }

            if ($order == 'ASC') {
                $url .= '&order=DESC';
            } else {
                $url .= '&order=ASC';
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $data['sort_cash_transaction'] = $this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'] . '&sort=cash.cash_transaction_id' . $url, true);
            $data['sort_customer'] = $this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'] . '&sort=customer' . $url, true);
            $data['sort_status'] = $this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'] . '&sort=cash.status' . $url, true);
            $data['sort_total'] = $this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'] . '&sort=t.amount' . $url, true);
            $data['sort_date_added'] = $this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'] . '&sort=cash.date_added' . $url, true);
            $data['sort_date_modified'] = $this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'] . '&sort=cash.date_modified' . $url, true);


            $url = '';

            if (isset($this->request->get['filter_cash_transaction_id'])) {
                $url .= '&filter_cash_transaction_id=' . $this->request->get['filter_cash_transaction_id'];
            }

            if (isset($this->request->get['filter_customer'])) {
                $url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }
                
            if (isset($this->request->get['filter_total'])) {
                $url .= '&filter_total=' . $this->request->get['filter_total'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
            }

            if (isset($this->request->get['filter_date_modified'])) {
                $url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            /*
            $filter_data = array(
                'filter_order_id'        => $filter_order_id,
                'filter_customer'	     => $filter_customer,
                'filter_order_status'    => $filter_order_status,
                'filter_order_status_id' => $filter_order_status_id,
                'filter_total'           => $filter_total,
                'filter_date_added'      => $filter_date_added,
                'filter_date_modified'   => $filter_date_modified,
                'sort'                   => $sort,
                'order'                  => $order,
                'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
                'limit'                  => $this->config->get('config_limit_admin')
            );
            */

            $filter_data = array(
                'filter_cash_transaction_id' => $filter_cash_transaction_id,
                'filter_customer'	         => $filter_customer,
                'filter_status'              => $filter_status,
                'filter_total'               => $filter_total,
                'filter_date_added'          => $filter_date_added,
                'filter_date_modified'       => $filter_date_modified,
                'sort'                       => $sort,
                'order'                      => $order,
                'start'                      => ($page - 1) * $this->config->get('config_limit_admin'),
                'limit'                      => $this->config->get('config_limit_admin')
            );

            $this->load->model('extension/module/cash_transactions');

            $transactions =  $this->model_extension_module_cash_transactions->getTransactions($filter_data);

            $transactions_total = $this->model_extension_module_cash_transactions->getTotalTransactions($filter_data);

            $pagination = new Pagination();
            $pagination->total = $transactions_total;
            $pagination->page = $page;
            $pagination->limit = $this->config->get('config_limit_admin');
            $pagination->url = $this->url->link('extension/module/cash_transactions', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

            $data['pagination'] = $pagination->render();

		    $data['results'] = sprintf($this->language->get('text_pagination'), ($transactions_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($transactions_total - $this->config->get('config_limit_admin'))) ? $transactions_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $transactions_total, ceil($transactions_total / $this->config->get('config_limit_admin')));


            $data['sort'] = $sort;
		    $data['order'] = $order;

            $this->load->model('customer/customer');

            $data['cash_statuses'] = $this->getStatuses();

            //print_r($transactions);

            foreach($transactions as $transaction){
                
                $affiliate = $this->model_customer_customer->getAffiliate($transaction['customer_id']);

                $total = abs($transaction['amount']);

                if($affiliate['bank_account_number']){
                    $bank_account = $affiliate['bank_account_number'];
                }else{
                    $bank_account = 'N/A';
                }


                if($transaction['status'] == 'pendding'){
                    $text_status = $this->language->get('text_pendding');
                }elseif($transaction['status'] == 'completed'){
                    $text_status = $this->language->get('text_completed');
                }elseif($transaction['status'] == 'canceled'){
                    $text_status = $this->language->get('text_canceled');
                }else{
                    $text_status = $this->language->get('text_unknow');
                }

                
                $url = '';

                if(!empty($transaction['customer_id'])){
                    $url .= '&customer_id=' . $transaction['customer_id'];
                }else{
                    
                }          
                $customer_link = $this->url->link('customer/customer/edit', 'user_token=' . $this->session->data['user_token'] . $url, true);

                $url = '';

                if(!empty($transaction['cash_transaction_id'])){
                    $url .= '&cash_transaction_id=' . $transaction['cash_transaction_id'];
                }else{

                }

                $accept_link = $this->url->link('extension/module/cash_transactions/accept', 'user_token=' . $this->session->data['user_token'] . $url , true);
                $cancel_link = $this->url->link('extension/module/cash_transactions/cancel', 'user_token=' . $this->session->data['user_token'] . $url , true);


                $data['transactions'][] = array(
                    'cash_transaction_id' => (int)$transaction['cash_transaction_id'],
                    'customer_name'       => $transaction['customer'],
                    'customer_link'       => $customer_link,
                    'bank_account'        => $bank_account,
                    'status'              => $transaction['status'],
                    'text_status'         => $text_status,
                    'total'               => (int)$total,
                    'date_added'          => date($this->language->get('date_format_short'), strtotime($transaction['date_added'])),
                    'date_modified'       => date($this->language->get('date_format_short'), strtotime($transaction['date_modified'])),
                    'accept_link'         => $accept_link,
                    'cancel_link'         => $cancel_link
                );
            }

            $data['header'] = $this->load->controller('common/header');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['footer'] = $this->load->controller('common/footer');

            $data['heading_title'] = $this->language->get('heading_title');
            $data['column_transaction_id'] = $this->language->get('column_transaction_id');
            $data['column_account'] = $this->language->get('column_account');


            $this->response->setOutput($this->load->view('extension/module/cash_transactions', $data));
        }

        protected function getStatuses(){
            $this->load->language('extension/module/cash_transactions');
            return array(
                array(
                    'id'        => 'pendding',
                    'text'      => $this->language->get('text_pendding')
                ),
                array(
                    'id'        => 'completed',
                    'text'      => $this->language->get('text_completed')
                ),
                array(
                    'id'        => 'canceled',
                    'text'      => $this->language->get('text_canceled')
                )
            );
        }


    }
