<?php

/* default/template/d_quickcheckout/cart.twig */
class __TwigTemplate_35989b658f4f7d91f4a9312635357fc4dc2330344b6d8c84820fb5ee43b67ad6 extends Twig_Template
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
        echo "<div id=\"cart_view\" class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo "\" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "\"></div>
<script type=\"text/html\" id=\"cart_template\">

\t<div class=\"panel panel-default <%= parseInt(model.config.display) ? '' : 'hidden' %>\">
\t\t<div class=\"panel-heading\">
\t\t\t<h4 class=\"panel-title\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t\t</span>
\t\t\t\t";
        // line 11
        echo "\t\t\t\t<span class=\"text\"><%= model.config.title %></span>
\t\t\t</h4>
\t\t</div>

\t\t<div class=\"qc-checkout-product panel-body\" >
\t\t\t<% if(model.config.description){ %><p class=\"text\"><%= model.config.description %></p><% } %>
\t\t\t<% if(model.error){ %>
\t\t\t\t<% if(model.config_stock_warning){ %>
\t\t\t\t\t<div class=\"save-alert save-alert-danger\">
\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.error %>
\t\t\t\t\t</div>
\t\t\t\t<% } else { %>
\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.error %>
\t\t\t\t\t</div>
\t\t\t\t<% } %>
\t\t\t<% } %>

\t\t\t<table class=\"table table-bordered qc-cart\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"qc-image <%= parseInt(model.config.columns.image) ? '' : 'hidden' %>\">";
        // line 32
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo ":</td>
\t\t\t\t\t\t<td class=\"qc-name <%= parseInt(model.config.columns.name) ? '' : 'hidden' %>\">";
        // line 33
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo ":</td>
\t\t\t\t\t\t<td class=\"qc-model hidden-xs <%= parseInt(model.config.columns.model) ? '' : 'hidden' %>\">";
        // line 34
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo ":</td>
\t\t\t\t\t\t<td class=\"qc-quantity <%= parseInt(model.config.columns.quantity) ? '' : 'hidden' %>\">";
        // line 35
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo ":</td>
\t\t\t\t\t\t<td class=\"qc-price hidden-xs <%= parseInt(model.config.columns.price) && model.show_price ? '' : 'hidden' %>\">";
        // line 36
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo ":</td>
\t\t\t\t\t\t<td class=\"qc-total <%= parseInt(model.config.columns.total) && model.show_price ? '' : 'hidden' %>\">";
        // line 37
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo ":</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>

\t\t\t\t<tbody>
\t\t\t\t\t<% _.each(model.products, function(product) { %>
\t\t\t\t\t<tr <%= product.stock ? '' : 'class=\"stock\"' %>>
\t\t\t\t\t\t<td class=\"qc-image <%= parseInt(model.config.columns.image) ? '' : 'hidden' %>\">
\t\t\t\t\t\t\t<a  href=\"<%= product.href %>\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-content='<img src=\"<%= product.image %>\" />' data-trigger=\"hover\">
\t\t\t\t\t\t\t\t<img src=\"<%= product.thumb %>\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"qc-name <%= parseInt(model.config.columns.name) ? '' : 'hidden' %>\">
\t\t\t\t\t\t\t<a href=\"<%= product.href %>\" <%=  model.config.columns.image ? '' : 'rel=\"popup\" data-help=\\'<img src=\"' + product.image + '\"/>\\'' %>> 
\t\t\t\t\t\t\t\t<%= product.name %> <%= product.stock ? '' : '<span class=\"out-of-stock\">***</span>' %>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<% _.each(product.option, function(option) { %>
\t\t\t\t\t\t\t\t<div> &nbsp;<small> - <%= option.name %>: <%= option.value %></small> </div>
\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t<% if(parseInt(model.config.columns.model)){ %>
\t\t\t\t\t\t\t\t<div class=\"qc-name-model visible-xs-block\"><small><span class=\"title\">";
        // line 58
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo ":</span> <span class=\"text\"><%= product.model %></span></small></div>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t<% if(parseInt(model.config.columns.price) && model.show_price){ %>
\t\t\t\t\t\t\t\t<div class=\"qc-name-price visible-xs-block \"><small><span class=\"title\">";
        // line 61
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo ":</span> <span class=\"text\"><%= product.price %></span></small></div>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t<% if (product.reward) { %>
\t\t\t\t\t\t\t\t<div><small><%= product.reward %></small></div>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t<% if (product.recurring) { %>
\t\t\t\t\t\t\t\t<div><span class=\"label label-info\">";
        // line 67
        echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
        echo "</span> <small><%= product.recurring %></small></div>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"qc-model hidden-xs <%= parseInt(model.config.columns.model) ? '' : 'hidden' %>\"><%= product.model %></td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td class=\"qc-quantity <%= parseInt(model.config.columns.quantity) ? '' : 'hidden' %>\">
\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary decrease hidden-xs\" data-product=\"<%= product.key %>\"><i class=\"fa fa-chevron-down\"></i></button>
\t\t\t\t\t\t\t\t</span>            
\t\t\t\t\t\t\t\t<input type=\"text\" data-mask=\"9?999999999999999\" value=\"<%= product.quantity %>\" class=\"qc-product-qantity form-control text-center\" name=\"cart.<%= product.key %>\"  data-refresh=\"2\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary increase hidden-xs\" data-product=\"<%= product.key %>\"><i class=\"fa fa-chevron-up\"></i></button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger delete hidden-xs\" data-product=\"<%= product.key %>\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"qc-price hidden-xs <%= parseInt(model.config.columns.price) && model.show_price  ? '' : 'hidden' %>\"><%= product.price %></td>
\t\t\t\t\t\t<td class=\"qc-total <%= parseInt(model.config.columns.total) && model.show_price  ? '' : 'hidden' %>\"><%= product.total %></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<% }) %>
\t\t\t\t\t<% _.each(model.vouchers, function(voucher) { %>
\t\t\t        <tr>
\t\t\t          <td class=\"qc-image <%= parseInt(model.config.columns.image) ? '' : 'hidden' %> \"></td>
\t\t\t          <td class=\"qc-name <%= parseInt(model.config.columns.name) ? '' : 'hidden' %> \"><%= voucher.description %></td>
\t\t\t          <td class=\"qc-model <%= parseInt(model.config.columns.model) ? '' : 'hidden' %> \"></td>
\t\t\t          <td class=\"qc-quantity <%= parseInt(model.config.columns.quantity) ? '' : 'hidden' %> \">1</td>
\t\t\t          <td class=\"qc-price <%= parseInt(model.config.columns.price) && model.show_price ? '' : 'hidden' %> \"><%= voucher.amount %></td>
\t\t\t          <td class=\"qc-total <%= parseInt(model.config.columns.total) && model.show_price ? '' : 'hidden' %> \"><%= voucher.amount %></td>
\t\t\t        </tr>
\t\t\t        <% }) %>
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"form-horizontal\">
\t\t\t\t<div class=\" form-group qc-coupon <%= parseInt(model.config.option.coupon.display) ? '' : 'hidden' %>\">
\t\t\t\t\t<% if(model.errors.coupon){ %>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.errors.coupon %>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<% } %>
\t\t\t\t\t<% if(model.successes.coupon){ %>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.successes.coupon %>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<% } %>
\t\t\t\t\t<label class=\"col-sm-4 control-label\" >
\t\t\t\t\t\t";
        // line 122
        echo (isset($context["text_use_coupon"]) ? $context["text_use_coupon"] : null);
        echo " 
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"<%= model.coupon ? model.coupon : '' %>\" name=\"coupon\" id=\"coupon\" <% if(Number(config.design.placeholder)) {  %>placeholder=\"";
        // line 126
        echo (isset($context["text_use_coupon"]) ? $context["text_use_coupon"] : null);
        echo "\" <% } %>  class=\"form-control\"/>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"confirm_coupon\" type=\"button\"><i class=\"fa fa-check\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<% _.each(model.coupon, function(voucher) { %>
\t\t\t        
\t\t\t        <% }) %>
\t\t\t\t</div>
\t\t\t\t<div class=\" form-group qc-voucher <%= parseInt(model.config.option.voucher.display) ? '' : 'hidden' %>\">
\t\t\t\t\t<% if(model.errors.voucher){ %>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.errors.voucher %>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<% } %>
\t\t\t\t\t<% if(model.successes.voucher){ %>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.successes.voucher %>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<% } %>

\t\t\t\t\t<label class=\"col-sm-4 control-label\" >
\t\t\t\t\t\t";
        // line 153
        echo (isset($context["text_use_voucher"]) ? $context["text_use_voucher"] : null);
        echo " 
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" value=\"<%= model.voucher ? model.voucher : '' %>\" name=\"voucher\" id=\"voucher\" <% if(Number(config.design.placeholder)) {  %>placeholder=\"";
        // line 157
        echo (isset($context["text_use_voucher"]) ? $context["text_use_voucher"] : null);
        echo "\" <% } %>  class=\"form-control\"/>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"confirm_voucher\" type=\"button\"><i class=\"fa fa-check\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<% if(model.reward_points) { %>
\t\t\t\t\t<div class=\" form-group qc-reward <%= parseInt(model.config.option.reward.display) ? '' : 'hidden' %>\">
\t\t\t\t\t\t<% if(model.errors.reward){ %>
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.errors.reward %>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t<% if(model.successes.reward){ %>
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.successes.reward %>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" >
\t\t\t\t\t\t\t<%= model.text_use_reward %>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" value=\"<%= model.reward ? model.reward : '' %>\" name=\"reward\" id=\"reward\" <% if(Number(config.design.placeholder)) {  %>placeholder=\"<%= model.text_use_reward %>\" <% } %> class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"confirm_reward\" type=\"button\"><i class=\"fa fa-check\"></i></button>
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<small><%= model.entry_reward %></small>
\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<% } %>
\t\t\t<% if(model.show_price){ %>
\t\t\t<div class=\"form-horizontal qc-totals\">
\t\t\t\t<% _.each(model.totals, function(total) { %>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<label class=\"col-sm-9 col-xs-6 control-label\" ><%= total.title %></label>
\t\t\t\t\t<div class=\"col-sm-3 col-xs-6 form-control-static text-right\"><%= total.text %></div>
\t\t\t\t</div>
\t\t\t\t<% }) %>
\t\t\t</div>
\t\t\t<% } %>
\t\t\t<div class=\"preloader row\"><img class=\"icon\" src=\"image/<%= config.general.loader %>\" /></div>
\t\t
\t\t</div>
\t</div>

</script>
<script>
\$(function() {
\tqc.cart = \$.extend(true, {}, new qc.Cart(";
        // line 214
        echo (isset($context["json"]) ? $context["json"] : null);
        echo "));
\tqc.cartView = \$.extend(true, {}, new qc.CartView({
\t\tel:\$(\"#cart_view\"), 
\t\tmodel: qc.cart, 
\t\ttemplate: _.template(\$(\"#cart_template\").html())
\t}));

});

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 214,  218 => 157,  211 => 153,  181 => 126,  174 => 122,  116 => 67,  107 => 61,  101 => 58,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  61 => 33,  57 => 32,  34 => 11,  19 => 1,);
    }
}
/* <div id="cart_view" class="qc-step" data-col="{{ col }}" data-row="{{ row }}"></div>*/
/* <script type="text/html" id="cart_template">*/
/* */
/* 	<div class="panel panel-default <%= parseInt(model.config.display) ? '' : 'hidden' %>">*/
/* 		<div class="panel-heading">*/
/* 			<h4 class="panel-title">*/
/* 				<span class="icon">*/
/* 					<i class="<%= model.config.icon %>"></i>*/
/* 				</span>*/
/* 				{# 有購物車重量ver <span class="text"><%= model.config.title %> <%= (model.cart_weight) ? '('+model.cart_weight+')' : '' %></span> #}*/
/* 				<span class="text"><%= model.config.title %></span>*/
/* 			</h4>*/
/* 		</div>*/
/* */
/* 		<div class="qc-checkout-product panel-body" >*/
/* 			<% if(model.config.description){ %><p class="text"><%= model.config.description %></p><% } %>*/
/* 			<% if(model.error){ %>*/
/* 				<% if(model.config_stock_warning){ %>*/
/* 					<div class="save-alert save-alert-danger">*/
/* 						<i class="fa fa-exclamation-circle"></i> <%= model.error %>*/
/* 					</div>*/
/* 				<% } else { %>*/
/* 					<div class="alert alert-danger">*/
/* 						<i class="fa fa-exclamation-circle"></i> <%= model.error %>*/
/* 					</div>*/
/* 				<% } %>*/
/* 			<% } %>*/
/* */
/* 			<table class="table table-bordered qc-cart">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<td class="qc-image <%= parseInt(model.config.columns.image) ? '' : 'hidden' %>">{{ column_image }}:</td>*/
/* 						<td class="qc-name <%= parseInt(model.config.columns.name) ? '' : 'hidden' %>">{{ column_name }}:</td>*/
/* 						<td class="qc-model hidden-xs <%= parseInt(model.config.columns.model) ? '' : 'hidden' %>">{{ column_model }}:</td>*/
/* 						<td class="qc-quantity <%= parseInt(model.config.columns.quantity) ? '' : 'hidden' %>">{{ column_quantity }}:</td>*/
/* 						<td class="qc-price hidden-xs <%= parseInt(model.config.columns.price) && model.show_price ? '' : 'hidden' %>">{{ column_price }}:</td>*/
/* 						<td class="qc-total <%= parseInt(model.config.columns.total) && model.show_price ? '' : 'hidden' %>">{{ column_total }}:</td>*/
/* 					</tr>*/
/* 				</thead>*/
/* */
/* 				<tbody>*/
/* 					<% _.each(model.products, function(product) { %>*/
/* 					<tr <%= product.stock ? '' : 'class="stock"' %>>*/
/* 						<td class="qc-image <%= parseInt(model.config.columns.image) ? '' : 'hidden' %>">*/
/* 							<a  href="<%= product.href %>" data-container="body" data-toggle="popover" data-placement="top" data-content='<img src="<%= product.image %>" />' data-trigger="hover">*/
/* 								<img src="<%= product.thumb %>" class="img-responsive"/>*/
/* 							</a>*/
/* 						</td>*/
/* */
/* 						<td class="qc-name <%= parseInt(model.config.columns.name) ? '' : 'hidden' %>">*/
/* 							<a href="<%= product.href %>" <%=  model.config.columns.image ? '' : 'rel="popup" data-help=\'<img src="' + product.image + '"/>\'' %>> */
/* 								<%= product.name %> <%= product.stock ? '' : '<span class="out-of-stock">***</span>' %>*/
/* 							</a>*/
/* 							<% _.each(product.option, function(option) { %>*/
/* 								<div> &nbsp;<small> - <%= option.name %>: <%= option.value %></small> </div>*/
/* 							<% }) %>*/
/* 							<% if(parseInt(model.config.columns.model)){ %>*/
/* 								<div class="qc-name-model visible-xs-block"><small><span class="title">{{ column_model }}:</span> <span class="text"><%= product.model %></span></small></div>*/
/* 							<% } %>*/
/* 							<% if(parseInt(model.config.columns.price) && model.show_price){ %>*/
/* 								<div class="qc-name-price visible-xs-block "><small><span class="title">{{ column_price }}:</span> <span class="text"><%= product.price %></span></small></div>*/
/* 							<% } %>*/
/* 							<% if (product.reward) { %>*/
/* 								<div><small><%= product.reward %></small></div>*/
/* 							<% } %>*/
/* 							<% if (product.recurring) { %>*/
/* 								<div><span class="label label-info">{{ text_recurring_item }}</span> <small><%= product.recurring %></small></div>*/
/* 							<% } %>*/
/* 						</td>*/
/* */
/* 						<td class="qc-model hidden-xs <%= parseInt(model.config.columns.model) ? '' : 'hidden' %>"><%= product.model %></td>*/
/* 						*/
/* 						<td class="qc-quantity <%= parseInt(model.config.columns.quantity) ? '' : 'hidden' %>">*/
/* 							<div class="input-group input-group-sm">*/
/* 								<span class="input-group-btn">*/
/* 									<button class="btn btn-primary decrease hidden-xs" data-product="<%= product.key %>"><i class="fa fa-chevron-down"></i></button>*/
/* 								</span>            */
/* 								<input type="text" data-mask="9?999999999999999" value="<%= product.quantity %>" class="qc-product-qantity form-control text-center" name="cart.<%= product.key %>"  data-refresh="2"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button class="btn btn-primary increase hidden-xs" data-product="<%= product.key %>"><i class="fa fa-chevron-up"></i></button>*/
/* 								*/
/* 									<button class="btn btn-danger delete hidden-xs" data-product="<%= product.key %>"><i class="fa fa-times"></i></button>*/
/* 								</span>*/
/* 							</div>*/
/* 						</td>*/
/* */
/* 						<td class="qc-price hidden-xs <%= parseInt(model.config.columns.price) && model.show_price  ? '' : 'hidden' %>"><%= product.price %></td>*/
/* 						<td class="qc-total <%= parseInt(model.config.columns.total) && model.show_price  ? '' : 'hidden' %>"><%= product.total %></td>*/
/* 					</tr>*/
/* 					<% }) %>*/
/* 					<% _.each(model.vouchers, function(voucher) { %>*/
/* 			        <tr>*/
/* 			          <td class="qc-image <%= parseInt(model.config.columns.image) ? '' : 'hidden' %> "></td>*/
/* 			          <td class="qc-name <%= parseInt(model.config.columns.name) ? '' : 'hidden' %> "><%= voucher.description %></td>*/
/* 			          <td class="qc-model <%= parseInt(model.config.columns.model) ? '' : 'hidden' %> "></td>*/
/* 			          <td class="qc-quantity <%= parseInt(model.config.columns.quantity) ? '' : 'hidden' %> ">1</td>*/
/* 			          <td class="qc-price <%= parseInt(model.config.columns.price) && model.show_price ? '' : 'hidden' %> "><%= voucher.amount %></td>*/
/* 			          <td class="qc-total <%= parseInt(model.config.columns.total) && model.show_price ? '' : 'hidden' %> "><%= voucher.amount %></td>*/
/* 			        </tr>*/
/* 			        <% }) %>*/
/* 					*/
/* 				</tbody>*/
/* 			</table>*/
/* */
/* 			<div class="form-horizontal">*/
/* 				<div class=" form-group qc-coupon <%= parseInt(model.config.option.coupon.display) ? '' : 'hidden' %>">*/
/* 					<% if(model.errors.coupon){ %>*/
/* 						<div class="col-sm-12">*/
/* 							<div class="alert alert-danger">*/
/* 								<i class="fa fa-exclamation-circle"></i> <%= model.errors.coupon %>*/
/* 							</div>*/
/* 						</div>*/
/* 					<% } %>*/
/* 					<% if(model.successes.coupon){ %>*/
/* 						<div class="col-sm-12">*/
/* 							<div class="alert alert-success">*/
/* 								<i class="fa fa-exclamation-circle"></i> <%= model.successes.coupon %>*/
/* 							</div>*/
/* 						</div>*/
/* 					<% } %>*/
/* 					<label class="col-sm-4 control-label" >*/
/* 						{{ text_use_coupon }} */
/* 					</label>*/
/* 					<div class="col-sm-8">*/
/* 						<div class="input-group">*/
/* 							<input type="text" value="<%= model.coupon ? model.coupon : '' %>" name="coupon" id="coupon" <% if(Number(config.design.placeholder)) {  %>placeholder="{{ text_use_coupon }}" <% } %>  class="form-control"/>*/
/* 							<span class="input-group-btn">*/
/* 								<button class="btn btn-primary" id="confirm_coupon" type="button"><i class="fa fa-check"></i></button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 					<% _.each(model.coupon, function(voucher) { %>*/
/* 			        */
/* 			        <% }) %>*/
/* 				</div>*/
/* 				<div class=" form-group qc-voucher <%= parseInt(model.config.option.voucher.display) ? '' : 'hidden' %>">*/
/* 					<% if(model.errors.voucher){ %>*/
/* 						<div class="col-sm-12">*/
/* 							<div class="alert alert-danger">*/
/* 								<i class="fa fa-exclamation-circle"></i> <%= model.errors.voucher %>*/
/* 							</div>*/
/* 						</div>*/
/* 					<% } %>*/
/* 					<% if(model.successes.voucher){ %>*/
/* 						<div class="col-sm-12">*/
/* 							<div class="alert alert-success">*/
/* 								<i class="fa fa-exclamation-circle"></i> <%= model.successes.voucher %>*/
/* 							</div>*/
/* 						</div>*/
/* 					<% } %>*/
/* */
/* 					<label class="col-sm-4 control-label" >*/
/* 						{{ text_use_voucher }} */
/* 					</label>*/
/* 					<div class="col-sm-8">*/
/* 						<div class="input-group">*/
/* 							<input type="text" value="<%= model.voucher ? model.voucher : '' %>" name="voucher" id="voucher" <% if(Number(config.design.placeholder)) {  %>placeholder="{{ text_use_voucher }}" <% } %>  class="form-control"/>*/
/* 							<span class="input-group-btn">*/
/* 								<button class="btn btn-primary" id="confirm_voucher" type="button"><i class="fa fa-check"></i></button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<% if(model.reward_points) { %>*/
/* 					<div class=" form-group qc-reward <%= parseInt(model.config.option.reward.display) ? '' : 'hidden' %>">*/
/* 						<% if(model.errors.reward){ %>*/
/* 							<div class="col-sm-12">*/
/* 								<div class="alert alert-danger">*/
/* 									<i class="fa fa-exclamation-circle"></i> <%= model.errors.reward %>*/
/* 								</div>*/
/* 							</div>*/
/* 						<% } %>*/
/* 						<% if(model.successes.reward){ %>*/
/* 							<div class="col-sm-12">*/
/* 								<div class="alert alert-success">*/
/* 									<i class="fa fa-exclamation-circle"></i> <%= model.successes.reward %>*/
/* 								</div>*/
/* 							</div>*/
/* 						<% } %>*/
/* 						<label class="col-sm-4 control-label" >*/
/* 							<%= model.text_use_reward %>*/
/* 						</label>*/
/* 						<div class="col-sm-8">*/
/* 							<div class="input-group">*/
/* 								<input type="text" value="<%= model.reward ? model.reward : '' %>" name="reward" id="reward" <% if(Number(config.design.placeholder)) {  %>placeholder="<%= model.text_use_reward %>" <% } %> class="form-control"/>*/
/* 								<span class="input-group-btn">*/
/* 									<button class="btn btn-primary" id="confirm_reward" type="button"><i class="fa fa-check"></i></button>*/
/* 								</span>*/
/* */
/* 							</div>*/
/* 							<small><%= model.entry_reward %></small>*/
/* 						</div>*/
/* */
/* 				</div>*/
/* 				<% } %>*/
/* 			<% if(model.show_price){ %>*/
/* 			<div class="form-horizontal qc-totals">*/
/* 				<% _.each(model.totals, function(total) { %>*/
/* 				<div class="row">*/
/* 					<label class="col-sm-9 col-xs-6 control-label" ><%= total.title %></label>*/
/* 					<div class="col-sm-3 col-xs-6 form-control-static text-right"><%= total.text %></div>*/
/* 				</div>*/
/* 				<% }) %>*/
/* 			</div>*/
/* 			<% } %>*/
/* 			<div class="preloader row"><img class="icon" src="image/<%= config.general.loader %>" /></div>*/
/* 		*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </script>*/
/* <script>*/
/* $(function() {*/
/* 	qc.cart = $.extend(true, {}, new qc.Cart({{ json }}));*/
/* 	qc.cartView = $.extend(true, {}, new qc.CartView({*/
/* 		el:$("#cart_view"), */
/* 		model: qc.cart, */
/* 		template: _.template($("#cart_template").html())*/
/* 	}));*/
/* */
/* });*/
/* */
/* </script>*/
