<?php

/* extension/module/mta/mta_pds_dt_c.twig */
class __TwigTemplate_ff1b3ee42a290781198f0437ae6fbba8d21fd67c59f43e608bbd0d744a41dad3 extends Twig_Template
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
        echo "<div style=\"background-color:#efefef;border:2px solid #ababab;z-index:99999999;display:none;\" id=\"caffiliate_dt_overlay_div\"><div style=\"text-align:right;padding-right:5px;\"><a class=\"overlay_close\">";
        echo (isset($context["oy_close"]) ? $context["oy_close"] : null);
        echo "</a><div style=\"text-align:center;font-weight:bold;\">";
        echo (isset($context["oy_title"]) ? $context["oy_title"] : null);
        echo "<hr /></div><div style=\"height:400px;width:850px;overflow-y:auto;margin:3px;padding:5px;\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" id=\"caffiliate_dt\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"5%\">";
        // line 5
        echo (isset($context["oy_id"]) ? $context["oy_id"] : null);
        echo "</th>
\t\t\t<th width=\"20%\">";
        // line 6
        echo (isset($context["oy_name"]) ? $context["oy_name"] : null);
        echo "</th>
\t\t\t<th width=\"20%\">";
        // line 7
        echo (isset($context["oy_email"]) ? $context["oy_email"] : null);
        echo "</th>
\t\t\t<th width=\"20%\">";
        // line 8
        echo (isset($context["oy_scheme"]) ? $context["oy_scheme"] : null);
        echo "</th>
\t\t\t<th width=\"5%\">";
        // line 9
        echo (isset($context["oy_level"]) ? $context["oy_level"] : null);
        echo "</th>
\t\t\t<th width=\"10%\">";
        // line 10
        echo (isset($context["oy_balance"]) ? $context["oy_balance"] : null);
        echo "</th>\t\t\t
\t\t\t<th width=\"20%\">";
        // line 11
        echo (isset($context["oy_date_added"]) ? $context["oy_date_added"] : null);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td colspan=\"7\" class=\"dataTables_empty\">";
        // line 16
        echo (isset($context["oy_loading"]) ? $context["oy_loading"] : null);
        echo "</td>

\t\t</tr>
\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<th>";
        // line 22
        echo (isset($context["oy_id"]) ? $context["oy_id"] : null);
        echo "</th>
\t\t\t<th>";
        // line 23
        echo (isset($context["oy_name"]) ? $context["oy_name"] : null);
        echo "</th>
\t\t\t<th>";
        // line 24
        echo (isset($context["oy_email"]) ? $context["oy_email"] : null);
        echo "</th>
\t\t\t<th>";
        // line 25
        echo (isset($context["oy_scheme"]) ? $context["oy_scheme"] : null);
        echo "</th>
\t\t\t<th>";
        // line 26
        echo (isset($context["oy_level"]) ? $context["oy_level"] : null);
        echo "</th>
\t\t\t<th>";
        // line 27
        echo (isset($context["oy_balance"]) ? $context["oy_balance"] : null);
        echo "</th>\t\t\t
\t\t\t<th>";
        // line 28
        echo (isset($context["oy_date_added"]) ? $context["oy_date_added"] : null);
        echo "</th>
\t\t</tr>
\t</tfoot>
</table>
</div>
";
        // line 33
        if ((isset($context["show_save_button"]) ? $context["show_save_button"] : null)) {
            // line 34
            echo "<div style=\"text-align:center;\"><hr /><input type=\"button\" id=\"caffiliate_dt_save_button\" value=\"\" /></div>
";
        }
        // line 36
        echo "<div style=\"text-align:right;padding-right:5px;\"><hr /><a class=\"overlay_close\">";
        echo (isset($context["oy_close"]) ? $context["oy_close"] : null);
        echo "</a></div>
</div>
<script type=\"text/javascript\">
window.TEXT_NONE_MTA = '";
        // line 39
        echo (isset($context["text_none_jsstr"]) ? $context["text_none_jsstr"] : null);
        echo "';
</script>
";
        // line 41
        if ((isset($context["add_js"]) ? $context["add_js"] : null)) {
            // line 42
            echo "<script type=\"text/javascript\" src=\"view/javascript/mta/";
            echo (isset($context["add_js"]) ? $context["add_js"] : null);
            echo ".js\"></script>
";
        }
        // line 44
        if ((isset($context["add_jsp"]) ? $context["add_jsp"] : null)) {
            // line 45
            echo "<script type=\"text/javascript\" src=\"";
            echo (isset($context["add_jsp"]) ? $context["add_jsp"] : null);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "extension/module/mta/mta_pds_dt_c.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  128 => 44,  122 => 42,  120 => 41,  115 => 39,  108 => 36,  104 => 34,  102 => 33,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  61 => 16,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  19 => 1,);
    }
}
/* <div style="background-color:#efefef;border:2px solid #ababab;z-index:99999999;display:none;" id="caffiliate_dt_overlay_div"><div style="text-align:right;padding-right:5px;"><a class="overlay_close">{{ oy_close }}</a><div style="text-align:center;font-weight:bold;">{{ oy_title }}<hr /></div><div style="height:400px;width:850px;overflow-y:auto;margin:3px;padding:5px;">*/
/* <table cellpadding="0" cellspacing="0" border="0" id="caffiliate_dt">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th width="5%">{{ oy_id }}</th>*/
/* 			<th width="20%">{{ oy_name }}</th>*/
/* 			<th width="20%">{{ oy_email }}</th>*/
/* 			<th width="20%">{{ oy_scheme }}</th>*/
/* 			<th width="5%">{{ oy_level }}</th>*/
/* 			<th width="10%">{{ oy_balance }}</th>			*/
/* 			<th width="20%">{{ oy_date_added }}</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		<tr>*/
/* 			<td colspan="7" class="dataTables_empty">{{ oy_loading }}</td>*/
/* */
/* 		</tr>*/
/* 	</tbody>*/
/* 	<tfoot>*/
/* 		<tr>*/
/* 			<th>{{ oy_id }}</th>*/
/* 			<th>{{ oy_name }}</th>*/
/* 			<th>{{ oy_email }}</th>*/
/* 			<th>{{ oy_scheme }}</th>*/
/* 			<th>{{ oy_level }}</th>*/
/* 			<th>{{ oy_balance }}</th>			*/
/* 			<th>{{ oy_date_added }}</th>*/
/* 		</tr>*/
/* 	</tfoot>*/
/* </table>*/
/* </div>*/
/* {% if show_save_button %}*/
/* <div style="text-align:center;"><hr /><input type="button" id="caffiliate_dt_save_button" value="" /></div>*/
/* {% endif %}*/
/* <div style="text-align:right;padding-right:5px;"><hr /><a class="overlay_close">{{ oy_close }}</a></div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* window.TEXT_NONE_MTA = '{{ text_none_jsstr }}';*/
/* </script>*/
/* {% if add_js %}*/
/* <script type="text/javascript" src="view/javascript/mta/{{ add_js }}.js"></script>*/
/* {% endif %}*/
/* {% if add_jsp %}*/
/* <script type="text/javascript" src="{{ add_jsp }}"></script>*/
/* {% endif %}*/
