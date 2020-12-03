<?php

if(!isset($_GET['t']) || preg_match("/[^\w\-\.]+/", $_GET['t'])) die();
header('Content-Type: text/javascript');
?>
(function($){$(document).ready(function(){var _u = document.location.href+(document.location.href.indexOf('?')==-1?'?':'&amp;')+'tracking=<?php echo $_GET['t'];?>';var _v='<div class="alert"><div class="text-center"><a href="javascript:;" onclick="javascript:$(this).parent().parent().find(\'.aff-link\').toggle();"><i id="copy-affiliate" class="btn btn-info" style="background-color: #46B8DA; color: #fff;" data-clipboard-text=\"'+_u+'\"><i class="fa fa-link" style="font-weight: bolder;">&nbsp按我複製本頁追蹤連結</i></i></a></div><div class="text-center aff-link auto-new-line" style="display:none;padding-bottom:3px;color:#c43;">'+document.location.href+(document.location.href.indexOf('?')==-1?'?':'&amp;')+'tracking=<?php echo $_GET['t'];?> &nbsp; </div>';$('footer>.container>.row').length>0?$('footer>.container>.row').prepend(_v):$('body').append(_v);});})(jQuery&&jQuery.ready?jQuery:$);
