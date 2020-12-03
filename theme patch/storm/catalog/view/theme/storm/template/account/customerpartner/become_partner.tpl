<?php echo $header; 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); 
include('catalog/view/theme/' . $config->get($config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>  
      <h1>
        <?php echo $heading_title; ?>
        <div class="pull-right">
          <a href="<?php echo $back; ?>" data-toggle="tooltip" title="<?php echo $button_back; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
        </div>
      </h1>
      
        <legend><i class="fa fa-list"></i> <?php echo $heading_title; ?></legend>
      <?php if($isMember) { ?>
        <?php if(!$in_process){  ?>          
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data"  class="form-horizontal">

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-shoppartner"><span data-toggle="tooltip" title="<?php echo $text_shop_name_info; ?>"><?php echo $text_shop_name; ?></span></label>
            <div class="col-sm-10">

              <div class="input-group"> 
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" name="shoppartner" value="<?php echo $shoppartner; ?>" id="input-shoppartner" class="form-control" />
              </div>

              <?php if ($error_shoppartner) { ?>
              <div class="text-danger"><?php echo $error_shoppartner; ?></div>
              <?php } ?>
            </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-entry"><span data-toggle="tooltip" title="<?php echo $text_say_info; ?>"><?php echo $text_say; ?></span></label>
            <div class="col-sm-10">
              <textarea id="input-entry" name="description" class="form-control" rows="3"><?php echo $description; ?></textarea>
              <?php if ($error_description) { ?>
              <div class="text-danger"><?php echo $error_description; ?></div>
              <?php } ?>
            </div>
          </div>

          <div class="pull-right">
            <input type="submit" value="<?php echo $button_continue; ?>" class="btn btn-primary"/>
          </div> 

        </form>

        <?php }else {?>             
          <div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> <?php echo $text_delay; ?></div>
        <?php } ?>
      <?php } else { ?>
        <div class="text-danger">
          <?php echo $error_warning_authenticate; ?>
        </div>
      <?php } ?>
<?php include('catalog/view/theme/' . $config->get($config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>

<?php if(!$in_process){  ?>  
<script>
$( "#input-shoppartner" ).change(function() {
  thisshop = this;
  shop = $(thisshop).val();
  
  if(shop){

    jQuery(thisshop).prev().html('<i class="fa fa-spinner fa-spin"></i>');

    $.ajax({
           type: 'POST',
           data: ({shop: shop}),
           dataType: 'json',
           url: 'index.php?route=customerpartner/sell/wkmpregistation',
           success: function(data){     

              if(data['success']){
                jQuery(thisshop).prev().html('<span data-toggle="tooltip" class="text-success" title="<?php echo $text_avaiable; ?>"><i class="fa fa-thumbs-o-up"></i></span>');
              }else if(data['error']){
                jQuery(thisshop).prev().html('<span data-toggle="tooltip" class="text-danger" title="<?php echo $text_no_avaiable; ?>"><i class="fa fa-thumbs-o-down"></i></span>');
              }       
            
            }
        });
  }
});
</script>
<?php } ?>
<?php echo $footer; ?>
