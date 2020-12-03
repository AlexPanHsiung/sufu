<?php

/* extension/module/mta/mta_pds.twig */
class __TwigTemplate_4314f08c747a706bc7ffe31795c1c6a8b054d50f06deaaaed314a21081de9865 extends Twig_Template
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
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 2
            echo "<script type=\"text/javascript\">alert('";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "');</script>
";
        } else {
            // line 4
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 5
                echo "       <div class=\"form-group\">
\t\t <label class=\"control-label\" for=\"mta-";
                // line 6
                echo $context["type"];
                echo "-set\">";
                echo $this->getAttribute((isset($context["entries_set"]) ? $context["entries_set"] : null), $context["type"], array(), "array");
                echo "</label>
         <div class=\"input-group\">
\t\t\t<select id=\"mta-";
                // line 8
                echo $context["type"];
                echo "-set\" class=\"form-control\">
\t\t\t\t<option value=\"-1\">";
                // line 9
                echo (isset($context["option_select"]) ? $context["option_select"] : null);
                echo "</option>
\t\t\t\t<option value=\"0\">";
                // line 10
                echo (isset($context["option_default"]) ? $context["option_default"] : null);
                echo "</option>
\t\t\t\t";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["schemes"]) ? $context["schemes"] : null));
                foreach ($context['_seq'] as $context["_id"] => $context["_name"]) {
                    // line 12
                    echo "\t\t\t\t<option value=\"";
                    echo $context["_id"];
                    echo "\">";
                    echo $context["_name"];
                    echo "</option>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_id'], $context['_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t\t</select>
            <span class=\"input-group-btn\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default mta_set_save_button\" data-loading-text=\"";
                // line 16
                echo (isset($context["text_saving"]) ? $context["text_saving"] : null);
                echo "\">";
                echo (isset($context["button_set"]) ? $context["button_set"] : null);
                echo "</button>
            </span></div>
       </div>
       <div class=\"form-group\">
\t\t <label class=\"control-label\" for=\"mta-";
                // line 20
                echo $context["type"];
                echo "-save_default\">";
                echo $this->getAttribute((isset($context["entries_save_default"]) ? $context["entries_save_default"] : null), $context["type"], array(), "array");
                echo "</label>
         <div class=\"input-group\">
\t\t\t<select id=\"mta-";
                // line 22
                echo $context["type"];
                echo "-save_default\" class=\"form-control\">
\t\t\t\t<option value=\"-1\">";
                // line 23
                echo (isset($context["option_select"]) ? $context["option_select"] : null);
                echo "</option>
\t\t\t\t<option value=\"0\">";
                // line 24
                echo (isset($context["option_default"]) ? $context["option_default"] : null);
                echo "</option>
\t\t\t\t";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["schemes"]) ? $context["schemes"] : null));
                foreach ($context['_seq'] as $context["_id"] => $context["_name"]) {
                    // line 26
                    echo "\t\t\t\t";
                    if (((($this->getAttribute((isset($context["schemes_default"]) ? $context["schemes_default"] : null), $context["type"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["schemes_default"]) ? $context["schemes_default"] : null), $context["type"], array(), "array"), "")) : ("")) == $context["_id"])) {
                        // line 27
                        echo "\t\t\t\t<option value=\"";
                        echo $context["_id"];
                        echo "\" selected=\"selected\">";
                        echo $context["_name"];
                        echo "</option>
\t\t\t\t";
                    } else {
                        // line 29
                        echo "\t\t\t\t<option value=\"";
                        echo $context["_id"];
                        echo "\">";
                        echo $context["_name"];
                        echo "</option>
\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_id'], $context['_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t</select>
            <span class=\"input-group-btn\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default mta_set_save_button\" data-loading-text=\"";
                // line 34
                echo (isset($context["text_saving"]) ? $context["text_saving"] : null);
                echo "\">";
                echo (isset($context["button_save_default"]) ? $context["button_save_default"] : null);
                echo "</button>
            </span></div>
       </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "<script type=\"text/javascript\">
\t\$('.mta_set_save_button').on('click', function() {
\t\tvar _this = this;
\t\tvar _p = \$(_this).parent().parent();
\t\tvar _s = \$(_p).find('select[id^=\"mta-\"]');
\t\tif(\$(_s).val() < 0) return;
\t\tvar _s_id = \$(_s).attr('id').split('-');
\t\tvar _type = _s_id[1];
\t\tvar _action = _s_id[2];
\t\tif(!confirm(_action == 'set' ? '";
            // line 47
            echo (isset($context["text_confirm_set"]) ? $context["text_confirm_set"] : null);
            echo "' : '";
            echo (isset($context["text_confirm_save_default"]) ? $context["text_confirm_save_default"] : null);
            echo "')) return;\t\t
\t\t\$(_this).button('loading');\t\t
\t\tvar _url = _action == 'set' ? '";
            // line 49
            echo (isset($context["url_set"]) ? $context["url_set"] : null);
            echo "' : '";
            echo (isset($context["url_save_default"]) ? $context["url_save_default"] : null);
            echo "';
\t\t\$.post(_url, {type : _type, scheme_id : \$(_s).val()}, function(_r) {
\t\t\t\$(_this).button('reset');\t\t
\t\t\tif(parseInt(_r) > 0) {\t\t\t\t
\t\t\t\tif(_action == 'set' || \$(_s).val() == '0') \$(_s).val('-1');
\t\t\t} else {
\t\t\t\talert('";
            // line 55
            echo (isset($context["alert_error"]) ? $context["alert_error"] : null);
            echo "');
\t\t\t}\t\t\t
\t\t});
\t});\t
</script>\t
";
        }
    }

    public function getTemplateName()
    {
        return "extension/module/mta/mta_pds.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 55,  164 => 49,  157 => 47,  146 => 38,  134 => 34,  130 => 32,  124 => 31,  116 => 29,  108 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  82 => 20,  73 => 16,  69 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  35 => 6,  32 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if error_warning %}*/
/* <script type="text/javascript">alert('{{ error_warning }}');</script>*/
/* {% else %}*/
/* 	{% for type in types %}*/
/*        <div class="form-group">*/
/* 		 <label class="control-label" for="mta-{{ type }}-set">{{ entries_set[type] }}</label>*/
/*          <div class="input-group">*/
/* 			<select id="mta-{{ type }}-set" class="form-control">*/
/* 				<option value="-1">{{ option_select }}</option>*/
/* 				<option value="0">{{ option_default }}</option>*/
/* 				{% for _id, _name in schemes %}*/
/* 				<option value="{{ _id }}">{{ _name }}</option>*/
/* 				{% endfor %}*/
/* 			</select>*/
/*             <span class="input-group-btn">*/
/* 				<button type="button" class="btn btn-default mta_set_save_button" data-loading-text="{{ text_saving }}">{{ button_set }}</button>*/
/*             </span></div>*/
/*        </div>*/
/*        <div class="form-group">*/
/* 		 <label class="control-label" for="mta-{{ type }}-save_default">{{ entries_save_default[type] }}</label>*/
/*          <div class="input-group">*/
/* 			<select id="mta-{{ type }}-save_default" class="form-control">*/
/* 				<option value="-1">{{ option_select }}</option>*/
/* 				<option value="0">{{ option_default }}</option>*/
/* 				{% for _id, _name in schemes %}*/
/* 				{% if schemes_default[type]|default('') == _id %}*/
/* 				<option value="{{ _id }}" selected="selected">{{ _name }}</option>*/
/* 				{% else %}*/
/* 				<option value="{{ _id }}">{{ _name }}</option>*/
/* 				{% endif %}*/
/* 				{% endfor %}*/
/* 			</select>*/
/*             <span class="input-group-btn">*/
/* 				<button type="button" class="btn btn-default mta_set_save_button" data-loading-text="{{ text_saving }}">{{ button_save_default }}</button>*/
/*             </span></div>*/
/*        </div>*/
/* {% endfor %}*/
/* <script type="text/javascript">*/
/* 	$('.mta_set_save_button').on('click', function() {*/
/* 		var _this = this;*/
/* 		var _p = $(_this).parent().parent();*/
/* 		var _s = $(_p).find('select[id^="mta-"]');*/
/* 		if($(_s).val() < 0) return;*/
/* 		var _s_id = $(_s).attr('id').split('-');*/
/* 		var _type = _s_id[1];*/
/* 		var _action = _s_id[2];*/
/* 		if(!confirm(_action == 'set' ? '{{ text_confirm_set }}' : '{{ text_confirm_save_default }}')) return;		*/
/* 		$(_this).button('loading');		*/
/* 		var _url = _action == 'set' ? '{{ url_set }}' : '{{ url_save_default }}';*/
/* 		$.post(_url, {type : _type, scheme_id : $(_s).val()}, function(_r) {*/
/* 			$(_this).button('reset');		*/
/* 			if(parseInt(_r) > 0) {				*/
/* 				if(_action == 'set' || $(_s).val() == '0') $(_s).val('-1');*/
/* 			} else {*/
/* 				alert('{{ alert_error }}');*/
/* 			}			*/
/* 		});*/
/* 	});	*/
/* </script>	*/
/* {% endif %}*/
