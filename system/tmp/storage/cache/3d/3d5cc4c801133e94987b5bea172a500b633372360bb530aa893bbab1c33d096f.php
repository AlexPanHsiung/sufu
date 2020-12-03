<?php

/* default/template/d_quickcheckout/payment.twig */
class __TwigTemplate_d68c47ecad5547a50c85476745eb42a147b554213601fc49226236d87415ef57 extends Twig_Template
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
        echo "<div id=\"payment_view\" class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo "\" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "\"></div>
<script type=\"text/html\" id=\"payment_template\">
<% if(Number(model.payment_popup)) { %>
\t
<div class=\"modal fade\" id=\"payment_modal\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"> &times; </span></button>
\t\t\t\t<h4 class=\"modal-title\"><span class=\"text\"><%= model.payment_popup_title %></span></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body clearfix\">
\t\t\t\t<% if(model.payment){ %>
\t\t\t\t\t<%= model.payment %>
\t\t\t\t<% } %>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<% } else { %>
\t<% if(model.payment){ %>
\t\t<%= model.payment %>
\t<% } %>
<% } %>
</script>
<script>

\$(function() {
\tqc.payment = \$.extend(true, {}, new qc.Payment(";
        // line 29
        echo (isset($context["json"]) ? $context["json"] : null);
        echo "));
\tqc.paymentView = \$.extend(true, {}, new qc.PaymentView({
\t\tel:\$(\"#payment_view\"), 
\t\tmodel: qc.payment, 
\t\ttemplate: _.template(\$(\"#payment_template\").html())
\t}));

});

</script>

";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 29,  19 => 1,);
    }
}
/* <div id="payment_view" class="qc-step" data-col="{{ col }}" data-row="{{ row }}"></div>*/
/* <script type="text/html" id="payment_template">*/
/* <% if(Number(model.payment_popup)) { %>*/
/* 	*/
/* <div class="modal fade" id="payment_modal">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>*/
/* 				<h4 class="modal-title"><span class="text"><%= model.payment_popup_title %></span></h4>*/
/* 			</div>*/
/* 			<div class="modal-body clearfix">*/
/* 				<% if(model.payment){ %>*/
/* 					<%= model.payment %>*/
/* 				<% } %>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <% } else { %>*/
/* 	<% if(model.payment){ %>*/
/* 		<%= model.payment %>*/
/* 	<% } %>*/
/* <% } %>*/
/* </script>*/
/* <script>*/
/* */
/* $(function() {*/
/* 	qc.payment = $.extend(true, {}, new qc.Payment({{ json }}));*/
/* 	qc.paymentView = $.extend(true, {}, new qc.PaymentView({*/
/* 		el:$("#payment_view"), */
/* 		model: qc.payment, */
/* 		template: _.template($("#payment_template").html())*/
/* 	}));*/
/* */
/* });*/
/* */
/* </script>*/
/* */
/* */
