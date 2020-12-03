<?php

/* catalog/category_list.twig */
class __TwigTemplate_1618d67db41919616a66e366dd617cb949b94873b8a853cbb478e6aa88e05b1b extends Twig_Template
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
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
        echo (isset($context["repair"]) ? $context["repair"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_rebuild"]) ? $context["button_rebuild"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">

      <div id=\"filter-category\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 21
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 25
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 26
        echo (isset($context["Search_Name"]) ? $context["Search_Name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
          
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 30
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              ";
        // line 31
        if ((isset($context["categories1"]) ? $context["categories1"] : null)) {
            // line 32
            echo "        
              <select class=\"form-control parent_filter_name\" name=\"parent_filter_name\">
              <option value=\"0\">所有分類</option>
              
              ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories1"]) ? $context["categories1"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "              
              ";
                // line 38
                if (($this->getAttribute($context["category"], "parent_id", array()) == 0)) {
                    // line 39
                    echo "              ";
                    if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["filter_parent_id"]) ? $context["filter_parent_id"] : null))) {
                        // line 40
                        echo "        
               
              <option value=\"";
                        // line 42
                        echo $this->getAttribute($context["category"], "category_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "</option>
               ";
                    } else {
                        // line 44
                        echo "              <option value=\"";
                        echo $this->getAttribute($context["category"], "category_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "</option>
              ";
                    }
                    // line 46
                    echo "              
              
              ";
                }
                // line 49
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "              </select>
              ";
        }
        // line 52
        echo "            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 54
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
  <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
  
    ";
        // line 61
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 62
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 66
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 67
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 71
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 73
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 76
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 82
        if ((isset($context["sort"]) ? $context["sort"] : null)) {
            // line 83
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        } else {
            // line 85
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        }
        // line 86
        echo "</td>
                  <td class=\"text-right\">";
        // line 87
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            // line 88
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        } else {
            // line 90
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        }
        // line 91
        echo "</td>
                  <td class=\"text-right\">";
        // line 92
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 96
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 97
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 98
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 99
                if (twig_in_filter($this->getAttribute($context["category"], "category_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 100
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 102
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" />
                    ";
                }
                // line 103
                echo "</td>
                  <td class=\"text-left\">";
                // line 104
                echo $this->getAttribute($context["category"], "name", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 105
                echo $this->getAttribute($context["category"], "sort_order", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 106
                echo $this->getAttribute($context["category"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                ";
        } else {
            // line 110
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 111
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 114
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 119
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 120
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>

      </div>
      <script type=\"text/javascript\">
          \$('#button-filter').on('click', function() {
            var url = 'index.php?route=catalog/category&user_token=";
        // line 130
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
            var filter_parent_id =\$('.parent_filter_name').val();
            
            if (filter_parent_id) { 
            url += '&filter_parent_id=' + encodeURIComponent(filter_parent_id);
            } 
            var filter_name = \$('input[name=\\'filter_name\\']').val(); 
            if (filter_name) { 
            url += '&filter_name=' + encodeURIComponent(filter_name);
            } 
            location = url; 
            }); 
            
            \$('input[name=\\'filter_name\\']').autocomplete({ 
            'source': function(request, response) { 
            \$.ajax({ 
            url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 146
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
            dataType: 'json',
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
           \$('input[name=\\'filter_name\\']').val(\$.trim(item['label'].substring(item['label'].indexOf(\">\") + 1)));
            var url = 'index.php?route=catalog/category&user_token=";
        // line 160
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "'; 
            var filter_name = \$('input[name=\\'filter_name\\']').val();
            if (filter_name) { 
            url += '&filter_name=' + encodeURIComponent(filter_name); 
            }  
            }});
            \$(\"input\").keypress(function(event) { 
            if (event.which == 13) {    
            event.preventDefault();   
            var url = 'index.php?route=catalog/category&user_token=";
        // line 169
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
            var filter_name = \$('input[name=\\'filter_name\\']').val(); 
            if (filter_name) {      
            url += '&filter_name=' + encodeURIComponent(filter_name);   
            }  
          }});
        </script>
        
";
        // line 177
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 177,  389 => 169,  377 => 160,  360 => 146,  341 => 130,  328 => 120,  324 => 119,  317 => 114,  311 => 111,  308 => 110,  305 => 109,  294 => 106,  290 => 105,  286 => 104,  283 => 103,  277 => 102,  271 => 100,  269 => 99,  266 => 98,  261 => 97,  259 => 96,  252 => 92,  249 => 91,  241 => 90,  231 => 88,  229 => 87,  226 => 86,  218 => 85,  208 => 83,  206 => 82,  197 => 76,  191 => 73,  187 => 71,  179 => 67,  176 => 66,  168 => 62,  166 => 61,  156 => 54,  152 => 52,  148 => 50,  142 => 49,  137 => 46,  129 => 44,  122 => 42,  118 => 40,  115 => 39,  113 => 38,  110 => 37,  106 => 36,  100 => 32,  98 => 31,  94 => 30,  85 => 26,  81 => 25,  74 => 21,  64 => 13,  53 => 11,  49 => 10,  44 => 8,  37 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a> <a href="{{ repair }}" data-toggle="tooltip" title="{{ button_rebuild }}" class="btn btn-default"><i class="fa fa-refresh"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/* */
/*       <div id="filter-category" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ Search_Name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*           */
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               {% if categories1 %}*/
/*         */
/*               <select class="form-control parent_filter_name" name="parent_filter_name">*/
/*               <option value="0">所有分類</option>*/
/*               */
/*               {% for category in categories1 %}*/
/*               */
/*               {% if category.parent_id == 0 %}*/
/*               {% if category.category_id == filter_parent_id %}*/
/*         */
/*                */
/*               <option value="{{category.category_id }}" selected="selected">{{ category.name}}</option>*/
/*                {% else %}*/
/*               <option value="{{ category.category_id}}">{{ category.name}}</option>*/
/*               {% endif %}*/
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*               </select>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*   <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*   */
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-category">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort %}*/
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'sort_order' %}*/
/*                     <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if categories %}*/
/*                 {% for category in categories %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if category.category_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ category.category_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ category.category_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ category.name }}</td>*/
/*                   <td class="text-right">{{ category.sort_order }}</td>*/
/*                   <td class="text-right"><a href="{{ category.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
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
/* </div>*/
/* */
/*       </div>*/
/*       <script type="text/javascript">*/
/*           $('#button-filter').on('click', function() {*/
/*             var url = 'index.php?route=catalog/category&user_token={{ user_token }}';*/
/*             var filter_parent_id =$('.parent_filter_name').val();*/
/*             */
/*             if (filter_parent_id) { */
/*             url += '&filter_parent_id=' + encodeURIComponent(filter_parent_id);*/
/*             } */
/*             var filter_name = $('input[name=\'filter_name\']').val(); */
/*             if (filter_name) { */
/*             url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*             } */
/*             location = url; */
/*             }); */
/*             */
/*             $('input[name=\'filter_name\']').autocomplete({ */
/*             'source': function(request, response) { */
/*             $.ajax({ */
/*             url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*             dataType: 'json',*/
/*             success: function(json) {  */
/*             response($.map(json, function(item) { */
/*             return {     */
/*             label: item['name'],   */
/*             value: item['category_id']    */
/*             }   */
/*             }));  */
/*             }  */
/*             });*/
/*             }, */
/*             'select': function(item) {      */
/*            $('input[name=\'filter_name\']').val($.trim(item['label'].substring(item['label'].indexOf(">") + 1)));*/
/*             var url = 'index.php?route=catalog/category&user_token={{ user_token }}'; */
/*             var filter_name = $('input[name=\'filter_name\']').val();*/
/*             if (filter_name) { */
/*             url += '&filter_name=' + encodeURIComponent(filter_name); */
/*             }  */
/*             }});*/
/*             $("input").keypress(function(event) { */
/*             if (event.which == 13) {    */
/*             event.preventDefault();   */
/*             var url = 'index.php?route=catalog/category&user_token={{ user_token }}';*/
/*             var filter_name = $('input[name=\'filter_name\']').val(); */
/*             if (filter_name) {      */
/*             url += '&filter_name=' + encodeURIComponent(filter_name);   */
/*             }  */
/*           }});*/
/*         </script>*/
/*         */
/* {{ footer }}*/
