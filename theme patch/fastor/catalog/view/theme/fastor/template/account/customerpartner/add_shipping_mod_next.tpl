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
<?php if(isset($separate_view) && $separate_view){ ?>
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <?php } ?>

    <h1>
        <?php echo $heading_title; ?>
        <div class="pull-right">
          <button type="submit" form="form-shipping" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
          <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
        </div>
      </h1>


      <legend><i class="fa fa-list"></i> <?php echo $text_mpshipping; ?></legend>
      <?php if($isMember) { ?>
        <div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> <?php echo $text_separator_info; ?>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">

          <?php if($shippingTable){ ?>
            <?php foreach ($shippingTable as $value) { ?>
              <div class="form-group">
                  <label class="col-sm-2 control-label"><span data-toggle="tooltip" title=""><?php echo ucfirst(str_replace('_',' ',$value)); ?></span></label>

                  <div class="col-sm-10">
                    <select name="<?php echo $value; ?>" class="form-control">
                        <option value=""></option>
                        <?php foreach ($fields as $key => $field) { ?>
                          <option value="<?php echo $key; ?>" <?php if(strtolower($field) == strtolower($value)) echo 'selected'; ?> ><?php echo $field; ?></option>
                        <?php } ?>
                        </select>
                  </div>
                </div>
            <?php } ?>
          <?php } ?>
        </form>
      <?php } else { ?>
        <div class="text-danger">
          <?php echo $error_warning_authenticate; ?>
        </div>
      <?php } ?>
      <?php if(!isset($separate_view) || !$separate_view){
      include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl');
      } ?>
      <?php echo $footer; ?>
