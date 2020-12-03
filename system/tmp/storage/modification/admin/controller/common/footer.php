<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$data['text_version'] = sprintf($this->language->get('text_version'), VERSION);

                $data['text_version'] = '<a href="https://www.osec.tw/opencart.html" target=_blank>' . $data['text_version'] . ' 台灣優化版</a>';
            
		} else {
			$data['text_version'] = '';
		}
		
		return $this->load->view('common/footer', $data);
	}
}
