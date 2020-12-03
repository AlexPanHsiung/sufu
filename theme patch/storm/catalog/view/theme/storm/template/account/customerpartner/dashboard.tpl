<?php echo $header; ?>
<?php if (isset($separate_view) && $separate_view) { ?>
  <?php echo $separate_column_left; ?>
	<div class="container-fluid" id="content" style="margin-left: 18%">
		<ul class="breadcrumb">
	    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
	    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
	    <?php } ?>
	  </ul>
    <?php if ($error_warning) { ?>
     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i><?php echo $error_warning; ?></div>
     <?php } ?>
     <?php if ($success) { ?>
     <div class="alert alert-success"><i class="fa fa-check-circle"> </i> <?php echo $success; ?></div>
     <?php } ?>
<?php } else { ?>
  <?php $theme_options = $registry->get('theme_options');
  $config = $registry->get('config');
  include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>
<?php } ?>
	<h1><?php echo $heading_title_dashboard; ?></h1>
		<?php if($isMember) { ?>
		    <?php if($chkIsPartner) { ?>
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
<?php if (isset($separate_view) && $separate_view) { ?>
	</div> <!-- Content Div -->
<?php } else { ?>
	<?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php } ?>
<?php echo $footer; ?>
