<?php

/* default/template/customerpartner/sellmenu.twig */
class __TwigTemplate_2056169db1210095274b51bb16f9b2e1292b700b01467ad32923fbc6f31c7a1a extends Twig_Template
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
        if ((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null))) {
            // line 2
            echo "<style>
ul.wk li a{
color : #000;
padding :5px;
}
.open>.dropdown-menu.wk{
right : auto;
}
header{
z-index : 99 !important;
}
header .links .wk a{
display:block;
text-align :left;
}
</style>
    <li class=\"dropdown\"><a href=\"";
            // line 18
            echo (isset($context["menusell"]) ? $context["menusell"] : null);
            echo "\" title=\"";
            echo (isset($context["text_sell_header"]) ? $context["text_sell_header"] : null);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-users\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_sell_header"]) ? $context["text_sell_header"] : null);
            echo "</span> <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          ";
            // line 20
            if (((((isset($context["logged"]) ? $context["logged"] : null) && (isset($context["chkIsPartner"]) ? $context["chkIsPartner"] : null)) && array_key_exists("marketplace_seller_mode", $context)) && (isset($context["marketplace_seller_mode"]) ? $context["marketplace_seller_mode"] : null))) {
                // line 21
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("profile", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 22
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_profile"]) ? $context["mp_profile"] : null);
                    echo "\">";
                    echo (isset($context["text_my_profile"]) ? $context["text_my_profile"] : null);
                    echo "</a></li>
            ";
                }
                // line 24
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("dashboard", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 25
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_dashboard"]) ? $context["mp_dashboard"] : null);
                    echo "\">";
                    echo (isset($context["text_dashboard"]) ? $context["text_dashboard"] : null);
                    echo "</a></li>
            ";
                }
                // line 27
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("orderhistory", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 28
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_orderhistory"]) ? $context["mp_orderhistory"] : null);
                    echo "\">";
                    echo (isset($context["text_orderhistory"]) ? $context["text_orderhistory"] : null);
                    echo "</a></li>
            ";
                }
                // line 30
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("transaction", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 31
                    echo "              <li><a href=\"";
                    echo (isset($context["mp_transaction"]) ? $context["mp_transaction"] : null);
                    echo "\">";
                    echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
                    echo "</a></li>
            ";
                }
                // line 33
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("productlist", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 34
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_productlist"]) ? $context["mp_productlist"] : null);
                    echo "\">";
                    echo (isset($context["text_productlist"]) ? $context["text_productlist"] : null);
                    echo "</a></li>
            ";
                }
                // line 36
                echo "
            ";
                // line 37
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("addproduct", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 38
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_addproduct"]) ? $context["mp_addproduct"] : null);
                    echo "\">";
                    echo (isset($context["text_addproduct"]) ? $context["text_addproduct"] : null);
                    echo "</a></li>
            ";
                }
                // line 40
                echo "
            ";
                // line 41
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("downloads", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 42
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_download"]) ? $context["mp_download"] : null);
                    echo "\">";
                    echo (isset($context["text_download"]) ? $context["text_download"] : null);
                    echo "</a></li>
            ";
                }
                // line 44
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("manageshipping", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 45
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_add_shipping_mod"]) ? $context["mp_add_shipping_mod"] : null);
                    echo "\">";
                    echo (isset($context["text_wkshipping"]) ? $context["text_wkshipping"] : null);
                    echo "</a></li>
            ";
                }
                // line 47
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("asktoadmin", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 48
                    echo "                <li><a id=\"ask-to-admin\" data-toggle=\"modal\" data-target=\"#myModal-seller-mail\">";
                    echo (isset($context["text_ask_admin"]) ? $context["text_ask_admin"] : null);
                    echo "</a></li>
            ";
                }
                // line 50
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("information", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 51
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_information"]) ? $context["mp_information"] : null);
                    echo "\">";
                    echo (isset($context["text_information"]) ? $context["text_information"] : null);
                    echo "</a></li>
            ";
                }
                // line 53
                echo "
            ";
                // line 54
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("category", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 55
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_category"]) ? $context["mp_category"] : null);
                    echo "\">";
                    echo (isset($context["text_category"]) ? $context["text_category"] : null);
                    echo "</a></li>
            ";
                }
                // line 57
                echo "            ";
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("review", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 58
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_review"]) ? $context["mp_review"] : null);
                    echo "\">";
                    echo (isset($context["text_review"]) ? $context["text_review"] : null);
                    echo "</a></li>
            ";
                }
                // line 60
                echo "            <li id=\"wk-notify\"><a id=\"notification\" data-toggle=\"modal\" data-target=\"#myModal-notification\">";
                echo (isset($context["text_notifications"]) ? $context["text_notifications"] : null);
                echo " ";
                if ((array_key_exists("notification_total", $context) && ((isset($context["notification_total"]) ? $context["notification_total"] : null) > 0))) {
                    echo "<span class=\"badge\">";
                    echo (isset($context["notification_total"]) ? $context["notification_total"] : null);
                    echo "</span>";
                }
                echo "</a></li>
            <li role=\"presentation\" class=\"divider\"></li>
            ";
                // line 62
                if ((array_key_exists("separate_view", $context) && (isset($context["separate_view"]) ? $context["separate_view"] : null))) {
                    // line 63
                    echo "              <li><a href=\"";
                    echo (isset($context["separate_view"]) ? $context["separate_view"] : null);
                    echo "\">";
                    echo (isset($context["text_separate_view"]) ? $context["text_separate_view"] : null);
                    echo "</a></li>
            ";
                }
                // line 65
                echo "          ";
            }
            // line 66
            echo "            <li><a href=\"";
            echo (isset($context["menusell"]) ? $context["menusell"] : null);
            echo "\">";
            echo (isset($context["text_sell_header"]) ? $context["text_sell_header"] : null);
            echo "</a></li>
        </ul>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/customerpartner/sellmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 66,  208 => 65,  200 => 63,  198 => 62,  186 => 60,  178 => 58,  175 => 57,  167 => 55,  165 => 54,  162 => 53,  154 => 51,  151 => 50,  145 => 48,  142 => 47,  134 => 45,  131 => 44,  123 => 42,  121 => 41,  118 => 40,  110 => 38,  108 => 37,  105 => 36,  97 => 34,  94 => 33,  86 => 31,  83 => 30,  75 => 28,  72 => 27,  64 => 25,  61 => 24,  53 => 22,  50 => 21,  48 => 20,  39 => 18,  21 => 2,  19 => 1,);
    }
}
/* {% if module_marketplace_status is defined and module_marketplace_status %}*/
/* <style>*/
/* ul.wk li a{*/
/* color : #000;*/
/* padding :5px;*/
/* }*/
/* .open>.dropdown-menu.wk{*/
/* right : auto;*/
/* }*/
/* header{*/
/* z-index : 99 !important;*/
/* }*/
/* header .links .wk a{*/
/* display:block;*/
/* text-align :left;*/
/* }*/
/* </style>*/
/*     <li class="dropdown"><a href="{{ menusell }}" title="{{ text_sell_header }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_sell_header }}</span> <span class="caret"></span></a>*/
/*         <ul class="dropdown-menu dropdown-menu-right">*/
/*           {% if logged and chkIsPartner and marketplace_seller_mode is defined and marketplace_seller_mode %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'profile' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_profile }}">{{ text_my_profile }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'dashboard' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_dashboard }}">{{ text_dashboard }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'orderhistory' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_orderhistory }}">{{ text_orderhistory }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'transaction' in marketplace_allowed_account_menu %}*/
/*               <li><a href="{{ mp_transaction }}">{{ text_transaction }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'productlist' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_productlist }}">{{ text_productlist }}</a></li>*/
/*             {% endif %}*/
/* */
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'addproduct' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_addproduct }}">{{ text_addproduct }}</a></li>*/
/*             {% endif %}*/
/* */
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'downloads' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_download }}">{{ text_download }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'manageshipping' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_add_shipping_mod }}">{{ text_wkshipping }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'asktoadmin' in marketplace_allowed_account_menu %}*/
/*                 <li><a id="ask-to-admin" data-toggle="modal" data-target="#myModal-seller-mail">{{ text_ask_admin }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'information' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_information }}">{{ text_information }}</a></li>*/
/*             {% endif %}*/
/* */
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'category' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_category }}">{{ text_category }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'review' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_review }}">{{ text_review }}</a></li>*/
/*             {% endif %}*/
/*             <li id="wk-notify"><a id="notification" data-toggle="modal" data-target="#myModal-notification">{{ text_notifications }} {% if notification_total is defined and notification_total > 0 %}<span class="badge">{{ notification_total }}</span>{% endif %}</a></li>*/
/*             <li role="presentation" class="divider"></li>*/
/*             {% if separate_view is defined and separate_view %}*/
/*               <li><a href="{{ separate_view }}">{{ text_separate_view }}</a></li>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*             <li><a href="{{ menusell }}">{{ text_sell_header }}</a></li>*/
/*         </ul>*/
/*     </li>*/
/* {% endif %}*/
/* */
