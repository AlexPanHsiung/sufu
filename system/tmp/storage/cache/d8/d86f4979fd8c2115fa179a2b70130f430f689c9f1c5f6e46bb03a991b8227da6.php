<?php

/* default/template/module/d_quickcheckout.twig */
class __TwigTemplate_b6a99a1ad6b5831ddf3e58a9fd93371ab9ffd51c3fdc6ef1174408d71dacd4a8 extends Twig_Template
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
        echo "<script>
var config = ";
        // line 2
        echo (isset($context["json_config"]) ? $context["json_config"] : null);
        echo " ;
if(typeof(ga) == \"undefined\")
   config.general.analytics_event = 0;
</script>
<style>
";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array(), "array"), "custom_style", array(), "array");
        echo "
";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "only_quickcheckout", array())) {
            echo " 
body > *{
\tdisplay: none
}
body > #d_quickcheckout{
\tdisplay: block;
} 
#d_quickcheckout.container #d_logo{
\tmargin: 20px 0px;
}
";
        }
        // line 18
        echo " 
</style>
<div id=\"d_quickcheckout\">
\t";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "only_quickcheckout", array())) {
            echo " 
\t<div id=\"d_logo\" class=\"center-block text-center\"></div>
\t";
        }
        // line 23
        echo " 
\t";
        // line 24
        echo (isset($context["field"]) ? $context["field"] : null);
        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\"></div>
\t</div>
\t<div class=\"qc-col-0\">
\t\t";
        // line 29
        echo (isset($context["login"]) ? $context["login"] : null);
        echo " 
\t\t";
        // line 30
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo " 
\t\t";
        // line 31
        echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
        echo " 
\t\t";
        // line 32
        echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
        echo " 
\t\t";
        // line 33
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo " 
\t\t";
        // line 34
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo " 
\t\t";
        // line 35
        echo (isset($context["payment"]) ? $context["payment"] : null);
        echo " 
\t\t";
        // line 36
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo " 
\t</div>
\t<div class=\"row\">
\t\t<div class=\"qc-col-1 col-md-";
        // line 39
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 1, array(), "array");
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-";
        // line 41
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 4, array(), "array");
        echo "\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"qc-col-2 col-md-";
        // line 43
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 4, array(), "array")) ? (twig_round((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 2, array(), "array") / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 4, array(), "array")) * 12))) : ("0"));
        echo "  \">
    \t\t\t</div>
    \t\t\t<div class=\"qc-col-3 col-md-";
        // line 45
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 4, array(), "array")) ? ((12 - twig_round((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 2, array(), "array") / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "column_width", array()), 4, array(), "array")) * 12)))) : ("0"));
        echo " \">
    \t\t\t</div>
\t\t\t\t<div class=\"qc-col-4 col-md-12\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$(function() {
\t
\t\$('.qc-step').each(function(){
\t\t\$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));\t
\t})
\t\$('.qc-step').tsort({attr:'data-row'});
";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "only_quickcheckout", array())) {
            echo " 
\t\$('body').prepend(\$('#d_quickcheckout'));
\t\$('#d_quickcheckout').addClass('container')
\t\$('#d_quickcheckout #d_logo ').prepend(\$('header #logo').html())
";
        }
        // line 64
        echo " 
";
        // line 65
        if ( !$this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "design", array()), "breadcrumb", array())) {
            echo " 
\t\$('.qc-breadcrumb').hide();
";
        }
        // line 67
        echo " 
})
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/module/d_quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  148 => 65,  145 => 64,  137 => 60,  119 => 45,  114 => 43,  109 => 41,  104 => 39,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  70 => 29,  62 => 24,  59 => 23,  53 => 21,  48 => 18,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <script>*/
/* var config = {{ json_config }} ;*/
/* if(typeof(ga) == "undefined")*/
/*    config.general.analytics_event = 0;*/
/* </script>*/
/* <style>*/
/* {{ config['design']['custom_style'] }}*/
/* {% if config.design.only_quickcheckout %} */
/* body > *{*/
/* 	display: none*/
/* }*/
/* body > #d_quickcheckout{*/
/* 	display: block;*/
/* } */
/* #d_quickcheckout.container #d_logo{*/
/* 	margin: 20px 0px;*/
/* }*/
/* {% endif %} */
/* </style>*/
/* <div id="d_quickcheckout">*/
/* 	{% if config.design.only_quickcheckout %} */
/* 	<div id="d_logo" class="center-block text-center"></div>*/
/* 	{% endif %} */
/* 	{{ field }} */
/* 	<div class="row">*/
/* 		<div class="col-md-12"></div>*/
/* 	</div>*/
/* 	<div class="qc-col-0">*/
/* 		{{ login }} */
/* 		{{ payment_address }} */
/* 		{{ shipping_address }} */
/* 		{{ shipping_method }} */
/* 		{{ payment_method }} */
/* 		{{ cart }} */
/* 		{{ payment }} */
/* 		{{ confirm }} */
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="qc-col-1 col-md-{{ config.design.column_width[1] }}">*/
/* 		</div>*/
/* 		<div class="col-md-{{ config.design.column_width[4] }}">*/
/* 			<div class="row">*/
/* 				<div class="qc-col-2 col-md-{{  config.design.column_width[4] ? (config.design.column_width[2] / config.design.column_width[4] * 12)|round : '0' }}  ">*/
/*     			</div>*/
/*     			<div class="qc-col-3 col-md-{{ config.design.column_width[4] ? 12 - (config.design.column_width[2] / config.design.column_width[4] * 12)|round : '0' }} ">*/
/*     			</div>*/
/* 				<div class="qc-col-4 col-md-12">*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* $(function() {*/
/* 	*/
/* 	$('.qc-step').each(function(){*/
/* 		$(this).appendTo('.qc-col-' + $(this).attr('data-col'));	*/
/* 	})*/
/* 	$('.qc-step').tsort({attr:'data-row'});*/
/* {% if config.design.only_quickcheckout %} */
/* 	$('body').prepend($('#d_quickcheckout'));*/
/* 	$('#d_quickcheckout').addClass('container')*/
/* 	$('#d_quickcheckout #d_logo ').prepend($('header #logo').html())*/
/* {% endif %} */
/* {% if not config.design.breadcrumb %} */
/* 	$('.qc-breadcrumb').hide();*/
/* {% endif %} */
/* })*/
/* </script>*/
