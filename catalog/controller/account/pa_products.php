<?php
/**
 * Webkul Software.
 * @category  Webkul
 * @author    Webkul
 * @copyright Copyright (c) 2010-2016 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
// CONSTANT defined for the genral used module code variable
define("_MODULE_STATUS_CODE", "wk_pricealert_status");
// CONSTANT defined for the genral used module file path variable
define("_FILE_PATH", "account/pa_prdocuts");
// CONSTANT defined for the genral used module model load variable
define("_MODEL_LOAD_PATH", "model_account_pa_prdocuts");
//class
class ControllerAccountPaProducts extends Controller {
  private $error = array();
  //data variable is used as data_helper just fancy nothing special meaning
  private $data_helper = array();
  // __constructer
  public function __construct($registory) {
    parent::__construct($registory);
    $this->data_helper = $this->load->language(_FILE_PATH);
    //load module model for the creating/doping table and managing sql
    $this->load->model(_FILE_PATH);
    // set a object for using model funtions
    $this->helper_pricealert = $this->{_MODEL_LOAD_PATH};
    // set the regisrtry to avail by whole class functions
    $this->registry->set('prolert', new Productalert($this->registry));
  }

  public function index(){

    if (!$this->customer->isLogged() || !$this->config->get(_MODULE_STATUS_CODE)) {
      $this->session->data['redirect'] = $this->url->link('account/wk_pricealert', '', true);
      $this->response->redirect($this->url->link('account/login', '', true));
    }

    $this->document->setTitle($this->data_helper['heading_title']);

    if (isset($this->request->get['filter_name'])) {
      $filter_name = $this->request->get['filter_name'];
    } else {
      $filter_name = null;
    }

    if (isset($this->request->get['filter_price'])) {
      $filter_price = $this->request->get['filter_price'];
    } else {
      $filter_price = null;
    }

    if (isset($this->request->get['filter_status'])) {
      $filter_status = $this->request->get['filter_status'];
    } else {
      $filter_status = null;
    }

    if (isset($this->request->get['sort'])) {
      $sort = $this->request->get['sort'];
    } else {
      $sort = 'pd.name';
    }

    if (isset($this->request->get['order'])) {
      $order = $this->request->get['order'];
    } else {
      $order = 'ASC';
    }

    if (isset($this->request->get['page'])) {
      $page = $this->request->get['page'];
    } else {
      $page = 1;
    }

    $url = '';

    if (isset($this->request->get['filter_name'])) {
      $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
    }

    if (isset($this->request->get['filter_price'])) {
      $url .= '&filter_price=' . $this->request->get['filter_price'];
    }

    if (isset($this->request->get['filter_status'])) {
      $url .= '&filter_status=' . $this->request->get['filter_status'];
    }

    if (isset($this->request->get['sort'])) {
      $url .= '&sort=' . $this->request->get['sort'];
    }

    if (isset($this->request->get['order'])) {
      $url .= '&order=' . $this->request->get['order'];
    }

    if (isset($this->request->get['page'])) {
      $url .= '&page=' . $this->request->get['page'];
    }

    $this->data_helper['breadcrumbs'] = array();

    $this->data_helper['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('common/home', '', true)
    );

    $this->data_helper['breadcrumbs'][] = array(
      'text' => $this->language->get('text_account'),
      'href' => $this->url->link('account/account', '', true)
    );

    $this->data_helper['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->url->link(_FILE_PATH, '' . $url, true)
    );

    // $this->data_helper['add'] = $this->url->link(_FILE_PATH.'/add', '' . $url, true);
    $this->data_helper['back'] = $this->url->link('account/account', '' . $url, true);
    $this->data_helper['delete'] = $this->url->link(_FILE_PATH.'/delete', '' . $url, true);

    $this->data_helper['requests'] = array();

    $filter_data = array(
      'filter_name'	  => $filter_name,
      'filter_price'	  => $filter_price,
      'filter_status'   => $filter_status,
      'sort'            => $sort,
      'order'           => $order,
      'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
      'limit'           => $this->config->get('config_limit_admin')
    );

    $this->load->model('tool/image');

    $product_total = $this->helper_pricealert->getTotalProducts($filter_data);

    $results = $this->helper_pricealert->getProducts($filter_data);

    foreach ($results as $result) {
      if (is_file(DIR_IMAGE . $result['image'])) {
        $image = $this->model_tool_image->resize($result['image'], 40, 40);
      } else {
        $image = $this->model_tool_image->resize('no_image.png', 40, 40);
      }

      $special = false;

      $product_specials = $this->helper_pricealert->getProductSpecials($result['product_id']);

      foreach ($product_specials  as $product_special) {
        if (($product_special['date_start'] == '0000-00-00' || strtotime($product_special['date_start']) < time()) && ($product_special['date_end'] == '0000-00-00' || strtotime($product_special['date_end']) > time())) {
          $special = $product_special['price'];
          break;
        }
      }

      $this->data_helper['requests'][] = array(
        'quote_id'     => $result['quote_id'],
        'product_id'   => $result['product_id'],
        'customer_id'  => $result['customer_id'],
        'image'        => $image,
        'name'         => $result['name'],
        'price'        => $result['price'],
        'customer'     => $result['customer_name'],
        'email'        => $result['customer_email'],
        'special'      => $special,
        'currency'     => $result['currency'],
        'date_added'   => $result['date_added'],
        'requests'     => $result['requests'],
        'vendor_id'    => $result['vendor_id'],
        'alert_status' => $result['status'],
        'responded'    => $result['responded'],
        'accept'       => $result['accept'] ,
        'reject'       => $result['reject'],
        'coupon_id'    => $result['coupon_id'],
        'options'      => json_decode($result['product_option'],true),
        'quote_price'  => $result['quote_price'],
        'status'       => $result['pro_status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
        'view'         => $this->url->link(_FILE_PATH.'/view', '' .'&quote_id='. (int)$result['quote_id'] .$url, true),
      );
    }

    if (isset($this->error['warning'])) {
      $this->data_helper['error_warning'] = $this->error['warning'];
    } else {
      $this->data_helper['error_warning'] = '';
    }

    if (isset($this->session->data['success'])) {
      $this->data_helper['success'] = $this->session->data['success'];

      unset($this->session->data['success']);
    } else {
      $this->data_helper['success'] = '';
    }

    if (isset($this->request->post['selected'])) {
      $this->data_helper['selected'] = (array)$this->request->post['selected'];
    } else {
      $this->data_helper['selected'] = array();
    }

    $url = '';

    if (isset($this->request->get['filter_name'])) {
      $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
    }

    if (isset($this->request->get['filter_price'])) {
      $url .= '&filter_price=' . $this->request->get['filter_price'];
    }

   if (isset($this->request->get['filter_status'])) {
      $url .= '&filter_status=' . $this->request->get['filter_status'];
    }

    if ($order == 'ASC') {
      $url .= '&order=DESC';
    } else {
      $url .= '&order=ASC';
    }

    if (isset($this->request->get['page'])) {
      $url .= '&page=' . $this->request->get['page'];
    }

    $this->data_helper['sort_name'] = $this->url->link(_FILE_PATH, '' . '&sort=pd.name' . $url, true);
    $this->data_helper['sort_price'] = $this->url->link(_FILE_PATH, '' . '&sort=p.price' . $url, true);
    $this->data_helper['sort_status'] = $this->url->link(_FILE_PATH, '' . '&sort=p.status' . $url, true);
    $this->data_helper['sort_order'] = $this->url->link(_FILE_PATH, '' . '&sort=p.sort_order' . $url, true);

    $url = '';

    if (isset($this->request->get['filter_name'])) {
      $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
    }

    if (isset($this->request->get['filter_price'])) {
      $url .= '&filter_price=' . $this->request->get['filter_price'];
    }

    if (isset($this->request->get['filter_status'])) {
      $url .= '&filter_status=' . $this->request->get['filter_status'];
    }

    if (isset($this->request->get['sort'])) {
      $url .= '&sort=' . $this->request->get['sort'];
    }

    if (isset($this->request->get['order'])) {
      $url .= '&order=' . $this->request->get['order'];
    }

    $pagination = new Pagination();
    $pagination->total = $product_total;
    $pagination->page = $page;
    $pagination->limit = $this->config->get('config_limit_admin');
    $pagination->url = $this->url->link(_FILE_PATH, '' . $url . '&page={page}', true);

    $this->data_helper['pagination'] = $pagination->render();

    $this->data_helper['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($product_total - $this->config->get('config_limit_admin'))) ? $product_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $product_total, ceil($product_total / $this->config->get('config_limit_admin')));

    $this->data_helper['filter_name'] = $filter_name;
    $this->data_helper['filter_price'] = $filter_price;
    $this->data_helper['filter_status'] = $filter_status;

    $this->data_helper['sort'] = $sort;
    $this->data_helper['order'] = $order;

    $this->_loadCommonControllers();

    $this->response->setOutput($this->load->view(_FILE_PATH.'_list', $this->data_helper));
  }
}
 ?>
