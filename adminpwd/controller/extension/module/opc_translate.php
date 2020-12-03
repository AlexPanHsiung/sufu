<?php
class ControllerExtensionModuleOpcTranslate extends Controller {
	private $error = array();

	public function index() {
		$data = $this->load->language('extension/module/opc_translate');

		if ($this->request->post) {
			$this->request->post = array_map('trim', $this->request->post);
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		$this->load->model('setting/store');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			$this->request->post['module_opc_translate_default_code'] = '<div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({pageLanguage: "en", layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, "google_translate_element");
			}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>';

			if (isset($this->request->post['module_opc_translate_custom_code_status']) && $this->request->post['module_opc_translate_custom_code_status'] && isset($this->request->post['module_opc_translate_custom_code']) && $this->request->post['module_opc_translate_custom_code']) {
				$this->request->post['module_opc_translate_default_code'] = $this->request->post['module_opc_translate_custom_code'];
			}

			$this->model_setting_setting->editSetting('module_opc_translate', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$opc_error = array(
			'warning',
		);

		foreach ($opc_error as $key => $value) {
			if (isset($this->error[$value])) {
				$data['error_'.$value] = $this->error[$value];
			} else {
				$data['error_'.$value] = '';
			}
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/opc_translate', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/opc_translate', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

    $opc_module_config = array(
			'status',
			'admin',
			'catalog',
			'admin_position',
			'catalog_position',
			'custom_code_status',
			'custom_code',
		);

    foreach ($opc_module_config as $key => $value) {
      if (isset($this->request->post['module_opc_translate_'.$value])) {
  			$data['module_opc_translate_'.$value] = $this->request->post['module_opc_translate_'.$value];
  		} else {
  			$data['module_opc_translate_'.$value] = $this->config->get('module_opc_translate_'.$value);
  		}
    }

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/opc_translate', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/opc_translate')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
