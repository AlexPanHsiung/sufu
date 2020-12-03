<?php

/* extension/module/wk_upsell.twig */
class __TwigTemplate_013ab51749ff20648f13c2806794ec84cc8767b78a0e025d2c0cd3c7196cd035 extends Twig_Template
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
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
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
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
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
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      ";
        // line 31
        if ((array_key_exists("marketplace_status", $context) && (isset($context["marketplace_status"]) ? $context["marketplace_status"] : null))) {
            // line 32
            echo "      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-cpanel\" data-toggle=\"tab\"><i class=\"fa fa-power-off\"></i> ";
            // line 34
            echo (isset($context["tab_cpanel"]) ? $context["tab_cpanel"] : null);
            echo "</a></li>
          <li class=\"dropdown\"><a href=\"\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-cogs\"></i> ";
            // line 35
            echo (isset($context["tab_setting"]) ? $context["tab_setting"] : null);
            echo " <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu dropdown-menu-left\">
              <li><a href=\"#tab-setting-widget\" data-toggle=\"tab\">";
            // line 37
            echo (isset($context["text_widgets"]) ? $context["text_widgets"] : null);
            echo "</a></li>
              <li><a href=\"#tab-setting-listing\" data-toggle=\"tab\">";
            // line 38
            echo (isset($context["text_listing"]) ? $context["text_listing"] : null);
            echo "</a></li>
            </ul>
          </li>
          <li><a href=\"#tab-stats\" data-toggle=\"tab\" id=\"stats-load\"><i class=\"fa fa-bar-chart\"></i> ";
            // line 41
            echo (isset($context["tab_stats"]) ? $context["tab_stats"] : null);
            echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-cpanel\">
            <form action=\"";
            // line 45
            echo (isset($context["action_control"]) ? $context["action_control"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-cpanel\" class=\"form-horizontal\">
              <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-cpanel\" data-toggle=\"tooltip\" title=\"";
            // line 47
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
              </div>
              <br>
              <fieldset>
                <legend>";
            // line 51
            echo (isset($context["text_upsell"]) ? $context["text_upsell"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-upsell-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 53
            echo (isset($context["help_upsell_status"]) ? $context["help_upsell_status"] : null);
            echo "\">";
            echo (isset($context["entry_upsell_status"]) ? $context["entry_upsell_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"module_wk_upsell_upsell_status\" id=\"input-upsell-status\" class=\"form-control\">
                      ";
            // line 56
            if ((isset($context["wk_upsell_upsell_status"]) ? $context["wk_upsell_upsell_status"] : null)) {
                // line 57
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 58
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 60
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 61
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 63
            echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-upsell-applicable\"><span data-toggle=\"tooltip\" title=\"";
            // line 67
            echo (isset($context["help_upsell_applicable"]) ? $context["help_upsell_applicable"] : null);
            echo "\">";
            echo (isset($context["entry_upsell_applicable"]) ? $context["entry_upsell_applicable"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_upsell_upsell_applicable_status\" id=\"inupsell-applicable-status\" class=\"form-control\">
                      ";
            // line 70
            if ((isset($context["wk_upsell_upsell_applicable_status"]) ? $context["wk_upsell_upsell_applicable_status"] : null)) {
                // line 71
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 72
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            } else {
                // line 74
                echo "                      <option value=\"1\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 75
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            }
            // line 77
            echo "                    </select>
                  </div>
                  <div class=\"col-sm-10 col-sm-offset-2\">
                    <input type=\"text\" name=\"wk_upsell_upsell_applicable\" value=\"\" placeholder=\"";
            // line 80
            echo (isset($context["entry_upsell_applicable"]) ? $context["entry_upsell_applicable"] : null);
            echo "\" id=\"input-upsell-applicable\" class=\"form-control\" />
                    <div id=\"vendor-upsell-applicable\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 82
            $context["class"] = "odd";
            // line 83
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vendor_upsell_applicables"]) ? $context["vendor_upsell_applicables"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor_upsell_applicable"]) {
                // line 84
                echo "                      ";
                $context["class"] = ((((isset($context["class"]) ? $context["class"] : null) == "even")) ? ("odd") : ("even"));
                // line 85
                echo "                      <div id=\"vendor-upsell-applicable";
                echo $this->getAttribute($context["vendor_upsell_applicable"], "vendor_id", array(), "array");
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["vendor_upsell_applicable"], "name", array(), "array");
                echo "
                        <input type=\"hidden\" name=\"wk_upsell_vendor_upsell_applicable[]\" value=\"";
                // line 86
                echo $this->getAttribute($context["vendor_upsell_applicable"], "vendor_id", array(), "array");
                echo "\" />
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_upsell_applicable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
            // line 94
            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 96
            echo (isset($context["help_tax_status"]) ? $context["help_tax_status"] : null);
            echo "\">";
            echo (isset($context["entry_tax_status"]) ? $context["entry_tax_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_upsell_tax_status\" id=\"input-tax-status\" class=\"form-control\">
                      ";
            // line 99
            if ((isset($context["wk_upsell_tax_status"]) ? $context["wk_upsell_tax_status"] : null)) {
                // line 100
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 101
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 103
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 104
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 106
            echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
            // line 111
            echo (isset($context["text_countdown"]) ? $context["text_countdown"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdown-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 113
            echo (isset($context["help_countdown_status"]) ? $context["help_countdown_status"] : null);
            echo "\">";
            echo (isset($context["entry_countdown_status"]) ? $context["entry_countdown_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_upsell_countdown_status\" id=\"input-countdown-status\" class=\"form-control\">
                      ";
            // line 116
            if ((isset($context["wk_upsell_countdown_status"]) ? $context["wk_upsell_countdown_status"] : null)) {
                // line 117
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 118
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 120
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 121
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 123
            echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdown-applicable\"><span data-toggle=\"tooltip\" title=\"";
            // line 127
            echo (isset($context["help_countdown_applicable"]) ? $context["help_countdown_applicable"] : null);
            echo "\">";
            echo (isset($context["entry_countdown_applicable"]) ? $context["entry_countdown_applicable"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_upsell_countdown_applicable_status\" id=\"input-countdown-applicable-status\" class=\"form-control\">
                      ";
            // line 130
            if ((isset($context["wk_upsell_countdown_applicable_status"]) ? $context["wk_upsell_countdown_applicable_status"] : null)) {
                // line 131
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 132
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            } else {
                // line 134
                echo "                      <option value=\"1\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 135
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            }
            // line 137
            echo "                    </select>
                  </div>
                  <div class=\"col-sm-10 col-sm-offset-2\">
                    <input type=\"text\" name=\"wk_upsell_countdown_applicable\" value=\"\" placeholder=\"";
            // line 140
            echo (isset($context["entry_countdown_applicable"]) ? $context["entry_countdown_applicable"] : null);
            echo "\" id=\"input-countdown-applicable\" class=\"form-control\" />
                    <div id=\"vendor-countdown-applicable\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 142
            $context["class"] = "odd";
            // line 143
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vendor_countdown_applicables"]) ? $context["vendor_countdown_applicables"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor_countdown_applicable"]) {
                // line 144
                echo "                      ";
                $context["class"] = ((((isset($context["class"]) ? $context["class"] : null) == "even")) ? ("odd") : ("even"));
                // line 145
                echo "                      <div id=\"vendor-countdown-applicable";
                echo $this->getAttribute($context["vendor_countdown_applicable"], "vendor_id", array(), "array");
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["vendor_countdown_applicable"], "name", array(), "array");
                echo "
                        <input type=\"hidden\" name=\"wk_upsell_vendor_countdown_applicable[]\" value=\"";
                // line 146
                echo $this->getAttribute($context["vendor_countdown_applicable"], "vendor_id", array(), "array");
                echo "\" />
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_countdown_applicable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdown-syntax\"><span data-toggle=\"tooltip\" title=\"";
            // line 153
            echo (isset($context["help_countdown_syntax"]) ? $context["help_countdown_syntax"] : null);
            echo "\">";
            echo (isset($context["entry_countdown_syntax"]) ? $context["entry_countdown_syntax"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"tab-pane\" id=\"tab-countdown\">
                      <ul class=\"nav nav-tabs\" id=\"countdown\">
                        ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 158
                echo "                        <li><a href=\"#tab-countdown-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
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
            // line 160
            echo "                      </ul>
                      <div class=\"tab-content\">
                        ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 163
                echo "                        <div class=\"tab-pane\" id=\"tab-countdown-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                          <div class=\"form-group\">
                            <textarea name=\"wk_upsell_countdown_syntax[";
                // line 165
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_countdown_syntax"]) ? $context["entry_countdown_syntax"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_upsell_countdown_syntax"]) ? $context["wk_upsell_countdown_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_upsell_countdown_syntax"]) ? $context["wk_upsell_countdown_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdowntime-syntax\"><span data-toggle=\"tooltip\" title=\"";
            // line 174
            echo (isset($context["help_countdowntime_syntax"]) ? $context["help_countdowntime_syntax"] : null);
            echo "\">";
            echo (isset($context["entry_countdowntime_syntax"]) ? $context["entry_countdowntime_syntax"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"tab-pane\" id=\"tab-countdowntime\">
                      <ul class=\"nav nav-tabs\" id=\"countdowntime\">
                        ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 179
                echo "                        <li><a href=\"#tab-countdowntime-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
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
            // line 181
            echo "                      </ul>
                      <div class=\"tab-content\">
                        ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 184
                echo "                        <div class=\"tab-pane\" id=\"tab-countdowntime-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                          <div class=\"form-group\">
                            <textarea name=\"wk_upsell_countdowntime_syntax[";
                // line 186
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_countdowntime_syntax"]) ? $context["entry_countdowntime_syntax"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_upsell_countdowntime_syntax"]) ? $context["wk_upsell_countdowntime_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_upsell_countdowntime_syntax"]) ? $context["wk_upsell_countdowntime_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
            // line 196
            echo (isset($context["text_units"]) ? $context["text_units"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-units-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 198
            echo (isset($context["help_units_status"]) ? $context["help_units_status"] : null);
            echo "\">";
            echo (isset($context["entry_units_status"]) ? $context["entry_units_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_upsell_units_status\" id=\"input-units-status\" class=\"form-control\">
                      ";
            // line 201
            if ((isset($context["wk_upsell_units_status"]) ? $context["wk_upsell_units_status"] : null)) {
                // line 202
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 203
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 205
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 206
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 208
            echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-units-applicable\"><span data-toggle=\"tooltip\" title=\"";
            // line 212
            echo (isset($context["help_units_applicable"]) ? $context["help_units_applicable"] : null);
            echo "\">";
            echo (isset($context["entry_units_applicable"]) ? $context["entry_units_applicable"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_upsell_units_applicable_status\" id=\"inunits-applicable-status\" class=\"form-control\">
                      ";
            // line 215
            if ((isset($context["wk_upsell_units_applicable_status"]) ? $context["wk_upsell_units_applicable_status"] : null)) {
                // line 216
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 217
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            } else {
                // line 219
                echo "                      <option value=\"1\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 220
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            }
            // line 222
            echo "                    </select>
                  </div>
                  <div class=\"col-sm-10 col-sm-offset-2\">
                    <input type=\"text\" name=\"wk_upsell_units_applicable\" value=\"\" placeholder=\"";
            // line 225
            echo (isset($context["entry_units_applicable"]) ? $context["entry_units_applicable"] : null);
            echo "\" id=\"input-units-applicable\" class=\"form-control\" />
                    <div id=\"vendor-units-applicable\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 227
            $context["class"] = "odd";
            // line 228
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vendor_units_applicables"]) ? $context["vendor_units_applicables"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor_units_applicable"]) {
                // line 229
                echo "                      ";
                $context["class"] = ((((isset($context["class"]) ? $context["class"] : null) == "even")) ? ("odd") : ("even"));
                // line 230
                echo "                      <div id=\"vendor-units-applicable";
                echo $this->getAttribute($context["vendor_units_applicable"], "vendor_id", array(), "array");
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["vendor_units_applicable"], "name", array(), "array");
                echo "
                        <input type=\"hidden\" name=\"wk_upsell_vendor_units_applicable[]\" value=\"";
                // line 231
                echo $this->getAttribute($context["vendor_units_applicable"], "vendor_id", array(), "array");
                echo "\" />
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_units_applicable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-units-syntax\"><span data-toggle=\"tooltip\" title=\"";
            // line 238
            echo (isset($context["help_units_syntax"]) ? $context["help_units_syntax"] : null);
            echo "\">";
            echo (isset($context["entry_units_syntax"]) ? $context["entry_units_syntax"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"tab-pane\" id=\"tab-units\">
                      <ul class=\"nav nav-tabs\" id=\"units\">
                        ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 243
                echo "                        <li><a href=\"#tab-units-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
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
            // line 245
            echo "                      </ul>
                      <div class=\"tab-content\">
                        ";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 248
                echo "                        <div class=\"tab-pane\" id=\"tab-units-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                          <div class=\"form-group\">
                            <textarea name=\"wk_upsell_units_syntax[";
                // line 250
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_units_syntax"]) ? $context["entry_units_syntax"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_upsell_units_syntax"]) ? $context["wk_upsell_units_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_upsell_units_syntax"]) ? $context["wk_upsell_units_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-setting-widget\">
            <form action=\"";
            // line 262
            echo (isset($context["action_widgets"]) ? $context["action_widgets"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-widgets\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-title-widget\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 264
            echo (isset($context["help_title"]) ? $context["help_title"] : null);
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 267
                echo "                    <div class=\"input-group\" style=\"margin-bottom:2px;\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</span>
                      <input type=\"text\" name=\"wk_widget_title[";
                // line 268
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                echo "\" class=\"form-control\" value=\"";
                echo (($this->getAttribute((isset($context["wk_widget_title"]) ? $context["wk_widget_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_widget_title"]) ? $context["wk_widget_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "\" />
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-widget-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 274
            echo (isset($context["help_widget_status"]) ? $context["help_widget_status"] : null);
            echo "\">";
            echo (isset($context["entry_widget_status"]) ? $context["entry_widget_status"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_widget_status\" id=\"input-widget-status\" class=\"form-control\">
                    ";
            // line 277
            if ((isset($context["wk_widget_status"]) ? $context["wk_widget_status"] : null)) {
                // line 278
                echo "                    <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\">";
                // line 279
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            } else {
                // line 281
                echo "                    <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\" selected=\"selected\">";
                // line 282
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            }
            // line 284
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upselling-widget\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 288
            echo (isset($context["help_upselling_widget"]) ? $context["help_upselling_widget"] : null);
            echo "\">";
            echo (isset($context["entry_upselling_widget"]) ? $context["entry_upselling_widget"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"number\" min=\"0\" name=\"wk_widget_upselling_widget\" value=\"";
            // line 290
            echo (isset($context["wk_widget_upselling_widget"]) ? $context["wk_widget_upselling_widget"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_upselling_widget"]) ? $context["entry_upselling_widget"] : null);
            echo "\" id=\"input-upselling-widget\" class=\"form-control int_number\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-display-type\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 294
            echo (isset($context["help_display_type"]) ? $context["help_display_type"] : null);
            echo "\">";
            echo (isset($context["entry_display_type"]) ? $context["entry_display_type"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_widget_display_type\" id=\"input-display-type\" class=\"form-control\">
                    ";
            // line 297
            if ((isset($context["wk_widget_display_type"]) ? $context["wk_widget_display_type"] : null)) {
                // line 298
                echo "                    <option value=\"0\">";
                echo (isset($context["text_random"]) ? $context["text_random"] : null);
                echo "</option>
                    <option value=\"1\" selected=\"selected\">";
                // line 299
                echo (isset($context["text_default"]) ? $context["text_default"] : null);
                echo "</option>
                    ";
            } else {
                // line 301
                echo "                    <option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_random"]) ? $context["text_random"] : null);
                echo "</option>
                    <option value=\"1\">";
                // line 302
                echo (isset($context["text_default"]) ? $context["text_default"] : null);
                echo "</option>
                    ";
            }
            // line 304
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-picture-size\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 308
            echo (isset($context["help_picture_size"]) ? $context["help_picture_size"] : null);
            echo "\">";
            echo (isset($context["entry_picture_size"]) ? $context["entry_picture_size"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 311
            echo (isset($context["text_width"]) ? $context["text_width"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_widget_picture_width\" value=\"";
            // line 312
            echo (isset($context["wk_widget_picture_width"]) ? $context["wk_widget_picture_width"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_width"]) ? $context["entry_picture_width"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 313
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
                <div class=\"col-sm-10 col-sm-offset-2\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 318
            echo (isset($context["text_height"]) ? $context["text_height"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_widget_picture_height\" value=\"";
            // line 319
            echo (isset($context["wk_widget_picture_height"]) ? $context["wk_widget_picture_height"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_height"]) ? $context["entry_picture_height"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 320
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upselling-details\"><span data-toggle=\"tooltip\" title=\"";
            // line 326
            echo (isset($context["help_upselling_details"]) ? $context["help_upselling_details"] : null);
            echo "\">";
            echo (isset($context["entry_upselling_details"]) ? $context["entry_upselling_details"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"tab-pane\" id=\"tab-widgets\">
                    <ul class=\"nav nav-tabs\" id=\"widget-details\">
                      ";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 331
                echo "                      <li><a href=\"#tab-widgets-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
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
            // line 333
            echo "                    </ul>
                    <div class=\"tab-content\">
                      ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 336
                echo "                      <div class=\"tab-pane\" id=\"tab-widgets-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                        <div class=\"form-group\">
                          <textarea name=\"wk_widget_upselling_details[";
                // line 338
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_upselling_details"]) ? $context["entry_upselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_widget_upselling_details"]) ? $context["wk_widget_upselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_widget_upselling_details"]) ? $context["wk_widget_upselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div>
                        <!-- <div class=\"form-group\">
                          <textarea name=\"wk_widget_upselling_details2[";
                // line 341
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_upselling_details"]) ? $context["entry_upselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_widget_upselling_details2"]) ? $context["wk_widget_upselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_widget_upselling_details2"]) ? $context["wk_widget_upselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div> -->
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "                    </div>
                  </div>
                </div>
              </div>
              <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-widgets\" data-toggle=\"tooltip\" title=\"";
            // line 350
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
              </div>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-setting-listing\">
            <form action=\"";
            // line 355
            echo (isset($context["action_listings"]) ? $context["action_listings"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-listings\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 357
            echo (isset($context["help_listing_url"]) ? $context["help_listing_url"] : null);
            echo "\">";
            echo (isset($context["entry_listing_url"]) ? $context["entry_listing_url"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <a href=\"";
            // line 359
            echo (isset($context["catalog_link"]) ? $context["catalog_link"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["text_listing"]) ? $context["text_listing"] : null);
            echo "</a>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-listing-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 363
            echo (isset($context["help_listing_status"]) ? $context["help_listing_status"] : null);
            echo "\">";
            echo (isset($context["entry_listing_status"]) ? $context["entry_listing_status"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_listing_status\" id=\"input-listing-status\" class=\"form-control\">
                    ";
            // line 366
            if ((isset($context["wk_listing_status"]) ? $context["wk_listing_status"] : null)) {
                // line 367
                echo "                    <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\">";
                // line 368
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            } else {
                // line 370
                echo "                    <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\" selected=\"selected\">";
                // line 371
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            }
            // line 373
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-title-menulink\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 377
            echo (isset($context["help_title_menulink"]) ? $context["help_title_menulink"] : null);
            echo "\">";
            echo (isset($context["entry_title_menulink"]) ? $context["entry_title_menulink"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 380
                echo "                    <div class=\"input-group\" style=\"margin-bottom:2px;\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</span>
                      <input type=\"text\" name=\"wk_listing_menulink_title[";
                // line 381
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_title_menulink"]) ? $context["entry_title_menulink"] : null);
                echo "\" class=\"form-control\" value=\"";
                echo (($this->getAttribute((isset($context["wk_listing_menulink_title"]) ? $context["wk_listing_menulink_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_listing_menulink_title"]) ? $context["wk_listing_menulink_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "\" />
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 384
            echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-menu\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 387
            echo (isset($context["help_sort_menu"]) ? $context["help_sort_menu"] : null);
            echo "\">";
            echo (isset($context["entry_sort_menu"]) ? $context["entry_sort_menu"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"number\" min=\"0\" name=\"wk_listing_sort_menu\" value=\"";
            // line 389
            echo (isset($context["wk_listing_sort_menu"]) ? $context["wk_listing_sort_menu"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_menu"]) ? $context["entry_sort_menu"] : null);
            echo "\" id=\"input-sort-menu\" class=\"form-control int_number\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-bundles-page\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 393
            echo (isset($context["help_bundles_page"]) ? $context["help_bundles_page"] : null);
            echo "\">";
            echo (isset($context["entry_bundles_page"]) ? $context["entry_bundles_page"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"number\" min=\"0\" name=\"wk_listing_bundles_page\" value=\"";
            // line 395
            echo (isset($context["wk_listing_bundles_page"]) ? $context["wk_listing_bundles_page"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_bundles_page"]) ? $context["entry_bundles_page"] : null);
            echo "\" id=\"input-bundles-page\" class=\"form-control int_number\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-picture-size\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 399
            echo (isset($context["help_picture_size"]) ? $context["help_picture_size"] : null);
            echo "\">";
            echo (isset($context["entry_picture_size"]) ? $context["entry_picture_size"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 402
            echo (isset($context["text_width"]) ? $context["text_width"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_listing_picture_width\" value=\"";
            // line 403
            echo (isset($context["wk_listing_picture_width"]) ? $context["wk_listing_picture_width"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_width"]) ? $context["entry_picture_width"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 404
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
                <div class=\"col-sm-10 col-sm-offset-2\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 409
            echo (isset($context["text_height"]) ? $context["text_height"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_listing_picture_height\" value=\"";
            // line 410
            echo (isset($context["wk_listing_picture_height"]) ? $context["wk_listing_picture_height"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_height"]) ? $context["entry_picture_height"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 411
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
            // line 416
            echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_listing_theme\" class=\"form-control\" id=\"input-theme\">
                    <option ";
            // line 419
            if (((isset($context["wk_listing_theme"]) ? $context["wk_listing_theme"] : null) == "ps_gray")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_gray\">";
            echo (isset($context["text_gray"]) ? $context["text_gray"] : null);
            echo "</option>
                    <option ";
            // line 420
            if (((isset($context["wk_listing_theme"]) ? $context["wk_listing_theme"] : null) == "ps_blue")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_blue\">";
            echo (isset($context["text_blue"]) ? $context["text_blue"] : null);
            echo "</option>
                    <option ";
            // line 421
            if (((isset($context["wk_listing_theme"]) ? $context["wk_listing_theme"] : null) == "ps_green")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_green\">";
            echo (isset($context["text_green"]) ? $context["text_green"] : null);
            echo "</option>
                    <option ";
            // line 422
            if (((isset($context["wk_listing_theme"]) ? $context["wk_listing_theme"] : null) == "ps_orange")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_orange\">";
            echo (isset($context["text_orange"]) ? $context["text_orange"] : null);
            echo "</option>
                    <option ";
            // line 423
            if (((isset($context["wk_listing_theme"]) ? $context["wk_listing_theme"] : null) == "ps_red")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_red\">";
            echo (isset($context["text_red"]) ? $context["text_red"] : null);
            echo "</option>
                    <option ";
            // line 424
            if (((isset($context["wk_listing_theme"]) ? $context["wk_listing_theme"] : null) == "ps_purple")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_purple\">";
            echo (isset($context["text_purple"]) ? $context["text_purple"] : null);
            echo "</option>
                    <option ";
            // line 425
            if (((isset($context["wk_listing_theme"]) ? $context["wk_listing_theme"] : null) == "ps_yellow")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_yellow\">";
            echo (isset($context["text_yellow"]) ? $context["text_yellow"] : null);
            echo "</option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upselling-details\"><span data-toggle=\"tooltip\" title=\"";
            // line 431
            echo (isset($context["help_upselling_details"]) ? $context["help_upselling_details"] : null);
            echo "\">";
            echo (isset($context["entry_upselling_details"]) ? $context["entry_upselling_details"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"tab-pane\" id=\"tab-listings\">
                    <ul class=\"nav nav-tabs\" id=\"listing-details\">
                      ";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 436
                echo "                      <li><a href=\"#tab-listings-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
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
            // line 438
            echo "                    </ul>
                    <div class=\"tab-content\">
                      ";
            // line 440
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 441
                echo "                      <div class=\"tab-pane\" id=\"tab-listings-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                        <div class=\"form-group\">
                          <textarea name=\"wk_listing_upselling_details[";
                // line 443
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_upselling_details"]) ? $context["entry_upselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_listing_upselling_details"]) ? $context["wk_listing_upselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_listing_upselling_details"]) ? $context["wk_listing_upselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div>
                        <!-- <div class=\"form-group\">
                          <textarea name=\"wk_listing_upselling_details2[";
                // line 446
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_upselling_details"]) ? $context["entry_upselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_listing_upselling_details2"]) ? $context["wk_listing_upselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_listing_upselling_details2"]) ? $context["wk_listing_upselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div> -->
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            echo "                    </div>
                  </div>
                </div>
              </div>
              <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-listings\" data-toggle=\"tooltip\" title=\"";
            // line 455
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
              </div>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-stats\">
            <h3>";
            // line 460
            echo (isset($context["tab_stats"]) ? $context["tab_stats"] : null);
            echo "</h3>
            <div class=\"container-fluid\">
              <div class=\"row well\">
                <form action=\"";
            // line 463
            echo (isset($context["export"]) ? $context["export"] : null);
            echo "\" id=\"form-export\" method=\"post\">

                  <div class=\"form-group col-sm-5\">
                    <label class=\"col-sm-12 control-label\" for=\"input-datef\"><span data-toggle=\"tooltip\" title=\"";
            // line 466
            echo (isset($context["help_valid_from"]) ? $context["help_valid_from"] : null);
            echo "\">";
            echo (isset($context["entry_date_from"]) ? $context["entry_date_from"] : null);
            echo "</span></label>
                    <div class=\"col-sm-12\">
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"date_from\" value=\"\" data-date-format=\"YYYY-MM-DD\" placeholder=\"";
            // line 469
            echo (isset($context["entry_date_from"]) ? $context["entry_date_from"] : null);
            echo "\" id=\"input-datef\" class=\"form-control\" data-date-format=\"YYYY-MM-DD\"/>
                        <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class=\"form-group col-sm-5\">
                    <label class=\"col-sm-12 control-label\" for=\"input-datet\"><span data-toggle=\"tooltip\" title=\"";
            // line 478
            echo (isset($context["help_valid_till"]) ? $context["help_valid_till"] : null);
            echo "\">";
            echo (isset($context["entry_date_till"]) ? $context["entry_date_till"] : null);
            echo "</span></label>
                    <div class=\"col-sm-12\">
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"date_till\" value=\"\" data-date-format=\"YYYY-MM-DD\" placeholder=\"";
            // line 481
            echo (isset($context["entry_date_till"]) ? $context["entry_date_till"] : null);
            echo "\" id=\"input-datet\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class=\"pull-right\">
                    <a onclick=\"\$('#form-export').submit();\" data-toggle=\"tooltip\" title=\"";
            // line 490
            echo (isset($context["text_export"]) ? $context["text_export"] : null);
            echo "\" class=\"btn btn-warning btn-lg\"><i class=\"fa fa-download\"></i> ";
            echo (isset($context["text_export"]) ? $context["text_export"] : null);
            echo "</a>
                  </div>
                </form>
              </div>
            </div>
            <br>
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead class=\"btn-danger\">
                  <tr>
                    <td>";
            // line 500
            echo (isset($context["column_vendor_id"]) ? $context["column_vendor_id"] : null);
            echo "</td>
                    <td>";
            // line 501
            echo (isset($context["column_vendor"]) ? $context["column_vendor"] : null);
            echo "</td>
                    <td>";
            // line 502
            echo (isset($context["column_store_id"]) ? $context["column_store_id"] : null);
            echo "</td>
                    <td>";
            // line 503
            echo (isset($context["column_parent_product"]) ? $context["column_parent_product"] : null);
            echo "</td>
                    <td>";
            // line 504
            echo (isset($context["column_child_product"]) ? $context["column_child_product"] : null);
            echo "</td>
                    <td>";
            // line 505
            echo (isset($context["column_added_on"]) ? $context["column_added_on"] : null);
            echo "</td>
                    <td>";
            // line 506
            echo (isset($context["column_start_date"]) ? $context["column_start_date"] : null);
            echo "</td>
                    <td>";
            // line 507
            echo (isset($context["column_end_date"]) ? $context["column_end_date"] : null);
            echo "</td>
                    <td>";
            // line 508
            echo (isset($context["column_condition"]) ? $context["column_condition"] : null);
            echo "</td>
                    <td>";
            // line 509
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</td>
                    <td>";
            // line 510
            echo (isset($context["column_countdown"]) ? $context["column_countdown"] : null);
            echo "</td>
                    <td>";
            // line 511
            echo (isset($context["column_units"]) ? $context["column_units"] : null);
            echo "</td>
                  </tr>
                </thead>
                <tbody class=\"stats-body\"></tbody>
                <tfoot class=\"text-center\">
                  <tr><td colspan=\"12\" class=\"text-center alert-info\"><span class=\"stats-result\"></span> <i id=\"wkfoot\" class=\"fa fa-spin\" style=\"font-size: large;\"></i></td></tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-manage\">
            <fieldset>
              <legend>";
            // line 523
            echo (isset($context["tab_manage"]) ? $context["tab_manage"] : null);
            echo "</legend>
              <form action=\"";
            // line 524
            echo (isset($context["action_deploy"]) ? $context["action_deploy"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-deploy\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 526
            echo (isset($context["help_deployment"]) ? $context["help_deployment"] : null);
            echo "\">";
            echo (isset($context["entry_deployment"]) ? $context["entry_deployment"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_udeploy\" class=\"wk_udeploy\" value=\"1\" ";
            // line 529
            if (((isset($context["wk_udeploy"]) ? $context["wk_udeploy"] : null) == "1")) {
                echo " ";
                echo "checked";
            }
            echo "/>
                    ";
            // line 530
            echo (isset($context["text_offer_product"]) ? $context["text_offer_product"] : null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_udeploy\" class=\"wk_udeploy\" value=\"2\" ";
            // line 533
            if (((isset($context["wk_udeploy"]) ? $context["wk_udeploy"] : null) == "2")) {
                echo " ";
                echo "checked";
            }
            echo " />
                    ";
            // line 534
            echo (isset($context["text_offer_category"]) ? $context["text_offer_category"] : null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_udeploy\" class=\"wk_udeploy\" value=\"3\" ";
            // line 537
            if (((isset($context["wk_udeploy"]) ? $context["wk_udeploy"] : null) == "3")) {
                echo " ";
                echo "checked";
            }
            echo " />
                    ";
            // line 538
            echo (isset($context["text_offer_neither"]) ? $context["text_offer_neither"] : null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_udeploy\" id=\"wk_udeploy4\" value=\"4\" ";
            // line 541
            if (((isset($context["wk_udeploy"]) ? $context["wk_udeploy"] : null) == "4")) {
                echo " ";
                echo "checked";
            }
            echo " />
                    ";
            // line 542
            echo (isset($context["text_offer_list"]) ? $context["text_offer_list"] : null);
            echo "
                    <div id=\"wk_udeploy\" style=\"display:none;\">
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_udeploy_origin\" value=\"1\" ";
            // line 545
            if (((isset($context["wk_udeploy_origin"]) ? $context["wk_udeploy_origin"] : null) == "1")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 546
            echo (isset($context["text_origin_product"]) ? $context["text_origin_product"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"origin-product\" data-toggle=\"modal\" data-target=\"#oriproModal\" onclick=\"return false;\">";
            // line 547
            echo (isset($context["text_show"]) ? $context["text_show"] : null);
            echo "</button>
                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"oriproModal\" role=\"dialog\" tabindex='-1'>
                          <div class=\"modal-dialog modal-md\">

                            <!-- Modal content-->
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <p class=\"modal-title\" id=\"wkmodalheader\">Products</p>
                              </div>
                              <div class=\"modal-body\" id=\"wkmodalbody\">
                                ";
            // line 559
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_data"]) ? $context["product_data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 560
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 561
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\" name=\"wk_udeploy_origin_product[]\" id=\"oproduct";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\"";
                if (twig_in_filter($this->getAttribute($context["product"], "product_id", array(), "array"), (isset($context["wk_udeploy_origin_product"]) ? $context["wk_udeploy_origin_product"] : null))) {
                    echo " ";
                    echo "checked";
                    echo " ";
                }
                echo "><label for=\"oproduct";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "</label>
                                  </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 564
            echo "                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_udeploy_origin\" value=\"2\" ";
            // line 573
            if (((isset($context["wk_udeploy_origin"]) ? $context["wk_udeploy_origin"] : null) == "2")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 574
            echo (isset($context["text_origin_category"]) ? $context["text_origin_category"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"origin-category\" data-toggle=\"modal\" data-target=\"#oricatModal\" onclick=\"return false;\">";
            // line 575
            echo (isset($context["text_show"]) ? $context["text_show"] : null);
            echo "</button>
                        <div class=\"modal fade\" id=\"oricatModal\" role=\"dialog\" tabindex='-1'>
                          <div class=\"modal-dialog modal-md\">

                            <!-- Modal content-->
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <p class=\"modal-title\" id=\"wkmodalheader\">Categories</p>
                              </div>
                              <div class=\"modal-body\" id=\"wkmodalbody\">
                                ";
            // line 586
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 587
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 588
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\" name=\"wk_udeploy_origin_category[]\" id=\"ocat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\"";
                if (twig_in_filter($this->getAttribute($context["cat"], "category_id", array(), "array"), (isset($context["wk_udeploy_origin_category"]) ? $context["wk_udeploy_origin_category"] : null))) {
                    echo "checked";
                    echo " ";
                }
                echo "><label for=\"ocat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["cat"], "name", array(), "array");
                echo "</label> <button class=\"btn btn-default btn-xs wk_ori_cat\" onclick=\"return false;\"><i class=\"fa fa-minus\"></i></button>
                                      <div class=\"form-group\" style=\"margin-left: 15px;\">
                                      ";
                // line 590
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category_data"]) ? $context["category_data"] : null), $this->getAttribute($context["cat"], "category_id", array(), "array"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 591
                    echo "                                      <div class=\"\">
                                        <input type=\"checkbox\" value=\"";
                    // line 592
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\" name=\"wk_udeploy_origin_subcategory[]\" id=\"osub";
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\"";
                    if (twig_in_filter($this->getAttribute($context["sub"], "category_id", array(), "array"), (isset($context["wk_udeploy_origin_subcategory"]) ? $context["wk_udeploy_origin_subcategory"] : null))) {
                        echo " ";
                        echo "checked";
                        echo " ";
                    }
                    echo "><label for=\"osub";
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["sub"], "name", array(), "array");
                    echo "</label>
                                      </div>
                                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 595
                echo "                                      </div>
                                  </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 598
            echo "                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_udeploy_destiny\" value=\"1\" ";
            // line 607
            if (((isset($context["wk_udeploy_destiny"]) ? $context["wk_udeploy_destiny"] : null) == "1")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 608
            echo (isset($context["text_destiny_product"]) ? $context["text_destiny_product"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"destiny-product\" data-toggle=\"modal\" data-target=\"#destproModal\" onclick=\"return false;\">";
            // line 609
            echo (isset($context["text_show"]) ? $context["text_show"] : null);
            echo "</button>
                        <div class=\"modal fade\" id=\"destproModal\" role=\"dialog\" tabindex='-1'>
                          <div class=\"modal-dialog modal-md\">

                            <!-- Modal content-->
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <p class=\"modal-title\" id=\"wkmodalheader\">Products</p>
                              </div>
                              <div class=\"modal-body\" id=\"wkmodalbody\">
                                ";
            // line 620
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_data"]) ? $context["product_data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 621
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 622
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\" name=\"wk_udeploy_destiny_product[]\" id=\"dproduct";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\"";
                if (twig_in_filter($this->getAttribute($context["product"], "product_id", array(), "array"), (isset($context["wk_udeploy_destiny_product"]) ? $context["wk_udeploy_destiny_product"] : null))) {
                    echo " ";
                    echo "checked";
                    echo " ";
                }
                echo "><label for=\"dproduct";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "</label>
                                  </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 625
            echo "                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_udeploy_destiny\" value=\"2\" ";
            // line 634
            if (((isset($context["wk_udeploy_destiny"]) ? $context["wk_udeploy_destiny"] : null) == "2")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 635
            echo (isset($context["text_destiny_category"]) ? $context["text_destiny_category"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"destiny-category\" data-toggle=\"modal\" data-target=\"#destcatModal\" onclick=\"return false;\">";
            // line 636
            echo (isset($context["text_show"]) ? $context["text_show"] : null);
            echo "</button>
                        <div class=\"modal fade\" id=\"destcatModal\" role=\"dialog\" tabindex='-1'>
                          <div class=\"modal-dialog modal-md\">

                            <!-- Modal content-->
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <p class=\"modal-title\" id=\"wkmodalheader\">Categories</p>
                              </div>
                              <div class=\"modal-body\" id=\"wkmodalbody\">
                                ";
            // line 647
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 648
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 649
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\" name=\"wk_udeploy_destiny_category[]\" id=\"dcat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["cat"], "category_id", array(), "array"), (isset($context["wk_udeploy_destiny_category"]) ? $context["wk_udeploy_destiny_category"] : null))) {
                    echo " ";
                    echo "checked";
                    echo " ";
                }
                echo "><label for=\"dcat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["cat"], "name", array(), "array");
                echo "</label> <button class=\"btn btn-default btn-xs wk_ori_cat\" onclick=\"return false;\"><i class=\"fa fa-minus\"></i></button>
                                      <div class=\"form-group\" style=\"margin-left: 15px;\">
                                      ";
                // line 651
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category_data"]) ? $context["category_data"] : null), $this->getAttribute($context["cat"], "category_id", array(), "array"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 652
                    echo "                                      <div class=\"\">
                                        <input type=\"checkbox\" value=\"";
                    // line 653
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\" name=\"wk_udeploy_destiny_subcategory[]\" id=\"dsub";
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\"";
                    if (twig_in_filter($this->getAttribute($context["sub"], "category_id", array(), "array"), (isset($context["wk_udeploy_destiny_subcategory"]) ? $context["wk_udeploy_destiny_subcategory"] : null))) {
                        echo "checked";
                        echo " ";
                    }
                    echo "><label for=\"dsub";
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["sub"], "name", array(), "array");
                    echo "</label>
                                      </div>
                                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 656
                echo "                                      </div>
                                  </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 659
            echo "                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-deploy\" data-toggle=\"tooltip\" title=\"";
            // line 672
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
              </div>
            </form>
            </fieldset>
          </div>
        </div>
      </div>
    ";
        } else {
            // line 680
            echo "      <div class=\"alert\">
          ";
            // line 681
            echo (isset($context["error_marketplace_disable"]) ? $context["error_marketplace_disable"] : null);
            echo "
      </div>
    ";
        }
        // line 684
        echo "    </div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
  \$(document).on('keydown', \".int_number\",function (e) {
      if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
          (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
          (e.keyCode >= 35 && e.keyCode <= 40)) {
               return;
      }
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
  });

  \$(document).on('keypress', \".float_number\", function(event) {
    var flag = false;

    if(event.which == 46 && \$(this).val() == ''){
      flag = true;
    }

    if((event.which < 48 || event.which > 57) && (event.which == 46 && \$(this).val().indexOf('.') != -1) || ((event.which < 48 || event.which > 57) && event.which != 46)) {
      flag = true;
    }

    if(flag) {
      event.preventDefault();
    }
  });

  //Avoid to paste any type of value in these fileds
  \$(document).on('paste', \".dimentions, .price, .weight, .quantity\", function(event) {
    event.preventDefault();
  });
});
</script>
<script type=\"text/javascript\">

\$('.summernote').summernote({height: 150});

\$('.datetime').datetimepicker({
  pickDate: true,
  pickTime: true
});

\$('.wk_ori_cat').on('click', function () {
  if (\$(this).children().hasClass('fa-plus')) {
    \$(this).children().removeClass('fa-plus');
    \$(this).children().addClass('fa-minus');
    \$(this).next().slideDown();
  } else {
    \$(this).children().removeClass('fa-minus');
    \$(this).children().addClass('fa-plus');
    \$(this).next().slideUp();
  };
});

\$('input[name=\\'wk_upsell_upsell_applicable\\']').click(function(){
  \$(this).autocomplete(\"search\");
});
// upsell_applicable
\$('input[name=\\'wk_upsell_upsell_applicable\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wk_upsell/vendor&user_token=";
        // line 755
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['vendor_id']
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'wk_upsell_upsell_applicable\\']').val('');
    \$('#vendor-upsell-applicable' + item['value']).remove();

    \$('#vendor-upsell-applicable').append('<div id=\"vendor-upsell-applicable' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"wk_upsell_vendor_upsell_applicable[]\" value=\"' + item['value'] + '\" /></div>');

    \$('#vendor-upsell-applicable div:odd').attr('class', 'odd');
    \$('#vendor-upsell-applicable div:even').attr('class', 'even');

    return false;
  },
  focus: function(item) {
      return false;
   }
});

\$('#vendor-upsell-applicable').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
  \$('#vendor-upsell-applicable div:odd').attr('class', 'odd');
  \$('#vendor-upsell-applicable div:even').attr('class', 'even');
});

\$('input[name=\\'wk_upsell_countdown_applicable\\']').click(function(){
  \$(this).autocomplete(\"search\");
});
// countdown_applicable
\$('input[name=\\'wk_upsell_countdown_applicable\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wk_upsell/vendor&user_token=";
        // line 798
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['vendor_id']
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'wk_upsell_countdown_applicable\\']').val('');
    \$('#vendor-countdown-applicable' + item['value']).remove();

    \$('#vendor-countdown-applicable').append('<div id=\"vendor-countdown-applicable' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"wk_upsell_vendor_countdown_applicable[]\" value=\"' + item['value'] + '\" /></div>');

    \$('#vendor-countdown-applicable div:odd').attr('class', 'odd');
    \$('#vendor-countdown-applicable div:even').attr('class', 'even');

    return false;
  },
  focus: function(item) {
      return false;
   }
});

\$('#vendor-countdown-applicable').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
  \$('#vendor-countdown-applicable div:odd').attr('class', 'odd');
  \$('#vendor-countdown-applicable div:even').attr('class', 'even');
});

\$('input[name=\\'wk_upsell_units_applicable\\']').click(function(){
  \$(this).autocomplete(\"search\");
});
// units_applicable
\$('input[name=\\'wk_upsell_units_applicable\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wk_upsell/vendor&user_token=";
        // line 841
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['vendor_id']
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'wk_upsell_units_applicable\\']').val('');
    \$('#vendor-units-applicable' + item['value']).remove();

    \$('#vendor-units-applicable').append('<div id=\"vendor-units-applicable' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"wk_upsell_vendor_units_applicable[]\" value=\"' + item['value'] + '\" /></div>');

    \$('#vendor-units-applicable div:odd').attr('class', 'odd');
    \$('#vendor-units-applicable div:even').attr('class', 'even');

    return false;
  },
  focus: function(item) {
      return false;
   }
});

\$('#vendor-units-applicable').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
  \$('#vendor-units-applicable div:odd').attr('class', 'odd');
  \$('#vendor-units-applicable div:even').attr('class', 'even');
});

\$('#countdown a:first').trigger('click');
\$('#countdowntime a:first').trigger('click');
\$('#units a:first').trigger('click');
\$('#widget-details a:first').trigger('click');
\$('#listing-details a:first').trigger('click');

  if (\$('#wk_udeploy4').is(':checked')) {
    \$('#wk_udeploy').slideDown();
  }

  \$('#wk_udeploy4').on('change', function() {
    if (\$('#wk_udeploy4').is(':checked')) {
      \$('#wk_udeploy').slideDown();
    }
  });
  \$('.wk_udeploy').on('change', function() {
    if (\$('.wk_udeploy').is(':checked')) {
      \$('#wk_udeploy').slideUp();
    }
  });

  var rows = 0;
  \$('#stats-load').on('click', function () {
    var stats_body = \$('.stats-body').html();
    if (\$.trim(stats_body) == '') {
      getTableData(0);
    }
  });

  function getTableData (start) {
    var content;
    \$.ajax({
      url: 'index.php?route=extension/module/wk_upsell/stats&user_token=";
        // line 907
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&start_limit=' + start,
      dataType: 'json',
      beforeSend: function() {
        \$('#wkfoot').addClass('fa-spinner');
      },
      success: function(json) {
        if (json) {
          for (var i = 0; i < json['total']; i++) {
            rows++;
            content = '<tr count=\"' + rows + '\">';
            content += '<td class=\"text-right\">' + json[\"table_data\"][i][\"vendor_id\"] + '</td>';
            content += '<td>' + json[\"table_data\"][i][\"vendor_name\"] + '</td>';
            content += '<td class=\"text-right\">' + json[\"table_data\"][i][\"store_id\"] + '</td>';
            content += '<td>' + json[\"table_data\"][i][\"parents\"] + '</td>';
            content += '<td>' + json[\"table_data\"][i][\"childs\"] + '</td>';
            content += '<td>' + json[\"table_data\"][i][\"date_added\"] + '</td>';
            content += '<td>' + json[\"table_data\"][i][\"date_start\"] + '</td>';
            content += '<td>' + json[\"table_data\"][i][\"date_end\"] + '</td>';
            content += '<td>Upsell</td>';
            content += '<td><a onclick=\"return confirm(\\'";
        // line 926
        echo (isset($context["text_confirm_delete"]) ? $context["text_confirm_delete"] : null);
        echo "\\');\" href=\"' + json[\"table_data\"][i][\"delete\"] + '\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></td>';
            content += '<td>' + json[\"table_data\"][i][\"countdown\"] + '</td>';
            content += '<td class=\"text-right\">' + json[\"table_data\"][i][\"units\"] + '</td>';
            content += '</tr>';
            \$('.stats-body').append(content);
          };
          showing = parseInt(start) + parseInt(json['total']);
          content = 'Showing ' + showing + ' of ' + json['all'] + ' results';
          \$('.stats-result').text(content);
          if (showing == json['all']) {
            all = true;
          };
        }
        \$('#wkfoot').removeClass('fa-spinner');
      }
    });
  }

  var number, showing, all = false, prev = 0;
  \$(window).on('scroll', function () {

    if (\$('#tab-stats').hasClass('active')) {
      var diff = \$(document).height() - \$(window).height();
      var foot = diff - \$(window).scrollTop();

      if (foot == 0) {
          number = \$('.stats-body tr:last-child').attr('count');

          if (number && (number != prev) && !all) {
            getTableData(number);
            prev = number;
          }
      };
    }
  })
</script>
";
        // line 962
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/wk_upsell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2146 => 962,  2107 => 926,  2085 => 907,  2016 => 841,  1970 => 798,  1924 => 755,  1851 => 684,  1845 => 681,  1842 => 680,  1831 => 672,  1816 => 659,  1808 => 656,  1788 => 653,  1785 => 652,  1781 => 651,  1764 => 649,  1761 => 648,  1757 => 647,  1743 => 636,  1739 => 635,  1732 => 634,  1721 => 625,  1700 => 622,  1697 => 621,  1693 => 620,  1679 => 609,  1675 => 608,  1668 => 607,  1657 => 598,  1649 => 595,  1628 => 592,  1625 => 591,  1621 => 590,  1605 => 588,  1602 => 587,  1598 => 586,  1584 => 575,  1580 => 574,  1573 => 573,  1562 => 564,  1541 => 561,  1538 => 560,  1534 => 559,  1519 => 547,  1515 => 546,  1508 => 545,  1502 => 542,  1495 => 541,  1489 => 538,  1482 => 537,  1476 => 534,  1469 => 533,  1463 => 530,  1456 => 529,  1448 => 526,  1443 => 524,  1439 => 523,  1424 => 511,  1420 => 510,  1416 => 509,  1412 => 508,  1408 => 507,  1404 => 506,  1400 => 505,  1396 => 504,  1392 => 503,  1388 => 502,  1384 => 501,  1380 => 500,  1365 => 490,  1353 => 481,  1345 => 478,  1333 => 469,  1325 => 466,  1319 => 463,  1313 => 460,  1305 => 455,  1298 => 450,  1284 => 446,  1274 => 443,  1268 => 441,  1264 => 440,  1260 => 438,  1243 => 436,  1239 => 435,  1230 => 431,  1216 => 425,  1207 => 424,  1198 => 423,  1189 => 422,  1180 => 421,  1171 => 420,  1162 => 419,  1156 => 416,  1148 => 411,  1142 => 410,  1138 => 409,  1130 => 404,  1124 => 403,  1120 => 402,  1112 => 399,  1103 => 395,  1096 => 393,  1087 => 389,  1080 => 387,  1075 => 384,  1062 => 381,  1051 => 380,  1047 => 379,  1040 => 377,  1034 => 373,  1029 => 371,  1024 => 370,  1019 => 368,  1014 => 367,  1012 => 366,  1004 => 363,  995 => 359,  988 => 357,  983 => 355,  975 => 350,  968 => 345,  954 => 341,  944 => 338,  938 => 336,  934 => 335,  930 => 333,  913 => 331,  909 => 330,  900 => 326,  891 => 320,  885 => 319,  881 => 318,  873 => 313,  867 => 312,  863 => 311,  855 => 308,  849 => 304,  844 => 302,  839 => 301,  834 => 299,  829 => 298,  827 => 297,  819 => 294,  810 => 290,  803 => 288,  797 => 284,  792 => 282,  787 => 281,  782 => 279,  777 => 278,  775 => 277,  767 => 274,  762 => 271,  749 => 268,  738 => 267,  734 => 266,  727 => 264,  722 => 262,  712 => 254,  698 => 250,  692 => 248,  688 => 247,  684 => 245,  667 => 243,  663 => 242,  654 => 238,  648 => 234,  639 => 231,  630 => 230,  627 => 229,  622 => 228,  620 => 227,  615 => 225,  610 => 222,  605 => 220,  600 => 219,  595 => 217,  590 => 216,  588 => 215,  580 => 212,  574 => 208,  569 => 206,  564 => 205,  559 => 203,  554 => 202,  552 => 201,  544 => 198,  539 => 196,  531 => 190,  517 => 186,  511 => 184,  507 => 183,  503 => 181,  486 => 179,  482 => 178,  473 => 174,  466 => 169,  452 => 165,  446 => 163,  442 => 162,  438 => 160,  421 => 158,  417 => 157,  408 => 153,  402 => 149,  393 => 146,  384 => 145,  381 => 144,  376 => 143,  374 => 142,  369 => 140,  364 => 137,  359 => 135,  354 => 134,  349 => 132,  344 => 131,  342 => 130,  334 => 127,  328 => 123,  323 => 121,  318 => 120,  313 => 118,  308 => 117,  306 => 116,  298 => 113,  293 => 111,  286 => 106,  281 => 104,  276 => 103,  271 => 101,  266 => 100,  264 => 99,  256 => 96,  251 => 94,  244 => 89,  235 => 86,  226 => 85,  223 => 84,  218 => 83,  216 => 82,  211 => 80,  206 => 77,  201 => 75,  196 => 74,  191 => 72,  186 => 71,  184 => 70,  176 => 67,  170 => 63,  165 => 61,  160 => 60,  155 => 58,  150 => 57,  148 => 56,  140 => 53,  135 => 51,  128 => 47,  123 => 45,  116 => 41,  110 => 38,  106 => 37,  101 => 35,  97 => 34,  93 => 32,  91 => 31,  86 => 29,  82 => 27,  74 => 23,  71 => 22,  63 => 18,  61 => 17,  55 => 13,  44 => 11,  40 => 10,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
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
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       {% if (marketplace_status is defined and marketplace_status) %}*/
/*       <div class="panel-body">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-cpanel" data-toggle="tab"><i class="fa fa-power-off"></i> {{ tab_cpanel }}</a></li>*/
/*           <li class="dropdown"><a href="" data-toggle="dropdown" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> {{ tab_setting }} <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu dropdown-menu-left">*/
/*               <li><a href="#tab-setting-widget" data-toggle="tab">{{ text_widgets }}</a></li>*/
/*               <li><a href="#tab-setting-listing" data-toggle="tab">{{ text_listing }}</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <li><a href="#tab-stats" data-toggle="tab" id="stats-load"><i class="fa fa-bar-chart"></i> {{ tab_stats }}</a></li>*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-cpanel">*/
/*             <form action="{{ action_control }}" method="post" enctype="multipart/form-data" id="form-cpanel" class="form-horizontal">*/
/*               <div class="pull-right">*/
/*                 <button type="submit" form="form-cpanel" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*               </div>*/
/*               <br>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upsell }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-upsell-status"><span data-toggle="tooltip" data-original-title="{{ help_upsell_status }}">{{ entry_upsell_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="module_wk_upsell_upsell_status" id="input-upsell-status" class="form-control">*/
/*                       {% if (wk_upsell_upsell_status) %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-upsell-applicable"><span data-toggle="tooltip" title="{{ help_upsell_applicable }}">{{ entry_upsell_applicable }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="wk_upsell_upsell_applicable_status" id="inupsell-applicable-status" class="form-control">*/
/*                       {% if (wk_upsell_upsell_applicable_status) %}*/
/*                       <option value="1" selected="selected">{{ text_except }}</option>*/
/*                       <option value="0">{{ text_noone }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_except }}</option>*/
/*                       <option value="0" selected="selected">{{ text_noone }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-sm-10 col-sm-offset-2">*/
/*                     <input type="text" name="wk_upsell_upsell_applicable" value="" placeholder="{{ entry_upsell_applicable }}" id="input-upsell-applicable" class="form-control" />*/
/*                     <div id="vendor-upsell-applicable" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                       {% set class = 'odd' %}*/
/*                       {% for vendor_upsell_applicable in vendor_upsell_applicables %}*/
/*                       {% set class = class == 'even' ? 'odd' : 'even' %}*/
/*                       <div id="vendor-upsell-applicable{{ vendor_upsell_applicable['vendor_id'] }}" class="{{ class }}"><i class="fa fa-minus-circle"></i> {{ vendor_upsell_applicable['name'] }}*/
/*                         <input type="hidden" name="wk_upsell_vendor_upsell_applicable[]" value="{{ vendor_upsell_applicable['vendor_id'] }}" />*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-status"><span data-toggle="tooltip" data-original-title="{{ help_tax_status }}">{{ entry_tax_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="wk_upsell_tax_status" id="input-tax-status" class="form-control">*/
/*                       {% if (wk_upsell_tax_status) %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_countdown }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-countdown-status"><span data-toggle="tooltip" data-original-title="{{ help_countdown_status }}">{{ entry_countdown_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="wk_upsell_countdown_status" id="input-countdown-status" class="form-control">*/
/*                       {% if (wk_upsell_countdown_status) %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-countdown-applicable"><span data-toggle="tooltip" title="{{ help_countdown_applicable }}">{{ entry_countdown_applicable }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="wk_upsell_countdown_applicable_status" id="input-countdown-applicable-status" class="form-control">*/
/*                       {% if (wk_upsell_countdown_applicable_status) %}*/
/*                       <option value="1" selected="selected">{{ text_except }}</option>*/
/*                       <option value="0">{{ text_noone }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_except }}</option>*/
/*                       <option value="0" selected="selected">{{ text_noone }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-sm-10 col-sm-offset-2">*/
/*                     <input type="text" name="wk_upsell_countdown_applicable" value="" placeholder="{{ entry_countdown_applicable }}" id="input-countdown-applicable" class="form-control" />*/
/*                     <div id="vendor-countdown-applicable" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                       {% set class = 'odd' %}*/
/*                       {% for vendor_countdown_applicable in vendor_countdown_applicables %}*/
/*                       {% set class = class == 'even' ? 'odd' : 'even' %}*/
/*                       <div id="vendor-countdown-applicable{{ vendor_countdown_applicable['vendor_id'] }}" class="{{ class }}"><i class="fa fa-minus-circle"></i> {{ vendor_countdown_applicable['name'] }}*/
/*                         <input type="hidden" name="wk_upsell_vendor_countdown_applicable[]" value="{{ vendor_countdown_applicable['vendor_id'] }}" />*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-countdown-syntax"><span data-toggle="tooltip" title="{{ help_countdown_syntax }}">{{ entry_countdown_syntax }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="tab-pane" id="tab-countdown">*/
/*                       <ul class="nav nav-tabs" id="countdown">*/
/*                         {% for language in languages %}*/
/*                         <li><a href="#tab-countdown-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                       <div class="tab-content">*/
/*                         {% for language in languages %}*/
/*                         <div class="tab-pane" id="tab-countdown-language{{ language['language_id'] }}">*/
/*                           <div class="form-group">*/
/*                             <textarea name="wk_upsell_countdown_syntax[{{ language['language_id'] }}]" placeholder="{{ entry_countdown_syntax }}" class="form-control summernote" rows="3">{{ wk_upsell_countdown_syntax[language['language_id']] is defined ? wk_upsell_countdown_syntax[language['language_id']] : '' }}</textarea>*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-countdowntime-syntax"><span data-toggle="tooltip" title="{{ help_countdowntime_syntax }}">{{ entry_countdowntime_syntax }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="tab-pane" id="tab-countdowntime">*/
/*                       <ul class="nav nav-tabs" id="countdowntime">*/
/*                         {% for language in languages %}*/
/*                         <li><a href="#tab-countdowntime-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                       <div class="tab-content">*/
/*                         {% for language in languages %}*/
/*                         <div class="tab-pane" id="tab-countdowntime-language{{ language['language_id'] }}">*/
/*                           <div class="form-group">*/
/*                             <textarea name="wk_upsell_countdowntime_syntax[{{ language['language_id'] }}]" placeholder="{{ entry_countdowntime_syntax }}" class="form-control summernote" rows="3">{{ wk_upsell_countdowntime_syntax[language['language_id']] is defined ? wk_upsell_countdowntime_syntax[language['language_id']] : '' }}</textarea>*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_units }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-units-status"><span data-toggle="tooltip" data-original-title="{{ help_units_status }}">{{ entry_units_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="wk_upsell_units_status" id="input-units-status" class="form-control">*/
/*                       {% if (wk_upsell_units_status) %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-units-applicable"><span data-toggle="tooltip" title="{{ help_units_applicable }}">{{ entry_units_applicable }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="wk_upsell_units_applicable_status" id="inunits-applicable-status" class="form-control">*/
/*                       {% if (wk_upsell_units_applicable_status) %}*/
/*                       <option value="1" selected="selected">{{ text_except }}</option>*/
/*                       <option value="0">{{ text_noone }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_except }}</option>*/
/*                       <option value="0" selected="selected">{{ text_noone }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-sm-10 col-sm-offset-2">*/
/*                     <input type="text" name="wk_upsell_units_applicable" value="" placeholder="{{ entry_units_applicable }}" id="input-units-applicable" class="form-control" />*/
/*                     <div id="vendor-units-applicable" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                       {% set class = 'odd' %}*/
/*                       {% for vendor_units_applicable in vendor_units_applicables %}*/
/*                       {% set class = class == 'even' ? 'odd' : 'even' %}*/
/*                       <div id="vendor-units-applicable{{ vendor_units_applicable['vendor_id'] }}" class="{{ class }}"><i class="fa fa-minus-circle"></i> {{ vendor_units_applicable['name'] }}*/
/*                         <input type="hidden" name="wk_upsell_vendor_units_applicable[]" value="{{ vendor_units_applicable['vendor_id'] }}" />*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-units-syntax"><span data-toggle="tooltip" title="{{ help_units_syntax }}">{{ entry_units_syntax }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="tab-pane" id="tab-units">*/
/*                       <ul class="nav nav-tabs" id="units">*/
/*                         {% for language in languages %}*/
/*                         <li><a href="#tab-units-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                       <div class="tab-content">*/
/*                         {% for language in languages %}*/
/*                         <div class="tab-pane" id="tab-units-language{{ language['language_id'] }}">*/
/*                           <div class="form-group">*/
/*                             <textarea name="wk_upsell_units_syntax[{{ language['language_id'] }}]" placeholder="{{ entry_units_syntax }}" class="form-control summernote" rows="3">{{ wk_upsell_units_syntax[language['language_id']] is defined ? wk_upsell_units_syntax[language['language_id']] : '' }}</textarea>*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </form>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-setting-widget">*/
/*             <form action="{{ action_widgets }}" method="post" enctype="multipart/form-data" id="form-widgets" class="form-horizontal">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-title-widget"><span data-toggle="tooltip" data-original-title="{{ help_title }}">{{ entry_title }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   {% for language in languages %}*/
/*                     <div class="input-group" style="margin-bottom:2px;"><span class="input-group-addon"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}</span>*/
/*                       <input type="text" name="wk_widget_title[{{ language['language_id'] }}]" placeholder="{{ entry_title }}" class="form-control" value="{{ wk_widget_title[language['language_id']] is defined ? wk_widget_title[language['language_id']] : '' }}" />*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-widget-status"><span data-toggle="tooltip" data-original-title="{{ help_widget_status }}">{{ entry_widget_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="wk_widget_status" id="input-widget-status" class="form-control">*/
/*                     {% if (wk_widget_status) %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upselling-widget"><span data-toggle="tooltip" data-original-title="{{ help_upselling_widget }}">{{ entry_upselling_widget }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="number" min="0" name="wk_widget_upselling_widget" value="{{ wk_widget_upselling_widget }}" placeholder="{{ entry_upselling_widget }}" id="input-upselling-widget" class="form-control int_number" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-display-type"><span data-toggle="tooltip" data-original-title="{{ help_display_type }}">{{ entry_display_type }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="wk_widget_display_type" id="input-display-type" class="form-control">*/
/*                     {% if (wk_widget_display_type) %}*/
/*                     <option value="0">{{ text_random }}</option>*/
/*                     <option value="1" selected="selected">{{ text_default }}</option>*/
/*                     {% else %}*/
/*                     <option value="0" selected="selected">{{ text_random }}</option>*/
/*                     <option value="1">{{ text_default }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-picture-size"><span data-toggle="tooltip" data-original-title="{{ help_picture_size }}">{{ entry_picture_size }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ text_width }}</span>*/
/*                     <input type="number" min="0" name="wk_widget_picture_width" value="{{ wk_widget_picture_width }}" placeholder="{{ entry_picture_width }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-sm-10 col-sm-offset-2">*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ text_height }}</span>*/
/*                     <input type="number" min="0" name="wk_widget_picture_height" value="{{ wk_widget_picture_height }}" placeholder="{{ entry_picture_height }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upselling-details"><span data-toggle="tooltip" title="{{ help_upselling_details }}">{{ entry_upselling_details }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-pane" id="tab-widgets">*/
/*                     <ul class="nav nav-tabs" id="widget-details">*/
/*                       {% for language in languages %}*/
/*                       <li><a href="#tab-widgets-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                       {% for language in languages %}*/
/*                       <div class="tab-pane" id="tab-widgets-language{{ language['language_id'] }}">*/
/*                         <div class="form-group">*/
/*                           <textarea name="wk_widget_upselling_details[{{ language['language_id'] }}]" placeholder="{{ entry_upselling_details }}" class="form-control summernote" rows="3">{{ wk_widget_upselling_details[language['language_id']] is defined ? wk_widget_upselling_details[language['language_id']] : '' }}</textarea>*/
/*                         </div>*/
/*                         <!-- <div class="form-group">*/
/*                           <textarea name="wk_widget_upselling_details2[{{ language['language_id'] }}]" placeholder="{{ entry_upselling_details }}" class="form-control summernote" rows="3">{{ wk_widget_upselling_details2[language['language_id']] is defined ? wk_widget_upselling_details2[language['language_id']] : '' }}</textarea>*/
/*                         </div> -->*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="pull-right">*/
/*                 <button type="submit" form="form-widgets" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-setting-listing">*/
/*             <form action="{{ action_listings }}" method="post" enctype="multipart/form-data" id="form-listings" class="form-horizontal">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-original-title="{{ help_listing_url }}">{{ entry_listing_url }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <a href="{{ catalog_link }}" target="_blank">{{ text_listing }}</a>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-listing-status"><span data-toggle="tooltip" data-original-title="{{ help_listing_status }}">{{ entry_listing_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="wk_listing_status" id="input-listing-status" class="form-control">*/
/*                     {% if (wk_listing_status) %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-title-menulink"><span data-toggle="tooltip" data-original-title="{{ help_title_menulink }}">{{ entry_title_menulink }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   {% for language in languages %}*/
/*                     <div class="input-group" style="margin-bottom:2px;"><span class="input-group-addon"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}</span>*/
/*                       <input type="text" name="wk_listing_menulink_title[{{ language['language_id'] }}]" placeholder="{{ entry_title_menulink }}" class="form-control" value="{{ wk_listing_menulink_title[language['language_id']] is defined ? wk_listing_menulink_title[language['language_id']] : '' }}" />*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-menu"><span data-toggle="tooltip" data-original-title="{{ help_sort_menu }}">{{ entry_sort_menu }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="number" min="0" name="wk_listing_sort_menu" value="{{ wk_listing_sort_menu }}" placeholder="{{ entry_sort_menu }}" id="input-sort-menu" class="form-control int_number" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-bundles-page"><span data-toggle="tooltip" data-original-title="{{ help_bundles_page }}">{{ entry_bundles_page }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="number" min="0" name="wk_listing_bundles_page" value="{{ wk_listing_bundles_page }}" placeholder="{{ entry_bundles_page }}" id="input-bundles-page" class="form-control int_number" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-picture-size"><span data-toggle="tooltip" data-original-title="{{ help_picture_size }}">{{ entry_picture_size }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ text_width }}</span>*/
/*                     <input type="number" min="0" name="wk_listing_picture_width" value="{{ wk_listing_picture_width }}" placeholder="{{ entry_picture_width }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-sm-10 col-sm-offset-2">*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ text_height }}</span>*/
/*                     <input type="number" min="0" name="wk_listing_picture_height" value="{{ wk_listing_picture_height }}" placeholder="{{ entry_picture_height }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="wk_listing_theme" class="form-control" id="input-theme">*/
/*                     <option {% if (wk_listing_theme == "ps_gray") %} {{ " selected" }}{% endif %} value="ps_gray">{{ text_gray }}</option>*/
/*                     <option {% if (wk_listing_theme == "ps_blue") %} {{ " selected" }}{% endif %} value="ps_blue">{{ text_blue }}</option>*/
/*                     <option {% if (wk_listing_theme == "ps_green") %} {{ " selected" }}{% endif %} value="ps_green">{{ text_green }}</option>*/
/*                     <option {% if (wk_listing_theme == "ps_orange") %} {{ " selected" }}{% endif %} value="ps_orange">{{ text_orange }}</option>*/
/*                     <option {% if (wk_listing_theme == "ps_red") %} {{ " selected" }}{% endif %} value="ps_red">{{ text_red }}</option>*/
/*                     <option {% if (wk_listing_theme == "ps_purple") %} {{ " selected" }}{% endif %} value="ps_purple">{{ text_purple }}</option>*/
/*                     <option {% if (wk_listing_theme == "ps_yellow") %} {{ " selected" }}{% endif %} value="ps_yellow">{{ text_yellow }}</option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upselling-details"><span data-toggle="tooltip" title="{{ help_upselling_details }}">{{ entry_upselling_details }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-pane" id="tab-listings">*/
/*                     <ul class="nav nav-tabs" id="listing-details">*/
/*                       {% for language in languages %}*/
/*                       <li><a href="#tab-listings-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                       {% for language in languages %}*/
/*                       <div class="tab-pane" id="tab-listings-language{{ language['language_id'] }}">*/
/*                         <div class="form-group">*/
/*                           <textarea name="wk_listing_upselling_details[{{ language['language_id'] }}]" placeholder="{{ entry_upselling_details }}" class="form-control summernote" rows="3">{{ wk_listing_upselling_details[language['language_id']] is defined ? wk_listing_upselling_details[language['language_id']] : '' }}</textarea>*/
/*                         </div>*/
/*                         <!-- <div class="form-group">*/
/*                           <textarea name="wk_listing_upselling_details2[{{ language['language_id'] }}]" placeholder="{{ entry_upselling_details }}" class="form-control summernote" rows="3">{{ wk_listing_upselling_details2[language['language_id']] is defined ? wk_listing_upselling_details2[language['language_id']] : '' }}</textarea>*/
/*                         </div> -->*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="pull-right">*/
/*                 <button type="submit" form="form-listings" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-stats">*/
/*             <h3>{{ tab_stats }}</h3>*/
/*             <div class="container-fluid">*/
/*               <div class="row well">*/
/*                 <form action="{{ export }}" id="form-export" method="post">*/
/* */
/*                   <div class="form-group col-sm-5">*/
/*                     <label class="col-sm-12 control-label" for="input-datef"><span data-toggle="tooltip" title="{{ help_valid_from }}">{{ entry_date_from }}</span></label>*/
/*                     <div class="col-sm-12">*/
/*                       <div class="input-group datetime">*/
/*                         <input type="text" name="date_from" value="" data-date-format="YYYY-MM-DD" placeholder="{{ entry_date_from }}" id="input-datef" class="form-control" data-date-format="YYYY-MM-DD"/>*/
/*                         <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                         </span>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="form-group col-sm-5">*/
/*                     <label class="col-sm-12 control-label" for="input-datet"><span data-toggle="tooltip" title="{{ help_valid_till }}">{{ entry_date_till }}</span></label>*/
/*                     <div class="col-sm-12">*/
/*                       <div class="input-group datetime">*/
/*                         <input type="text" name="date_till" value="" data-date-format="YYYY-MM-DD" placeholder="{{ entry_date_till }}" id="input-datet" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                         </span>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="pull-right">*/
/*                     <a onclick="$('#form-export').submit();" data-toggle="tooltip" title="{{ text_export }}" class="btn btn-warning btn-lg"><i class="fa fa-download"></i> {{ text_export }}</a>*/
/*                   </div>*/
/*                 </form>*/
/*               </div>*/
/*             </div>*/
/*             <br>*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered table-hover">*/
/*                 <thead class="btn-danger">*/
/*                   <tr>*/
/*                     <td>{{ column_vendor_id }}</td>*/
/*                     <td>{{ column_vendor }}</td>*/
/*                     <td>{{ column_store_id }}</td>*/
/*                     <td>{{ column_parent_product }}</td>*/
/*                     <td>{{ column_child_product }}</td>*/
/*                     <td>{{ column_added_on }}</td>*/
/*                     <td>{{ column_start_date }}</td>*/
/*                     <td>{{ column_end_date }}</td>*/
/*                     <td>{{ column_condition }}</td>*/
/*                     <td>{{ column_action }}</td>*/
/*                     <td>{{ column_countdown }}</td>*/
/*                     <td>{{ column_units }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody class="stats-body"></tbody>*/
/*                 <tfoot class="text-center">*/
/*                   <tr><td colspan="12" class="text-center alert-info"><span class="stats-result"></span> <i id="wkfoot" class="fa fa-spin" style="font-size: large;"></i></td></tr>*/
/*                 </tfoot>*/
/*               </table>*/
/*             </div>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-manage">*/
/*             <fieldset>*/
/*               <legend>{{ tab_manage }}</legend>*/
/*               <form action="{{ action_deploy }}" method="post" enctype="multipart/form-data" id="form-deploy" class="form-horizontal">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_deployment }}">{{ entry_deployment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="wk_udeploy" class="wk_udeploy" value="1" {% if (wk_udeploy == '1') %} {{ "checked" }}{% endif %}/>*/
/*                     {{ text_offer_product }}*/
/*                   </label>*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="wk_udeploy" class="wk_udeploy" value="2" {% if (wk_udeploy == '2') %} {{ "checked" }}{% endif %} />*/
/*                     {{ text_offer_category }}*/
/*                   </label>*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="wk_udeploy" class="wk_udeploy" value="3" {% if (wk_udeploy == '3') %} {{ "checked" }}{% endif %} />*/
/*                     {{ text_offer_neither }}*/
/*                   </label>*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="wk_udeploy" id="wk_udeploy4" value="4" {% if (wk_udeploy == '4') %} {{ "checked" }}{% endif %} />*/
/*                     {{ text_offer_list }}*/
/*                     <div id="wk_udeploy" style="display:none;">*/
/*                       <label class="radio">*/
/*                         <input type="radio" name="wk_udeploy_origin" value="1" {% if (wk_udeploy_origin == '1') %} {{ "checked" }}{% endif %} />*/
/*                         {{ text_origin_product }}*/
/*                         <button class="btn btn-success" data-keyboard="true" class="origin-product" data-toggle="modal" data-target="#oriproModal" onclick="return false;">{{ text_show }}</button>*/
/*                         <!-- Modal -->*/
/*                         <div class="modal fade" id="oriproModal" role="dialog" tabindex='-1'>*/
/*                           <div class="modal-dialog modal-md">*/
/* */
/*                             <!-- Modal content-->*/
/*                             <div class="modal-content">*/
/*                               <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                                 <p class="modal-title" id="wkmodalheader">Products</p>*/
/*                               </div>*/
/*                               <div class="modal-body" id="wkmodalbody">*/
/*                                 {% for product in product_data %}*/
/*                                   <div class="">*/
/*                                     <input type="checkbox" value="{{ product['product_id'] }}" name="wk_udeploy_origin_product[]" id="oproduct{{ product['product_id'] }}"{% if product['product_id'] in wk_udeploy_origin_product %} {{ "checked" }} {% endif %}><label for="oproduct{{ product['product_id'] }}">{{ product['name'] }}</label>*/
/*                                   </div>*/
/*                                 {% endfor %}*/
/*                               </div>*/
/*                               <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </label>*/
/*                       <label class="radio">*/
/*                         <input type="radio" name="wk_udeploy_origin" value="2" {% if (wk_udeploy_origin == '2') %} {{ "checked" }}{% endif %} />*/
/*                         {{ text_origin_category }}*/
/*                         <button class="btn btn-success" data-keyboard="true" class="origin-category" data-toggle="modal" data-target="#oricatModal" onclick="return false;">{{ text_show }}</button>*/
/*                         <div class="modal fade" id="oricatModal" role="dialog" tabindex='-1'>*/
/*                           <div class="modal-dialog modal-md">*/
/* */
/*                             <!-- Modal content-->*/
/*                             <div class="modal-content">*/
/*                               <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                                 <p class="modal-title" id="wkmodalheader">Categories</p>*/
/*                               </div>*/
/*                               <div class="modal-body" id="wkmodalbody">*/
/*                                 {% for cat in category %}*/
/*                                   <div class="">*/
/*                                     <input type="checkbox" value="{{ cat['category_id'] }}" name="wk_udeploy_origin_category[]" id="ocat{{ cat['category_id'] }}"{% if cat['category_id'] in wk_udeploy_origin_category %}{{ "checked" }} {% endif %}><label for="ocat{{ cat['category_id'] }}">{{ cat['name'] }}</label> <button class="btn btn-default btn-xs wk_ori_cat" onclick="return false;"><i class="fa fa-minus"></i></button>*/
/*                                       <div class="form-group" style="margin-left: 15px;">*/
/*                                       {% for sub in category_data[cat['category_id']] %}*/
/*                                       <div class="">*/
/*                                         <input type="checkbox" value="{{ sub['category_id'] }}" name="wk_udeploy_origin_subcategory[]" id="osub{{ sub['category_id'] }}"{% if sub['category_id'] in wk_udeploy_origin_subcategory %} {{ "checked" }} {% endif %}><label for="osub{{ sub['category_id'] }}">{{ sub['name'] }}</label>*/
/*                                       </div>*/
/*                                       {% endfor %}*/
/*                                       </div>*/
/*                                   </div>*/
/*                                 {% endfor %}*/
/*                               </div>*/
/*                               <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </label>*/
/*                       <label class="radio">*/
/*                         <input type="radio" name="wk_udeploy_destiny" value="1" {% if (wk_udeploy_destiny == '1') %} {{ "checked" }}{% endif %} />*/
/*                         {{ text_destiny_product }}*/
/*                         <button class="btn btn-success" data-keyboard="true" class="destiny-product" data-toggle="modal" data-target="#destproModal" onclick="return false;">{{ text_show }}</button>*/
/*                         <div class="modal fade" id="destproModal" role="dialog" tabindex='-1'>*/
/*                           <div class="modal-dialog modal-md">*/
/* */
/*                             <!-- Modal content-->*/
/*                             <div class="modal-content">*/
/*                               <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                                 <p class="modal-title" id="wkmodalheader">Products</p>*/
/*                               </div>*/
/*                               <div class="modal-body" id="wkmodalbody">*/
/*                                 {% for product in product_data %}*/
/*                                   <div class="">*/
/*                                     <input type="checkbox" value="{{ product['product_id'] }}" name="wk_udeploy_destiny_product[]" id="dproduct{{ product['product_id'] }}"{% if product['product_id'] in wk_udeploy_destiny_product %} {{ "checked" }} {% endif %}><label for="dproduct{{ product['product_id'] }}">{{ product['name'] }}</label>*/
/*                                   </div>*/
/*                                 {% endfor %}*/
/*                               </div>*/
/*                               <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </label>*/
/*                       <label class="radio">*/
/*                         <input type="radio" name="wk_udeploy_destiny" value="2" {% if (wk_udeploy_destiny == '2') %} {{ "checked" }}{% endif %} />*/
/*                         {{ text_destiny_category }}*/
/*                         <button class="btn btn-success" data-keyboard="true" class="destiny-category" data-toggle="modal" data-target="#destcatModal" onclick="return false;">{{ text_show }}</button>*/
/*                         <div class="modal fade" id="destcatModal" role="dialog" tabindex='-1'>*/
/*                           <div class="modal-dialog modal-md">*/
/* */
/*                             <!-- Modal content-->*/
/*                             <div class="modal-content">*/
/*                               <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                                 <p class="modal-title" id="wkmodalheader">Categories</p>*/
/*                               </div>*/
/*                               <div class="modal-body" id="wkmodalbody">*/
/*                                 {% for cat in category %}*/
/*                                   <div class="">*/
/*                                     <input type="checkbox" value="{{ cat['category_id'] }}" name="wk_udeploy_destiny_category[]" id="dcat{{ cat['category_id'] }}" {% if cat['category_id'] in wk_udeploy_destiny_category %} {{ "checked" }} {% endif %}><label for="dcat{{ cat['category_id'] }}">{{ cat['name'] }}</label> <button class="btn btn-default btn-xs wk_ori_cat" onclick="return false;"><i class="fa fa-minus"></i></button>*/
/*                                       <div class="form-group" style="margin-left: 15px;">*/
/*                                       {% for sub in category_data[cat['category_id']] %}*/
/*                                       <div class="">*/
/*                                         <input type="checkbox" value="{{ sub['category_id'] }}" name="wk_udeploy_destiny_subcategory[]" id="dsub{{ sub['category_id'] }}"{% if sub['category_id'] in wk_udeploy_destiny_subcategory %}{{ "checked" }} {% endif %}><label for="dsub{{ sub['category_id'] }}">{{ sub['name'] }}</label>*/
/*                                       </div>*/
/*                                       {% endfor %}*/
/*                                       </div>*/
/*                                   </div>*/
/*                                 {% endfor %}*/
/*                               </div>*/
/*                               <div class="modal-footer">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </label>*/
/*                     </div>*/
/*                   </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="pull-right">*/
/*                 <button type="submit" form="form-deploy" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*               </div>*/
/*             </form>*/
/*             </fieldset>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% else %}*/
/*       <div class="alert">*/
/*           {{ error_marketplace_disable }}*/
/*       </div>*/
/*     {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* <script type="text/javascript">*/
/* $(document).ready(function() {*/
/*   $(document).on('keydown', ".int_number",function (e) {*/
/*       if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||*/
/*           (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||*/
/*           (e.keyCode >= 35 && e.keyCode <= 40)) {*/
/*                return;*/
/*       }*/
/*       if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {*/
/*           e.preventDefault();*/
/*       }*/
/*   });*/
/* */
/*   $(document).on('keypress', ".float_number", function(event) {*/
/*     var flag = false;*/
/* */
/*     if(event.which == 46 && $(this).val() == ''){*/
/*       flag = true;*/
/*     }*/
/* */
/*     if((event.which < 48 || event.which > 57) && (event.which == 46 && $(this).val().indexOf('.') != -1) || ((event.which < 48 || event.which > 57) && event.which != 46)) {*/
/*       flag = true;*/
/*     }*/
/* */
/*     if(flag) {*/
/*       event.preventDefault();*/
/*     }*/
/*   });*/
/* */
/*   //Avoid to paste any type of value in these fileds*/
/*   $(document).on('paste', ".dimentions, .price, .weight, .quantity", function(event) {*/
/*     event.preventDefault();*/
/*   });*/
/* });*/
/* </script>*/
/* <script type="text/javascript">*/
/* */
/* $('.summernote').summernote({height: 150});*/
/* */
/* $('.datetime').datetimepicker({*/
/*   pickDate: true,*/
/*   pickTime: true*/
/* });*/
/* */
/* $('.wk_ori_cat').on('click', function () {*/
/*   if ($(this).children().hasClass('fa-plus')) {*/
/*     $(this).children().removeClass('fa-plus');*/
/*     $(this).children().addClass('fa-minus');*/
/*     $(this).next().slideDown();*/
/*   } else {*/
/*     $(this).children().removeClass('fa-minus');*/
/*     $(this).children().addClass('fa-plus');*/
/*     $(this).next().slideUp();*/
/*   };*/
/* });*/
/* */
/* $('input[name=\'wk_upsell_upsell_applicable\']').click(function(){*/
/*   $(this).autocomplete("search");*/
/* });*/
/* // upsell_applicable*/
/* $('input[name=\'wk_upsell_upsell_applicable\']').autocomplete({*/
/*   minLength: 0,*/
/*   delay: 101,*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/wk_upsell/vendor&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['name'],*/
/*             value: item['vendor_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   select: function(item) {*/
/*     $('input[name=\'wk_upsell_upsell_applicable\']').val('');*/
/*     $('#vendor-upsell-applicable' + item['value']).remove();*/
/* */
/*     $('#vendor-upsell-applicable').append('<div id="vendor-upsell-applicable' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="wk_upsell_vendor_upsell_applicable[]" value="' + item['value'] + '" /></div>');*/
/* */
/*     $('#vendor-upsell-applicable div:odd').attr('class', 'odd');*/
/*     $('#vendor-upsell-applicable div:even').attr('class', 'even');*/
/* */
/*     return false;*/
/*   },*/
/*   focus: function(item) {*/
/*       return false;*/
/*    }*/
/* });*/
/* */
/* $('#vendor-upsell-applicable').delegate('.fa-minus-circle', 'click', function() {*/
/*   $(this).parent().remove();*/
/*   $('#vendor-upsell-applicable div:odd').attr('class', 'odd');*/
/*   $('#vendor-upsell-applicable div:even').attr('class', 'even');*/
/* });*/
/* */
/* $('input[name=\'wk_upsell_countdown_applicable\']').click(function(){*/
/*   $(this).autocomplete("search");*/
/* });*/
/* // countdown_applicable*/
/* $('input[name=\'wk_upsell_countdown_applicable\']').autocomplete({*/
/*   minLength: 0,*/
/*   delay: 101,*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/wk_upsell/vendor&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['name'],*/
/*             value: item['vendor_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   select: function(item) {*/
/*     $('input[name=\'wk_upsell_countdown_applicable\']').val('');*/
/*     $('#vendor-countdown-applicable' + item['value']).remove();*/
/* */
/*     $('#vendor-countdown-applicable').append('<div id="vendor-countdown-applicable' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="wk_upsell_vendor_countdown_applicable[]" value="' + item['value'] + '" /></div>');*/
/* */
/*     $('#vendor-countdown-applicable div:odd').attr('class', 'odd');*/
/*     $('#vendor-countdown-applicable div:even').attr('class', 'even');*/
/* */
/*     return false;*/
/*   },*/
/*   focus: function(item) {*/
/*       return false;*/
/*    }*/
/* });*/
/* */
/* $('#vendor-countdown-applicable').delegate('.fa-minus-circle', 'click', function() {*/
/*   $(this).parent().remove();*/
/*   $('#vendor-countdown-applicable div:odd').attr('class', 'odd');*/
/*   $('#vendor-countdown-applicable div:even').attr('class', 'even');*/
/* });*/
/* */
/* $('input[name=\'wk_upsell_units_applicable\']').click(function(){*/
/*   $(this).autocomplete("search");*/
/* });*/
/* // units_applicable*/
/* $('input[name=\'wk_upsell_units_applicable\']').autocomplete({*/
/*   minLength: 0,*/
/*   delay: 101,*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/wk_upsell/vendor&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['name'],*/
/*             value: item['vendor_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   select: function(item) {*/
/*     $('input[name=\'wk_upsell_units_applicable\']').val('');*/
/*     $('#vendor-units-applicable' + item['value']).remove();*/
/* */
/*     $('#vendor-units-applicable').append('<div id="vendor-units-applicable' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="wk_upsell_vendor_units_applicable[]" value="' + item['value'] + '" /></div>');*/
/* */
/*     $('#vendor-units-applicable div:odd').attr('class', 'odd');*/
/*     $('#vendor-units-applicable div:even').attr('class', 'even');*/
/* */
/*     return false;*/
/*   },*/
/*   focus: function(item) {*/
/*       return false;*/
/*    }*/
/* });*/
/* */
/* $('#vendor-units-applicable').delegate('.fa-minus-circle', 'click', function() {*/
/*   $(this).parent().remove();*/
/*   $('#vendor-units-applicable div:odd').attr('class', 'odd');*/
/*   $('#vendor-units-applicable div:even').attr('class', 'even');*/
/* });*/
/* */
/* $('#countdown a:first').trigger('click');*/
/* $('#countdowntime a:first').trigger('click');*/
/* $('#units a:first').trigger('click');*/
/* $('#widget-details a:first').trigger('click');*/
/* $('#listing-details a:first').trigger('click');*/
/* */
/*   if ($('#wk_udeploy4').is(':checked')) {*/
/*     $('#wk_udeploy').slideDown();*/
/*   }*/
/* */
/*   $('#wk_udeploy4').on('change', function() {*/
/*     if ($('#wk_udeploy4').is(':checked')) {*/
/*       $('#wk_udeploy').slideDown();*/
/*     }*/
/*   });*/
/*   $('.wk_udeploy').on('change', function() {*/
/*     if ($('.wk_udeploy').is(':checked')) {*/
/*       $('#wk_udeploy').slideUp();*/
/*     }*/
/*   });*/
/* */
/*   var rows = 0;*/
/*   $('#stats-load').on('click', function () {*/
/*     var stats_body = $('.stats-body').html();*/
/*     if ($.trim(stats_body) == '') {*/
/*       getTableData(0);*/
/*     }*/
/*   });*/
/* */
/*   function getTableData (start) {*/
/*     var content;*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/wk_upsell/stats&user_token={{ user_token }}&start_limit=' + start,*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('#wkfoot').addClass('fa-spinner');*/
/*       },*/
/*       success: function(json) {*/
/*         if (json) {*/
/*           for (var i = 0; i < json['total']; i++) {*/
/*             rows++;*/
/*             content = '<tr count="' + rows + '">';*/
/*             content += '<td class="text-right">' + json["table_data"][i]["vendor_id"] + '</td>';*/
/*             content += '<td>' + json["table_data"][i]["vendor_name"] + '</td>';*/
/*             content += '<td class="text-right">' + json["table_data"][i]["store_id"] + '</td>';*/
/*             content += '<td>' + json["table_data"][i]["parents"] + '</td>';*/
/*             content += '<td>' + json["table_data"][i]["childs"] + '</td>';*/
/*             content += '<td>' + json["table_data"][i]["date_added"] + '</td>';*/
/*             content += '<td>' + json["table_data"][i]["date_start"] + '</td>';*/
/*             content += '<td>' + json["table_data"][i]["date_end"] + '</td>';*/
/*             content += '<td>Upsell</td>';*/
/*             content += '<td><a onclick="return confirm(\'{{ text_confirm_delete }}\');" href="' + json["table_data"][i]["delete"] + '" class="btn btn-danger"><i class="fa fa-times"></i></td>';*/
/*             content += '<td>' + json["table_data"][i]["countdown"] + '</td>';*/
/*             content += '<td class="text-right">' + json["table_data"][i]["units"] + '</td>';*/
/*             content += '</tr>';*/
/*             $('.stats-body').append(content);*/
/*           };*/
/*           showing = parseInt(start) + parseInt(json['total']);*/
/*           content = 'Showing ' + showing + ' of ' + json['all'] + ' results';*/
/*           $('.stats-result').text(content);*/
/*           if (showing == json['all']) {*/
/*             all = true;*/
/*           };*/
/*         }*/
/*         $('#wkfoot').removeClass('fa-spinner');*/
/*       }*/
/*     });*/
/*   }*/
/* */
/*   var number, showing, all = false, prev = 0;*/
/*   $(window).on('scroll', function () {*/
/* */
/*     if ($('#tab-stats').hasClass('active')) {*/
/*       var diff = $(document).height() - $(window).height();*/
/*       var foot = diff - $(window).scrollTop();*/
/* */
/*       if (foot == 0) {*/
/*           number = $('.stats-body tr:last-child').attr('count');*/
/* */
/*           if (number && (number != prev) && !all) {*/
/*             getTableData(number);*/
/*             prev = number;*/
/*           }*/
/*       };*/
/*     }*/
/*   })*/
/* </script>*/
/* {{ footer }}*/
/* */
