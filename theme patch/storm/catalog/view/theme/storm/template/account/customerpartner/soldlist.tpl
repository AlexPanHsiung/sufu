<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

    <h1>
      <?php echo $heading_title; ?>
      <div class="pull-right">
        <a href="<?php echo $back; ?>" data-toggle="tooltip" title="<?php echo $button_back; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
      </div>
    </h1>

    <fieldset>
      <legend><i class="fa fa-list"></i> <?php echo $heading_title." ".$product_id; ?></legend>
      <?php if(!isset($access_error) && isset($isMember) && $isMember) { ?>
      <div class="table-responsive" style="overflow:auto;">
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
    </fieldset>
    <?php }else{ ?>
      <?php echo $text_access; ?>
    <?php } ?>
   <?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>
