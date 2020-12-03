<?php

/* extension/module/marketplace.twig */
class __TwigTemplate_ac439a1465dc366e152a0edd15fae7bf41d3b6d4c6bdf2d42c49aec8105265d9 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <style type=\"text/css\">
  .img-thumbnail-default{
    height: 100px;
    width: 100px;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 3px;
    line-height: 1.42857;
    max-width: 100px;
    padding: 4px;
    transition: all 0.2s ease-in-out 0s;
    cursor: pointer;
  }

  #text-mp{
    font-size: 30px;
  }

  #text-version{
    font-size: 12px;
  }

  .mp-button{
    background-color: #0667B4;
    color: white;
    border-radius: 2px;
    font-size: 12px;
  }

  .mp-button:focus{
    outline: none !important;
  }

  .mp-demo{
    background-color: #2196F3;
  }

  .mp-save{
    background-color: rgb(77, 188, 96);
  }

  .mp-cancel{
    background-color: #E15959;
  }

  .mp-addon{
    background-color: #4285F4;
    color: #FFF;
    border-color: #4285F4;
  }

  .nav-tabs {
      border-bottom: 1px solid #4285F4;
  }

  .nav.nav-tabs > li > a:hover, .nav-tabs > li > a:hover{
    background-color: #4285F4;
    border-color: #4285F4;
    color: white;
    outline: medium none !important;
  }

  .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus {
    background-color: #FFFFFF;
    border: 1px solid #4285F4;
    border-bottom-color: #FFFFFF !important;
    outline: medium none !important;
    color: black;
  }

  .fa-minus-circle{
    cursor: pointer;
  }

  .dropdown-menu{
    max-height: 500px;
    overflow: auto;
  }
</style>
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"http://webkul.com/blog/opencart-marketplace-multi-vendor-module/\" target=\"_blank\" title=\"";
        // line 85
        echo (isset($context["text_blog_help"]) ? $context["text_blog_help"] : null);
        echo "\" data-toggle=\"tooltip\" class=\"btn btn-lg mp-button\">";
        echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
        echo "</a>
        <a href=\"https://webkul.uvdesk.com/\" target=\"_blank\" title=\"";
        // line 86
        echo (isset($context["text_ticket_help"]) ? $context["text_ticket_help"] : null);
        echo "\" data-toggle=\"tooltip\" class=\"btn btn-lg mp-button mp-demo\">";
        echo (isset($context["text_ticket"]) ? $context["text_ticket"] : null);
        echo "</a>
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 87
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-lg mp-button mp-save\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 88
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-lg mp-button mp-cancel\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 89
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 92
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-12 text-center\">
        <div class=\"text-center\" id=\"text-mp\">";
        // line 100
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
      </div>
      <div class=\"col-sm-12 text-center\">
        <div class=\"text-center\" id=\"text-version\">Version 4.1.2.0</div>
      </div>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 109
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 110
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 114
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 115
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 119
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 121
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">

      <!--   <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 126
        echo (isset($context["text_info"]) ? $context["text_info"] : null);
        echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div> -->

        <form action=\"";
        // line 130
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-module_marketplace_status\">";
        // line 133
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_marketplace_status\" id=\"input-module_marketplace_status\" class=\"form-control\">
                <option value=\"0\" ";
        // line 136
        if ((array_key_exists("module_marketplace_status", $context) && ((isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null) == 0))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
                <option value=\"1\"  ";
        // line 137
        if ((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-marketplace_store\">";
        // line 143
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"marketplace_store\" id=\"input-marketplace_store\" class=\"form-control\">
                ";
        // line 146
        if ((array_key_exists("stores", $context) && (isset($context["stores"]) ? $context["stores"] : null))) {
            // line 147
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 148
                echo "                    <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" ";
                if ((array_key_exists("marketplace_store", $context) && ((isset($context["marketplace_store"]) ? $context["marketplace_store"] : null) == $this->getAttribute($context["store"], "store_id", array())))) {
                    echo "selected";
                }
                echo "   >";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                ";
        }
        // line 151
        echo "              </select>
            </div>
          </div>

          <br/>

          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 158
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-commission\" data-toggle=\"tab\">";
        // line 159
        echo (isset($context["tab_commission"]) ? $context["tab_commission"] : null);
        echo "</a></li>
            <li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 160
        echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
        echo "</a></li>
            <li><a href=\"#tab-advncd\" data-toggle=\"tab\">";
        // line 161
        echo "Advanced";
        echo "</a></li>
            <li><a href=\"#tab-order\" data-toggle=\"tab\">";
        // line 162
        echo (isset($context["tab_order"]) ? $context["tab_order"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 163
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-sell\" data-toggle=\"tab\">";
        // line 164
        echo (isset($context["tab_sell"]) ? $context["tab_sell"] : null);
        echo "</a></li>
            <li><a href=\"#tab-profile\" data-toggle=\"tab\">";
        // line 165
        echo (isset($context["tab_profile"]) ? $context["tab_profile"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mod-config\" data-toggle=\"tab\">";
        // line 166
        echo (isset($context["tab_mod_config"]) ? $context["tab_mod_config"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 167
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-paypal\" data-toggle=\"tab\">";
        // line 168
        echo (isset($context["tab_paypal"]) ? $context["tab_paypal"] : null);
        echo "</a></li>
          </ul>

          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail\"><span data-toggle=\"tooltip\" title=\"";
        // line 174
        echo (isset($context["entry_admin_mailinfo"]) ? $context["entry_admin_mailinfo"] : null);
        echo "\">";
        echo (isset($context["entry_admin_mail"]) ? $context["entry_admin_mail"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"marketplace_adminmail\" ";
        // line 176
        if (array_key_exists("marketplace_adminmail", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_adminmail"]) ? $context["marketplace_adminmail"] : null);
            echo "\" ";
        }
        echo "  id=\"input-mail\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-contactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 180
        echo (isset($context["entry_default_imageinfo"]) ? $context["entry_default_imageinfo"] : null);
        echo "\">";
        echo (isset($context["entry_default_image"]) ? $context["entry_default_image"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"file\" class=\"hide\" name=\"marketplace_default_image\" />
                  <input type=\"hidden\" name=\"marketplace_default_image_name\" value=\"";
        // line 183
        if (array_key_exists("marketplace_default_image_name", $context)) {
            echo (isset($context["marketplace_default_image_name"]) ? $context["marketplace_default_image_name"] : null);
        }
        echo "  \" />
                  <div class=\"img-thumbnail-default\" id=\"default-image\">
                    ";
        // line 185
        if ((array_key_exists("marketplace_default_image", $context) && (isset($context["marketplace_default_image"]) ? $context["marketplace_default_image"] : null))) {
            // line 186
            echo "                      <img src=\"";
            echo (isset($context["marketplace_default_image"]) ? $context["marketplace_default_image"] : null);
            echo "\" id=\"default-image-view\" />
                    ";
        }
        // line 188
        echo "                  </div>
                  ";
        // line 189
        if ((array_key_exists("marketplace_default_image", $context) && (isset($context["marketplace_default_image"]) ? $context["marketplace_default_image"] : null))) {
            // line 190
            echo "                    <div style=\"width:100px\">
                      <button class=\"btn btn-danger btn-sm\" id=\"removeimg\" type=\"button\" style=\"margin-top: 5px;width: 100%;\">";
            // line 191
            echo (isset($context["entry_remove"]) ? $context["entry_remove"] : null);
            echo "</button>
                    </div>
                  ";
        }
        // line 194
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-becomepartnerinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 197
        echo (isset($context["entry_becomepartnerinfo"]) ? $context["entry_becomepartnerinfo"] : null);
        echo "\">";
        echo (isset($context["entry_becomepartner"]) ? $context["entry_becomepartner"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_becomepartnerregistration\" id=\"input-becomepartnerinfo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 200
        if ((array_key_exists("marketplace_becomepartnerregistration", $context) && ((isset($context["marketplace_becomepartnerregistration"]) ? $context["marketplace_becomepartnerregistration"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 201
        if ((array_key_exists("marketplace_becomepartnerregistration", $context) && (isset($context["marketplace_becomepartnerregistration"]) ? $context["marketplace_becomepartnerregistration"] : null))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-partnerapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 207
        echo (isset($context["entry_partnerapprovinfo"]) ? $context["entry_partnerapprovinfo"] : null);
        echo "\">";
        echo (isset($context["entry_partnerapprov"]) ? $context["entry_partnerapprov"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_partnerapprov\" id=\"input-partnerapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 210
        if ((array_key_exists("marketplace_partnerapprov", $context) && ((isset($context["marketplace_partnerapprov"]) ? $context["marketplace_partnerapprov"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 211
        if ((array_key_exists("marketplace_partnerapprov", $context) && (isset($context["marketplace_partnerapprov"]) ? $context["marketplace_partnerapprov"] : null))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-productapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 217
        echo (isset($context["entry_productapprovinfo"]) ? $context["entry_productapprovinfo"] : null);
        echo "\">";
        echo (isset($context["entry_productapprov"]) ? $context["entry_productapprov"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_productapprov\" id=\"input-productapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 220
        if ((array_key_exists("marketplace_productapprov", $context) && ((isset($context["marketplace_productapprov"]) ? $context["marketplace_productapprov"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 221
        if ((array_key_exists("marketplace_productapprov", $context) && (isset($context["marketplace_productapprov"]) ? $context["marketplace_productapprov"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-categoryapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 227
        echo (isset($context["entry_categoryapprovinfo"]) ? $context["entry_categoryapprovinfo"] : null);
        echo "\">";
        echo (isset($context["entry_categoryapprov"]) ? $context["entry_categoryapprov"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_categoryapprov\" id=\"input-categoryapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 230
        if ((array_key_exists("marketplace_categoryapprov", $context) && ((isset($context["marketplace_categoryapprov"]) ? $context["marketplace_categoryapprov"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 231
        if ((array_key_exists("marketplace_categoryapprov", $context) && (isset($context["marketplace_categoryapprov"]) ? $context["marketplace_categoryapprov"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-informationapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 237
        echo (isset($context["entry_informationapprovinfo"]) ? $context["entry_informationapprovinfo"] : null);
        echo "\">";
        echo (isset($context["entry_informationapprov"]) ? $context["entry_informationapprov"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_informationapprov\" id=\"input-informationapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 240
        if ((array_key_exists("marketplace_informationapprov", $context) && ((isset($context["marketplace_informationapprov"]) ? $context["marketplace_informationapprov"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 241
        if ((array_key_exists("marketplace_informationapprov", $context) && (isset($context["marketplace_informationapprov"]) ? $context["marketplace_informationapprov"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellereditreview\"><span data-toggle=\"tooltip\" title=\"";
        // line 247
        echo (isset($context["entry_sellereditreviewinfo"]) ? $context["entry_sellereditreviewinfo"] : null);
        echo "\">";
        echo (isset($context["entry_sellereditreview"]) ? $context["entry_sellereditreview"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellereditreview\" id=\"input-sellereditreview\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 250
        if ((array_key_exists("marketplace_sellereditreview", $context) && ((isset($context["marketplace_sellereditreview"]) ? $context["marketplace_sellereditreview"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\"  ";
        // line 251
        if ((array_key_exists("marketplace_sellereditreview", $context) && (isset($context["marketplace_sellereditreview"]) ? $context["marketplace_sellereditreview"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-contactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 257
        echo (isset($context["entry_customer_contact_sellerinfo"]) ? $context["entry_customer_contact_sellerinfo"] : null);
        echo "\">";
        echo (isset($context["entry_customer_contact_seller"]) ? $context["entry_customer_contact_seller"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_customercontactseller\" id=\"input-contactseller\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 260
        if ((array_key_exists("marketplace_customercontactseller", $context) && ((isset($context["marketplace_customercontactseller"]) ? $context["marketplace_customercontactseller"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 261
        if ((array_key_exists("marketplace_customercontactseller", $context) && (isset($context["marketplace_customercontactseller"]) ? $context["marketplace_customercontactseller"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellernamecart\"><span data-toggle=\"tooltip\" title=\"";
        // line 267
        echo (isset($context["entry_seller_name_cart_info"]) ? $context["entry_seller_name_cart_info"] : null);
        echo "\">";
        echo (isset($context["entry_seller_name_cart"]) ? $context["entry_seller_name_cart"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_name_cart_status\" id=\"input-sellernamecart\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 270
        if ((array_key_exists("marketplace_seller_name_cart_status", $context) && ((isset($context["marketplace_seller_name_cart_status"]) ? $context["marketplace_seller_name_cart_status"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 271
        if ((array_key_exists("marketplace_seller_name_cart_status", $context) && (isset($context["marketplace_seller_name_cart_status"]) ? $context["marketplace_seller_name_cart_status"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-admincustomercontactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 277
        echo (isset($context["entry_mail_admin_customer_contact_sellerinfo"]) ? $context["entry_mail_admin_customer_contact_sellerinfo"] : null);
        echo "\">";
        echo (isset($context["entry_mail_admin_customer_contact_seller"]) ? $context["entry_mail_admin_customer_contact_seller"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mailadmincustomercontactseller\" id=\"input-admincustomercontactseller\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 280
        if ((array_key_exists("marketplace_mailadmincustomercontactseller", $context) && ((isset($context["marketplace_mailadmincustomercontactseller"]) ? $context["marketplace_mailadmincustomercontactseller"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 281
        if ((array_key_exists("marketplace_mailadmincustomercontactseller", $context) && (isset($context["marketplace_mailadmincustomercontactseller"]) ? $context["marketplace_mailadmincustomercontactseller"] : null))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-separateview\">";
        // line 287
        echo (isset($context["entry_separate_view"]) ? $context["entry_separate_view"] : null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_separate_view\" id=\"input-separateview\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 290
        if ((array_key_exists("marketplace_separate_view", $context) && ((isset($context["marketplace_separate_view"]) ? $context["marketplace_separate_view"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 291
        if ((array_key_exists("marketplace_separate_view", $context) && (isset($context["marketplace_separate_view"]) ? $context["marketplace_separate_view"] : null))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" >
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 298
        echo (isset($context["entry_notification_filter_help"]) ? $context["entry_notification_filter_help"] : null);
        echo "\">
                    ";
        // line 299
        echo (isset($context["entry_notification_filter"]) ? $context["entry_notification_filter"] : null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height:150px;overflow:auto\">
                    ";
        // line 304
        if ((array_key_exists("order_statuses", $context) && (isset($context["order_statuses"]) ? $context["order_statuses"] : null))) {
            // line 305
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                // line 306
                echo "                        <div class=\"checkbox\">
                          <label for=\"notification_filter_";
                // line 307
                echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                echo "\">
                            <input type=\"checkbox\" name=\"marketplace_notification_filter[]\" value=\"";
                // line 308
                echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                echo "\" id=\"notification_filter_";
                echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                echo "\" ";
                if (((array_key_exists("marketplace_notification_filter", $context) && (isset($context["marketplace_notification_filter"]) ? $context["marketplace_notification_filter"] : null)) && twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array(), "array"), (isset($context["marketplace_notification_filter"]) ? $context["marketplace_notification_filter"] : null)))) {
                    echo "checked";
                }
                echo " />
                            ";
                // line 309
                echo $this->getAttribute($context["order_status"], "name", array(), "array");
                echo "
                          </label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                    ";
        }
        // line 314
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 315
        echo (isset($context["entry_selectall"]) ? $context["entry_selectall"] : null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo (isset($context["entry_deselectall"]) ? $context["entry_deselectall"] : null);
        echo "</a>
                </div>
              </div>

            </div>
            <!-- comission tab -->
            <div class=\"tab-pane\" id=\"tab-commission\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 323
        echo (isset($context["entry_commission_info"]) ? $context["entry_commission_info"] : null);
        echo "\">";
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"input-group\"><span class=\"input-group-addon mp-addon mp-addon\">%</span>
                     <input type=\"number\" min=\"0\" name=\"marketplace_commission\" ";
        // line 326
        if (array_key_exists("marketplace_commission", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_commission"]) ? $context["marketplace_commission"] : null);
            echo "\" ";
        }
        echo "  id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commission-unit_price\"><span data-toggle=\"tooltip\" title=\"";
        // line 332
        echo (isset($context["entry_commission_unit_price_info"]) ? $context["entry_commission_unit_price_info"] : null);
        echo "\">";
        echo (isset($context["entry_commission_unit_price"]) ? $context["entry_commission_unit_price"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_commission_unit_price\" id=\"input-commission-unit_price\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 335
        if ((array_key_exists("marketplace_commission_unit_price", $context) && ((isset($context["marketplace_commission_unit_price"]) ? $context["marketplace_commission_unit_price"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 336
        if ((array_key_exists("marketplace_commission_unit_price", $context) && (isset($context["marketplace_commission_unit_price"]) ? $context["marketplace_commission_unit_price"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commission-tax\"><span data-toggle=\"tooltip\" title=\"";
        // line 342
        echo (isset($context["entry_commission_tax_info"]) ? $context["entry_commission_tax_info"] : null);
        echo "\">";
        echo (isset($context["entry_commission_tax"]) ? $context["entry_commission_tax"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_commission_tax\" id=\"input-commission-tax\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 345
        if ((array_key_exists("marketplace_commission_tax", $context) && ((isset($context["marketplace_commission_tax"]) ? $context["marketplace_commission_tax"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 346
        if ((array_key_exists("marketplace_commission_tax", $context) && (isset($context["marketplace_commission_tax"]) ? $context["marketplace_commission_tax"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-commissionworkedon\"><span data-toggle=\"tooltip\" title=\"";
        // line 352
        echo (isset($context["entry_commission_workedinfo"]) ? $context["entry_commission_workedinfo"] : null);
        echo "\">";
        echo (isset($context["entry_commission_worked"]) ? $context["entry_commission_worked"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"checkbox\" name=\"marketplace_commissionworkedon\" value=\"1\" ";
        // line 354
        if ((array_key_exists("marketplace_commissionworkedon", $context) && (isset($context["marketplace_commissionworkedon"]) ? $context["marketplace_commissionworkedon"] : null))) {
            echo "checked";
        }
        echo " id=\"input-commissionworkedon\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\"  title=\"";
        // line 359
        echo (isset($context["entry_commission_addinfo"]) ? $context["entry_commission_addinfo"] : null);
        echo "\">";
        echo (isset($context["entry_commission_add"]) ? $context["entry_commission_add"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 364
        if (((array_key_exists("marketplace_commission_add", $context) && twig_test_iterable((isset($context["marketplace_commission_add"]) ? $context["marketplace_commission_add"] : null))) && twig_in_filter("category", (isset($context["marketplace_commission_add"]) ? $context["marketplace_commission_add"] : null)))) {
            // line 365
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category]\" value=\"category\" checked=\"checked\" />
                        ";
        } else {
            // line 367
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category]\" value=\"category\" />
                        ";
        }
        // line 369
        echo "                        ";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "
                      </label>
                    </div>
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 374
        if (((array_key_exists("marketplace_commission_add", $context) && twig_test_iterable((isset($context["marketplace_commission_add"]) ? $context["marketplace_commission_add"] : null))) && twig_in_filter("category_child", (isset($context["marketplace_commission_add"]) ? $context["marketplace_commission_add"] : null)))) {
            // line 375
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category_child]\" value=\"category_child\" checked=\"checked\" />
                        ";
        } else {
            // line 377
            echo "                        <input type=\"checkbox\" name=\"marketplace_commission_add[category_child]\" value=\"category_child\" />
                        ";
        }
        // line 379
        echo "                        ";
        echo (isset($context["entry_category_child"]) ? $context["entry_category_child"] : null);
        echo "
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 387
        echo (isset($context["entry_priority_commissioninfo"]) ? $context["entry_priority_commissioninfo"] : null);
        echo "\">";
        echo (isset($context["entry_priority_commission"]) ? $context["entry_priority_commission"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">

                  <ul class=\"nav nav-pills nav-stacked\" id=\"sortable\">
                    ";
        // line 391
        if (( !array_key_exists("marketplace_boxcommission", $context) || ((isset($context["marketplace_boxcommission"]) ? $context["marketplace_boxcommission"] : null) == 0))) {
            // line 392
            echo "                      <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                        <input type=\"hidden\" name=\"marketplace_boxcommission[fixed]\" value=\"fixed\" />
                        ";
            // line 394
            echo (isset($context["entry_fixed"]) ? $context["entry_fixed"] : null);
            echo "</a>
                      </li>
                      <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                        <input type=\"hidden\" name=\"marketplace_boxcommission[category]\" value=\"fixed\" />
                        ";
            // line 398
            echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
            echo "</a>
                      </li>
                      <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                        <input type=\"hidden\" name=\"marketplace_boxcommission[category_child]\" value=\"fixed\"/>
                        ";
            // line 402
            echo (isset($context["entry_category_child"]) ? $context["entry_category_child"] : null);
            echo "</a>
                      </li>
                    ";
        } else {
            // line 405
            echo "                      ";
            if ((array_key_exists("marketplace_boxcommission", $context) && (isset($context["marketplace_boxcommission"]) ? $context["marketplace_boxcommission"] : null))) {
                // line 406
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["marketplace_boxcommission"]) ? $context["marketplace_boxcommission"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["box"]) {
                    // line 407
                    echo "                          <li><a><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                            <input type=\"hidden\" name=\"marketplace_boxcommission[";
                    // line 408
                    echo $context["key"];
                    echo "]\" value=\"";
                    echo $context["key"];
                    echo "\"/>
                            ";
                    // line 409
                    if (($context["key"] == "fixed")) {
                        // line 410
                        echo "                              ";
                        echo (isset($context["entry_fixed"]) ? $context["entry_fixed"] : null);
                        echo "
                            ";
                    } elseif ((                    // line 411
$context["key"] == "category")) {
                        // line 412
                        echo "                              ";
                        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
                        echo "
                            ";
                    } elseif ((                    // line 413
$context["key"] == "category_child")) {
                        // line 414
                        echo "                              ";
                        echo (isset($context["entry_category_child"]) ? $context["entry_category_child"] : null);
                        echo "
                            ";
                    }
                    // line 416
                    echo "                            </a>
                          </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['box'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 419
                echo "                      ";
            }
            // line 420
            echo "                    ";
        }
        // line 421
        echo "                  </ul>
                </div>
              </div>
            </div>


            <!-- product tab -->
            <div class=\"tab-pane\" id=\"tab-product\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerProductStore\"><span data-toggle=\"tooltip\" title=\"";
        // line 430
        echo (isset($context["entry_seller_product_store_info"]) ? $context["entry_seller_product_store_info"] : null);
        echo "\">";
        echo (isset($context["entry_seller_product_store"]) ? $context["entry_seller_product_store"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_product_store\" id=\"input-sellerProductStore\" class=\"form-control\">
                    ";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seller_product_store"]) ? $context["seller_product_store"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 434
            echo "                    <option value=\"";
            echo $context["key"];
            echo "\" ";
            if ((array_key_exists("marketplace_seller_product_store", $context) && ($context["key"] == (isset($context["marketplace_seller_product_store"]) ? $context["marketplace_seller_product_store"] : null)))) {
                echo "selected";
            }
            echo " >";
            echo $context["value"];
            echo "</option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-auto-generate-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 441
        echo (isset($context["entry_auto_generate_sku_info"]) ? $context["entry_auto_generate_sku_info"] : null);
        echo "\">";
        echo (isset($context["entry_auto_generate_sku"]) ? $context["entry_auto_generate_sku"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_auto_generate_sku\" id=\"input-auto-generate-sku\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 444
        if ((array_key_exists("marketplace_auto_generate_sku", $context) && ((isset($context["marketplace_auto_generate_sku"]) ? $context["marketplace_auto_generate_sku"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 445
        if ((array_key_exists("marketplace_auto_generate_sku", $context) && (isset($context["marketplace_auto_generate_sku"]) ? $context["marketplace_auto_generate_sku"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-low-stock-info\"><span data-toggle=\"tooltip\" title=\"";
        // line 451
        echo (isset($context["entry_low_stock_notification_info"]) ? $context["entry_low_stock_notification_info"] : null);
        echo "\">";
        echo (isset($context["entry_low_stock_notification"]) ? $context["entry_low_stock_notification"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_low_stock_notification\" id=\"input-low-stock-info\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 454
        if ((array_key_exists("marketplace_low_stock_notification", $context) && ((isset($context["marketplace_low_stock_notification"]) ? $context["marketplace_low_stock_notification"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 455
        if ((array_key_exists("marketplace_low_stock_notification", $context) && (isset($context["marketplace_low_stock_notification"]) ? $context["marketplace_low_stock_notification"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-low-stock-quantity\"><span data-toggle=\"tooltip\" title=\"";
        // line 461
        echo (isset($context["entry_low_stock_quantity_info"]) ? $context["entry_low_stock_quantity_info"] : null);
        echo "\">";
        echo (isset($context["entry_low_stock_quantity"]) ? $context["entry_low_stock_quantity"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_low_stock_quantity\" ";
        // line 463
        if (array_key_exists("marketplace_low_stock_quantity", $context)) {
            echo "value=\"";
            echo (isset($context["marketplace_low_stock_quantity"]) ? $context["marketplace_low_stock_quantity"] : null);
            echo "\"";
        }
        echo " id =\"input-low-stock-quantity\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 468
        echo (isset($context["entry_alowed_product_columnsinfo"]) ? $context["entry_alowed_product_columnsinfo"] : null);
        echo "\">";
        echo (isset($context["entry_alowed_product_columns"]) ? $context["entry_alowed_product_columns"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_table"]) ? $context["product_table"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 472
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 474
            if (((array_key_exists("marketplace_allowedproductcolumn", $context) && twig_test_iterable((isset($context["marketplace_allowedproductcolumn"]) ? $context["marketplace_allowedproductcolumn"] : null))) && twig_in_filter($context["value"], (isset($context["marketplace_allowedproductcolumn"]) ? $context["marketplace_allowedproductcolumn"] : null)))) {
                // line 475
                echo "                          <input type=\"checkbox\" name=\"marketplace_allowedproductcolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" checked=\"checked\" />
                          ";
            } else {
                // line 477
                echo "                           <input type=\"checkbox\" name=\"marketplace_allowedproductcolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" />
                          ";
            }
            // line 479
            echo "                          ";
            echo twig_replace_filter($context["value"], array("_" => " "));
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 484
        echo (isset($context["entry_selectall"]) ? $context["entry_selectall"] : null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo (isset($context["entry_deselectall"]) ? $context["entry_deselectall"] : null);
        echo "</a>
                </div>
              </div>


              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 490
        echo (isset($context["entry_alowed_product_tabsinfo"]) ? $context["entry_alowed_product_tabsinfo"] : null);
        echo "\">";
        echo (isset($context["entry_alowed_product_tabs"]) ? $context["entry_alowed_product_tabs"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_tabs"]) ? $context["product_tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 494
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 496
            if (((array_key_exists("marketplace_allowedproducttabs", $context) && twig_test_iterable((isset($context["marketplace_allowedproducttabs"]) ? $context["marketplace_allowedproducttabs"] : null))) && twig_in_filter($context["value"], (isset($context["marketplace_allowedproducttabs"]) ? $context["marketplace_allowedproducttabs"] : null)))) {
                // line 497
                echo "                          <input type=\"checkbox\" name=\"marketplace_allowedproducttabs[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" checked=\"checked\" />
                          ";
            } else {
                // line 499
                echo "                           <input type=\"checkbox\" name=\"marketplace_allowedproducttabs[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" />
                          ";
            }
            // line 501
            echo "                          ";
            echo twig_replace_filter($context["value"], array("_" => " "));
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "
                  </div>
                  <a class=\"selectAll\">";
        // line 507
        echo (isset($context["entry_selectall"]) ? $context["entry_selectall"] : null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo (isset($context["entry_deselectall"]) ? $context["entry_deselectall"] : null);
        echo "</a>

                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-marketplace_seller_category_required\"><span data-toggle=\"tooltip\" title=\"";
        // line 513
        echo (isset($context["entry_category_required_info"]) ? $context["entry_category_required_info"] : null);
        echo "\">";
        echo (isset($context["entry_category_required"]) ? $context["entry_category_required"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_category_required\" id=\"input-marketplace_seller_category_required\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 516
        if ((array_key_exists("marketplace_seller_category_required", $context) && ((isset($context["marketplace_seller_category_required"]) ? $context["marketplace_seller_category_required"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 517
        if ((array_key_exists("marketplace_seller_category_required", $context) && (isset($context["marketplace_seller_category_required"]) ? $context["marketplace_seller_category_required"] : null))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-allowed-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 523
        echo (isset($context["entry_seller_category_info"]) ? $context["entry_seller_category_info"] : null);
        echo "\">";
        echo (isset($context["entry_seller_category"]) ? $context["entry_seller_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_allowed_seller_category_type\" id=\"input-allowed-category\" class=\"form-control\">
                    ";
        // line 526
        if ((array_key_exists("marketplace_allowed_seller_category_type", $context) && (isset($context["marketplace_allowed_seller_category_type"]) ? $context["marketplace_allowed_seller_category_type"] : null))) {
            echo "selected";
            echo "
                    <option value=\"1\" selected=\"selected\">";
            // line 527
            echo (isset($context["text_all_category"]) ? $context["text_all_category"] : null);
            echo "</option>
                    <option value=\"0\" >";
            // line 528
            echo (isset($context["text_selected_category"]) ? $context["text_selected_category"] : null);
            echo "</option>
                    ";
        } else {
            // line 530
            echo "                    <option value=\"1\" >";
            echo (isset($context["text_all_category"]) ? $context["text_all_category"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 531
            echo (isset($context["text_selected_category"]) ? $context["text_selected_category"] : null);
            echo "</option>
                    ";
        }
        // line 533
        echo "                  </select>
                </div>
                <div class=\"col-sm-9 col-sm-offset-3\">
                  <input type=\"text\" name=\"category\" value=\"\"  class=\"form-control\" />
                  <div id=\"allowed-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 538
        if ((array_key_exists("marketplace_allowed_categories", $context) && (isset($context["marketplace_allowed_categories"]) ? $context["marketplace_allowed_categories"] : null))) {
            // line 539
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["marketplace_allowed_categories"]) ? $context["marketplace_allowed_categories"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["marketplace_allowed_category"]) {
                // line 540
                echo "                          <div id=\"allowed-category";
                echo $context["key"];
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $context["marketplace_allowed_category"];
                echo "
                            <input type=\"hidden\" name=\"marketplace_allowed_categories[";
                // line 541
                echo $context["key"];
                echo "]\" value=\"";
                echo $context["marketplace_allowed_category"];
                echo "\" />
                            <input class=\"allowed_categories\" type=\"hidden\" value=\"";
                // line 542
                echo $context["key"];
                echo "\" />
                          </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['marketplace_allowed_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 545
            echo "                    ";
        }
        // line 546
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-noofimages\">";
        // line 550
        echo (isset($context["entry_no_of_images"]) ? $context["entry_no_of_images"] : null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_noofimages\" ";
        // line 552
        if (array_key_exists("marketplace_noofimages", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_noofimages"]) ? $context["marketplace_noofimages"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["text_no_img"]) ? $context["text_no_img"] : null);
        echo "\" id=\"input-noofimages\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-imageex\"><span data-toggle=\"tooltip\" title=\"";
        // line 557
        echo (isset($context["entry_image_exinfo"]) ? $context["entry_image_exinfo"] : null);
        echo "\">";
        echo (isset($context["entry_image_ex"]) ? $context["entry_image_ex"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"marketplace_imageex\" ";
        // line 559
        if (array_key_exists("marketplace_imageex", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_imageex"]) ? $context["marketplace_imageex"] : null);
            echo "\" ";
        }
        echo " placeholder=\"jpg,jpeg,png\" id=\"input-imageex\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-imagesize\"><span data-toggle=\"tooltip\" title=\"";
        // line 564
        echo (isset($context["wkentry_pimagesizeinfo"]) ? $context["wkentry_pimagesizeinfo"] : null);
        echo "\">";
        echo (isset($context["wkentry_pimagesize"]) ? $context["wkentry_pimagesize"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_imagesize\" ";
        // line 566
        if (array_key_exists("marketplace_imagesize", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_imagesize"]) ? $context["marketplace_imagesize"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["text_in_kbs"]) ? $context["text_in_kbs"] : null);
        echo "\" id=\"input-imagesize\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-download_ex\"><span data-toggle=\"tooltip\" title=\"";
        // line 571
        echo (isset($context["entry_download_exinfo"]) ? $context["entry_download_exinfo"] : null);
        echo "\">";
        echo (isset($context["entry_download_ex"]) ? $context["entry_download_ex"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"marketplace_downloadex\" ";
        // line 573
        if (array_key_exists("marketplace_downloadex", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_downloadex"]) ? $context["marketplace_downloadex"] : null);
            echo "\" ";
        }
        echo "  placeholder=\"zip,jpg,jpeg\" id=\"input-download_ex\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-download_size\"><span data-toggle=\"tooltip\" title=\"";
        // line 578
        echo (isset($context["entry_download_sizeinfo"]) ? $context["entry_download_sizeinfo"] : null);
        echo "\">";
        echo (isset($context["entry_download_size"]) ? $context["entry_download_size"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <input type=\"number\" min=\"0\" name=\"marketplace_downloadsize\" ";
        // line 580
        if (array_key_exists("marketplace_downloadsize", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_downloadsize"]) ? $context["marketplace_downloadsize"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["text_in_kbs"]) ? $context["text_in_kbs"] : null);
        echo "\" id=\"input-download_size\" class=\"form-control\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-productaddemail\"><span data-toggle=\"tooltip\" title=\"";
        // line 585
        echo (isset($context["entry_product_add_emailinfo"]) ? $context["entry_product_add_emailinfo"] : null);
        echo "\">";
        echo (isset($context["entry_product_add_email"]) ? $context["entry_product_add_email"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_productaddemail\" id=\"input-productaddemail\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 588
        if ((array_key_exists("marketplace_productaddemail", $context) && ((isset($context["marketplace_productaddemail"]) ? $context["marketplace_productaddemail"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 589
        if ((array_key_exists("marketplace_productaddemail", $context) && (isset($context["marketplace_productaddemail"]) ? $context["marketplace_productaddemail"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-product-reapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 595
        echo (isset($context["entry_product_reapproveinfo"]) ? $context["entry_product_reapproveinfo"] : null);
        echo "\">";
        echo (isset($context["entry_product_reapprove"]) ? $context["entry_product_reapprove"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_product_reapprove\" id=\"input-product-reapprove\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 598
        if ((array_key_exists("marketplace_product_reapprove", $context) && ((isset($context["marketplace_product_reapprove"]) ? $context["marketplace_product_reapprove"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 599
        if ((array_key_exists("marketplace_product_reapprove", $context) && (isset($context["marketplace_product_reapprove"]) ? $context["marketplace_product_reapprove"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerdeleteproduct\"><span data-toggle=\"tooltip\" title=\"";
        // line 605
        echo (isset($context["entry_customer_delete_productinfo"]) ? $context["entry_customer_delete_productinfo"] : null);
        echo "\">";
        echo (isset($context["entry_customer_delete_product"]) ? $context["entry_customer_delete_product"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerdeleteproduct\" id=\"input-sellerdeleteproduct\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 608
        if ((array_key_exists("marketplace_sellerdeleteproduct", $context) && ((isset($context["marketplace_sellerdeleteproduct"]) ? $context["marketplace_sellerdeleteproduct"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 609
        if ((array_key_exists("marketplace_sellerdeleteproduct", $context) && (isset($context["marketplace_sellerdeleteproduct"]) ? $context["marketplace_sellerdeleteproduct"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerproductdelete\"><span data-toggle=\"tooltip\" title=\"";
        // line 615
        echo (isset($context["entry_sellerProductDeleteInfo"]) ? $context["entry_sellerProductDeleteInfo"] : null);
        echo "\">";
        echo (isset($context["entry_sellerProductDelete"]) ? $context["entry_sellerProductDelete"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerproductdelete\" id=\"input-sellerproductdelete\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 618
        if ((array_key_exists("marketplace_sellerproductdelete", $context) && ((isset($context["marketplace_sellerproductdelete"]) ? $context["marketplace_sellerproductdelete"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 619
        if ((array_key_exists("marketplace_sellerproductdelete", $context) && (isset($context["marketplace_sellerproductdelete"]) ? $context["marketplace_sellerproductdelete"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerproductshow\"><span data-toggle=\"tooltip\" title=\"";
        // line 625
        echo (isset($context["entry_sellerProductVisibleInfo"]) ? $context["entry_sellerProductVisibleInfo"] : null);
        echo "\">";
        echo (isset($context["entry_sellerProductVisible"]) ? $context["entry_sellerProductVisible"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerproductshow\" id=\"input-sellerproductshow\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 628
        if ((array_key_exists("marketplace_sellerproductshow", $context) && ((isset($context["marketplace_sellerproductshow"]) ? $context["marketplace_sellerproductshow"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 629
        if ((array_key_exists("marketplace_sellerproductshow", $context) && (isset($context["marketplace_sellerproductshow"]) ? $context["marketplace_sellerproductshow"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-sellerbuyproduct\"><span data-toggle=\"tooltip\" title=\"";
        // line 635
        echo (isset($context["entry_sellerBuyProductInfo"]) ? $context["entry_sellerBuyProductInfo"] : null);
        echo "\">";
        echo (isset($context["entry_sellerBuyProduct"]) ? $context["entry_sellerBuyProduct"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerbuyproduct\" id=\"input-sellerbuyproduct\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 638
        if ((array_key_exists("marketplace_sellerbuyproduct", $context) && ((isset($context["marketplace_sellerbuyproduct"]) ? $context["marketplace_sellerbuyproduct"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 639
        if ((array_key_exists("marketplace_sellerbuyproduct", $context) && (isset($context["marketplace_sellerbuyproduct"]) ? $context["marketplace_sellerbuyproduct"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

            </div>
            <!-- product tab -->
             <div class=\"tab-pane\" id=\"tab-advncd\">
               <!--  Upgrade---->
               <fieldset>
                 <legend>";
        // line 649
        echo (isset($context["entry_fs_restrcition_quant"]) ? $context["entry_fs_restrcition_quant"] : null);
        echo "</legend>
                 
                 <div class=\"form-group\">
                   <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_limit_qra_seller\"><span data-toggle=\"tooltip\" title=\"";
        // line 652
        echo (isset($context["help_qra_seller"]) ? $context["help_qra_seller"] : null);
        echo "\">";
        echo (isset($context["entry_qra_seller"]) ? $context["entry_qra_seller"] : null);
        echo "</span></label>
                   <div class=\"col-sm-9\">
                     <select name=\"marketplace_product_purchase_limit_qra_seller\" id=\"marketplace_product_purchase_limit_qra_seller\" class=\"form-control quantonly\">
                       <option value=\"0\" ";
        // line 655
        if ((array_key_exists("marketplace_product_purchase_limit_qra_seller", $context) &&  !(isset($context["marketplace_product_purchase_limit_qra_seller"]) ? $context["marketplace_product_purchase_limit_qra_seller"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                       <option value=\"1\" ";
        // line 656
        if ((array_key_exists("marketplace_product_purchase_limit_qra_seller", $context) && (isset($context["marketplace_product_purchase_limit_qra_seller"]) ? $context["marketplace_product_purchase_limit_qra_seller"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                     </select>
                   </div>
                 </div>

                   <div class=\"form-group\">
                     <label class=\"col-sm-3 control-label\" for=\"input-low-stock-info\"><span data-toggle=\"tooltip\" title=\"";
        // line 662
        echo (isset($context["help_product_purchase_limit"]) ? $context["help_product_purchase_limit"] : null);
        echo "\">";
        echo (isset($context["entry_product_purchase_limit_based_on"]) ? $context["entry_product_purchase_limit_based_on"] : null);
        echo "</span></label>
                     <div class=\"col-sm-9\">
                       <select name=\"marketplace_product_purchase_limit_based_on\" id=\"input-purchase-limit-based-on\" class=\"form-control quantonly\">
                         <option value=\"0\" ";
        // line 665
        if ((array_key_exists("marketplace_product_purchase_limit_based_on", $context) &&  !(isset($context["marketplace_product_purchase_limit_based_on"]) ? $context["marketplace_product_purchase_limit_based_on"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_product_quant"]) ? $context["text_product_quant"] : null);
        echo " </option>
                         <option value=\"1\" ";
        // line 666
        if ((array_key_exists("marketplace_product_purchase_limit_based_on", $context) && (isset($context["marketplace_product_purchase_limit_based_on"]) ? $context["marketplace_product_purchase_limit_based_on"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_product_num"]) ? $context["text_product_num"] : null);
        echo " </option>
                       </select>
                     </div>
                   </div>

                   <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-low-stock-quantity\"><span data-toggle=\"tooltip\" title=\"";
        // line 672
        echo (isset($context["entry_product_purchase_limit"]) ? $context["entry_product_purchase_limit"] : null);
        echo "\">";
        echo (isset($context["entry_product_purchase_limit"]) ? $context["entry_product_purchase_limit"] : null);
        echo "</span></label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"2\" name=\"marketplace_product_purchase_limit\" ";
        // line 674
        if (array_key_exists("marketplace_product_purchase_limit", $context)) {
            echo "value=\"";
            echo (isset($context["marketplace_product_purchase_limit"]) ? $context["marketplace_product_purchase_limit"] : null);
            echo "\"";
        }
        echo " id =\"input-low-stock-quantity\" class=\"form-control\"/>
                    </div>
                  </div>

               </fieldset>

               <fieldset>
                 <legend>";
        // line 681
        echo (isset($context["entry_fs_restrcition_price"]) ? $context["entry_fs_restrcition_price"] : null);
        echo "</legend>
          
                  <div class=\"form-group\">
                   <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_limit_pra_seller\"><span data-toggle=\"tooltip\" title=\"";
        // line 684
        echo (isset($context["help_pra_seller"]) ? $context["help_pra_seller"] : null);
        echo "\">";
        echo (isset($context["entry_p_seller"]) ? $context["entry_p_seller"] : null);
        echo "</span></label>
                   <div class=\"col-sm-9\">
                     <select name=\"marketplace_product_purchase_limit_pra_seller\" id=\"marketplace_product_purchase_limit_pra_seller\" class=\"form-control quantonly\">
                       <option value=\"0\" ";
        // line 687
        if ((array_key_exists("marketplace_product_purchase_limit_pra_seller", $context) &&  !(isset($context["marketplace_product_purchase_limit_pra_seller"]) ? $context["marketplace_product_purchase_limit_pra_seller"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                       <option value=\"1\" ";
        // line 688
        if ((array_key_exists("marketplace_product_purchase_limit_pra_seller", $context) && (isset($context["marketplace_product_purchase_limit_pra_seller"]) ? $context["marketplace_product_purchase_limit_pra_seller"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                     </select>
                   </div>
                 </div>

                   <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_price_limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 694
        echo (isset($context["help_pra_price"]) ? $context["help_pra_price"] : null);
        echo "\">";
        echo (isset($context["entry_pra_price"]) ? $context["entry_pra_price"] : null);
        echo "</span></label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"2\" name=\"marketplace_product_purchase_price_limit\" ";
        // line 696
        if (array_key_exists("marketplace_product_purchase_price_limit", $context)) {
            echo "value=\"";
            echo (isset($context["marketplace_product_purchase_price_limit"]) ? $context["marketplace_product_purchase_price_limit"] : null);
            echo "\"";
        }
        echo " id =\"marketplace_product_purchase_price_limit\" class=\"form-control\"/>
                    </div>
                  </div>

               </fieldset>
                <fieldset>
                 <legend>";
        // line 702
        echo (isset($context["entry_pr_priority"]) ? $context["entry_pr_priority"] : null);
        echo "</legend>
                   
                 <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"marketplace_product_purchase_limit_priority\"><span data-toggle=\"tooltip\" title=\"";
        // line 705
        echo (isset($context["help_pr_priority"]) ? $context["help_pr_priority"] : null);
        echo "\">";
        echo (isset($context["entry_pr_priority"]) ? $context["entry_pr_priority"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <select name=\"marketplace_product_purchase_limit_priority\" id=\"marketplace_product_purchase_limit_priority\" class=\"form-control quantonly\">
                      <option value=\"0\" ";
        // line 708
        if ((array_key_exists("marketplace_product_purchase_limit_priority", $context) &&  !(isset($context["marketplace_product_purchase_limit_priority"]) ? $context["marketplace_product_purchase_limit_priority"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["entry_fs_restrcition_quant"]) ? $context["entry_fs_restrcition_quant"] : null);
        echo " </option>
                      <option value=\"1\" ";
        // line 709
        if ((array_key_exists("marketplace_product_purchase_limit_priority", $context) && (isset($context["marketplace_product_purchase_limit_priority"]) ? $context["marketplace_product_purchase_limit_priority"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["entry_fs_restrcition_price"]) ? $context["entry_fs_restrcition_price"] : null);
        echo " </option>
                    </select>
                  </div>
                </div>
                 </fieldset>
               <fieldset>
                 <legend>";
        // line 715
        echo (isset($context["entry_scf"]) ? $context["entry_scf"] : null);
        echo "</legend>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-marketplace_scf-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 717
        echo (isset($context["entry_scf"]) ? $context["entry_scf"] : null);
        echo "\">";
        echo (isset($context["help_scf"]) ? $context["help_scf"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_scf_status\" id=\"input-marketplace_scf-status\" class=\"form-control quantonly\">
                    <option value=\"0\" ";
        // line 720
        if ((array_key_exists("marketplace_scf_status", $context) &&  !(isset($context["marketplace_scf_status"]) ? $context["marketplace_scf_status"] : null))) {
            echo " ";
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 721
        if ((array_key_exists("marketplace_scf_status", $context) && (isset($context["marketplace_scf_status"]) ? $context["marketplace_scf_status"] : null))) {
            echo " ";
            echo "selected";
        }
        echo "> ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div> </fieldset>
              <!-- <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-marketplace_scf-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 726
        echo "Allow Seller Layered Filter on Category page";
        echo "\">";
        echo "Seller Filter";
        echo "</span></label>
                <div class=\"col-sm-9\">

                </div>
              </div> -->
                <!--  Upgrade---->
             </div>

            <!-- order tab -->
            <div class=\"tab-pane\" id=\"tab-order\">
             <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-seller-manage-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 737
        echo (isset($context["entry_seller_manage_order_info"]) ? $context["entry_seller_manage_order_info"] : null);
        echo "\">";
        echo (isset($context["entry_seller_manage_order"]) ? $context["entry_seller_manage_order"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_manage_order\" id=\"input-seller-manage-order\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 740
        if ((array_key_exists("marketplace_seller_manage_order", $context) && ((isset($context["marketplace_seller_manage_order"]) ? $context["marketplace_seller_manage_order"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 741
        if ((array_key_exists("marketplace_seller_manage_order", $context) && (isset($context["marketplace_seller_manage_order"]) ? $context["marketplace_seller_manage_order"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
             </div>
             <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-orderstatusinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 746
        echo (isset($context["wkentry_seller_order_statusinfo"]) ? $context["wkentry_seller_order_statusinfo"] : null);
        echo "\">";
        echo (isset($context["wkentry_seller_order_status"]) ? $context["wkentry_seller_order_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_sellerorderstatus\" id=\"input-orderstatusinfo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 749
        if ((array_key_exists("marketplace_sellerorderstatus", $context) && ((isset($context["marketplace_sellerorderstatus"]) ? $context["marketplace_sellerorderstatus"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 750
        if ((array_key_exists("marketplace_sellerorderstatus", $context) && (isset($context["marketplace_sellerorderstatus"]) ? $context["marketplace_sellerorderstatus"] : null))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mailtosellerinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 756
        echo (isset($context["entry_mailtosellerinfo"]) ? $context["entry_mailtosellerinfo"] : null);
        echo "\">";
        echo (isset($context["wkentry_mailtoseller"]) ? $context["wkentry_mailtoseller"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mailtoseller\" id=\"input-mailtosellerinfo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 759
        if ((array_key_exists("marketplace_mailtoseller", $context) && ((isset($context["marketplace_mailtoseller"]) ? $context["marketplace_mailtoseller"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 760
        if ((array_key_exists("marketplace_mailtoseller", $context) && (isset($context["marketplace_mailtoseller"]) ? $context["marketplace_mailtoseller"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-orderstatusnotifyadmin\"><span data-toggle=\"tooltip\" title=\"";
        // line 766
        echo (isset($context["wkentry_seller_order_status_notify_admin_info"]) ? $context["wkentry_seller_order_status_notify_admin_info"] : null);
        echo "\">";
        echo (isset($context["wkentry_seller_order_status_notify_admin"]) ? $context["wkentry_seller_order_status_notify_admin"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_adminnotify\" id=\"input-orderstatusnotifyadmin\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 769
        if ((array_key_exists("marketplace_adminnotify", $context) && ((isset($context["marketplace_adminnotify"]) ? $context["marketplace_adminnotify"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 770
        if ((array_key_exists("marketplace_adminnotify", $context) && (isset($context["marketplace_adminnotify"]) ? $context["marketplace_adminnotify"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-availableorderstatusinfo\"><span data-toggle=\"tooltip\" title=\"";
        // line 776
        echo (isset($context["wkentry_seller_available_order_statusinfo"]) ? $context["wkentry_seller_available_order_statusinfo"] : null);
        echo "\">";
        echo (isset($context["wkentry_seller_available_order_status"]) ? $context["wkentry_seller_available_order_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height:150px;overflow:auto\">
                    ";
        // line 779
        if ((array_key_exists("order_statuses", $context) && (isset($context["order_statuses"]) ? $context["order_statuses"] : null))) {
            // line 780
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["order_status"]) {
                // line 781
                echo "                        <div class=\"checkbox available_order_status\">
                          <label for=\"available_order_status_";
                // line 782
                echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                echo "\">
                            <input type=\"checkbox\" name=\"marketplace_available_order_status[]\" value=\"";
                // line 783
                echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                echo "\" id=\"available_order_status_";
                echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                echo "\" ";
                if (((array_key_exists("marketplace_available_order_status", $context) && (isset($context["marketplace_available_order_status"]) ? $context["marketplace_available_order_status"] : null)) && twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array(), "array"), (isset($context["marketplace_available_order_status"]) ? $context["marketplace_available_order_status"] : null)))) {
                    echo "checked";
                }
                echo " />
                            ";
                // line 784
                echo $this->getAttribute($context["order_status"], "name", array(), "array");
                echo "
                          </label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 788
            echo "                    ";
        }
        // line 789
        echo "                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 795
        echo (isset($context["wkentry_seller_order_status_sequenceinfo"]) ? $context["wkentry_seller_order_status_sequenceinfo"] : null);
        echo "\">
                    ";
        // line 796
        echo (isset($context["wkentry_seller_order_status_sequence"]) ? $context["wkentry_seller_order_status_sequence"] : null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height:150px;overflow:auto\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"orderstatus\">
                      ";
        // line 802
        if ((array_key_exists("marketplace_order_status_sequence", $context) && (isset($context["marketplace_order_status_sequence"]) ? $context["marketplace_order_status_sequence"] : null))) {
            // line 803
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["marketplace_order_status_sequence"]) ? $context["marketplace_order_status_sequence"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 804
                echo "                          <li id='";
                echo $this->getAttribute($this->getAttribute("order_status_sequence_", "value", array()), "order_status_id", array(), "array");
                echo "' >
                            <a style=\"cursor:grab\">
                              <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                              <input type=\"hidden\" name=\"marketplace_order_status_sequence[";
                // line 807
                echo $this->getAttribute($context["value"], "order_status_id", array(), "array");
                echo "][order_status_id]\" value=\"";
                echo $this->getAttribute($context["value"], "order_status_id", array(), "array");
                echo "\"/>
                              <input type=\"hidden\" name=\"marketplace_order_status_sequence[";
                // line 808
                echo $this->getAttribute($context["value"], "order_status_id", array(), "array");
                echo "][name]\" value=\"";
                echo $this->getAttribute($context["value"], "name", array(), "array");
                echo "\" />
                              ";
                // line 809
                echo $this->getAttribute($context["value"], "name", array(), "array");
                echo "
                            </a>
                          </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 813
            echo "                      ";
        }
        // line 814
        echo "                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-admincustomercontactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 819
        echo (isset($context["entry_complete_order_statusinfo"]) ? $context["entry_complete_order_statusinfo"] : null);
        echo "\">";
        echo (isset($context["entry_complete_order_status"]) ? $context["entry_complete_order_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_complete_order_status\" id=\"input-admincustomercontactseller\" class=\"form-control\">
                    <option></option>
                    ";
        // line 823
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 824
            echo "                      <option value=\"";
            echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
            echo "\" ";
            if ((array_key_exists("marketplace_complete_order_status", $context) && ((isset($context["marketplace_complete_order_status"]) ? $context["marketplace_complete_order_status"] : null) == $this->getAttribute($context["order_status"], "order_status_id", array(), "array")))) {
                echo "selected";
            }
            echo " >";
            echo $this->getAttribute($context["order_status"], "name", array(), "array");
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 826
        echo "                  </select>
                </div>
              </div>
               <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-cancelorderstatus\"><span data-toggle=\"tooltip\" title=\"";
        // line 830
        echo (isset($context["entry_cancel_order_statusinfo"]) ? $context["entry_cancel_order_statusinfo"] : null);
        echo "\">";
        echo (isset($context["entry_cancel_order_status"]) ? $context["entry_cancel_order_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_cancel_order_status\" id=\"input-cancelorderstatus\" class=\"form-control\">
                    <option></option>
                    ";
        // line 834
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 835
            echo "                      <option value=\"";
            echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
            echo "\" ";
            if ((array_key_exists("marketplace_cancel_order_status", $context) && ((isset($context["marketplace_cancel_order_status"]) ? $context["marketplace_cancel_order_status"] : null) == $this->getAttribute($context["order_status"], "order_status_id", array(), "array")))) {
                echo "selected";
            }
            echo " >";
            echo $this->getAttribute($context["order_status"], "name", array(), "array");
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 837
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-admincustomercontactseller\"><span data-toggle=\"tooltip\" title=\"";
        // line 841
        echo (isset($context["entry_seller_shipping_methodinfo"]) ? $context["entry_seller_shipping_methodinfo"] : null);
        echo "\">";
        echo (isset($context["entry_seller_shipping_method"]) ? $context["entry_seller_shipping_method"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\"  style=\"height:150px;overflow:auto\">
                    ";
        // line 844
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 845
            echo "                      <div class=\"checkbox\">
                        <label>
                          <input name=\"marketplace_allowed_shipping_method[]\" type=\"checkbox\" value=\"";
            // line 847
            echo (($this->getAttribute($context["shipping_method"], "code", array(), "array") . ".") . $this->getAttribute($context["shipping_method"], "code", array(), "array"));
            echo "\" ";
            if ((array_key_exists("marketplace_allowed_shipping_method", $context) && twig_in_filter((($this->getAttribute($context["shipping_method"], "code", array(), "array") . ".") . $this->getAttribute($context["shipping_method"], "code", array(), "array")), (isset($context["marketplace_allowed_shipping_method"]) ? $context["marketplace_allowed_shipping_method"] : null)))) {
                echo "checked";
            }
            echo " />
                          ";
            // line 848
            echo $this->getAttribute($context["shipping_method"], "name", array(), "array");
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 852
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                 <label class=\"col-sm-3 control-label\" for=\"input-min-cart-value\"><span data-toggle=\"tooltip\" title=\"";
        // line 856
        echo (isset($context["entry_min_cart_value_info"]) ? $context["entry_min_cart_value_info"] : null);
        echo "\">";
        echo (isset($context["entry_min_cart_value"]) ? $context["entry_min_cart_value"] : null);
        echo "</span></label>
                 <div class=\"col-sm-9\">
                   <div class=\"input-group\"><span class=\"input-group-addon mp-addon mp-addon\">";
        // line 858
        echo (isset($context["currency_symbol"]) ? $context["currency_symbol"] : null);
        echo "</span>
                      <input type=\"number\" min=\"0\" name=\"marketplace_min_cart_value\" ";
        // line 859
        if (array_key_exists("marketplace_min_cart_value", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_min_cart_value"]) ? $context["marketplace_min_cart_value"] : null);
            echo "\" ";
        }
        echo " id =\"input-min-cart-value\" class=\"form-control\"/>
                   </div>
                 </div>
              </div>
              <div class=\"form-group\">
                 <label class=\"col-sm-3 control-label\" for=\"input-product-quantity-restriction\"><span data-toggle=\"tooltip\" title=\"";
        // line 864
        echo (isset($context["entry_product_quantity_restriction_info"]) ? $context["entry_product_quantity_restriction_info"] : null);
        echo "\">";
        echo (isset($context["entry_product_quantity_restriction"]) ? $context["entry_product_quantity_restriction"] : null);
        echo "</span></label>
                 <div class=\"col-sm-9\">
                   <input type=\"number\" min=\"0\" name=\"marketplace_product_quantity_restriction\" ";
        // line 866
        if (array_key_exists("marketplace_product_quantity_restriction", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_product_quantity_restriction"]) ? $context["marketplace_product_quantity_restriction"] : null);
            echo "\" ";
        }
        echo " id =\"input-product-quantity-restriction\" class=\"form-control\"/>
                 </div>
              </div>
            </div>

            <!-- seo tab -->
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 873
        echo (isset($context["entry_mpinfo"]) ? $context["entry_mpinfo"] : null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-useseo\"><span data-toggle=\"tooltip\" title=\"";
        // line 878
        echo (isset($context["entry_mpinfo"]) ? $context["entry_mpinfo"] : null);
        echo "\">";
        echo (isset($context["entry_useseo"]) ? $context["entry_useseo"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_useseo\" id=\"input-useseo\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 881
        if ((array_key_exists("marketplace_useseo", $context) && ((isset($context["marketplace_useseo"]) ? $context["marketplace_useseo"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 882
        if ((array_key_exists("marketplace_useseo", $context) && (isset($context["marketplace_useseo"]) ? $context["marketplace_useseo"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>


              <ul class=\"nav nav-tabs\">
                <!-- <li ><a href=\"#tab-seochild\" data-toggle=\"tab\">";
        // line 889
        echo (isset($context["tab_mpseo"]) ? $context["tab_mpseo"] : null);
        echo "</a></li> -->
                <li class=\"active\"><a href=\"#tab-seoauto\" data-toggle=\"tab\">";
        // line 890
        echo (isset($context["tab_defaultseo"]) ? $context["tab_defaultseo"] : null);
        echo "</a></li>
                <li ><a href=\"#tab-productseo\" data-toggle=\"tab\">";
        // line 891
        echo (isset($context["tab_productseo"]) ? $context["tab_productseo"] : null);
        echo "</a></li>
              </ul>

              <div class=\"tab-content\">

                <!-- <div class=\"tab-pane\" id=\"tab-seochild\">                </div> -->

                <div class=\"tab-pane active\" id=\"tab-seoauto\">
                  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 899
        echo (isset($context["entry_addseomoreinfo"]) ? $context["entry_addseomoreinfo"] : null);
        echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                  </div>

                  <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
        // line 906
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "</td>
                        <td class=\"text-left\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 907
        echo (isset($context["entry_store_help"]) ? $context["entry_store_help"] : null);
        echo "\">";
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</span></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 912
        $context["seoCount"] = 0;
        // line 913
        echo "                      ";
        if (((array_key_exists("marketplace_SefUrlspath", $context) && twig_test_iterable((isset($context["marketplace_SefUrlspath"]) ? $context["marketplace_SefUrlspath"] : null))) && (isset($context["marketplace_SefUrlspath"]) ? $context["marketplace_SefUrlspath"] : null))) {
            // line 914
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["marketplace_SefUrlspath"]) ? $context["marketplace_SefUrlspath"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["wkSefUrls"]) {
                // line 915
                echo "                          <tr id=\"tr-";
                echo (isset($context["seoCount"]) ? $context["seoCount"] : null);
                echo "\">
                            <td class=\"text-left\">
                              <select name=\"marketplace_SefUrlspath[";
                // line 917
                echo (isset($context["seoCount"]) ? $context["seoCount"] : null);
                echo "]\" class=\"form-control\">
                                ";
                // line 918
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["paths"]) ? $context["paths"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                    // line 919
                    echo "                                  ";
                    if (($context["path"] == $context["wkSefUrls"])) {
                        // line 920
                        echo "                                    <option value=\"";
                        echo $context["wkSefUrls"];
                        echo "\" selected >  ";
                        echo $context["wkSefUrls"];
                        echo " </option>
                                  ";
                    } else {
                        // line 922
                        echo "                                    <option value=\"";
                        echo $context["path"];
                        echo "\">  ";
                        echo $context["path"];
                        echo " </option>
                                  ";
                    }
                    // line 924
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 925
                echo "                              </select>
                            </td>

                            <td class=\"text-left\">
                              <input type=\"text\" class=\"form-control\" name=\"marketplace_SefUrlsvalue[";
                // line 929
                echo (isset($context["seoCount"]) ? $context["seoCount"] : null);
                echo "]\" value=\"";
                echo $this->getAttribute((isset($context["marketplace_SefUrlsvalue"]) ? $context["marketplace_SefUrlsvalue"] : null), $context["key"], array(), "array");
                echo "\"/>
                            </td>

                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#tr-";
                // line 932
                echo (isset($context["seoCount"]) ? $context["seoCount"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                          </tr>
                          ";
                // line 934
                $context["seoCount"] = ((isset($context["seoCount"]) ? $context["seoCount"] : null) + 1);
                // line 935
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['wkSefUrls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 936
            echo "                      ";
        }
        // line 937
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-left\"><button type=\"button\" id=\"addSeo\" data-toggle=\"tooltip\" title=\"";
        // line 941
        echo (isset($context["entry_addmore"]) ? $context["entry_addmore"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div id=\"tab-productseo\" class=\"tab-pane\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 949
        echo (isset($context["entry_seo_seller_detailsinfo"]) ? $context["entry_seo_seller_detailsinfo"] : null);
        echo "\">
                        ";
        // line 950
        echo (isset($context["entry_seo_seller_details"]) ? $context["entry_seo_seller_details"] : null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <select class=\"form-control\" name=\"marketplace_product_seo_name\">
                        <option value=\"sellername\" ";
        // line 955
        if ((array_key_exists("marketplace_product_seo_name", $context) && ((isset($context["marketplace_product_seo_name"]) ? $context["marketplace_product_seo_name"] : null) == "sellername"))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["entry_seo_seller_name"]) ? $context["entry_seo_seller_name"] : null);
        echo "</option>
                        <option value=\"companyname\" ";
        // line 956
        if ((array_key_exists("marketplace_product_seo_name", $context) && ((isset($context["marketplace_product_seo_name"]) ? $context["marketplace_product_seo_name"] : null) == "companyname"))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["entry_seo_company_name"]) ? $context["entry_seo_company_name"] : null);
        echo "</option>
                        <option value=\"screenname\" ";
        // line 957
        if ((array_key_exists("marketplace_product_seo_name", $context) && ((isset($context["marketplace_product_seo_name"]) ? $context["marketplace_product_seo_name"] : null) == "screenname"))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["entry_seo_screen_name"]) ? $context["entry_seo_screen_name"] : null);
        echo "</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 963
        echo (isset($context["entry_seo_display_formatinfo"]) ? $context["entry_seo_display_formatinfo"] : null);
        echo "\">
                        ";
        // line 964
        echo (isset($context["entry_seo_display_format"]) ? $context["entry_seo_display_format"] : null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <select class=\"form-control\" name=\"marketplace_product_seo_format\">
                        <option value=\"1\" ";
        // line 969
        if ((array_key_exists("marketplace_product_seo_format", $context) && ((isset($context["marketplace_product_seo_format"]) ? $context["marketplace_product_seo_format"] : null) == 1))) {
            echo "selected";
        }
        echo ">";
        echo (isset($context["entry_only_product"]) ? $context["entry_only_product"] : null);
        echo "</option>
                        <option value=\"2\" ";
        // line 970
        if ((array_key_exists("marketplace_product_seo_format", $context) && ((isset($context["marketplace_product_seo_format"]) ? $context["marketplace_product_seo_format"] : null) == 2))) {
            echo "selected";
        }
        echo ">";
        echo (isset($context["entry_seller_and_product"]) ? $context["entry_seller_and_product"] : null);
        echo "</option>
                        <option value=\"3\" ";
        // line 971
        if ((array_key_exists("marketplace_product_seo_format", $context) && ((isset($context["marketplace_product_seo_format"]) ? $context["marketplace_product_seo_format"] : null) == 3))) {
            echo "selected";
        }
        echo ">";
        echo (isset($context["entry_product_and_seller"]) ? $context["entry_product_and_seller"] : null);
        echo "</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 977
        echo (isset($context["entry_seo_default_nameinfo"]) ? $context["entry_seo_default_nameinfo"] : null);
        echo "\">
                        ";
        // line 978
        echo (isset($context["entry_seo_default_name"]) ? $context["entry_seo_default_name"] : null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" name=\"marketplace_product_seo_default_name\" value=\"";
        // line 982
        if ((array_key_exists("marketplace_product_seo_default_name", $context) && (isset($context["marketplace_product_seo_default_name"]) ? $context["marketplace_product_seo_default_name"] : null))) {
            echo (isset($context["marketplace_product_seo_default_name"]) ? $context["marketplace_product_seo_default_name"] : null);
        }
        echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 987
        echo (isset($context["entry_seo_default_name_productinfo"]) ? $context["entry_seo_default_name_productinfo"] : null);
        echo "\">
                        ";
        // line 988
        echo (isset($context["entry_seo_default_name_product"]) ? $context["entry_seo_default_name_product"] : null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\" name=\"marketplace_product_seo_product_name\"  value=\"1\" ";
        // line 994
        if ((array_key_exists("marketplace_product_seo_product_name", $context) && (isset($context["marketplace_product_seo_product_name"]) ? $context["marketplace_product_seo_product_name"] : null))) {
            echo "checked";
        }
        echo " />
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1001
        echo (isset($context["entry_seo_add_page_extensioninfo"]) ? $context["entry_seo_add_page_extensioninfo"] : null);
        echo "\">
                        ";
        // line 1002
        echo (isset($context["entry_seo_add_page_extension"]) ? $context["entry_seo_add_page_extension"] : null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" name=\"marketplace_product_seo_page_ext\" value=\"";
        // line 1006
        if ((array_key_exists("marketplace_product_seo_page_ext", $context) && (isset($context["marketplace_product_seo_page_ext"]) ? $context["marketplace_product_seo_page_ext"] : null))) {
            echo (isset($context["marketplace_product_seo_page_ext"]) ? $context["marketplace_product_seo_page_ext"] : null);
        }
        echo "\" />
                    </div>
                  </div>
                </div>
              </div>

            </div>


            <!-- sell tab -->
            <div class=\"tab-pane\" id=\"tab-sell\">

              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1018
        echo (isset($context["entry_sellinfo"]) ? $context["entry_sellinfo"] : null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-sellgeneral\" data-toggle=\"tab\">";
        // line 1023
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                <li><a href=\"#tab-selltab\" data-toggle=\"tab\">";
        // line 1024
        echo (isset($context["tab_tab"]) ? $context["tab_tab"] : null);
        echo "</a></li>
              </ul>

              <div class=\"tab-content\">

                <div class=\"tab-pane active\" id=\"tab-sellgeneral\">

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">";
        // line 1032
        echo (isset($context["wkentry_sellh"]) ? $context["wkentry_sellh"] : null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      ";
        // line 1034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1035
            echo "                        <div class=\"input-group\" style=\"margin-bottom:10px;\"><span class=\"input-group-addon mp-addon\"><img  src=\"language/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo "/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "\" /></span>
                          <input type=\"text\" name=\"marketplace_sellheader[";
            // line 1036
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\" value=\"";
            echo (($this->getAttribute((isset($context["marketplace_sellheader"]) ? $context["marketplace_sellheader"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["marketplace_sellheader"]) ? $context["marketplace_sellheader"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
            echo "\" />
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1039
        echo "                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">";
        // line 1043
        echo (isset($context["wkentry_sellb"]) ? $context["wkentry_sellb"] : null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      ";
        // line 1045
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1046
            echo "                        <div class=\"input-group\" style=\"margin-bottom:10px;\"><span class=\"input-group-addon mp-addon\"><img  src=\"language/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo "/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "\" /></span>
                          <input type=\"text\" name=\"marketplace_sellbuttontitle[";
            // line 1047
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\" value=\"";
            echo (($this->getAttribute((isset($context["marketplace_sellbuttontitle"]) ? $context["marketplace_sellbuttontitle"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["marketplace_sellbuttontitle"]) ? $context["marketplace_sellbuttontitle"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
            echo "\" />
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1050
        echo "                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-showpartners\">";
        // line 1054
        echo (isset($context["wkentry_show_partner"]) ? $context["wkentry_show_partner"] : null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <select name=\"marketplace_showpartners\" id=\"input-showpartners\" class=\"form-control\">
                        <option value=\"0\" ";
        // line 1057
        if ((array_key_exists("marketplace_showpartners", $context) && ((isset($context["marketplace_showpartners"]) ? $context["marketplace_showpartners"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                        <option value=\"1\" ";
        // line 1058
        if ((array_key_exists("marketplace_showpartners", $context) && (isset($context["marketplace_showpartners"]) ? $context["marketplace_showpartners"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-showproducts\">";
        // line 1064
        echo (isset($context["wkentry_show_products"]) ? $context["wkentry_show_products"] : null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <select name=\"marketplace_showproducts\" id=\"input-showproducts\" class=\"form-control\">
                        <option value=\"0\" ";
        // line 1067
        if ((array_key_exists("marketplace_showproducts", $context) && ((isset($context["marketplace_showproducts"]) ? $context["marketplace_showproducts"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                        <option value=\"1\" ";
        // line 1068
        if ((array_key_exists("marketplace_showproducts", $context) && (isset($context["marketplace_showproducts"]) ? $context["marketplace_showproducts"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1075
        echo (isset($context["entry_partner_list_limit_info"]) ? $context["entry_partner_list_limit_info"] : null);
        echo "\">
                        ";
        // line 1076
        echo (isset($context["entry_partner_list_limit"]) ? $context["entry_partner_list_limit"] : null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"0\" name=\"marketplace_seller_list_limit\" ";
        // line 1080
        if (array_key_exists("marketplace_seller_list_limit", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_seller_list_limit"]) ? $context["marketplace_seller_list_limit"] : null);
            echo "\" ";
        }
        echo "  id=\"input-sellerlist\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                      <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1085
        echo (isset($context["entry_partner_product_list_limit_info"]) ? $context["entry_partner_product_list_limit_info"] : null);
        echo "\">
                        ";
        // line 1086
        echo (isset($context["entry_partner_product_list_limit"]) ? $context["entry_partner_product_list_limit"] : null);
        echo "
                      </span>
                    </label>
                    <div class=\"col-sm-9\">
                      <input type=\"number\" min=\"0\" name=\"marketplace_seller_product_list_limit\" ";
        // line 1090
        if (array_key_exists("marketplace_seller_product_list_limit", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_seller_product_list_limit"]) ? $context["marketplace_seller_product_list_limit"] : null);
            echo "\" ";
        }
        echo "  id=\"input-sellerlist\" class=\"form-control\" />
                    </div>
                  </div>

                </div>

                <div class=\"tab-pane\" id=\"tab-selltab\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <ul class=\"nav nav-pills nav-stacked\" id=\"module\">
                        ";
        // line 1100
        if ($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array", true, true)) {
            // line 1101
            echo "                          ";
            // line 1103
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array")));
            foreach ($context['_seq'] as $context["tabRow"] => $context["tabtitle"]) {
                // line 1104
                echo "                          <li>
                            <a href=\"#tab-module";
                // line 1105
                echo $context["tabRow"];
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-module";
                echo $context["tabRow"];
                echo "\\']').parent().remove(); \$('#tab-module";
                echo $context["tabRow"];
                echo "').remove(); \$('#module a:first').tab('show');\"></i> ";
                echo (($this->getAttribute($context["tabtitle"], (isset($context["config_language_id"]) ? $context["config_language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($context["tabtitle"], (isset($context["config_language_id"]) ? $context["config_language_id"] : null), array(), "array")) : ((((isset($context["tab_module"]) ? $context["tab_module"] : null) . " ") . $context["tabRow"])));
                echo "</a>
                          </li>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tabRow'], $context['tabtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1108
            echo "                        ";
        }
        // line 1109
        echo "                        <li id=\"module-add\"><a onclick=\"addModule();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["wkentry_add_tab"]) ? $context["wkentry_add_tab"] : null);
        echo "</a></li>
                      </ul>
                    </div>

                    <div class=\"col-sm-9\">
                      <div class=\"tab-content\">
                        ";
        // line 1115
        if ($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array", true, true)) {
            // line 1116
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array"));
            foreach ($context['_seq'] as $context["tabRow"] => $context["tabtitle"]) {
                // line 1117
                echo "                        <div class=\"tab-pane\" id=\"tab-module";
                echo $context["tabRow"];
                echo "\">
                          <ul class=\"nav nav-tabs\" id=\"language";
                // line 1118
                echo $context["tabRow"];
                echo "\">
                            ";
                // line 1119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1120
                    echo "                            <li><a href=\"#tab-module";
                    echo $context["tabRow"];
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\" data-toggle=\"tab\"><img  src=\"language/";
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo "\" /> ";
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1122
                echo "                          </ul>
                          <div class=\"tab-content\">
                            ";
                // line 1124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1125
                    echo "                            <div class=\"tab-pane\" id=\"tab-module";
                    echo $context["tabRow"];
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\">
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-heading";
                    // line 1127
                    echo $context["tabRow"];
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\">";
                    echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"marketplace_tab[heading][";
                    // line 1129
                    echo $context["tabRow"];
                    echo "][";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "]\" placeholder=\"";
                    echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
                    echo "\" value=\"";
                    echo (($this->getAttribute($context["tabtitle"], $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) ? ($this->getAttribute($context["tabtitle"], $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                    echo "\" class=\"form-control\" id=\"input-heading";
                    echo $context["tabRow"];
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\" />
                                </div>
                              </div>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-description";
                    // line 1133
                    echo $context["tabRow"];
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\">";
                    echo (isset($context["wkentry_selld"]) ? $context["wkentry_selld"] : null);
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <textarea name=\"marketplace_tab[description][";
                    // line 1135
                    echo $context["tabRow"];
                    echo "][";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "]\" placeholder=\"";
                    echo (isset($context["wkentry_selld"]) ? $context["wkentry_selld"] : null);
                    echo "\" id=\"input-description";
                    echo $context["tabRow"];
                    echo "-language";
                    echo $this->getAttribute($context["language"], "language_id", array(), "array");
                    echo "\" class=\"form-control summernote\">";
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "description", array(), "array"), $context["tabRow"], array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "description", array(), "array"), $context["tabRow"], array(), "array"), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                    echo "</textarea>
                                </div>
                              </div>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1140
                echo "                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tabRow'], $context['tabtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1143
            echo "                        ";
        }
        // line 1144
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- profile tab -->
            <div class=\"tab-pane\" id=\"tab-profile\">

              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1154
        echo (isset($context["text_info_profile"]) ? $context["text_info_profile"] : null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1159
        echo (isset($context["entry_alowed_profile_columnsinfo"]) ? $context["entry_alowed_profile_columnsinfo"] : null);
        echo "\">";
        echo (isset($context["entry_alowed_profile_columns"]) ? $context["entry_alowed_profile_columns"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 1162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profile_table"]) ? $context["profile_table"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1163
            echo "                      <div class=\"checkbox\">
                        <label>
                          ";
            // line 1165
            if (((array_key_exists("marketplace_allowedprofilecolumn", $context) && twig_test_iterable((isset($context["marketplace_allowedprofilecolumn"]) ? $context["marketplace_allowedprofilecolumn"] : null))) && twig_in_filter($context["value"], (isset($context["marketplace_allowedprofilecolumn"]) ? $context["marketplace_allowedprofilecolumn"] : null)))) {
                // line 1166
                echo "                          <input type=\"checkbox\" name=\"marketplace_allowedprofilecolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" checked=\"checked\" />
                          ";
            } else {
                // line 1168
                echo "                           <input type=\"checkbox\" name=\"marketplace_allowedprofilecolumn[";
                echo $context["value"];
                echo "]\" value=\"";
                echo $context["value"];
                echo "\" />
                          ";
            }
            // line 1170
            echo "                          ";
            echo twig_replace_filter($context["value"], array("_" => " "));
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1174
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 1175
        echo (isset($context["entry_selectall"]) ? $context["entry_selectall"] : null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo (isset($context["entry_deselectall"]) ? $context["entry_deselectall"] : null);
        echo "</a>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1179
        echo (isset($context["entry_allowed_public_profile_columnsinfo"]) ? $context["entry_allowed_public_profile_columnsinfo"] : null);
        echo "\">";
        echo (isset($context["entry_allowed_public_profile_columns"]) ? $context["entry_allowed_public_profile_columns"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 1182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicSellerProfile"]) ? $context["publicSellerProfile"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 1183
            echo "                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\" name=\"marketplace_allowed_public_seller_profile[";
            // line 1185
            echo $context["key"];
            echo "]\" value=\"";
            echo $context["key"];
            echo "\" ";
            if ((array_key_exists("marketplace_allowed_public_seller_profile", $context) && twig_in_filter($context["key"], (isset($context["marketplace_allowed_public_seller_profile"]) ? $context["marketplace_allowed_public_seller_profile"] : null)))) {
                echo "checked";
            }
            echo " />
                                ";
            // line 1186
            echo $context["option"];
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1190
        echo "                  </div>
                  <a class=\"selectAll\">";
        // line 1191
        echo (isset($context["entry_selectall"]) ? $context["entry_selectall"] : null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo (isset($context["entry_deselectall"]) ? $context["entry_deselectall"] : null);
        echo "</a>
                </div>
              </div>
              <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">
                    ";
        // line 1196
        echo (isset($context["entry_seller_email"]) ? $context["entry_seller_email"] : null);
        echo "
                  </label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" name=\"marketplace_profile_email\">
                      <option value=\"0\" ";
        // line 1200
        if ((array_key_exists("marketplace_profile_email", $context) && ((isset($context["marketplace_profile_email"]) ? $context["marketplace_profile_email"] : null) == 0))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
                      <option value=\"1\" ";
        // line 1201
        if ((array_key_exists("marketplace_profile_email", $context) && (isset($context["marketplace_profile_email"]) ? $context["marketplace_profile_email"] : null))) {
            echo "selected";
        }
        echo "  >";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
                    </select>
                  </div>
              </div>
              <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">
                    ";
        // line 1207
        echo (isset($context["entry_seller_telephone"]) ? $context["entry_seller_telephone"] : null);
        echo "
                  </label>
                  <div class=\"col-sm-9\">
                    <select class=\"form-control\" name=\"marketplace_profile_telephone\">
                      <option value=\"0\" ";
        // line 1211
        if ((array_key_exists("marketplace_profile_telephone", $context) && ((isset($context["marketplace_profile_telephone"]) ? $context["marketplace_profile_telephone"] : null) == 0))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
                      <option value=\"1\" ";
        // line 1212
        if ((array_key_exists("marketplace_profile_telephone", $context) && (isset($context["marketplace_profile_telephone"]) ? $context["marketplace_profile_telephone"] : null))) {
            echo "selected";
        }
        echo " >";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
                    </select>
                  </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-review-only-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1217
        echo (isset($context["entry_review_only_order_info"]) ? $context["entry_review_only_order_info"] : null);
        echo "\">";
        echo (isset($context["entry_review_only_order"]) ? $context["entry_review_only_order"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_review_only_order\" id=\"input-review-only-order\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 1220
        if ((array_key_exists("marketplace_review_only_order", $context) && ((isset($context["marketplace_review_only_order"]) ? $context["marketplace_review_only_order"] : null) == 0))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 1221
        if ((array_key_exists("marketplace_review_only_order", $context) && (isset($context["marketplace_review_only_order"]) ? $context["marketplace_review_only_order"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-seller-info-hide\"><span data-toggle=\"tooltip\" title=\"";
        // line 1226
        echo (isset($context["entry_seller_info_hide_info"]) ? $context["entry_seller_info_hide_info"] : null);
        echo "\">";
        echo (isset($context["entry_seller_info_hide"]) ? $context["entry_seller_info_hide"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_seller_info_hide\" id=\"input-seller-info-hide\" class=\"form-control\">
                    <option value=\"0\" ";
        // line 1229
        if ((array_key_exists("marketplace_seller_info_hide", $context) && ((isset($context["marketplace_seller_info_hide"]) ? $context["marketplace_seller_info_hide"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                    <option value=\"1\" ";
        // line 1230
        if ((array_key_exists("marketplace_seller_info_hide", $context) && (isset($context["marketplace_seller_info_hide"]) ? $context["marketplace_seller_info_hide"] : null))) {
            echo "selected";
        }
        echo ">  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                  </select>
                </div>
              </div>

            </div>

            <!-- module configuration tab -->

            <div class=\"tab-pane\" id=\"tab-mod-config\">
              <ul class=\"nav nav-tabs\">
                <li class=\"active\">
                  <a href=\"#mod-account\" data-toggle=\"tab\">
                    ";
        // line 1243
        echo (isset($context["tab_mod_config_account"]) ? $context["tab_mod_config_account"] : null);
        echo "
                  </a>
                </li>
                <li>
                  <a href=\"#mod-product\" data-toggle=\"tab\">
                    ";
        // line 1248
        echo (isset($context["tab_mod_config_product"]) ? $context["tab_mod_config_product"] : null);
        echo "
                  </a>
                </li>
              </ul>
                <div class=\"tab-content\">
                  <div id=\"mod-account\" class=\"tab-pane active\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\">
                        <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1256
        echo (isset($context["entry_allowed_account_menuinfo"]) ? $context["entry_allowed_account_menuinfo"] : null);
        echo "\">
                          ";
        // line 1257
        echo (isset($context["entry_allowed_account_menu"]) ? $context["entry_allowed_account_menu"] : null);
        echo "
                        </span>
                      </label>
                      <div class=\"col-sm-9\">
                        <div class=\"well well-sm\" style=\"height:150px;overflow:auto\" >
                          ";
        // line 1262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["account_menu"]) ? $context["account_menu"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 1263
            echo "                            <div class=\"checkbox\">
                              <label>
                                <input type=\"checkbox\" name=\"marketplace_allowed_account_menu[";
            // line 1265
            echo $context["key"];
            echo "]\" value=\"";
            echo $context["key"];
            echo "\" ";
            if ((array_key_exists("marketplace_allowed_account_menu", $context) && twig_in_filter($context["key"], (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                echo "checked";
            }
            echo " />
                                ";
            // line 1266
            echo $context["value"];
            echo "
                              </label>
                            </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1270
        echo "                        </div>
                        <a class=\"selectAll\">";
        // line 1271
        echo (isset($context["entry_selectall"]) ? $context["entry_selectall"] : null);
        echo "</a> &nbsp;&nbsp; <a class=\"deselectAll\">";
        echo (isset($context["entry_deselectall"]) ? $context["entry_deselectall"] : null);
        echo "</a>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\">
                        <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1276
        echo (isset($context["entry_account_menu_sequenceinfo"]) ? $context["entry_account_menu_sequenceinfo"] : null);
        echo "\">
                          ";
        // line 1277
        echo (isset($context["entry_account_menu_sequence"]) ? $context["entry_account_menu_sequence"] : null);
        echo "
                        </span>
                      </label>
                      <div class=\"col-sm-9\">
                        <div class=\"well\">
                          <ul class=\"nav nav-pills nav-stacked\" id=\"acct_menu_sortable\">
                            ";
        // line 1283
        if ( !array_key_exists("marketplace_account_menu_sequence", $context)) {
            // line 1284
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["account_menu"]) ? $context["account_menu"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 1285
                echo "                                <li>
                                  <a style=\"cursor:grab\">
                                    <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                                    <input type=\"hidden\" name=\"marketplace_account_menu_sequence[";
                // line 1288
                echo $context["key"];
                echo "]\" value=\"";
                echo $context["key"];
                echo "\" />
                                    ";
                // line 1289
                echo $context["value"];
                echo "
                                  </a>
                                </li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1293
            echo "                            ";
        } else {
            // line 1294
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["marketplace_account_menu_sequence"]) ? $context["marketplace_account_menu_sequence"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["sequence"]) {
                // line 1295
                echo "                                ";
                if (twig_in_filter($context["sequence"], (isset($context["account_menu"]) ? $context["account_menu"] : null))) {
                    // line 1296
                    echo "                                  <li>
                                    <a style=\"cursor:grab\">
                                      <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                                      <input type=\"hidden\" name=\"marketplace_account_menu_sequence[";
                    // line 1299
                    echo $context["key"];
                    echo "]\" value=\"";
                    echo $this->getAttribute((isset($context["account_menu"]) ? $context["account_menu"] : null), $context["key"], array(), "array");
                    echo "\"/>
                                      ";
                    // line 1300
                    echo $this->getAttribute((isset($context["account_menu"]) ? $context["account_menu"] : null), $context["key"], array(), "array");
                    echo "
                                    </a>
                                  </li>
                                ";
                }
                // line 1304
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1305
            echo "
                              ";
            // line 1306
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["account_menu"]) ? $context["account_menu"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 1307
                echo "                                ";
                if (!twig_in_filter($context["menu"], (isset($context["marketplace_account_menu_sequence"]) ? $context["marketplace_account_menu_sequence"] : null))) {
                    // line 1308
                    echo "                                  <li>
                                    <a style=\"cursor:grab\">
                                      <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>
                                      <input type=\"hidden\" name=\"marketplace_account_menu_sequence[";
                    // line 1311
                    echo $context["key"];
                    echo "]\" value=\"";
                    echo $this->getAttribute((isset($context["account_menu"]) ? $context["account_menu"] : null), $context["key"], array(), "array");
                    echo "\"/>
                                      ";
                    // line 1312
                    echo $this->getAttribute((isset($context["account_menu"]) ? $context["account_menu"] : null), $context["key"], array(), "array");
                    echo "
                                    </a>
                                  </li>
                                ";
                }
                // line 1316
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1317
            echo "
                            ";
        }
        // line 1319
        echo "                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id=\"mod-product\" class=\"tab-pane\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" ><span data-toggle=\"tooltip\" title=\"";
        // line 1326
        echo (isset($context["entry_product_name_displayinfo"]) ? $context["entry_product_name_displayinfo"] : null);
        echo "\">";
        echo (isset($context["entry_product_name_display"]) ? $context["entry_product_name_display"] : null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_product_name_display\" class=\"form-control\">
                          <option value=\"sn\" ";
        // line 1329
        if ((array_key_exists("marketplace_product_name_display", $context) && ((isset($context["marketplace_product_name_display"]) ? $context["marketplace_product_name_display"] : null) == "sn"))) {
            echo "selected";
        }
        echo " >";
        echo "Seller Name";
        echo "</option>
                          <option value=\"cn\" ";
        // line 1330
        if ((array_key_exists("marketplace_product_name_display", $context) && ((isset($context["marketplace_product_name_display"]) ? $context["marketplace_product_name_display"] : null) == "cn"))) {
            echo "selected";
        }
        echo ">";
        echo "Shop name";
        echo "</option>
                          <option value=\"sncn\" ";
        // line 1331
        if ((array_key_exists("marketplace_product_name_display", $context) && ((isset($context["marketplace_product_name_display"]) ? $context["marketplace_product_name_display"] : null) == "sncn"))) {
            echo "selected";
        }
        echo ">";
        echo "Seller and Shop name";
        echo "</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1336
        echo (isset($context["entry_product_show_seller_productinfo"]) ? $context["entry_product_show_seller_productinfo"] : null);
        echo "\">";
        echo (isset($context["entry_product_show_seller_product"]) ? $context["entry_product_show_seller_product"] : null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_product_show_seller_product\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 1339
        if ((array_key_exists("marketplace_product_show_seller_product", $context) && (isset($context["marketplace_product_show_seller_product"]) ? $context["marketplace_product_show_seller_product"] : null))) {
            echo "selected";
        }
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                          <option value=\"0\" ";
        // line 1340
        if ((array_key_exists("marketplace_product_show_seller_product", $context) && ((isset($context["marketplace_product_show_seller_product"]) ? $context["marketplace_product_show_seller_product"] : null) == 0))) {
            echo "selected";
        }
        echo "  >";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1345
        echo (isset($context["entry_product_image_displayinfo"]) ? $context["entry_product_image_displayinfo"] : null);
        echo "\">";
        echo (isset($context["entry_product_image_display"]) ? $context["entry_product_image_display"] : null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_product_image_display\" id=\"input-mail_partner_request\" class=\"form-control\">
                          <option value=\"avatar\" ";
        // line 1348
        if ((array_key_exists("marketplace_product_image_display", $context) && ((isset($context["marketplace_product_image_display"]) ? $context["marketplace_product_image_display"] : null) == "avatar"))) {
            echo "selected";
        }
        echo "  >";
        echo "Avatar";
        echo " </option>
                          <option value=\"companylogo\" ";
        // line 1349
        if ((array_key_exists("marketplace_product_image_display", $context) && ((isset($context["marketplace_product_image_display"]) ? $context["marketplace_product_image_display"] : null) == "companylogo"))) {
            echo "selected";
        }
        echo "  >";
        echo "Company Logo";
        echo " </option>
                          <option value=\"companybanner\" ";
        // line 1350
        if ((array_key_exists("marketplace_product_image_display", $context) && ((isset($context["marketplace_product_image_display"]) ? $context["marketplace_product_image_display"] : null) == "companybanner"))) {
            echo "selected";
        }
        echo " >";
        echo "Company banner";
        echo " </option>
                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-seller-info-by-module\"><span data-toggle=\"tooltip\" title=\"";
        // line 1355
        echo (isset($context["entry_seller_info_by_module_info"]) ? $context["entry_seller_info_by_module_info"] : null);
        echo "\">";
        echo (isset($context["entry_seller_info_by_module"]) ? $context["entry_seller_info_by_module"] : null);
        echo "</span></label>
                      <div class=\"col-sm-9\">
                        <select name=\"marketplace_seller_info_by_module\" id=\"input-seller-info-by-module\" class=\"form-control\">
                          <option value=\"0\" ";
        // line 1358
        if ((array_key_exists("marketplace_seller_info_by_module", $context) && ((isset($context["marketplace_seller_info_by_module"]) ? $context["marketplace_seller_info_by_module"] : null) == 0))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo " </option>
                          <option value=\"1\" ";
        // line 1359
        if ((array_key_exists("marketplace_seller_info_by_module", $context) && (isset($context["marketplace_seller_info_by_module"]) ? $context["marketplace_seller_info_by_module"] : null))) {
            echo "selected";
        }
        echo " >  ";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- mail tab -->
            <div class=\"tab-pane\" id=\"tab-mail\">

              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1370
        echo (isset($context["text_info_mail"]) ? $context["text_info_mail"] : null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1376
        echo (isset($context["entry_mail_keywords"]) ? $context["entry_mail_keywords"] : null);
        echo "\" >
                    ";
        // line 1377
        echo (isset($context["entry_mail_keywords"]) ? $context["entry_mail_keywords"] : null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <textarea class=\"form-control\" name=\"marketplace_mail_keywords\" style=\"height:150px\">";
        // line 1381
        if (array_key_exists("marketplace_mail_keywords", $context)) {
            echo (isset($context["marketplace_mail_keywords"]) ? $context["marketplace_mail_keywords"] : null);
        } else {
            echo "{order}";
            echo "
";
            // line 1382
            echo "{message}";
            echo "
";
            // line 1383
            echo "{subject}";
            echo "
";
            // line 1384
            echo "{commission}";
            echo "
";
            // line 1385
            echo "{product_name}";
            echo "
";
            // line 1386
            echo "{product_quantity}";
            echo "
";
            // line 1387
            echo "{customer_name}";
            echo "
";
            // line 1388
            echo "{seller_name}";
            echo "
";
            // line 1389
            echo "{config_logo}";
            echo "
";
            // line 1390
            echo "{config_icon}";
            echo "
";
            // line 1391
            echo "{config_currency}";
            echo "
";
            // line 1392
            echo "{config_image}";
            echo "
";
            // line 1393
            echo "{config_name}";
            echo "
";
            // line 1394
            echo "{config_owner}";
            echo "
";
            // line 1395
            echo "{config_address}";
            echo "
";
            // line 1396
            echo "{config_geocode}";
            echo "
";
            // line 1397
            echo "{config_email}";
            echo "
";
            // line 1398
            echo "{config_telephone}";
            echo "
";
            // line 1399
            echo "{seller_id}";
            echo "
";
        }
        // line 1400
        echo "</textarea>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_partner_request\"><span data-toggle=\"tooltip\" title=\"";
        // line 1405
        echo (isset($context["entry_mail_partner_request_info"]) ? $context["entry_mail_partner_request_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_partner_request"]) ? $context["entry_mail_partner_request"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_partner_request\" id=\"input-mail_partner_request\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1409
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1410
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1411
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_partner_request"]) ? $context["marketplace_mail_partner_request"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1413
            echo "                    ";
        }
        // line 1414
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_partner_admin\"><span data-toggle=\"tooltip\" title=\"";
        // line 1419
        echo (isset($context["entry_mail_partner_admin_info"]) ? $context["entry_mail_partner_admin_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_partner_admin"]) ? $context["entry_mail_partner_admin"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_partner_admin\" id=\"input-mail_partner_admin\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1423
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1424
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1425
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_partner_admin"]) ? $context["marketplace_mail_partner_admin"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1427
            echo "                    ";
        }
        // line 1428
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_partner_approve\"><span data-toggle=\"tooltip\" title=\"";
        // line 1433
        echo (isset($context["entry_mail_partner_approve_info"]) ? $context["entry_mail_partner_approve_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_partner_approve"]) ? $context["entry_mail_partner_approve"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_partner_approve\" id=\"input-mail_partner_approve\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1437
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1438
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1439
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_partner_approve"]) ? $context["marketplace_mail_partner_approve"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1441
            echo "                    ";
        }
        // line 1442
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_product_request\"><span data-toggle=\"tooltip\" title=\"";
        // line 1447
        echo (isset($context["entry_mail_product_request_info"]) ? $context["entry_mail_product_request_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_product_request"]) ? $context["entry_mail_product_request"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_product_request\" id=\"input-mail_product_request\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1451
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1452
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1453
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_product_request"]) ? $context["marketplace_mail_product_request"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1455
            echo "                    ";
        }
        // line 1456
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_product_admin\"><span data-toggle=\"tooltip\" title=\"";
        // line 1461
        echo (isset($context["entry_mail_product_admin_info"]) ? $context["entry_mail_product_admin_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_product_admin"]) ? $context["entry_mail_product_admin"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_product_admin\" id=\"input-mail_product_admin\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1465
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1466
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1467
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_product_admin"]) ? $context["marketplace_mail_product_admin"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1469
            echo "                    ";
        }
        // line 1470
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_product_approve\"><span data-toggle=\"tooltip\" title=\"";
        // line 1475
        echo (isset($context["entry_mail_product_approve_info"]) ? $context["entry_mail_product_approve_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_product_approve"]) ? $context["entry_mail_product_approve"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_product_approve\" id=\"input-mail_product_approve\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1479
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1480
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1481
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_product_approve"]) ? $context["marketplace_mail_product_approve"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1483
            echo "                    ";
        }
        // line 1484
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_transaction\"><span data-toggle=\"tooltip\" title=\"";
        // line 1489
        echo (isset($context["entry_mail_transaction_info"]) ? $context["entry_mail_transaction_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_transaction"]) ? $context["entry_mail_transaction"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_transaction\" id=\"input-mail_transaction\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1493
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1494
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1495
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_transaction"]) ? $context["marketplace_mail_transaction"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1497
            echo "                    ";
        }
        // line 1498
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1503
        echo (isset($context["entry_mail_order_info"]) ? $context["entry_mail_order_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_order"]) ? $context["entry_mail_order"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_order\" id=\"input-mail_order\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1507
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1508
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1509
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_order"]) ? $context["marketplace_mail_order"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1511
            echo "                    ";
        }
        // line 1512
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-marketplace_mail_order_status_change\"><span data-toggle=\"tooltip\" title=\"";
        // line 1516
        echo (isset($context["entry_order_status_change_mail_info"]) ? $context["entry_order_status_change_mail_info"] : null);
        echo "\">";
        echo (isset($context["entry_order_status_change_mail"]) ? $context["entry_order_status_change_mail"] : null);
        echo "</span></label>
              <div class=\"col-sm-9\">
                <select name=\"marketplace_mail_order_status_change\" id=\"input-marketplace_mail_order_status_change\" class=\"form-control\">
                  <option value=\"\"></option>
                  ";
        // line 1520
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1521
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1522
                echo "                    <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_order_status_change"]) ? $context["marketplace_mail_order_status_change"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1524
            echo "                  ";
        }
        // line 1525
        echo "                </select>
              </div>
            </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_cutomer_to_seller\"><span data-toggle=\"tooltip\" title=\"";
        // line 1530
        echo (isset($context["entry_mail_cutomer_to_seller_info"]) ? $context["entry_mail_cutomer_to_seller_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_cutomer_to_seller"]) ? $context["entry_mail_cutomer_to_seller"] : null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_cutomer_to_seller\" id=\"input-mail_cutomer_to_seller\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1534
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1535
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1536
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_cutomer_to_seller"]) ? $context["marketplace_mail_cutomer_to_seller"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1538
            echo "                    ";
        }
        // line 1539
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_seller_to_admin\"><span data-toggle=\"tooltip\" title=\"";
        // line 1544
        echo (isset($context["entry_mail_seller_to_admin_info"]) ? $context["entry_mail_seller_to_admin_info"] : null);
        echo "\">";
        echo (isset($context["entry_mail_seller_to_admin"]) ? $context["entry_mail_seller_to_admin"] : null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_seller_to_admin\" id=\"input-mail_seller_to_admin\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1548
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1549
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1550
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_seller_to_admin"]) ? $context["marketplace_mail_seller_to_admin"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1552
            echo "                    ";
        }
        // line 1553
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_admin_on_edit\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1559
        echo (isset($context["entry_mail_edit_product_admininfo"]) ? $context["entry_mail_edit_product_admininfo"] : null);
        echo "\">
                    ";
        // line 1560
        echo (isset($context["entry_mail_edit_product_admin"]) ? $context["entry_mail_edit_product_admin"] : null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_admin_on_edit\" id=\"input-mail_admin_on_edit\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1566
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1567
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1568
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_admin_on_edit"]) ? $context["marketplace_mail_admin_on_edit"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1570
            echo "                    ";
        }
        // line 1571
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_seller_on_edit\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1577
        echo (isset($context["entry_mail_edit_product_sellerinfo"]) ? $context["entry_mail_edit_product_sellerinfo"] : null);
        echo "\">
                    ";
        // line 1578
        echo (isset($context["entry_mail_edit_product_seller"]) ? $context["entry_mail_edit_product_seller"] : null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_seller_on_edit\" id=\"input-mail_seller_on_edit\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1584
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1585
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1586
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_seller_on_edit"]) ? $context["marketplace_mail_seller_on_edit"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1588
            echo "                    ";
        }
        // line 1589
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-mail_seller_on_edit\">
                  <span data-toggle=\"tooltip\" data-original-title=\"";
        // line 1595
        echo (isset($context["entry_mail_low_stock_sellerinfo"]) ? $context["entry_mail_low_stock_sellerinfo"] : null);
        echo "\">
                    ";
        // line 1596
        echo (isset($context["entry_mail_low_stock_seller"]) ? $context["entry_mail_low_stock_seller"] : null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-9\">
                  <select name=\"marketplace_mail_seller_low_stock\" id=\"input-mail_seller_on_edit\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 1602
        if ((array_key_exists("mails", $context) && (isset($context["mails"]) ? $context["mails"] : null))) {
            // line 1603
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) ? $context["mails"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
                // line 1604
                echo "                      <option value=\"";
                echo $this->getAttribute($context["mail"], "id", array(), "array");
                echo "\" ";
                if (((isset($context["marketplace_mail_seller_low_stock"]) ? $context["marketplace_mail_seller_low_stock"] : null) == $this->getAttribute($context["mail"], "id", array(), "array"))) {
                    echo "selected";
                }
                echo ">  ";
                echo $this->getAttribute($context["mail"], "name", array(), "array");
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1606
            echo "                    ";
        }
        // line 1607
        echo "                  </select>
                </div>
              </div>
            </div>

            <!-- paypal tab -->
            <div class=\"tab-pane\" id=\"tab-paypal\">

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-live-demo\">";
        // line 1616
        echo (isset($context["entry_mode"]) ? $context["entry_mode"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"marketplace_paypal_mode\" id=\"input-live-demo\" class=\"form-control\">
                    ";
        // line 1619
        if ((array_key_exists("marketplace_paypal_mode", $context) && (isset($context["marketplace_paypal_mode"]) ? $context["marketplace_paypal_mode"] : null))) {
            // line 1620
            echo "                    <option value=\"1\"  selected=\"selected\">";
            echo (isset($context["wkentry_yes"]) ? $context["wkentry_yes"] : null);
            echo "</option>
                    <option value=\"0\" >";
            // line 1621
            echo (isset($context["wkentry_no"]) ? $context["wkentry_no"] : null);
            echo "</option>
                    ";
        } else {
            // line 1623
            echo "                    <option value=\"1\">";
            echo (isset($context["wkentry_yes"]) ? $context["wkentry_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 1624
            echo (isset($context["wkentry_no"]) ? $context["wkentry_no"] : null);
            echo "</option>
                    ";
        }
        // line 1626
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-username\">";
        // line 1631
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_user\" ";
        // line 1633
        if (array_key_exists("marketplace_paypal_user", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_paypal_user"]) ? $context["marketplace_paypal_user"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"entry-username\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-password\">";
        // line 1638
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_password\" ";
        // line 1640
        if (array_key_exists("marketplace_paypal_password", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_paypal_password"]) ? $context["marketplace_paypal_password"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"entry-password\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-signature\">";
        // line 1645
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_signature\" ";
        // line 1647
        if (array_key_exists("marketplace_paypal_signature", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_paypal_signature"]) ? $context["marketplace_paypal_signature"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "\" id=\"entry-signature\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-appid\">";
        // line 1652
        echo (isset($context["entry_appid"]) ? $context["entry_appid"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_appid\" ";
        // line 1654
        if (array_key_exists("marketplace_paypal_appid", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_paypal_appid"]) ? $context["marketplace_paypal_appid"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["entry_appid"]) ? $context["entry_appid"] : null);
        echo "\" id=\"entry-appid\" class=\"form-control\"/>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"entry-email-subject\">";
        // line 1659
        echo (isset($context["entry_email_subject"]) ? $context["entry_email_subject"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"marketplace_paypal_email_subject\" ";
        // line 1661
        if (array_key_exists("marketplace_paypal_email_subject", $context)) {
            echo " value=\"";
            echo (isset($context["marketplace_paypal_email_subject"]) ? $context["marketplace_paypal_email_subject"] : null);
            echo "\" ";
        }
        echo " placeholder=\"";
        echo (isset($context["entry_email_subject"]) ? $context["entry_email_subject"] : null);
        echo "\" id=\"entry-email-subject\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <!-- paypal tab end-->

          </div>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\"><!--

\$('.available_order_status > label > input[type=\"checkbox\"]').on('click', function(){
  order_status_id = \$(this).val();
  order_status_name = \$.trim(\$(this).parent('label').text());
  if(\$(this).is(':checked')) {
    html = '';
    html += '<li id=\"order_status_sequence_'+order_status_id+'\"><a style=\"cursor:grab\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span><input type=\"hidden\" name=\"marketplace_order_status_sequence['+order_status_id+'][order_status_id]\" value=\"'+order_status_id+'\"/><input type=\"hidden\" name=\"marketplace_order_status_sequence['+order_status_id+'][name]\" value=\"'+order_status_name+'\"/>'+order_status_name+'</a></li>';

    \$('#orderstatus').append(html);
  } else {
    \$('#order_status_sequence_'+order_status_id).remove();
  }
});

\$('#default-image').on('click',function(){
  \$(this).prevAll('input[type=\"file\"]').trigger('click');
});

\$('#removeimg').on('click',function(){
  confirmation = confirm(\"Are you sure?\");
  if(confirmation) {
    \$('#default-image-view').remove();
    \$('input[name=\"marketplace_default_image_name\"]').val('');
  }
});

\$(function(){
  \$(\"input[name='marketplace_default_image']\").on(\"change\", function()
   {
    \$.this = this;
       var files = !!this.files ? this.files : [];
       if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

       if (/^image/.test( files[0].type)){ // only image file
           var reader = new FileReader(); // instance of the FileReader
           reader.readAsDataURL(files[0]); // read the local file

           reader.onloadend = function(){ // set image to display only
              \$(\$.this).nextAll('#default-image').html();
              \$(\$.this).nextAll('#default-image').html('<img src=\"\" id=\"default-image-view\" height=\"90px\" width=\"90px\" />');
               src = this.result;
               \$(\$.this).nextAll('div').children('img').attr('src',src);
           }
       }
   });
})

\$('input[name=\"marketplace_divide_shipping\"]').on('change',function(){
  \$('.alert').remove();
  if(\$(this).is(':checked')){
    \$('.panel').before('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 1725
        echo (isset($context["text_divide_shipping"]) ? $context["text_divide_shipping"] : null);
        echo "<button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button></div>');
    \$('html, body').animate({scrollTop:0},'slow');
  }
})

//To print tab name from current used language's text box
\$(\"body\").on(\"keyup\",\".row .tab-content input[type='text']\",function(){
  tabId = \$(this).attr('id').split('-')[1].replace('heading','');
  html = '<i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module'+tabId+'\\\\\\']\\').parent().remove(); \$(\\'#tab-module'+tabId+'\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ';
  html += \$(this).val();
  \$('a[href=#tab-module'+tabId+']').html(html);
});

\$('#module li:first-child a').tab('show');
  ";
        // line 1739
        if ($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array", true, true)) {
            // line 1740
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["module"]) {
                // line 1741
                echo "      \$('#language";
                echo $context["key"];
                echo " li:first-child a').tab('show');
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1743
            echo "  ";
        }
        // line 1744
        echo "
var module_row = ";
        // line 1745
        echo (($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array", true, true)) ? ((max(twig_get_array_keys_filter($this->getAttribute((isset($context["marketplace_tab"]) ? $context["marketplace_tab"] : null), "heading", array(), "array"))) + 1)) : (0));
        echo ";

function addModule() {
  var token = Math.random().toString(36).substr(2);

  html  = '<div class=\"tab-pane\" id=\"tab-module' + token + '\">';
  html += '  <ul class=\"nav nav-tabs\" id=\"language' + token + '\">';
    ";
        // line 1752
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1753
            echo "    html += '    <li><a href=\"#tab-module' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\" data-toggle=\"tab\"><img  src=\"language/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo "/";
            echo $this->getAttribute($context["language"], "code", array(), "array");
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array(), "array");
            echo "</a></li>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1755
        echo "  html += '  </ul>';

  html += '  <div class=\"tab-content\">';

  ";
        // line 1759
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1760
            echo "  html += '    <div class=\"tab-pane\" id=\"tab-module' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-3 control-label\" for=\"input-heading' + token + '-language";
            // line 1762
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">";
            echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
            echo "</label>';
  html += '        <div class=\"col-sm-9\"><input type=\"text\" name=\"marketplace_tab[heading]['+module_row+'][";
            // line 1763
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["text_tab_title"]) ? $context["text_tab_title"] : null);
            echo "\" id=\"input-heading' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\" value=\"\" class=\"form-control\"/></div>';
  html += '      </div>';
  html += '      <div class=\"form-group\">';
  html += '        <label class=\"col-sm-3 control-label\" for=\"input-description' + token + '-language";
            // line 1766
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">";
            echo (isset($context["wkentry_selld"]) ? $context["wkentry_selld"] : null);
            echo "</label>';
  html += '        <div class=\"col-sm-9\"><textarea name=\"marketplace_tab[description]['+module_row+'][";
            // line 1767
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["wkentry_selld"]) ? $context["wkentry_selld"] : null);
            echo "\" id=\"input-description' + token + '-language";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\"  class=\"form-control summernote\"></textarea></div>';
  html += '      </div>';
  html += '    </div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1771
        echo "
  html += '  </div>';
  html += '</div>';

  \$('.tab-content:first-child').prepend(html);

  \$('button[data-event=\\'showImageDialog\\']').attr('data-toggle', 'image').removeAttr('data-event');

  \$('#module-add').before('<li><a href=\"#tab-module' + token + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module' + token + '\\\\\\']\\').parent().remove(); \$(\\'#tab-module' + token + '\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ";
        // line 1779
        echo (isset($context["tab_module"]) ? $context["tab_module"] : null);
        echo " ' + module_row + '</a></li>');

  \$('#module a[href=\\'#tab-module' + token + '\\']').tab('show');

  \$('#language' + token + ' li:first-child a').tab('show');

  dyanmicSummernote();

  module_row++;
}
//--></script>

<script type=\"text/javascript\"><!--
seoCount = '";
        // line 1792
        echo (isset($context["seoCount"]) ? $context["seoCount"] : null);
        echo "';
\$('#addSeo').on('click',function(){
  html = '<tr id=\"tr-'+seoCount+'\">';
  html +=   '<td class=\"text-left\">';
  html +=     '<select name=\"marketplace_SefUrlspath['+seoCount+']\" class=\"form-control\">';
  html +=          '";
        // line 1797
        if ((array_key_exists("paths", $context) && (isset($context["paths"]) ? $context["paths"] : null))) {
            echo "';
  html +=            '";
            // line 1798
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paths"]) ? $context["paths"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                echo "';
  html +=               '<option value=\"";
                // line 1799
                echo $context["path"];
                echo "\">  ";
                echo $context["path"];
                echo " </option>';
  html +=             '";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1800
            echo "';
  html +=           '";
        }
        // line 1801
        echo "';
  html +=      '</select>';
  html +=   '</td><td class=\"text-left\">';
  html +=      ' <input type=\"text\" name=\"marketplace_SefUrlsvalue['+seoCount+']\" class=\"form-control\" value=\"\"/>';
  html +=   '</td><td class=\"text-left\">';
  html +=      '<button type=\"button\" onclick=\"\$(\\'#tr-'+seoCount+'\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1806
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
  html +=   '</td>';
  html += '</tr>';

  \$('#route tbody').append(html);
  seoCount++;
});

\$('.selectAll').on('click',function(){
  \$(this).prev('div').find('input[type=\"checkbox\"]').prop('checked',true);
})

\$('.deselectAll').on('click',function(){
  \$(this).prevAll('div').find('input[type=\"checkbox\"]').prop('checked',false);
})
</script>
<script src=\"view/javascript/jquery-ui/jquery-sortable-min.js\"></script>
<script type=\"text/javascript\"><!--
\$(function() {
  \$( \"#sortable\" ).sortable();
  \$( \"#sortable\" ).disableSelection();
  \$( \"#orderstatus\" ).sortable();
  \$( \"#orderstatus\" ).disableSelection();
  \$( \"#acct_menu_sortable\" ).sortable();
  \$( \"#acct_menu_sortable\" ).disableSelection();
});
//--></script>
<script>
  // Allowed Seller Category
  var allowed_categories = [];
  \$('input[name = \\'category\\']').on('click', function(){

    allowed_categories = [];
    \$('.allowed_categories').each(function(){

      allowed_categories.push(\$(this).val());

    });
  });
  \$('input[name=\\'category\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=extension/module/marketplace/autocomplete&user_token=";
        // line 1848
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
        type: 'post',
        dataType: 'json',
        data: {allowed_categories},
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['category_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'category\\']').val('');

      \$('#allowed-category' + item['value']).remove();

      \$('#allowed-category').append('<div id=\"allowed-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"marketplace_allowed_categories[' +item['value'] +']\" value=\"' + item['label'] + '\" /><input class=\"allowed_categories\" type=\"hidden\" value=\"' + item['value'] + '\" /></div>');
    }
  });
  \$('#allowed-category').delegate('.fa-minus-circle', 'click', function() {
    \$(this).parent().remove();
  });
</script>

<script type=\"text/javascript\">
  \$('#input-marketplace_store').on('change',function(){
    location = \"index.php?route=extension/module/marketplace&user_token=";
        // line 1877
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&store_id=\"+\$(this).val();
  });
</script>

";
        // line 1881
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
<script src=\"view/javascript/summernote/webkul_summernote.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/marketplace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4650 => 1881,  4643 => 1877,  4611 => 1848,  4566 => 1806,  4559 => 1801,  4555 => 1800,  4545 => 1799,  4539 => 1798,  4535 => 1797,  4527 => 1792,  4511 => 1779,  4501 => 1771,  4487 => 1767,  4481 => 1766,  4471 => 1763,  4465 => 1762,  4459 => 1760,  4455 => 1759,  4449 => 1755,  4432 => 1753,  4428 => 1752,  4418 => 1745,  4415 => 1744,  4412 => 1743,  4403 => 1741,  4398 => 1740,  4396 => 1739,  4379 => 1725,  4306 => 1661,  4301 => 1659,  4287 => 1654,  4282 => 1652,  4268 => 1647,  4263 => 1645,  4249 => 1640,  4244 => 1638,  4230 => 1633,  4225 => 1631,  4218 => 1626,  4213 => 1624,  4208 => 1623,  4203 => 1621,  4198 => 1620,  4196 => 1619,  4190 => 1616,  4179 => 1607,  4176 => 1606,  4161 => 1604,  4156 => 1603,  4154 => 1602,  4145 => 1596,  4141 => 1595,  4133 => 1589,  4130 => 1588,  4115 => 1586,  4110 => 1585,  4108 => 1584,  4099 => 1578,  4095 => 1577,  4087 => 1571,  4084 => 1570,  4069 => 1568,  4064 => 1567,  4062 => 1566,  4053 => 1560,  4049 => 1559,  4041 => 1553,  4038 => 1552,  4023 => 1550,  4018 => 1549,  4016 => 1548,  4007 => 1544,  4000 => 1539,  3997 => 1538,  3982 => 1536,  3977 => 1535,  3975 => 1534,  3966 => 1530,  3959 => 1525,  3956 => 1524,  3941 => 1522,  3936 => 1521,  3934 => 1520,  3925 => 1516,  3919 => 1512,  3916 => 1511,  3901 => 1509,  3896 => 1508,  3894 => 1507,  3885 => 1503,  3878 => 1498,  3875 => 1497,  3860 => 1495,  3855 => 1494,  3853 => 1493,  3844 => 1489,  3837 => 1484,  3834 => 1483,  3819 => 1481,  3814 => 1480,  3812 => 1479,  3803 => 1475,  3796 => 1470,  3793 => 1469,  3778 => 1467,  3773 => 1466,  3771 => 1465,  3762 => 1461,  3755 => 1456,  3752 => 1455,  3737 => 1453,  3732 => 1452,  3730 => 1451,  3721 => 1447,  3714 => 1442,  3711 => 1441,  3696 => 1439,  3691 => 1438,  3689 => 1437,  3680 => 1433,  3673 => 1428,  3670 => 1427,  3655 => 1425,  3650 => 1424,  3648 => 1423,  3639 => 1419,  3632 => 1414,  3629 => 1413,  3614 => 1411,  3609 => 1410,  3607 => 1409,  3598 => 1405,  3591 => 1400,  3586 => 1399,  3582 => 1398,  3578 => 1397,  3574 => 1396,  3570 => 1395,  3566 => 1394,  3562 => 1393,  3558 => 1392,  3554 => 1391,  3550 => 1390,  3546 => 1389,  3542 => 1388,  3538 => 1387,  3534 => 1386,  3530 => 1385,  3526 => 1384,  3522 => 1383,  3518 => 1382,  3511 => 1381,  3504 => 1377,  3500 => 1376,  3491 => 1370,  3473 => 1359,  3465 => 1358,  3457 => 1355,  3445 => 1350,  3437 => 1349,  3429 => 1348,  3421 => 1345,  3409 => 1340,  3401 => 1339,  3393 => 1336,  3381 => 1331,  3373 => 1330,  3365 => 1329,  3357 => 1326,  3348 => 1319,  3344 => 1317,  3338 => 1316,  3331 => 1312,  3325 => 1311,  3320 => 1308,  3317 => 1307,  3313 => 1306,  3310 => 1305,  3304 => 1304,  3297 => 1300,  3291 => 1299,  3286 => 1296,  3283 => 1295,  3278 => 1294,  3275 => 1293,  3265 => 1289,  3259 => 1288,  3254 => 1285,  3249 => 1284,  3247 => 1283,  3238 => 1277,  3234 => 1276,  3224 => 1271,  3221 => 1270,  3211 => 1266,  3201 => 1265,  3197 => 1263,  3193 => 1262,  3185 => 1257,  3181 => 1256,  3170 => 1248,  3162 => 1243,  3142 => 1230,  3134 => 1229,  3126 => 1226,  3114 => 1221,  3106 => 1220,  3098 => 1217,  3086 => 1212,  3078 => 1211,  3071 => 1207,  3058 => 1201,  3050 => 1200,  3043 => 1196,  3033 => 1191,  3030 => 1190,  3020 => 1186,  3010 => 1185,  3006 => 1183,  3002 => 1182,  2994 => 1179,  2985 => 1175,  2982 => 1174,  2971 => 1170,  2963 => 1168,  2955 => 1166,  2953 => 1165,  2949 => 1163,  2945 => 1162,  2937 => 1159,  2929 => 1154,  2917 => 1144,  2914 => 1143,  2906 => 1140,  2885 => 1135,  2876 => 1133,  2859 => 1129,  2850 => 1127,  2842 => 1125,  2838 => 1124,  2834 => 1122,  2815 => 1120,  2811 => 1119,  2807 => 1118,  2802 => 1117,  2797 => 1116,  2795 => 1115,  2785 => 1109,  2782 => 1108,  2767 => 1105,  2764 => 1104,  2759 => 1103,  2757 => 1101,  2755 => 1100,  2738 => 1090,  2731 => 1086,  2727 => 1085,  2715 => 1080,  2708 => 1076,  2704 => 1075,  2690 => 1068,  2682 => 1067,  2676 => 1064,  2663 => 1058,  2655 => 1057,  2649 => 1054,  2643 => 1050,  2630 => 1047,  2621 => 1046,  2617 => 1045,  2612 => 1043,  2606 => 1039,  2593 => 1036,  2584 => 1035,  2580 => 1034,  2575 => 1032,  2564 => 1024,  2560 => 1023,  2552 => 1018,  2535 => 1006,  2528 => 1002,  2524 => 1001,  2512 => 994,  2503 => 988,  2499 => 987,  2489 => 982,  2482 => 978,  2478 => 977,  2465 => 971,  2457 => 970,  2449 => 969,  2441 => 964,  2437 => 963,  2424 => 957,  2416 => 956,  2408 => 955,  2400 => 950,  2396 => 949,  2385 => 941,  2379 => 937,  2376 => 936,  2370 => 935,  2368 => 934,  2361 => 932,  2353 => 929,  2347 => 925,  2341 => 924,  2333 => 922,  2325 => 920,  2322 => 919,  2318 => 918,  2314 => 917,  2308 => 915,  2303 => 914,  2300 => 913,  2298 => 912,  2288 => 907,  2284 => 906,  2274 => 899,  2263 => 891,  2259 => 890,  2255 => 889,  2241 => 882,  2233 => 881,  2225 => 878,  2217 => 873,  2203 => 866,  2196 => 864,  2184 => 859,  2180 => 858,  2173 => 856,  2167 => 852,  2157 => 848,  2149 => 847,  2145 => 845,  2141 => 844,  2133 => 841,  2127 => 837,  2112 => 835,  2108 => 834,  2099 => 830,  2093 => 826,  2078 => 824,  2074 => 823,  2065 => 819,  2058 => 814,  2055 => 813,  2045 => 809,  2039 => 808,  2033 => 807,  2026 => 804,  2021 => 803,  2019 => 802,  2010 => 796,  2006 => 795,  1998 => 789,  1995 => 788,  1985 => 784,  1975 => 783,  1971 => 782,  1968 => 781,  1963 => 780,  1961 => 779,  1953 => 776,  1940 => 770,  1932 => 769,  1924 => 766,  1911 => 760,  1903 => 759,  1895 => 756,  1882 => 750,  1874 => 749,  1866 => 746,  1854 => 741,  1846 => 740,  1838 => 737,  1822 => 726,  1809 => 721,  1800 => 720,  1792 => 717,  1787 => 715,  1773 => 709,  1764 => 708,  1756 => 705,  1750 => 702,  1737 => 696,  1730 => 694,  1716 => 688,  1707 => 687,  1699 => 684,  1693 => 681,  1679 => 674,  1672 => 672,  1658 => 666,  1649 => 665,  1641 => 662,  1627 => 656,  1618 => 655,  1610 => 652,  1604 => 649,  1587 => 639,  1579 => 638,  1571 => 635,  1558 => 629,  1550 => 628,  1542 => 625,  1529 => 619,  1521 => 618,  1513 => 615,  1500 => 609,  1492 => 608,  1484 => 605,  1471 => 599,  1463 => 598,  1455 => 595,  1442 => 589,  1434 => 588,  1426 => 585,  1412 => 580,  1405 => 578,  1393 => 573,  1386 => 571,  1372 => 566,  1365 => 564,  1353 => 559,  1346 => 557,  1332 => 552,  1327 => 550,  1321 => 546,  1318 => 545,  1309 => 542,  1303 => 541,  1296 => 540,  1291 => 539,  1289 => 538,  1282 => 533,  1277 => 531,  1272 => 530,  1267 => 528,  1263 => 527,  1258 => 526,  1250 => 523,  1237 => 517,  1229 => 516,  1221 => 513,  1210 => 507,  1206 => 505,  1195 => 501,  1187 => 499,  1179 => 497,  1177 => 496,  1173 => 494,  1169 => 493,  1161 => 490,  1150 => 484,  1147 => 483,  1136 => 479,  1128 => 477,  1120 => 475,  1118 => 474,  1114 => 472,  1110 => 471,  1102 => 468,  1090 => 463,  1083 => 461,  1070 => 455,  1062 => 454,  1054 => 451,  1041 => 445,  1033 => 444,  1025 => 441,  1018 => 436,  1003 => 434,  999 => 433,  991 => 430,  980 => 421,  977 => 420,  974 => 419,  966 => 416,  960 => 414,  958 => 413,  953 => 412,  951 => 411,  946 => 410,  944 => 409,  938 => 408,  935 => 407,  930 => 406,  927 => 405,  921 => 402,  914 => 398,  907 => 394,  903 => 392,  901 => 391,  892 => 387,  880 => 379,  876 => 377,  872 => 375,  870 => 374,  861 => 369,  857 => 367,  853 => 365,  851 => 364,  841 => 359,  831 => 354,  824 => 352,  811 => 346,  803 => 345,  795 => 342,  782 => 336,  774 => 335,  766 => 332,  753 => 326,  745 => 323,  732 => 315,  729 => 314,  726 => 313,  716 => 309,  706 => 308,  702 => 307,  699 => 306,  694 => 305,  692 => 304,  684 => 299,  680 => 298,  666 => 291,  658 => 290,  652 => 287,  639 => 281,  631 => 280,  623 => 277,  610 => 271,  602 => 270,  594 => 267,  581 => 261,  573 => 260,  565 => 257,  552 => 251,  544 => 250,  536 => 247,  523 => 241,  515 => 240,  507 => 237,  494 => 231,  486 => 230,  478 => 227,  465 => 221,  457 => 220,  449 => 217,  436 => 211,  428 => 210,  420 => 207,  407 => 201,  399 => 200,  391 => 197,  386 => 194,  380 => 191,  377 => 190,  375 => 189,  372 => 188,  366 => 186,  364 => 185,  357 => 183,  349 => 180,  338 => 176,  331 => 174,  322 => 168,  318 => 167,  314 => 166,  310 => 165,  306 => 164,  302 => 163,  298 => 162,  294 => 161,  290 => 160,  286 => 159,  282 => 158,  273 => 151,  270 => 150,  255 => 148,  250 => 147,  248 => 146,  242 => 143,  229 => 137,  221 => 136,  215 => 133,  209 => 130,  202 => 126,  194 => 121,  190 => 119,  182 => 115,  179 => 114,  171 => 110,  169 => 109,  157 => 100,  149 => 94,  138 => 92,  134 => 91,  129 => 89,  123 => 88,  119 => 87,  113 => 86,  107 => 85,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <style type="text/css">*/
/*   .img-thumbnail-default{*/
/*     height: 100px;*/
/*     width: 100px;*/
/*     background-color: #ffffff;*/
/*     border: 1px solid #dddddd;*/
/*     border-radius: 3px;*/
/*     line-height: 1.42857;*/
/*     max-width: 100px;*/
/*     padding: 4px;*/
/*     transition: all 0.2s ease-in-out 0s;*/
/*     cursor: pointer;*/
/*   }*/
/* */
/*   #text-mp{*/
/*     font-size: 30px;*/
/*   }*/
/* */
/*   #text-version{*/
/*     font-size: 12px;*/
/*   }*/
/* */
/*   .mp-button{*/
/*     background-color: #0667B4;*/
/*     color: white;*/
/*     border-radius: 2px;*/
/*     font-size: 12px;*/
/*   }*/
/* */
/*   .mp-button:focus{*/
/*     outline: none !important;*/
/*   }*/
/* */
/*   .mp-demo{*/
/*     background-color: #2196F3;*/
/*   }*/
/* */
/*   .mp-save{*/
/*     background-color: rgb(77, 188, 96);*/
/*   }*/
/* */
/*   .mp-cancel{*/
/*     background-color: #E15959;*/
/*   }*/
/* */
/*   .mp-addon{*/
/*     background-color: #4285F4;*/
/*     color: #FFF;*/
/*     border-color: #4285F4;*/
/*   }*/
/* */
/*   .nav-tabs {*/
/*       border-bottom: 1px solid #4285F4;*/
/*   }*/
/* */
/*   .nav.nav-tabs > li > a:hover, .nav-tabs > li > a:hover{*/
/*     background-color: #4285F4;*/
/*     border-color: #4285F4;*/
/*     color: white;*/
/*     outline: medium none !important;*/
/*   }*/
/* */
/*   .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus {*/
/*     background-color: #FFFFFF;*/
/*     border: 1px solid #4285F4;*/
/*     border-bottom-color: #FFFFFF !important;*/
/*     outline: medium none !important;*/
/*     color: black;*/
/*   }*/
/* */
/*   .fa-minus-circle{*/
/*     cursor: pointer;*/
/*   }*/
/* */
/*   .dropdown-menu{*/
/*     max-height: 500px;*/
/*     overflow: auto;*/
/*   }*/
/* </style>*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <a href="http://webkul.com/blog/opencart-marketplace-multi-vendor-module/" target="_blank" title="{{ text_blog_help }}" data-toggle="tooltip" class="btn btn-lg mp-button">{{ text_blog}}</a>*/
/*         <a href="https://webkul.uvdesk.com/" target="_blank" title="{{ text_ticket_help }}" data-toggle="tooltip" class="btn btn-lg mp-button mp-demo">{{ text_ticket}}</a>*/
/*         <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save}}" class="btn btn-lg mp-button mp-save"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel}}" data-toggle="tooltip" title="{{ button_cancel}}" class="btn btn-lg mp-button mp-cancel"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title}}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-12 text-center">*/
/*         <div class="text-center" id="text-mp">{{ heading_title}}</div>*/
/*       </div>*/
/*       <div class="col-sm-12 text-center">*/
/*         <div class="text-center" id="text-version">Version 4.1.2.0</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning}}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success}}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form}}</h3>*/
/*       </div>*/
/* */
/*       <div class="panel-body">*/
/* */
/*       <!--   <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ text_info}}*/
/*           <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div> -->*/
/* */
/*         <form action="{{ action}}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-module_marketplace_status">{{ text_status}}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_marketplace_status" id="input-module_marketplace_status" class="form-control">*/
/*                 <option value="0" {% if module_marketplace_status is defined and module_marketplace_status == 0 %}{{ 'selected' }}{% endif %} >{{ text_disabled}}</option>*/
/*                 <option value="1"  {% if module_marketplace_status is defined and module_marketplace_status %}{{ 'selected' }}{% endif %} >{{ text_enabled }}</option>*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-marketplace_store">{{ text_store}}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="marketplace_store" id="input-marketplace_store" class="form-control">*/
/*                 {% if stores is defined and stores %}*/
/*                   {% for store in stores %}*/
/*                     <option value="{{ store.store_id }}" {% if marketplace_store is defined and marketplace_store == store.store_id %}{{ 'selected' }}{%endif %}   >{{ store.name }}</option>*/
/*                   {% endfor %}*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <br/>*/
/* */
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general}}</a></li>*/
/*             <li><a href="#tab-commission" data-toggle="tab">{{ tab_commission}}</a></li>*/
/*             <li><a href="#tab-product" data-toggle="tab">{{ tab_product}}</a></li>*/
/*             <li><a href="#tab-advncd" data-toggle="tab">{{ 'Advanced' }}</a></li>*/
/*             <li><a href="#tab-order" data-toggle="tab">{{ tab_order}}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo}}</a></li>*/
/*             <li><a href="#tab-sell" data-toggle="tab">{{ tab_sell}}</a></li>*/
/*             <li><a href="#tab-profile" data-toggle="tab">{{ tab_profile}}</a></li>*/
/*             <li><a href="#tab-mod-config" data-toggle="tab">{{ tab_mod_config}}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail}}</a></li>*/
/*             <li><a href="#tab-paypal" data-toggle="tab">{{ tab_paypal}}</a></li>*/
/*           </ul>*/
/* */
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail"><span data-toggle="tooltip" title="{{ entry_admin_mailinfo}}">{{ entry_admin_mail}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="text" name="marketplace_adminmail" {% if marketplace_adminmail is defined %} value="{{ marketplace_adminmail }}" {% endif %}  id="input-mail" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-contactseller"><span data-toggle="tooltip" title="{{ entry_default_imageinfo}}">{{ entry_default_image}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="file" class="hide" name="marketplace_default_image" />*/
/*                   <input type="hidden" name="marketplace_default_image_name" value="{% if marketplace_default_image_name is defined %}{{ marketplace_default_image_name }}{%endif %}  " />*/
/*                   <div class="img-thumbnail-default" id="default-image">*/
/*                     {% if marketplace_default_image is defined and marketplace_default_image  %}*/
/*                       <img src="{{ marketplace_default_image }}" id="default-image-view" />*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   {% if marketplace_default_image is defined and marketplace_default_image  %}*/
/*                     <div style="width:100px">*/
/*                       <button class="btn btn-danger btn-sm" id="removeimg" type="button" style="margin-top: 5px;width: 100%;">{{ entry_remove}}</button>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-becomepartnerinfo"><span data-toggle="tooltip" title="{{ entry_becomepartnerinfo}}">{{ entry_becomepartner}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_becomepartnerregistration" id="input-becomepartnerinfo" class="form-control">*/
/*                     <option value="0" {% if marketplace_becomepartnerregistration is defined and marketplace_becomepartnerregistration == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled }} </option>*/
/*                     <option value="1" {% if marketplace_becomepartnerregistration is defined and marketplace_becomepartnerregistration  %}{{ 'selected' }}{%endif %}>  {{ text_enabled }} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-partnerapprove"><span data-toggle="tooltip" title="{{ entry_partnerapprovinfo}}">{{ entry_partnerapprov}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_partnerapprov" id="input-partnerapprove" class="form-control">*/
/*                     <option value="0" {% if marketplace_partnerapprov is defined and marketplace_partnerapprov == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1"  {% if marketplace_partnerapprov is defined and marketplace_partnerapprov %}{{ 'selected' }}{%endif %}>  {{ text_enabled }} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-productapprove"><span data-toggle="tooltip" title="{{ entry_productapprovinfo}}">{{ entry_productapprov}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_productapprov" id="input-productapprove" class="form-control">*/
/*                     <option value="0" {% if marketplace_productapprov is defined and marketplace_productapprov == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled }} </option>*/
/*                     <option value="1"  {% if marketplace_productapprov is defined and marketplace_productapprov %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-categoryapprove"><span data-toggle="tooltip" title="{{ entry_categoryapprovinfo}}">{{ entry_categoryapprov}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_categoryapprov" id="input-categoryapprove" class="form-control">*/
/*                     <option value="0" {% if marketplace_categoryapprov is defined and marketplace_categoryapprov == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled }} </option>*/
/*                     <option value="1"  {% if marketplace_categoryapprov is defined and marketplace_categoryapprov %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-informationapprove"><span data-toggle="tooltip" title="{{ entry_informationapprovinfo}}">{{ entry_informationapprov}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_informationapprov" id="input-informationapprove" class="form-control">*/
/*                     <option value="0" {% if marketplace_informationapprov is defined and marketplace_informationapprov == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled }} </option>*/
/*                     <option value="1"  {% if marketplace_informationapprov is defined and marketplace_informationapprov %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-sellereditreview"><span data-toggle="tooltip" title="{{ entry_sellereditreviewinfo}}">{{ entry_sellereditreview}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_sellereditreview" id="input-sellereditreview" class="form-control">*/
/*                     <option value="0" {% if marketplace_sellereditreview is defined and marketplace_sellereditreview == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled }} </option>*/
/*                     <option value="1"  {% if marketplace_sellereditreview is defined and marketplace_sellereditreview %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-contactseller"><span data-toggle="tooltip" title="{{ entry_customer_contact_sellerinfo}}">{{ entry_customer_contact_seller}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_customercontactseller" id="input-contactseller" class="form-control">*/
/*                     <option value="0" {% if marketplace_customercontactseller is defined and marketplace_customercontactseller == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_customercontactseller is defined and marketplace_customercontactseller  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-sellernamecart"><span data-toggle="tooltip" title="{{ entry_seller_name_cart_info}}">{{ entry_seller_name_cart}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_seller_name_cart_status" id="input-sellernamecart" class="form-control">*/
/*                     <option value="0" {% if marketplace_seller_name_cart_status is defined and marketplace_seller_name_cart_status == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_seller_name_cart_status is defined and marketplace_seller_name_cart_status  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-admincustomercontactseller"><span data-toggle="tooltip" title="{{ entry_mail_admin_customer_contact_sellerinfo}}">{{ entry_mail_admin_customer_contact_seller}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mailadmincustomercontactseller" id="input-admincustomercontactseller" class="form-control">*/
/*                     <option value="0" {% if marketplace_mailadmincustomercontactseller is defined and marketplace_mailadmincustomercontactseller == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_mailadmincustomercontactseller is defined and marketplace_mailadmincustomercontactseller  %}{{ 'selected' }}{%endif %}>  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-separateview">{{ entry_separate_view}}</label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_separate_view" id="input-separateview" class="form-control">*/
/*                     <option value="0" {% if marketplace_separate_view is defined and marketplace_separate_view == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_separate_view is defined and marketplace_separate_view  %}{{ 'selected' }}{%endif %}>  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" >*/
/*                   <span data-toggle="tooltip" data-original-title="{{ entry_notification_filter_help }}">*/
/*                     {{ entry_notification_filter }}*/
/*                   </span>*/
/*                 </label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height:150px;overflow:auto">*/
/*                     {% if order_statuses is defined and order_statuses %}*/
/*                       {% for key, order_status in order_statuses %}*/
/*                         <div class="checkbox">*/
/*                           <label for="notification_filter_{{ order_status['order_status_id'] }}">*/
/*                             <input type="checkbox" name="marketplace_notification_filter[]" value="{{ order_status['order_status_id'] }}" id="notification_filter_{{ order_status['order_status_id'] }}" {% if marketplace_notification_filter is defined and  marketplace_notification_filter and order_status['order_status_id'] in marketplace_notification_filter %}{{ 'checked' }}{% endif %} />*/
/*                             {{ order_status['name'] }}*/
/*                           </label>*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   <a class="selectAll">{{ entry_selectall }}</a> &nbsp;&nbsp; <a class="deselectAll">{{ entry_deselectall }}</a>*/
/*                 </div>*/
/*               </div>*/
/* */
/*             </div>*/
/*             <!-- comission tab -->*/
/*             <div class="tab-pane" id="tab-commission">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-commission"><span data-toggle="tooltip" title="{{ entry_commission_info}}">{{ entry_commission}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="input-group"><span class="input-group-addon mp-addon mp-addon">%</span>*/
/*                      <input type="number" min="0" name="marketplace_commission" {% if marketplace_commission is defined %} value="{{ marketplace_commission }}" {% endif %}  id="input-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-commission-unit_price"><span data-toggle="tooltip" title="{{ entry_commission_unit_price_info}}">{{ entry_commission_unit_price}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_commission_unit_price" id="input-commission-unit_price" class="form-control">*/
/*                     <option value="0" {% if marketplace_commission_unit_price is defined and marketplace_commission_unit_price == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_commission_unit_price is defined and marketplace_commission_unit_price  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-commission-tax"><span data-toggle="tooltip" title="{{ entry_commission_tax_info}}">{{ entry_commission_tax}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_commission_tax" id="input-commission-tax" class="form-control">*/
/*                     <option value="0" {% if marketplace_commission_tax is defined and marketplace_commission_tax == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_commission_tax is defined and marketplace_commission_tax  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-commissionworkedon"><span data-toggle="tooltip" title="{{ entry_commission_workedinfo}}">{{ entry_commission_worked}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="checkbox" name="marketplace_commissionworkedon" value="1" {% if marketplace_commissionworkedon is defined and marketplace_commissionworkedon %}{{ 'checked' }}{%endif %} id="input-commissionworkedon" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label"><span data-toggle="tooltip"  title="{{ entry_commission_addinfo}}">{{ entry_commission_add}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if marketplace_commission_add is defined and marketplace_commission_add is iterable and 'category' in marketplace_commission_add %}*/
/*                         <input type="checkbox" name="marketplace_commission_add[category]" value="category" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="marketplace_commission_add[category]" value="category" />*/
/*                         {% endif %}*/
/*                         {{ entry_category}}*/
/*                       </label>*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if marketplace_commission_add is defined and marketplace_commission_add is iterable and 'category_child' in marketplace_commission_add %}*/
/*                         <input type="checkbox" name="marketplace_commission_add[category_child]" value="category_child" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="marketplace_commission_add[category_child]" value="category_child" />*/
/*                         {% endif %}*/
/*                         {{ entry_category_child}}*/
/*                       </label>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ entry_priority_commissioninfo}}">{{ entry_priority_commission}}</span></label>*/
/*                 <div class="col-sm-9">*/
/* */
/*                   <ul class="nav nav-pills nav-stacked" id="sortable">*/
/*                     {% if marketplace_boxcommission  is not defined or marketplace_boxcommission == 0 %}*/
/*                       <li><a><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                         <input type="hidden" name="marketplace_boxcommission[fixed]" value="fixed" />*/
/*                         {{ entry_fixed}}</a>*/
/*                       </li>*/
/*                       <li><a><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                         <input type="hidden" name="marketplace_boxcommission[category]" value="fixed" />*/
/*                         {{ entry_category}}</a>*/
/*                       </li>*/
/*                       <li><a><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                         <input type="hidden" name="marketplace_boxcommission[category_child]" value="fixed"/>*/
/*                         {{ entry_category_child}}</a>*/
/*                       </li>*/
/*                     {% else %}*/
/*                       {% if marketplace_boxcommission  is defined and marketplace_boxcommission %}*/
/*                         {% for key, box in marketplace_boxcommission %}*/
/*                           <li><a><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                             <input type="hidden" name="marketplace_boxcommission[{{ key }}]" value="{{ key}}"/>*/
/*                             {% if key == 'fixed' %}*/
/*                               {{ entry_fixed }}*/
/*                             {% elseif key == 'category' %}*/
/*                               {{ entry_category }}*/
/*                             {% elseif key == 'category_child' %}*/
/*                               {{ entry_category_child}}*/
/*                             {% endif %}*/
/*                             </a>*/
/*                           </li>*/
/*                         {% endfor %}*/
/*                       {% endif %}*/
/*                     {% endif %}*/
/*                   </ul>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/* */
/*             <!-- product tab -->*/
/*             <div class="tab-pane" id="tab-product">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-sellerProductStore"><span data-toggle="tooltip" title="{{ entry_seller_product_store_info}}">{{ entry_seller_product_store}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_seller_product_store" id="input-sellerProductStore" class="form-control">*/
/*                     {% for key, value in seller_product_store %}*/
/*                     <option value="{{ key }}" {% if marketplace_seller_product_store is defined and key == marketplace_seller_product_store %}{{ 'selected' }}{% endif %} >{{ value }}</option>*/
/*                    {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-auto-generate-sku"><span data-toggle="tooltip" title="{{ entry_auto_generate_sku_info}}">{{ entry_auto_generate_sku}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_auto_generate_sku" id="input-auto-generate-sku" class="form-control">*/
/*                     <option value="0" {% if marketplace_auto_generate_sku is defined and marketplace_auto_generate_sku == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_auto_generate_sku is defined and marketplace_auto_generate_sku  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-low-stock-info"><span data-toggle="tooltip" title="{{ entry_low_stock_notification_info}}">{{ entry_low_stock_notification}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_low_stock_notification" id="input-low-stock-info" class="form-control">*/
/*                     <option value="0" {% if marketplace_low_stock_notification is defined and marketplace_low_stock_notification == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_low_stock_notification is defined and marketplace_low_stock_notification  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*                <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-low-stock-quantity"><span data-toggle="tooltip" title="{{ entry_low_stock_quantity_info}}">{{ entry_low_stock_quantity}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="number" min="0" name="marketplace_low_stock_quantity" {% if marketplace_low_stock_quantity is defined %}value="{{ marketplace_low_stock_quantity }}"{% endif %} id ="input-low-stock-quantity" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ entry_alowed_product_columnsinfo}}">{{ entry_alowed_product_columns}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for value in product_table %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           {% if marketplace_allowedproductcolumn is defined and marketplace_allowedproductcolumn is iterable and value in marketplace_allowedproductcolumn %}*/
/*                           <input type="checkbox" name="marketplace_allowedproductcolumn[{{ value }}]" value="{{ value}}" checked="checked" />*/
/*                           {% else %}*/
/*                            <input type="checkbox" name="marketplace_allowedproductcolumn[{{ value }}]" value="{{ value}}" />*/
/*                           {% endif %}*/
/*                           {{ value|replace({'_': " "})}}*/
/*                         </label>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                   <a class="selectAll">{{ entry_selectall}}</a> &nbsp;&nbsp; <a class="deselectAll">{{ entry_deselectall}}</a>*/
/*                 </div>*/
/*               </div>*/
/* */
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ entry_alowed_product_tabsinfo}}">{{ entry_alowed_product_tabs}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for value in product_tabs %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           {% if marketplace_allowedproducttabs is defined and marketplace_allowedproducttabs is iterable and value in marketplace_allowedproducttabs %}*/
/*                           <input type="checkbox" name="marketplace_allowedproducttabs[{{ value }}]" value="{{ value}}" checked="checked" />*/
/*                           {% else %}*/
/*                            <input type="checkbox" name="marketplace_allowedproducttabs[{{ value }}]" value="{{ value}}" />*/
/*                           {% endif %}*/
/*                           {{ value|replace({'_': " "})}}*/
/*                         </label>*/
/*                       </div>*/
/*                     {% endfor %}*/
/* */
/*                   </div>*/
/*                   <a class="selectAll">{{ entry_selectall}}</a> &nbsp;&nbsp; <a class="deselectAll">{{ entry_deselectall}}</a>*/
/* */
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-marketplace_seller_category_required"><span data-toggle="tooltip" title="{{ entry_category_required_info}}">{{ entry_category_required}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_seller_category_required" id="input-marketplace_seller_category_required" class="form-control">*/
/*                     <option value="0" {% if marketplace_seller_category_required is defined and marketplace_seller_category_required == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_seller_category_required is defined and marketplace_seller_category_required  %}{{ 'selected' }}{%endif %}>  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-allowed-category"><span data-toggle="tooltip" title="{{ entry_seller_category_info}}">{{ entry_seller_category}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_allowed_seller_category_type" id="input-allowed-category" class="form-control">*/
/*                     {% if marketplace_allowed_seller_category_type is defined and marketplace_allowed_seller_category_type %}{{ 'selected' }}*/
/*                     <option value="1" selected="selected">{{ text_all_category}}</option>*/
/*                     <option value="0" >{{ text_selected_category}}</option>*/
/*                     {% else %}*/
/*                     <option value="1" >{{ text_all_category}}</option>*/
/*                     <option value="0" selected="selected">{{ text_selected_category}}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*                 <div class="col-sm-9 col-sm-offset-3">*/
/*                   <input type="text" name="category" value=""  class="form-control" />*/
/*                   <div id="allowed-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% if marketplace_allowed_categories is defined and marketplace_allowed_categories %}*/
/*                       {% for key, marketplace_allowed_category in marketplace_allowed_categories %}*/
/*                           <div id="allowed-category{{ key }}"><i class="fa fa-minus-circle"></i> {{ marketplace_allowed_category }}*/
/*                             <input type="hidden" name="marketplace_allowed_categories[{{ key }}]" value="{{ marketplace_allowed_category }}" />*/
/*                             <input class="allowed_categories" type="hidden" value="{{ key }}" />*/
/*                           </div>*/
/*                       {% endfor %}*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-noofimages">{{ entry_no_of_images}}</label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="number" min="0" name="marketplace_noofimages" {% if marketplace_noofimages is defined %} value="{{ marketplace_noofimages }}" {% endif %} placeholder="{{ text_no_img}}" id="input-noofimages" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-imageex"><span data-toggle="tooltip" title="{{ entry_image_exinfo}}">{{ entry_image_ex}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="text" name="marketplace_imageex" {% if marketplace_imageex is defined %} value="{{ marketplace_imageex }}" {% endif %} placeholder="jpg,jpeg,png" id="input-imageex" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-imagesize"><span data-toggle="tooltip" title="{{ wkentry_pimagesizeinfo}}">{{ wkentry_pimagesize}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="number" min="0" name="marketplace_imagesize" {% if marketplace_imagesize is defined %} value="{{ marketplace_imagesize }}" {% endif %} placeholder="{{ text_in_kbs}}" id="input-imagesize" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-download_ex"><span data-toggle="tooltip" title="{{ entry_download_exinfo}}">{{ entry_download_ex}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="text" name="marketplace_downloadex" {% if marketplace_downloadex is defined %} value="{{ marketplace_downloadex }}" {% endif %}  placeholder="zip,jpg,jpeg" id="input-download_ex" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-download_size"><span data-toggle="tooltip" title="{{ entry_download_sizeinfo}}">{{ entry_download_size}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <input type="number" min="0" name="marketplace_downloadsize" {% if marketplace_downloadsize is defined %} value="{{ marketplace_downloadsize }}" {% endif %} placeholder="{{ text_in_kbs}}" id="input-download_size" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-productaddemail"><span data-toggle="tooltip" title="{{ entry_product_add_emailinfo}}">{{ entry_product_add_email}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_productaddemail" id="input-productaddemail" class="form-control">*/
/*                     <option value="0" {% if marketplace_productaddemail is defined and marketplace_productaddemail == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_productaddemail is defined and marketplace_productaddemail  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-product-reapprove"><span data-toggle="tooltip" title="{{ entry_product_reapproveinfo}}">{{ entry_product_reapprove}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_product_reapprove" id="input-product-reapprove" class="form-control">*/
/*                     <option value="0" {% if marketplace_product_reapprove is defined and marketplace_product_reapprove == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_product_reapprove is defined and marketplace_product_reapprove  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-sellerdeleteproduct"><span data-toggle="tooltip" title="{{ entry_customer_delete_productinfo}}">{{ entry_customer_delete_product}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_sellerdeleteproduct" id="input-sellerdeleteproduct" class="form-control">*/
/*                     <option value="0" {% if marketplace_sellerdeleteproduct is defined and marketplace_sellerdeleteproduct == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_sellerdeleteproduct is defined and marketplace_sellerdeleteproduct  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-sellerproductdelete"><span data-toggle="tooltip" title="{{ entry_sellerProductDeleteInfo}}">{{ entry_sellerProductDelete}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_sellerproductdelete" id="input-sellerproductdelete" class="form-control">*/
/*                     <option value="0" {% if marketplace_sellerproductdelete is defined and marketplace_sellerproductdelete == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_sellerproductdelete is defined and marketplace_sellerproductdelete  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*                <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-sellerproductshow"><span data-toggle="tooltip" title="{{ entry_sellerProductVisibleInfo}}">{{ entry_sellerProductVisible}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_sellerproductshow" id="input-sellerproductshow" class="form-control">*/
/*                     <option value="0" {% if marketplace_sellerproductshow is defined and marketplace_sellerproductshow == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_sellerproductshow is defined and marketplace_sellerproductshow  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*                <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-sellerbuyproduct"><span data-toggle="tooltip" title="{{ entry_sellerBuyProductInfo}}">{{ entry_sellerBuyProduct}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_sellerbuyproduct" id="input-sellerbuyproduct" class="form-control">*/
/*                     <option value="0" {% if marketplace_sellerbuyproduct is defined and marketplace_sellerbuyproduct == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_sellerbuyproduct is defined and marketplace_sellerbuyproduct  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*             </div>*/
/*             <!-- product tab -->*/
/*              <div class="tab-pane" id="tab-advncd">*/
/*                <!--  Upgrade---->*/
/*                <fieldset>*/
/*                  <legend>{{ entry_fs_restrcition_quant }}</legend>*/
/*                  */
/*                  <div class="form-group">*/
/*                    <label class="col-sm-3 control-label" for="marketplace_product_purchase_limit_qra_seller"><span data-toggle="tooltip" title="{{ help_qra_seller }}">{{ entry_qra_seller }}</span></label>*/
/*                    <div class="col-sm-9">*/
/*                      <select name="marketplace_product_purchase_limit_qra_seller" id="marketplace_product_purchase_limit_qra_seller" class="form-control quantonly">*/
/*                        <option value="0" {% if (marketplace_product_purchase_limit_qra_seller is defined and not marketplace_product_purchase_limit_qra_seller) %} {{ 'selected' }}{% endif %}>  {{ text_disabled }} </option>*/
/*                        <option value="1" {% if (marketplace_product_purchase_limit_qra_seller is defined and marketplace_product_purchase_limit_qra_seller) %} {{ 'selected' }}{% endif %}>  {{ text_enabled }} </option>*/
/*                      </select>*/
/*                    </div>*/
/*                  </div>*/
/* */
/*                    <div class="form-group">*/
/*                      <label class="col-sm-3 control-label" for="input-low-stock-info"><span data-toggle="tooltip" title="{{ help_product_purchase_limit }}">{{ entry_product_purchase_limit_based_on }}</span></label>*/
/*                      <div class="col-sm-9">*/
/*                        <select name="marketplace_product_purchase_limit_based_on" id="input-purchase-limit-based-on" class="form-control quantonly">*/
/*                          <option value="0" {% if (marketplace_product_purchase_limit_based_on is defined and not marketplace_product_purchase_limit_based_on) %} {{ 'selected' }}{% endif %}>  {{ text_product_quant }} </option>*/
/*                          <option value="1" {% if (marketplace_product_purchase_limit_based_on is defined and marketplace_product_purchase_limit_based_on) %} {{ 'selected' }}{% endif %}>  {{ text_product_num }} </option>*/
/*                        </select>*/
/*                      </div>*/
/*                    </div>*/
/* */
/*                    <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="input-low-stock-quantity"><span data-toggle="tooltip" title="{{ entry_product_purchase_limit }}">{{ entry_product_purchase_limit }}</span></label>*/
/*                     <div class="col-sm-9">*/
/*                       <input type="number" min="2" name="marketplace_product_purchase_limit" {% if (marketplace_product_purchase_limit is defined) %}value="{{ marketplace_product_purchase_limit }}"{% endif %} id ="input-low-stock-quantity" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                </fieldset>*/
/* */
/*                <fieldset>*/
/*                  <legend>{{ entry_fs_restrcition_price }}</legend>*/
/*           */
/*                   <div class="form-group">*/
/*                    <label class="col-sm-3 control-label" for="marketplace_product_purchase_limit_pra_seller"><span data-toggle="tooltip" title="{{ help_pra_seller }}">{{ entry_p_seller }}</span></label>*/
/*                    <div class="col-sm-9">*/
/*                      <select name="marketplace_product_purchase_limit_pra_seller" id="marketplace_product_purchase_limit_pra_seller" class="form-control quantonly">*/
/*                        <option value="0" {% if (marketplace_product_purchase_limit_pra_seller is defined and not marketplace_product_purchase_limit_pra_seller) %} {{ 'selected' }}{% endif %}>  {{ text_disabled }} </option>*/
/*                        <option value="1" {% if (marketplace_product_purchase_limit_pra_seller is defined and marketplace_product_purchase_limit_pra_seller) %} {{ 'selected' }}{% endif %}>  {{ text_enabled }} </option>*/
/*                      </select>*/
/*                    </div>*/
/*                  </div>*/
/* */
/*                    <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="marketplace_product_purchase_price_limit"><span data-toggle="tooltip" title="{{ help_pra_price }}">{{ entry_pra_price }}</span></label>*/
/*                     <div class="col-sm-9">*/
/*                       <input type="number" min="2" name="marketplace_product_purchase_price_limit" {% if (marketplace_product_purchase_price_limit is defined) %}value="{{ marketplace_product_purchase_price_limit }}"{% endif %} id ="marketplace_product_purchase_price_limit" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                </fieldset>*/
/*                 <fieldset>*/
/*                  <legend>{{ entry_pr_priority }}</legend>*/
/*                    */
/*                  <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="marketplace_product_purchase_limit_priority"><span data-toggle="tooltip" title="{{ help_pr_priority }}">{{ entry_pr_priority }}</span></label>*/
/*                   <div class="col-sm-9">*/
/*                     <select name="marketplace_product_purchase_limit_priority" id="marketplace_product_purchase_limit_priority" class="form-control quantonly">*/
/*                       <option value="0" {% if (marketplace_product_purchase_limit_priority is defined and not marketplace_product_purchase_limit_priority) %} {{ 'selected' }}{% endif %}>  {{ entry_fs_restrcition_quant }} </option>*/
/*                       <option value="1" {% if (marketplace_product_purchase_limit_priority is defined and marketplace_product_purchase_limit_priority) %} {{ 'selected' }}{% endif %}>  {{ entry_fs_restrcition_price }} </option>*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                  </fieldset>*/
/*                <fieldset>*/
/*                  <legend>{{ entry_scf }}</legend>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-marketplace_scf-status"><span data-toggle="tooltip" title="{{ entry_scf }}">{{ help_scf }}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_scf_status" id="input-marketplace_scf-status" class="form-control quantonly">*/
/*                     <option value="0" {% if (marketplace_scf_status is defined and not marketplace_scf_status) %} {{ 'selected' }}{% endif %}>  {{ text_disabled }} </option>*/
/*                     <option value="1" {% if (marketplace_scf_status is defined and marketplace_scf_status) %} {{ 'selected' }}{% endif %}> {{ text_enabled }} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div> </fieldset>*/
/*               <!-- <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-marketplace_scf-status"><span data-toggle="tooltip" title="{{ 'Allow Seller Layered Filter on Category page' }}">{{ "Seller Filter" }}</span></label>*/
/*                 <div class="col-sm-9">*/
/* */
/*                 </div>*/
/*               </div> -->*/
/*                 <!--  Upgrade---->*/
/*              </div>*/
/* */
/*             <!-- order tab -->*/
/*             <div class="tab-pane" id="tab-order">*/
/*              <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-seller-manage-order"><span data-toggle="tooltip" title="{{ entry_seller_manage_order_info}}">{{ entry_seller_manage_order}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_seller_manage_order" id="input-seller-manage-order" class="form-control">*/
/*                     <option value="0" {% if marketplace_seller_manage_order is defined and marketplace_seller_manage_order == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_seller_manage_order is defined and marketplace_seller_manage_order  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*              </div>*/
/*              <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-orderstatusinfo"><span data-toggle="tooltip" title="{{ wkentry_seller_order_statusinfo}}">{{ wkentry_seller_order_status}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_sellerorderstatus" id="input-orderstatusinfo" class="form-control">*/
/*                     <option value="0" {% if marketplace_sellerorderstatus is defined and marketplace_sellerorderstatus == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_sellerorderstatus is defined and marketplace_sellerorderstatus  %}{{ 'selected' }}{%endif %}>  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mailtosellerinfo"><span data-toggle="tooltip" title="{{ entry_mailtosellerinfo}}">{{ wkentry_mailtoseller}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mailtoseller" id="input-mailtosellerinfo" class="form-control">*/
/*                     <option value="0" {% if marketplace_mailtoseller is defined and marketplace_mailtoseller == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_mailtoseller is defined and marketplace_mailtoseller  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*                <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-orderstatusnotifyadmin"><span data-toggle="tooltip" title="{{ wkentry_seller_order_status_notify_admin_info}}">{{ wkentry_seller_order_status_notify_admin}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_adminnotify" id="input-orderstatusnotifyadmin" class="form-control">*/
/*                     <option value="0" {% if marketplace_adminnotify is defined and marketplace_adminnotify == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_adminnotify is defined and marketplace_adminnotify  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-availableorderstatusinfo"><span data-toggle="tooltip" title="{{ wkentry_seller_available_order_statusinfo}}">{{ wkentry_seller_available_order_status}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height:150px;overflow:auto">*/
/*                     {% if order_statuses is defined  and order_statuses %}*/
/*                       {% for key, order_status in order_statuses %}*/
/*                         <div class="checkbox available_order_status">*/
/*                           <label for="available_order_status_{{ order_status['order_status_id']}}">*/
/*                             <input type="checkbox" name="marketplace_available_order_status[]" value="{{ order_status['order_status_id']}}" id="available_order_status_{{ order_status['order_status_id']}}" {% if marketplace_available_order_status is defined and marketplace_available_order_status and order_status['order_status_id'] in marketplace_available_order_status %}{{ 'checked' }}{%endif %} />*/
/*                             {{ order_status['name']}}*/
/*                           </label>*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label">*/
/*                   <span data-toggle="tooltip" data-original-title="{{ wkentry_seller_order_status_sequenceinfo}}">*/
/*                     {{ wkentry_seller_order_status_sequence}}*/
/*                   </span>*/
/*                 </label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height:150px;overflow:auto">*/
/*                     <ul class="nav nav-pills nav-stacked" id="orderstatus">*/
/*                       {% if marketplace_order_status_sequence is defined and marketplace_order_status_sequence  %}*/
/*                       {% for key, value in marketplace_order_status_sequence %}*/
/*                           <li id='{{ "order_status_sequence_".value["order_status_id"]}}' >*/
/*                             <a style="cursor:grab">*/
/*                               <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                               <input type="hidden" name="marketplace_order_status_sequence[{{ value['order_status_id']}}][order_status_id]" value="{{ value['order_status_id']}}"/>*/
/*                               <input type="hidden" name="marketplace_order_status_sequence[{{ value['order_status_id']}}][name]" value="{{ value['name']}}" />*/
/*                               {{ value['name']}}*/
/*                             </a>*/
/*                           </li>*/
/*                         {% endfor %}*/
/*                       {% endif %}*/
/*                     </ul>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-admincustomercontactseller"><span data-toggle="tooltip" title="{{ entry_complete_order_statusinfo}}">{{ entry_complete_order_status}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_complete_order_status" id="input-admincustomercontactseller" class="form-control">*/
/*                     <option></option>*/
/*                     {% for order_status in order_statuses %}*/
/*                       <option value="{{ order_status['order_status_id']}}" {% if marketplace_complete_order_status is defined and marketplace_complete_order_status == order_status['order_status_id'] %}{{ "selected" }}{%endif %} >{{ order_status['name']}}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*                <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-cancelorderstatus"><span data-toggle="tooltip" title="{{ entry_cancel_order_statusinfo}}">{{ entry_cancel_order_status}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_cancel_order_status" id="input-cancelorderstatus" class="form-control">*/
/*                     <option></option>*/
/*                     {% for order_status in order_statuses %}*/
/*                       <option value="{{ order_status['order_status_id'] }}" {% if marketplace_cancel_order_status is defined and marketplace_cancel_order_status == order_status['order_status_id'] %}{{ 'selected' }}{%endif %} >{{ order_status['name'] }}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-admincustomercontactseller"><span data-toggle="tooltip" title="{{ entry_seller_shipping_methodinfo}}">{{ entry_seller_shipping_method}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm"  style="height:150px;overflow:auto">*/
/*                     {% for shipping_method in shipping_methods %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           <input name="marketplace_allowed_shipping_method[]" type="checkbox" value="{{ shipping_method['code'] ~ '.' ~ shipping_method['code'] }}" {% if marketplace_allowed_shipping_method is defined and shipping_method['code'] ~  '.' ~ shipping_method['code'] in marketplace_allowed_shipping_method %}{{ 'checked' }}{%endif %} />*/
/*                           {{ shipping_method['name']}}*/
/*                         </label>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                  <label class="col-sm-3 control-label" for="input-min-cart-value"><span data-toggle="tooltip" title="{{ entry_min_cart_value_info}}">{{ entry_min_cart_value}}</span></label>*/
/*                  <div class="col-sm-9">*/
/*                    <div class="input-group"><span class="input-group-addon mp-addon mp-addon">{{ currency_symbol }}</span>*/
/*                       <input type="number" min="0" name="marketplace_min_cart_value" {% if marketplace_min_cart_value is defined %} value="{{ marketplace_min_cart_value }}" {% endif %} id ="input-min-cart-value" class="form-control"/>*/
/*                    </div>*/
/*                  </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                  <label class="col-sm-3 control-label" for="input-product-quantity-restriction"><span data-toggle="tooltip" title="{{ entry_product_quantity_restriction_info}}">{{ entry_product_quantity_restriction}}</span></label>*/
/*                  <div class="col-sm-9">*/
/*                    <input type="number" min="0" name="marketplace_product_quantity_restriction" {% if marketplace_product_quantity_restriction is defined %} value="{{ marketplace_product_quantity_restriction }}" {% endif %} id ="input-product-quantity-restriction" class="form-control"/>*/
/*                  </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <!-- seo tab -->*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ entry_mpinfo}}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-useseo"><span data-toggle="tooltip" title="{{ entry_mpinfo}}">{{ entry_useseo}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_useseo" id="input-useseo" class="form-control">*/
/*                     <option value="0" {% if marketplace_useseo is defined and marketplace_useseo == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_useseo is defined and marketplace_useseo  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/* */
/*               <ul class="nav nav-tabs">*/
/*                 <!-- <li ><a href="#tab-seochild" data-toggle="tab">{{ tab_mpseo}}</a></li> -->*/
/*                 <li class="active"><a href="#tab-seoauto" data-toggle="tab">{{ tab_defaultseo}}</a></li>*/
/*                 <li ><a href="#tab-productseo" data-toggle="tab">{{ tab_productseo}}</a></li>*/
/*               </ul>*/
/* */
/*               <div class="tab-content">*/
/* */
/*                 <!-- <div class="tab-pane" id="tab-seochild">                </div> -->*/
/* */
/*                 <div class="tab-pane active" id="tab-seoauto">*/
/*                   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ entry_addseomoreinfo}}*/
/*                     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                   </div>*/
/* */
/*                   <table id="route" class="table table-striped table-bordered table-hover">*/
/*                     <thead>*/
/*                       <tr>*/
/*                         <td class="text-left">{{ entry_route}}</td>*/
/*                         <td class="text-left"><span data-toggle="tooltip" data-original-title="{{ entry_store_help }}">{{ entry_store }}</span></td>*/
/*                         <td></td>*/
/*                       </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                       {% set seoCount = 0 %}*/
/*                       {% if marketplace_SefUrlspath is defined and marketplace_SefUrlspath is iterable and marketplace_SefUrlspath %}*/
/*                         {% for key, wkSefUrls in marketplace_SefUrlspath %}*/
/*                           <tr id="tr-{{ seoCount }}">*/
/*                             <td class="text-left">*/
/*                               <select name="marketplace_SefUrlspath[{{ seoCount}}]" class="form-control">*/
/*                                 {% for path in paths %}*/
/*                                   {% if path == wkSefUrls %}*/
/*                                     <option value="{{ wkSefUrls }}" selected >  {{ wkSefUrls }} </option>*/
/*                                   {% else %}*/
/*                                     <option value="{{ path }}">  {{ path }} </option>*/
/*                                   {% endif %}*/
/*                                 {% endfor %}*/
/*                               </select>*/
/*                             </td>*/
/* */
/*                             <td class="text-left">*/
/*                               <input type="text" class="form-control" name="marketplace_SefUrlsvalue[{{ seoCount}}]" value="{{ marketplace_SefUrlsvalue[key]}}"/>*/
/*                             </td>*/
/* */
/*                             <td class="text-left"><button type="button" onclick="$('#tr-{{ seoCount}}').remove();" data-toggle="tooltip" title="{{ button_remove}}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                           </tr>*/
/*                           {% set seoCount = seoCount + 1 %}*/
/*                         {% endfor %}*/
/*                       {% endif %}*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                       <tr>*/
/*                         <td colspan="2"></td>*/
/*                         <td class="text-left"><button type="button" id="addSeo" data-toggle="tooltip" title="{{ entry_addmore}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                       </tr>*/
/*                     </tfoot>*/
/*                   </table>*/
/*                 </div>*/
/*                 <div id="tab-productseo" class="tab-pane">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">*/
/*                       <span data-toggle="tooltip" data-original-title="{{ entry_seo_seller_detailsinfo}}">*/
/*                         {{ entry_seo_seller_details}}*/
/*                       </span>*/
/*                     </label>*/
/*                     <div class="col-sm-9">*/
/*                       <select class="form-control" name="marketplace_product_seo_name">*/
/*                         <option value="sellername" {% if marketplace_product_seo_name is defined and marketplace_product_seo_name == 'sellername' %}{{ 'selected' }}{%endif %} >{{ entry_seo_seller_name}}</option>*/
/*                         <option value="companyname" {% if marketplace_product_seo_name is defined and marketplace_product_seo_name == 'companyname' %}{{ 'selected' }}{%endif %} >{{ entry_seo_company_name}}</option>*/
/*                         <option value="screenname" {% if marketplace_product_seo_name is defined and marketplace_product_seo_name == 'screenname' %}{{ 'selected' }}{%endif %} >{{ entry_seo_screen_name}}</option>*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">*/
/*                       <span data-toggle="tooltip" data-original-title="{{ entry_seo_display_formatinfo}}">*/
/*                         {{ entry_seo_display_format}}*/
/*                       </span>*/
/*                     </label>*/
/*                     <div class="col-sm-9">*/
/*                       <select class="form-control" name="marketplace_product_seo_format">*/
/*                         <option value="1" {% if marketplace_product_seo_format is defined and marketplace_product_seo_format == 1  %}{{ 'selected' }}{%endif %}>{{ entry_only_product}}</option>*/
/*                         <option value="2" {% if marketplace_product_seo_format is defined and marketplace_product_seo_format == 2  %}{{ 'selected' }}{%endif %}>{{ entry_seller_and_product}}</option>*/
/*                         <option value="3" {% if marketplace_product_seo_format is defined and marketplace_product_seo_format == 3  %}{{ 'selected' }}{%endif %}>{{ entry_product_and_seller}}</option>*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">*/
/*                       <span data-toggle="tooltip" data-original-title="{{ entry_seo_default_nameinfo}}">*/
/*                         {{ entry_seo_default_name}}*/
/*                       </span>*/
/*                     </label>*/
/*                     <div class="col-sm-9">*/
/*                       <input type="text" class="form-control" name="marketplace_product_seo_default_name" value="{% if marketplace_product_seo_default_name is defined and marketplace_product_seo_default_name %}{{ marketplace_product_seo_default_name }}{%endif %}" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">*/
/*                       <span data-toggle="tooltip" data-original-title="{{ entry_seo_default_name_productinfo}}">*/
/*                         {{ entry_seo_default_name_product}}*/
/*                       </span>*/
/*                     </label>*/
/*                     <div class="col-sm-9">*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           <input type="checkbox" name="marketplace_product_seo_product_name"  value="1" {% if marketplace_product_seo_product_name is defined and marketplace_product_seo_product_name %}{{ 'checked' }}{%endif %} />*/
/*                         </label>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">*/
/*                       <span data-toggle="tooltip" data-original-title="{{ entry_seo_add_page_extensioninfo}}">*/
/*                         {{ entry_seo_add_page_extension}}*/
/*                       </span>*/
/*                     </label>*/
/*                     <div class="col-sm-9">*/
/*                       <input type="text" class="form-control" name="marketplace_product_seo_page_ext" value="{% if marketplace_product_seo_page_ext is defined and marketplace_product_seo_page_ext %}{{ marketplace_product_seo_page_ext }}{%endif %}" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*             </div>*/
/* */
/* */
/*             <!-- sell tab -->*/
/*             <div class="tab-pane" id="tab-sell">*/
/* */
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ entry_sellinfo}}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/* */
/*               <ul class="nav nav-tabs">*/
/*                 <li class="active"><a href="#tab-sellgeneral" data-toggle="tab">{{ tab_general}}</a></li>*/
/*                 <li><a href="#tab-selltab" data-toggle="tab">{{ tab_tab}}</a></li>*/
/*               </ul>*/
/* */
/*               <div class="tab-content">*/
/* */
/*                 <div class="tab-pane active" id="tab-sellgeneral">*/
/* */
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">{{ wkentry_sellh}}</label>*/
/*                     <div class="col-sm-9">*/
/*                       {% for language in languages %}*/
/*                         <div class="input-group" style="margin-bottom:10px;"><span class="input-group-addon mp-addon"><img  src="language/{{ language['code']}}/{{ language['code']}}.png" title="{{ language['name']}}" /></span>*/
/*                           <input type="text" name="marketplace_sellheader[{{ language['language_id']}}]" placeholder="{{ entry_text}}" class="form-control" value="{{ marketplace_sellheader[language['language_id']] is defined ? marketplace_sellheader[language['language_id']] : ''}}" />*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">{{ wkentry_sellb}}</label>*/
/*                     <div class="col-sm-9">*/
/*                       {% for language in languages %}*/
/*                         <div class="input-group" style="margin-bottom:10px;"><span class="input-group-addon mp-addon"><img  src="language/{{ language['code']}}/{{ language['code']}}.png" title="{{ language['name']}}" /></span>*/
/*                           <input type="text" name="marketplace_sellbuttontitle[{{ language['language_id']}}]" placeholder="{{ entry_text}}" class="form-control" value="{{ marketplace_sellbuttontitle[language['language_id']] is defined ? marketplace_sellbuttontitle[language['language_id']] : ''}}" />*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="input-showpartners">{{ wkentry_show_partner}}</label>*/
/*                     <div class="col-sm-9">*/
/*                       <select name="marketplace_showpartners" id="input-showpartners" class="form-control">*/
/*                         <option value="0" {% if marketplace_showpartners is defined and marketplace_showpartners == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                         <option value="1" {% if marketplace_showpartners is defined and marketplace_showpartners  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="input-showproducts">{{ wkentry_show_products}}</label>*/
/*                     <div class="col-sm-9">*/
/*                       <select name="marketplace_showproducts" id="input-showproducts" class="form-control">*/
/*                         <option value="0" {% if marketplace_showproducts is defined and marketplace_showproducts == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                         <option value="1" {% if marketplace_showproducts is defined and marketplace_showproducts  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">*/
/*                       <span data-toggle="tooltip" data-original-title="{{ entry_partner_list_limit_info}}">*/
/*                         {{ entry_partner_list_limit}}*/
/*                       </span>*/
/*                     </label>*/
/*                     <div class="col-sm-9">*/
/*                       <input type="number" min="0" name="marketplace_seller_list_limit" {% if marketplace_seller_list_limit is defined %} value="{{ marketplace_seller_list_limit }}" {% endif %}  id="input-sellerlist" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">*/
/*                       <span data-toggle="tooltip" data-original-title="{{ entry_partner_product_list_limit_info}}">*/
/*                         {{ entry_partner_product_list_limit}}*/
/*                       </span>*/
/*                     </label>*/
/*                     <div class="col-sm-9">*/
/*                       <input type="number" min="0" name="marketplace_seller_product_list_limit" {% if marketplace_seller_product_list_limit is defined %} value="{{ marketplace_seller_product_list_limit }}" {% endif %}  id="input-sellerlist" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="tab-pane" id="tab-selltab">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-3">*/
/*                       <ul class="nav nav-pills nav-stacked" id="module">*/
/*                         {% if marketplace_tab['heading'] is defined %}*/
/*                           {#{{ ksort(marketplace_tab['heading']) }}*/
/*                           {{ ksort(marketplace_tab['description']) }}#}*/
/*                           {% for tabRow, tabtitle in marketplace_tab['heading']|sort %}*/
/*                           <li>*/
/*                             <a href="#tab-module{{ tabRow}}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-module{{ tabRow}}\']').parent().remove(); $('#tab-module{{ tabRow}}').remove(); $('#module a:first').tab('show');"></i> {{ tabtitle[config_language_id] is defined ? tabtitle[config_language_id] : tab_module ~ ' ' ~ tabRow}}</a>*/
/*                           </li>*/
/*                           {% endfor %}*/
/*                         {% endif %}*/
/*                         <li id="module-add"><a onclick="addModule();"><i class="fa fa-plus-circle"></i> {{ wkentry_add_tab}}</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-9">*/
/*                       <div class="tab-content">*/
/*                         {% if marketplace_tab['heading'] is defined %}*/
/*                         {% for tabRow, tabtitle in marketplace_tab['heading'] %}*/
/*                         <div class="tab-pane" id="tab-module{{ tabRow}}">*/
/*                           <ul class="nav nav-tabs" id="language{{ tabRow}}">*/
/*                             {% for language in languages %}*/
/*                             <li><a href="#tab-module{{ tabRow}}-language{{ language['language_id']}}" data-toggle="tab"><img  src="language/{{ language['code']}}/{{ language['code']}}.png" title="{{ language['name']}}" /> {{ language['name']}}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                           <div class="tab-content">*/
/*                             {% for language in languages %}*/
/*                             <div class="tab-pane" id="tab-module{{ tabRow}}-language{{ language['language_id']}}">*/
/*                               <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-heading{{ tabRow }}-language{{ language['language_id']}}">{{ text_tab_title}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <input type="text" name="marketplace_tab[heading][{{ tabRow}}][{{ language['language_id']}}]" placeholder="{{ text_tab_title}}" value="{{ tabtitle[language['language_id']] ? tabtitle[language['language_id']] : ''}}" class="form-control" id="input-heading{{ tabRow }}-language{{ language['language_id']}}" />*/
/*                                 </div>*/
/*                               </div>*/
/*                               <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-description{{ tabRow}}-language{{ language['language_id']}}">{{ wkentry_selld}}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <textarea name="marketplace_tab[description][{{ tabRow}}][{{ language['language_id']}}]" placeholder="{{ wkentry_selld}}" id="input-description{{ tabRow}}-language{{ language['language_id']}}" class="form-control summernote">{{ marketplace_tab['description'][tabRow][language['language_id']] ? marketplace_tab['description'][tabRow][language['language_id']] : ''}}</textarea>*/
/*                                 </div>*/
/*                               </div>*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <!-- profile tab -->*/
/*             <div class="tab-pane" id="tab-profile">*/
/* */
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_info_profile}}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ entry_alowed_profile_columnsinfo}}">{{ entry_alowed_profile_columns}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for value in profile_table %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           {% if marketplace_allowedprofilecolumn is defined and  marketplace_allowedprofilecolumn is iterable and value in marketplace_allowedprofilecolumn %}*/
/*                           <input type="checkbox" name="marketplace_allowedprofilecolumn[{{ value}}]" value="{{ value}}" checked="checked" />*/
/*                           {% else %}*/
/*                            <input type="checkbox" name="marketplace_allowedprofilecolumn[{{ value}}]" value="{{ value}}" />*/
/*                           {% endif %}*/
/*                           {{ value|replace({'_': " "})}}*/
/*                         </label>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                   <a class="selectAll">{{ entry_selectall}}</a> &nbsp;&nbsp; <a class="deselectAll">{{ entry_deselectall}}</a>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ entry_allowed_public_profile_columnsinfo}}">{{ entry_allowed_public_profile_columns}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for key, option in publicSellerProfile %}*/
/*                       <div class="checkbox">*/
/*                         <label>*/
/*                           <input type="checkbox" name="marketplace_allowed_public_seller_profile[{{ key }}]" value="{{ key }}" {% if marketplace_allowed_public_seller_profile is defined and key in marketplace_allowed_public_seller_profile %}{{ 'checked' }}{%endif %} />*/
/*                                 {{ option }}*/
/*                         </label>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                   <a class="selectAll">{{ entry_selectall}}</a> &nbsp;&nbsp; <a class="deselectAll">{{ entry_deselectall}}</a>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                   <label class="col-sm-3 control-label">*/
/*                     {{ entry_seller_email}}*/
/*                   </label>*/
/*                   <div class="col-sm-9">*/
/*                     <select class="form-control" name="marketplace_profile_email">*/
/*                       <option value="0" {% if marketplace_profile_email is defined and marketplace_profile_email == 0  %}{{ 'selected' }}{%endif %} >{{ text_disabled }}</option>*/
/*                       <option value="1" {% if marketplace_profile_email is defined and marketplace_profile_email  %}{{ 'selected' }}{%endif %}  >{{ text_enabled }}</option>*/
/*                     </select>*/
/*                   </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                   <label class="col-sm-3 control-label">*/
/*                     {{ entry_seller_telephone}}*/
/*                   </label>*/
/*                   <div class="col-sm-9">*/
/*                     <select class="form-control" name="marketplace_profile_telephone">*/
/*                       <option value="0" {% if marketplace_profile_telephone is defined and marketplace_profile_telephone == 0  %}{{ 'selected' }}{%endif %} >{{ text_disabled }}</option>*/
/*                       <option value="1" {% if marketplace_profile_telephone is defined and marketplace_profile_telephone  %}{{ 'selected' }}{%endif %} >{{ text_enabled }}</option>*/
/*                     </select>*/
/*                   </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-review-only-order"><span data-toggle="tooltip" title="{{ entry_review_only_order_info}}">{{ entry_review_only_order}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_review_only_order" id="input-review-only-order" class="form-control">*/
/*                     <option value="0" {% if marketplace_review_only_order is defined and marketplace_review_only_order == 0  %}{{ 'selected' }}{%endif %}>  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_review_only_order is defined and marketplace_review_only_order  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-seller-info-hide"><span data-toggle="tooltip" title="{{ entry_seller_info_hide_info}}">{{ entry_seller_info_hide}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_seller_info_hide" id="input-seller-info-hide" class="form-control">*/
/*                     <option value="0" {% if marketplace_seller_info_hide is defined and marketplace_seller_info_hide == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                     <option value="1" {% if marketplace_seller_info_hide is defined and marketplace_seller_info_hide  %}{{ 'selected' }}{%endif %}>  {{ text_enabled}} </option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*             </div>*/
/* */
/*             <!-- module configuration tab -->*/
/* */
/*             <div class="tab-pane" id="tab-mod-config">*/
/*               <ul class="nav nav-tabs">*/
/*                 <li class="active">*/
/*                   <a href="#mod-account" data-toggle="tab">*/
/*                     {{ tab_mod_config_account}}*/
/*                   </a>*/
/*                 </li>*/
/*                 <li>*/
/*                   <a href="#mod-product" data-toggle="tab">*/
/*                     {{ tab_mod_config_product}}*/
/*                   </a>*/
/*                 </li>*/
/*               </ul>*/
/*                 <div class="tab-content">*/
/*                   <div id="mod-account" class="tab-pane active">*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label">*/
/*                         <span data-toggle="tooltip" data-original-title="{{ entry_allowed_account_menuinfo}}">*/
/*                           {{ entry_allowed_account_menu}}*/
/*                         </span>*/
/*                       </label>*/
/*                       <div class="col-sm-9">*/
/*                         <div class="well well-sm" style="height:150px;overflow:auto" >*/
/*                           {% for key, value in account_menu %}*/
/*                             <div class="checkbox">*/
/*                               <label>*/
/*                                 <input type="checkbox" name="marketplace_allowed_account_menu[{{ key}}]" value="{{ key}}" {% if marketplace_allowed_account_menu is defined and key in marketplace_allowed_account_menu %}{{ 'checked' }}{%endif %} />*/
/*                                 {{ value}}*/
/*                               </label>*/
/*                             </div>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                         <a class="selectAll">{{ entry_selectall}}</a> &nbsp;&nbsp; <a class="deselectAll">{{ entry_deselectall}}</a>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label">*/
/*                         <span data-toggle="tooltip" data-original-title="{{ entry_account_menu_sequenceinfo}}">*/
/*                           {{ entry_account_menu_sequence }}*/
/*                         </span>*/
/*                       </label>*/
/*                       <div class="col-sm-9">*/
/*                         <div class="well">*/
/*                           <ul class="nav nav-pills nav-stacked" id="acct_menu_sortable">*/
/*                             {% if marketplace_account_menu_sequence is not defined %}*/
/*                               {% for key, value in account_menu %}*/
/*                                 <li>*/
/*                                   <a style="cursor:grab">*/
/*                                     <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                                     <input type="hidden" name="marketplace_account_menu_sequence[{{ key }}]" value="{{ key}}" />*/
/*                                     {{ value}}*/
/*                                   </a>*/
/*                                 </li>*/
/*                               {% endfor %}*/
/*                             {% else %}*/
/*                               {% for key, sequence in marketplace_account_menu_sequence %}*/
/*                                 {% if sequence in account_menu %}*/
/*                                   <li>*/
/*                                     <a style="cursor:grab">*/
/*                                       <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                                       <input type="hidden" name="marketplace_account_menu_sequence[{{ key }}]" value="{{ account_menu[ key ]}}"/>*/
/*                                       {{ account_menu[ key ]}}*/
/*                                     </a>*/
/*                                   </li>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/* */
/*                               {% for key, menu in account_menu %}*/
/*                                 {% if menu not in marketplace_account_menu_sequence %}*/
/*                                   <li>*/
/*                                     <a style="cursor:grab">*/
/*                                       <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>*/
/*                                       <input type="hidden" name="marketplace_account_menu_sequence[{{ key}}]" value="{{ account_menu[ key ]}}"/>*/
/*                                       {{ account_menu[ key ]}}*/
/*                                     </a>*/
/*                                   </li>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/* */
/*                             {% endif %}*/
/*                           </ul>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div id="mod-product" class="tab-pane">*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label" ><span data-toggle="tooltip" title="{{ entry_product_name_displayinfo}}">{{ entry_product_name_display}}</span></label>*/
/*                       <div class="col-sm-9">*/
/*                         <select name="marketplace_product_name_display" class="form-control">*/
/*                           <option value="sn" {% if marketplace_product_name_display is defined and marketplace_product_name_display == 'sn'  %}{{ 'selected' }}{%endif %} >{{ "Seller Name"}}</option>*/
/*                           <option value="cn" {% if marketplace_product_name_display is defined and marketplace_product_name_display == 'cn'  %}{{ 'selected' }}{%endif %}>{{ "Shop name"}}</option>*/
/*                           <option value="sncn" {% if marketplace_product_name_display is defined and marketplace_product_name_display == 'sncn'  %}{{ 'selected' }}{%endif %}>{{ "Seller and Shop name"}}</option>*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ entry_product_show_seller_productinfo}}">{{ entry_product_show_seller_product}}</span></label>*/
/*                       <div class="col-sm-9">*/
/*                         <select name="marketplace_product_show_seller_product" class="form-control">*/
/*                           <option value="1" {% if marketplace_product_show_seller_product is defined and marketplace_product_show_seller_product  %}{{ 'selected' }}{%endif %}>{{ text_enabled}} </option>*/
/*                           <option value="0" {% if marketplace_product_show_seller_product is defined and marketplace_product_show_seller_product == 0  %}{{ 'selected' }}{%endif %}  >{{ text_disabled}} </option>*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label"><span data-toggle="tooltip" title="{{ entry_product_image_displayinfo}}">{{ entry_product_image_display}}</span></label>*/
/*                       <div class="col-sm-9">*/
/*                         <select name="marketplace_product_image_display" id="input-mail_partner_request" class="form-control">*/
/*                           <option value="avatar" {% if marketplace_product_image_display is defined and marketplace_product_image_display == 'avatar'  %}{{ 'selected' }}{%endif %}  >{{ "Avatar"}} </option>*/
/*                           <option value="companylogo" {% if marketplace_product_image_display is defined and marketplace_product_image_display == 'companylogo'  %}{{ 'selected' }}{%endif %}  >{{ "Company Logo"}} </option>*/
/*                           <option value="companybanner" {% if marketplace_product_image_display is defined and marketplace_product_image_display == 'companybanner'  %}{{ 'selected' }}{%endif %} >{{ "Company banner"}} </option>*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label" for="input-seller-info-by-module"><span data-toggle="tooltip" title="{{ entry_seller_info_by_module_info}}">{{ entry_seller_info_by_module}}</span></label>*/
/*                       <div class="col-sm-9">*/
/*                         <select name="marketplace_seller_info_by_module" id="input-seller-info-by-module" class="form-control">*/
/*                           <option value="0" {% if marketplace_seller_info_by_module is defined and marketplace_seller_info_by_module == 0  %}{{ 'selected' }}{%endif %} >  {{ text_disabled}} </option>*/
/*                           <option value="1" {% if marketplace_seller_info_by_module is defined and marketplace_seller_info_by_module  %}{{ 'selected' }}{%endif %} >  {{ text_enabled}} </option>*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- mail tab -->*/
/*             <div class="tab-pane" id="tab-mail">*/
/* */
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_info_mail}}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label">*/
/*                   <span data-toggle="tooltip" data-original-title="{{ entry_mail_keywords }}" >*/
/*                     {{ entry_mail_keywords }}*/
/*                   </span>*/
/*                 </label>*/
/*                 <div class="col-sm-9">*/
/*                   <textarea class="form-control" name="marketplace_mail_keywords" style="height:150px">{% if marketplace_mail_keywords is defined  %}{{ marketplace_mail_keywords }}{% else %}{{'{order}'}}*/
/* {{ '{message}' }}*/
/* {{ '{subject}' }}*/
/* {{ '{commission}' }}*/
/* {{ '{product_name}' }}*/
/* {{ '{product_quantity}' }}*/
/* {{ '{customer_name}' }}*/
/* {{ '{seller_name}' }}*/
/* {{ '{config_logo}' }}*/
/* {{ '{config_icon}' }}*/
/* {{ '{config_currency}' }}*/
/* {{ '{config_image}' }}*/
/* {{ '{config_name}' }}*/
/* {{ '{config_owner}' }}*/
/* {{ '{config_address}' }}*/
/* {{ '{config_geocode}' }}*/
/* {{ '{config_email}' }}*/
/* {{ '{config_telephone}' }}*/
/* {{ '{seller_id}' }}*/
/* {% endif %}</textarea>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_partner_request"><span data-toggle="tooltip" title="{{ entry_mail_partner_request_info}}">{{ entry_mail_partner_request}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_partner_request" id="input-mail_partner_request" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_partner_request == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_partner_admin"><span data-toggle="tooltip" title="{{ entry_mail_partner_admin_info}}">{{ entry_mail_partner_admin}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_partner_admin" id="input-mail_partner_admin" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_partner_admin == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_partner_approve"><span data-toggle="tooltip" title="{{ entry_mail_partner_approve_info}}">{{ entry_mail_partner_approve}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_partner_approve" id="input-mail_partner_approve" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_partner_approve == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_product_request"><span data-toggle="tooltip" title="{{ entry_mail_product_request_info}}">{{ entry_mail_product_request}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_product_request" id="input-mail_product_request" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_product_request == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_product_admin"><span data-toggle="tooltip" title="{{ entry_mail_product_admin_info}}">{{ entry_mail_product_admin}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_product_admin" id="input-mail_product_admin" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_product_admin == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_product_approve"><span data-toggle="tooltip" title="{{ entry_mail_product_approve_info}}">{{ entry_mail_product_approve}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_product_approve" id="input-mail_product_approve" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_product_approve == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_transaction"><span data-toggle="tooltip" title="{{ entry_mail_transaction_info}}">{{ entry_mail_transaction}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_transaction" id="input-mail_transaction" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_transaction == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_order"><span data-toggle="tooltip" title="{{ entry_mail_order_info}}">{{ entry_mail_order}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_order" id="input-mail_order" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_order == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*               <label class="col-sm-3 control-label" for="input-marketplace_mail_order_status_change"><span data-toggle="tooltip" title="{{ entry_order_status_change_mail_info}}">{{ entry_order_status_change_mail }}</span></label>*/
/*               <div class="col-sm-9">*/
/*                 <select name="marketplace_mail_order_status_change" id="input-marketplace_mail_order_status_change" class="form-control">*/
/*                   <option value=""></option>*/
/*                   {% if mails is defined and mails %}*/
/*                   {% for mail in mails %}*/
/*                     <option value="{{ mail['id']}}" {% if marketplace_mail_order_status_change == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                   {% endfor %}*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_cutomer_to_seller"><span data-toggle="tooltip" title="{{ entry_mail_cutomer_to_seller_info}}">{{ entry_mail_cutomer_to_seller}}</span></label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_cutomer_to_seller" id="input-mail_cutomer_to_seller" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_cutomer_to_seller == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_seller_to_admin"><span data-toggle="tooltip" title="{{ entry_mail_seller_to_admin_info}}">{{ entry_mail_seller_to_admin}}</label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_seller_to_admin" id="input-mail_seller_to_admin" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_seller_to_admin == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_admin_on_edit">*/
/*                   <span data-toggle="tooltip" data-original-title="{{ entry_mail_edit_product_admininfo}}">*/
/*                     {{ entry_mail_edit_product_admin}}*/
/*                   </span>*/
/*                 </label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_admin_on_edit" id="input-mail_admin_on_edit" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_admin_on_edit == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_seller_on_edit">*/
/*                   <span data-toggle="tooltip" data-original-title="{{ entry_mail_edit_product_sellerinfo}}">*/
/*                     {{ entry_mail_edit_product_seller}}*/
/*                   </span>*/
/*                 </label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_seller_on_edit" id="input-mail_seller_on_edit" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_seller_on_edit == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-3 control-label" for="input-mail_seller_on_edit">*/
/*                   <span data-toggle="tooltip" data-original-title="{{ entry_mail_low_stock_sellerinfo}}">*/
/*                     {{ entry_mail_low_stock_seller}}*/
/*                   </span>*/
/*                 </label>*/
/*                 <div class="col-sm-9">*/
/*                   <select name="marketplace_mail_seller_low_stock" id="input-mail_seller_on_edit" class="form-control">*/
/*                     <option value=""></option>*/
/*                     {% if mails is defined and mails %}*/
/*                     {% for mail in mails %}*/
/*                       <option value="{{ mail['id']}}" {% if marketplace_mail_seller_low_stock == mail['id'] %}{{ 'selected'}}{%endif %}>  {{ mail['name']}} </option>*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <!-- paypal tab -->*/
/*             <div class="tab-pane" id="tab-paypal">*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-live-demo">{{ entry_mode}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="marketplace_paypal_mode" id="input-live-demo" class="form-control">*/
/*                     {% if marketplace_paypal_mode is defined and marketplace_paypal_mode %}*/
/*                     <option value="1"  selected="selected">{{ wkentry_yes}}</option>*/
/*                     <option value="0" >{{ wkentry_no}}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ wkentry_yes}}</option>*/
/*                     <option value="0" selected="selected">{{ wkentry_no}}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="entry-username">{{ entry_username}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="marketplace_paypal_user" {% if marketplace_paypal_user is defined %} value="{{ marketplace_paypal_user }}" {% endif %} placeholder="{{ entry_username}}" id="entry-username" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="entry-password">{{ entry_password}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="marketplace_paypal_password" {% if marketplace_paypal_password is defined %} value="{{ marketplace_paypal_password }}" {% endif %} placeholder="{{ entry_password}}" id="entry-password" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="entry-signature">{{ entry_signature}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="marketplace_paypal_signature" {% if marketplace_paypal_signature is defined %} value="{{ marketplace_paypal_signature }}" {% endif %} placeholder="{{ entry_signature}}" id="entry-signature" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="entry-appid">{{ entry_appid}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="marketplace_paypal_appid" {% if marketplace_paypal_appid is defined %} value="{{ marketplace_paypal_appid }}" {% endif %} placeholder="{{ entry_appid}}" id="entry-appid" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="entry-email-subject">{{ entry_email_subject}}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="marketplace_paypal_email_subject" {% if marketplace_paypal_email_subject is defined %} value="{{ marketplace_paypal_email_subject }}" {% endif %} placeholder="{{ entry_email_subject}}" id="entry-email-subject" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <!-- paypal tab end-->*/
/* */
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript"><!--*/
/* */
/* $('.available_order_status > label > input[type="checkbox"]').on('click', function(){*/
/*   order_status_id = $(this).val();*/
/*   order_status_name = $.trim($(this).parent('label').text());*/
/*   if($(this).is(':checked')) {*/
/*     html = '';*/
/*     html += '<li id="order_status_sequence_'+order_status_id+'"><a style="cursor:grab"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="hidden" name="marketplace_order_status_sequence['+order_status_id+'][order_status_id]" value="'+order_status_id+'"/><input type="hidden" name="marketplace_order_status_sequence['+order_status_id+'][name]" value="'+order_status_name+'"/>'+order_status_name+'</a></li>';*/
/* */
/*     $('#orderstatus').append(html);*/
/*   } else {*/
/*     $('#order_status_sequence_'+order_status_id).remove();*/
/*   }*/
/* });*/
/* */
/* $('#default-image').on('click',function(){*/
/*   $(this).prevAll('input[type="file"]').trigger('click');*/
/* });*/
/* */
/* $('#removeimg').on('click',function(){*/
/*   confirmation = confirm("Are you sure?");*/
/*   if(confirmation) {*/
/*     $('#default-image-view').remove();*/
/*     $('input[name="marketplace_default_image_name"]').val('');*/
/*   }*/
/* });*/
/* */
/* $(function(){*/
/*   $("input[name='marketplace_default_image']").on("change", function()*/
/*    {*/
/*     $.this = this;*/
/*        var files = !!this.files ? this.files : [];*/
/*        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support*/
/* */
/*        if (/^image/.test( files[0].type)){ // only image file*/
/*            var reader = new FileReader(); // instance of the FileReader*/
/*            reader.readAsDataURL(files[0]); // read the local file*/
/* */
/*            reader.onloadend = function(){ // set image to display only*/
/*               $($.this).nextAll('#default-image').html();*/
/*               $($.this).nextAll('#default-image').html('<img src="" id="default-image-view" height="90px" width="90px" />');*/
/*                src = this.result;*/
/*                $($.this).nextAll('div').children('img').attr('src',src);*/
/*            }*/
/*        }*/
/*    });*/
/* })*/
/* */
/* $('input[name="marketplace_divide_shipping"]').on('change',function(){*/
/*   $('.alert').remove();*/
/*   if($(this).is(':checked')){*/
/*     $('.panel').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>{{ text_divide_shipping}}<button class="close" data-dismiss="alert" type="button">×</button></div>');*/
/*     $('html, body').animate({scrollTop:0},'slow');*/
/*   }*/
/* })*/
/* */
/* //To print tab name from current used language's text box*/
/* $("body").on("keyup",".row .tab-content input[type='text']",function(){*/
/*   tabId = $(this).attr('id').split('-')[1].replace('heading','');*/
/*   html = '<i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-module'+tabId+'\\\']\').parent().remove(); $(\'#tab-module'+tabId+'\').remove(); $(\'#module a:first\').tab(\'show\');"></i> ';*/
/*   html += $(this).val();*/
/*   $('a[href=#tab-module'+tabId+']').html(html);*/
/* });*/
/* */
/* $('#module li:first-child a').tab('show');*/
/*   {% if marketplace_tab['heading'] is defined %}*/
/*     {% for key, module in marketplace_tab['heading'] %}*/
/*       $('#language{{ key}} li:first-child a').tab('show');*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* */
/* var module_row = {{ marketplace_tab['heading'] is defined ? (max(marketplace_tab['heading']|keys)  + 1) : 0}};*/
/* */
/* function addModule() {*/
/*   var token = Math.random().toString(36).substr(2);*/
/* */
/*   html  = '<div class="tab-pane" id="tab-module' + token + '">';*/
/*   html += '  <ul class="nav nav-tabs" id="language' + token + '">';*/
/*     {% for language in languages %}*/
/*     html += '    <li><a href="#tab-module' + token + '-language{{ language['language_id']}}" data-toggle="tab"><img  src="language/{{ language['code']}}/{{ language['code']}}.png" title="{{ language['name']}}" /> {{ language['name']}}</a></li>';*/
/*     {% endfor %}*/
/*   html += '  </ul>';*/
/* */
/*   html += '  <div class="tab-content">';*/
/* */
/*   {% for language in languages %}*/
/*   html += '    <div class="tab-pane" id="tab-module' + token + '-language{{ language['language_id']}}">';*/
/*   html += '      <div class="form-group">';*/
/*   html += '        <label class="col-sm-3 control-label" for="input-heading' + token + '-language{{ language['language_id']}}">{{ text_tab_title}}</label>';*/
/*   html += '        <div class="col-sm-9"><input type="text" name="marketplace_tab[heading]['+module_row+'][{{ language['language_id']}}]" placeholder="{{ text_tab_title}}" id="input-heading' + token + '-language{{ language['language_id']}}" value="" class="form-control"/></div>';*/
/*   html += '      </div>';*/
/*   html += '      <div class="form-group">';*/
/*   html += '        <label class="col-sm-3 control-label" for="input-description' + token + '-language{{ language['language_id']}}">{{ wkentry_selld}}</label>';*/
/*   html += '        <div class="col-sm-9"><textarea name="marketplace_tab[description]['+module_row+'][{{ language['language_id']}}]" placeholder="{{ wkentry_selld}}" id="input-description' + token + '-language{{ language['language_id']}}"  class="form-control summernote"></textarea></div>';*/
/*   html += '      </div>';*/
/*   html += '    </div>';*/
/*   {% endfor %}*/
/* */
/*   html += '  </div>';*/
/*   html += '</div>';*/
/* */
/*   $('.tab-content:first-child').prepend(html);*/
/* */
/*   $('button[data-event=\'showImageDialog\']').attr('data-toggle', 'image').removeAttr('data-event');*/
/* */
/*   $('#module-add').before('<li><a href="#tab-module' + token + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-module' + token + '\\\']\').parent().remove(); $(\'#tab-module' + token + '\').remove(); $(\'#module a:first\').tab(\'show\');"></i> {{ tab_module}} ' + module_row + '</a></li>');*/
/* */
/*   $('#module a[href=\'#tab-module' + token + '\']').tab('show');*/
/* */
/*   $('#language' + token + ' li:first-child a').tab('show');*/
/* */
/*   dyanmicSummernote();*/
/* */
/*   module_row++;*/
/* }*/
/* //--></script>*/
/* */
/* <script type="text/javascript"><!--*/
/* seoCount = '{{ seoCount}}';*/
/* $('#addSeo').on('click',function(){*/
/*   html = '<tr id="tr-'+seoCount+'">';*/
/*   html +=   '<td class="text-left">';*/
/*   html +=     '<select name="marketplace_SefUrlspath['+seoCount+']" class="form-control">';*/
/*   html +=          '{% if paths is defined and paths %}';*/
/*   html +=            '{% for path in paths %}';*/
/*   html +=               '<option value="{{ path}}">  {{ path}} </option>';*/
/*   html +=             '{% endfor %}';*/
/*   html +=           '{% endif %}';*/
/*   html +=      '</select>';*/
/*   html +=   '</td><td class="text-left">';*/
/*   html +=      ' <input type="text" name="marketplace_SefUrlsvalue['+seoCount+']" class="form-control" value=""/>';*/
/*   html +=   '</td><td class="text-left">';*/
/*   html +=      '<button type="button" onclick="$(\'#tr-'+seoCount+'\').remove();" data-toggle="tooltip" title="{{ button_remove}}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';*/
/*   html +=   '</td>';*/
/*   html += '</tr>';*/
/* */
/*   $('#route tbody').append(html);*/
/*   seoCount++;*/
/* });*/
/* */
/* $('.selectAll').on('click',function(){*/
/*   $(this).prev('div').find('input[type="checkbox"]').prop('checked',true);*/
/* })*/
/* */
/* $('.deselectAll').on('click',function(){*/
/*   $(this).prevAll('div').find('input[type="checkbox"]').prop('checked',false);*/
/* })*/
/* </script>*/
/* <script src="view/javascript/jquery-ui/jquery-sortable-min.js"></script>*/
/* <script type="text/javascript"><!--*/
/* $(function() {*/
/*   $( "#sortable" ).sortable();*/
/*   $( "#sortable" ).disableSelection();*/
/*   $( "#orderstatus" ).sortable();*/
/*   $( "#orderstatus" ).disableSelection();*/
/*   $( "#acct_menu_sortable" ).sortable();*/
/*   $( "#acct_menu_sortable" ).disableSelection();*/
/* });*/
/* //--></script>*/
/* <script>*/
/*   // Allowed Seller Category*/
/*   var allowed_categories = [];*/
/*   $('input[name = \'category\']').on('click', function(){*/
/* */
/*     allowed_categories = [];*/
/*     $('.allowed_categories').each(function(){*/
/* */
/*       allowed_categories.push($(this).val());*/
/* */
/*     });*/
/*   });*/
/*   $('input[name=\'category\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=extension/module/marketplace/autocomplete&user_token={{ user_token}}&filter_name=' +  encodeURIComponent(request),*/
/*         type: 'post',*/
/*         dataType: 'json',*/
/*         data: {allowed_categories},*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['name'],*/
/*               value: item['category_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     'select': function(item) {*/
/*       $('input[name=\'category\']').val('');*/
/* */
/*       $('#allowed-category' + item['value']).remove();*/
/* */
/*       $('#allowed-category').append('<div id="allowed-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="marketplace_allowed_categories[' +item['value'] +']" value="' + item['label'] + '" /><input class="allowed_categories" type="hidden" value="' + item['value'] + '" /></div>');*/
/*     }*/
/*   });*/
/*   $('#allowed-category').delegate('.fa-minus-circle', 'click', function() {*/
/*     $(this).parent().remove();*/
/*   });*/
/* </script>*/
/* */
/* <script type="text/javascript">*/
/*   $('#input-marketplace_store').on('change',function(){*/
/*     location = "index.php?route=extension/module/marketplace&user_token={{ user_token}}&store_id="+$(this).val();*/
/*   });*/
/* </script>*/
/* */
/* {{ footer}}*/
/* <script src="view/javascript/summernote/webkul_summernote.js"></script>*/
/* */
