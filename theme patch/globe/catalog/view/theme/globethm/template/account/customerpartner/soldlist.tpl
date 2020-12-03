<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>
  <?php if($chkIsPartner){ ?>
  <fieldset>
      <legend><?php echo $heading_title." ".$product_id; ?></legend>
      <?php if(!isset($access_error) && isset($isMember) && $isMember) { ?>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
          <tr>
            <td class="text-left"><a><?php echo $entry_wkorder ?></a></td>
            <td class="text-left"><a><?php echo $entry_wkcustomer ?></a></td>
            <td class="text-left"><a><?php echo $entry_wkqty ?></a></td>
            <td class="text-eft"><a><?php echo $entry_wkprice ?></a></td>
            <td class="text-left"><a><?php echo $entry_wksold ?></a></td>
            <td class="text-center"><a><?php echo $entry_transaction_status ?></a></td>
            <td class="text-left"></td>
          </tr>
          </thead>
          <tbody>
            <?php if($orders){ ?>
              <?php foreach($orders as $order) {?>
                <tr>
                  <td class="text-left"><?php echo "#".$order['order_id'] ?></td>
                  <td class="text-left"><?php echo $order['name'] ?></td>
                  <td class="text-left"><?php echo $order['quantity']?></td>
                  <td class="text-left"><?php echo $order['price']; ?></td>
                  <td class="text-left"><?php echo $order['date_added'];?></td>
                  <td class="text-center"><?php echo $order['paid_status'];?></td>
                  <td class="text-center"> <a href="<?php echo $order['link'];?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="<?php echo $text_invoice; ?>"> <i class="fa fa-eye"></i></a></td>
                <tr>
              <?php } ?>
            <?php }else{ ?>
            <tr>
              <td colspan="6" class="text-left"></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <div class="text-right"><?php echo $pagination ;?></div>
        <div class="text-right"><?php echo $results ;?></div>
      </div>
      <div class="buttons clearfix">
        <div class="pull-left"><a href="<?php echo $back; ?>" class="btn btn-default"><?php echo $button_back; ?></a></div>
      </div>
    </fieldset>
<?php }else{ ?>
      <?php echo $text_access; ?>
    <?php } ?>

    <?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
    <?php echo $footer; ?>
