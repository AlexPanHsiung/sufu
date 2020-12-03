<?php

/* default/template/d_quickcheckout/payment_address.twig */
class __TwigTemplate_64451ce707ba23de9bc3a439557f2cbf564915160c263e49b4f638153d596a3c extends Twig_Template
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
        echo "<div id=\"payment_address\" class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo "\" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "\"></div>
<script type=\"text/html\" id=\"payment_address_template\">
<div class=\"<%= parseInt(model.config.display) ? '' : 'hidden' %>\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h4 class=\"panel-title\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"text\"><%= model.config.title %></span>
\t\t\t</h4>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<% if(model.config.description){ %><p class=\"description\"><%= model.config.description %></p><% } %>
\t\t\t<% if(model.account == 'logged'){ %>
\t\t\t\t<% if(_.size(model.addresses) > 0){ %>
\t\t\t\t\t<p>";
        // line 17
        echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
        echo "</p>

\t\t\t\t\t<% if(config.design.address_style == 'list') { %>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<% _.each (model.addresses, function(address) { %>
\t\t\t\t\t\t<div class=\"list-group-item <%= address.address_id == model.payment_address.address_id ? 'active' : '' %>\">
\t\t\t\t            <label for=\"payment_address_exists_<%= address.address_id %>\">
\t\t\t\t            \t<input type=\"radio\" name=\"payment_address[address_id]\" class=\"payment-address\"  value=\"<%= address.address_id %>\" id=\"payment_address_exists_<%= address.address_id %>\" <%= address.address_id == model.payment_address.address_id ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t\t\t              \t<div class=\"address-item\" ><%= sformat(address.address_format, address) %> </div>
\t\t\t\t            </label>
\t\t\t\t        </div>
\t\t\t        <% }) %>
\t\t\t\t\t</div>
\t\t\t\t\t<% }else{ %>
\t\t\t\t\t\t<% _.each (model.addresses, function(address) { %>
\t\t\t\t\t\t<div class=\"radio-input\">
\t\t\t\t\t\t\t<label for=\"payment_address_exists_<%= address.address_id %>\">
\t\t\t\t            \t<input type=\"radio\" name=\"payment_address[address_id]\" class=\"payment-address\" value=\"<%= address.address_id %>\" id=\"payment_address_exists_<%= address.address_id %>\" <%= address.address_id == model.payment_address.address_id ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t\t\t                <strong> <%= address.firstname %>
\t\t\t\t                <%= address.lastname %></strong>
\t\t\t\t                <%= address.address_1 %>
\t\t\t\t                <%= address.address_2 %>
\t\t\t\t                <%= address.city %>
\t\t\t\t                <%= address.zone %>
\t\t\t\t                <%= address.country %>,
\t\t\t\t                <%= address.postcode %>
\t\t\t\t            </label>
\t\t\t            </div>
\t\t\t            <% }) %>
\t\t\t\t\t<% } %>
\t\t\t\t<% } %>
\t\t\t\t<div class=\"radio-input\">
\t\t            <input type=\"radio\" name=\"payment_address[address_id]\" class=\"payment-address\" value=\"new\" id=\"payment_address_exists_new\" <%= (model.payment_address.address_id == 'new' || model.payment_address.address_id == 0) ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t            <label for=\"payment_address_exists_new\">
\t\t                ";
        // line 51
        echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
        echo "
\t\t            </label>
\t\t        </div>
\t\t        <form id=\"payment_address_form\" class=\"form-horizontal <%= (model.payment_address.address_id == 'new' || model.payment_address.address_id == '0') ? '' : 'hidden' %>\">

\t\t\t\t</form>

\t\t\t<% }else{ %>
\t\t\t<form id=\"payment_address_form\" class=\"form-horizontal\">

\t\t\t</form>
\t\t\t<% } %>
\t\t</div>
\t</div>
</div>
</script>

<script>
\$(function() {
\tqc.paymentAddress = \$.extend(true, {}, new qc.PaymentAddress(";
        // line 70
        echo (isset($context["json"]) ? $context["json"] : null);
        echo "));
\tqc.paymentAddressView = \$.extend(true, {}, new qc.PaymentAddressView({
\t\tel:\$(\"#payment_address\"),
\t\tmodel: qc.paymentAddress,
\t\ttemplate: _.template(\$(\"#payment_address_template\").html())
\t}));
\tqc.paymentAddressView.setZone(qc.paymentAddress.get('payment_address.country_id'));

})

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 70,  78 => 51,  41 => 17,  19 => 1,);
    }
}
/* <div id="payment_address" class="qc-step" data-col="{{ col }}" data-row="{{ row }}"></div>*/
/* <script type="text/html" id="payment_address_template">*/
/* <div class="<%= parseInt(model.config.display) ? '' : 'hidden' %>">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h4 class="panel-title">*/
/* 				<span class="icon">*/
/* 					<i class="<%= model.config.icon %>"></i>*/
/* 				</span>*/
/* 				<span class="text"><%= model.config.title %></span>*/
/* 			</h4>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<% if(model.config.description){ %><p class="description"><%= model.config.description %></p><% } %>*/
/* 			<% if(model.account == 'logged'){ %>*/
/* 				<% if(_.size(model.addresses) > 0){ %>*/
/* 					<p>{{ text_address_existing }}</p>*/
/* */
/* 					<% if(config.design.address_style == 'list') { %>*/
/* 					<div class="list-group">*/
/* 					<% _.each (model.addresses, function(address) { %>*/
/* 						<div class="list-group-item <%= address.address_id == model.payment_address.address_id ? 'active' : '' %>">*/
/* 				            <label for="payment_address_exists_<%= address.address_id %>">*/
/* 				            	<input type="radio" name="payment_address[address_id]" class="payment-address"  value="<%= address.address_id %>" id="payment_address_exists_<%= address.address_id %>" <%= address.address_id == model.payment_address.address_id ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />*/
/* 				              	<div class="address-item" ><%= sformat(address.address_format, address) %> </div>*/
/* 				            </label>*/
/* 				        </div>*/
/* 			        <% }) %>*/
/* 					</div>*/
/* 					<% }else{ %>*/
/* 						<% _.each (model.addresses, function(address) { %>*/
/* 						<div class="radio-input">*/
/* 							<label for="payment_address_exists_<%= address.address_id %>">*/
/* 				            	<input type="radio" name="payment_address[address_id]" class="payment-address" value="<%= address.address_id %>" id="payment_address_exists_<%= address.address_id %>" <%= address.address_id == model.payment_address.address_id ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />*/
/* 				                <strong> <%= address.firstname %>*/
/* 				                <%= address.lastname %></strong>*/
/* 				                <%= address.address_1 %>*/
/* 				                <%= address.address_2 %>*/
/* 				                <%= address.city %>*/
/* 				                <%= address.zone %>*/
/* 				                <%= address.country %>,*/
/* 				                <%= address.postcode %>*/
/* 				            </label>*/
/* 			            </div>*/
/* 			            <% }) %>*/
/* 					<% } %>*/
/* 				<% } %>*/
/* 				<div class="radio-input">*/
/* 		            <input type="radio" name="payment_address[address_id]" class="payment-address" value="new" id="payment_address_exists_new" <%= (model.payment_address.address_id == 'new' || model.payment_address.address_id == 0) ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />*/
/* 		            <label for="payment_address_exists_new">*/
/* 		                {{ text_address_new }}*/
/* 		            </label>*/
/* 		        </div>*/
/* 		        <form id="payment_address_form" class="form-horizontal <%= (model.payment_address.address_id == 'new' || model.payment_address.address_id == '0') ? '' : 'hidden' %>">*/
/* */
/* 				</form>*/
/* */
/* 			<% }else{ %>*/
/* 			<form id="payment_address_form" class="form-horizontal">*/
/* */
/* 			</form>*/
/* 			<% } %>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </script>*/
/* */
/* <script>*/
/* $(function() {*/
/* 	qc.paymentAddress = $.extend(true, {}, new qc.PaymentAddress({{ json }}));*/
/* 	qc.paymentAddressView = $.extend(true, {}, new qc.PaymentAddressView({*/
/* 		el:$("#payment_address"),*/
/* 		model: qc.paymentAddress,*/
/* 		template: _.template($("#payment_address_template").html())*/
/* 	}));*/
/* 	qc.paymentAddressView.setZone(qc.paymentAddress.get('payment_address.country_id'));*/
/* */
/* })*/
/* */
/* </script>*/
