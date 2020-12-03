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
    <?php if ($attention) { ?>
      <div class="alert alert-info"><?php echo $attention; ?></div>
    <?php } ?>
<?php } else { ?>
  <?php $theme_options = $registry->get('theme_options');
  $config = $registry->get('config');
  include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>
<?php } ?>
<?php if ($chkIsPartner) { ?>
  <style>
      fieldset .pull-left {
        width: 29%;
        display: inline-block;
      }
      fieldset .pull-left:nth-child(1), fieldset .pull-left:nth-child(2) {
        margin-right:1%;
      }
      @media screen and (max-width: 760px) {
        .top_margin {
          margin-top: 28px;
        }
      }
      @media screen and (max-width: 550px) {
        .top_margin {
          width: auto !important;
        }
        fieldset .pull-left:nth-child(1), fieldset .pull-left:nth-child(2) {
          margin-right: 0;
        }
      }
      @media screen and (max-width: 550px) {
        fieldset .pull-left {
          display: block;
          width: 100%;
        }
        fieldset .pull-left input[type="text"] {
          width: 100%;
        }
      }
      .buttons .pull-right:nth-child(2) > .button:nth-child(1) {
        padding-top: 10px;
        padding-bottom: 10px;
      }
  </style>
    <h1>
      <?php echo $heading_title_shipping; ?>
      <div class="pull-right">
        <a href="<?php echo $add; ?>" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <a href="<?php echo $back; ?>" data-toggle="tooltip" title="<?php echo $button_back; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
        <a onclick="$('#form-delete').submit();" data-toggle="tooltip" class="btn btn-danger"  title="<?php echo $button_delete; ?>"><i class="fa fa-trash-o"></i></a>
      </div>
    </h1>

    <legend><i class="fa fa-list"></i> <?php echo $text_mpshipping; ?></legend>
      <?php if ($isMember) { ?>
          <div class="well">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-country"><?php echo $shipping_country; ?></label>
                  <input type="text" name="filter_country" value="<?php echo $filter_country; ?>" placeholder="<?php echo $filter_country; ?>" id="input-country" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-price"><?php echo $price; ?></label>
                  <input type="text" name="filter_price" value="<?php echo $filter_price; ?>" placeholder="<?php echo $filter_price; ?>" id="input-price" class="form-control" />
                </div>
              </div>

               <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-zipto"><?php echo $zip_to; ?></label>
                  <input type="text" name="filter_zip_to" value="<?php echo $filter_zip_to; ?>" placeholder="<?php echo $filter_zip_to; ?>" id="input-zipto" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-weightto"><?php echo $weight_to; ?></label>
                  <input type="text" name="filter_weight_to" value="<?php echo $filter_weight_to; ?>" placeholder="<?php echo $filter_weight_to; ?>" id="input-weightto" class="form-control" />
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-zipfrom"><?php echo $zip_from; ?></label>
                  <input type="text" name="filter_zip_from" value="<?php echo $filter_zip_from; ?>" placeholder="<?php echo $filter_zip_from; ?>" id="input-zipfrom" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-weightfrom"><?php echo $weight_from; ?></label>
                  <input type="text" name="filter_weight_from" value="<?php echo $filter_weight_from; ?>" placeholder="<?php echo $filter_weight_from; ?>" id="input-weightfrom" class="form-control" />
                </div>
              </div>
              <a onclick="clearfilter();"  class="btn btn-danger pull-right" style="margin-left: 10px;" data-toggle="tooltip" title="<?php echo $button_clear_filtering; ?>"><?php echo $button_clear_filtering; ?></a>

              <a onclick="filter();"  class="btn btn-primary pull-right" data-toggle="tooltip" title="<?php echo $button_filtering; ?>"><?php echo $button_filtering; ?></a>
            </div>
          </div>
          <form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form-delete">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <td width="1" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                      <td class="text-left">
                        <?php if ($sort == 'cs.country_code') { ?>
                        <a href="<?php echo $sort_country_code; ?>" class="<?php echo $order|lower; ?>"><?php echo $shipping_country; ?></a>
                      <?php } else { ?>
                        <a href="<?php echo $sort_country_code; ?>"><?php echo $shipping_country; ?></a>
                      <?php } ?>
                      </td>
                      <td class="text-left">
                        <?php if ($sort == 'cs.zip_from') { ?>
                        <a href="<?php echo $sort_zip_from; ?>" class="<?php echo $order|lower; ?>"><?php echo $zip_from; ?></a>
                      <?php } else { ?>
                        <a href="<?php echo $sort_zip_from; ?>"><?php echo $zip_from; ?></a>
                      <?php } ?>
                      </td>
                      <td class="text-left">
                        <?php if ($sort == 'cs.zip_to') { ?>
                        <a href="<?php echo $sort_zip_to; ?>" class="<?php echo $order|lower; ?>"><?php echo $zip_to; ?></a>
                      <?php } else { ?>
                        <a href="<?php echo $sort_zip_to; ?>"><?php echo $zip_to; ?></a>
                      <?php } ?>
                      </td>
                      <td class="text-left">
                        <?php if ($sort == 'cs.price') { ?>
                        <a href="<?php echo $sort_price; ?>" class="<?php echo $order|lower; ?>"><?php echo $price; ?></a>
                      <?php } else { ?>
                        <a href="<?php echo $sort_price; ?>"><?php echo $price; ?></a>
                      <?php } ?>
                      </td>
                      <td class="text-left">
                        <?php if ($sort == 'cs.weight_from') { ?>
                        <a href="<?php echo $sort_weight_from; ?>" class="<?php echo $order|lower; ?>"><?php echo $weight_from; ?></a>
                      <?php } else { ?>
                        <a href="<?php echo $sort_weight_from; ?>"><?php echo $weight_from; ?></a>
                      <?php } ?>
                      </td>
                      <td class="text-left">
                        <?php if ($sort == 'cs.weight_to') { ?>
                        <a href="<?php echo $sort_weight_to; ?>" class="<?php echo $order|lower; ?>"><?php echo $weight_to; ?></a>
                      <?php } else { ?>
                        <a href="<?php echo $sort_weight_to; ?>"><?php echo $weight_to; ?></a>
                      <?php } ?>
                      </td>
                      <td class="text-left"><?php echo $max_days; ?></td>
                    </tr>
                </thead>
                <tbody>
                      <?php if ($result_shipping) { ?>
                      <?php foreach ($result_shipping as $result_shippings) { ?>
                        <tr>
                          <td class="text-center"><?php if ($result_shippings['selected']) { ?>
                            <input type="checkbox" name="selected[]" value="<?php echo $result_shippings['id']; ?>" checked="checked" />
                            <?php } else { ?>
                            <input type="checkbox" name="selected[]" value="<?php echo $result_shippings['id']; ?>" />
                            <?php } ?>
                          </td>
                          <td class="text-left"><?php echo  $result_shippings['country']; ?></td>
                          <td class="text-left" ><?php echo $result_shippings['zip_from']; ?></td>
                          <td class="text-left"><?php echo $result_shippings['zip_to']; ?></td>
                          <td class="text-left"><?php echo  $result_shippings['price']; ?></td>
                          <td class="v"><?php echo $result_shippings['weight_from']; ?></td>
                          <td class="text-left"><?php echo $result_shippings['weight_to']; ?></td>
                          <td class="text-left"><?php echo $result_shippings['max_days']; ?></td>
                        </tr>
                      <?php } ?>
                      <?php } else { ?>
                      <tr>
                        <td class="text-center" colspan="12"><?php echo $no_records_found; ?></td>
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
<?php } else { ?>
  <h2 style='color:#F93D49;'>Please inform Admin</h2>
<?php } ?>
<?php if (isset($separate_view) && $separate_view) { ?>
  </div> <!-- Content Div -->
<?php } else { ?>
  <?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php } ?>
<script type="text/javascript">
jQuery('input[name=up_file]').change(function(){
  csv_val = jQuery(this).val().split('.').pop();
    $('#input-csv-name').val(jQuery(this).val().replace(/C:\\fakepath\\/i, ''));
    if(csv_val!='csv'){
      jQuery('.csv-warning').addClass('text-danger').removeClass('hide');
    }else{
      jQuery('.csv-warning').addClass('hide').removeClass('text-danger');
    }
});

nextHtml = false;
prevHtml = $("<input type='text' class=\"form-control\"/>").attr({ name: 'separator' });
jQuery('.separator').click(function(){
  catchDiv = $(this).parent().next();
  nextHtml = catchDiv.html();
  catchDiv.html(prevHtml);
  prevHtml = nextHtml;
});

$('#form-delete').submit(function(){
    if ($(this).attr('action').indexOf('delete',1) != -1) {
        if (!confirm('<?php echo $text_confirm; ?>')) {
            return false;
        }
    }
});

function filter() {

  url = 'index.php?route=account/customerpartner/add_shipping_mod';

  var filter_name = $('input[name=\'filter_name\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_country = $('input[name=\'filter_country\']').val();

  if (filter_country) {
    url += '&filter_country=' + encodeURIComponent(filter_country);
  }

  var filter_price = $('input[name=\'filter_price\']').val();

  if (filter_price) {
    url += '&filter_price=' + encodeURIComponent(filter_price);
  }

  var filter_zip_to = $('input[name=\'filter_zip_to\']').val();

  if (filter_zip_to) {
    url += '&filter_zip_to=' + encodeURIComponent(filter_zip_to);
  }

  var filter_zip_from = $('input[name=\'filter_zip_from\']').val();

  if (filter_zip_from) {
    url += '&filter_zip_from=' + encodeURIComponent(filter_zip_from);
  }

  var filter_weight_to = $('input[name=\'filter_weight_to\']').val();

  if (filter_weight_to) {
    url += '&filter_weight_to=' + encodeURIComponent(filter_weight_to);
  }

  var filter_weight_from = $('input[name=\'filter_weight_from\']').val();

  if (filter_weight_from) {
    url += '&filter_weight_from=' + encodeURIComponent(filter_weight_from);
  }

  location = url;
}

function clearfilter() {

  url = 'index.php?route=account/customerpartner/add_shipping_mod';

  location = url;
}
</script>
<?php echo $footer; ?>
