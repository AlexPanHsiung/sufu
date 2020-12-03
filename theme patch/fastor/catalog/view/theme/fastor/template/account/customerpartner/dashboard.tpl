<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
if(!isset($separate_view) || !$separate_view){
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>
<?php } ?>
<?php echo $separate_column_left; ?>
<?php if(isset($separate_view) && $separate_view){ ?>
  <?php if(isset($lang_arabic) && $lang_arabic) { ?>
    <div class="container-fluid" style="margin-right: 18%">
    <?php } else { ?>
    <div class="container-fluid" id="content" style="margin-left: 18%">
  <?php } ?>
<?php } else { ?>
  <div class="container">
<?php } ?>

<div class="row">
	<?php $class = 'col-sm-12'; ?>

	<div id="content" class="<?php echo $class; ?>">
	<h1><?php echo $heading_title; ?></h1>
	   <!-- <legend><i class="fa fa-pencil"></i> <?php echo $heading_title; ?></legend> -->
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
</div></div></div>
			<?php if(!isset($separate_view) || !$separate_view){
			include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl');
			} ?>
			<?php echo $footer; ?>
