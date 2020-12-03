<?php

/* default/template/common/home.twig */
class __TwigTemplate_ad104db0a64d264055d7b7c394b31849c828d92ae5df9a466bd0aa53c0767bff extends Twig_Template
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
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">
  <div class=\"col-sm-3 hidden-xs\">
    ";
        // line 5
        echo (isset($context["categories"]) ? $context["categories"] : null);
        echo "
  </div>
  <div class=\"col-sm-9\">
    <img title=\"光量生物科技 純素產品\" alt=\"光量生物科技專門製造純素產品，不僅在OEM(委託代工)、OBM(設計代工)、ODM(自有品牌代工)具有專業的經驗，也包含自有品牌「蔬福良品」的產品製作及銷售。\" src=\"image/catalog/HTML/top.jpg\" style=\"width: 100%\">
  </div>
    ";
        // line 10
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 11
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 19
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div>
</div>
";
        // line 22
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  66 => 19,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  46 => 14,  43 => 13,  40 => 12,  38 => 11,  34 => 10,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-home" class="container">*/
/*   <div class="row">*/
/*   <div class="col-sm-3 hidden-xs">*/
/*     {{ categories }}*/
/*   </div>*/
/*   <div class="col-sm-9">*/
/*     <img title="光量生物科技 純素產品" alt="光量生物科技專門製造純素產品，不僅在OEM(委託代工)、OBM(設計代工)、ODM(自有品牌代工)具有專業的經驗，也包含自有品牌「蔬福良品」的產品製作及銷售。" src="image/catalog/HTML/top.jpg" style="width: 100%">*/
/*   </div>*/
/*     {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     {{ column_right }}*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
