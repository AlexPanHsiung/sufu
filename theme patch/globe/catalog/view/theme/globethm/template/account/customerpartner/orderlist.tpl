<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>
  <fieldset>
      <legend><i class="fa fa-list"></i> <?php echo $heading_title; ?></legend>
      <?php if($isMember) { ?>
      <div class="well">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label class="control-label" for="input-order"><?php echo $text_orderid; ?></label>
              <input type="text" name="filter_order" value="<?php echo $filter_order; ?>" placeholder="<?php echo $text_orderid; ?>" id="input-order" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-name"><?php echo $text_customer; ?></label>
              <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" placeholder="<?php echo $text_customer; ?>" id="input-name" class="form-control" />
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label class="control-label" for="input-date"><?php echo $text_added_date; ?></label>
              <div class="input-group date">
                <input type="text" name="filter_date" value="<?php echo $filter_date; ?>" data-date-format="YYYY-MM-DD" placeholder="<?php echo $text_added_date; ?>" id="input-date" class="form-control date" />
                <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label class="control-label" for="input-status"><?php echo $text_status; ?></label>
              <select name="filter_status" class="form-control" id="input-status">
                <option value="*"></option>
                <?php foreach ($status as $key => $value) { ?>
                  <option value="<?php echo $value['name']; ?>" <?php echo ($filter_status == $value['name'] || $filter_status == $value['order_status_id']) ? 'selected' : ''; ?> ><?php echo $value['name']; ?></option>
                <?php } ?>
              </select>
            </div>
            <a onclick="filter();" class="btn btn-primary"><?php echo $button_filter; ?></a>
            <a onclick="refilter();" class="btn btn-default"> <i class="fa fa-refresh"></i> </a>

          </div>

        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="left">
                <?php if ($sort == 'o.order_id') { ?>
                <a href="<?php echo $sort_order; ?>" class="<?php echo strtolower($order); ?>"><?php echo $text_orderid; ?></a>
                <?php } else { ?>
                <a href="<?php echo $sort_order; ?>"><?php echo $text_orderid; ?></a>
                <?php } ?>
              </td>
              <td class="left">
                <?php if ($sort == 'o.firstname') { ?>
                <a href="<?php echo $sort_name; ?>" class="<?php echo strtolower($order); ?>"><?php echo $text_customer; ?></a>
                <?php } else { ?>
                <a href="<?php echo $sort_name; ?>"><?php echo $text_customer; ?></a>
                <?php } ?>
              </td>
              <td class="left"><?php echo ($text_products); ?></td>
              <td class="left"><?php echo $text_total; ?></td>
              <td class="left"><?php if($sort == 'os.name') { ?>
                <a href="<?php echo $sort_status; ?>" class="<?php echo strtolower($order); ?>" ><?php echo $text_status; ?></a>
                <?php } else { ?>
                <a href="<?php echo $sort_status; ?>"><?php echo $text_status; ?></a>
                <?php } ?>
              </td>
              <td class="left"><?php if($sort == 'o.date_added') { ?>
                <a href="<?php echo $sort_date; ?>" class="<?php echo strtolower($order); ?>" ><?php echo $text_added_date; ?></a>
                <?php } else { ?>
                <a href="<?php echo $sort_date; ?>"><?php echo $text_added_date; ?></a>
                <?php } ?>
              </td>
              <td class="center"><?php echo $text_action; ?></td>
            </tr>
          </thead>
          <tbody>
            <?php if($orders){ ?>
              <?php foreach($orders as $item) {?>
                <tr>
                  <td><?php echo $item['order_id']; ?></td>
                  <td><?php echo $item['name'];?></td>
                  <td><?php echo $item['productname']; ?></td>
                  <td><?php echo $item['total']; ?></td>
                  <td><?php echo $item['orderstatus']; ?></td>
                  <td><?php echo $item['date_added']; ?></td>
                  <td class="center">
                  <a class="btn btn-primary btn-xs" href="<?php echo $item['orderidlink']; ?>"><i class="fa fa-eye"></i></a></td>
                </tr>
              <?php } ?>
            <?php } else{ ?>
            <tr>
              <td class="text-center" colspan="10"><?php echo $text_no_results; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="text-right"><?php echo $pagination ;?></div>
      <div class="text-right"><?php echo $results ;?></div>
      <?php } else { ?>
        <div class="text-danger">
          <?php echo $error_warning_authenticate; ?>
        </div>
      <?php } ?>
    </fieldset>

        <script type="text/javascript">
$('.date').datetimepicker({
  pickTime: false
});

function refilter(){
  location = '<?php echo $current; ?>';
}

function filter() {
  url = '<?php echo $current; ?>';

  var filter_order = $('input[name=\'filter_order\']').val();

  if (filter_order) {
    url += '&filter_order=' + encodeURIComponent(filter_order);
  }

  var filter_name = $('input[name=\'filter_name\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_status = $('select[name=\'filter_status\']').val();

  if (filter_status != '*') {
    url += '&filter_status=' + encodeURIComponent(filter_status);
  }

  var filter_date = $('input[name=\'filter_date\']').val();

  if (filter_date) {
    url += '&filter_date=' + encodeURIComponent(filter_date);
  }

  location = url;
}
//--></script>
<script type="text/javascript"><!--
$('fieldset input').keydown(function(e) {
  if (e.keyCode == 13) {
    filter();
  }
});

//--></script>

<?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>
