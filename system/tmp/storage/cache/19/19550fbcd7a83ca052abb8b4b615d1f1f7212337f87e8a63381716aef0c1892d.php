<?php

/* default/template/extension/payment/payza_success.twig */
class __TwigTemplate_8e2c9a66a8c3e16e4c25bc3660246886aeea4cb5f9060513f34daa2434b5bf87 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "\" xml:lang=\"";
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "\">
<head>
<meta http-equiv=\"refresh\" content=\"5;url=";
        // line 5
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\">
<title>";
        // line 6
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 7
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
</head>
<body>
<div style=\"text-align: center;\">
  <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
  <p>";
        // line 12
        echo (isset($context["text_response"]) ? $context["text_response"] : null);
        echo "</p>
  <div style=\"border: 1px solid #DDDDDD; margin-bottom: 20px; width: 350px; margin-left: auto; margin-right: auto;\">
    <WPDISPLAY ITEM=banner>
  </div>
  <p>";
        // line 16
        echo (isset($context["text_success"]) ? $context["text_success"] : null);
        echo "</p>
  <p>";
        // line 17
        echo (isset($context["text_success_wait"]) ? $context["text_success_wait"] : null);
        echo "</p>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/payza_success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 16,  51 => 12,  47 => 11,  40 => 7,  36 => 6,  32 => 5,  23 => 3,  19 => 1,);
    }
}
/* <?xml version="1.0" encoding="UTF-8"?>*/
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" dir="{{ direction }}" lang="{{ language }}" xml:lang="{{ language }}">*/
/* <head>*/
/* <meta http-equiv="refresh" content="5;url={{ continue }}">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* </head>*/
/* <body>*/
/* <div style="text-align: center;">*/
/*   <h1>{{ heading_title }}</h1>*/
/*   <p>{{ text_response }}</p>*/
/*   <div style="border: 1px solid #DDDDDD; margin-bottom: 20px; width: 350px; margin-left: auto; margin-right: auto;">*/
/*     <WPDISPLAY ITEM=banner>*/
/*   </div>*/
/*   <p>{{ text_success }}</p>*/
/*   <p>{{ text_success_wait }}</p>*/
/* </div>*/
/* </body>*/
/* </html>*/
