<?php

//   * Total Order Discount v1.2 (https://github.com/underr-ua/ocmod3-total-order-discount)
//   * Copyright 2018 Burkatskyi Andrii aka underr
//   * Licensed under MIT - https://raw.githubusercontent.com/underr-ua/ocmod3-total-order-discount/master/LICENSE.txt

class ModelExtensionTotalOrderDiscount extends Model {
	public function getTotal($total) {
		$this->load->language('extension/total/order_discount');

		$total_discount = 0;
		$total_taxes = array_sum($this->cart->getTaxes());
		$total_quantity_cart =  $this->cart->countProducts();

		$total_sub_total = $total_taxes ? $this->cart->getSubTotal() + $total_taxes : $this->cart->getSubTotal();

		$base      = $this->config->get('total_order_discount_base');
		$type      = $this->config->get('total_order_discount_type');
		$point     = $this->config->get('total_order_discount_point');
		$value	   = $this->config->get('total_order_discount_value');

		if ($base == 'qty') {
			if ($total_quantity_cart >= $point) {
				if ($type == 'pct') {
					$total_discount = $total_sub_total * $value / 100;
				} else if ($type == 'fix') {
					$total_discount = $value;
				}
			}
		} else if ($base == 'sum') {
			if ($total_sub_total >= $point){
				if ($type == 'pct') {
					$total_discount = $total_sub_total * $value / 100;
				} else if ($type == "fix") {
					$total_discount = $value;
				}
			}
		}

		if ($total_discount > 0) {
			$total['totals'][] = array(
				'code'       => 'order_discount',
				'title'      => $this->language->get('text_total_order_discount_discount'),
				'value'      => $total_discount,
				'sort_order' => $this->config->get('total_order_discount_sort_order')
			);

			$total['total'] -= $total_discount;
		}
	}
}
