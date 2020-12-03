<?php

/* extension/module/mta/product_commission.twig */
class __TwigTemplate_16db0a78f47137343b8332558fb2544cd3ba3e14f6cf540297134d56bb89e000 extends Twig_Template
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
        echo "<div class=\"form-group\">
\t<label class=\"col-sm-2 control-label\" for=\"input-product-scheme-id\">";
        // line 2
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
\t<div class=\"col-sm-10\">
\t\t<select name=\"product_scheme_id\" class=\"form-control\" id=\"input-product-scheme-id\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schemes0"]) ? $context["schemes0"] : null));
        foreach ($context['_seq'] as $context["_sid"] => $context["_sname"]) {
            // line 6
            echo "\t\t\t<option value=\"";
            echo $context["_sid"];
            echo "\"";
            if (($context["_sid"] == (isset($context["product_scheme_id"]) ? $context["product_scheme_id"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $context["_sname"];
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_sid'], $context['_sname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t</select>
\t</div>
</div>
<div style=\"padding:5px;\"><a id=\"product_affiliates_link\" href=\"javascript:;\">";
        // line 11
        echo (isset($context["text_aff_schemes"]) ? $context["text_aff_schemes"] : null);
        echo "</a>
\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schemes"]) ? $context["schemes"] : null));
        foreach ($context['_seq'] as $context["_sid"] => $context["_sname"]) {
            // line 13
            echo "\t<input type=\"hidden\" id=\"product_affiliates_";
            echo $context["_sid"];
            echo "\" name=\"_product_affiliates[";
            echo $context["_sid"];
            echo "]\" value=\"\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_sid'], $context['_sname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
<h4>";
        // line 16
        echo (isset($context["entry_coupons"]) ? $context["entry_coupons"] : null);
        echo "</h4>

<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-right\">";
        // line 21
        echo (isset($context["column_coupon"]) ? $context["column_coupon"] : null);
        echo "</td>
\t\t\t<td class=\"text-left\">";
        // line 22
        echo (isset($context["column_mta_scheme"]) ? $context["column_mta_scheme"] : null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coupons"]) ? $context["coupons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 27
            echo "
\t\t<tr>
\t\t\t<td class=\"text-right\">";
            // line 29
            echo $this->getAttribute($context["coupon"], "description", array(), "array");
            echo "</td>
\t\t\t<td class=\"text-left\">\t\t\t\t
\t\t\t\t\t<select name=\"product_coupon_scheme_id[";
            // line 31
            echo $this->getAttribute($context["coupon"], "id", array(), "array");
            echo "]\" class=\"form-control\">
\t\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["schemes0"]) ? $context["schemes0"] : null));
            foreach ($context['_seq'] as $context["_sid"] => $context["_sname"]) {
                // line 33
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["_sid"];
                echo "\"";
                if (($context["_sid"] == $this->getAttribute($context["coupon"], "scheme_id", array()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $context["_sname"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_sid'], $context['_sname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t</select>\t\t\t\t\t
\t\t\t\t<div style=\"padding:5px;\"><a id=\"product_coupon_";
            // line 36
            echo $this->getAttribute($context["coupon"], "id", array(), "array");
            echo "_affiliates_link\" href=\"javascript:;\">";
            echo (isset($context["text_aff_schemes"]) ? $context["text_aff_schemes"] : null);
            echo "</a>
\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["schemes"]) ? $context["schemes"] : null));
            foreach ($context['_seq'] as $context["_sid"] => $context["_sname"]) {
                // line 38
                echo "\t\t\t\t\t<input type=\"hidden\" id=\"product_coupon_";
                echo $this->getAttribute($context["coupon"], "id", array(), "array");
                echo "_affiliates_";
                echo $context["_sid"];
                echo "\" name=\"_product_coupon_affiliates[";
                echo $this->getAttribute($context["coupon"], "id", array(), "array");
                echo "][";
                echo $context["_sid"];
                echo "]\" value=\"\" />
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_sid'], $context['_sname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t";
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 45
            echo "\t\t<tr><td colspan=\"2\" class=\"text-right\">";
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</td></tr>
\t";
        }
        // line 47
        echo "\t</tbody>
</table>
<script type=\"text/javascript\">
\$('a[id\$=\"_affiliates_link\"]')._make_aff_table();
\$('.coupon-page-link').on('click', function() {
\tvar _page = parseInt(\$(this).attr('rel'));
\t\$.ajax({
\t\turl : '";
        // line 54
        echo (isset($context["link_commission_tab"]) ? $context["link_commission_tab"] : null);
        echo "&coupon_page='+_page,
\t\tmethod : 'GET',
\t\tdataType : 'html',
\t\tsuccess : function(_r) {
\t\t\t\$('#tab-scheme').html(_r);
\t\t}
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/mta/product_commission.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 54,  175 => 47,  169 => 45,  166 => 44,  157 => 40,  142 => 38,  138 => 37,  132 => 36,  129 => 35,  114 => 33,  110 => 32,  106 => 31,  101 => 29,  97 => 27,  93 => 26,  86 => 22,  82 => 21,  74 => 16,  71 => 15,  60 => 13,  56 => 12,  52 => 11,  47 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
/* 	<label class="col-sm-2 control-label" for="input-product-scheme-id">{{ entry_product }}</label>*/
/* 	<div class="col-sm-10">*/
/* 		<select name="product_scheme_id" class="form-control" id="input-product-scheme-id">*/
/* 		{% for _sid, _sname in schemes0 %}*/
/* 			<option value="{{ _sid }}"{% if _sid == product_scheme_id %} selected="selected"{% endif %}>{{ _sname }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* </div>*/
/* <div style="padding:5px;"><a id="product_affiliates_link" href="javascript:;">{{ text_aff_schemes }}</a>*/
/* 	{% for _sid, _sname in schemes %}*/
/* 	<input type="hidden" id="product_affiliates_{{ _sid }}" name="_product_affiliates[{{ _sid }}]" value="" />*/
/* 	{% endfor %}*/
/* </div>*/
/* <h4>{{ entry_coupons }}</h4>*/
/* */
/* <table class="table table-striped">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<td class="text-right">{{ column_coupon }}</td>*/
/* 			<td class="text-left">{{ column_mta_scheme }}</td>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	{% for coupon in coupons %}*/
/* */
/* 		<tr>*/
/* 			<td class="text-right">{{ coupon['description'] }}</td>*/
/* 			<td class="text-left">				*/
/* 					<select name="product_coupon_scheme_id[{{ coupon['id'] }}]" class="form-control">*/
/* 					{% for _sid, _sname in schemes0 %}*/
/* 						<option value="{{ _sid }}"{% if _sid == coupon.scheme_id %} selected="selected"{% endif %}>{{ _sname }}</option>*/
/* 					{% endfor %}*/
/* 					</select>					*/
/* 				<div style="padding:5px;"><a id="product_coupon_{{ coupon['id'] }}_affiliates_link" href="javascript:;">{{ text_aff_schemes }}</a>*/
/* 				{% for _sid, _sname in schemes %}*/
/* 					<input type="hidden" id="product_coupon_{{ coupon['id'] }}_affiliates_{{ _sid }}" name="_product_coupon_affiliates[{{ coupon['id'] }}][{{ _sid }}]" value="" />*/
/* 				{% endfor %}*/
/* 				</div>								*/
/* 			</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* 	{% if pagination %}*/
/* 		<tr><td colspan="2" class="text-right">{{ pagination }}</td></tr>*/
/* 	{% endif %}*/
/* 	</tbody>*/
/* </table>*/
/* <script type="text/javascript">*/
/* $('a[id$="_affiliates_link"]')._make_aff_table();*/
/* $('.coupon-page-link').on('click', function() {*/
/* 	var _page = parseInt($(this).attr('rel'));*/
/* 	$.ajax({*/
/* 		url : '{{ link_commission_tab }}&coupon_page='+_page,*/
/* 		method : 'GET',*/
/* 		dataType : 'html',*/
/* 		success : function(_r) {*/
/* 			$('#tab-scheme').html(_r);*/
/* 		}*/
/* 	});*/
/* });*/
/* </script>*/
