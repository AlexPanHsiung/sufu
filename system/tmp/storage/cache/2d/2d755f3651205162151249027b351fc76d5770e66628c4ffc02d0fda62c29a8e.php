<?php

/* default/template/checkout/d_quickcheckout.twig */
class __TwigTemplate_cb8b65484373954c53c782fb1cd1a0a1295d668afca74db86ea8f8088abec156 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " 
<div class=\"container\" id=\"container\">
  <ul class=\"breadcrumb qc-breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 9
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 12
        echo " 
  <div class=\"row\">";
        // line 13
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " 
    ";
            // line 15
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " 
    ";
            // line 17
            $context["class"] = "col-sm-9";
            // line 18
            echo "     ";
        } else {
            echo "   
    ";
            // line 19
            $context["class"] = "col-sm-12";
            // line 20
            echo "      ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " \">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo " 

<!-- Quick Checkout v4.0 by Dreamvention.com checkout/quickcheckout -->
  ";
        // line 24
        echo (isset($context["d_quickcheckout"]) ? $context["d_quickcheckout"] : null);
        echo " 

      ";
        // line 26
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo " </div>
    ";
        // line 27
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo " </div>
</div>
";
        // line 29
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/d_quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  104 => 27,  100 => 26,  95 => 24,  86 => 21,  83 => 20,  81 => 19,  76 => 18,  74 => 17,  69 => 16,  67 => 15,  63 => 14,  59 => 13,  56 => 12,  49 => 9,  45 => 8,  41 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }} */
/* <div class="container" id="container">*/
/*   <ul class="breadcrumb qc-breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %} */
/*     <li><a href="{{ breadcrumb.href }} ">{{ breadcrumb.text }} </a></li>*/
/*     {% endfor %} */
/*   </ul>*/
/*   {% if error_warning %} */
/*   <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }} */
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %} */
/*   <div class="row">{{ column_left }} */
/*     {% if column_left  and  column_right %} */
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif  column_left  or  column_right %} */
/*     {% set class = 'col-sm-9' %}*/
/*      {% else %}   */
/*     {% set class = 'col-sm-12' %}*/
/*       {% endif %}*/
/*     <div id="content" class="{{ class }} ">{{ content_top }} */
/* */
/* <!-- Quick Checkout v4.0 by Dreamvention.com checkout/quickcheckout -->*/
/*   {{ d_quickcheckout }} */
/* */
/*       {{ content_bottom }} </div>*/
/*     {{ column_right }} </div>*/
/* </div>*/
/* {{ footer }} */
