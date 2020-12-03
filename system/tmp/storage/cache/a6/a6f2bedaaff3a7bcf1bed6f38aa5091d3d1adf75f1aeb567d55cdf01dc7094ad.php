<?php

/* default/template/d_quickcheckout/shipping_method.twig */
class __TwigTemplate_4269a41ec8e28a5626863825b08c7742d5f2ff83f5a34ca12bd471e51d3d4996 extends Twig_Template
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
        echo "<div id=\"shipping_method\" class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo " \" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo " \"></div>
<script type=\"text/html\" id=\"shipping_method_template\">

<form id=\"shipping_method_form\" <%= parseInt(model.config.display) && model.show_shipping_method ? '' : 'class=\"hidden\"' %>>
\t<% if (model.shipping_methods.length != 0 ) { %>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"text\"><%= model.config.title %></span>
\t\t\t\t</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<% if(model.error){ %>
\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.error %>
\t\t\t\t\t</div>
\t\t\t\t<% } %>
\t\t\t\t<% if (model.config.description) { %> 
\t\t\t\t\t<p class=\"description\"><%= model.config.description %></p>
\t\t\t\t<% } %>
\t\t\t\t<div id=\"shipping_method_list\">
\t\t\t\t\t

\t\t\t\t\t\t<% if(model.config.input_style == 'select') { %>
\t\t\t\t\t\t\t<div class=\"select-input form-group\">
\t\t\t\t\t\t\t\t<select name=\"shipping_method\" class=\"form-control shipping-method-select\" data-refresh=\"5\" >
\t\t\t\t\t\t\t\t<% _.each(model.shipping_methods, function(shipping_method) { %>
\t\t\t\t\t\t\t\t\t<% if (parseInt(model.config.display_title)) { %> 
\t\t\t\t\t\t\t\t\t\t<optgroup label=\"<%= shipping_method.title %>\">
\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t<% _.each(shipping_method.quote, function(quote) { %>
\t\t\t\t\t\t\t\t\t\t<% if (quote.code == model.shipping_method.code) { %>
\t\t\t\t\t\t\t\t\t\t\t<option  value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" selected=\"selected\" ><%= quote.title %> <span class=\"price\"><%= quote.text %></span></option>
\t\t\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t\t\t<option  value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" ><%= quote.title %> <span class=\"price\"><%= quote.text %></span></option>
\t\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t\t<% if (parseInt(model.config.display_title)) { %> 
\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t<% }else{ %>
\t\t\t\t\t\t\t";
        // line 51
        echo "\t\t\t\t\t\t\t<% if(model.shipping_methods.free) { %>
\t\t\t\t\t\t\t\t<strong class=\"title\"><%= model.shipping_methods.free.title %></strong>
\t\t\t\t\t\t\t\t<% if (!model.shipping_methods.free.error) { %>
\t\t\t\t\t\t\t\t\t<% _.each(model.shipping_methods.free.quote, function(quote) { %>
\t\t\t\t\t\t\t\t\t  <div class=\"radio-input radio\">
\t\t\t\t\t\t\t\t\t    <label for=\"<%= quote.code %>\">
\t\t\t\t\t\t\t\t\t    <% if (quote.code == model.shipping_method.code) { %>
\t\t\t\t\t\t\t\t\t      <input type=\"radio\" name=\"shipping_method\" value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" checked=\"checked\" data-refresh=\"5\" class=\"styled\"/> 
\t\t\t\t\t\t\t\t\t    <% } else { %>
\t\t\t\t\t\t\t\t\t      <input type=\"radio\" name=\"shipping_method\" value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" data-refresh=\"5\" class=\"styled\"/> 
\t\t\t\t\t\t\t\t\t    <% } %>
\t\t\t\t\t\t\t\t\t    <span class=\"text\"><%= quote.title %></span><span class=\"price\"><%= quote.text %></span></label>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t<div class=\"error alert alert-error\"><%= model.shipping_methods.free.error %></div>
\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t<% }else{ %>
\t\t\t\t\t\t\t\t<% _.each(model.shipping_methods, function(shipping_method) { %>
\t\t\t\t\t\t\t\t\t<% if (parseInt(model.config.display_title)) { %> 
\t\t\t\t\t\t\t\t\t\t<strong class=\"title\"><%= shipping_method.title %></strong>
\t\t\t\t\t\t\t\t\t<% } %>

\t\t\t\t\t\t\t\t\t<% if (!shipping_method.error) { %>
\t\t\t\t\t\t\t\t\t\t<% _.each(shipping_method.quote, function(quote) { %>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio-input radio\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"<%= quote.code %>\">
\t\t\t\t\t\t\t\t\t\t\t<% if (quote.code == model.shipping_method.code) { %>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" checked=\"checked\" data-refresh=\"5\" class=\"styled\"/> 
\t\t\t\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"<%= quote.code %>\" id=\"<%= quote.code %>\" data-refresh=\"5\" class=\"styled\"/> 
\t\t\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\"><%= quote.title %></span><span class=\"price\"><%= quote.text %></span></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t\t<div class=\"error alert alert-error\"><%= shipping_method.error %></div>
\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t<% } %>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<% }else{ %>
    <% if (model.shipping_error) { %> 
       <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> <%= model.shipping_error %></div>
   <% } %>
\t<% } %>
</form>
</script>
<script>
\$(function() {
\tqc.shippingMethod = \$.extend(true, {}, new qc.ShippingMethod(";
        // line 105
        echo (isset($context["json"]) ? $context["json"] : null);
        echo " ));
\tqc.shippingMethodView = \$.extend(true, {}, new qc.ShippingMethodView({
\t\tel:\$(\"#shipping_method\"), 
\t\tmodel: qc.shippingMethod, 
\t\ttemplate: _.template(\$(\"#shipping_method_template\").html())
\t}));
});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 105,  74 => 51,  19 => 1,);
    }
}
/* <div id="shipping_method" class="qc-step" data-col="{{ col }} " data-row="{{ row }} "></div>*/
/* <script type="text/html" id="shipping_method_template">*/
/* */
/* <form id="shipping_method_form" <%= parseInt(model.config.display) && model.show_shipping_method ? '' : 'class="hidden"' %>>*/
/* 	<% if (model.shipping_methods.length != 0 ) { %>*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h4 class="panel-title">*/
/* 					<span class="icon">*/
/* 						<i class="<%= model.config.icon %>"></i>*/
/* 					</span>*/
/* 					<span class="text"><%= model.config.title %></span>*/
/* 				</h4>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<% if(model.error){ %>*/
/* 					<div class="alert alert-danger">*/
/* 						<i class="fa fa-exclamation-circle"></i> <%= model.error %>*/
/* 					</div>*/
/* 				<% } %>*/
/* 				<% if (model.config.description) { %> */
/* 					<p class="description"><%= model.config.description %></p>*/
/* 				<% } %>*/
/* 				<div id="shipping_method_list">*/
/* 					*/
/* */
/* 						<% if(model.config.input_style == 'select') { %>*/
/* 							<div class="select-input form-group">*/
/* 								<select name="shipping_method" class="form-control shipping-method-select" data-refresh="5" >*/
/* 								<% _.each(model.shipping_methods, function(shipping_method) { %>*/
/* 									<% if (parseInt(model.config.display_title)) { %> */
/* 										<optgroup label="<%= shipping_method.title %>">*/
/* 									<% } %>*/
/* 									<% _.each(shipping_method.quote, function(quote) { %>*/
/* 										<% if (quote.code == model.shipping_method.code) { %>*/
/* 											<option  value="<%= quote.code %>" id="<%= quote.code %>" selected="selected" ><%= quote.title %> <span class="price"><%= quote.text %></span></option>*/
/* 										<% } else { %>*/
/* 											<option  value="<%= quote.code %>" id="<%= quote.code %>" ><%= quote.title %> <span class="price"><%= quote.text %></span></option>*/
/* 										<% } %>*/
/* 									<% }) %>*/
/* 									<% if (parseInt(model.config.display_title)) { %> */
/* 										</optgroup>*/
/* 									<% } %>*/
/* 								<% }) %>*/
/* 								</select>*/
/* 							</div>*/
/* */
/* */
/* 						<% }else{ %>*/
/* 							{# ===========免運優先顯示=========== #}*/
/* 							<% if(model.shipping_methods.free) { %>*/
/* 								<strong class="title"><%= model.shipping_methods.free.title %></strong>*/
/* 								<% if (!model.shipping_methods.free.error) { %>*/
/* 									<% _.each(model.shipping_methods.free.quote, function(quote) { %>*/
/* 									  <div class="radio-input radio">*/
/* 									    <label for="<%= quote.code %>">*/
/* 									    <% if (quote.code == model.shipping_method.code) { %>*/
/* 									      <input type="radio" name="shipping_method" value="<%= quote.code %>" id="<%= quote.code %>" checked="checked" data-refresh="5" class="styled"/> */
/* 									    <% } else { %>*/
/* 									      <input type="radio" name="shipping_method" value="<%= quote.code %>" id="<%= quote.code %>" data-refresh="5" class="styled"/> */
/* 									    <% } %>*/
/* 									    <span class="text"><%= quote.title %></span><span class="price"><%= quote.text %></span></label>*/
/* 									  </div>*/
/* 									<% }) %>*/
/* 								<% } else { %>*/
/* 									<div class="error alert alert-error"><%= model.shipping_methods.free.error %></div>*/
/* 								<% } %>*/
/* 							<% }else{ %>*/
/* 								<% _.each(model.shipping_methods, function(shipping_method) { %>*/
/* 									<% if (parseInt(model.config.display_title)) { %> */
/* 										<strong class="title"><%= shipping_method.title %></strong>*/
/* 									<% } %>*/
/* */
/* 									<% if (!shipping_method.error) { %>*/
/* 										<% _.each(shipping_method.quote, function(quote) { %>*/
/* 										<div class="radio-input radio">*/
/* 											<label for="<%= quote.code %>">*/
/* 											<% if (quote.code == model.shipping_method.code) { %>*/
/* 											<input type="radio" name="shipping_method" value="<%= quote.code %>" id="<%= quote.code %>" checked="checked" data-refresh="5" class="styled"/> */
/* 											<% } else { %>*/
/* 											<input type="radio" name="shipping_method" value="<%= quote.code %>" id="<%= quote.code %>" data-refresh="5" class="styled"/> */
/* 											<% } %>*/
/* 											<span class="text"><%= quote.title %></span><span class="price"><%= quote.text %></span></label>*/
/* 										</div>*/
/* 										<% }) %>*/
/* 									<% } else { %>*/
/* 										<div class="error alert alert-error"><%= shipping_method.error %></div>*/
/* 									<% } %>*/
/* 								<% }) %>*/
/* 							<% } %>*/
/* 						<% } %>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	<% }else{ %>*/
/*     <% if (model.shipping_error) { %> */
/*        <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <%= model.shipping_error %></div>*/
/*    <% } %>*/
/* 	<% } %>*/
/* </form>*/
/* </script>*/
/* <script>*/
/* $(function() {*/
/* 	qc.shippingMethod = $.extend(true, {}, new qc.ShippingMethod({{ json }} ));*/
/* 	qc.shippingMethodView = $.extend(true, {}, new qc.ShippingMethodView({*/
/* 		el:$("#shipping_method"), */
/* 		model: qc.shippingMethod, */
/* 		template: _.template($("#shipping_method_template").html())*/
/* 	}));*/
/* });*/
/* </script>*/
