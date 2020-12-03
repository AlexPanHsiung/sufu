<?php

/* default/template/d_quickcheckout/login.twig */
class __TwigTemplate_d2304ad6c2779f275fbec575f5ef6a2f7286c1b2f1a821cdf41467fba2a05f0d extends Twig_Template
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
        echo "<div class=\"qc-step\" data-col=\"";
        echo (isset($context["col"]) ? $context["col"] : null);
        echo "\" data-row=\"";
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "\">
\t<div id=\"login_view\"></div>
\t<div id=\"login_social_login\">";
        // line 3
        echo (isset($context["d_social_login"]) ? $context["d_social_login"] : null);
        echo "</div>
</div>

<script type=\"text/html\" id=\"login_template\">

<% if(model.account == 'logged'){ %> 
\t<% \$('#login_social_login').hide() %>
<% }else{ %>

\t<% if(model.error) { %>
\t\t<div class=\"alert alert-danger\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i> <%= model.error %>
\t\t</div>
\t<% } %>
\t<% if(parseInt(model.config.option.guest.display) || parseInt(model.config.option.register.display) || (config.design.login_style == 'popup' && parseInt(model.config.option.login.display))){ %>
\t<div class=\"login-btn-group\">
\t\t<div class=\"btn-group btn-group-justified\">
\t\t<% if(parseInt(model.config.option.guest.display)){ %>
\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t<label class=\"btn <%= model.account == 'guest' ? 'btn-primary active' : 'btn-default' %>\">
\t\t\t\t\t<input class=\"hidden\" type=\"radio\" name=\"account\" id=\"guest\" value=\"guest\" autocomplete=\"off\" <%= model.account == 'guest' ? 'checked=\"checked\"' : '' %>> <%= model.config.option.guest.title %>
\t\t\t\t</label>
\t\t\t</div>
\t\t<% } %>
\t\t<% if(parseInt(model.config.option.register.display)){ %>
\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t<label  class=\"btn <%= model.account == 'register' ? 'btn-primary active' : 'btn-default' %> <%= parseInt(model.config.option.register.display) ? '' : 'hidden' %>\">
\t\t\t\t\t<input  class=\"hidden\" type=\"radio\" name=\"account\" id=\"register\" value=\"register\" autocomplete=\"off\" <%= model.account == 'register' ? 'checked=\"checked\"' : '' %> > <%= model.config.option.register.title %>
\t\t\t\t</label>
\t\t\t</div>\t
\t\t<% } %>
\t\t<% if(config.design.login_style == 'popup' && parseInt(model.config.option.login.display)){ %> 
\t\t\t<div class=\"btn-group\" role=\"group\">\t
\t\t\t\t<button id=\"login_button_popup\" type=\"button\" class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#login_model\"><%= model.config.option.login.title %></button>
\t\t\t</div>
\t\t<% } %>
\t\t</div>
\t</div>
\t<% } %>
\t<% if(model.config.description){ %><p class=\"description\"><%= model.config.description %></p><% } %>
\t<div class=\"<%= parseInt(model.config.option.login.display) ? '' : 'hidden' %>\">
\t\t
\t\t<% if(config.design.login_style == 'block'){ %> 
\t\t<div class=\"panel panel-default \">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"text\">";
        // line 51
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">

\t\t\t\t<form id=\"login_form\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"form-group col-lg-12 email\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"login_email\">";
        // line 58
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"<%= model.email %>\" id=\"login_email\" placeholder=\"";
        // line 59
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group  col-lg-12 password\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"login_password\">";
        // line 62
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"<%= model.password %>\" id=\"login_password\" placeholder=\"";
        // line 64
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t<a id=\"remeber_password\" href=\"";
        // line 65
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\"><i class=\"fa fa-angle-right \"></i> ";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group col-sm-12\">
\t\t\t\t\t\t\t<label class=\"control-label hidden-lg\" >&ensp;</label> 
\t\t\t\t\t\t\t<button id=\"button_login\" class=\"btn btn-primary btn-block\">";
        // line 70
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<% }else{ %>
\t\t

<div class=\"modal fade\" role=\"dialog\" id=\"login_model\" >
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">
        \t<span class=\"icon\">
\t\t\t\t<i class=\"<%= model.config.icon %>\"></i>
\t\t\t</span> 
\t\t\t";
        // line 89
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo " 
\t\t</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"login_form\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"form-group col-lg-12 email\">
\t\t\t\t\t<label class=\"control-label\" for=\"login_email\">";
        // line 96
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"<%= model.email %>\" id=\"login_email\" placeholder=\"";
        // line 97
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group  col-lg-12 password\">
\t\t\t\t\t<label class=\"control-label\" for=\"login_password\">";
        // line 100
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label> 
\t\t\t\t\t
\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"<%= model.password %>\" id=\"login_password\" placeholder=\"";
        // line 102
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t<a id=\"remeber_password\" href=\"";
        // line 103
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\"><i class=\"fa fa-angle-right \"></i> ";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group col-sm-12\">
\t\t\t\t\t<label class=\"control-label hidden-lg\" >&ensp;</label> 
\t\t\t\t\t<button id=\"button_login\" class=\"btn btn-primary btn-block\">";
        // line 108
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
      </div>
      
    </div>
  </div>
</div>
<% } %>
</div>
<% } %>
</script>
<script>
\$(function() {
\tqc.login = \$.extend(true, {}, new qc.Login(";
        // line 123
        echo (isset($context["json"]) ? $context["json"] : null);
        echo "));
\tqc.loginView = \$.extend(true, {}, new qc.LoginView({
\t\tel:\$(\"#login_view\"), 
\t\tmodel: qc.login, 
\t\ttemplate: _.template(\$(\"#login_template\").html())
\t}));
});

</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/d_quickcheckout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 123,  178 => 108,  168 => 103,  164 => 102,  159 => 100,  153 => 97,  149 => 96,  139 => 89,  117 => 70,  107 => 65,  103 => 64,  98 => 62,  92 => 59,  88 => 58,  78 => 51,  27 => 3,  19 => 1,);
    }
}
/* <div class="qc-step" data-col="{{ col }}" data-row="{{ row }}">*/
/* 	<div id="login_view"></div>*/
/* 	<div id="login_social_login">{{ d_social_login }}</div>*/
/* </div>*/
/* */
/* <script type="text/html" id="login_template">*/
/* */
/* <% if(model.account == 'logged'){ %> */
/* 	<% $('#login_social_login').hide() %>*/
/* <% }else{ %>*/
/* */
/* 	<% if(model.error) { %>*/
/* 		<div class="alert alert-danger">*/
/* 			<i class="fa fa-exclamation-circle"></i> <%= model.error %>*/
/* 		</div>*/
/* 	<% } %>*/
/* 	<% if(parseInt(model.config.option.guest.display) || parseInt(model.config.option.register.display) || (config.design.login_style == 'popup' && parseInt(model.config.option.login.display))){ %>*/
/* 	<div class="login-btn-group">*/
/* 		<div class="btn-group btn-group-justified">*/
/* 		<% if(parseInt(model.config.option.guest.display)){ %>*/
/* 			<div class="btn-group" role="group">*/
/* 				<label class="btn <%= model.account == 'guest' ? 'btn-primary active' : 'btn-default' %>">*/
/* 					<input class="hidden" type="radio" name="account" id="guest" value="guest" autocomplete="off" <%= model.account == 'guest' ? 'checked="checked"' : '' %>> <%= model.config.option.guest.title %>*/
/* 				</label>*/
/* 			</div>*/
/* 		<% } %>*/
/* 		<% if(parseInt(model.config.option.register.display)){ %>*/
/* 			<div class="btn-group" role="group">*/
/* 				<label  class="btn <%= model.account == 'register' ? 'btn-primary active' : 'btn-default' %> <%= parseInt(model.config.option.register.display) ? '' : 'hidden' %>">*/
/* 					<input  class="hidden" type="radio" name="account" id="register" value="register" autocomplete="off" <%= model.account == 'register' ? 'checked="checked"' : '' %> > <%= model.config.option.register.title %>*/
/* 				</label>*/
/* 			</div>	*/
/* 		<% } %>*/
/* 		<% if(config.design.login_style == 'popup' && parseInt(model.config.option.login.display)){ %> */
/* 			<div class="btn-group" role="group">	*/
/* 				<button id="login_button_popup" type="button" class="btn btn-default"  data-toggle="modal" data-target="#login_model"><%= model.config.option.login.title %></button>*/
/* 			</div>*/
/* 		<% } %>*/
/* 		</div>*/
/* 	</div>*/
/* 	<% } %>*/
/* 	<% if(model.config.description){ %><p class="description"><%= model.config.description %></p><% } %>*/
/* 	<div class="<%= parseInt(model.config.option.login.display) ? '' : 'hidden' %>">*/
/* 		*/
/* 		<% if(config.design.login_style == 'block'){ %> */
/* 		<div class="panel panel-default ">*/
/* 			<div class="panel-heading">*/
/* 				<span class="icon">*/
/* 					<i class="<%= model.config.icon %>"></i>*/
/* 				</span>*/
/* 				<span class="text">{{ text_returning_customer }}</span>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* */
/* 				<form id="login_form">*/
/* 					<div class="row">*/
/* 						<div class="form-group col-lg-12 email">*/
/* 							<label class="control-label" for="login_email">{{ entry_email }}</label>*/
/* 							<input type="text" name="email" value="<%= model.email %>" id="login_email" placeholder="{{ entry_email }}" class="form-control"/>*/
/* 						</div>*/
/* 						<div class="form-group  col-lg-12 password">*/
/* 							<label class="control-label" for="login_password">{{ entry_password }}</label> */
/* 							*/
/* 							<input type="password" name="password" value="<%= model.password %>" id="login_password" placeholder="{{ entry_password }}" class="form-control"/>*/
/* 							<a id="remeber_password" href="{{ forgotten }}"><i class="fa fa-angle-right "></i> {{ text_forgotten }}</a>*/
/* 						</div>*/
/* */
/* 						<div class="form-group col-sm-12">*/
/* 							<label class="control-label hidden-lg" >&ensp;</label> */
/* 							<button id="button_login" class="btn btn-primary btn-block">{{ button_login }}</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 		<% }else{ %>*/
/* 		*/
/* */
/* <div class="modal fade" role="dialog" id="login_model" >*/
/*   <div class="modal-dialog modal-sm">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title">*/
/*         	<span class="icon">*/
/* 				<i class="<%= model.config.icon %>"></i>*/
/* 			</span> */
/* 			{{ button_login }} */
/* 		</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <form id="login_form">*/
/* 			<div class="row">*/
/* 				<div class="form-group col-lg-12 email">*/
/* 					<label class="control-label" for="login_email">{{ entry_email }}</label>*/
/* 					<input type="text" name="email" value="<%= model.email %>" id="login_email" placeholder="{{ entry_email }}" class="form-control"/>*/
/* 				</div>*/
/* 				<div class="form-group  col-lg-12 password">*/
/* 					<label class="control-label" for="login_password">{{ entry_password }}</label> */
/* 					*/
/* 					<input type="password" name="password" value="<%= model.password %>" id="login_password" placeholder="{{ entry_password }}" class="form-control"/>*/
/* 					<a id="remeber_password" href="{{ forgotten }}"><i class="fa fa-angle-right "></i> {{ text_forgotten }}</a>*/
/* 				</div>*/
/* */
/* 				<div class="form-group col-sm-12">*/
/* 					<label class="control-label hidden-lg" >&ensp;</label> */
/* 					<button id="button_login" class="btn btn-primary btn-block">{{ button_login }}</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/*       </div>*/
/*       */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <% } %>*/
/* </div>*/
/* <% } %>*/
/* </script>*/
/* <script>*/
/* $(function() {*/
/* 	qc.login = $.extend(true, {}, new qc.Login({{ json }}));*/
/* 	qc.loginView = $.extend(true, {}, new qc.LoginView({*/
/* 		el:$("#login_view"), */
/* 		model: qc.login, */
/* 		template: _.template($("#login_template").html())*/
/* 	}));*/
/* });*/
/* */
/* </script>*/
/* */
