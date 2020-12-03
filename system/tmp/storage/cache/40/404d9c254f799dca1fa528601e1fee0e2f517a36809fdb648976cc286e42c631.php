<?php

/* default/template/extension/payment/bank_transfer.twig */
class __TwigTemplate_7ffac3db80bdfa3f546241c14861b11089ac90b9e5094899737249c0ecab9bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>";
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "</h2>
<div class=\"form-group\">
\t<div style=\"width: 40%; display: inline-block;\">
\t\t<label class=\"control-label\">請輸入轉帳銀行</label>
        <input type=\"text\" name=\"bank_name\" id=\"bank_name\" placeholder=\"請輸入轉帳銀行\" class=\"form-control\" />
    </div>
\t<div style=\"width: 40%; display: inline-block;\">
\t\t<label class=\"control-label\" style=\"white-space:nowrap;\">請輸入銀行帳戶末5碼(對帳用)</label>
        <input type=\"text\" name=\"bank_account\" id=\"bank_account\" placeholder=\"請輸入銀行帳戶末5碼(對帳用)\" class=\"form-control\" />
    </div>
</div>
<p><b>";
        // line 12
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</b></p>
<div class=\"well well-sm\">
  <p>";
        // line 14
        echo (isset($context["bank"]) ? $context["bank"] : null);
        echo "</p>
  <p>";
        // line 15
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</p>
</div>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 19
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\tvar bank_name = \$('#bank_name').val();
\tvar bank_account = \$('#bank_account').val();
\tif(bank_name != '' && bank_account.length == 5){
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/payment/bank_transfer/confirm',
\t\t\tdataType: 'json',
\t\t\ttype: 'POST',
\t\t\tdata:{
\t\t\t\tbank_name: bank_name,
\t\t\t\tbank_account: bank_account
\t\t\t},
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-confirm').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-confirm').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];\t
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}else if(bank_name == ''){
\t\talert(\"請輸入您的轉帳帳戶末5碼及銀行!\");
\t}else if(bank_account.length != 5){
\t\talert(\"請輸入您的轉帳帳戶末5碼!\");
\t}else{
\t\talert(\"請輸入您的轉帳帳戶末5碼及銀行!\");
\t}
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/bank_transfer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  43 => 15,  39 => 14,  34 => 12,  19 => 1,);
    }
}
/* <h2>{{ text_instruction }}</h2>*/
/* <div class="form-group">*/
/* 	<div style="width: 40%; display: inline-block;">*/
/* 		<label class="control-label">請輸入轉帳銀行</label>*/
/*         <input type="text" name="bank_name" id="bank_name" placeholder="請輸入轉帳銀行" class="form-control" />*/
/*     </div>*/
/* 	<div style="width: 40%; display: inline-block;">*/
/* 		<label class="control-label" style="white-space:nowrap;">請輸入銀行帳戶末5碼(對帳用)</label>*/
/*         <input type="text" name="bank_account" id="bank_account" placeholder="請輸入銀行帳戶末5碼(對帳用)" class="form-control" />*/
/*     </div>*/
/* </div>*/
/* <p><b>{{ text_description }}</b></p>*/
/* <div class="well well-sm">*/
/*   <p>{{ bank }}</p>*/
/*   <p>{{ text_payment }}</p>*/
/* </div>*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_confirm }}" id="button-confirm" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-confirm').on('click', function() {*/
/* 	var bank_name = $('#bank_name').val();*/
/* 	var bank_account = $('#bank_account').val();*/
/* 	if(bank_name != '' && bank_account.length == 5){*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/payment/bank_transfer/confirm',*/
/* 			dataType: 'json',*/
/* 			type: 'POST',*/
/* 			data:{*/
/* 				bank_name: bank_name,*/
/* 				bank_account: bank_account*/
/* 			},*/
/* 			beforeSend: function() {*/
/* 				$('#button-confirm').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-confirm').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];	*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}else if(bank_name == ''){*/
/* 		alert("請輸入您的轉帳帳戶末5碼及銀行!");*/
/* 	}else if(bank_account.length != 5){*/
/* 		alert("請輸入您的轉帳帳戶末5碼!");*/
/* 	}else{*/
/* 		alert("請輸入您的轉帳帳戶末5碼及銀行!");*/
/* 	}*/
/* });*/
/* //--></script>*/
/* */
