<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

<fieldset>
      <legend><i class="fa fa-list"></i> <?php echo $heading_title; ?></legend>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="left"><?php if($sort == 'sort_dateadded') { ?>
                <a href="<?php echo $sort_dateadded; ?>" class="<?php echo strtolower($order); ?>" ><?php echo $text_added_date; ?></a>
                <?php } else { ?>
                <a href="<?php echo $sort_dateadded; ?>"><?php echo $text_added_date; ?></a>
                <?php } ?>
              </td>
              <td class="center"><?php echo $text_orderstatus; ?></td>
              <td class="center"><?php echo $text_comment; ?></td>
            </tr>
          </thead>
          <tbody>
            <?php if($orders){ ?>
            <?php foreach ($orders as $key => $value) {?>
            <tr>
            <td class="text-left" ><?php echo $value['date_added']; ?></td>
            <?php foreach ($order_statuses as $key => $order_status) {?>
              <?php if ($order_status['order_status_id'] == $value['order_status_id']) {?>
                <td class="text-left" ><?php echo $order_status['name']; ?></td>
              <?php } ?>
            <?php } ?>
            <td class="text-left" ><?php echo $value['comment']; ?></td>
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
    </fieldset>

    <?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
    <?php echo $footer; ?>
