<?php
    class ControllerExtensionModuleCashTransactions extends Controller {
        private $error = array();

	    public function index() {

            if (!$this->customer->isLogged()) {
                $this->session->data['redirect'] = $this->url->link('account/transaction', '', true);
    
                $this->response->redirect($this->url->link('account/login', '', true));
            }

            $this->load->language('extension/module/cash_transactions');

            /*
            $data['header'] = $this->load->controller('common/header');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['footer'] = $this->load->controller('common/footer');

            $data['heading_title'] = $this->language->get('heading_title');
            $data['column_transaction_id'] = $this->language->get('column_transaction_id');
            $data['column_account'] = $this->language->get('column_account');
            */


            if(!empty($this->request->post['cash'])){
                $data['cash'] = $this->request->post['cash'];

                $customer_id = $this->customer->getId();
                $description = $this->language->get("description_new");


                //print_r($this->customer->getId());

                $this->add($data['cash'], $customer_id, $description);
            }

            //echo $this->language->get("description_new");

            $data['danger'] = "請輸入申請金額";
            $data['danger_class'] = "text-danger";

            //$this->response->redirect($this->url->link('account/transaction', ''));

            //$this->response->setOutput($this->load->view('extension/module/cash_transactions', $data));
        }

        private function add($cash = 0, $customer_id, $description = ''){
            $this->load->model('account/customer');
            $this->load->model('account/transaction');
            $this->load->model('extension/module/cash_transactions');
            
            //print_r($this->model_account_customer->getTransactionTotal($customer_id));
            
            $blance = floor($this->model_account_customer->getTransactionTotal($customer_id));





            $data['continue'] = $this->url->link('account/account', '', true);

            if(($blance - $cash) >= 0){
                $customer_transaction_id = $this->model_account_customer->addTransaction($customer_id, $description, -abs($cash), 0);

                $cash_transaction_id = $this->model_extension_module_cash_transactions->add($customer_id, $customer_transaction_id, $description);

                $description = "申請編號 #" . $cash_transaction_id . " " . $description;
                $this->model_extension_module_cash_transactions->updateTransactionDescription($customer_transaction_id, $description);
                
                $data['success'] = "申請成功，代核准完成便能入帳。";
                $data['text-success'] = "text-success";

                $this->response->redirect($this->url->link('account/transaction', ''));
            }else{
                $data['danger'] = "餘額不足";
                $data['danger_class'] = "text-danger";
                //$this->response->setOutput();
                $this->response->redirect($this->url->link('account/transaction', ''));
            }
        }

    }