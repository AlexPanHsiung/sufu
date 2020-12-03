<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

  <?php if($chkIsPartner){ ?>
    <fieldset>
      <legend><?php echo $text_downloadableItems; ?></legend>
        <?php if($isMember) { ?>
          <form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form-download">
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td width="1" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                <td class="text-left"><?php if ($sort == 'dd.name') { ?>
                  <a href="<?php echo $sort_name; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_name; ?></a>
                  <?php } else { ?>
                  <a href="<?php echo $sort_name; ?>"><?php echo $column_name; ?></a>
                  <?php } ?></td>
                  <td class="text-right"><?php echo $column_action; ?></td>
              </tr>
            </thead>
            <tbody>
              <?php if ($downloads) { ?>
              <?php foreach ($downloads as $download) { ?>
              <tr>
                <td class="text-center"><?php if ($download['selected']) { ?>
                  <input type="checkbox" name="selected[]" value="<?php echo $download['download_id']; ?>" checked="checked" />
                  <?php } else { ?>
                  <input type="checkbox" name="selected[]" value="<?php echo $download['download_id']; ?>" />
                  <?php } ?></td>
                <td class="text-left"><?php echo $download['name']; ?></td>
                <td class="text-right"><?php foreach ($download['action'] as $action) { ?>
                   <a data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="<?php echo $action['text']; ?>" href="<?php echo $action['href']; ?>"><i class="fa fa-pencil"></i></a>
                  <?php } ?></td>
              </tr>
              <?php } ?>
              <?php } else { ?>
              <tr>
                <td class="text-center" colspan="6"><?php echo $text_no_results; ?></td>
              </tr>
              <?php } ?>
            </tbody>
            </table>
            </div>
          </form>
          <div class="text-right"><?php echo $pagination; ?></div>
          <div class="text-right"><?php echo $results; ?></div>

        <?php }else{  echo "<h2 style='color:#F93D49;'>Please inform Admin</h2>";   } ?>
        <div class="buttons clearfix">
          <div class="pull-left"><a href="<?php echo $insert; ?>" class="btn btn-primary"><?php echo $button_insert; ?></a></div>
          <div class="pull-right">
            <a onclick="$('#form-download').submit();" class="btn btn-danger"><?php echo $button_delete; ?></a>
          </div>
        </div>
      </fieldset>

    <script type="text/javascript">
      $('#form-download').submit(function(){
          if ($(this).attr('action').indexOf('delete',1) != -1) {
              if (!confirm('<?php echo $text_confirm; ?>')) {
                  return false;
              }
          }
      });
    </script>
  <?php } else { ?>
    <div class="text-danger">
      <?php echo $error_warning_authenticate; ?>
    </div>
  <?php } ?>
  <?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
  <?php echo $footer; ?>
