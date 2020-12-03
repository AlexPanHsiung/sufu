<?php

/* default/template/d_quickcheckout/confirm.twig */
class __TwigTemplate_826fd7c5f4a0df6b09156406f5d473fb3533b5ffb5678ed6730e605e2b0390cb extends Twig_Template
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
        echo "<div id=\"confirm_view\" class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo "\" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "\"></div>
<script type=\"text/html\" id=\"confirm_template\">
<div id=\"confirm_wrap\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<form id=\"confirm_form\" class=\"form-horizontal\">
\t\t\t</form>
\t\t\t
\t\t\t<button id=\"qc_confirm_order\" class=\"btn btn-primary btn-lg btn-block \" <%= model.show_confirm ? '' : 'disabled=\"disabled\"' %>><% if(Number(model.payment_popup)) { %>";
        // line 9
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "<% } else { %>";
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "<% } %></span></button>

\t\t</div>
\t</div>
</div>
</script>
<script>

\$(function() {
\tqc.confirm = \$.extend(true, {}, new qc.Confirm(";
        // line 18
        echo (isset($context["json"]) ? $context["json"] : null);
        echo "));
\tqc.confirmView = \$.extend(true, {}, new qc.ConfirmView({
\t\tel:\$(\"#confirm_view\"), 
\t\tmodel: qc.confirm, 
\t\ttemplate: _.template(\$(\"#confirm_template\").html())
\t}));
});

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  33 => 9,  19 => 1,);
    }
}
/* <div id="confirm_view" class="qc-step" data-col="{{ col }}" data-row="{{ row }}"></div>*/
/* <script type="text/html" id="confirm_template">*/
/* <div id="confirm_wrap">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<form id="confirm_form" class="form-horizontal">*/
/* 			</form>*/
/* 			*/
/* 			<button id="qc_confirm_order" class="btn btn-primary btn-lg btn-block " <%= model.show_confirm ? '' : 'disabled="disabled"' %>><% if(Number(model.payment_popup)) { %>{{ button_continue }}<% } else { %>{{ button_confirm }}<% } %></span></button>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </script>*/
/* <script>*/
/* */
/* $(function() {*/
/* 	qc.confirm = $.extend(true, {}, new qc.Confirm({{ json }}));*/
/* 	qc.confirmView = $.extend(true, {}, new qc.ConfirmView({*/
/* 		el:$("#confirm_view"), */
/* 		model: qc.confirm, */
/* 		template: _.template($("#confirm_template").html())*/
/* 	}));*/
/* });*/
/* */
/* </script>*/
