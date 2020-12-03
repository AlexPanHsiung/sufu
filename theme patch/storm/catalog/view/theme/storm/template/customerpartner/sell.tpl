<?php echo $header;
if(isset($mfilter_json)) {
	if(!empty($mfilter_json)) {
		echo '<div id="mfilter-json" style="display:none">' . base64_encode( $mfilter_json ) . '</div>';
	}
}

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/wrapper_top.tpl');

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
<style>
  .wk-seller-thumb {
    margin-bottom: 20px;
    box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important
  }

  .wk-seller-thumb .thumbnail {
    border: none;
    border-radius:
    none;margin: 0;
  }

  .wk-seller-thumb .wk-caption {
    background: #0b9bc2;
    padding: 15px 5px 5px 5px;
  }

  .wk-seller-thumb{
    color: white;
  }

  .wk-caption a{
    color: #0000EE;
  }

  .wk-seller-thumb .wk-caption p {
    margin: 3px 0;
    color: white;
  }
  .product-list, .product-grid {
    display: none;
  }
  div.product-list.active, div.product-grid.active {
    display: block !important;
  }
</style>
<div id="container">
    <div class="text-center">
      <h1 class="text-info"><?php echo $sell_header; ?></h1>
      <a href="index.php?route=account/register" type="button" class="btn btn-primary btn-lg">
        <?php echo $sell_title; ?>
      </a>
    </div>
    <br/>
    <?php if($tabs){ ?>
    <ul class="nav nav-tabs">
      <?php foreach ($tabs as $key => $value) { ?>
          <li <?php if(!$key){ ?>class="active"<?php } ?>><a href="<?php echo "#tab-".$key; ?>" data-toggle="tab"><?php echo $value['hrefValue']; ?></a></li>
      <?php }?>
    </ul>
    <div class="tab-content">
      <?php foreach ($tabs as $key => $value) { ?>
        <div id="<?php echo "tab-".$key; ?>" class="tab-pane <?php if(!$key){ ?>active<?php } ?>"><?php echo $value['description']; ?></div>
      <?php }?>
    </div>
    <?php }?>
    <br/>
    <?php if($showpartners) { ?>
    <h3><b><?php echo $text_long_time_seller; ?></b></h3>
    <div class="row">
      <?php foreach ($partners as $partner) { ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="wk-seller-thumb">
          <div class="thumbnail">
            <a href="<?php echo $partner['sellerHref']; ?>">
              <?php if($partner['thumb']) { ?>
                <img src="<?php echo $partner['thumb']; ?>" alt="<?php echo $partner['name']; ?>"
                title="<?php echo $partner['name']; ?>" class="img-responsive"/>
              <?php } else { ?>
                <div style="background-color:<?php echo $partner['backgroundcolor']; ?>"></div>
              <?php } ?>

            </a>
          </div>
          <div class="wk-caption">
            <a href="<?php echo $partner['sellerHref']; ?>"><b><?php echo $partner['name']; ?></b></a>
            <?php if($partner['country']){ ?>
              <p><?php echo $text_from; ?><span data-toggle="tooltip" title="<?php echo $text_from; ?>"><i class="fa fa-home"></i></span><b><?php echo $partner['country']; ?></b></p>
            <?php } ?>
            <p><?php echo $text_total_products; ?><?php echo $partner['total_products']; ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
    <?php if($showproducts) {?>
    <h3><b><?php echo $text_latest_product; ?></b></h3>
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
    			<select onchange="location = this.value;">
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
    			<select onchange="location = this.value;">
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
    <!-- Products list -->
    <div class="product-list"<?php if(!($theme_options->get('default_list_grid') == '1')) { echo ' class="active"'; } ?>>
    	<?php foreach ($latest as $product) { ?>

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
					<div class="seller_info text-white">
						<?php if($product['avatar']) { ?>
							<img class="img-circle float-left" src="<?php echo $product['avatar']; ?>"/>
						<?php } else { ?>
							<div class="div-img-circle float-left" style="background-color:<?php echo $product['backgroundcolor']; ?>"></div>
						<?php } ?>
						<p class="float-right">
							<?php echo $text_seller; ?>
							<span data-toggle="tooltip" title="<?php echo $text_seller; ?>"><i class="fa fa-user"></i></span>
							<a href="<?php echo $product['sellerHref']; ?>" target="_blank"> <b class="text-white" ><?php echo $product['seller_name']; ?></b></a>
						</p>

						<?php if($product['country']){ ?>
							<br/>
							<p class="float-right">
								<?php echo $text_from; ?>
								<span data-toggle="tooltip" title="<?php echo $text_from; ?>"><i class="fa fa-home"></i></span>
								<b><?php echo $product['country']; ?></b>
							</p>
						<?php } ?>
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
    <!-- Product Grid -->
    <?php
    $class = 3;
    $row = 4;

    if($theme_options->get( 'product_per_pow2' ) == 6) { $class = 2; }
    if($theme_options->get( 'product_per_pow2' ) == 5) { $class = 25; }
    if($theme_options->get( 'product_per_pow2' ) == 3) { $class = 4; }

    if($theme_options->get( 'product_per_pow2' ) > 1) { $row = $theme_options->get( 'product_per_pow2' ); }
    ?>
    <div class="product-grid"<?php if($theme_options->get('default_list_grid') == '1') { echo ' class="active"'; } ?>>
    	<div class="row" id="product-id<?php echo $product['product_id']; ?>">
  	  	<?php $row_fluid = 0; foreach ($latest as $product) { $row_fluid++; ?>
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
								<div class="seller_info text-white">
									<?php if($product['avatar']) { ?>
										<img class="img-circle float-left" src="<?php echo $product['avatar']; ?>"/>
									<?php } else { ?>
										<div class="div-img-circle float-left" style="background-color:<?php echo $product['backgroundcolor']; ?>"></div>
									<?php } ?>
									<p class="float-right">
										<?php echo $text_seller; ?>
										<span data-toggle="tooltip" title="<?php echo $text_seller; ?>"><i class="fa fa-user"></i></span>
										<a href="<?php echo $product['sellerHref']; ?>" target="_blank"> <b class="text-white" ><?php echo $product['seller_name']; ?></b></a>
									</p>

									<?php if($product['country']){ ?>
										<br/>
										<p class="float-right">
											<?php echo $text_from; ?>
											<span data-toggle="tooltip" title="<?php echo $text_from; ?>"><i class="fa fa-home"></i></span>
											<b><?php echo $product['country']; ?></b>
										</p>
									<?php } ?>
								</div>
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
    <?php } ?>
</div>
<script type="text/javascript">

function display(view) {

	if (view == 'list') {
		$('.product-grid').removeClass("active");
		$('.product-list').addClass("active");

		$('.display').html('<button id="grid" rel="tooltip" title="Grid" onclick="display(\'grid\');"><i class="storm-four-dots"></i></button> <button class="active" id="list" rel="tooltip" title="List" onclick="display(\'list\');"><i class="storm-text"></i></button>');

		localStorage.setItem('display', 'list');
	} else {

		$('.product-grid').addClass("active");
		$('.product-list').removeClass("active");

		$('.display').html('<button class="active" id="grid" rel="tooltip" title="Grid" onclick="display(\'grid\');"><i class="storm-four-dots"></i></button> <button id="list" rel="tooltip" title="List" onclick="display(\'list\');"><i class="storm-text"></i></button>');

		localStorage.setItem('display', 'grid');
	}
}

if (localStorage.getItem('display') == 'list') {
	display('list');
} else if (localStorage.getItem('display') == 'grid') {
	display('grid');
} else {
	display('<?php if($theme_options->get('default_list_grid') == '1') { echo 'grid'; } else { echo 'list'; } ?>');
}

$(document).on('mouseenter', '.seller-thumb', function() {
	$(this).find('.seller_info').slideDown();
});

$(document).on('mouseleave', '.seller-thumb', function() {
	$(this).find('.seller_info').slideUp();
});

</script>
<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>
