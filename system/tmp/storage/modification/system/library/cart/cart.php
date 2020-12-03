<?php
namespace Cart;
class Cart {


			public $aff_info = array('products' => array());//+mod by yp

			
	private $data = array();

	public function __construct($registry) {
		$this->config = $registry->get('config');
		$this->customer = $registry->get('customer');
		$this->session = $registry->get('session');
		$this->db = $registry->get('db');
		$this->tax = $registry->get('tax');
		$this->weight = $registry->get('weight');

		// Remove all the expired carts with no customer ID
		$this->db->query("DELETE FROM " . DB_PREFIX . "cart WHERE (api_id > '0' OR customer_id = '0') AND date_added < DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		if ($this->customer->getId()) {
			// We want to change the session ID on all the old items in the customers cart
			$this->db->query("UPDATE " . DB_PREFIX . "cart SET session_id = '" . $this->db->escape($this->session->getId()) . "' WHERE api_id = '0' AND customer_id = '" . (int)$this->customer->getId() . "'");

			// Once the customer is logged in we want to update the customers cart
			$cart_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cart WHERE api_id = '0' AND customer_id = '0' AND session_id = '" . $this->db->escape($this->session->getId()) . "'");

			foreach ($cart_query->rows as $cart) {


//+mod by yp start			
if($this->config->get('mta_ypx_status')) {			
	$_mta_product_id = $cart['product_id'];
	$this->aff_info['products'][strval($_mta_product_id)] = array('mods' => array());
}
//+mod by yp end
			
				$this->db->query("DELETE FROM " . DB_PREFIX . "cart WHERE cart_id = '" . (int)$cart['cart_id'] . "'");

				// The advantage of using $this->add is that it will check if the products already exist and increaser the quantity if necessary.
				$this->add($cart['product_id'], $cart['quantity'], json_decode($cart['option']), $cart['recurring_id']);
			}
		}
	}


            public function calculateCommission($product,$customer_id) {

              if($product) {
                $categories_array = $this->db->query("SELECT p2c.category_id,c.parent_id FROM ".DB_PREFIX."product_to_category p2c LEFT JOIN ".DB_PREFIX."category c ON (p2c.category_id = c.category_id) WHERE p2c.product_id = '".(int)$product['product_id']."' ORDER BY p2c.product_id ");

                if($this->config->get('marketplace_commissionworkedon'))
                  $categories = $categories_array->rows;
                else
                  $categories = array($categories_array->row);

                //get commission array for priority
                $commission = $this->config->get('marketplace_boxcommission');
                $commission_amount = 0;
                $commission_type = '';

                if($commission)
                  foreach($commission as $various) {
                    switch ($various) {
                      case 'category': //get all parent category according to product and process
                        if(isset($categories[0]) && $categories[0]){

                          foreach($categories as $category) {
                            if($category['parent_id']==0){
                              $category_commission = $query = $this->db->query("SELECT * FROM ".DB_PREFIX."customerpartner_commission_category WHERE category_id = '" . (int)$category['category_id'] . "'")->row;
                              if($category_commission){
                                $commission_amount += ( $category_commission['percentage'] ? ($category_commission['percentage']*$product['product_total']/100) : 0 ) + $category_commission['fixed'];
                              }
                            }
                          }
                          $commission_type = 'Category Based';
                          if($commission_amount)
                            break;
                        }

                      case 'category_child': //get all child category according to product and process
                        if(isset($categories[0]) && $categories[0]){

                          foreach($categories as $category){
                            if($category['parent_id'] > 0){
                              $category_commission = $query = $this->db->query("SELECT * FROM ".DB_PREFIX."customerpartner_commission_category WHERE category_id = '" . (int)$category['category_id'] . "'")->row;
                              if($category_commission){
                                $commission_amount += ( $category_commission['percentage'] ? ($category_commission['percentage']*$product['product_total']/100) : 0 ) + $category_commission['fixed'];
                              }
                            }
                          }

                          $commission_type = 'Category Child Based';
                          if($commission_amount)
                            break;
                        }

                      default: //just get all amount and process on that (precentage based)
                        $customer_commission = $query = $this->db->query("SELECT commission FROM ".DB_PREFIX."customerpartner_to_customer WHERE customer_id = '" . (int)$customer_id . "'")->row;
                        if($customer_commission) {
                          $commission_amount += $customer_commission['commission'] ? ($customer_commission['commission']*$product['product_total']/100) : 0;
                        }

                        $commission_type = 'Partner Fixed Based';
                        break;
                    }
                    if($commission_amount)
                      break;
                  }
                $return_array = array(
                  'commission' => $commission_amount,
                  'customer' => $product['product_total']- $commission_amount,
                  'type' => $commission_type,
                );
                return($return_array);
              }
            }
          
	public function getProducts() {
		$product_data = array();

//+mod by yp start			
if($this->config->get('mta_ypx_status')) {			
	$this->aff_info = array('products' => array(), 'price_before_shipping' => 0.00, '_new_' => true);
}
//+mod by yp end
			

		$cart_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "cart WHERE api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "' AND customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "'");

              // Gift teaser code
              $cart_products = $cart_query->rows;
              $gifts = array();
              $gift_quant = array();
            	if (!isset($this->session->data['wk_promo_gifts']) && $this->config->get('wk_gift_gift_status') && $this->config->get('module_marketplace_status') && ($this->config->get('module_wk_crosssell_crosssell_status') || $this->config->get('module_wk_upsell_upsell_status'))) {

    						if ($cart_products) {
    							$date_now = date('Y-m-d H:i:s');
    							$sql = "SELECT cg.related_id, cg.quantity, gr.parent_id, gr.parent_options, gr.child_id, gr.options FROM " . DB_PREFIX . "customer_gifts cg LEFT JOIN " . DB_PREFIX . "giftteasor_related gr ON (cg.related_id = gr.id) LEFT JOIN " . DB_PREFIX . "vendor_giftteasor vg ON (gr.giftteasor_id = vg.giftteasor_id) WHERE vg.date_end > '" . $date_now . "' AND (vg.quantity_status = 0 || vg.quantity > 0)";

    							if ($this->customer->isLogged()) {
    								$sql .= " AND cg.customer_id = '" . $this->customer->getId() . "'";
    							} else {
    								$sql .= " AND cg.customer_id = '0' AND cg.session_id = '" . $this->db->escape($this->session->getId()) . "'";
    							}

    							$customer_gifts = $this->db->query($sql)->rows;

    							foreach ($customer_gifts as $gift_key => $giftteaser) {
    								$parent = array();
    								$child = array();
    								foreach ($cart_products as $cart_key => $product) {
    									if (!$parent && $giftteaser['parent_id'] == $product['product_id'] && $giftteaser['parent_options'] == $product['option']) {
    										if ($child) {
    											$gifts[] = $child['cart_id'];
    											$gift_quant[$child['cart_id']] = $child['quantity'];

    											if ($product['quantity'] == $child['quantity']) {
    												unset($cart_products[$cart_key]);
    												unset($cart_products[$child['key']]);
    											} elseif ($product['quantity'] > $child['quantity']) {
    												unset($cart_products[$child['key']]);
    												$cart_products[$cart_key]['quantity'] = $product['quantity'] - $child['quantity'];
    											} elseif ($product['quantity'] < $child['quantity']) {
    												unset($cart_products[$cart_key]);
    												$gift_quant[$child['cart_id']] = $product['quantity'];
    												$cart_products[$child['key']]['quantity'] = $child['quantity'] - $product['quantity'];
    											}

    											unset($customer_gifts[$gift_key]);
    											break;
    										} else {
    											$parent = array(
    												'key'      => $cart_key,
    												'quantity' => $product['quantity'],
    												'cart_id'  => $product['cart_id']
    											);
    										}
    									}
    									if (!$child && $giftteaser['child_id'] == $product['product_id'] && $giftteaser['options'] == $product['option']) {
    										if ($parent) {
    											$gifts[] = $product['cart_id'];
    											$gift_quant[$product['cart_id']] = $product['quantity'];

    											if ($product['quantity'] == $parent['quantity']) {
    												unset($cart_products[$cart_key]);
    												unset($cart_products[$parent['key']]);
    											} elseif ($product['quantity'] > $parent['quantity']) {
    												unset($cart_products[$parent['key']]);
    												$gift_quant[$product['cart_id']] = $parent['quantity'];
    												$cart_products[$cart_key]['quantity'] = $product['quantity'] - $parent['quantity'];
    											} elseif ($product['quantity'] < $parent['quantity']) {
    												unset($cart_products[$cart_key]);
    												$cart_products[$parent['key']]['quantity'] = $parent['quantity'] - $product['quantity'];
    											}

    											unset($customer_gifts[$gift_key]);
    											break;
    										} else {
    											if ($giftteaser['quantity'] < $product['quantity']) {
    												$child_quantity = $giftteaser['quantity'];
    											} else {
    												$child_quantity = $product['quantity'];
    											}
    											$child = array(
    												'key'      => $cart_key,
    												'quantity' => $child_quantity,
    												'cart_id'  => $product['cart_id']
    											);
    										}
    									}
    								}
    							}
    						}

                if (isset($customer_gifts) && is_array($customer_gifts)) {
      						foreach ($customer_gifts as $gift) {
      							$sql = "DELETE FROM " . DB_PREFIX . "customer_gifts WHERE related_id = '" . $gift['related_id'] . "'";

      							if ($this->customer->isLogged()) {
      								$sql .= " AND customer_id = '" . $this->customer->getId() . "'";
      							} else {
      								$sql .= " AND customer_id = '0' AND session_id = '" . $this->db->escape($this->session->getId()) . "'";
      							}

      							$this->db->query($sql);
      						}
                }
    						$this->session->data['gifts'] = $gifts;
    						$this->session->data['gift_quant'] = $gift_quant;
            	}
    	        // Gift teaser code ends here
            

		foreach ($cart_query->rows as $cart) {


//+mod by yp start			
if($this->config->get('mta_ypx_status')) {			
	$_mta_product_id = $cart['product_id'];
	$this->aff_info['products'][strval($_mta_product_id)] = array('mods' => array());
}
//+mod by yp end
			
			$stock = true;

			$product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_store p2s LEFT JOIN " . DB_PREFIX . "product p ON (p2s.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND p2s.product_id = '" . (int)$cart['product_id'] . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.date_available <= NOW() AND p.status = '1'");

			if ($product_query->num_rows && ($cart['quantity'] > 0)) {
				$option_price = 0;
				$option_points = 0;
				$option_weight = 0;

				$option_data = array();

				foreach (json_decode($cart['option']) as $product_option_id => $value) {
					$option_query = $this->db->query("SELECT po.product_option_id, po.option_id, od.name, o.type FROM " . DB_PREFIX . "product_option po LEFT JOIN `" . DB_PREFIX . "option` o ON (po.option_id = o.option_id) LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE po.product_option_id = '" . (int)$product_option_id . "' AND po.product_id = '" . (int)$cart['product_id'] . "' AND od.language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($option_query->num_rows) {
						if ($option_query->row['type'] == 'select' || $option_query->row['type'] == 'radio') {
							$option_value_query = $this->db->query("SELECT pov.option_value_id, ovd.name, pov.quantity, pov.subtract, pov.price, pov.price_prefix, pov.points, pov.points_prefix, pov.weight, pov.weight_prefix FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value ov ON (pov.option_value_id = ov.option_value_id) LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE pov.product_option_value_id = '" . (int)$value . "' AND pov.product_option_id = '" . (int)$product_option_id . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

							if ($option_value_query->num_rows) {
								if ($option_value_query->row['price_prefix'] == '+') {
									$option_price += $option_value_query->row['price'];
								} elseif ($option_value_query->row['price_prefix'] == '-') {
									$option_price -= $option_value_query->row['price'];
								}

								if ($option_value_query->row['points_prefix'] == '+') {
									$option_points += $option_value_query->row['points'];
								} elseif ($option_value_query->row['points_prefix'] == '-') {
									$option_points -= $option_value_query->row['points'];
								}

								if ($option_value_query->row['weight_prefix'] == '+') {
									$option_weight += $option_value_query->row['weight'];
								} elseif ($option_value_query->row['weight_prefix'] == '-') {
									$option_weight -= $option_value_query->row['weight'];
								}

								if ($option_value_query->row['subtract'] && (!$option_value_query->row['quantity'] || ($option_value_query->row['quantity'] < $cart['quantity']))) {
									$stock = false;
								}

								$option_data[] = array(
									'product_option_id'       => $product_option_id,
									'product_option_value_id' => $value,
									'option_id'               => $option_query->row['option_id'],
									'option_value_id'         => $option_value_query->row['option_value_id'],
									'name'                    => $option_query->row['name'],
									'value'                   => $option_value_query->row['name'],
									'type'                    => $option_query->row['type'],
									'quantity'                => $option_value_query->row['quantity'],
									'subtract'                => $option_value_query->row['subtract'],
									'price'                   => $option_value_query->row['price'],
									'price_prefix'            => $option_value_query->row['price_prefix'],
									'points'                  => $option_value_query->row['points'],
									'points_prefix'           => $option_value_query->row['points_prefix'],
									'weight'                  => $option_value_query->row['weight'],
									'weight_prefix'           => $option_value_query->row['weight_prefix']
								);
							}
						} elseif ($option_query->row['type'] == 'checkbox' && is_array($value)) {
							foreach ($value as $product_option_value_id) {
								$option_value_query = $this->db->query("SELECT pov.option_value_id, pov.quantity, pov.subtract, pov.price, pov.price_prefix, pov.points, pov.points_prefix, pov.weight, pov.weight_prefix, ovd.name FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (pov.option_value_id = ovd.option_value_id) WHERE pov.product_option_value_id = '" . (int)$product_option_value_id . "' AND pov.product_option_id = '" . (int)$product_option_id . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

								if ($option_value_query->num_rows) {
									if ($option_value_query->row['price_prefix'] == '+') {
										$option_price += $option_value_query->row['price'];
									} elseif ($option_value_query->row['price_prefix'] == '-') {
										$option_price -= $option_value_query->row['price'];
									}

									if ($option_value_query->row['points_prefix'] == '+') {
										$option_points += $option_value_query->row['points'];
									} elseif ($option_value_query->row['points_prefix'] == '-') {
										$option_points -= $option_value_query->row['points'];
									}

									if ($option_value_query->row['weight_prefix'] == '+') {
										$option_weight += $option_value_query->row['weight'];
									} elseif ($option_value_query->row['weight_prefix'] == '-') {
										$option_weight -= $option_value_query->row['weight'];
									}

									if ($option_value_query->row['subtract'] && (!$option_value_query->row['quantity'] || ($option_value_query->row['quantity'] < $cart['quantity']))) {
										$stock = false;
									}

									$option_data[] = array(
										'product_option_id'       => $product_option_id,
										'product_option_value_id' => $product_option_value_id,
										'option_id'               => $option_query->row['option_id'],
										'option_value_id'         => $option_value_query->row['option_value_id'],
										'name'                    => $option_query->row['name'],
										'value'                   => $option_value_query->row['name'],
										'type'                    => $option_query->row['type'],
										'quantity'                => $option_value_query->row['quantity'],
										'subtract'                => $option_value_query->row['subtract'],
										'price'                   => $option_value_query->row['price'],
										'price_prefix'            => $option_value_query->row['price_prefix'],
										'points'                  => $option_value_query->row['points'],
										'points_prefix'           => $option_value_query->row['points_prefix'],
										'weight'                  => $option_value_query->row['weight'],
										'weight_prefix'           => $option_value_query->row['weight_prefix']
									);
								}
							}
						} elseif ($option_query->row['type'] == 'text' || $option_query->row['type'] == 'textarea' || $option_query->row['type'] == 'file' || $option_query->row['type'] == 'date' || $option_query->row['type'] == 'datetime' || $option_query->row['type'] == 'time') {
							$option_data[] = array(
								'product_option_id'       => $product_option_id,
								'product_option_value_id' => '',
								'option_id'               => $option_query->row['option_id'],
								'option_value_id'         => '',
								'name'                    => $option_query->row['name'],
								'value'                   => $value,
								'type'                    => $option_query->row['type'],
								'quantity'                => '',
								'subtract'                => '',
								'price'                   => '',
								'price_prefix'            => '',
								'points'                  => '',
								'points_prefix'           => '',
								'weight'                  => '',
								'weight_prefix'           => ''
							);
						}
					}
				}

				$price = $product_query->row['price'];

				// Product Discounts
				$discount_quantity = 0;

				foreach ($cart_query->rows as $cart_2) {
					if ($cart_2['product_id'] == $cart['product_id']) {
						$discount_quantity += $cart_2['quantity'];
					}
				}

				$product_discount_query = $this->db->query("SELECT product_discount_id, price FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$cart['product_id'] . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND quantity <= '" . (int)$discount_quantity . "' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY quantity DESC, priority ASC, price ASC LIMIT 1");


			
if($this->config->get('mta_ypx_status') && $product_discount_query->num_rows) $this->aff_info['products'][$_mta_product_id]['mods']['discount'] = $product_discount_query->row['product_discount_id'];//+mod by yp
			
			
				if ($product_discount_query->num_rows) {
					$price = $product_discount_query->row['price'];
				}

				// Product Specials
				$product_special_query = $this->db->query("SELECT product_special_id, price FROM " . DB_PREFIX . "product_special WHERE product_id = '" . (int)$cart['product_id'] . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY priority ASC, price ASC LIMIT 1");


			
if($this->config->get('mta_ypx_status') && $product_special_query->num_rows) $this->aff_info['products'][$_mta_product_id]['mods']['special'] = $product_special_query->row['product_special_id'];//+mod by yp
			
			
				if ($product_special_query->num_rows) {
					$price = $product_special_query->row['price'];
				}

				// Reward Points
				$product_reward_query = $this->db->query("SELECT points FROM " . DB_PREFIX . "product_reward WHERE product_id = '" . (int)$cart['product_id'] . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'");

				if ($product_reward_query->num_rows) {
					$reward = $product_reward_query->row['points'];
				} else {
					$reward = 0;
				}

				// Downloads
				$download_data = array();

				$download_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_download p2d LEFT JOIN " . DB_PREFIX . "download d ON (p2d.download_id = d.download_id) LEFT JOIN " . DB_PREFIX . "download_description dd ON (d.download_id = dd.download_id) WHERE p2d.product_id = '" . (int)$cart['product_id'] . "' AND dd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

				foreach ($download_query->rows as $download) {
					$download_data[] = array(
						'download_id' => $download['download_id'],
						'name'        => $download['name'],
						'filename'    => $download['filename'],
						'mask'        => $download['mask']
					);
				}

				// Stock
				if (!$product_query->row['quantity'] || ($product_query->row['quantity'] < $cart['quantity'])) {
					$stock = false;
				}

				$recurring_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "recurring r LEFT JOIN " . DB_PREFIX . "product_recurring pr ON (r.recurring_id = pr.recurring_id) LEFT JOIN " . DB_PREFIX . "recurring_description rd ON (r.recurring_id = rd.recurring_id) WHERE r.recurring_id = '" . (int)$cart['recurring_id'] . "' AND pr.product_id = '" . (int)$cart['product_id'] . "' AND rd.language_id = " . (int)$this->config->get('config_language_id') . " AND r.status = 1 AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'");

				if ($recurring_query->num_rows) {
					$recurring = array(
						'recurring_id'    => $cart['recurring_id'],
						'name'            => $recurring_query->row['name'],
						'frequency'       => $recurring_query->row['frequency'],
						'price'           => $recurring_query->row['price'],
						'cycle'           => $recurring_query->row['cycle'],
						'duration'        => $recurring_query->row['duration'],
						'trial'           => $recurring_query->row['trial_status'],
						'trial_frequency' => $recurring_query->row['trial_frequency'],
						'trial_price'     => $recurring_query->row['trial_price'],
						'trial_cycle'     => $recurring_query->row['trial_cycle'],
						'trial_duration'  => $recurring_query->row['trial_duration']
					);
				} else {
					$recurring = false;
				}


            // gift code
            $gift = 0;
            if ($this->config->get('module_marketplace_status')) {
            if (isset($gifts) && is_array($gifts) && in_array($cart['cart_id'], $gifts)) {
 							if ($gift_quant[$cart['cart_id']] < $cart['quantity']) {

              $commission_amount = 0;
              if ($this->config->get('module_marketplace_status')) {
                 $check_seller_product = $this->db->query("SELECT * FROM ".DB_PREFIX."customerpartner_to_product WHERE product_id = '".$product_query->row['product_id']."'")->row;
                 if ($check_seller_product) {
                  if ($this->config->get('marketplace_commission_tax')) {
                    $commission_array = $this->calculateCommission(array('product_id'=> $product_query->row['product_id'], 'product_total'=> $this->tax->calculate(($price + $option_price), $product_query->row['tax_class_id'], $this->config->get('config_tax'))),$check_seller_product['customer_id']);
                  }else{
                    $commission_array = $this->calculateCommission(array('product_id'=>$product_query->row['product_id'], 'product_total'=>($price + $option_price)),$check_seller_product['customer_id']);
                  }

                  if($commission_array && isset($commission_array['commission']) && $this->config->get('marketplace_commission_unit_price')){
                        $commission_amount = $commission_array['commission'];
                  }
                }
              }
            
 								$product_data[] = array(
 									'cart_id'          =>  $cart['cart_id'],
 									'product_id'       =>  $product_query->row['product_id'],
 									'name'             =>  $product_query->row['name'],
 									'model'            =>  $product_query->row['model'],
 									'shipping'         =>  $product_query->row['shipping'],
 									'image'            =>  $product_query->row['image'],
 									'option'           =>  $option_data,
 									'download'         =>  $download_data,
 									'quantity'         =>  $gift_quant[$cart['cart_id']],
 									'minimum'          =>  $product_query->row['minimum'],
 									'subtract'         =>  $product_query->row['subtract'],
 									'stock'            =>  $stock,
 									// 'price'            =>  0,
 									// 'total'            =>  0,

 									/*commission code added*/
 									'price'           => ($price + $option_price) + $commission_amount_total,
 									'total'           => (($price + $option_price) + $commission_amount_total) * $cart['quantity'],
 									'actual_price'           => ($price + $option_price),
 									'actual_total'           => ($price + $option_price) * $cart['quantity'],
 									/*commission code added*/

 									'reward'           =>  $reward * $cart['quantity'],
 									'points'           =>  ($product_query->row['points'] ? ($product_query->row['points'] + $option_points) * $cart['quantity'] : 0),
 									'tax_class_id'     =>  $product_query->row['tax_class_id'],
 									'weight'           =>  ($product_query->row['weight'] + $option_weight) * $cart['quantity'],
 									'weight_class_id'  =>  $product_query->row['weight_class_id'],
 									'length'           =>  $product_query->row['length'],
 									'width'            =>  $product_query->row['width'],
 									'height'           =>  $product_query->row['height'],
 									'length_class_id'  =>  $product_query->row['length_class_id'],
 									'recurring'        =>  $recurring,
 									'gift'             =>  1
 								);
 								$cart['quantity'] = $cart['quantity'] - $gift_quant[$cart['cart_id']];
 								$gift = 0;
 							} else {
 								$gift = 1;
 								$price = 0;
 								$option_price = 0;
 								$commission_amount_total = 0;
 							}
            } else {
 							$gift = 0;
 						}
            }
            // gift code ends here
            

              $commission_amount = 0;
              if ($this->config->get('module_marketplace_status')) {
                 $check_seller_product = $this->db->query("SELECT * FROM ".DB_PREFIX."customerpartner_to_product WHERE product_id = '".$product_query->row['product_id']."'")->row;
                 if ($check_seller_product) {
                  if ($this->config->get('marketplace_commission_tax')) {
                    $commission_array = $this->calculateCommission(array('product_id'=> $product_query->row['product_id'], 'product_total'=> $this->tax->calculate(($price + $option_price), $product_query->row['tax_class_id'], $this->config->get('config_tax'))),$check_seller_product['customer_id']);
                  }else{
                    $commission_array = $this->calculateCommission(array('product_id'=>$product_query->row['product_id'], 'product_total'=>($price + $option_price)),$check_seller_product['customer_id']);
                  }

                  if($commission_array && isset($commission_array['commission']) && $this->config->get('marketplace_commission_unit_price')){
                        $commission_amount = $commission_array['commission'];
                  }
                }
              }
            
				$product_data[] = array(
					'cart_id'         => $cart['cart_id'],
					'product_id'      => $product_query->row['product_id'],
					'name'            => $product_query->row['name'],
					'model'           => $product_query->row['model'],
					'shipping'        => $product_query->row['shipping'],
					'image'           => $product_query->row['image'],
					'option'          => $option_data,
					'download'        => $download_data,
					'quantity'        => $cart['quantity'],
					'minimum'         => $product_query->row['minimum'],
					'subtract'        => $product_query->row['subtract'],
					'stock'           => $stock,
					'price'           => ($price + $option_price),

            'commission_amount'  => $commission_amount,
          
					
            'total'           => ($price + $option_price + $commission_amount) * $cart['quantity'],
          

              'actual_price'           => ($price + $option_price ),
              'actual_total'           => ($price + $option_price) * $cart['quantity'],
            
					'reward'          => $reward * $cart['quantity'],
					'points'          => ($product_query->row['points'] ? ($product_query->row['points'] + $option_points) * $cart['quantity'] : 0),
					'tax_class_id'    => $product_query->row['tax_class_id'],
					'weight'          => ($product_query->row['weight'] + $option_weight) * $cart['quantity'],
					'weight_class_id' => $product_query->row['weight_class_id'],
					'length'          => $product_query->row['length'],
					'width'           => $product_query->row['width'],
					'height'          => $product_query->row['height'],
					'length_class_id' => $product_query->row['length_class_id'],

            'gift'            => $gift ? 1 : 0, // gift teaser customization
            
					'recurring'       => $recurring
				);
			} else {
				$this->remove($cart['cart_id']);
			}
		}

			
			
//+mod by yp start			
if($this->config->get('mta_ypx_status')) {			
		if(isset($this->aff_info['_new_'])) {
			unset($this->aff_info['_new_']);
			$this->aff_info['price_before_shipping'] = 0;
			foreach($product_data as $k => $v) {			
				if(isset($v['total']) && $v['total'] && $v['total'] > 0) $this->aff_info['price_before_shipping'] += floatval($v['total']);
			}			
			foreach($product_data as $k => $v) {			
				if(!isset($this->aff_info['products'][$v['product_id']])) {
					$this->aff_info['products'][$v['product_id']] = array('share' => 0, 'quantity' => 0);
				} else {
					if(!isset($this->aff_info['products'][$v['product_id']]['share'])) $this->aff_info['products'][$v['product_id']]['share'] = 0;
					if(!isset($this->aff_info['products'][$v['product_id']]['quantity'])) $this->aff_info['products'][$v['product_id']]['quantity'] = 0;					
				}
				$this->aff_info['products'][$v['product_id']]['share'] += ($this->aff_info['price_before_shipping'] > 0.00 ? ((floatval($v['total'])) / $this->aff_info['price_before_shipping']) : 0);
				$this->aff_info['products'][$v['product_id']]['quantity'] += $v['quantity'];				
			}
		}
}		
//+mod by yp end			
		
			
		return $product_data;
	}

	public function add($product_id, $quantity = 1, $option = array(), $recurring_id = 0) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "cart WHERE api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "' AND customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "' AND product_id = '" . (int)$product_id . "' AND recurring_id = '" . (int)$recurring_id . "' AND `option` = '" . $this->db->escape(json_encode($option)) . "'");

		if (!$query->row['total']) {
			$this->db->query("INSERT " . DB_PREFIX . "cart SET api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "', customer_id = '" . (int)$this->customer->getId() . "', session_id = '" . $this->db->escape($this->session->getId()) . "', product_id = '" . (int)$product_id . "', recurring_id = '" . (int)$recurring_id . "', `option` = '" . $this->db->escape(json_encode($option)) . "', quantity = '" . (int)$quantity . "', date_added = NOW()");
		} else {
			$this->db->query("UPDATE " . DB_PREFIX . "cart SET quantity = (quantity + " . (int)$quantity . ") WHERE api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "' AND customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "' AND product_id = '" . (int)$product_id . "' AND recurring_id = '" . (int)$recurring_id . "' AND `option` = '" . $this->db->escape(json_encode($option)) . "'");
		}

          if($this->db->getLastId()) {
      			return $this->db->getLastId();
      		} else {
      			return $this->db->query("SELECT cart_id FROM " . DB_PREFIX . "cart WHERE customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "' AND product_id = '" . (int)$product_id . "' AND recurring_id = '" . (int)$recurring_id . "' AND `option` = '" . $this->db->escape(json_encode($option)) . "'")->row['cart_id'];
      		}
        
	}

	public function update($cart_id, $quantity) {
		$this->db->query("UPDATE " . DB_PREFIX . "cart SET quantity = '" . (int)$quantity . "' WHERE cart_id = '" . (int)$cart_id . "' AND api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "' AND customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "'");
	}

	public function remove($cart_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "cart WHERE cart_id = '" . (int)$cart_id . "' AND api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "' AND customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "'");
	}

	public function clear() {
		$this->db->query("DELETE FROM " . DB_PREFIX . "cart WHERE api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "' AND customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "'");
	}

	public function getRecurringProducts() {
		$product_data = array();

//+mod by yp start			
if($this->config->get('mta_ypx_status')) {			
	$this->aff_info = array('products' => array(), 'price_before_shipping' => 0.00, '_new_' => true);
}
//+mod by yp end
			

		foreach ($this->getProducts() as $value) {
			if ($value['recurring']) {
				$product_data[] = $value;
			}
		}

		return $product_data;
	}

	public function getWeight() {
		$weight = 0;

		foreach ($this->getProducts() as $product) {
			if ($product['shipping']) {
				$weight += $this->weight->convert($product['weight'], $product['weight_class_id'], $this->config->get('config_weight_class_id'));
			}
		}

		return $weight;
	}

	public function getSubTotal() {
		$total = 0;

		foreach ($this->getProducts() as $product) {
			$total += $product['total'];
		}

		return $total;
	}

	public function getTaxes() {
		$tax_data = array();

		foreach ($this->getProducts() as $product) {
			if ($product['tax_class_id']) {
				$tax_rates = $this->tax->getRates($product['price'], $product['tax_class_id']);

				foreach ($tax_rates as $tax_rate) {
					if (!isset($tax_data[$tax_rate['tax_rate_id']])) {
						$tax_data[$tax_rate['tax_rate_id']] = ($tax_rate['amount'] * $product['quantity']);
					} else {
						$tax_data[$tax_rate['tax_rate_id']] += ($tax_rate['amount'] * $product['quantity']);
					}
				}
			}
		}

		return $tax_data;
	}

	public function getTotal() {
		$total = 0;

		foreach ($this->getProducts() as $product) {
			
                $total += ($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'))+$product['commission_amount']) * $product['quantity'];
            
		}

		return $total;
	}

	public function countProducts() {
		$product_total = 0;

		$products = $this->getProducts();

		foreach ($products as $product) {
			$product_total += $product['quantity'];
		}

		return $product_total;
	}

	public function hasProducts() {
		return count($this->getProducts());
	}

	public function hasRecurringProducts() {
		return count($this->getRecurringProducts());
	}

	public function hasStock() {
		foreach ($this->getProducts() as $product) {
			if (!$product['stock']) {
				return false;
			}
		}

		return true;
	}

	public function hasShipping() {
		foreach ($this->getProducts() as $product) {
			if ($product['shipping']) {
				return true;
			}
		}

		return false;
	}

	public function hasDownload() {
		foreach ($this->getProducts() as $product) {
			if ($product['download']) {
				return true;
			}
		}

		return false;
	}
}
