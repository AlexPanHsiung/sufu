<?php

/* default/template/customerpartner/registerseller.twig */
class __TwigTemplate_e7f1ccc43dc7b614569f13cfa4c6b0901690cefa510bdae539eb193a56358087 extends Twig_Template
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
        if (((isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null) && (isset($context["marketplace_becomepartnerregistration"]) ? $context["marketplace_becomepartnerregistration"] : null))) {
            // line 2
            echo "
<fieldset>
  <legend>";
            // line 4
            echo (isset($context["text_register_becomePartner"]) ? $context["text_register_becomePartner"] : null);
            echo "</legend>
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\">";
            // line 6
            echo (isset($context["text_register_douwant"]) ? $context["text_register_douwant"] : null);
            echo "</label>
    <div class=\"col-sm-10\">
      ";
            // line 8
            if ((isset($context["tobecomepartner"]) ? $context["tobecomepartner"] : null)) {
                // line 9
                echo "      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"1\" checked=\"checked\" />
        ";
                // line 11
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</label>
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"0\" />
        ";
                // line 14
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</label>
      ";
            } else {
                // line 16
                echo "      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"1\" />
        ";
                // line 18
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</label>
      <label class=\"radio-inline\">
        <input type=\"radio\" name=\"tobecomepartner\" value=\"0\" checked=\"checked\" />
        ";
                // line 21
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</label>
      ";
            }
            // line 23
            echo "    </div>
  </div>

  <div class=\"form-group required hide\" id=\"fg-shoppartner\">
    <label class=\"col-sm-2 control-label\" for=\"input-shop\">";
            // line 27
            echo (isset($context["text_shop_name"]) ? $context["text_shop_name"] : null);
            echo "</label>
    <div class=\"col-sm-10\">
      <div class=\"input-group\">
        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
        <input type=\"text\" name=\"shoppartner\" value=\"";
            // line 31
            echo (isset($context["shoppartner"]) ? $context["shoppartner"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["text_shop_name"]) ? $context["text_shop_name"] : null);
            echo "\" id=\"input-shop\" class=\"form-control\" />
      </div>
      ";
            // line 33
            if ((isset($context["error_shoppartner"]) ? $context["error_shoppartner"] : null)) {
                // line 34
                echo "      <div class=\"text-danger\">";
                echo (isset($context["error_shoppartner"]) ? $context["error_shoppartner"] : null);
                echo "</div>
      ";
            }
            // line 36
            echo "    </div>
  </div>

</fieldset>

<script>

  ";
            // line 43
            if ((isset($context["tobecomepartner"]) ? $context["tobecomepartner"] : null)) {
                // line 44
                echo "    \$('#fg-shoppartner').removeClass('hide');
  ";
            }
            // line 46
            echo "
  \$('input[name=\\'tobecomepartner\\']').on('change', function() {
    if (\$(this).val() == 1) {
      \$('#fg-shoppartner').removeClass('hide');
    } else {
      \$('#fg-shoppartner').addClass('hide');
    }
  });

    \$( \"#input-shop\" ).change(function() {
      thisshop = this;
      shop = \$(thisshop).val();

      if(shop){

        jQuery(thisshop).prev().html('<i class=\"fa fa-spinner fa-spin\"></i>');

        \$.ajax({
               type: 'POST',
               data: ({shop: shop}),
               dataType: 'json',
               url: 'index.php?route=customerpartner/sell/wkmpregistation',
               success: function(data){

                  if(data['success']){
                    jQuery(thisshop).prev().html('<span data-toggle=\"tooltip\" class=\"text-success\" title=\"";
            // line 71
            echo (isset($context["text_avaiable"]) ? $context["text_avaiable"] : null);
            echo "\"><i class=\"fa fa-thumbs-o-up\"></i></span>');
                  }else if(data['error']){
                    jQuery(thisshop).prev().html('<span data-toggle=\"tooltip\" class=\"text-danger\" title=\"";
            // line 73
            echo (isset($context["text_no_avaiable"]) ? $context["text_no_avaiable"] : null);
            echo "\"><i class=\"fa fa-thumbs-o-down\"></i></span>');
                  }

                }
            });
      }
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/customerpartner/registerseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 73,  137 => 71,  110 => 46,  106 => 44,  104 => 43,  95 => 36,  89 => 34,  87 => 33,  80 => 31,  73 => 27,  67 => 23,  62 => 21,  56 => 18,  52 => 16,  47 => 14,  41 => 11,  37 => 9,  35 => 8,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if module_marketplace_status and marketplace_becomepartnerregistration %}*/
/* */
/* <fieldset>*/
/*   <legend>{{ text_register_becomePartner }}</legend>*/
/*   <div class="form-group">*/
/*     <label class="col-sm-2 control-label">{{ text_register_douwant }}</label>*/
/*     <div class="col-sm-10">*/
/*       {% if tobecomepartner %}*/
/*       <label class="radio-inline">*/
/*         <input type="radio" name="tobecomepartner" value="1" checked="checked" />*/
/*         {{ text_yes }}</label>*/
/*       <label class="radio-inline">*/
/*         <input type="radio" name="tobecomepartner" value="0" />*/
/*         {{ text_no }}</label>*/
/*       {% else %}*/
/*       <label class="radio-inline">*/
/*         <input type="radio" name="tobecomepartner" value="1" />*/
/*         {{ text_yes }}</label>*/
/*       <label class="radio-inline">*/
/*         <input type="radio" name="tobecomepartner" value="0" checked="checked" />*/
/*         {{ text_no }}</label>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group required hide" id="fg-shoppartner">*/
/*     <label class="col-sm-2 control-label" for="input-shop">{{ text_shop_name }}</label>*/
/*     <div class="col-sm-10">*/
/*       <div class="input-group">*/
/*         <span class="input-group-addon"><i class="fa fa-search"></i></span>*/
/*         <input type="text" name="shoppartner" value="{{ shoppartner }}" placeholder="{{ text_shop_name }}" id="input-shop" class="form-control" />*/
/*       </div>*/
/*       {% if error_shoppartner %}*/
/*       <div class="text-danger">{{ error_shoppartner }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/* </fieldset>*/
/* */
/* <script>*/
/* */
/*   {% if tobecomepartner %}*/
/*     $('#fg-shoppartner').removeClass('hide');*/
/*   {% endif %}*/
/* */
/*   $('input[name=\'tobecomepartner\']').on('change', function() {*/
/*     if ($(this).val() == 1) {*/
/*       $('#fg-shoppartner').removeClass('hide');*/
/*     } else {*/
/*       $('#fg-shoppartner').addClass('hide');*/
/*     }*/
/*   });*/
/* */
/*     $( "#input-shop" ).change(function() {*/
/*       thisshop = this;*/
/*       shop = $(thisshop).val();*/
/* */
/*       if(shop){*/
/* */
/*         jQuery(thisshop).prev().html('<i class="fa fa-spinner fa-spin"></i>');*/
/* */
/*         $.ajax({*/
/*                type: 'POST',*/
/*                data: ({shop: shop}),*/
/*                dataType: 'json',*/
/*                url: 'index.php?route=customerpartner/sell/wkmpregistation',*/
/*                success: function(data){*/
/* */
/*                   if(data['success']){*/
/*                     jQuery(thisshop).prev().html('<span data-toggle="tooltip" class="text-success" title="{{ text_avaiable }}"><i class="fa fa-thumbs-o-up"></i></span>');*/
/*                   }else if(data['error']){*/
/*                     jQuery(thisshop).prev().html('<span data-toggle="tooltip" class="text-danger" title="{{ text_no_avaiable }}"><i class="fa fa-thumbs-o-down"></i></span>');*/
/*                   }*/
/* */
/*                 }*/
/*             });*/
/*       }*/
/*     });*/
/* </script>*/
/* {% endif %}*/
/* */
