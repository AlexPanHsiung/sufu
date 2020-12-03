<?php

/* default/template/d_quickcheckout/payment_method.twig */
class __TwigTemplate_d385c9667b1f58f5a9362bbb8b33240ec6fd31e6c70f9f8462ff5ef3ea6fd1ee extends Twig_Template
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
        echo "<div id=\"payment_method\" class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo " \" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo " \"></div>
<script type=\"text/html\" id=\"payment_method_template\" >
<form id=\"payment_method_form\" <%= parseInt(model.config.display) ? '' : 'class=\"hidden\"' %>>
\t<% if (model.error_warning) { %>
\t\t<div class=\"error\"><%= model.error_warning %></div>
\t<% } %>
\t<% if (model.payment_methods.length != 0) { %>
\t\t<div class=\"panel panel-default\" >
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
\t\t\t\t<div id=\"payment_method_list\" class=\"<%= parseInt(model.config.display_options) ? '' : 'hidden' %>\">
\t\t\t\t<% if(model.config.input_style == 'select') { %>
\t\t\t\t\t<div class=\"select-input form-group\">
\t\t\t\t\t\t<select name=\"payment_method\" class=\"form-control payment-method-select\" data-refresh=\"6\" >
\t\t\t\t\t\t<% _.each(model.payment_methods, function(payment_method) { %>
\t\t\t\t\t\t\t<% if (payment_method.code == model.payment_method.code) { %>
\t\t\t\t\t\t\t\t<option  value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" selected=\"selected\" ><%= payment_method.title %> <span class=\"price\"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>
\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t<option  value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" ><%= payment_method.title %> <span class=\"price\"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<% _.each(model.payment_methods, function(payment_method) { %>
\t\t\t\t\t\t<% if (payment_method.terms) { %>
\t\t\t\t\t\t\t<% if (payment_method.code == model.payment_method.code) { %>
\t\t\t\t\t\t\t\t<p class=\"payment-method-terms <%= payment_method.code %>\">(<%= payment_method.terms %>)</p>
\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t<p class=\"payment-method-terms <%= payment_method.code %> hidden\">(<%= payment_method.terms %>)</p>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<% } %>
\t\t\t\t\t<% }) %>

\t\t\t\t<% }else{ %>
\t\t\t\t\t<% _.each(model.payment_methods, function(payment_method) { %>
\t\t\t\t\t\t<div class=\"radio-input radio\">
\t\t\t\t\t\t\t<label for=\"<%= payment_method.code %>\">
\t\t\t\t\t\t\t\t<% if (payment_method.code == model.payment_method.code) { %>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" checked=\"checked\" class=\"styled\"  data-refresh=\"6\"/>
\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"<%= payment_method.code %>\" id=\"<%= payment_method.code %>\" class=\"styled\"  data-refresh=\"6\"/>
\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 65
        echo "      
\t\t\t\t\t\t\t\t<%= payment_method.title %>
\t\t\t\t\t\t\t\t<span class=\"price\"><%= payment_method.cost ? payment_method.cost : '' %></span>

\t\t\t\t\t\t\t\t<% if (payment_method.terms) { %>
\t\t\t\t\t\t\t\t    <p class=\"payment-method-terms <%= payment_method.code %>\">(<%= payment_method.terms %>)</p>
\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t<% }) %>
\t\t\t\t<% } %>
\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t<% } else{ %>
    <% if (model.payment_error) { %> 
       <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> <%= model.payment_error %></div>
   <% } %>
\t<% } %>
</form>
</script>
<script>
\$(function() {
\tqc.paymentMethod = \$.extend(true, {}, new qc.PaymentMethod(";
        // line 88
        echo (isset($context["json"]) ? $context["json"] : null);
        echo " ));
\tqc.paymentMethodView = \$.extend(true, {}, new qc.PaymentMethodView({
\t\tel:\$(\"#payment_method\"), 
\t\tmodel: qc.paymentMethod, 
\t\ttemplate: _.template(\$(\"#payment_method_template\").html())
\t}));
});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 88,  84 => 65,  19 => 1,);
    }
}
/* <div id="payment_method" class="qc-step" data-col="{{ col }} " data-row="{{ row }} "></div>*/
/* <script type="text/html" id="payment_method_template" >*/
/* <form id="payment_method_form" <%= parseInt(model.config.display) ? '' : 'class="hidden"' %>>*/
/* 	<% if (model.error_warning) { %>*/
/* 		<div class="error"><%= model.error_warning %></div>*/
/* 	<% } %>*/
/* 	<% if (model.payment_methods.length != 0) { %>*/
/* 		<div class="panel panel-default" >*/
/* 			<div class="panel-heading">*/
/* 				<h4 class="panel-title">*/
/* 					<span class="icon">*/
/* 						<i class="<%= model.config.icon %>"></i>*/
/* 					</span> */
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
/* 				<div id="payment_method_list" class="<%= parseInt(model.config.display_options) ? '' : 'hidden' %>">*/
/* 				<% if(model.config.input_style == 'select') { %>*/
/* 					<div class="select-input form-group">*/
/* 						<select name="payment_method" class="form-control payment-method-select" data-refresh="6" >*/
/* 						<% _.each(model.payment_methods, function(payment_method) { %>*/
/* 							<% if (payment_method.code == model.payment_method.code) { %>*/
/* 								<option  value="<%= payment_method.code %>" id="<%= payment_method.code %>" selected="selected" ><%= payment_method.title %> <span class="price"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>*/
/* 							<% } else { %>*/
/* 								<option  value="<%= payment_method.code %>" id="<%= payment_method.code %>" ><%= payment_method.title %> <span class="price"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>*/
/* 							<% } %>*/
/* 						<% }) %>*/
/* 						</select>*/
/* 					</div>*/
/* 					<% _.each(model.payment_methods, function(payment_method) { %>*/
/* 						<% if (payment_method.terms) { %>*/
/* 							<% if (payment_method.code == model.payment_method.code) { %>*/
/* 								<p class="payment-method-terms <%= payment_method.code %>">(<%= payment_method.terms %>)</p>*/
/* 							<% } else { %>*/
/* 								<p class="payment-method-terms <%= payment_method.code %> hidden">(<%= payment_method.terms %>)</p>*/
/* 							<% } %>*/
/* 							*/
/* 						<% } %>*/
/* 					<% }) %>*/
/* */
/* 				<% }else{ %>*/
/* 					<% _.each(model.payment_methods, function(payment_method) { %>*/
/* 						<div class="radio-input radio">*/
/* 							<label for="<%= payment_method.code %>">*/
/* 								<% if (payment_method.code == model.payment_method.code) { %>*/
/* 									<input type="radio" name="payment_method" value="<%= payment_method.code %>" id="<%= payment_method.code %>" checked="checked" class="styled"  data-refresh="6"/>*/
/* 								<% } else { %>*/
/* 									<input type="radio" name="payment_method" value="<%= payment_method.code %>" id="<%= payment_method.code %>" class="styled"  data-refresh="6"/>*/
/* 								<% } %>*/
/* 								*/
/* 								{#*/
/* 								<% if(parseInt(model.config.display_images)) { %>*/
/* 									<img class="payment-image" src="<%= payment_method.image %>" />*/
/* 								<% } %>*/
/* 								#}*/
/*       */
/* 								<%= payment_method.title %>*/
/* 								<span class="price"><%= payment_method.cost ? payment_method.cost : '' %></span>*/
/* */
/* 								<% if (payment_method.terms) { %>*/
/* 								    <p class="payment-method-terms <%= payment_method.code %>">(<%= payment_method.terms %>)</p>*/
/* 								<% } %>*/
/* 							</label>*/
/* 						</div>*/
/* 					<% }) %>*/
/* 				<% } %>*/
/* 				</div>									*/
/* 			</div>*/
/* 		</div>*/
/* 	<% } else{ %>*/
/*     <% if (model.payment_error) { %> */
/*        <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <%= model.payment_error %></div>*/
/*    <% } %>*/
/* 	<% } %>*/
/* </form>*/
/* </script>*/
/* <script>*/
/* $(function() {*/
/* 	qc.paymentMethod = $.extend(true, {}, new qc.PaymentMethod({{ json }} ));*/
/* 	qc.paymentMethodView = $.extend(true, {}, new qc.PaymentMethodView({*/
/* 		el:$("#payment_method"), */
/* 		model: qc.paymentMethod, */
/* 		template: _.template($("#payment_method_template").html())*/
/* 	}));*/
/* });*/
/* </script>*/
