<?php

/* simplica/template/common/cart.twig */
class __TwigTemplate_3cd4b23586f6a513c4824977a093859cd5d9b29a399cf83cd9d8b33a5945f019 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\" style=\"\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i> <span id=\"cart-total\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 4
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 5
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "        <tr>
          <td class=\"text-center\">";
                // line 9
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
          
                            ";
                // line 11
                if ((((((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null)) && (isset($context["marketplace_seller_name_cart_status"]) ? $context["marketplace_seller_name_cart_status"] : null)) && $this->getAttribute($context["product"], "seller_name", array(), "array", true, true)) && $this->getAttribute($context["product"], "seller_name", array(), "array")) &&  !(isset($context["marketplace_seller_info_hide"]) ? $context["marketplace_seller_info_hide"] : null))) {
                    // line 12
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a> ";
                    echo (isset($context["text_bySeller"]) ? $context["text_bySeller"] : null);
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "seller_href", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["product"], "seller_name", array(), "array");
                    echo "</a>
                            ";
                } else {
                    // line 14
                    echo "                              <td class=\"text-left\"><a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a>
                            ";
                }
                // line 16
                echo "                               ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 17
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 18
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 21
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 22
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 23
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 24
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 28
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 30
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 32
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 33
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 42
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 43
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 44
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 48
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"><strong><i class=\"fa fa-share\"></i> ";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 52
            echo "    <li>
      <p class=\"text-center\">";
            // line 53
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 56
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "simplica/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 56,  210 => 53,  207 => 52,  194 => 48,  191 => 47,  182 => 44,  178 => 43,  175 => 42,  171 => 41,  164 => 36,  153 => 33,  149 => 32,  144 => 30,  140 => 28,  135 => 27,  124 => 24,  120 => 23,  116 => 22,  108 => 21,  103 => 20,  100 => 19,  91 => 18,  84 => 17,  81 => 16,  73 => 14,  59 => 12,  57 => 11,  42 => 9,  39 => 8,  35 => 7,  31 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group btn-block" style="">*/
/*   <button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">{{ text_items }}</span></button>*/
/*   <ul class="dropdown-menu pull-right">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table table-striped">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*           */
/*                             {% if module_marketplace_status is defined and module_marketplace_status and marketplace_seller_name_cart_status and product['seller_name'] is defined and product['seller_name'] and not marketplace_seller_info_hide %}*/
/*                               <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {{ text_bySeller }} <a href="{{ product.seller_href }}" target="_blank">{{ product['seller_name'] }}</a>*/
/*                             {% else %}*/
/*                               <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a>*/
/*                             {% endif %}*/
/*                                {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table table-bordered">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-right"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-right"><a href="{{ cart }}"><strong><i class="fa fa-shopping-cart"></i> {{ text_cart }}</strong></a>&nbsp;&nbsp;&nbsp;<a href="{{ checkout }}"><strong><i class="fa fa-share"></i> {{ text_checkout }}</strong></a></p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
