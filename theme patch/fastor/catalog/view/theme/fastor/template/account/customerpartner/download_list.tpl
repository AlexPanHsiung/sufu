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
<?php } ?>
<?php if(isset($separate_view) && $separate_view){ ?>
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <?php } ?>

<?php if($chkIsPartner){ ?>
      <h1>
        <?php echo $heading_title; ?>
        <div class="pull-right">
          <a href="<?php echo $insert; ?>" data-toggle="tooltip" title="<?php echo $button_insert; ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
          <a onclick="$('#form-download').submit();" data-toggle="tooltip" class="btn btn-danger"  title="<?php echo $button_delete; ?>"><i class="fa fa-trash-o"></i></a>
        </div>
      </h1>

      <legend><i class="fa fa-list"></i> <?php echo $text_downloadableItems; ?></legend>
        <?php if($isMember) { ?>
          <form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form-download">
            <div class="table-responsive" style="overflow: auto">
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
        <?php } else { ?>
          <div class="text-danger">
            <?php echo $error_warning_authenticate; ?>
          </div>
        <?php } ?>
        <?php }else{  echo "<h2 style='color:#F93D49;'>Please inform Admin</h2>";   } ?>
          <?php if(!isset($separate_view) || !$separate_view){
          include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl');
          } ?>

          <?php echo $footer; ?>
<script type="text/javascript">
$('#form-download').submit(function(){
    if ($(this).attr('action').indexOf('delete',1) != -1) {
        if (!confirm('<?php echo $text_confirm; ?>')) {
            return false;
        }
    }
});
</script>
