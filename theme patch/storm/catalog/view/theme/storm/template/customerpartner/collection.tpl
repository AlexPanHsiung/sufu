<?php if(isset($mfilter_json)) {
	if(!empty($mfilter_json)) {
		echo '<div id="mfilter-json" style="display:none">' . base64_encode( $mfilter_json ) . '</div>';
	}
}
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$text_sale = 'Sale';
if($theme_options->get( 'sale_text', $config->get( 'config_language_id' ) ) != '') {
$text_sale = $theme_options->get( 'sale_text', $config->get( 'config_language_id' ) );
}
$text_bestseller = 'Bestseller';
if($theme_options->get( 'bestseller_text', $config->get( 'config_language_id' ) ) != '') {
$text_bestseller = $theme_options->get( 'bestseller_text', $config->get( 'config_language_id' ) );
}
$text_new = 'New';
if($theme_options->get( 'latest_text', $config->get( 'config_language_id' ) ) != '') {
$text_new = $theme_options->get( 'latest_text', $config->get( 'config_language_id' ) );
}
?>
<div id="seller-collection">
	<?php if ($products) { ?>
		<div class="product-filter clearfix">
	  	<div class="options">
	  		<div class="product-compare"><a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a></div>

	  		<div class="button-group display" data-toggle="buttons-radio">
	  			<button id="grid" <?php if($theme_options->get('default_list_grid') == '1') { echo 'class="active"'; } ?>
				rel="tooltip" title="Grid" onclick="display('grid');"><i class="storm-four-dots"></i></button>
	  			<button id="list" <?php if($theme_options->get('default_list_grid') != '1') { echo 'class="active"'; } ?>
				rel="tooltip" title="List" onclick="display('list');"><i class="storm-text"></i></button>
	  		</div>
	  	</div>

	  	<div class="list-options">
	  		<div class="sort">
	  			<?php echo $text_sort; ?>
	  			<select  onchange="loadCollection(this.value);">
	  			  <?php foreach ($sorts as $sorts) { ?>
	  			  <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
	  			  <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
	  			  <?php } else { ?>
	  			  <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
	  			  <?php } ?>
	  			  <?php } ?>
	  			</select>
	  		</div>

	  		<div class="limit">
	  			<?php echo $text_limit; ?>
	  			<select id="input-sort" onchange="loadCollection(this.value);">
	  			  <?php foreach ($limits as $limits) { ?>
	  			  <?php if ($limits['value'] == $limit) { ?>
	  			  <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
	  			  <?php } else { ?>
	  			  <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
	  			  <?php } ?>
	  			  <?php } ?>
	  			</select>
	  		</div>
	  	</div>
	  </div>
	<?php } ?>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<!-- for category list-->
			<?php if($categories) { ?>
				<column id="column-left">
					<ul class="mp-list-group" id="category-menu" style="border:none;box-shadow:unset;">

						<li class="mp-list-group-item mp-list-group-collection active">
						  <a data-collection-url="<?php echo $collection_url; ?>" class="default-work"><?php echo 'All'; ?></a>
						  <i class="fa fa-caret-down" style="font-size:20px;float:right;"></i>
						</li>

						<?php foreach ($categories as $category) { ?>
							<?php if ($category['category_id'] == $category_id) { ?>
								<li class="mp-list-group-item mp-list-group-collection active">
									<a data-collection-url="<?php echo $category['href']; ?>" class="default-work"><?php echo $category['name']; ?></a>
									<i class="fa fa-caret-down" style="font-size:20px;float:right;"></i>
								</li>
								<?php if ($category['children']) { ?>
									<?php foreach ($category['children'] as $child) { ?>
										<?php if ($child['category_id'] == $child_id) { ?>
											<li class="mp-list-group-item mp-list-group-collection active hide-child">
												<a data-collection-url="<?php echo $child['href']; ?>" class="default-work">&nbsp;&nbsp;&nbsp;- <?php echo $child['name']; ?></a>
											</li>
										<?php } else { ?>
											<li class="mp-list-group-item mp-list-group-collection active hide-child">
												<a data-collection-url="<?php echo $child['href']; ?>" class="default-work">&nbsp;&nbsp;&nbsp;- <?php echo $child['name']; ?></a>
											</li>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							<?php } else { ?>
							<li class="mp-list-group-item mp-list-group-collection active">
								<a data-collection-url="<?php echo $category['href']; ?>" class="default-work"><?php echo $category['name']; ?></a>
								<i class="fa fa-caret-down" style="font-size:20px;float:right;"></i>
							</li>
							<?php } ?>
						<?php } ?>
					</ul>
				</column>
			<?php } ?>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<?php if ($products) { ?>
				<div id="mp-products">
					<div id="seller-collection">
						<div class="product-list<?php if(!($theme_options->get('default_list_grid') == '1')) { echo ' active'; } ?>">
						  <?php foreach ($products as $product) { ?>

						<?php
						$product_detail = $theme_options->getDataProduct( $product['product_id'] );

						?>

						  <!-- Product -->
						  <div>
						    <div class="row seller-thumb" id="product-id<?php echo $product['product_id']; ?>">
						      <div class="image col-sm-3">
						      <?php if($product_detail['is_latest'] && $theme_options->get( 'display_text_latest' ) != '0'):?>
						        <div class="badge new"><span><?php echo $text_new; ?></span></div>
						      <?php endif; ?>

						        <?php if($product_detail['is_bestseller'] && $theme_options->get( 'display_text_bestseller' ) != '0'):?>
						        <div class="badge bestseller"><span><?php echo $text_bestseller; ?></span></div>
						      <?php endif; ?>

						      <?php if($product['special'] && $theme_options->get( 'display_text_sale' ) != '0') { ?>
						        <?php $text_sale = 'Sale';
						      if($theme_options->get( 'sale_text', $config->get( 'config_language_id' ) ) != '') {
						        $text_sale = $theme_options->get( 'sale_text', $config->get( 'config_language_id' ) );
						        } ?>
						        <?php if($theme_options->get( 'type_sale' ) == '1') { ?>
						        <?php
						        $roznica_ceny = $product_detail['price']-$product_detail['special'];
						        $procent = ($roznica_ceny*100)/$product_detail['price']; ?>
						        <div class="badge sale">-<?php echo round($procent); ?>%</div>
						        <?php } else { ?>
						          <div class="badge sale"><?php echo $text_sale; ?></div>
						        <?php } ?>

						      <?php } ?>

						        <?php if($theme_options->get( 'quick_view' ) == 1) { ?>
						        <div class="quickview">
						          <a href="index.php?route=product/quickview&product_id=<?php echo $product['product_id']; ?>" title="<?php echo $product['name']; ?>"><?php if($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) ) != '') { echo html_entity_decode($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) )); } else { echo 'QUICKVIEW'; } ?></a>
						        </div>
						        <?php } ?>

						        <?php if($product['thumb']) { ?>
						          <?php if($theme_options->get( 'lazy_loading_images' ) != '0') { ?>
						          <a href="<?php echo $product['href']; ?>"><img src="image/catalog/blank.gif" data-echo="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a>
						          <?php } else { ?>
						          <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a>
						          <?php } ?>
						        <?php } else { ?>
						        <a href="<?php echo $product['href']; ?>"><img src="image/no_image.jpg" alt="<?php echo $product['name']; ?>" /></a>
						        <?php } ?>
						      </div>

						      <div class="col-sm-9">
						      <div class="name-desc">
						        <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
						        <?php if ($product['rating']) { ?>
						        <div class="rating-reviews clearfix">
						          <div class="rating"><i class="fa fa-star<?php if($product['rating'] >= 1) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 2) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 3) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 4) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 5) { echo ' active'; } ?>"></i></div>
						        </div>
						        <?php } ?>
						        <div class="price">
						          <?php if (!$product['special']) { ?>
						          <?php echo $product['price']; ?>
						          <?php } else { ?>
						          <span class="price-new"><?php echo $product['special']; ?></span><span class="price-old"><?php echo $product['price']; ?></span>
						          <?php } ?>
						        </div>

						        <div class="description"><?php echo $product['description']; ?></div>
						      </div>
						      <div class="actions">
						        <div>

						          <div class="add-to-cart">
						            <?php $enquiry = false; if($config->get( 'product_blocks_module' ) != '') { $enquiry = $theme_options->productIsEnquiry($product['product_id']); }
						            if(is_array($enquiry)) { ?>
						            <a href="javascript:openPopup('<?php echo $enquiry['popup_module']; ?>', '<?php echo $product['product_id']; ?>')" class="button button-enquiry">
						              <?php if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'left') { echo '<img src="image/' . $enquiry['icon']. '" align="left" class="icon-enquiry" alt="Icon">'; } ?>
						              <span class="text-enquiry"><?php echo $enquiry['block_name']; ?></span>
						              <?php if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'right') { echo '<img src="image/' . $enquiry['icon']. '" align="right" class="icon-enquiry" alt="Icon">'; } ?>
						            </a>
						            <?php } else { ?>
						            <a onclick="cart.add('<?php echo $product['product_id']; ?>');" class="button"><?php echo $button_cart; ?></a>
						            <?php } ?>
						          </div>
						          <ul>
						            <?php if($theme_options->get( 'display_add_to_wishlist' ) != '0') { ?>
						            <li><a onclick="wishlist.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" title="<?php if($theme_options->get( 'add_to_wishlist_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'add_to_wishlist_text', $config->get( 'config_language_id' ) ); } else { echo 'Add to wishlist'; } ?>"><i class="storm-heart"></i> </a></li>
						            <?php } ?>
						            <?php if($theme_options->get( 'display_add_to_compare' ) != '0') { ?>
						            <li><a onclick="compare.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" title="<?php if($theme_options->get( 'add_to_compare_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'add_to_compare_text', $config->get( 'config_language_id' ) ); } else { echo 'Add to compare'; } ?>"><i class="storm-balance"></i></a></li>
						            <?php } ?>
						          </ul>
						        </div>
						      </div>
						      </div>


						    </div>
						  </div>
						  <?php } ?>
						</div>


						<?php
						$class = 3;
						$row = 4;

						if($theme_options->get( 'product_per_pow2' ) == 6) { $class = 2; }
						if($theme_options->get( 'product_per_pow2' ) == 5) { $class = 25; }
						if($theme_options->get( 'product_per_pow2' ) == 3) { $class = 4; }

						if($theme_options->get( 'product_per_pow2' ) > 1) { $row = $theme_options->get( 'product_per_pow2' ); }
						?>
						<div class="product-grid<?php if($theme_options->get('default_list_grid') == '1') { echo ' active'; } ?>">
						  <div class="row" id="product-id<?php echo $product['product_id']; ?>">
						    <?php $row_fluid = 0; foreach ($products as $product) { $row_fluid++; ?>
						      <?php $r=$row_fluid-floor($row_fluid/$row)*$row; if($row_fluid>$row && $r == 1) { echo '</div><div class="row">'; } ?>
						      <div class="col-sm-<?php echo $class; ?> col-xs-6">
						        <!-- Product -->
						        <div class="product clearfix <?php if($theme_options->get( 'hover_product' ) != '0') { echo 'product-hover'; } ?> seller-thumb">
						          <div class="left">
						            <?php if ($product['thumb']) { ?>
						              <?php if($product_detail['is_latest'] && $theme_options->get( 'display_text_latest' ) != '0'):?>
						              <div class="badge new"><span><?php echo $text_new; ?></span></div>
						              <?php endif; ?>

						              <?php if($product_detail['is_bestseller'] && $theme_options->get( 'display_text_bestseller' ) != '0'):?>
						              <div class="badge bestseller"><span><?php echo $text_bestseller; ?></span></div>
						              <?php endif; ?>

						              <?php if($product['special'] && $theme_options->get( 'display_text_sale' ) != '0') { ?>
						                <?php $text_sale = 'Sale';
						                if($theme_options->get( 'sale_text', $config->get( 'config_language_id' ) ) != '') {
						                  $text_sale = $theme_options->get( 'sale_text', $config->get( 'config_language_id' ) );
						                } ?>
						                <?php if($theme_options->get( 'type_sale' ) == '1') { ?>
						                  <?php
						                  $roznica_ceny = $product_detail['price']-$product_detail['special'];
						                  $procent = ($roznica_ceny*100)/$product_detail['price']; ?>
						                  <div class="badge sale">-<?php echo round($procent); ?>%</div>
						                <?php } else { ?>
						                  <div class="badge sale"><?php echo $text_sale; ?></div>
						                <?php } ?>


						              <?php } ?>

						              <div class="image <?php if($theme_options->get( 'product_image_effect' ) == '1') { echo 'image-swap-effect'; } ?>">
						                <?php if($theme_options->get( 'quick_view' ) == 1) { ?>
						                <div class="quickview">
						                  <a href="index.php?route=product/quickview&product_id=<?php echo $product['product_id']; ?>" title="<?php echo $product['name']; ?>"><i class="storm-eye"></i><?php if($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) ) != '') { echo html_entity_decode($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) )); } else { echo 'QUICK VIEW'; } ?></a>
						                </div>
						                <?php } ?>

						                <a href="<?php echo $product['href']; ?>">
						                  <?php if($theme_options->get( 'product_image_effect' ) == '1') {
						                    $image_swap = $theme_options->productImageSwap($product['product_id'], $product_image_width, $product_image_height);
						                    if($image_swap != '') echo '<img src="' . $image_swap . '" alt="' . $product['name'] . '" class="swap-image" />';
						                  } ?>
						                  <?php if($theme_options->get( 'lazy_loading_images' ) != '0') { ?>
						                  <img src="image/catalog/blank.gif" data-echo="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
						                  <?php } else { ?>
						                  <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
						                  <?php } ?>
						                </a>
						              </div>
						            <?php } else { ?>
						              <div class="image">
						                <?php if($theme_options->get( 'quick_view' ) == 1) { ?>
						                <div class="quickview">
						                  <a href="index.php?route=product/quickview&product_id=<?php echo $product['product_id']; ?>" title="<?php echo $product['name']; ?>"><i class="storm-eye"></i><?php if($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) ) != '') { echo html_entity_decode($theme_options->get( 'quickview_text', $config->get( 'config_language_id' ) )); } else { echo 'QUICK VIEW'; } ?></a>
						                </div>
						                <?php } ?>

						                <a href="<?php echo $product['href']; ?>"><img src="image/no_image.jpg" alt="<?php echo $product['name']; ?>" <?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'class="zoom-image-effect"'; } ?> /></a>
						              </div>
						            <?php } ?>
						            <?php if($theme_options->get( 'display_specials_countdown' ) == '1' && $product['special']) { $countdown = rand(0, 5000)*rand(0, 5000);
						                      $product_detail = $theme_options->getDataProduct( $product['product_id'] );
						                      $date_end = $product_detail['date_end'];
						                      if($date_end != '0000-00-00' && $date_end) { ?>
						                          <script>
						                          $(function () {
						                            var austDay = new Date();
						                            austDay = new Date(<?php echo date("Y", strtotime($date_end)); ?>, <?php echo date("m", strtotime($date_end)); ?> - 1, <?php echo date("d", strtotime($date_end)); ?>);
						                            $('#countdown<?php echo $countdown; ?>').countdown({until: austDay});
						                          });
						                          </script>
						                          <div id="countdown<?php echo $countdown; ?>" class="clearfix"></div>
						                     <?php } ?>
						            <?php } ?>
						          </div>
						          <div class="right">
						            <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
						            <div class="price">
						              <?php if (!$product['special']) { ?>
						              <?php echo $product['price']; ?>
						              <?php } else { ?>
						               <span class="price-new"><?php echo $product['special']; ?></span><span class="price-old"><?php echo $product['price']; ?></span>
						              <?php } ?>
						            </div>
						            <?php if ($product['rating'] && $theme_options->get( 'display_rating' ) != '0') { ?>
						            <div class="rating"><i class="fa fa-star<?php if($product['rating'] >= 1) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 2) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 3) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 4) { echo ' active'; } ?>"></i><i class="fa fa-star<?php if($product['rating'] >= 5) { echo ' active'; } ?>"></i></div>
						            <?php } ?>
						            <?php if($theme_options->get( 'display_add_to_compare' ) != '0' || $theme_options->get( 'display_add_to_wishlist' ) != '0' || $theme_options->get( 'display_add_to_cart' ) != '0') { ?>
						            <div class="only-hover">
						              <?php if($theme_options->get( 'display_add_to_cart' ) != '0') { ?>
						                   <?php $enquiry = false; if($config->get( 'product_blocks_module' ) != '') { $enquiry = $theme_options->productIsEnquiry($product['product_id']); }
						                   if(is_array($enquiry)) { ?>
						                   <a href="javascript:openPopup('<?php echo $enquiry['popup_module']; ?>', '<?php echo $product['product_id']; ?>')" class="button button-enquiry">
						                        <?php if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'left') { echo '<img src="image/' . $enquiry['icon']. '" align="left" class="icon-enquiry" alt="Icon">'; } ?>
						                        <span class="text-enquiry"><?php echo $enquiry['block_name']; ?></span>
						                        <?php if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'right') { echo '<img src="image/' . $enquiry['icon']. '" align="right" class="icon-enquiry" alt="Icon">'; } ?>
						                   </a>
						                   <?php } else { ?>
						                   <a onclick="cart.add('<?php echo $product['product_id']; ?>');" class="button"><i class="storm-shopping-bag"></i><?php echo $button_cart; ?></a>
						                   <?php } ?>
						              <?php } ?>
						              <?php if($theme_options->get( 'display_add_to_compare' ) != '0' || $theme_options->get( 'display_add_to_wishlist' ) != '0') { ?>
						              <ul>

						                <?php if($theme_options->get( 'display_add_to_wishlist' ) != '0') { ?>
						                <li><a onclick="wishlist.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" title="<?php if($theme_options->get( 'add_to_wishlist_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'add_to_wishlist_text', $config->get( 'config_language_id' ) ); } else { echo 'Add to wishlist'; } ?>"><i class="storm-heart"></i> </a></li>
						                <?php } ?>
						                <?php if($theme_options->get( 'display_add_to_compare' ) != '0') { ?>
						                <li><a onclick="compare.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" title="<?php if($theme_options->get( 'add_to_compare_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'add_to_compare_text', $config->get( 'config_language_id' ) ); } else { echo 'Add to compare'; } ?>"><i class="storm-balance"></i></a></li>
						                <?php } ?>
						              </ul>
						              <?php } ?>

						            </div>
						            <?php } ?>
						          </div>
						        </div>
						      </div>
						    <?php } ?>
						  </div>
						</div>
						<div class="row pagination-results">
					    <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
					    <div class="col-sm-6 text-right"><?php echo $results; ?></div>
					  </div>
					</div>
				</div>
			<?php } ?>
		</div>
		<?php if (!$categories && !$products) { ?>
			<p><?php echo $text_empty; ?></p>
		<?php } ?>
	</div>
</div>
