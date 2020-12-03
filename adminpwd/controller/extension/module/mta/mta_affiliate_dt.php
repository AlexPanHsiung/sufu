<?php    
class ControllerExtensionModuleMtaMtaAffiliateDt extends Controller { 
	private $error = array();
  
 	public function index() {
		$pfx = isset($this->request->request['atype']) && preg_match("/^\w+$/", $this->request->request['atype']) ? $this->request->request['atype'] : '';
		$this->load->model('customer/customer');
		$this->load->model('extension/mta/mta_scheme');
		$r =& $this->request->request;
		
		if(isset($r['sSearch']) && utf8_strlen($r['sSearch']) > 0) {
			if(strpos($r['sSearch'], '@') === false) {
				$filter_name = $r['sSearch'];
			} else {
				$filter_email = $r['sSearch'];
			}
		}
		if(!isset($filter_name)) $filter_name = null;
		if(!isset($filter_email)) $filter_email = null;
		
		$filter_status = null;				
		$filter_approved = null;		
		$filter_date_added = null;		
		
		if(isset($r['iSortCol_0']) && mta_check_int($r['iSortCol_0'])) {
			$ckey = $r['mDataProp_' . $r['iSortCol_0']];
			$sorts = array('name', 'email', 'status', 'approved', 'date_added', 'level');
			if(in_array($ckey, $sorts)) {
				$sort = $ckey;
				if($sort == 'level') {
					$sort = 'mta_a.level_original';
				} else {
					if($sort != 'name') $sort = 'a.' . $sort;
				}
			}			
		} 
		if(!isset($sort)) $sort = 'name';		
		
		$order = isset($r['sSortDir_0']) && $r['sSortDir_0'] && strtolower($r['sSortDir_0']) != 'asc' ? 'DESC' : 'ASC';	
		
		$dta = array(
			'filter_name'       => $filter_name, 
			'filter_email'      => $filter_email, 
			'filter_status'     => $filter_status, 
			'filter_approved'   => $filter_approved, 
			'filter_date_added' => $filter_date_added,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => (isset($r['iDisplayStart']) && mta_check_int($r['iDisplayStart']) ? $r['iDisplayStart'] : 0),
			'limit'             => (isset($r['iDisplayLength']) && mta_check_int($r['iDisplayLength']) ? $r['iDisplayLength'] : 25),
		);
		if(isset($r['filter_ids'])) $dta['filter_ids'] = $r['filter_ids'];
		if(isset($r['ids'])) $dta['ids'] = $r['ids'];

		$out = array('sEcho' => (int) $r['sEcho'], 'aaData' => array());
		$out['iTotalRecords'] = (int) $this->model_customer_customer->getTotalAffiliates();

		$out['iTotalDisplayRecords'] = (int) $this->model_customer_customer->getTotalAffiliates($dta);

		$_s = $this->model_extension_mta_mta_scheme->getSchemes(array('fields' => array('mta_scheme_id as id', 'scheme_name as n')));

		$schemes = array();
		foreach($_s as $_s2) {
			$schemes[$_s2['id']] = $_s2['n'];
		}		
	
		$results = $this->model_customer_customer->getAffiliates($dta);

    foreach ($results as $result) {
			$result['affiliate_id'] = $result['customer_id'];
			$out['aaData'][] = array(
				'DT_RowId' => $pfx . 'affiliate_dt-' . $result['affiliate_id'],
				'DT_RowClass' => $pfx . 'affiliate_dt_row',			
				'id' => $result['affiliate_id'],
				'name'         => $result['name'],
				'email'        => $result['email'],
				'scheme'       => ($result['scheme_id'] && isset($schemes[$result['scheme_id']]) ? $schemes[$result['scheme_id']] :  $this->language->get('text_default')),				
				'level'        => $result['level'],
				'balance'      => $this->currency->format($result['balance'], $this->config->get('config_currency')),
				'date_added'   => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}						
		$this->response->addHeader('Content-Type: application/json');    	
    	$this->response->setOutput(json_encode($out));		
  	}
  

}

