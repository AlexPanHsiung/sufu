<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

<fieldset>
	    <legend><i class="fa fa-pencil"></i> <?php echo $heading_title; ?></legend>
		<?php if($isMember) { ?>
		    <?php if($chkIsPartner){ ?>
			<div class="row">
			  <div class="col-lg-4 col-md-4 col-sm-6"><?php echo $order; ?></div>
			  <div class="col-lg-4 col-md-4 col-sm-6"><?php echo $sale; ?></div>
			  <div class="col-lg-4 col-md-4 col-sm-6"><?php echo $customer; ?></div>
			</div>
			 <div class="row">
                <div class="col-sm-6"><?php echo $low_stock; ?></div>
                <div class="col-sm-6">
	                <?php echo $order_status; ?>
                </div>
            </div>
			<div class="row">
			  <div class="col-lg-6 col-md-12 col-sx-12 col-sm-12"><?php echo $map; ?></div>
			  <div class="col-lg-6 col-md-12 col-sx-12 col-sm-12"><?php echo $chart; ?></div>
			</div>
			<div class="row">
			  <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12"> <?php echo $recent; ?> </div>
			</div>
	    	<?php } ?>
	    <?php } else { ?>
	    <div class="text-danger">
	    	<?php echo $error_warning_authenticate; ?>
	    </div>
	    <?php } ?>
    </fieldset>

		<?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
		<?php echo $footer; ?>
