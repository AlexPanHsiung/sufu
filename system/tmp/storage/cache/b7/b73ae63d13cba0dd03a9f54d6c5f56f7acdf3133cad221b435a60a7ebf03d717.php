<?php

/* default/template/extension/module/html.twig */
class __TwigTemplate_19c5d1f55b5128cfa064f40028461faac3e6a1a3988f1579899f525128c4b22a extends Twig_Template
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
        echo "<div>";
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 2
            echo "  <h2>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h2>
  ";
        }
        // line 4
        echo "  ";
        echo (isset($context["html"]) ? $context["html"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div>{% if heading_title %}*/
/*   <h2>{{ heading_title }}</h2>*/
/*   {% endif %}*/
/*   {{ html }}</div>*/
/* */
