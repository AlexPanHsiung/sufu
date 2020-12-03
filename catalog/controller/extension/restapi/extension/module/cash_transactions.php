<?php
class ControllerExtensionRestapiExtensionModuleCashTransactions extends Controller {
	public function index() {

    }

    public function getMessage(){
        $this->load->language('extension/module/cash_transactions');
        
        $this->validation();

        $data['button_submit'] = $this->language->get('app_button_submit');
        $data['button_cancel'] = $this->language->get('app_button_cancel');
        $data['button_continue'] = $this->language->get('app_button_continue');

        $data['message_title'] = $this->language->get('app_message_title');
        $data['message_text'] = $this->language->get('app_message_text');

        $data['message_success'] = $this->language->get('app_message_success');
        $data['message_failure'] = $this->language->get('app_message_failure');
        


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

    public function addCashTransaction(){

        $this->load->language('extension/module/cash_transactions');

        if(!empty($this->request->post['cash'])){
            $data['cash'] = $this->request->post['cash'];

            $customer_id = $this->customer->getId();
            $description = $this->language->get("description_new");


            //print_r($this->customer->getId());

            $this->add($data['cash'], $customer_id, $description);
        }


    }

    private function validation(){
        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('account/transaction', '', true);

            //Todo 回傳尚未登入訊息
            //$this->response->redirect($this->url->link('account/login', '', true));
        }
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

            $data['isSuccess'] = true;

            //$this->response->redirect($this->url->link('account/transaction', ''));
        }else{
            $data['danger'] = "餘額不足";
            $data['danger_class'] = "text-danger";
            //$this->response->setOutput();
            
            $data['isSuccess'] = false;
            //$this->response->redirect($this->url->link('account/transaction', ''));
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

}