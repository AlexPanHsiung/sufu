<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

<fieldset>
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

      <div class="buttons clearfix">

          <div class="pull-left"><a href="<?php echo $cancel; ?>" class="btn btn-default"><?php echo $button_cancel; ?></a></div>
          <div class="pull-right">
            <button type="submit" form="form-shipping" class="btn btn-primary"><?php echo $button_save; ?></button>
          </div>
        </div>

    </fieldset>

  <?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
  <?php echo $footer; ?>
