<?php

/* customerpartner/reason_list.twig */
class __TwigTemplate_2d6f8cc1f120803e7d1b9aac22917a33b12516fb223ac0f5d094266706984dd8 extends Twig_Template
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
          <a href=\"";
        // line 6
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-reason').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-5\">
              <div class=\"form-group\">
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
            </div>

            <div class=\"col-sm-5\">
              <div class=\"form-group\">
                <select name=\"filter_status\" class=\"form-control\" id=\"input-status\">
                  <option value=\"*\">";
        // line 44
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</option>
                  ";
        // line 45
        if ((isset($context["filter_status"]) ? $context["filter_status"] : null)) {
            // line 46
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 48
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 50
        echo "                  ";
        if (( !(null === (isset($context["filter_status"]) ? $context["filter_status"] : null)) &&  !(isset($context["filter_status"]) ? $context["filter_status"] : null))) {
            // line 51
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 53
            echo "                  <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 55
        echo "                </select>
              </div>
            </div>

            <div class=\"col-sm-1\">
              <div class=\"form-group\">
                <a  id=\"button-filter\" class=\"btn btn-primary pull-right\">";
        // line 61
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</a>
              </div>
            </div>
            <div class=\"col-sm-1\">
              <div class=\"form-group\">
                <a id=\"button-filter-clear\" class=\"btn btn-danger pull-right\">";
        // line 66
        echo (isset($context["button_clear_filter"]) ? $context["button_clear_filter"] : null);
        echo "</a>
              </div>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 71
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-reason\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 77
        if (((isset($context["sort"]) ? $context["sort"] : null) == "mprd.title")) {
            // line 78
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        } else {
            // line 80
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        }
        // line 81
        echo "</td>
                  <td class=\"text-left\">";
        // line 82
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</td>

                  <td class=\"text-right\">";
        // line 84
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 88
        if ((array_key_exists("reasons", $context) && (isset($context["reasons"]) ? $context["reasons"] : null))) {
            // line 89
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reasons"]) ? $context["reasons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                // line 90
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 91
                if (twig_in_filter($this->getAttribute($context["reason"], "reason_id", array(), "array"), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 92
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["reason"], "reason_id", array(), "array");
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 94
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["reason"], "reason_id", array(), "array");
                    echo "\" />
                    ";
                }
                // line 95
                echo "</td>
                  <td class=\"text-left\">";
                // line 96
                echo $this->getAttribute($context["reason"], "title", array(), "array");
                echo "</td>
                  <td class=\"text-left\">";
                // line 97
                echo (($this->getAttribute($context["reason"], "status", array(), "array")) ? ((isset($context["text_enabled"]) ? $context["text_enabled"] : null)) : ((isset($context["text_disabled"]) ? $context["text_disabled"] : null)));
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 98
                echo $this->getAttribute($context["reason"], "edit", array(), "array");
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                ";
        } else {
            // line 102
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 103
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 106
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 111
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 112
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-filter-clear').on('click', clear_inputs);

  function clear_inputs() {
    \$('input[name=\\'filter_seller\\']').val('');
    \$('select[name=\\'filter_status\\']').val('');
  }

  \$('#button-filter').on('click', function() {
\turl = 'index.php?route=customerpartner/reason&user_token=";
        // line 126
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_seller = \$('input[name=\\'filter_seller\\']').val();

\tif (filter_seller) {
\t\turl += '&filter_seller=' + encodeURIComponent(filter_seller);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = url;
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});
//--></script>
<script>
    \$('input[name=\\'filter_customer\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customerpartner/review/autocomplete&user_token=";
        // line 152
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_customer=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_customer\\']').val(item['label']);
    }
  });

  \$('input[name=\\'filter_seller\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customerpartner/review/autocomplete&user_token=";
        // line 172
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_seller=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_seller\\']').val(item['label']);
    }
  });
</script></div>
";
        // line 189
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerpartner/reason_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 189,  353 => 172,  330 => 152,  301 => 126,  284 => 112,  280 => 111,  273 => 106,  267 => 103,  264 => 102,  261 => 101,  250 => 98,  246 => 97,  242 => 96,  239 => 95,  233 => 94,  227 => 92,  225 => 91,  222 => 90,  217 => 89,  215 => 88,  208 => 84,  203 => 82,  200 => 81,  192 => 80,  182 => 78,  180 => 77,  171 => 71,  163 => 66,  155 => 61,  147 => 55,  141 => 53,  135 => 51,  132 => 50,  126 => 48,  120 => 46,  118 => 45,  114 => 44,  102 => 37,  92 => 30,  88 => 28,  80 => 24,  77 => 23,  69 => 19,  67 => 18,  61 => 14,  50 => 12,  46 => 11,  41 => 9,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*           <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-reason').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if (error_warning) %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if (success) %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="well">*/
/*           <div class="row">*/
/*             <div class="col-sm-5">*/
/*               <div class="form-group">*/
/*                   <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ column_name }}" id="input-name" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-5">*/
/*               <div class="form-group">*/
/*                 <select name="filter_status" class="form-control" id="input-status">*/
/*                   <option value="*">{{ column_status }}</option>*/
/*                   {% if (filter_status) %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   {% endif %}*/
/*                   {% if (not (filter_status is null) and not filter_status) %}*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-1">*/
/*               <div class="form-group">*/
/*                 <a  id="button-filter" class="btn btn-primary pull-right">{{ button_filter }}</a>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-sm-1">*/
/*               <div class="form-group">*/
/*                 <a id="button-filter-clear" class="btn btn-danger pull-right">{{ button_clear_filter }}</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-reason">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if (sort == 'mprd.title') %}*/
/*                     <a href="{{ sort_title }}" class="{{ order|lower }}">{{ column_title }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_title }}">{{ column_title }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ entry_status }}</td>*/
/* */
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if (reasons is defined and reasons) %}*/
/*                 {% for reason in reasons %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if reason['reason_id'] in  selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ reason['reason_id'] }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ reason['reason_id'] }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ reason['title'] }}</td>*/
/*                   <td class="text-left">{{ reason['status'] ? text_enabled : text_disabled }}</td>*/
/*                   <td class="text-right"><a href="{{ reason['edit'] }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*   $('#button-filter-clear').on('click', clear_inputs);*/
/* */
/*   function clear_inputs() {*/
/*     $('input[name=\'filter_seller\']').val('');*/
/*     $('select[name=\'filter_status\']').val('');*/
/*   }*/
/* */
/*   $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=customerpartner/reason&user_token={{ user_token }}';*/
/* */
/* 	var filter_seller = $('input[name=\'filter_seller\']').val();*/
/* */
/* 	if (filter_seller) {*/
/* 		url += '&filter_seller=' + encodeURIComponent(filter_seller);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status != '*') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	pickTime: false*/
/* });*/
/* //--></script>*/
/* <script>*/
/*     $('input[name=\'filter_customer\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=customerpartner/review/autocomplete&user_token={{ user_token }}&filter_customer=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['name'],*/
/*               value: item['customer_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     'select': function(item) {*/
/*       $('input[name=\'filter_customer\']').val(item['label']);*/
/*     }*/
/*   });*/
/* */
/*   $('input[name=\'filter_seller\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=customerpartner/review/autocomplete&user_token={{ user_token }}&filter_seller=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['name'],*/
/*               value: item['customer_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     'select': function(item) {*/
/*       $('input[name=\'filter_seller\']').val(item['label']);*/
/*     }*/
/*   });*/
/* </script></div>*/
/* {{ footer }}*/
/* */
