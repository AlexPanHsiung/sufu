<?php

/* sale/return_form.twig */
class __TwigTemplate_808bac04b8d89aa3f3c5ca79ad084d7d84b924cbd354809f2d33edc1d8b891d0 extends Twig_Template
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
    <div class=\"pull-right\">
      <button type=\"submit\" form=\"form-return\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
      <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a> </div>
    <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
  ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 22
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
        ";
        // line 29
        if ((isset($context["return_id"]) ? $context["return_id"] : null)) {
            // line 30
            echo "        <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>
        ";
        }
        // line 32
        echo "      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-general\">
          <form action=\"";
        // line 35
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-return\" class=\"form-horizontal\">
            <fieldset>
              <legend>";
        // line 37
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</legend>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 39
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"order_id\" value=\"";
        // line 41
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
                  ";
        // line 42
        if ((isset($context["error_order_id"]) ? $context["error_order_id"] : null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_order_id"]) ? $context["error_order_id"] : null);
            echo "</div>
                  ";
        }
        // line 45
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 48
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 51
        echo (isset($context["date_ordered"]) ? $context["date_ordered"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer\">";
        // line 59
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"customer\" value=\"";
        // line 61
        echo (isset($context["customer"]) ? $context["customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 62
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 66
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 68
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                  ";
        // line 69
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 70
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                  ";
        }
        // line 72
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 75
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 77
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                  ";
        // line 78
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 79
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                  ";
        }
        // line 81
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 84
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 86
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 87
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 88
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 90
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 93
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"telephone\" value=\"";
        // line 95
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 96
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 97
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 99
        echo "                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 103
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 105
        echo (isset($context["help_product"]) ? $context["help_product"] : null);
        echo "\">";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"";
        // line 107
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 108
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
                  ";
        // line 109
        if ((isset($context["error_product"]) ? $context["error_product"] : null)) {
            // line 110
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_product"]) ? $context["error_product"] : null);
            echo "</div>
                  ";
        }
        // line 112
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 115
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 117
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                  ";
        // line 118
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 119
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
                  ";
        }
        // line 120
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 123
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 125
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-reason\">";
        // line 129
        echo (isset($context["entry_return_reason"]) ? $context["entry_return_reason"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_reason_id\" id=\"input-return-reason\" class=\"form-control\">
                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_reasons"]) ? $context["return_reasons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 133
            echo "                    ";
            if (($this->getAttribute($context["return_reason"], "return_reason_id", array()) == (isset($context["return_reason_id"]) ? $context["return_reason_id"] : null))) {
                echo "                    
                    <option value=\"";
                // line 134
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 136
                echo "                    <option value=\"";
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</option>
                    ";
            }
            // line 138
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-opened\">";
        // line 143
        echo (isset($context["entry_opened"]) ? $context["entry_opened"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"opened\" id=\"input-opened\" class=\"form-control\">
                    ";
        // line 146
        if ((isset($context["opened"]) ? $context["opened"] : null)) {
            // line 147
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_opened"]) ? $context["text_opened"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 148
            echo (isset($context["text_unopened"]) ? $context["text_unopened"] : null);
            echo "</option>
                    ";
        } else {
            // line 150
            echo "                    <option value=\"1\">";
            echo (isset($context["text_opened"]) ? $context["text_opened"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 151
            echo (isset($context["text_unopened"]) ? $context["text_unopened"] : null);
            echo "</option>
                    ";
        }
        // line 153
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 157
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 159
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-action\">";
        // line 163
        echo (isset($context["entry_return_action"]) ? $context["entry_return_action"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_action_id\" id=\"input-return-action\" class=\"form-control\">
                    <option value=\"0\"></option>
                    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_actions"]) ? $context["return_actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_action"]) {
            // line 168
            echo "                    ";
            if (($this->getAttribute($context["return_action"], "return_action_id", array()) == (isset($context["return_action_id"]) ? $context["return_action_id"] : null))) {
                // line 169
                echo "                    <option value=\"";
                echo $this->getAttribute($context["return_action"], "return_action_id", array());
                echo "\" selected=\"selected\"> ";
                echo $this->getAttribute($context["return_action"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 171
                echo "                    <option value=\"";
                echo $this->getAttribute($context["return_action"], "return_action_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_action"], "name", array());
                echo "</option>
                    ";
            }
            // line 173
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                  </select>
                </div>
              </div>
              ";
        // line 177
        if ( !(isset($context["return_id"]) ? $context["return_id"] : null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-status\">";
            // line 179
            echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-control\">
                    ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
                // line 183
                echo "                    ";
                if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["return_status_id"]) ? $context["return_status_id"] : null))) {
                    // line 184
                    echo "                    <option value=\"";
                    echo $this->getAttribute($context["return_status"], "return_status_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["return_status"], "name", array());
                    echo "</option>
                    ";
                } else {
                    // line 186
                    echo "                    <option value=\"";
                    echo $this->getAttribute($context["return_status"], "return_status_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["return_status"], "name", array());
                    echo "</option>
                    ";
                }
                // line 188
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                  </select>
                </div>
              </div>
              ";
        }
        // line 193
        echo "            </fieldset>
          </form>
        </div>
        ";
        // line 196
        if ((isset($context["return_id"]) ? $context["return_id"] : null)) {
            // line 197
            echo "        <div class=\"tab-pane\" id=\"tab-history\">
          <fieldset>
            <legend>";
            // line 199
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</legend>
            <div id=\"history\"></div>
          </fieldset>
          <br />
          <fieldset>
            <legend>";
            // line 204
            echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
            echo "</legend>
            <form class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-status\">";
            // line 207
            echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-control\">
                    ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
                // line 211
                echo "                    ";
                if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["return_status_id"]) ? $context["return_status_id"] : null))) {
                    // line 212
                    echo "                    <option value=\"";
                    echo $this->getAttribute($context["return_status"], "return_status_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["return_status"], "name", array());
                    echo "</option>
                    ";
                } else {
                    // line 214
                    echo "                    <option value=\"";
                    echo $this->getAttribute($context["return_status"], "return_status_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["return_status"], "name", array());
                    echo "</option>
                    ";
                }
                // line 216
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
            // line 221
            echo (isset($context["entry_notify"]) ? $context["entry_notify"] : null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-history-comment\">";
            // line 227
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" id=\"input-history-comment\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 233
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
            echo "</button>
              </div>
            </form>
          </fieldset>
        </div>
        ";
        }
        // line 239
        echo "      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 246
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['customer_group'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id'],
\t\t\t\t\t\tfirstname: item['firstname'],
\t\t\t\t\t\tlastname: item['lastname'],
\t\t\t\t\t\temail: item['email'],
\t\t\t\t\t\ttelephone: item['telephone']\t\t\t
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'customer\\']').val(item['label']);
\t\t\$('input[name=\\'customer_id\\']').val(item['value']);
\t\t\$('input[name=\\'firstname\\']').val(item['firstname']);
\t\t\$('input[name=\\'lastname\\']').val(item['lastname']);
\t\t\$('input[name=\\'email\\']').val(item['email']);
\t\t\$('input[name=\\'telephone\\']').val(item['telephone']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 277
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id'],
\t\t\t\t\t\tmodel: item['model']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t
\t\t\$('input[name=\\'model\\']').val(item['model']);\t
\t}
});

\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=sale/return/history&user_token=";
        // line 303
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&return_id=";
        echo (isset($context["return_id"]) ? $context["return_id"] : null);
        echo "');

\$('#button-history').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=sale/return/addhistory&user_token=";
        // line 309
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&return_id=";
        echo (isset($context["return_id"]) ? $context["return_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'return_status_id=' + encodeURIComponent(\$('#tab-history select[name=\\'return_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-history').button('loading');\t
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-history').button('reset');\t
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\tif (json['error']) {
\t\t\t\t \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#history').load('index.php?route=sale/return/history&user_token=";
        // line 327
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&return_id=";
        echo (isset($context["return_id"]) ? $context["return_id"] : null);
        echo "');
\t\t\t\t
\t\t\t\t\$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#tab-history textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t}
\t});
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 339
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 343
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 343,  738 => 339,  721 => 327,  698 => 309,  687 => 303,  658 => 277,  624 => 246,  615 => 239,  604 => 233,  595 => 227,  586 => 221,  580 => 217,  574 => 216,  566 => 214,  558 => 212,  555 => 211,  551 => 210,  545 => 207,  539 => 204,  531 => 199,  527 => 197,  525 => 196,  520 => 193,  514 => 189,  508 => 188,  500 => 186,  492 => 184,  489 => 183,  485 => 182,  479 => 179,  476 => 178,  474 => 177,  469 => 174,  463 => 173,  455 => 171,  447 => 169,  444 => 168,  440 => 167,  433 => 163,  424 => 159,  419 => 157,  413 => 153,  408 => 151,  403 => 150,  398 => 148,  393 => 147,  391 => 146,  385 => 143,  379 => 139,  373 => 138,  365 => 136,  358 => 134,  353 => 133,  349 => 132,  343 => 129,  334 => 125,  329 => 123,  324 => 120,  318 => 119,  316 => 118,  310 => 117,  305 => 115,  300 => 112,  294 => 110,  292 => 109,  288 => 108,  282 => 107,  275 => 105,  270 => 103,  264 => 99,  258 => 97,  256 => 96,  250 => 95,  245 => 93,  240 => 90,  234 => 88,  232 => 87,  226 => 86,  221 => 84,  216 => 81,  210 => 79,  208 => 78,  202 => 77,  197 => 75,  192 => 72,  186 => 70,  184 => 69,  178 => 68,  173 => 66,  166 => 62,  160 => 61,  155 => 59,  142 => 51,  136 => 48,  131 => 45,  125 => 43,  123 => 42,  117 => 41,  112 => 39,  107 => 37,  102 => 35,  97 => 32,  91 => 30,  89 => 29,  85 => 28,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <div class="pull-right">*/
/*       <button type="submit" form="form-return" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*       <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a> </div>*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <ul class="nav nav-tabs">*/
/*         <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*         {% if return_id %}*/
/*         <li><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane active" id="tab-general">*/
/*           <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-return" class="form-horizontal">*/
/*             <fieldset>*/
/*               <legend>{{ text_order }}</legend>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="order_id" value="{{ order_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*                   {% if error_order_id %}*/
/*                   <div class="text-danger">{{ error_order_id }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-ordered">{{ entry_date_ordered }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_ordered" value="{{ date_ordered }}" placeholder="{{ entry_date_ordered }}" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-customer">{{ entry_customer }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="customer" value="{{ customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*                   <input type="hidden" name="customer_id" value="{{ customer_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                   {% if error_firstname %}*/
/*                   <div class="text-danger">{{ error_firstname }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                   {% if error_lastname %}*/
/*                   <div class="text-danger">{{ error_lastname }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </fieldset>*/
/*             <fieldset>*/
/*               <legend>{{ text_product }}</legend>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-product"><span data-toggle="tooltip" title="{{ help_product }}">{{ entry_product }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="product" value="{{ product }}" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*                   <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                   {% if error_product %}*/
/*                   <div class="text-danger">{{ error_product }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*                   {% if error_model %}*/
/*                   <div class="text-danger">{{ error_model }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-return-reason">{{ entry_return_reason }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="return_reason_id" id="input-return-reason" class="form-control">*/
/*                     {% for return_reason in return_reasons %}*/
/*                     {% if return_reason.return_reason_id == return_reason_id %}                    */
/*                     <option value="{{ return_reason.return_reason_id }}" selected="selected">{{ return_reason.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ return_reason.return_reason_id }}">{{ return_reason.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-opened">{{ entry_opened }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="opened" id="input-opened" class="form-control">*/
/*                     {% if opened %}*/
/*                     <option value="1" selected="selected">{{ text_opened }}</option>*/
/*                     <option value="0">{{ text_unopened }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_opened }}</option>*/
/*                     <option value="0" selected="selected">{{ text_unopened }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment">{{ entry_comment }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-return-action">{{ entry_return_action }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="return_action_id" id="input-return-action" class="form-control">*/
/*                     <option value="0"></option>*/
/*                     {% for return_action in return_actions %}*/
/*                     {% if return_action.return_action_id == return_action_id %}*/
/*                     <option value="{{ return_action.return_action_id }}" selected="selected"> {{ return_action.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ return_action.return_action_id }}">{{ return_action.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% if not return_id %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-return-status">{{ entry_return_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="return_status_id" id="input-return-status" class="form-control">*/
/*                     {% for return_status in return_statuses %}*/
/*                     {% if return_status.return_status_id == return_status_id %}*/
/*                     <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*             </fieldset>*/
/*           </form>*/
/*         </div>*/
/*         {% if return_id %}*/
/*         <div class="tab-pane" id="tab-history">*/
/*           <fieldset>*/
/*             <legend>{{ text_history }}</legend>*/
/*             <div id="history"></div>*/
/*           </fieldset>*/
/*           <br />*/
/*           <fieldset>*/
/*             <legend>{{ text_history_add }}</legend>*/
/*             <form class="form-horizontal">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-return-status">{{ entry_return_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="return_status_id" id="input-return-status" class="form-control">*/
/*                     {% for return_status in return_statuses %}*/
/*                     {% if return_status.return_status_id == return_status_id %}*/
/*                     <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-notify">{{ entry_notify }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="checkbox" name="notify" value="1" id="input-notify" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-history-comment">{{ entry_comment }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="comment" rows="8" id="input-history-comment" class="form-control"></textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="text-right">*/
/*                 <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*               </div>*/
/*             </form>*/
/*           </fieldset>*/
/*         </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						category: item['customer_group'],*/
/* 						label: item['name'],*/
/* 						value: item['customer_id'],*/
/* 						firstname: item['firstname'],*/
/* 						lastname: item['lastname'],*/
/* 						email: item['email'],*/
/* 						telephone: item['telephone']			*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'customer\']').val(item['label']);*/
/* 		$('input[name=\'customer_id\']').val(item['value']);*/
/* 		$('input[name=\'firstname\']').val(item['firstname']);*/
/* 		$('input[name=\'lastname\']').val(item['lastname']);*/
/* 		$('input[name=\'email\']').val(item['email']);*/
/* 		$('input[name=\'telephone\']').val(item['telephone']);*/
/* 	}*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'product\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id'],*/
/* 						model: item['model']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'product\']').val(item['label']);*/
/* 		$('input[name=\'product_id\']').val(item['value']);	*/
/* 		$('input[name=\'model\']').val(item['model']);	*/
/* 	}*/
/* });*/
/* */
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* 	*/
/* 	$('#history').load(this.href);*/
/* });			*/
/* */
/* $('#history').load('index.php?route=sale/return/history&user_token={{ user_token }}&return_id={{ return_id }}');*/
/* */
/* $('#button-history').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/return/addhistory&user_token={{ user_token }}&return_id={{ return_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'return_status_id=' + encodeURIComponent($('#tab-history select[name=\'return_status_id\']').val()) + '&notify=' + ($('input[name=\'notify\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent($('#tab-history textarea[name=\'comment\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-history').button('loading');	*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-history').button('reset');	*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* 	*/
/* 			if (json['error']) {*/
/* 				 $('#tab-history').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#history').load('index.php?route=sale/return/history&user_token={{ user_token }}&return_id={{ return_id }}');*/
/* 				*/
/* 				$('#tab-history').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#tab-history textarea[name=\'comment\']').val('');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
