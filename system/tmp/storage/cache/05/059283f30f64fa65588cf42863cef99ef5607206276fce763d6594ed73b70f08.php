<?php

/* default/template/d_quickcheckout/shipping_address.twig */
class __TwigTemplate_a8612261a27e878d328efdfcf17466c7da4101de0655a3cb6f4adfa1ac405c7e extends Twig_Template
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
        echo "<div id=\"shipping_address\" class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo " \" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo " \"></div>
<script type=\"text/html\" id=\"shipping_address_template\">
<div class=\"<%= (parseInt(model.config.display) == 1) && model.show_shipping_address ? '' : 'hidden' %>\">
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
        echo " </p>
\t\t\t\t\t<% if(config.design.address_style == 'list') { %>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<% _.each (model.addresses, function(address) { %>
\t\t\t\t\t\t<div class=\"list-group-item <%= address.address_id == model.shipping_address.address_id ? 'active' : '' %>\">
\t\t\t\t            <label for=\"shipping_address_exists_<%= address.address_id %>\">
\t\t\t\t            \t<input type=\"radio\" name=\"shipping_address[address_id]\" class=\"shipping-address\" value=\"<%= address.address_id %>\" id=\"shipping_address_exists_<%= address.address_id %>\" <%= address.address_id == model.shipping_address.address_id ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t\t\t                <div class=\"address-item\" ><%= sformat(address.address_format, address) %> </div>
\t\t\t\t            </label>
\t\t\t\t        </div>
\t\t\t        <% }) %>
\t\t\t\t\t</div>
\t\t\t\t\t<% }else{ %>

\t\t\t\t\t<% _.each (model.addresses, function(address) { %>
\t\t\t          <div class=\"radio-input\">
\t\t\t          \t<label for=\"shipping_address_address_id_<%= address.address_id %>\">
\t\t\t            \t<input type=\"radio\" name=\"shipping_address[address_id]\" class=\"shipping-address\" value=\"<%= address.address_id %>\" id=\"shipping_address_address_id_<%= address.address_id %>\" <%= address.address_id == model.shipping_address.address_id ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t\t                <strong> <%= address.firstname %>
\t\t\t                <%= address.lastname %> </strong>
\t\t\t                <%= address.address_1 %>
\t\t\t                <%= address.city %>
\t\t\t                <%= address.zone %>
\t\t\t                <%= address.country %>,
\t\t\t\t\t\t\t<%= address.postcode %>
\t\t\t            </label>
\t\t\t          </div>
\t\t\t        <% }) %>
\t\t\t        <% } %>
\t\t\t\t<% } %>
\t\t\t\t<div class=\"radio-input\">
\t\t            <input type=\"radio\" name=\"shipping_address[address_id]\" class=\"shipping-address\" value=\"new\" id=\"shipping_address_address_id_new\" <%= (model.shipping_address.address_id == 'new' || model.shipping_address.address_id == 0) ? 'checked=\"checked\"' : '' %> data-refresh=\"2\" autocomplete='off' />
\t\t            <label for=\"shipping_address_address_id_new\">
\t\t                ";
        // line 50
        echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
        echo "
\t\t            </label>
\t\t        </div>
\t\t        <form id=\"shipping_address_form\" class=\"form-horizontal <%= model.shipping_address.address_id == 'new' ||  model.shipping_address.address_id == '0'  ? '' : 'hidden' %>\">

\t\t\t\t</form>

\t\t\t<% }else{ %>
\t\t\t<form id=\"shipping_address_form\" class=\"form-horizontal\">

\t\t\t</form>
\t\t\t<% } %>
\t\t</div>
\t</div>
</div>
</script>
<script>

\$(function() {
\tqc.shippingAddress = \$.extend(true, {}, new qc.ShippingAddress(";
        // line 69
        echo (isset($context["json"]) ? $context["json"] : null);
        echo "));
\tqc.shippingAddressView = \$.extend(true, {}, new qc.ShippingAddressView({
\t\tel:\$(\"#shipping_address\"),
\t\tmodel: qc.shippingAddress,
\t\ttemplate: _.template(\$(\"#shipping_address_template\").html())
\t}));
\tqc.shippingAddressView.setZone(qc.shippingAddress.get('shipping_address.country_id'));
});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 69,  77 => 50,  41 => 17,  19 => 1,);
    }
}
/* <div id="shipping_address" class="qc-step" data-col="{{ col }} " data-row="{{ row }} "></div>*/
/* <script type="text/html" id="shipping_address_template">*/
/* <div class="<%= (parseInt(model.config.display) == 1) && model.show_shipping_address ? '' : 'hidden' %>">*/
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
/* 					<p>{{ text_address_existing }} </p>*/
/* 					<% if(config.design.address_style == 'list') { %>*/
/* 					<div class="list-group">*/
/* 					<% _.each (model.addresses, function(address) { %>*/
/* 						<div class="list-group-item <%= address.address_id == model.shipping_address.address_id ? 'active' : '' %>">*/
/* 				            <label for="shipping_address_exists_<%= address.address_id %>">*/
/* 				            	<input type="radio" name="shipping_address[address_id]" class="shipping-address" value="<%= address.address_id %>" id="shipping_address_exists_<%= address.address_id %>" <%= address.address_id == model.shipping_address.address_id ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />*/
/* 				                <div class="address-item" ><%= sformat(address.address_format, address) %> </div>*/
/* 				            </label>*/
/* 				        </div>*/
/* 			        <% }) %>*/
/* 					</div>*/
/* 					<% }else{ %>*/
/* */
/* 					<% _.each (model.addresses, function(address) { %>*/
/* 			          <div class="radio-input">*/
/* 			          	<label for="shipping_address_address_id_<%= address.address_id %>">*/
/* 			            	<input type="radio" name="shipping_address[address_id]" class="shipping-address" value="<%= address.address_id %>" id="shipping_address_address_id_<%= address.address_id %>" <%= address.address_id == model.shipping_address.address_id ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />*/
/* 			                <strong> <%= address.firstname %>*/
/* 			                <%= address.lastname %> </strong>*/
/* 			                <%= address.address_1 %>*/
/* 			                <%= address.city %>*/
/* 			                <%= address.zone %>*/
/* 			                <%= address.country %>,*/
/* 							<%= address.postcode %>*/
/* 			            </label>*/
/* 			          </div>*/
/* 			        <% }) %>*/
/* 			        <% } %>*/
/* 				<% } %>*/
/* 				<div class="radio-input">*/
/* 		            <input type="radio" name="shipping_address[address_id]" class="shipping-address" value="new" id="shipping_address_address_id_new" <%= (model.shipping_address.address_id == 'new' || model.shipping_address.address_id == 0) ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />*/
/* 		            <label for="shipping_address_address_id_new">*/
/* 		                {{ text_address_new }}*/
/* 		            </label>*/
/* 		        </div>*/
/* 		        <form id="shipping_address_form" class="form-horizontal <%= model.shipping_address.address_id == 'new' ||  model.shipping_address.address_id == '0'  ? '' : 'hidden' %>">*/
/* */
/* 				</form>*/
/* */
/* 			<% }else{ %>*/
/* 			<form id="shipping_address_form" class="form-horizontal">*/
/* */
/* 			</form>*/
/* 			<% } %>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </script>*/
/* <script>*/
/* */
/* $(function() {*/
/* 	qc.shippingAddress = $.extend(true, {}, new qc.ShippingAddress({{json}}));*/
/* 	qc.shippingAddressView = $.extend(true, {}, new qc.ShippingAddressView({*/
/* 		el:$("#shipping_address"),*/
/* 		model: qc.shippingAddress,*/
/* 		template: _.template($("#shipping_address_template").html())*/
/* 	}));*/
/* 	qc.shippingAddressView.setZone(qc.shippingAddress.get('shipping_address.country_id'));*/
/* });*/
/* </script>*/
