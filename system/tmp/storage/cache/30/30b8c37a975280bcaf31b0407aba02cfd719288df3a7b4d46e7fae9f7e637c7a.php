<?php

/* default/template/extension/payment/payza.twig */
class __TwigTemplate_da626d26290439ab5e8ad41e29ea1fc038cccd6a5124895cc41fcea9392006b5 extends Twig_Template
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
        echo "<form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\">

  <!--台銀刷卡所需資料 -->
  <input type=\"hidden\" name=\"MerchantID\" value=\"";
        // line 4
        echo (isset($context["MerchantID"]) ? $context["MerchantID"] : null);
        echo "\" />
  <input type=\"hidden\" name=\"lidm\" value=\"";
        // line 5
        echo (isset($context["lidm"]) ? $context["lidm"] : null);
        echo "\" />  
  <input type=\"hidden\" name=\"TerminalID\" value=\"";
        // line 6
        echo (isset($context["TerminalID"]) ? $context["TerminalID"] : null);
        echo "\" />  
  <input type=\"hidden\" name=\"MerchantName\" value=\"";
        // line 7
        echo (isset($context["MerchantName"]) ? $context["MerchantName"] : null);
        echo "\" />    
  <input type=\"hidden\" name=\"merID\" value=\"";
        // line 8
        echo (isset($context["merID"]) ? $context["merID"] : null);
        echo "\" />  
  <input type=\"hidden\" name=\"purchAmt\" value=\"";
        // line 9
        echo (isset($context["purchAmt"]) ? $context["purchAmt"] : null);
        echo "\" />  
  <input type=\"hidden\" name=\"AutoCap\" value=\"";
        // line 10
        echo (isset($context["AutoCap"]) ? $context["AutoCap"] : null);
        echo "\" />  
  <input type=\"hidden\" name=\"AuthResURL\" value=\"";
        // line 11
        echo (isset($context["AuthResURL"]) ? $context["AuthResURL"] : null);
        echo "\" />  
  
  <div class=\"buttons\">
    <div class=\"pull-right\">
      <input type=\"submit\" value=\"";
        // line 15
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/payza.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  26 => 4,  19 => 1,);
    }
}
/* <form action="{{ action }}" method="post">*/
/* */
/*   <!--台銀刷卡所需資料 -->*/
/*   <input type="hidden" name="MerchantID" value="{{ MerchantID }}" />*/
/*   <input type="hidden" name="lidm" value="{{ lidm }}" />  */
/*   <input type="hidden" name="TerminalID" value="{{ TerminalID }}" />  */
/*   <input type="hidden" name="MerchantName" value="{{ MerchantName }}" />    */
/*   <input type="hidden" name="merID" value="{{ merID }}" />  */
/*   <input type="hidden" name="purchAmt" value="{{ purchAmt }}" />  */
/*   <input type="hidden" name="AutoCap" value="{{ AutoCap }}" />  */
/*   <input type="hidden" name="AuthResURL" value="{{ AuthResURL }}" />  */
/*   */
/*   <div class="buttons">*/
/*     <div class="pull-right">*/
/*       <input type="submit" value="{{ button_confirm }}" class="btn btn-primary" />*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
