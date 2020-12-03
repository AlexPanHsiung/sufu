<?php
class ControllerExtensionRestapiModuleMstoreapp extends Controller {
	public function index() {

		$this->load->model('extension/mstoreapp/blocks');

		$this->load->model('tool/image');

		if(isset($this->request->get['id'])){
			$id = $this->request->get['id'];
		} else $id = 0;

		$results = array();
			
		$results['blocks'] = $this->model_extension_mstoreapp_blocks->getBlocks($id);

		usort($results['blocks'], function($a, $b) {
            return $a['sort_order'] - $b['sort_order'];
        });
		/*foreach ($results['blocks'] as $key => $value) {

			if ($results['blocks'][$key]['image_url'] != '' && $results['blocks'][$key]['width'] != 0 && $results['blocks'][$key]['height'] != 0)
			$results['blocks'][$key]['image'] = $this->model_tool_image->resize($results['blocks'][$key]['image_url'], $results['blocks'][$key]['width'], $results['blocks'][$key]['height']);
			$results['blocks'][$key]['children'] = $this->getChildren($value['id']);

		}*/
		foreach ($results['blocks'] as $key => $value) {

			if($results['blocks'][$key]['width'] != 0) {
				$width = $results['blocks'][$key]['width'];
			} else $width = 100;

			if($results['blocks'][$key]['height'] != 0) {
				$height = $results['blocks'][$key]['height'];
			} else $height = 100;

			if ($results['blocks'][$key]['image_url'] != '')
				$results['blocks'][$key]['image'] = $this->model_tool_image->resize($results['blocks'][$key]['image_url'], $width, $height);
				$results['blocks'][$key]['children'] = $this->getChildren($value['id']);
			if($results['blocks'][$key]['block_type'] == 'product_block')
				$results['blocks'][$key]['products'] = $this->get_products($value['link_id']);

		}

		$results['settings'] = $this->get_settings();

		$results['dimensions'] = array(
			'imageHeight' => $results['settings']['mstoreapp_imageHeight'],
			'productSliderWidth' => $results['settings']['mstoreapp_productSliderWidth'], 
			'latestPerRow' => $results['settings']['mstoreapp_latestPerRow'], 
			'productsPerRow' => $results['settings']['mstoreapp_productsPerRow'], 
			'searchPerRow' => $results['settings']['mstoreapp_searchPerRow'],
			'productBorderRadius' => $results['settings']['mstoreapp_productBorderRadius'],
			'productPadding' => $results['settings']['mstoreapp_productPadding']
		);

		$results['theme'] = array(
			'tabBar' => $results['settings']['mstoreapp_themetabBar'],
			'header' => $results['settings']['mstoreapp_themeHeader'], 
			'button' => $results['settings']['mstoreapp_themeButton']
		);

		$results['categories'] = $this->get_categories();

		$results['products'] = $this->get_products(0);

		$results['local'] = $this->load->controller('extension/restapi/common/local');
		$results['language'] = $this->load->controller('extension/restapi/common/language');
		$results['currency'] = $this->load->controller('extension/restapi/common/currency');
		$results['isLoggedIn'] = $this->customer->isLogged();

		$this->load->model('catalog/information');

		$results['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$results['informations'][] = array(
					'id' => $result['information_id'],
					'title' => $result['title'],
					'href'  => $this->url->link('extension/restapi/information/information/agree', 'information_id=' . $result['information_id'])
				);
			}
		}

		if (isset($_SERVER['HTTP_ORIGIN'])) {
			$this->response->addHeader("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
			$this->response->addHeader('Access-Control-Allow-Credentials: ' . 'true');
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($results));

	}

	public function getChildren($id){

		$this->load->model('extension/mstoreapp/blocks');

		$this->load->model('tool/image');
		
		$children_data = $this->model_extension_mstoreapp_blocks->getBlocks($id);

		usort($children_data, function($a, $b) {
            return $a['sort_order'] - $b['sort_order'];
        });

		if (!empty($children_data)) {
			
			/*foreach ($children_data as $key => $value) {

			if ($children_data[$key]['image_url'] != '' && $children_data[$key]['width'] != 0 && $children_data[$key]['height'] != 0)
			$children_data[$key]['image'] = $this->model_tool_image->resize($children_data[$key]['image_url'], $children_data[$key]['width'], $children_data[$key]['height']);
			$children_data[$key]['children'] = $this->getChildren($value['id']);
			
			}*/

			foreach ($children_data as $key => $value) {

				if($children_data[$key]['width'] != 0) {
					$width = $children_data[$key]['width'];
				} else $width = 100;

				if($children_data[$key]['height'] != 0) {
					$height = $children_data[$key]['height'];
				} else $height = 100;

				if ($children_data[$key]['image_url'] != '')
				$children_data[$key]['image'] = $this->model_tool_image->resize($children_data[$key]['image_url'], $width, $height);
				$children_data[$key]['children'] = $this->getChildren($value['id']);

				if($children_data[$key]['block_type'] == 'product_block') {
					$children_data[$key]['products'] = $this->get_products($children_data[$key]['link_id']);
				}
			}
		}

		return $children_data;
	}

	public function get_categories(){

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			//$children_data = array();

			if ($category['category_id']) {
				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach($children as $child) {
					$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

					if ($child['image']) {
					$image =  $this->model_tool_image->resize($child['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
				    }else $image = '';

					$data[] = array(
						'id' => (int)$child['category_id'],
						'name' => $child['name'],
						'description' => $child['description'],
						'parent' => (int)$child['parent_id'],
						'count' => $this->config->get('config_product_count') ? (int)$this->model_catalog_product->getTotalProducts($filter_data) : 0,
						'image'    => $image,
						'top' 	=> $child['top']
					);
				}
			}

			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			if ($category['image']) {
				$image =  $this->model_tool_image->resize($category['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
			}else $image = '';

			$data[] = array(
				'id' => (int)$category['category_id'],
				'name'        => $category['name'],
				'description' => $category['description'],
				'parent' => (int)$category['parent_id'],
				'count'    => $this->config->get('config_product_count') ? (int)$this->model_catalog_product->getTotalProducts($filter_data) : 0,
				'image'    => $image,
				'top'	=> $category['top']
			);
		}

		return $data;

	}

	public function get_settings() {

		$settings = array();

		$this->load->model('setting/setting');
		
		$settings = $this->model_setting_setting->getSetting('mstoreapp');

		return $settings;

	}

	public function blocks(){

		$this->load->model('extension/mstoreapp/blocks');

		$results = $this->model_extension_mstoreapp_blocks->getAllBlocks();

		if (isset($_SERVER['HTTP_ORIGIN'])) {
			$this->response->addHeader("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
			$this->response->addHeader('Access-Control-Allow-Credentials: ' . 'true');
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($results));

	}

	public function get_products($id) {

		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data = array();

		if (isset($_REQUEST['page'])) {
			$page = $_REQUEST['page'];
		} else {
			$page = 1;
		}

		if (isset($_REQUEST['limit'])) {
			$limit = (int)$_REQUEST['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$filter_data = array(
			'filter_category_id' => $id,
			'start'              => ($page - 1) * $limit,
			'limit'              => $limit
		);

		$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

		$results = $this->model_catalog_product->getProducts($filter_data);

		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$result['special']) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$options = array();

			foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$options[] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			$data[] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'options'	  => $options,
			);
		}
		return $data;
	}

	public function getProducts() {

		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data = array();

		if (isset($_REQUEST['page'])) {
			$page = $_REQUEST['page'];
		} else {
			$page = 1;
		}

		if (isset($_REQUEST['id'])) {
			$id = (int)$_REQUEST['id'];
		} else {
			$id = 0;
		}

		if (isset($_REQUEST['limit'])) {
			$limit = (int)$_REQUEST['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$filter_data = array(
			'filter_category_id' => $id,
			'start'              => ($page - 1) * $limit,
			'limit'              => $limit
		);

		$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

		$results = $this->model_catalog_product->getProducts($filter_data);

		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$result['special']) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$options = array();

			foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$options[] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			$data[] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'options'	  => $options,
			);
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