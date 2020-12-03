<?php

class ControllerExtensionModuleMtaDownline extends Controller {
	public function index() {
		if(!$this->config->get('mta_ypx_downline')) $this->response->redirect($this->url->link('account/account', '', true));
		$aff_id = $this->customer->isLogged();
		if (!$aff_id) {
	  		$this->session->data['redirect'] = $this->url->link('extension/module/mta/downline', '', true);	  
	  		$this->response->redirect($this->url->link('affiliate/login', '', true));
	    	}
		$data['affiliate_id'] = $aff_id;
		$this->load->language('extension/mta/downline');
		
		$data['show'] = array();
		foreach(array('email', 'phone', 'earnings') as $_v) {
			$data['show'][$_v] = $this->config->get('mta_ypx_downline_' . $_v);
		}
		$data['image_loading'] = file_exists('catalog/view/theme/' . $this->config->get('config_template') . '/image/loading.gif') ? 'catalog/view/theme/' . $this->config->get('config_template') . '/image/loading.gif' : 'catalog/view/theme/default/image/loading.gif';
	    	$this->document->setTitle($this->language->get('heading_title'));
			
		$this->load->model('extension/mta/downline');		
		
		$data['top_count'] = $this->model_extension_mta_downline->countSubs($aff_id);		
		
/////////////////////////////////////////

      	$data['breadcrumbs'] = array();

      	$data['breadcrumbs'][] = array(
        	'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home'),
        	'separator' => false
      	); 

      	$data['breadcrumbs'][] = array(       	
        	'text'      => $this->language->get('text_account'),
			'href'      => $this->url->link('account/account', '', true),
        	'separator' => $this->language->get('text_separator')
      	);

      	$data['breadcrumbs'][] = array(       	
        	'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/module/mta/downline', '', true),
        	'separator' => $this->language->get('text_separator')
      	);
		

		$data['button_continue'] = $this->language->get('button_continue');		
		$data['continue'] = $this->url->link('account/account', '', true);		

///////////////////////////////
		if (file_exists('catalog/view/theme/' . $this->config->get('config_template') . '/stylesheet/affiliate_downline.css')) {
			$this->document->addStyle('catalog/view/theme/' . $this->config->get('config_template') . '/stylesheet/affiliate_downline.css');
		} else {
			$this->document->addStyle('catalog/view/theme/default/stylesheet/affiliate_downline.css');
		}
		
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
				
		$this->response->setOutput($this->load->view('extension/module/mta/downline', $data));
	}	
	
	public function l() {

		$affiliate_id = isset($this->request->request['affiliate_id']) ? intval($this->request->request['affiliate_id']) : 0;	
		$self_id = $this->customer->isLogged();
		if (!$self_id || !$affiliate_id || !$this->config->get('mta_ypx_downline')) {
			$this->response->setOutput('');
			return;
    	}	
		$limit = $this->config->get('mta_ypx_downline_limit');
		if($limit) {
			$this->load->model('extension/mta/mta_affiliate');
			$self_aff = $this->model_extension_mta_mta_affiliate->getAffiliate($self_id);
			$max_level = intval($self_aff['level_original']) + intval($limit);
		} else {
			$max_level = false;
		}

		$this->load->model('extension/mta/downline');
		if(!$this->model_extension_mta_downline->canSee(strval($self_id), $affiliate_id, $max_level)) {
			$this->response->setOutput('');
			return;
    	}	
		$res = $this->model_extension_mta_downline->loadSubs($affiliate_id, $max_level);		
		$out = array();
		foreach($res as $v) {				
			if($this->config->get('mta_ypx_downline_earnings')) {
				$v['e_te'] = $this->currency->format(($v['e_te'] ? $v['e_te'] : 0), $this->config->get('config_currency'));				
				$v['e_elm'] = $this->currency->format(($v['e_elm'] ? $v['e_elm'] : 0), $this->config->get('config_currency'));
			}
			$v['name'] = trim($v['name']);
			$v['lastname'] = trim($v['lastname']);
			$v['firstname'] = trim($v['firstname']);
			$name_len = mb_strlen($v['name'], 'utf-8');
			$lastname_len = mb_strlen($v['lastname'], 'utf-8');
			$firstname_len = mb_strlen($v['firstname'], 'utf-8');
			if($name_len > 3){
				$v['name'] = mb_substr($v['lastname'], 0, 1, 'utf-8') . str_repeat('*', $lastname_len - 1) . ' ' . str_repeat('*', $firstname_len - 1) . mb_substr($v['firstname'], -1, 1, 'utf-8');
			}else if($name_len == 3){
				$v['name'] = mb_substr($v['name'], 0, 1, 'utf-8') . ' *';
			}
			//$v['name'] = mb_strlen($v['name'], 'utf-8');
			$out[] = $v;
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($out));
	}

}