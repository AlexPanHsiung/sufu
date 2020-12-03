<?php
    class ControllerExtensionModuleMarketingReferer extends Controller {
        public function index(){
            $this->load->model('setting/setting');
            //print_r($this->model_setting_setting->getSetting('marketing_referer_status'));
            // 參考 adminpwd/payment/free_checkout.php disable->enable方法
            $this->load->language('extension/module/marketing_referer');
            if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
                $this->model_setting_setting->editSetting('module_marketing_referer', $this->request->post);
                $this->session->data['success'] = $this->language->get('text_success');
    
                $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true));
            }
            if (isset($this->request->post['module_marketing_referer_status'])) {
                $data['module_marketing_referer_status'] = $this->request->post['module_marketing_referer_status'];
            } else {
                $data['module_marketing_referer_status'] = $this->config->get('module_marketing_referer_status');
            }

            $data['action'] = $this->url->link('extension/module/marketing_referer', 'user_token=' . $this->session->data['user_token'], true);

		    $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
            
            $data['header'] = $this->load->controller('common/header');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['footer'] = $this->load->controller('common/footer');
            $this->response->setOutput($this->load->view('extension/module/marketing_referer', $data));
        }

        public function install(){
            $this->load->model('extension/module/marketing_referer');
            $this->model_extension_module_marketing_referer->install();            
        }

        public function uninstall(){
            // $this->load->model('extension/module/marketing_referer');
            // $this->model_extension_module_marketing_referer->uninstall();
        }

        protected function validate() {
            if (!$this->user->hasPermission('modify', 'extension/module/marketing_referer')) {
                $this->error['warning'] = $this->language->get('error_permission');
            }
    
            return !$this->error;
        }
    }