<?php

/* sale/order_info.twig */
class __TwigTemplate_69b2fe2c52b89c41d137035941ee27457c8970bd67afea746757dd8a9008fdaf extends Twig_Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["invoice"]) ? $context["invoice"] : null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_invoice_print"]) ? $context["button_invoice_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a> <a href=\"";
        echo (isset($context["shipping"]) ? $context["shipping"] : null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_shipping_print"]) ? $context["button_shipping_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></a> <a href=\"";
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
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
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 19
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 24
        echo (isset($context["text_store"]) ? $context["text_store"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 25
        echo (isset($context["store_url"]) ? $context["store_url"] : null);
        echo "\" target=\"_blank\">";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "</a></td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 28
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 29
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 32
        echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-credit-card fa-fw\"></i></button></td>
                <td>";
        // line 33
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo "</td>
              </tr>
            ";
        // line 35
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 36
            echo "            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
            // line 37
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-truck fa-fw\"></i></button></td>
              <td>";
            // line 38
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 41
        echo "              </tbody>
            
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 49
        echo (isset($context["text_customer_detail"]) ? $context["text_customer_detail"] : null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tr>
              <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 53
        echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-user fa-fw\"></i></button></td>
              <td>";
        // line 54
        if ((isset($context["customer"]) ? $context["customer"] : null)) {
            echo " <a href=\"";
            echo (isset($context["customer"]) ? $context["customer"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "</a> ";
        } else {
            // line 55
            echo "                ";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "
                ";
        }
        // line 56
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 59
        echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-group fa-fw\"></i></button></td>
              <td>";
        // line 60
        echo (isset($context["customer_group"]) ? $context["customer_group"] : null);
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 63
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-envelope-o fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 64
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 67
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-phone fa-fw\"></i></button></td>
              <td>";
        // line 68
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-cog\"></i> ";
        // line 76
        echo (isset($context["text_option"]) ? $context["text_option"] : null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td>";
        // line 81
        echo (isset($context["text_invoice"]) ? $context["text_invoice"] : null);
        echo "</td>
                <td id=\"invoice\" class=\"text-right\">";
        // line 82
        echo (isset($context["invoice_no"]) ? $context["invoice_no"] : null);
        echo "</td>
                <td style=\"width: 1%;\" class=\"text-center\">";
        // line 83
        if ( !(isset($context["invoice_no"]) ? $context["invoice_no"] : null)) {
            // line 84
            echo "                  <button id=\"button-invoice\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_generate"]) ? $context["button_generate"] : null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>
                  ";
        } else {
            // line 86
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                  ";
        }
        // line 87
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 90
        echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 91
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 92
        if (((isset($context["customer"]) ? $context["customer"] : null) && (isset($context["reward"]) ? $context["reward"] : null))) {
            // line 93
            echo "                  ";
            if ( !(isset($context["reward_total"]) ? $context["reward_total"] : null)) {
                // line 94
                echo "                  <button id=\"button-reward-add\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
            } else {
                // line 96
                echo "                  <button id=\"button-reward-remove\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reward_remove"]) ? $context["button_reward_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                  ";
            }
            // line 98
            echo "                  ";
        } else {
            // line 99
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 100
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 103
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "
                  ";
        // line 104
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 105
            echo "                  (<a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["affiliate_firstname"]) ? $context["affiliate_firstname"] : null);
            echo " ";
            echo (isset($context["affiliate_lastname"]) ? $context["affiliate_lastname"] : null);
            echo "</a>)
                  ";
        }
        // line 106
        echo "</td>
                ";
        // line 107
        if ((isset($context["mta_status"]) ? $context["mta_status"] : null)) {
            echo "<td class=\"text-right\">";
            echo ((array_key_exists("commission", $context)) ? (_twig_default_filter((isset($context["commission"]) ? $context["commission"] : null), "")) : (""));
            echo "</td>";
        } else {
            echo "<td  class=\"text-right\">";
            echo (isset($context["commission"]) ? $context["commission"] : null);
            echo " </td>";
        }
        // line 108
        echo "                <td class=\"text-center\">";
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 109
            echo "                  ";
            if ( !(isset($context["commission_total"]) ? $context["commission_total"] : null)) {
                // line 110
                echo "                  <button id=\"button-commission-add\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
            } else {
                // line 112
                echo "                  <button id=\"button-commission-remove\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                  ";
            }
            // line 114
            echo "                  ";
        } else {
            // line 115
            echo "                  <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 116
        echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    ";
        // line 124
        if ((isset($context["customer"]) ? $context["customer"] : null)) {
            // line 125
            echo "    <div class=\"panel panel-default toastguo-custom\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
            // line 127
            echo (isset($context["text_this_month_cost"]) ? $context["text_this_month_cost"] : null);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
            // line 133
            echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
            echo "</td>
              ";
            // line 134
            if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
                // line 135
                echo "              <td style=\"width: 50%;\" class=\"text-left\">";
                echo (isset($context["text_this_month_cost"]) ? $context["text_this_month_cost"] : null);
                echo "</td>
              ";
            }
            // line 136
            echo " 
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
            // line 141
            if ((isset($context["customer"]) ? $context["customer"] : null)) {
                echo " <a href=\"";
                echo (isset($context["customer"]) ? $context["customer"] : null);
                echo "\" target=\"_blank\">";
                echo (isset($context["firstname"]) ? $context["firstname"] : null);
                echo " ";
                echo (isset($context["lastname"]) ? $context["lastname"] : null);
                echo "</a> ";
            } else {
                // line 142
                echo "                ";
                echo (isset($context["firstname"]) ? $context["firstname"] : null);
                echo " ";
                echo (isset($context["lastname"]) ? $context["lastname"] : null);
                echo "
                ";
            }
            // line 144
            echo "              </td>
              <td class=\"text-left\">";
            // line 145
            echo (isset($context["this_month_cost"]) ? $context["this_month_cost"] : null);
            echo "</td>
            </tr>
            ";
            // line 147
            if (((isset($context["mta_status"]) ? $context["mta_status"] : null) && (isset($context["affiliates"]) ? $context["affiliates"] : null))) {
                // line 148
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["affiliates"]) ? $context["affiliates"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["_aff"]) {
                    // line 149
                    echo "              <tr>
                <td class=\"text-left\"><a href=\"";
                    // line 150
                    echo $this->getAttribute($context["_aff"], "affiliate_link", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["_aff"], "affiliate_name", array());
                    echo "</a></td>
                <td class=\"text-left\">";
                    // line 151
                    echo $this->getAttribute($context["_aff"], "this_month_cost", array());
                    echo "</td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_aff'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "            ";
            }
            // line 155
            echo "          </tbody>
        </table>
      </div>
    </div>
    ";
        }
        // line 160
        echo "    
    ";
        // line 161
        if (((isset($context["mta_status"]) ? $context["mta_status"] : null) && (isset($context["affiliates"]) ? $context["affiliates"] : null))) {
            // line 162
            echo "    <div>
      <h4 class=\"text-center text-danger\">";
            // line 163
            echo (isset($context["text_notice_transaction"]) ? $context["text_notice_transaction"] : null);
            echo "</h4>
    </div>
    ";
        }
        // line 166
        echo "


\t\t";
        // line 170
        echo "\t\t";
        if (((isset($context["mta_status"]) ? $context["mta_status"] : null) && (isset($context["affiliates"]) ? $context["affiliates"] : null))) {
            // line 171
            echo "          <div class=\"panel panel-default\">
            <h4>";
            // line 172
            echo (isset($context["text_affiliates"]) ? $context["text_affiliates"] : null);
            echo "</h4>
\t\t\t\t<div>
\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 177
            echo (isset($context["column_affiliate"]) ? $context["column_affiliate"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 178
            echo (isset($context["column_product_name"]) ? $context["column_product_name"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 179
            echo (isset($context["column_product_commission"]) ? $context["column_product_commission"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 180
            echo (isset($context["column_scheme"]) ? $context["column_scheme"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 181
            echo (isset($context["column_total_commission"]) ? $context["column_total_commission"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">&nbsp;</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["affiliates"]) ? $context["affiliates"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["_aff"]) {
                // line 187
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["_aff"], "num_rows", array()) < 2)) {
                    // line 188
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-right\"><a href=\"";
                    // line 189
                    echo $this->getAttribute($context["_aff"], "affiliate_link", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["_aff"], "affiliate_name", array());
                    echo "</a></td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 190
                    echo $this->getAttribute($context["_aff"], "product_name", array());
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 191
                    echo $this->getAttribute($context["_aff"], "commission", array());
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 192
                    if ($this->getAttribute($context["_aff"], "affiliate_scheme_id", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["_aff"], "affiliate_scheme_link", array());
                        echo "\" target=\"_blank\">";
                        echo $this->getAttribute($context["_aff"], "affiliate_scheme_name", array());
                        echo "</a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 193
                        echo " ";
                        echo (isset($context["text_none"]) ? $context["text_none"] : null);
                        echo " ";
                    }
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 194
                    echo $this->getAttribute($context["_aff"], "commission_total", array());
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t<button id=\"commission-add-";
                    // line 196
                    echo $this->getAttribute($context["_aff"], "affiliate_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-success btn-xs\"";
                    if ($this->getAttribute($context["_aff"], "commission_added", array())) {
                        echo " style=\"display:none\"";
                    }
                    echo "><i class=\"fa fa-plus-circle\"></i> ";
                    echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
                    echo "</button>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button id=\"commission-remove-";
                    // line 197
                    echo $this->getAttribute($context["_aff"], "affiliate_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-danger btn-xs\"";
                    if ( !$this->getAttribute($context["_aff"], "commission_added", array())) {
                        echo " style=\"display:none\"";
                    }
                    echo "><i class=\"fa fa-minus-circle\"></i> ";
                    echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
                    echo "</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                } else {
                    // line 201
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-right\" rowspan=\"";
                    // line 202
                    echo $this->getAttribute($context["_aff"], "num_rows", array());
                    echo "\"><a href=\"";
                    echo $this->getAttribute($context["_aff"], "affiliate_link", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["_aff"], "affiliate_name", array());
                    echo "</a></td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 203
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), 0, array(), "array"), "product_name", array(), "array");
                    echo "</td>\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 204
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), 0, array(), "array"), "commission", array(), "array");
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                    // line 205
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), 0, array(), "array"), "affiliate_scheme_id", array(), "array")) {
                        echo "<a href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), 0, array(), "array"), "affiliate_scheme_link", array(), "array");
                        echo "\" target=\"_blank\">";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), 0, array(), "array"), "affiliate_scheme_name", array(), "array");
                        echo "</a>";
                    } else {
                        echo " ";
                        echo (isset($context["text_none"]) ? $context["text_none"] : null);
                        echo " ";
                    }
                    echo " ?></td>
\t\t\t\t\t\t\t<td class=\"text-left\" rowspan=\"";
                    // line 206
                    echo $this->getAttribute($context["_aff"], "num_rows", array());
                    echo "\">";
                    echo $this->getAttribute($context["_aff"], "commission_total", array());
                    echo "</td>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"text-left\" rowspan=\"";
                    // line 207
                    echo $this->getAttribute($context["_aff"], "num_rows", array());
                    echo "\">
\t\t\t\t\t\t\t\t<button id=\"commission-add-";
                    // line 208
                    echo $this->getAttribute($context["_aff"], "affiliate_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-success btn-xs\"";
                    if ($this->getAttribute($context["_aff"], "commission_added", array())) {
                        echo " style=\"display:none\"";
                    }
                    echo "><i class=\"fa fa-plus-circle\"></i> ";
                    echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
                    echo "</button>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button id=\"commission-remove-";
                    // line 209
                    echo $this->getAttribute($context["_aff"], "affiliate_id", array());
                    echo "\" data-loading-text=\"{[ text_loading }}\" class=\"btn btn-danger btn-xs\"";
                    if ( !$this->getAttribute($context["_aff"], "commission_added", array())) {
                        echo " style=\"display:none\"";
                    }
                    echo "><i class=\"fa fa-minus-circle\"></i> ";
                    echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
                    echo "</button>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                    // line 212
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["_aff"], "num_rows", array()) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["_i"]) {
                        // line 213
                        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                        // line 214
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), $context["_i"], array(), "array"), "product_name", array(), "array");
                        echo "</td>\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"text-left\">";
                        // line 215
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), $context["_i"], array(), "array"), "commission", array(), "array");
                        echo "</td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                        // line 216
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), $context["_i"], array(), "array"), "affiliate_scheme_id", array(), "array")) {
                            echo "<a href=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), $context["_i"], array(), "array"), "affiliate_scheme_link", array(), "array");
                            echo "\" target=\"_blank\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["_aff"], "data", array(), "array"), $context["_i"], array(), "array"), "affiliate_scheme_name", array(), "array");
                            echo "</a>";
                        } else {
                            echo " ";
                            echo (isset($context["text_none"]) ? $context["text_none"] : null);
                            echo " ";
                        }
                        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "\t\t\t\t\t\t";
                }
                // line 220
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_aff'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 226
        echo "\t\t";
        // line 227
        echo "\t\t  
\t\t\t
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 231
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 237
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
              ";
        // line 238
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 239
            echo "              <td style=\"width: 50%;\" class=\"text-left\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
              ";
        }
        // line 240
        echo " </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 244
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
              ";
        // line 245
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 246
            echo "              <td class=\"text-left\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
              ";
        }
        // line 247
        echo " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 253
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>

        <td class=\"text-left\">";
        // line 255
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
          
              <td class=\"text-left\">";
        // line 257
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 258
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 259
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 260
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 266
            echo "          <tr>
            <td class=\"text-left\"><a href=\"";
            // line 267
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
              ";
                // line 268
                if (($this->getAttribute($context["option"], "type", array()) != "file")) {
                    // line 269
                    echo "              &nbsp;<small> - ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                } else {
                    // line 270
                    echo "              &nbsp;<small> - ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": <a href=\"";
                    echo $this->getAttribute($context["option"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</a></small> ";
                }
                // line 271
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>

       <td class=\"text-conter\"><img src=\"";
            // line 273
            echo $this->getAttribute($context["product"], "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-thumbnail\" /></td>
          
            <td class=\"text-left\">";
            // line 275
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 276
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 277
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 278
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 282
            echo "          <tr>
            <td class=\"text-left\"><a href=\"";
            // line 283
            echo $this->getAttribute($context["voucher"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</a></td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 286
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 287
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 291
            echo "          <tr>
            
       <td colspan=\"5\" class=\"text-right\">
          ";
            // line 294
            echo $this->getAttribute($context["total"], "title", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 295
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "            </tbody>
          
        </table>
        ";
        // line 301
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 302
            echo "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td>";
            // line 305
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
            // line 310
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
            </tr>
          </tbody>
        </table>
        ";
        }
        // line 314
        echo " </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 318
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 322
        echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
        echo "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 323
        echo (isset($context["tab_additional"]) ? $context["tab_additional"] : null);
        echo "</a></li>
          ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 325
            echo "          <li><a href=\"#tab-";
            echo $this->getAttribute($context["tab"], "code", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["tab"], "title", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br />
            <fieldset>
              <legend>";
        // line 333
        echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
        echo "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 336
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      
                      ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 342
            echo "                      ";
            if (($this->getAttribute($context["order_statuses"], "order_status_id", array()) == (isset($context["order_status_id"]) ? $context["order_status_id"] : null))) {
                // line 343
                echo "                      
                      
                      <option value=\"";
                // line 345
                echo $this->getAttribute($context["order_statuses"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_statuses"], "name", array());
                echo "</option>
                      
                      
                      ";
            } else {
                // line 349
                echo "                      
                      
                      <option value=\"";
                // line 351
                echo $this->getAttribute($context["order_statuses"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_statuses"], "name", array());
                echo "</option>
                      
                      
                      ";
            }
            // line 355
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "                    
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 362
        echo (isset($context["help_override"]) ? $context["help_override"] : null);
        echo "\">";
        echo (isset($context["entry_override"]) ? $context["entry_override"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" />
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
        // line 370
        echo (isset($context["entry_notify"]) ? $context["entry_notify"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" />
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 378
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 386
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
        echo "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 389
        if ((isset($context["account_custom_fields"]) ? $context["account_custom_fields"] : null)) {
            // line 390
            echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
            // line 394
            echo (isset($context["text_account_custom_field"]) ? $context["text_account_custom_field"] : null);
            echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["account_custom_fields"]) ? $context["account_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 400
                echo "                <tr>
                  <td>";
                // line 401
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                  <td>";
                // line 402
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 405
            echo "                  </tbody>
                
              </table>
            </div>
            ";
        }
        // line 410
        echo "            ";
        if ((isset($context["payment_custom_fields"]) ? $context["payment_custom_fields"] : null)) {
            // line 411
            echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
            // line 415
            echo (isset($context["text_payment_custom_field"]) ? $context["text_payment_custom_field"] : null);
            echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
            // line 420
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_custom_fields"]) ? $context["payment_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 421
                echo "                <tr>
                  <td>";
                // line 422
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                  <td>";
                // line 423
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 426
            echo "                  </tbody>
                
              </table>
            </div>
            ";
        }
        // line 431
        echo "            ";
        if (((isset($context["shipping_method"]) ? $context["shipping_method"] : null) && (isset($context["shipping_custom_fields"]) ? $context["shipping_custom_fields"] : null))) {
            // line 432
            echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
            // line 436
            echo (isset($context["text_shipping_custom_field"]) ? $context["text_shipping_custom_field"] : null);
            echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_custom_fields"]) ? $context["shipping_custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 442
                echo "                <tr>
                  <td>";
                // line 443
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                  <td>";
                // line 444
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                  </tbody>
                
              </table>
            </div>
            ";
        }
        // line 452
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 456
        echo (isset($context["text_browser"]) ? $context["text_browser"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 461
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</td>
                    <td>";
        // line 462
        echo (isset($context["ip"]) ? $context["ip"] : null);
        echo "</td>
                  </tr>
                ";
        // line 464
        if ((isset($context["forwarded_ip"]) ? $context["forwarded_ip"] : null)) {
            // line 465
            echo "                <tr>
                  <td>";
            // line 466
            echo (isset($context["text_forwarded_ip"]) ? $context["text_forwarded_ip"] : null);
            echo "</td>
                  <td>";
            // line 467
            echo (isset($context["forwarded_ip"]) ? $context["forwarded_ip"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 470
        echo "                <tr>
                  <td>";
        // line 471
        echo (isset($context["text_user_agent"]) ? $context["text_user_agent"] : null);
        echo "</td>
                  <td>";
        // line 472
        echo (isset($context["user_agent"]) ? $context["user_agent"] : null);
        echo "</td>
                </tr>
                <tr>
                  <td>";
        // line 475
        echo (isset($context["text_accept_language"]) ? $context["text_accept_language"] : null);
        echo "</td>
                  <td>";
        // line 476
        echo (isset($context["accept_language"]) ? $context["accept_language"] : null);
        echo "</td>
                </tr>
                  </tbody>
                
              </table>
            </div>
          </div>
          ";
        // line 483
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 484
            echo "          <div class=\"tab-pane\" id=\"tab-";
            echo $this->getAttribute($context["tab"], "code", array());
            echo "\">";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 485
        echo " </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$(document).delegate('#button-invoice', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 492
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-invoice').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-invoice').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['invoice_no']) {
\t\t\t\t\$('#invoice').html(json['invoice_no']);

\t\t\t\t\$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-reward-add', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/addreward&user_token=";
        // line 521
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 540
        echo (isset($context["button_reward_remove"]) ? $context["button_reward_remove"] : null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-reward-remove', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/removereward&user_token=";
        // line 551
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward-remove').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward-remove').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 570
        echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-commission-add', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/addcommission&user_token=";
        // line 581
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-commission-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-commission-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 600
        echo (isset($context["button_commission_remove"]) ? $context["button_commission_remove"] : null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-commission-remove', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/order/removecommission&user_token=";
        // line 611
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-commission-remove').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-commission-remove').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 630
        echo (isset($context["button_commission_add"]) ? $context["button_commission_add"] : null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 645
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');

\$('#button-history').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 649
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/history&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=";
        echo (isset($context["store_id"]) ? $context["store_id"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-history').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-history').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 667
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');

\t\t\t\t\$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('textarea[name=\\'comment\\']').val('');
\t
\t\t\t
";
        // line 675
        if ((isset($context["mta_status"]) ? $context["mta_status"] : null)) {
            // line 676
            echo "\$.ajax({
\turl: 'index.php?route=extension/module/mta/mta/get_order_commissions&user_token=";
            // line 677
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&order_id=";
            echo (isset($context["order_id"]) ? $context["order_id"] : null);
            echo "',
\tdataType: 'json',
\tsuccess: function(_r) {
\t\tfor(var i = 0; i < _r.length; i++) {
\t\t\tvar _aid = _r[i].affiliate_id;\t\t\t
\t\t\tif(\$('#commission-add-'+_aid).length > 0) \$('#commission-add-'+_aid)[(_r[i].added ? 'hide' : 'show')]();
\t\t\tif(\$('#commission-remove-'+_aid).length > 0) \$('#commission-remove-'+_aid)[(_r[i].added ? 'show' : 'hide')]();\t\t\t\t
\t\t}
\t}
});
";
        }
        // line 689
        echo "

\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script> 
</div>
\t
\t\t\t
";
        // line 703
        if ((isset($context["mta_status"]) ? $context["mta_status"] : null)) {
            // line 704
            echo "<script type=\"text/javascript\">\t\t\t
ORDER_ID_MTA = '";
            // line 705
            echo (isset($context["order_id"]) ? $context["order_id"] : null);
            echo "';
TOKEN_MTA = '";
            // line 706
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "';
";
            // line 707
            if ((isset($context["link_edit_order_commission"]) ? $context["link_edit_order_commission"] : null)) {
                // line 708
                echo "\$(document).ready(function() {\t
\t\$('#invoice').parent().parent().find('tr:last').html('<td colspan=\"3\"><a href=\"";
                // line 709
                echo (isset($context["link_edit_order_commission"]) ? $context["link_edit_order_commission"] : null);
                echo "\"><strong>";
                echo (isset($context["text_edit_order_commission"]) ? $context["text_edit_order_commission"] : null);
                echo "</strong></a></td>');\t
});
";
            }
            // line 712
            echo "</script>
";
        }
        // line 715
        echo "

";
        // line 717
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1610 => 717,  1606 => 715,  1602 => 712,  1594 => 709,  1591 => 708,  1589 => 707,  1585 => 706,  1581 => 705,  1578 => 704,  1576 => 703,  1561 => 689,  1545 => 677,  1542 => 676,  1540 => 675,  1528 => 667,  1501 => 649,  1492 => 645,  1474 => 630,  1450 => 611,  1436 => 600,  1412 => 581,  1398 => 570,  1374 => 551,  1360 => 540,  1336 => 521,  1302 => 492,  1293 => 485,  1282 => 484,  1278 => 483,  1268 => 476,  1264 => 475,  1258 => 472,  1254 => 471,  1251 => 470,  1245 => 467,  1241 => 466,  1238 => 465,  1236 => 464,  1231 => 462,  1227 => 461,  1219 => 456,  1213 => 452,  1206 => 447,  1197 => 444,  1193 => 443,  1190 => 442,  1186 => 441,  1178 => 436,  1172 => 432,  1169 => 431,  1162 => 426,  1153 => 423,  1149 => 422,  1146 => 421,  1142 => 420,  1134 => 415,  1128 => 411,  1125 => 410,  1118 => 405,  1109 => 402,  1105 => 401,  1102 => 400,  1098 => 399,  1090 => 394,  1084 => 390,  1082 => 389,  1074 => 386,  1063 => 378,  1052 => 370,  1039 => 362,  1031 => 356,  1025 => 355,  1016 => 351,  1012 => 349,  1003 => 345,  999 => 343,  996 => 342,  992 => 341,  984 => 336,  978 => 333,  970 => 327,  959 => 325,  955 => 324,  951 => 323,  947 => 322,  940 => 318,  934 => 314,  926 => 310,  918 => 305,  913 => 302,  911 => 301,  906 => 298,  897 => 295,  893 => 294,  888 => 291,  883 => 290,  874 => 287,  870 => 286,  862 => 283,  859 => 282,  854 => 281,  845 => 278,  841 => 277,  837 => 276,  833 => 275,  824 => 273,  815 => 271,  806 => 270,  799 => 269,  797 => 268,  787 => 267,  784 => 266,  780 => 265,  772 => 260,  768 => 259,  764 => 258,  760 => 257,  755 => 255,  750 => 253,  742 => 247,  736 => 246,  734 => 245,  730 => 244,  724 => 240,  718 => 239,  716 => 238,  712 => 237,  703 => 231,  697 => 227,  695 => 226,  688 => 221,  682 => 220,  679 => 219,  660 => 216,  656 => 215,  652 => 214,  649 => 213,  645 => 212,  633 => 209,  621 => 208,  617 => 207,  611 => 206,  597 => 205,  593 => 204,  589 => 203,  581 => 202,  578 => 201,  563 => 197,  551 => 196,  546 => 194,  539 => 193,  530 => 192,  526 => 191,  522 => 190,  516 => 189,  513 => 188,  510 => 187,  506 => 186,  498 => 181,  494 => 180,  490 => 179,  486 => 178,  482 => 177,  474 => 172,  471 => 171,  468 => 170,  463 => 166,  457 => 163,  454 => 162,  452 => 161,  449 => 160,  442 => 155,  439 => 154,  430 => 151,  424 => 150,  421 => 149,  416 => 148,  414 => 147,  409 => 145,  406 => 144,  398 => 142,  388 => 141,  381 => 136,  375 => 135,  373 => 134,  369 => 133,  360 => 127,  356 => 125,  354 => 124,  344 => 116,  340 => 115,  337 => 114,  329 => 112,  321 => 110,  318 => 109,  315 => 108,  305 => 107,  302 => 106,  292 => 105,  290 => 104,  286 => 103,  281 => 100,  277 => 99,  274 => 98,  266 => 96,  258 => 94,  255 => 93,  253 => 92,  249 => 91,  245 => 90,  240 => 87,  236 => 86,  228 => 84,  226 => 83,  222 => 82,  218 => 81,  210 => 76,  199 => 68,  195 => 67,  187 => 64,  183 => 63,  177 => 60,  173 => 59,  168 => 56,  160 => 55,  150 => 54,  146 => 53,  139 => 49,  129 => 41,  123 => 38,  119 => 37,  116 => 36,  114 => 35,  109 => 33,  105 => 32,  99 => 29,  95 => 28,  87 => 25,  83 => 24,  75 => 19,  65 => 11,  54 => 9,  50 => 8,  45 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ invoice }}" target="_blank" data-toggle="tooltip" title="{{ button_invoice_print }}" class="btn btn-info"><i class="fa fa-print"></i></a> <a href="{{ shipping }}" target="_blank" data-toggle="tooltip" title="{{ button_shipping_print }}" class="btn btn-info"><i class="fa fa-truck"></i></a> <a href="{{ edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> {{ text_order_detail }}</h3>*/
/*           </div>*/
/*           <table class="table">*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td style="width: 1%;"><button data-toggle="tooltip" title="{{ text_store }}" class="btn btn-info btn-xs"><i class="fa fa-shopping-cart fa-fw"></i></button></td>*/
/*                 <td><a href="{{ store_url }}" target="_blank">{{ store_name }}</a></td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td><button data-toggle="tooltip" title="{{ text_date_added }}" class="btn btn-info btn-xs"><i class="fa fa-calendar fa-fw"></i></button></td>*/
/*                 <td>{{ date_added }}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td><button data-toggle="tooltip" title="{{ text_payment_method }}" class="btn btn-info btn-xs"><i class="fa fa-credit-card fa-fw"></i></button></td>*/
/*                 <td>{{ payment_method }}</td>*/
/*               </tr>*/
/*             {% if shipping_method %}*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_shipping_method }}" class="btn btn-info btn-xs"><i class="fa fa-truck fa-fw"></i></button></td>*/
/*               <td>{{ shipping_method }}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/*               </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-user"></i> {{ text_customer_detail }}</h3>*/
/*           </div>*/
/*           <table class="table">*/
/*             <tr>*/
/*               <td style="width: 1%;"><button data-toggle="tooltip" title="{{ text_customer }}" class="btn btn-info btn-xs"><i class="fa fa-user fa-fw"></i></button></td>*/
/*               <td>{% if customer %} <a href="{{ customer }}" target="_blank">{{ firstname }} {{ lastname }}</a> {% else %}*/
/*                 {{ firstname }} {{ lastname }}*/
/*                 {% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_customer_group }}" class="btn btn-info btn-xs"><i class="fa fa-group fa-fw"></i></button></td>*/
/*               <td>{{ customer_group }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_email }}" class="btn btn-info btn-xs"><i class="fa fa-envelope-o fa-fw"></i></button></td>*/
/*               <td><a href="mailto:{{ email }}">{{ email }}</a></td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td><button data-toggle="tooltip" title="{{ text_telephone }}" class="btn btn-info btn-xs"><i class="fa fa-phone fa-fw"></i></button></td>*/
/*               <td>{{ telephone }}</td>*/
/*             </tr>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-cog"></i> {{ text_option }}</h3>*/
/*           </div>*/
/*           <table class="table">*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_invoice }}</td>*/
/*                 <td id="invoice" class="text-right">{{ invoice_no }}</td>*/
/*                 <td style="width: 1%;" class="text-center">{% if not invoice_no %}*/
/*                   <button id="button-invoice" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_generate }}" class="btn btn-success btn-xs"><i class="fa fa-cog"></i></button>*/
/*                   {% else %}*/
/*                   <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_reward }}</td>*/
/*                 <td class="text-right">{{ reward }}</td>*/
/*                 <td class="text-center">{% if customer and reward %}*/
/*                   {% if not reward_total %}*/
/*                   <button id="button-reward-add" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_reward_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% else %}*/
/*                   <button id="button-reward-remove" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_reward_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>*/
/*                   {% endif %}*/
/*                   {% else %}*/
/*                   <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_affiliate }}*/
/*                   {% if affiliate %}*/
/*                   (<a href="{{ affiliate }}">{{ affiliate_firstname }} {{ affiliate_lastname }}</a>)*/
/*                   {% endif %}</td>*/
/*                 {% if mta_status %}<td class="text-right">{{ commission|default('') }}</td>{% else %}<td  class="text-right">{{ commission }} </td>{% endif %}*/
/*                 <td class="text-center">{% if affiliate %}*/
/*                   {% if not commission_total %}*/
/*                   <button id="button-commission-add" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_commission_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% else %}*/
/*                   <button id="button-commission-remove" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_commission_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>*/
/*                   {% endif %}*/
/*                   {% else %}*/
/*                   <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     {% if customer %}*/
/*     <div class="panel panel-default toastguo-custom">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-info-circle"></i> {{ text_this_month_cost }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td style="width: 50%;" class="text-left">{{ text_customer }}</td>*/
/*               {% if shipping_method %}*/
/*               <td style="width: 50%;" class="text-left">{{ text_this_month_cost }}</td>*/
/*               {% endif %} */
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td class="text-left">{% if customer %} <a href="{{ customer }}" target="_blank">{{ firstname }} {{ lastname }}</a> {% else %}*/
/*                 {{ firstname }} {{ lastname }}*/
/*                 {% endif %}*/
/*               </td>*/
/*               <td class="text-left">{{ this_month_cost }}</td>*/
/*             </tr>*/
/*             {% if mta_status and affiliates %}*/
/*             {% for _aff in affiliates %}*/
/*               <tr>*/
/*                 <td class="text-left"><a href="{{ _aff.affiliate_link }}" target="_blank">{{ _aff.affiliate_name }}</a></td>*/
/*                 <td class="text-left">{{ _aff.this_month_cost }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     */
/*     {% if mta_status and affiliates %}*/
/*     <div>*/
/*       <h4 class="text-center text-danger">{{ text_notice_transaction }}</h4>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* 		{# //+mod by yp start #}*/
/* 		{% if mta_status and affiliates %}*/
/*           <div class="panel panel-default">*/
/*             <h4>{{ text_affiliates }}</h4>*/
/* 				<div>*/
/* 					<table class="table table-bordered table-hover">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<td class="text-right">{{ column_affiliate }}</td>*/
/* 								<td class="text-left">{{ column_product_name }}</td>*/
/* 								<td class="text-left">{{ column_product_commission }}</td>*/
/* 								<td class="text-left">{{ column_scheme }}</td>*/
/* 								<td class="text-left">{{ column_total_commission }}</td>*/
/* 								<td class="text-left">&nbsp;</td>*/
/* 							</tr>*/
/* 						</thead>*/
/* 					<tbody>*/
/* 					{% for _aff in affiliates %}*/
/* 						{% if _aff.num_rows < 2 %}*/
/* 						<tr>*/
/* 							<td class="text-right"><a href="{{ _aff.affiliate_link }}" target="_blank">{{ _aff.affiliate_name }}</a></td>*/
/* 							<td class="text-left">{{ _aff.product_name }}</td>*/
/* 							<td class="text-left">{{ _aff.commission }}</td>*/
/* 							<td class="text-left">{% if _aff.affiliate_scheme_id %}<a href="{{ _aff.affiliate_scheme_link }}" target="_blank">{{ _aff.affiliate_scheme_name }}</a>*/
/* 							{% else %} {{ text_none }} {% endif %}</td>*/
/* 							<td class="text-left">{{ _aff.commission_total }}</td>*/
/* 							<td class="text-left">*/
/* 								<button id="commission-add-{{ _aff.affiliate_id }}" data-loading-text="{{ text_loading }}" class="btn btn-success btn-xs"{% if _aff.commission_added %} style="display:none"{% endif %}><i class="fa fa-plus-circle"></i> {{ button_commission_add }}</button>							*/
/* 								<button id="commission-remove-{{ _aff.affiliate_id }}" data-loading-text="{{ text_loading }}" class="btn btn-danger btn-xs"{% if not _aff.commission_added %} style="display:none"{% endif %}><i class="fa fa-minus-circle"></i> {{ button_commission_remove }}</button>*/
/* 							</td>*/
/* 						</tr>*/
/* 						{% else %}*/
/* 						<tr>*/
/* 							<td class="text-right" rowspan="{{ _aff.num_rows }}"><a href="{{ _aff.affiliate_link }}" target="_blank">{{ _aff.affiliate_name }}</a></td>*/
/* 							<td class="text-left">{{ _aff['data'][0]['product_name'] }}</td>					*/
/* 							<td class="text-left">{{ _aff['data'][0]['commission'] }}</td>*/
/* 							<td class="text-left">{% if _aff['data'][0]['affiliate_scheme_id'] %}<a href="{{ _aff['data'][0]['affiliate_scheme_link'] }}" target="_blank">{{ _aff['data'][0]['affiliate_scheme_name'] }}</a>{% else %} {{ text_none }} {% endif %} ?></td>*/
/* 							<td class="text-left" rowspan="{{ _aff.num_rows }}">{{ _aff.commission_total }}</td>										*/
/* 							<td class="text-left" rowspan="{{ _aff.num_rows }}">*/
/* 								<button id="commission-add-{{ _aff.affiliate_id }}" data-loading-text="{{ text_loading }}" class="btn btn-success btn-xs"{% if _aff.commission_added %} style="display:none"{% endif %}><i class="fa fa-plus-circle"></i> {{ button_commission_add }}</button>							*/
/* 								<button id="commission-remove-{{ _aff.affiliate_id }}" data-loading-text="{[ text_loading }}" class="btn btn-danger btn-xs"{% if not _aff.commission_added %} style="display:none"{% endif %}><i class="fa fa-minus-circle"></i> {{ button_commission_remove }}</button>							*/
/* 							</td>*/
/* 						</tr>*/
/* 						{% for _i in range(1, (_aff.num_rows - 1)) %}*/
/* 						<tr>*/
/* 							<td class="text-left">{{ _aff['data'][_i]['product_name'] }}</td>					*/
/* 							<td class="text-left">{{ _aff['data'][_i]['commission'] }}</td>*/
/* 							<td class="text-left">{% if _aff['data'][_i]['affiliate_scheme_id'] %}<a href="{{ _aff['data'][_i]['affiliate_scheme_link'] }}" target="_blank">{{ _aff['data'][_i]['affiliate_scheme_name'] }}</a>{% else %} {{ text_none }} {% endif %}</td>*/
/* 						</tr>*/
/* 						{% endfor %}*/
/* 						{% endif %}*/
/* 						{% endfor %}*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{# //+mod by yp start #}*/
/* 		  */
/* 			*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-info-circle"></i> {{ text_order }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td style="width: 50%;" class="text-left">{{ text_payment_address }}</td>*/
/*               {% if shipping_method %}*/
/*               <td style="width: 50%;" class="text-left">{{ text_shipping_address }}</td>*/
/*               {% endif %} </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td class="text-left">{{ payment_address }}</td>*/
/*               {% if shipping_method %}*/
/*               <td class="text-left">{{ shipping_address }}</td>*/
/*               {% endif %} </tr>*/
/*           </tbody>*/
/*         </table>*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_product }}</td>*/
/* */
/*         <td class="text-left">{{ column_image }}</td>*/
/*           */
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_quantity }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% for option in product.option %} <br />*/
/*               {% if option.type != 'file' %}*/
/*               &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% else %}*/
/*               &nbsp;<small> - {{ option.name }}: <a href="{{ option.href }}">{{ option.value }}</a></small> {% endif %}*/
/*               {% endfor %}</td>*/
/* */
/*        <td class="text-conter"><img src="{{ product.image }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></td>*/
/*           */
/*             <td class="text-left">{{ product.model }}</td>*/
/*             <td class="text-right">{{ product.quantity }}</td>*/
/*             <td class="text-right">{{ product.price }}</td>*/
/*             <td class="text-right">{{ product.total }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for voucher in vouchers %}*/
/*           <tr>*/
/*             <td class="text-left"><a href="{{ voucher.href }}">{{ voucher.description }}</a></td>*/
/*             <td class="text-left"></td>*/
/*             <td class="text-right">1</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             */
/*        <td colspan="5" class="text-right">*/
/*           {{ total.title }}</td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*         {% if comment %}*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td>{{ text_comment }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td>{{ comment }}</td>*/
/*             </tr>*/
/*           </tbody>*/
/*         </table>*/
/*         {% endif %} </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-comment-o"></i> {{ text_history }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*           <li><a href="#tab-additional" data-toggle="tab">{{ tab_additional }}</a></li>*/
/*           {% for tab in tabs %}*/
/*           <li><a href="#tab-{{ tab.code }}" data-toggle="tab">{{ tab.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-history">*/
/*             <div id="history"></div>*/
/*             <br />*/
/*             <fieldset>*/
/*               <legend>{{ text_history_add }}</legend>*/
/*               <form class="form-horizontal">*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="order_status_id" id="input-order-status" class="form-control">*/
/*                       */
/*                       */
/*                       {% for order_statuses in order_statuses %}*/
/*                       {% if order_statuses.order_status_id == order_status_id %}*/
/*                       */
/*                       */
/*                       <option value="{{ order_statuses.order_status_id }}" selected="selected">{{ order_statuses.name }}</option>*/
/*                       */
/*                       */
/*                       {% else %}*/
/*                       */
/*                       */
/*                       <option value="{{ order_statuses.order_status_id }}">{{ order_statuses.name }}</option>*/
/*                       */
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-override"><span data-toggle="tooltip" title="{{ help_override }}">{{ entry_override }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="checkbox">*/
/*                       <input type="checkbox" name="override" value="1" id="input-override" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-notify">{{ entry_notify }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="checkbox">*/
/*                       <input type="checkbox" name="notify" value="1" id="input-notify" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="8" id="input-comment" class="form-control"></textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </form>*/
/*             </fieldset>*/
/*             <div class="text-right">*/
/*               <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*             </div>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-additional"> {% if account_custom_fields %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_account_custom_field }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% for custom_field in account_custom_fields %}*/
/*                 <tr>*/
/*                   <td>{{ custom_field.name }}</td>*/
/*                   <td>{{ custom_field.value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if payment_custom_fields %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_payment_custom_field }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% for custom_field in payment_custom_fields %}*/
/*                 <tr>*/
/*                   <td>{{ custom_field.name }}</td>*/
/*                   <td>{{ custom_field.value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if shipping_method and shipping_custom_fields %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_shipping_custom_field }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% for custom_field in shipping_custom_fields %}*/
/*                 <tr>*/
/*                   <td>{{ custom_field.name }}</td>*/
/*                   <td>{{ custom_field.value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2">{{ text_browser }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   <tr>*/
/*                     <td>{{ text_ip }}</td>*/
/*                     <td>{{ ip }}</td>*/
/*                   </tr>*/
/*                 {% if forwarded_ip %}*/
/*                 <tr>*/
/*                   <td>{{ text_forwarded_ip }}</td>*/
/*                   <td>{{ forwarded_ip }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                 <tr>*/
/*                   <td>{{ text_user_agent }}</td>*/
/*                   <td>{{ user_agent }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>{{ text_accept_language }}</td>*/
/*                   <td>{{ accept_language }}</td>*/
/*                 </tr>*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*           </div>*/
/*           {% for tab in tabs %}*/
/*           <div class="tab-pane" id="tab-{{ tab.code }}">{{ tab.content }}</div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $(document).delegate('#button-invoice', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/createinvoiceno&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-invoice').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-invoice').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['invoice_no']) {*/
/* 				$('#invoice').html(json['invoice_no']);*/
/* */
/* 				$('#button-invoice').replaceWith('<button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-cog"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-reward-add', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/addreward&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-reward-add').replaceWith('<button id="button-reward-remove" data-toggle="tooltip" title="{{ button_reward_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-reward-remove', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/removereward&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward-remove').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward-remove').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-reward-remove').replaceWith('<button id="button-reward-add" data-toggle="tooltip" title="{{ button_reward_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-commission-add', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/addcommission&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-commission-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-commission-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-commission-add').replaceWith('<button id="button-commission-remove" data-toggle="tooltip" title="{{ button_commission_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-commission-remove', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/order/removecommission&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-commission-remove').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-commission-remove').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('#button-commission-remove').replaceWith('<button id="button-commission-add" data-toggle="tooltip" title="{{ button_commission_add }}" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#history').load(this.href);*/
/* });*/
/* */
/* $('#history').load('index.php?route=sale/order/history&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* */
/* $('#button-history').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/order/history&api_token={{ api_token }}&store_id={{ store_id }}&order_id={{ order_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'order_status_id=' + encodeURIComponent($('select[name=\'order_status_id\']').val()) + '&notify=' + ($('input[name=\'notify\']').prop('checked') ? 1 : 0) + '&override=' + ($('input[name=\'override\']').prop('checked') ? 1 : 0) + '&append=' + ($('input[name=\'append\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent($('textarea[name=\'comment\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-history').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-history').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#history').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#history').load('index.php?route=sale/order/history&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* */
/* 				$('#history').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('textarea[name=\'comment\']').val('');*/
/* 	*/
/* 			*/
/* {# //+mod by yp start #}*/
/* {% if mta_status %}*/
/* $.ajax({*/
/* 	url: 'index.php?route=extension/module/mta/mta/get_order_commissions&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 	dataType: 'json',*/
/* 	success: function(_r) {*/
/* 		for(var i = 0; i < _r.length; i++) {*/
/* 			var _aid = _r[i].affiliate_id;			*/
/* 			if($('#commission-add-'+_aid).length > 0) $('#commission-add-'+_aid)[(_r[i].added ? 'hide' : 'show')]();*/
/* 			if($('#commission-remove-'+_aid).length > 0) $('#commission-remove-'+_aid)[(_r[i].added ? 'show' : 'hide')]();				*/
/* 		}*/
/* 	}*/
/* });*/
/* {% endif %}*/
/* {# //+mod by yp end #}*/
/* */
/* */
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* </div>*/
/* 	*/
/* 			*/
/* {# //+mod by yp start #}*/
/* {% if mta_status %}*/
/* <script type="text/javascript">			*/
/* ORDER_ID_MTA = '{{ order_id }}';*/
/* TOKEN_MTA = '{{ user_token }}';*/
/* {% if link_edit_order_commission %}*/
/* $(document).ready(function() {	*/
/* 	$('#invoice').parent().parent().find('tr:last').html('<td colspan="3"><a href="{{ link_edit_order_commission }}"><strong>{{ text_edit_order_commission }}</strong></a></td>');	*/
/* });*/
/* {% endif %}*/
/* </script>*/
/* {% endif %}*/
/* {# //+mod by yp end #}*/
/* */
/* */
/* {{ footer }} */
