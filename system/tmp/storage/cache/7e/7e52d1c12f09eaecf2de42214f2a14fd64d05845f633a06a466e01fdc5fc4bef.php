<?php

/* extension/module/cash_transactions.twig */
class __TwigTemplate_a2c8ec3aaf89ff8d29058678a51b24526280aef40583c1b739ee44e6f5411d30 extends Twig_Template
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

";
        // line 3
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "


<div id=\"content\">
<div class=\"page-header\">
  <div class=\"container-fluid\">
    <div class=\"pull-right\">
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 11
        echo (isset($context["shipping"]) ? $context["shipping"] : null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_shipping_print"]) ? $context["button_shipping_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 12
        echo (isset($context["invoice"]) ? $context["invoice"] : null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_invoice_print"]) ? $context["button_invoice_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 13
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
    <h1>";
        // line 14
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
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
        // line 19
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 22
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 23
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 27
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 28
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 32
        echo "  <div class=\"row\">
    
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 37
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 41
        echo (isset($context["entry_cash_transaction_id"]) ? $context["entry_cash_transaction_id"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_cash_transaction_id\" value=\"";
        // line 42
        echo (isset($context["filter_cash_transaction_id"]) ? $context["filter_cash_transaction_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cash_transaction_id"]) ? $context["entry_cash_transaction_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 45
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 46
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 49
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <select name=\"filter_status\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cash_statuses"]) ? $context["cash_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cash_status"]) {
            // line 54
            echo "              ";
            if (($this->getAttribute($context["cash_status"], "id", array()) == (isset($context["filter_status"]) ? $context["filter_status"] : null))) {
                // line 55
                echo "              
              <option value=\"";
                // line 56
                echo $this->getAttribute($context["cash_status"], "_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["cash_status"], "text", array());
                echo "</option>
              
              ";
            } else {
                // line 59
                echo "              
              <option value=\"";
                // line 60
                echo $this->getAttribute($context["cash_status"], "id", array());
                echo "\">";
                echo $this->getAttribute($context["cash_status"], "text", array());
                echo "</option>
              
              ";
            }
            // line 63
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 68
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 69
        echo (isset($context["filter_total"]) ? $context["filter_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 72
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 74
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 80
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 82
        echo (isset($context["filter_date_modified"]) ? $context["filter_date_modified"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 88
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 97
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>

                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 107
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cash.cash_transaction_id")) {
            echo " <a href=\"";
            echo (isset($context["sort_cash_transaction"]) ? $context["sort_cash_transaction"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_transaction_id"]) ? $context["column_transaction_id"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_cash_transaction"]) ? $context["sort_cash_transaction"] : null);
            echo "\">";
            echo (isset($context["column_transaction_id"]) ? $context["column_transaction_id"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 108
        if (((isset($context["sort"]) ? $context["sort"] : null) == "customer")) {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 109
        echo (isset($context["column_account"]) ? $context["column_account"] : null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 110
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cash.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 111
        if (((isset($context["sort"]) ? $context["sort"] : null) == "t.amount")) {
            echo " <a href=\"";
            echo (isset($context["sort_total"]) ? $context["sort_total"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_total"]) ? $context["sort_total"] : null);
            echo "\">";
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 112
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cash.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 113
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cash.date_modified")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-center\">";
        // line 114
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>

                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 120
        if ((isset($context["transactions"]) ? $context["transactions"] : null)) {
            // line 121
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 122
                echo "                <tr>
                  <td class=\"text-center\"> ";
                // line 123
                if (twig_in_filter($this->getAttribute($context["transaction"], "transaction_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 124
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["transaction"], "cash_transaction_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 126
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["transaction"], "cash_transaction_id", array());
                    echo "\" />
                    ";
                }
                // line 128
                echo "                  </td>
                  <td class=\"text-right\">";
                // line 129
                echo $this->getAttribute($context["transaction"], "cash_transaction_id", array());
                echo "</td>
                  <td class=\"text-left\"><a href=\"";
                // line 130
                echo $this->getAttribute($context["transaction"], "customer_link", array());
                echo "\">";
                echo $this->getAttribute($context["transaction"], "customer_name", array());
                echo "</a></td>
                  <td class=\"text-left\">";
                // line 131
                echo $this->getAttribute($context["transaction"], "bank_account", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 132
                echo $this->getAttribute($context["transaction"], "text_status", array());
                echo "</td>
                  <td class=\"text-right\">\$";
                // line 133
                echo $this->getAttribute($context["transaction"], "total", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 134
                echo $this->getAttribute($context["transaction"], "date_added", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 135
                echo $this->getAttribute($context["transaction"], "date_modified", array());
                echo "</td>
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">
                      <div class=\"btn-group\">
                      ";
                // line 138
                if (($this->getAttribute($context["transaction"], "status", array()) == "pendding")) {
                    // line 139
                    echo "                      <a href=\"";
                    echo $this->getAttribute($context["transaction"], "accept_link", array());
                    echo "\" class=\"btn btn-success\">
                        審核
                      </a>
                      <a href=\"";
                    // line 142
                    echo $this->getAttribute($context["transaction"], "cancel_link", array());
                    echo "\" class=\"btn btn-danger\">
                        取消
                      </a>
                      ";
                } elseif (($this->getAttribute(                // line 145
$context["transaction"], "status", array()) == "completed")) {
                    // line 146
                    echo "                      <a href=\"";
                    echo $this->getAttribute($context["transaction"], "cancel_link", array());
                    echo "\" class=\"btn btn-danger\">
                        取消
                      </a>
                      ";
                } else {
                    // line 150
                    echo "                      <a class=\"btn btn-primary\" style=\"visibility: hidden;\" disabled>
                        通知
                      </a>
                      ";
                }
                // line 154
                echo "                        ";
                // line 161
                echo "                      </div>
                    </div>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "                ";
        } else {
            // line 167
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"9\">";
            // line 168
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 171
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 177
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 178
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>


";
        // line 186
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "

<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_cash_transaction_id = \$('input[name=\\'filter_cash_transaction_id\\']').val();

\tif (filter_cash_transaction_id) {
\t\turl += '&filter_cash_transaction_id=' + encodeURIComponent(filter_cash_transaction_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=extension/module/cash_transactions&user_token=";
        // line 228
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 235
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script> 

<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 257
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script>

<script type=\"text/javascript\"><!--
\$('.btn-danger').on('click', function(){
  return confirm(\"取消後，將會無法再更改\\n你確定嗎?\");
});
//--></script>

";
    }

    public function getTemplateName()
    {
        return "extension/module/cash_transactions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 257,  570 => 235,  560 => 228,  515 => 186,  504 => 178,  500 => 177,  492 => 171,  486 => 168,  483 => 167,  480 => 166,  470 => 161,  468 => 154,  462 => 150,  454 => 146,  452 => 145,  446 => 142,  439 => 139,  437 => 138,  431 => 135,  427 => 134,  423 => 133,  419 => 132,  415 => 131,  409 => 130,  405 => 129,  402 => 128,  396 => 126,  390 => 124,  388 => 123,  385 => 122,  380 => 121,  378 => 120,  369 => 114,  351 => 113,  333 => 112,  315 => 111,  297 => 110,  293 => 109,  275 => 108,  257 => 107,  244 => 97,  232 => 88,  221 => 82,  216 => 80,  205 => 74,  200 => 72,  192 => 69,  188 => 68,  182 => 64,  176 => 63,  168 => 60,  165 => 59,  157 => 56,  154 => 55,  151 => 54,  147 => 53,  140 => 49,  132 => 46,  128 => 45,  120 => 42,  116 => 41,  109 => 37,  102 => 32,  94 => 28,  91 => 27,  83 => 23,  81 => 22,  76 => 19,  65 => 17,  61 => 16,  56 => 14,  50 => 13,  44 => 12,  38 => 11,  34 => 10,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* {{ column_left }}*/
/* */
/* */
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <div class="pull-right">*/
/*       <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-order').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*       <button type="submit" id="button-shipping" form="form-order" formaction="{{ shipping }}" formtarget="_blank" data-toggle="tooltip" title="{{ button_shipping_print }}" class="btn btn-info"><i class="fa fa-truck"></i></button>*/
/*       <button type="submit" id="button-invoice" form="form-order" formaction="{{ invoice }}" formtarget="_blank" data-toggle="tooltip" title="{{ button_invoice_print }}" class="btn btn-info"><i class="fa fa-print"></i></button>*/
/*       <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a> </div>*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">{% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     */
/*     <div id="filter-order" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-order-id">{{ entry_cash_transaction_id }}</label>*/
/*             <input type="text" name="filter_cash_transaction_id" value="{{ filter_cash_transaction_id }}" placeholder="{{ entry_cash_transaction_id }}" id="input-order-id" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*             <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-order-status">{{ entry_status }}</label>*/
/*             <select name="filter_status" id="input-order-status" class="form-control">*/
/*               <option value=""></option>*/
/*               */
/*               {% for cash_status in cash_statuses %}*/
/*               {% if cash_status.id == filter_status %}*/
/*               */
/*               <option value="{{ cash_status._id }}" selected="selected">{{ cash_status.text }}</option>*/
/*               */
/*               {% else %}*/
/*               */
/*               <option value="{{ cash_status.id }}">{{ cash_status.text }}</option>*/
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-total">{{ entry_total }}</label>*/
/*             <input type="text" name="filter_total" value="{{ filter_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*             <div class="input-group date">*/
/*               <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*               <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*               </span> </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-date-modified">{{ entry_date_modified }}</label>*/
/*             <div class="input-group date">*/
/*               <input type="text" name="filter_date_modified" value="{{ filter_date_modified }}" placeholder="{{ entry_date_modified }}" data-date-format="YYYY-MM-DD" id="input-date-modified" class="form-control" />*/
/*               <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*               </span> </div>*/
/*           </div>*/
/*           <div class="form-group text-right">*/
/*             <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <form method="post" action="" enctype="multipart/form-data" id="form-order">*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered table-hover">*/
/*                 <thead>*/
/*                   <tr>*/
/* */
/*                     <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                     <td class="text-right">{% if sort == 'cash.cash_transaction_id' %} <a href="{{ sort_cash_transaction }}" class="{{ order|lower }}">{{ column_transaction_id }}</a> {% else %} <a href="{{ sort_cash_transaction }}">{{ column_transaction_id }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'customer' %} <a href="{{ sort_customer }}" class="{{ order|lower }}">{{ column_customer }}</a> {% else %} <a href="{{ sort_customer }}">{{ column_customer }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{{ column_account }}</td>*/
/*                     <td class="text-left">{% if sort == 'cash.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                     <td class="text-right">{% if sort == 't.amount' %} <a href="{{ sort_total }}" class="{{ order|lower }}">{{ column_total }}</a> {% else %} <a href="{{ sort_total }}">{{ column_total }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'cash.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'cash.date_modified' %} <a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a> {% else %} <a href="{{ sort_date_modified }}">{{ column_date_modified }}</a> {% endif %}</td>*/
/*                     <td class="text-center">{{ column_action }}</td>*/
/* */
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% if transactions %}*/
/*                 {% for transaction in transactions %}*/
/*                 <tr>*/
/*                   <td class="text-center"> {% if transaction.transaction_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ transaction.cash_transaction_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ transaction.cash_transaction_id }}" />*/
/*                     {% endif %}*/
/*                   </td>*/
/*                   <td class="text-right">{{ transaction.cash_transaction_id }}</td>*/
/*                   <td class="text-left"><a href="{{ transaction.customer_link }}">{{ transaction.customer_name }}</a></td>*/
/*                   <td class="text-left">{{ transaction.bank_account }}</td>*/
/*                   <td class="text-left">{{ transaction.text_status }}</td>*/
/*                   <td class="text-right">${{ transaction.total }}</td>*/
/*                   <td class="text-left">{{ transaction.date_added }}</td>*/
/*                   <td class="text-left">{{ transaction.date_modified }}</td>*/
/*                   <td class="text-right"><div style="min-width: 120px;">*/
/*                       <div class="btn-group">*/
/*                       {% if transaction.status == "pendding" %}*/
/*                       <a href="{{ transaction.accept_link }}" class="btn btn-success">*/
/*                         審核*/
/*                       </a>*/
/*                       <a href="{{ transaction.cancel_link }}" class="btn btn-danger">*/
/*                         取消*/
/*                       </a>*/
/*                       {% elseif transaction.status == "completed" %}*/
/*                       <a href="{{ transaction.cancel_link }}" class="btn btn-danger">*/
/*                         取消*/
/*                       </a>*/
/*                       {% else %}*/
/*                       <a class="btn btn-primary" style="visibility: hidden;" disabled>*/
/*                         通知*/
/*                       </a>*/
/*                       {% endif %}*/
/*                         {#*/
/*                         <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu dropdown-menu-right">*/
/*                           <li><a href="{{ order.edit }}"><i class="fa fa-pencil"></i> {{ button_edit }}</a></li>*/
/*                           <li><a href="{{ order.order_id }}"><i class="fa fa-trash-o"></i> {{ button_delete }}</a></li>*/
/*                         </ul>*/
/*                         #}*/
/*                       </div>*/
/*                     </div>*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="9">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*           </form>*/
/*           <div class="row">*/
/*             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* {{ footer }}*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = '';*/
/* */
/* 	var filter_cash_transaction_id = $('input[name=\'filter_cash_transaction_id\']').val();*/
/* */
/* 	if (filter_cash_transaction_id) {*/
/* 		url += '&filter_cash_transaction_id=' + encodeURIComponent(filter_cash_transaction_id);*/
/* 	}*/
/* */
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* */
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	var filter_total = $('input[name=\'filter_total\']').val();*/
/* */
/* 	if (filter_total) {*/
/* 		url += '&filter_total=' + encodeURIComponent(filter_total);*/
/* 	}*/
/* */
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* */
/* 	var filter_date_modified = $('input[name=\'filter_date_modified\']').val();*/
/* */
/* 	if (filter_date_modified) {*/
/* 		url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=extension/module/cash_transactions&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_customer\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script> */
/* */
/* <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/*   <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('.btn-danger').on('click', function(){*/
/*   return confirm("取消後，將會無法再更改\n你確定嗎?");*/
/* });*/
/* //--></script>*/
/* */
/* */
