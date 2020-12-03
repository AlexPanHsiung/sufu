<?php

/* default/template/checkout/cart.twig */
class __TwigTemplate_0b181571e39f6bd451dad3e147ae42c839b6cc64f7b982c030894ccf8681f4c5 extends Twig_Template
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
<div id=\"checkout-cart\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "
                           ";
        // line 19
        if ((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null))) {
            // line 20
            echo "                            ";
            if ((isset($context["error_warning_seller_product"]) ? $context["error_warning_seller_product"] : null)) {
                // line 21
                echo "                              <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo (isset($context["error_warning_seller_product"]) ? $context["error_warning_seller_product"] : null);
                echo "
                                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                </div>
                            ";
            }
            // line 25
            echo "                          ";
        }
        // line 26
        echo "
                              
  ";
        // line 28
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 29
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 33
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 34
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 35
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 36
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 37
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 40
            echo "    ";
        }
        // line 41
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 42
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
        ";
        // line 43
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 44
            echo "        &nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ")
        ";
        }
        // line 45
        echo " </h1>
      <form action=\"";
        // line 46
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 51
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 52
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 53
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 54
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 55
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 56
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            echo "            <tr>
              <td class=\"text-center\">";
            // line 63
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left\"><a href=\"";
            // line 64
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 65
            echo "                ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 66
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 67
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                ";
            }
            // line 69
            echo "                ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br />
                <small>";
                // line 70
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 71
            echo "                ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 72
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 73
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 75
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 78
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 80
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 81
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 85
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 87
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 92
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 94
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 95
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 103
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 104
            echo "      <h2>";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
      <p>";
            // line 105
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 107
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo " </div>
      ";
        }
        // line 109
        echo " <br />
      <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-8\">
          <table class=\"table table-bordered\">
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 114
            echo "            <tr>
              <td class=\"text-right\"><strong>";
            // line 115
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
              <td class=\"text-right\">";
            // line 116
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 123
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 124
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
      </div>
      ";
        // line 126
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 127
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 129
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 129,  410 => 127,  406 => 126,  399 => 124,  393 => 123,  387 => 119,  378 => 116,  374 => 115,  371 => 114,  367 => 113,  361 => 109,  357 => 108,  348 => 107,  344 => 106,  340 => 105,  335 => 104,  333 => 103,  326 => 98,  317 => 95,  313 => 94,  306 => 92,  298 => 87,  294 => 85,  289 => 84,  280 => 81,  276 => 80,  269 => 78,  265 => 77,  258 => 75,  253 => 73,  245 => 72,  240 => 71,  236 => 70,  231 => 69,  228 => 68,  219 => 67,  212 => 66,  209 => 65,  201 => 64,  187 => 63,  184 => 62,  180 => 61,  172 => 56,  168 => 55,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  144 => 46,  141 => 45,  135 => 44,  133 => 43,  129 => 42,  122 => 41,  119 => 40,  116 => 39,  113 => 38,  110 => 37,  107 => 36,  104 => 35,  102 => 34,  97 => 33,  89 => 29,  87 => 28,  83 => 26,  80 => 25,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="checkout-cart" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if attention %}*/
/*   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*                            {% if module_marketplace_status is defined and module_marketplace_status %}*/
/*                             {% if error_warning_seller_product %}*/
/*                               <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning_seller_product }}*/
/*                                   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                           {% endif %}*/
/* */
/*                               */
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}*/
/*         {% if weight %}*/
/*         &nbsp;({{ weight }})*/
/*         {% endif %} </h1>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-center">{{ column_image }}</td>*/
/*                 <td class="text-left">{{ column_name }}</td>*/
/*                 <td class="text-left">{{ column_model }}</td>*/
/*                 <td class="text-left">{{ column_quantity }}</td>*/
/*                 <td class="text-right">{{ column_price }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% for product in products %}*/
/*             <tr>*/
/*               <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*               <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                 {% if product.option %}*/
/*                 {% for option in product.option %} <br />*/
/*                 <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                 {% endif %}*/
/*                 {% if product.reward %} <br />*/
/*                 <small>{{ product.reward }}</small> {% endif %}*/
/*                 {% if product.recurring %} <br />*/
/*                 <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*               <td class="text-left">{{ product.model }}</td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ product.price }}</td>*/
/*               <td class="text-right">{{ product.total }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*             <tr>*/
/*               <td></td>*/
/*               <td class="text-left">{{ voucher.description }}</td>*/
/*               <td class="text-left"></td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*               </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       {% if modules %}*/
/*       <h2>{{ text_next }}</h2>*/
/*       <p>{{ text_next_choice }}</p>*/
/*       <div class="panel-group" id="accordion"> {% for module in modules %}*/
/*         {{ module }}*/
/*         {% endfor %} </div>*/
/*       {% endif %} <br />*/
/*       <div class="row">*/
/*         <div class="col-sm-4 col-sm-offset-8">*/
/*           <table class="table table-bordered">*/
/*             {% for total in totals %}*/
/*             <tr>*/
/*               <td class="text-right"><strong>{{ total.title }}:</strong></td>*/
/*               <td class="text-right">{{ total.text }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-left"><a href="{{ continue }}" class="btn btn-default">{{ button_shopping }}</a></div>*/
/*         <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary">{{ button_checkout }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
