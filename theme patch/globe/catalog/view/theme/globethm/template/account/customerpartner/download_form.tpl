<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

  <?php if($chkIsPartner){ ?>

     <fieldset>
      <legend><?php echo $text_downloadableInsert; ?></legend>
      <?php if(!isset($access_error) && $isMember) { ?>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-insert" class="form-horizontal">

          <div class="form-group required">
            <label class="col-sm-2 control-label"><?php echo $entry_name; ?></label>
            <div class="col-sm-10">
              <?php foreach ($languages as $language) { ?>
              <div class="input-group"> <span class="input-group-addon"><img src="catalog/language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span>
                <input type="text" name="download_description[<?php echo $language['language_id']; ?>][name]" value="<?php echo isset($download_description[$language['language_id']]) ? $download_description[$language['language_id']]['name'] : ''; ?>" placeholder="<?php echo $entry_name; ?>" class="form-control" />
              </div>
              <?php if (isset($error_name[$language['language_id']])) { ?>
              <div class="text-danger"><?php echo $error_name[$language['language_id']]; ?></div>
              <?php } ?>
              <?php } ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-filename"><span data-toggle="tooltip" title="<?php echo $help_fileDetails; ?>"><?php echo $entry_filename; ?></span></label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" name="filename" value="<?php echo $filename; ?>" placeholder="<?php echo $entry_filename; ?>" id="input-filename" class="form-control" />
                <span class="input-group-btn">
                <button type="button" id="button-upload" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
                </span> </div>
              <?php if ($error_filename) { ?>
              <div class="text-danger"><?php echo $error_filename; ?></div>
              <?php } ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-mask"><span data-toggle="tooltip" title="<?php echo $help_mask; ?>"><?php echo $entry_mask; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="mask" value="<?php echo $mask; ?>" placeholder="<?php echo $entry_mask; ?>" id="input-mask" class="form-control" />
              <?php if ($error_mask) { ?>
              <div class="text-danger"><?php echo $error_mask; ?></div>
              <?php } ?>
            </div>
          </div>
      </form>
      <div class="buttons clearfix">
          <div class="pull-left"><a href="<?php echo $cancel; ?>" class="btn btn-default"><?php echo $button_cancel; ?></a></div>
          <div class="pull-right">
            <a onclick="$('#form-insert').submit();" class="btn btn-primary"><?php echo $button_save; ?></a>
          </div>
        </div>
    </fieldset>

    <script type="text/javascript">

      $('#button-upload').on('click',function(){
        $('#form-upload').remove();
        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');
        $('#form-upload input[name=\'file\']').trigger('click');

        $('#form-upload input[name=\'file\']').on('change', function() {
          $.ajax({
            url: 'index.php?route=account/customerpartner/download/upload',
            type: 'post',
            dataType: 'json',
            data: new FormData($(this).parent()[0]),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
              $('#button-upload').button('loading');
            },
            complete: function() {
              $('#button-upload').button('reset');
            },
            success: function(json) {

              if (json['error']) {
                alert(json['error']);
              }

              if (json['success']) {
                alert(json['success']);

                $('input[name=\'filename\']').attr('value', json['filename']);
                $('input[name=\'mask\']').attr('value', json['mask']);
              }
            },
            error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
          });
        });

      })//function
      </script>

  <?php }else{  echo $text_access;  } ?>


<?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>
