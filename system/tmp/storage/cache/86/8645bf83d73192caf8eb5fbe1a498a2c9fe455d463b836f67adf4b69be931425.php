<?php

/* default/template/account/transaction.twig */
class __TwigTemplate_63b6911cacd3e00f480c61e986da1ecb5ae4423155a71f51ba915258c3c3142f extends Twig_Template
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
<div id=\"account-transaction\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 18
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo " <b>";
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "</b>.</p>

\t\t\t
\t\t\t\t";
        // line 22
        echo "\t\t\t\t
\t\t\t\t<div>
\t\t\t\t\t<form id=\"cash_transaction\" action=\" ";
        // line 24
        echo (isset($context["cash_transaction_add"]) ? $context["cash_transaction_add"] : null);
        echo " \" method=\"post\">
\t\t\t\t\t\t<input name=\"cash\" class=\"text-center\" type=\"number\" min=\"1\" step=\"1\">
\t\t\t\t\t\t<button class=\"btn btn-info\">申請現金</button>
\t\t\t\t\t</form>
\t\t\t\t\t";
        // line 28
        if ((isset($context["danger"]) ? $context["danger"] : null)) {
            // line 29
            echo "\t\t\t\t\t\t<div class=\"text-danger\"> ";
            echo (isset($context["danger"]) ? $context["danger"] : null);
            echo " </div>
\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 32
            echo "\t\t\t\t\t\t<div class=\"text-success\"> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " </div>
\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 37
        echo "\t\t\t\t



\t";
        // line 42
        echo "\t";
        if ((isset($context["mta_status"]) ? $context["mta_status"] : null)) {
            // line 43
            echo "\t<p>";
            echo (isset($context["text_total_earnings"]) ? $context["text_total_earnings"] : null);
            echo " <strong>";
            echo (isset($context["total_earnings"]) ? $context["total_earnings"] : null);
            echo "</strong>.</p>
\t";
            // line 44
            if ((isset($context["sub_affiliates"]) ? $context["sub_affiliates"] : null)) {
                echo "\t
\t\t";
                // line 45
                if ((isset($context["show_downline"]) ? $context["show_downline"] : null)) {
                    // line 46
                    echo "\t<div>\t\t
\t<a href=\"";
                    // line 47
                    echo (isset($context["link_affiliate_downline"]) ? $context["link_affiliate_downline"] : null);
                    echo "\">";
                    echo (isset($context["text_affiliate_downline"]) ? $context["text_affiliate_downline"] : null);
                    echo "</a></div>
\t";
                }
                // line 49
                echo "\t<div><a href=\"javascript:;\" onclick=\"javascript:\$('#view_subs_table').toggle();\" id=\"view_subs_link\">";
                echo (isset($context["text_view_subs"]) ? $context["text_view_subs"] : null);
                echo "</a></div>
\t<div class=\"table-responsive\" id=\"view_subs_table\" style=\"display:none;\">
\t<table class=\"table table-striped table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-right\">";
                // line 54
                echo (isset($context["column_level"]) ? $context["column_level"] : null);
                echo "</td>
        <td class=\"text-left\">";
                // line 55
                echo (isset($context["column_num_affs"]) ? $context["column_num_affs"] : null);
                echo "</td>
\t  </tr>
\t</thead>
\t<tbody>
\t\t";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sub_affiliates"]) ? $context["sub_affiliates"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["_sub_aff"]) {
                    // line 60
                    echo "\t\t<tr>
\t\t\t<td class=\"text-right\">";
                    // line 61
                    echo $this->getAttribute($context["_sub_aff"], "level", array());
                    echo "</td>
\t\t\t<td class=\"text-left\">";
                    // line 62
                    echo $this->getAttribute($context["_sub_aff"], "num", array());
                    echo "</td>
\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_sub_aff'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t</tbody>
\t</table>
\t</div>
\t";
            }
            // line 69
            echo "\t";
        }
        // line 70
        echo "\t";
        echo "\t


      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 77
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 78
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 79
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 84
        if ((isset($context["transactions"]) ? $context["transactions"] : null)) {
            // line 85
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 86
                echo "          <tr>
            <td class=\"text-left\">";
                // line 87
                echo $this->getAttribute($context["transaction"], "date_added", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 88
                echo $this->getAttribute($context["transaction"], "description", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 89
                echo $this->getAttribute($context["transaction"], "amount", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "          ";
        } else {
            // line 93
            echo "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 94
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</td>
          </tr>
          ";
        }
        // line 97
        echo "            </tbody>
          
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 102
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 103
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 106
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 108
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 109
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 111
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 111,  292 => 109,  288 => 108,  281 => 106,  275 => 103,  271 => 102,  264 => 97,  258 => 94,  255 => 93,  252 => 92,  243 => 89,  239 => 88,  235 => 87,  232 => 86,  227 => 85,  225 => 84,  217 => 79,  213 => 78,  209 => 77,  199 => 70,  196 => 69,  190 => 65,  181 => 62,  177 => 61,  174 => 60,  170 => 59,  163 => 55,  159 => 54,  150 => 49,  143 => 47,  140 => 46,  138 => 45,  134 => 44,  127 => 43,  124 => 42,  118 => 37,  114 => 34,  108 => 32,  105 => 31,  99 => 29,  97 => 28,  90 => 24,  86 => 22,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-transaction" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <p>{{ text_total }} <b>{{ total }}</b>.</p>*/
/* */
/* 			*/
/* 				{# cash transactions code starts here #}*/
/* 				*/
/* 				<div>*/
/* 					<form id="cash_transaction" action=" {{ cash_transaction_add }} " method="post">*/
/* 						<input name="cash" class="text-center" type="number" min="1" step="1">*/
/* 						<button class="btn btn-info">申請現金</button>*/
/* 					</form>*/
/* 					{% if danger %}*/
/* 						<div class="text-danger"> {{ danger }} </div>*/
/* 					{% endif %}*/
/* 					{% if success %}*/
/* 						<div class="text-success"> {{ success }} </div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				*/
/* 				{# cash transactions code ends here #}*/
/* 				*/
/* */
/* */
/* */
/* 	{# //+mod by yp start #}*/
/* 	{% if mta_status %}*/
/* 	<p>{{ text_total_earnings }} <strong>{{ total_earnings }}</strong>.</p>*/
/* 	{% if sub_affiliates %}	*/
/* 		{% if show_downline %}*/
/* 	<div>		*/
/* 	<a href="{{ link_affiliate_downline }}">{{ text_affiliate_downline }}</a></div>*/
/* 	{% endif %}*/
/* 	<div><a href="javascript:;" onclick="javascript:$('#view_subs_table').toggle();" id="view_subs_link">{{ text_view_subs }}</a></div>*/
/* 	<div class="table-responsive" id="view_subs_table" style="display:none;">*/
/* 	<table class="table table-striped table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-right">{{ column_level }}</td>*/
/*         <td class="text-left">{{ column_num_affs }}</td>*/
/* 	  </tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% for _sub_aff in sub_affiliates %}*/
/* 		<tr>*/
/* 			<td class="text-right">{{ _sub_aff.level }}</td>*/
/* 			<td class="text-left">{{ _sub_aff.num }}</td>*/
/* 		</tr>*/
/* 		{% endfor %}*/
/* 	</tbody>*/
/* 	</table>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	{% endif %}*/
/* 	{# //+mod by yp start #}	*/
/* */
/* */
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td class="text-left">{{ column_description }}</td>*/
/*               <td class="text-right">{{ column_amount }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% if transactions %}*/
/*           {% for transaction in transactions %}*/
/*           <tr>*/
/*             <td class="text-left">{{ transaction.date_added }}</td>*/
/*             <td class="text-left">{{ transaction.description }}</td>*/
/*             <td class="text-right">{{ transaction.amount }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="5">{{ text_empty }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
