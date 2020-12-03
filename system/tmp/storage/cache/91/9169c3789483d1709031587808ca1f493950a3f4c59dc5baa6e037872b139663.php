<?php

/* default/template/account/account.twig */
class __TwigTemplate_7b250eb744d97a975ca6e4d74dd363f328a6bcc791952bb8932fd568b873a5eb extends Twig_Template
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

                    <style type=\"text/css\">
                      .btn-success{
                        background-image: linear-gradient(to bottom, #62c462, #51a351);
                      }
                    </style>
                
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "  </ul>
  ";
        // line 15
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 16
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 19
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "

                    ";
        // line 28
        if ((array_key_exists("is_seller", $context) && (isset($context["is_seller"]) ? $context["is_seller"] : null))) {
            // line 29
            echo "                        <form class=\"form-horizontal\" action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" id=\"form-mode\">
                            <div>
                              ";
            // line 31
            if ((array_key_exists("marketplace_seller_mode", $context) && (isset($context["marketplace_seller_mode"]) ? $context["marketplace_seller_mode"] : null))) {
                // line 32
                echo "                               <input value=\"1\" name=\"marketplace_seller_mode\" data-toggle=\"toggle\" data-on=\"";
                echo (isset($context["text_mode_seller"]) ? $context["text_mode_seller"] : null);
                echo "\" data-off=\"";
                echo (isset($context["text_mode_customer"]) ? $context["text_mode_customer"] : null);
                echo "\" data-onstyle=\"success\" data-offstyle=\"danger\" type=\"checkbox\" class=\"form-control hide\" checked>
                              ";
            } else {
                // line 34
                echo "                               <input value=\"1\" name=\"marketplace_seller_mode\" data-toggle=\"toggle\" data-on=\"";
                echo (isset($context["text_mode_seller"]) ? $context["text_mode_seller"] : null);
                echo "\" data-off=\"";
                echo (isset($context["text_mode_customer"]) ? $context["text_mode_customer"] : null);
                echo "\" data-onstyle=\"success\" data-offstyle=\"danger\" type=\"checkbox\" class=\"form-control hide\">
                              ";
            }
            // line 36
            echo "                            </div>
                        </form>
                        <br/>
                    ";
        }
        // line 40
        echo "                
      <h2>";
        // line 41
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 43
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 44
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 45
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 46
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
      </ul>
      ";
        // line 48
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 49
            echo "      <h2>";
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 52
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </ul>
      ";
        }
        // line 56
        echo "      <h2>";
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 58
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 59
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
        ";
        // line 60
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 61
            echo "        <li><a href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a></li>
        ";
        }
        // line 63
        echo "        <li><a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 64
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 65
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a></li>
      </ul>
      <h2>";
        // line 67
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 69
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 70
            echo "        <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a></li>
        ";
        } else {
            // line 72
            echo "        <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a></li>
        <li><a href=\"";
            // line 73
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a></li>
        ";
        }
        // line 75
        echo "      </ul>
      ";
        // line 76
        if ((isset($context["tracking_link"]) ? $context["tracking_link"] : null)) {
            // line 77
            echo "        <!--<button id=\"copy-affiliate\" data-clipboard-text=\"";
            echo (isset($context["tracking_link"]) ? $context["tracking_link"] : null);
            echo "\">點我複製推薦連結</button> -->
        <p>登錄享利社群後，可以輕鬆獲取帶有追踪代碼的連接，指向網站上的任何頁面，同時瀏覽網站並單擊這些<i class=\"fa fa-link\"></i>連接追踪您的會員夥伴。</p>
      ";
        }
        // line 80
        echo "

\t";
        // line 83
        echo "\t";
        if (((isset($context["mta_status"]) ? $context["mta_status"] : null) && (isset($context["tracking"]) ? $context["tracking"] : null))) {
            // line 84
            echo "\t";
            // line 91
            echo "\t";
            if ((isset($context["show_downline"]) ? $context["show_downline"] : null)) {
                // line 92
                echo "\t<li><a href=\"";
                echo (isset($context["link_affiliate_downline"]) ? $context["link_affiliate_downline"] : null);
                echo "\">";
                echo (isset($context["text_affiliate_downline"]) ? $context["text_affiliate_downline"] : null);
                echo "</a></li>
\t";
                // line 100
                echo "\t";
            }
            // line 101
            echo "\t";
        }
        // line 102
        echo "\t";
        echo "\t

      <h2>";
        // line 104
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 106
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
      </ul>
      ";
        // line 108
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 109
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>

                    <script type=\"text/javascript\">
                      \$('input[name=\\'marketplace_seller_mode\\']').on('change',function() {
                        \$(\"#form-mode\").submit();
                      });
                    </script>
                
";
        // line 118
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 118,  318 => 109,  314 => 108,  307 => 106,  302 => 104,  297 => 102,  294 => 101,  291 => 100,  284 => 92,  281 => 91,  279 => 84,  276 => 83,  272 => 80,  265 => 77,  263 => 76,  260 => 75,  253 => 73,  246 => 72,  238 => 70,  236 => 69,  231 => 67,  224 => 65,  218 => 64,  211 => 63,  203 => 61,  201 => 60,  195 => 59,  189 => 58,  183 => 56,  179 => 54,  168 => 52,  164 => 51,  158 => 49,  156 => 48,  149 => 46,  143 => 45,  137 => 44,  131 => 43,  126 => 41,  123 => 40,  117 => 36,  109 => 34,  101 => 32,  99 => 31,  93 => 29,  91 => 28,  83 => 26,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  63 => 19,  58 => 18,  52 => 16,  50 => 15,  47 => 14,  36 => 12,  32 => 11,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/*                     <style type="text/css">*/
/*                       .btn-success{*/
/*                         background-image: linear-gradient(to bottom, #62c462, #51a351);*/
/*                       }*/
/*                     </style>*/
/*                 */
/* <div id="account-account" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
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
/* */
/*                     {% if is_seller is defined and is_seller %}*/
/*                         <form class="form-horizontal" action="{{ action }}" method="post" id="form-mode">*/
/*                             <div>*/
/*                               {% if marketplace_seller_mode is defined and marketplace_seller_mode %}*/
/*                                <input value="1" name="marketplace_seller_mode" data-toggle="toggle" data-on="{{ text_mode_seller }}" data-off="{{ text_mode_customer }}" data-onstyle="success" data-offstyle="danger" type="checkbox" class="form-control hide" checked>*/
/*                               {% else %}*/
/*                                <input value="1" name="marketplace_seller_mode" data-toggle="toggle" data-on="{{ text_mode_seller }}" data-off="{{ text_mode_customer }}" data-onstyle="success" data-offstyle="danger" type="checkbox" class="form-control hide">*/
/*                               {% endif %}*/
/*                             </div>*/
/*                         </form>*/
/*                         <br/>*/
/*                     {% endif %}*/
/*                 */
/*       <h2>{{ text_my_account }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*         <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*         <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*         <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*       </ul>*/
/*       {% if credit_cards %}*/
/*       <h2>{{ text_credit_card }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         {% for credit_card in credit_cards %}*/
/*         <li><a href="{{ credit_card.href }}">{{ credit_card.name }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       {% endif %}*/
/*       <h2>{{ text_my_orders }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*         <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*         {% if reward %}*/
/*         <li><a href="{{ reward }}">{{ text_reward }}</a></li>*/
/*         {% endif %}*/
/*         <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*         <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*         <li><a href="{{ recurring }}">{{ text_recurring }}</a></li>*/
/*       </ul>*/
/*       <h2>{{ text_my_affiliate }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         {% if not tracking %}*/
/*         <li><a href="{{ affiliate }}">{{ text_affiliate_add }}</a></li>*/
/*         {% else %}*/
/*         <li><a href="{{ affiliate }}">{{ text_affiliate_edit }}</a></li>*/
/*         <li><a href="{{ tracking }}">{{ text_tracking }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       {% if tracking_link %}*/
/*         <!--<button id="copy-affiliate" data-clipboard-text="{{ tracking_link }}">點我複製推薦連結</button> -->*/
/*         <p>登錄享利社群後，可以輕鬆獲取帶有追踪代碼的連接，指向網站上的任何頁面，同時瀏覽網站並單擊這些<i class="fa fa-link"></i>連接追踪您的會員夥伴。</p>*/
/*       {% endif %}*/
/* */
/* */
/* 	{# //+mod by yp start #}*/
/* 	{% if mta_status and tracking %}*/
/* 	{#*/
/* 	<h2>{{ text_signup_link }}</h2>*/
/* 	<ul class="list-unstyled">	*/
/* 		<li class="auto-new-line"><strong>{{ signup_link }}</strong><br />*/
/* 		{{ text_aff_link_any_page }}</li>*/
/* 	</ul>*/
/* 	#}*/
/* 	{% if show_downline %}*/
/* 	<li><a href="{{ link_affiliate_downline }}">{{ text_affiliate_downline }}</a></li>*/
/* 	{#*/
/* 	<div class="list-unstyled">*/
/* 		<ul>*/
/* 			<li><a href="{{ link_affiliate_downline }}">{{ text_affiliate_downline }}</a></li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	#}*/
/* 	{% endif %}*/
/* 	{% endif %}*/
/* 	{# //+mod by yp end #}	*/
/* */
/*       <h2>{{ text_my_newsletter }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*       </ul>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* */
/*                     <script type="text/javascript">*/
/*                       $('input[name=\'marketplace_seller_mode\']').on('change',function() {*/
/*                         $("#form-mode").submit();*/
/*                       });*/
/*                     </script>*/
/*                 */
/* {{ footer }}*/
