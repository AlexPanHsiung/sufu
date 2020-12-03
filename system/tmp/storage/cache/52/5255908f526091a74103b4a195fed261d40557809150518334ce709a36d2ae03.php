<?php

/* mail/transaction.twig */
class __TwigTemplate_63eb913939c4c4d9d5bd5d4aba762807dc9fd8d2e059657fd7eaab2a34b7cf0d extends Twig_Template
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
        echo (isset($context["text_received"]) ? $context["text_received"] : null);
        echo "

";
        // line 3
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo "

";
        // line 5
        echo (isset($context["text_credit"]) ? $context["text_credit"] : null);
    }

    public function getTemplateName()
    {
        return "mail/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ text_received }}*/
/* */
/* {{ text_total }}*/
/* */
/* {{ text_credit }}*/
