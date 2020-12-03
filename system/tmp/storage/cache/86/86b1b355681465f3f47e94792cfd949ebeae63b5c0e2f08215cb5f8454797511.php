<?php

/* extension/module/wk_crosssell.twig */
class __TwigTemplate_8825b03a686c87731305505e617a26815bb39be80956f8f0ba147e1d3c525641 extends Twig_Template
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
            // line 46
            echo (isset($context["action_control"]) ? $context["action_control"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-cpanel\" class=\"form-horizontal\">
              <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-cpanel\" data-toggle=\"tooltip\" title=\"";
            // line 48
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
              </div>
              <br>
              <fieldset>
                <legend>";
            // line 52
            echo (isset($context["text_crosssell"]) ? $context["text_crosssell"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-crosssell-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 54
            echo (isset($context["help_crosssell_status"]) ? $context["help_crosssell_status"] : null);
            echo "\">";
            echo (isset($context["entry_crosssell_status"]) ? $context["entry_crosssell_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"module_wk_crosssell_crosssell_status\" id=\"input-crosssell-status\" class=\"form-control\">
                      ";
            // line 57
            if ((isset($context["wk_crosssell_crosssell_status"]) ? $context["wk_crosssell_crosssell_status"] : null)) {
                // line 58
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 59
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 61
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 62
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 64
            echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-crosssell-applicable\"><span data-toggle=\"tooltip\" title=\"";
            // line 68
            echo (isset($context["help_crosssell_applicable"]) ? $context["help_crosssell_applicable"] : null);
            echo "\">";
            echo (isset($context["entry_crosssell_applicable"]) ? $context["entry_crosssell_applicable"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_crosssell_crosssell_applicable_status\" id=\"incrosssell-applicable-status\" class=\"form-control\">
                      ";
            // line 71
            if ((isset($context["wk_crosssell_crosssell_applicable_status"]) ? $context["wk_crosssell_crosssell_applicable_status"] : null)) {
                // line 72
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 73
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            } else {
                // line 75
                echo "                      <option value=\"1\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 76
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            }
            // line 78
            echo "                    </select>
                  </div>
                  <div class=\"col-sm-10 col-sm-offset-2\">
                    <input type=\"text\" name=\"wk_crosssell_crosssell_applicable\" value=\"\" placeholder=\"";
            // line 81
            echo (isset($context["entry_crosssell_applicable"]) ? $context["entry_crosssell_applicable"] : null);
            echo "\" id=\"input-crosssell-applicable\" class=\"form-control\" />
                    <div id=\"vendor-crosssell-applicable\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 83
            $context["class"] = "odd";
            // line 84
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vendor_crosssell_applicables"]) ? $context["vendor_crosssell_applicables"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor_crosssell_applicable"]) {
                // line 85
                echo "                      ";
                $context["class"] = ((((isset($context["class"]) ? $context["class"] : null) == "even")) ? ("odd") : ("even"));
                // line 86
                echo "                      <div id=\"vendor-crosssell-applicable";
                echo $this->getAttribute($context["vendor_crosssell_applicable"], "vendor_id", array(), "array");
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["vendor_crosssell_applicable"], "name", array(), "array");
                echo "
                        <input type=\"hidden\" name=\"wk_crosssell_vendor_crosssell_applicable[]\" value=\"";
                // line 87
                echo $this->getAttribute($context["vendor_crosssell_applicable"], "vendor_id", array(), "array");
                echo "\" />
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_crosssell_applicable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
            // line 95
            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 97
            echo (isset($context["help_tax_status"]) ? $context["help_tax_status"] : null);
            echo "\">";
            echo (isset($context["entry_tax_status"]) ? $context["entry_tax_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_crosssell_tax_status\" id=\"input-tax-status\" class=\"form-control\">
                      ";
            // line 100
            if ((isset($context["wk_crosssell_tax_status"]) ? $context["wk_crosssell_tax_status"] : null)) {
                // line 101
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 102
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 104
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 105
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 107
            echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
            // line 112
            echo (isset($context["text_countdown"]) ? $context["text_countdown"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdown-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 114
            echo (isset($context["help_countdown_status"]) ? $context["help_countdown_status"] : null);
            echo "\">";
            echo (isset($context["entry_countdown_status"]) ? $context["entry_countdown_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_crosssell_countdown_status\" id=\"input-countdown-status\" class=\"form-control\">
                      ";
            // line 117
            if ((isset($context["wk_crosssell_countdown_status"]) ? $context["wk_crosssell_countdown_status"] : null)) {
                // line 118
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 119
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 121
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 122
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 124
            echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdown-applicable\"><span data-toggle=\"tooltip\" title=\"";
            // line 128
            echo (isset($context["help_countdown_applicable"]) ? $context["help_countdown_applicable"] : null);
            echo "\">";
            echo (isset($context["entry_countdown_applicable"]) ? $context["entry_countdown_applicable"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_crosssell_countdown_applicable_status\" id=\"input-countdown-applicable-status\" class=\"form-control\">
                      ";
            // line 131
            if ((isset($context["wk_crosssell_countdown_applicable_status"]) ? $context["wk_crosssell_countdown_applicable_status"] : null)) {
                // line 132
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 133
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            } else {
                // line 135
                echo "                      <option value=\"1\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 136
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            }
            // line 138
            echo "                    </select>
                  </div>
                  <div class=\"col-sm-10 col-sm-offset-2\">
                    <input type=\"text\" name=\"wk_crosssell_countdown_applicable\" value=\"\" placeholder=\"";
            // line 141
            echo (isset($context["entry_countdown_applicable"]) ? $context["entry_countdown_applicable"] : null);
            echo "\" id=\"input-countdown-applicable\" class=\"form-control\" />
                    <div id=\"vendor-countdown-applicable\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 143
            $context["class"] = "odd";
            // line 144
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vendor_countdown_applicables"]) ? $context["vendor_countdown_applicables"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor_countdown_applicable"]) {
                // line 145
                echo "                      ";
                $context["class"] = ((((isset($context["class"]) ? $context["class"] : null) == "even")) ? ("odd") : ("even"));
                // line 146
                echo "                      <div id=\"vendor-countdown-applicable";
                echo $this->getAttribute($context["vendor_countdown_applicable"], "vendor_id", array(), "array");
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["vendor_countdown_applicable"], "name", array(), "array");
                echo "
                        <input type=\"hidden\" name=\"wk_crosssell_vendor_countdown_applicable[]\" value=\"";
                // line 147
                echo $this->getAttribute($context["vendor_countdown_applicable"], "vendor_id", array(), "array");
                echo "\" />
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_countdown_applicable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group \">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdown-syntax\"><span data-toggle=\"tooltip\" title=\"";
            // line 154
            echo (isset($context["help_countdown_syntax"]) ? $context["help_countdown_syntax"] : null);
            echo "\">";
            echo (isset($context["entry_countdown_syntax"]) ? $context["entry_countdown_syntax"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"tab-pane\" id=\"tab-countdown\">
                      <ul class=\"nav nav-tabs\" id=\"countdown\">
                        ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 159
                echo "                        <li><a href=\"#tab-countdown-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                      </ul>
                      <div class=\"tab-content\">
                        ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 164
                echo "                        <div class=\"tab-pane\" id=\"tab-countdown-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                          <div class=\"form-group\">
                            <textarea name=\"wk_crosssell_countdown_syntax[";
                // line 166
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_countdown_syntax"]) ? $context["entry_countdown_syntax"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_crosssell_countdown_syntax"]) ? $context["wk_crosssell_countdown_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_crosssell_countdown_syntax"]) ? $context["wk_crosssell_countdown_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"form-group \">
                  <label class=\"col-sm-2 control-label\" for=\"input-countdowntime-syntax\"><span data-toggle=\"tooltip\" title=\"";
            // line 175
            echo (isset($context["help_countdowntime_syntax"]) ? $context["help_countdowntime_syntax"] : null);
            echo "\">";
            echo (isset($context["entry_countdowntime_syntax"]) ? $context["entry_countdowntime_syntax"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"tab-pane\" id=\"tab-countdowntime\">
                      <ul class=\"nav nav-tabs\" id=\"countdowntime\">
                        ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 180
                echo "                        <li><a href=\"#tab-countdowntime-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                      </ul>
                      <div class=\"tab-content\">
                        ";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 185
                echo "                        <div class=\"tab-pane\" id=\"tab-countdowntime-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                          <div class=\"form-group\">
                            <textarea name=\"wk_crosssell_countdowntime_syntax[";
                // line 187
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_countdowntime_syntax"]) ? $context["entry_countdowntime_syntax"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_crosssell_countdowntime_syntax"]) ? $context["wk_crosssell_countdowntime_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_crosssell_countdowntime_syntax"]) ? $context["wk_crosssell_countdowntime_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
            // line 197
            echo (isset($context["text_units"]) ? $context["text_units"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-units-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 199
            echo (isset($context["help_units_status"]) ? $context["help_units_status"] : null);
            echo "\">";
            echo (isset($context["entry_units_status"]) ? $context["entry_units_status"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_crosssell_units_status\" id=\"input-units-status\" class=\"form-control\">
                      ";
            // line 202
            if ((isset($context["wk_crosssell_units_status"]) ? $context["wk_crosssell_units_status"] : null)) {
                // line 203
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 204
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            } else {
                // line 206
                echo "                      <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 207
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                      ";
            }
            // line 209
            echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-units-applicable\"><span data-toggle=\"tooltip\" title=\"";
            // line 213
            echo (isset($context["help_units_applicable"]) ? $context["help_units_applicable"] : null);
            echo "\">";
            echo (isset($context["entry_units_applicable"]) ? $context["entry_units_applicable"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"wk_crosssell_units_applicable_status\" id=\"inunits-applicable-status\" class=\"form-control\">
                      ";
            // line 216
            if ((isset($context["wk_crosssell_units_applicable_status"]) ? $context["wk_crosssell_units_applicable_status"] : null)) {
                // line 217
                echo "                      <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\">";
                // line 218
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            } else {
                // line 220
                echo "                      <option value=\"1\">";
                echo (isset($context["text_except"]) ? $context["text_except"] : null);
                echo "</option>
                      <option value=\"0\" selected=\"selected\">";
                // line 221
                echo (isset($context["text_noone"]) ? $context["text_noone"] : null);
                echo "</option>
                      ";
            }
            // line 223
            echo "                    </select>
                  </div>
                  <div class=\"col-sm-10 col-sm-offset-2\">
                    <input type=\"text\" name=\"wk_crosssell_units_applicable\" value=\"\" placeholder=\"";
            // line 226
            echo (isset($context["entry_units_applicable"]) ? $context["entry_units_applicable"] : null);
            echo "\" id=\"input-units-applicable\" class=\"form-control\" />
                    <div id=\"vendor-units-applicable\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 228
            $context["class"] = "odd";
            // line 229
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vendor_units_applicables"]) ? $context["vendor_units_applicables"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor_units_applicable"]) {
                // line 230
                echo "                      ";
                $context["class"] = ((((isset($context["class"]) ? $context["class"] : null) == "even")) ? ("odd") : ("even"));
                // line 231
                echo "                      <div id=\"vendor-units-applicable";
                echo $this->getAttribute($context["vendor_units_applicable"], "vendor_id", array(), "array");
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["vendor_units_applicable"], "name", array(), "array");
                echo "
                        <input type=\"hidden\" name=\"wk_crosssell_vendor_units_applicable[]\" value=\"";
                // line 232
                echo $this->getAttribute($context["vendor_units_applicable"], "vendor_id", array(), "array");
                echo "\" />
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor_units_applicable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group \">
                  <label class=\"col-sm-2 control-label\" for=\"input-units-syntax\"><span data-toggle=\"tooltip\" title=\"";
            // line 239
            echo (isset($context["help_units_syntax"]) ? $context["help_units_syntax"] : null);
            echo "\">";
            echo (isset($context["entry_units_syntax"]) ? $context["entry_units_syntax"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"tab-pane\" id=\"tab-units\">
                      <ul class=\"nav nav-tabs\" id=\"units\">
                        ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 244
                echo "                        <li><a href=\"#tab-units-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                      </ul>
                      <div class=\"tab-content\">
                        ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 249
                echo "                        <div class=\"tab-pane\" id=\"tab-units-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                          <div class=\"form-group\">
                            <textarea name=\"wk_crosssell_units_syntax[";
                // line 251
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_units_syntax"]) ? $context["entry_units_syntax"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_crosssell_units_syntax"]) ? $context["wk_crosssell_units_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_crosssell_units_syntax"]) ? $context["wk_crosssell_units_syntax"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                          </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-setting-widget\">
            <form action=\"";
            // line 263
            echo (isset($context["action_widgets"]) ? $context["action_widgets"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-widgets\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-title-widget\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 265
            echo (isset($context["help_title"]) ? $context["help_title"] : null);
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 268
                echo "                    <div class=\"input-group\" style=\"margin-bottom:2px;\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</span>
                      <input type=\"text\" name=\"wk_cwidget_title[";
                // line 269
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                echo "\" class=\"form-control\" value=\"";
                echo (($this->getAttribute((isset($context["wk_cwidget_title"]) ? $context["wk_cwidget_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_cwidget_title"]) ? $context["wk_cwidget_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "\" />
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-widget-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 275
            echo (isset($context["help_widget_status"]) ? $context["help_widget_status"] : null);
            echo "\">";
            echo (isset($context["entry_widget_status"]) ? $context["entry_widget_status"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_cwidget_status\" id=\"input-widget-status\" class=\"form-control\">
                    ";
            // line 278
            if ((isset($context["wk_cwidget_status"]) ? $context["wk_cwidget_status"] : null)) {
                // line 279
                echo "                    <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\">";
                // line 280
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            } else {
                // line 282
                echo "                    <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\" selected=\"selected\">";
                // line 283
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            }
            // line 285
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-crossselling-widget\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 289
            echo (isset($context["help_crossselling_widget"]) ? $context["help_crossselling_widget"] : null);
            echo "\">";
            echo (isset($context["entry_crossselling_widget"]) ? $context["entry_crossselling_widget"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"number\" min=\"0\" name=\"wk_cwidget_crossselling_widget\" value=\"";
            // line 291
            echo (isset($context["wk_cwidget_crossselling_widget"]) ? $context["wk_cwidget_crossselling_widget"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_crossselling_widget"]) ? $context["entry_crossselling_widget"] : null);
            echo "\" id=\"input-crossselling-widget\" class=\"form-control int_number\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-display-type\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 295
            echo (isset($context["help_display_type"]) ? $context["help_display_type"] : null);
            echo "\">";
            echo (isset($context["entry_display_type"]) ? $context["entry_display_type"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_cwidget_display_type\" id=\"input-display-type\" class=\"form-control\">
                    ";
            // line 298
            if ((isset($context["wk_cwidget_display_type"]) ? $context["wk_cwidget_display_type"] : null)) {
                // line 299
                echo "                    <option value=\"0\">";
                echo (isset($context["text_random"]) ? $context["text_random"] : null);
                echo "</option>
                    <option value=\"1\" selected=\"selected\">";
                // line 300
                echo (isset($context["text_default"]) ? $context["text_default"] : null);
                echo "</option>
                    ";
            } else {
                // line 302
                echo "                    <option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_random"]) ? $context["text_random"] : null);
                echo "</option>
                    <option value=\"1\">";
                // line 303
                echo (isset($context["text_default"]) ? $context["text_default"] : null);
                echo "</option>
                    ";
            }
            // line 305
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-picture-size\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 309
            echo (isset($context["help_picture_size"]) ? $context["help_picture_size"] : null);
            echo "\">";
            echo (isset($context["entry_picture_size"]) ? $context["entry_picture_size"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 312
            echo (isset($context["text_width"]) ? $context["text_width"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_cwidget_picture_width\" value=\"";
            // line 313
            echo (isset($context["wk_cwidget_picture_width"]) ? $context["wk_cwidget_picture_width"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_width"]) ? $context["entry_picture_width"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 314
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
                <div class=\"col-sm-10 col-sm-offset-2\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 319
            echo (isset($context["text_height"]) ? $context["text_height"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_cwidget_picture_height\" value=\"";
            // line 320
            echo (isset($context["wk_cwidget_picture_height"]) ? $context["wk_cwidget_picture_height"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_height"]) ? $context["entry_picture_height"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 321
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
              </div>

              <div class=\"form-group \">
                <label class=\"col-sm-2 control-label\" for=\"input-crossselling-details\"><span data-toggle=\"tooltip\" title=\"";
            // line 327
            echo (isset($context["help_crossselling_details"]) ? $context["help_crossselling_details"] : null);
            echo "\">";
            echo (isset($context["entry_crossselling_details"]) ? $context["entry_crossselling_details"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"tab-pane\" id=\"tab-widgets\">
                    <ul class=\"nav nav-tabs\" id=\"widget-details\">
                      ";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 332
                echo "                      <li><a href=\"#tab-widgets-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</a></li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "                    </ul>
                    <div class=\"tab-content\">
                      ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 337
                echo "                      <div class=\"tab-pane\" id=\"tab-widgets-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                        <div class=\"form-group\">
                          <textarea name=\"wk_cwidget_crossselling_details[";
                // line 339
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_crossselling_details"]) ? $context["entry_crossselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_cwidget_crossselling_details"]) ? $context["wk_cwidget_crossselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_cwidget_crossselling_details"]) ? $context["wk_cwidget_crossselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div>
                        <!-- <div class=\"form-group\">
                          <textarea name=\"wk_cwidget_crossselling_details2[";
                // line 342
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_crossselling_details"]) ? $context["entry_crossselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_cwidget_crossselling_details2"]) ? $context["wk_cwidget_crossselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_cwidget_crossselling_details2"]) ? $context["wk_cwidget_crossselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div> -->
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            echo "                    </div>
                  </div>
                </div>
              </div>
              <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-widgets\" data-toggle=\"tooltip\" title=\"";
            // line 351
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
              </div>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-setting-listing\">
            <form action=\"";
            // line 356
            echo (isset($context["action_listings"]) ? $context["action_listings"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-listings\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 358
            echo (isset($context["help_listing_url"]) ? $context["help_listing_url"] : null);
            echo "\">";
            echo (isset($context["entry_listing_url"]) ? $context["entry_listing_url"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <a href=\"";
            // line 360
            echo (isset($context["catalog_link"]) ? $context["catalog_link"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["text_listing"]) ? $context["text_listing"] : null);
            echo "</a>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-listing-status\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 364
            echo (isset($context["help_listing_status"]) ? $context["help_listing_status"] : null);
            echo "\">";
            echo (isset($context["entry_listing_status"]) ? $context["entry_listing_status"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_clisting_status\" id=\"input-listing-status\" class=\"form-control\">
                    ";
            // line 367
            if ((isset($context["wk_clisting_status"]) ? $context["wk_clisting_status"] : null)) {
                // line 368
                echo "                    <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\">";
                // line 369
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            } else {
                // line 371
                echo "                    <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
                    <option value=\"0\" selected=\"selected\">";
                // line 372
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
                    ";
            }
            // line 374
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-title-menulink\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 378
            echo (isset($context["help_title_menulink"]) ? $context["help_title_menulink"] : null);
            echo "\">";
            echo (isset($context["entry_title_menulink"]) ? $context["entry_title_menulink"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  ";
            // line 380
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 381
                echo "                    <div class=\"input-group\" style=\"margin-bottom:2px;\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</span>
                      <input type=\"text\" name=\"wk_clisting_menulink_title[";
                // line 382
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_title_menulink"]) ? $context["entry_title_menulink"] : null);
                echo "\" class=\"form-control\" value=\"";
                echo (($this->getAttribute((isset($context["wk_clisting_menulink_title"]) ? $context["wk_clisting_menulink_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_clisting_menulink_title"]) ? $context["wk_clisting_menulink_title"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "\" />
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-menu\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 388
            echo (isset($context["help_sort_menu"]) ? $context["help_sort_menu"] : null);
            echo "\">";
            echo (isset($context["entry_sort_menu"]) ? $context["entry_sort_menu"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"number\"  min=\"0\" name=\"wk_clisting_sort_menu\" value=\"";
            // line 390
            echo (isset($context["wk_clisting_sort_menu"]) ? $context["wk_clisting_sort_menu"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_menu"]) ? $context["entry_sort_menu"] : null);
            echo "\" id=\"input-sort-menu\" class=\"form-control int_number\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-bundles-page\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 394
            echo (isset($context["help_bundles_page"]) ? $context["help_bundles_page"] : null);
            echo "\">";
            echo (isset($context["entry_bundles_page"]) ? $context["entry_bundles_page"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"number\"  min=\"0\" name=\"wk_clisting_bundles_page\" value=\"";
            // line 396
            echo (isset($context["wk_clisting_bundles_page"]) ? $context["wk_clisting_bundles_page"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_bundles_page"]) ? $context["entry_bundles_page"] : null);
            echo "\" id=\"input-bundles-page\" class=\"form-control int_number\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-picture-size\"><span data-toggle=\"tooltip\" data-original-title=\"";
            // line 400
            echo (isset($context["help_picture_size"]) ? $context["help_picture_size"] : null);
            echo "\">";
            echo (isset($context["entry_picture_size"]) ? $context["entry_picture_size"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 403
            echo (isset($context["text_width"]) ? $context["text_width"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_clisting_picture_width\" value=\"";
            // line 404
            echo (isset($context["wk_clisting_picture_width"]) ? $context["wk_clisting_picture_width"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_width"]) ? $context["entry_picture_width"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 405
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
                <div class=\"col-sm-10 col-sm-offset-2\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">";
            // line 410
            echo (isset($context["text_height"]) ? $context["text_height"] : null);
            echo "</span>
                    <input type=\"number\" min=\"0\" name=\"wk_clisting_picture_height\" value=\"";
            // line 411
            echo (isset($context["wk_clisting_picture_height"]) ? $context["wk_clisting_picture_height"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_picture_height"]) ? $context["entry_picture_height"] : null);
            echo "\" id=\"input-picture-size\" class=\"form-control int_number\" />
                    <span class=\"input-group-addon\">";
            // line 412
            echo (isset($context["text_px"]) ? $context["text_px"] : null);
            echo "</span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
            // line 417
            echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"wk_clisting_theme\" class=\"form-control\" id=\"input-theme\">
                    <option ";
            // line 420
            if (((isset($context["wk_clisting_theme"]) ? $context["wk_clisting_theme"] : null) == "ps_gray")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_gray\">";
            echo (isset($context["text_gray"]) ? $context["text_gray"] : null);
            echo "</option>
                    <option ";
            // line 421
            if (((isset($context["wk_clisting_theme"]) ? $context["wk_clisting_theme"] : null) == "ps_blue")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_blue\">";
            echo (isset($context["text_blue"]) ? $context["text_blue"] : null);
            echo "</option>
                    <option ";
            // line 422
            if (((isset($context["wk_clisting_theme"]) ? $context["wk_clisting_theme"] : null) == "ps_green")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_green\">";
            echo (isset($context["text_green"]) ? $context["text_green"] : null);
            echo "</option>
                    <option ";
            // line 423
            if (((isset($context["wk_clisting_theme"]) ? $context["wk_clisting_theme"] : null) == "ps_orange")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_orange\">";
            echo (isset($context["text_orange"]) ? $context["text_orange"] : null);
            echo "</option>
                    <option ";
            // line 424
            if (((isset($context["wk_clisting_theme"]) ? $context["wk_clisting_theme"] : null) == "ps_red")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_red\">";
            echo (isset($context["text_red"]) ? $context["text_red"] : null);
            echo "</option>
                    <option ";
            // line 425
            if (((isset($context["wk_clisting_theme"]) ? $context["wk_clisting_theme"] : null) == "ps_purple")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_purple\">";
            echo (isset($context["text_purple"]) ? $context["text_purple"] : null);
            echo "</option>
                    <option ";
            // line 426
            if (((isset($context["wk_clisting_theme"]) ? $context["wk_clisting_theme"] : null) == "ps_yellow")) {
                echo " ";
                echo " selected";
            }
            echo " value=\"ps_yellow\">";
            echo (isset($context["text_yellow"]) ? $context["text_yellow"] : null);
            echo "</option>
                  </select>
                </div>
              </div>

              <div class=\"form-group \">
                <label class=\"col-sm-2 control-label\" for=\"input-crossselling-details\"><span data-toggle=\"tooltip\" title=\"";
            // line 432
            echo (isset($context["help_crossselling_details"]) ? $context["help_crossselling_details"] : null);
            echo "\">";
            echo (isset($context["entry_crossselling_details"]) ? $context["entry_crossselling_details"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"tab-pane\" id=\"tab-listings\">
                    <ul class=\"nav nav-tabs\" id=\"listing-details\">
                      ";
            // line 436
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 437
                echo "                      <li><a href=\"#tab-listings-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</a></li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 439
            echo "                    </ul>
                    <div class=\"tab-content\">
                      ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 442
                echo "                      <div class=\"tab-pane\" id=\"tab-listings-language";
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "\">
                        <div class=\"form-group\">
                          <textarea name=\"wk_clisting_crossselling_details[";
                // line 444
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_crossselling_details"]) ? $context["entry_crossselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_clisting_crossselling_details"]) ? $context["wk_clisting_crossselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_clisting_crossselling_details"]) ? $context["wk_clisting_crossselling_details"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div>
                        <!-- <div class=\"form-group\">
                          <textarea name=\"wk_clisting_crossselling_details2[";
                // line 447
                echo $this->getAttribute($context["language"], "language_id", array(), "array");
                echo "]\" placeholder=\"";
                echo (isset($context["entry_crossselling_details"]) ? $context["entry_crossselling_details"] : null);
                echo "\" class=\"form-control summernote\" rows=\"3\">";
                echo (($this->getAttribute((isset($context["wk_clisting_crossselling_details2"]) ? $context["wk_clisting_crossselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array", true, true)) ? ($this->getAttribute((isset($context["wk_clisting_crossselling_details2"]) ? $context["wk_clisting_crossselling_details2"] : null), $this->getAttribute($context["language"], "language_id", array(), "array"), array(), "array")) : (""));
                echo "</textarea>
                        </div> -->
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 451
            echo "                    </div>
                  </div>
                </div>
              </div>
              <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-listings\" data-toggle=\"tooltip\" title=\"";
            // line 456
            echo (isset($context["button_save"]) ? $context["button_save"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
              </div>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-stats\">
            <h3>";
            // line 461
            echo (isset($context["tab_stats"]) ? $context["tab_stats"] : null);
            echo "</h3>
            <div class=\"container-fluid\">
              <div class=\"row well\">
                <form action=\"";
            // line 464
            echo (isset($context["export"]) ? $context["export"] : null);
            echo "\" id=\"form-export\" method=\"post\">

                  <div class=\"form-group col-sm-5\">
                    <label class=\"col-sm-12 control-label\" for=\"input-datef\"><span data-toggle=\"tooltip\" title=\"";
            // line 467
            echo (isset($context["help_valid_from"]) ? $context["help_valid_from"] : null);
            echo "\">";
            echo (isset($context["entry_date_from"]) ? $context["entry_date_from"] : null);
            echo "</span></label>
                    <div class=\"col-sm-12\">
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"date_from\" value=\"\" data-date-format=\"YYYY-MM-DD\" placeholder=\"";
            // line 470
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
            // line 479
            echo (isset($context["help_valid_till"]) ? $context["help_valid_till"] : null);
            echo "\">";
            echo (isset($context["entry_date_till"]) ? $context["entry_date_till"] : null);
            echo "</span></label>
                    <div class=\"col-sm-12\">
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"date_till\" value=\"\" data-date-format=\"YYYY-MM-DD\" placeholder=\"";
            // line 482
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
            // line 491
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
            // line 501
            echo (isset($context["column_vendor_id"]) ? $context["column_vendor_id"] : null);
            echo "</td>
                    <td>";
            // line 502
            echo (isset($context["column_vendor"]) ? $context["column_vendor"] : null);
            echo "</td>
                    <td>";
            // line 503
            echo (isset($context["column_store_id"]) ? $context["column_store_id"] : null);
            echo "</td>
                    <td>";
            // line 504
            echo (isset($context["column_parent_product"]) ? $context["column_parent_product"] : null);
            echo "</td>
                    <td>";
            // line 505
            echo (isset($context["column_child_product"]) ? $context["column_child_product"] : null);
            echo "</td>
                    <td>";
            // line 506
            echo (isset($context["column_added_on"]) ? $context["column_added_on"] : null);
            echo "</td>
                    <td>";
            // line 507
            echo (isset($context["column_start_date"]) ? $context["column_start_date"] : null);
            echo "</td>
                    <td>";
            // line 508
            echo (isset($context["column_end_date"]) ? $context["column_end_date"] : null);
            echo "</td>
                    <td>";
            // line 509
            echo (isset($context["column_condition"]) ? $context["column_condition"] : null);
            echo "</td>
                    <td>";
            // line 510
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</td>
                    <td>";
            // line 511
            echo (isset($context["column_countdown"]) ? $context["column_countdown"] : null);
            echo "</td>
                    <td>";
            // line 512
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
            // line 524
            echo (isset($context["tab_manage"]) ? $context["tab_manage"] : null);
            echo "</legend>
              <form action=\"";
            // line 525
            echo (isset($context["action_deploy"]) ? $context["action_deploy"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-deploy\" class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 527
            echo (isset($context["help_deployment"]) ? $context["help_deployment"] : null);
            echo "\">";
            echo (isset($context["entry_deployment"]) ? $context["entry_deployment"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_cdeploy\" class=\"wk_cdeploy\" value=\"1\" ";
            // line 530
            if (((isset($context["wk_cdeploy"]) ? $context["wk_cdeploy"] : null) == "1")) {
                echo " ";
                echo "checked";
            }
            echo "/>
                    ";
            // line 531
            echo (isset($context["text_offer_product"]) ? $context["text_offer_product"] : null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_cdeploy\" class=\"wk_cdeploy\" value=\"2\" ";
            // line 534
            if (((isset($context["wk_cdeploy"]) ? $context["wk_cdeploy"] : null) == "2")) {
                echo " ";
                echo "checked";
            }
            echo " />
                    ";
            // line 535
            echo (isset($context["text_offer_category"]) ? $context["text_offer_category"] : null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_cdeploy\" class=\"wk_cdeploy\" value=\"3\" ";
            // line 538
            if (((isset($context["wk_cdeploy"]) ? $context["wk_cdeploy"] : null) == "3")) {
                echo " ";
                echo "checked";
            }
            echo " />
                    ";
            // line 539
            echo (isset($context["text_offer_neither"]) ? $context["text_offer_neither"] : null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"wk_cdeploy\" id=\"wk_cdeploy4\" value=\"4\" ";
            // line 542
            if (((isset($context["wk_cdeploy"]) ? $context["wk_cdeploy"] : null) == "4")) {
                echo " ";
                echo "checked";
            }
            echo " />
                    ";
            // line 543
            echo (isset($context["text_offer_list"]) ? $context["text_offer_list"] : null);
            echo "
                    <div id=\"wk_cdeploy\" style=\"display:none;\">
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_cdeploy_origin\" value=\"1\" ";
            // line 546
            if (((isset($context["wk_cdeploy_origin"]) ? $context["wk_cdeploy_origin"] : null) == "1")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 547
            echo (isset($context["text_origin_product"]) ? $context["text_origin_product"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"origin-product\" data-toggle=\"modal\" data-target=\"#oriproModal\" onclick=\"return false;\">";
            // line 548
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
            // line 560
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_data"]) ? $context["product_data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 561
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 562
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\" name=\"wk_cdeploy_origin_product[]\" id=\"oproduct";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\"";
                if (twig_in_filter($this->getAttribute($context["product"], "product_id", array(), "array"), (isset($context["wk_cdeploy_origin_product"]) ? $context["wk_cdeploy_origin_product"] : null))) {
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
            // line 565
            echo "                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_cdeploy_origin\" value=\"2\" ";
            // line 574
            if (((isset($context["wk_cdeploy_origin"]) ? $context["wk_cdeploy_origin"] : null) == "2")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 575
            echo (isset($context["text_origin_category"]) ? $context["text_origin_category"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"origin-category\" data-toggle=\"modal\" data-target=\"#oricatModal\" onclick=\"return false;\">";
            // line 576
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
            // line 587
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 588
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 589
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\" name=\"wk_cdeploy_origin_category[]\" id=\"ocat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\"";
                if (twig_in_filter($this->getAttribute($context["cat"], "category_id", array(), "array"), (isset($context["wk_cdeploy_origin_category"]) ? $context["wk_cdeploy_origin_category"] : null))) {
                    echo "checked";
                    echo " ";
                }
                echo "><label for=\"ocat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["cat"], "name", array(), "array");
                echo "</label> <button class=\"btn btn-default btn-xs wk_ori_cat\" onclick=\"return false;\"><i class=\"fa fa-plus\"></i></button>
                                      <div class=\"form-group\">
                                      ";
                // line 591
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category_data"]) ? $context["category_data"] : null), $this->getAttribute($context["cat"], "category_id", array(), "array"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 592
                    echo "                                      <div class=\"\">
                                        <input type=\"checkbox\" value=\"";
                    // line 593
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\" name=\"wk_cdeploy_origin_subcategory[]\" id=\"osub";
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\"";
                    if (twig_in_filter($this->getAttribute($context["sub"], "category_id", array(), "array"), (isset($context["wk_cdeploy_origin_subcategory"]) ? $context["wk_cdeploy_origin_subcategory"] : null))) {
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
                // line 596
                echo "                                      </div>
                                  </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 599
            echo "                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_cdeploy_destiny\" value=\"1\" ";
            // line 608
            if (((isset($context["wk_cdeploy_destiny"]) ? $context["wk_cdeploy_destiny"] : null) == "1")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 609
            echo (isset($context["text_destiny_product"]) ? $context["text_destiny_product"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"destiny-product\" data-toggle=\"modal\" data-target=\"#destproModal\" onclick=\"return false;\">";
            // line 610
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
            // line 621
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_data"]) ? $context["product_data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 622
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 623
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\" name=\"wk_cdeploy_destiny_product[]\" id=\"dproduct";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\"";
                if (twig_in_filter($this->getAttribute($context["product"], "product_id", array(), "array"), (isset($context["wk_cdeploy_destiny_product"]) ? $context["wk_cdeploy_destiny_product"] : null))) {
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
            // line 626
            echo "                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </label>
                      <label class=\"radio\">
                        <input type=\"radio\" name=\"wk_cdeploy_destiny\" value=\"2\" ";
            // line 635
            if (((isset($context["wk_cdeploy_destiny"]) ? $context["wk_cdeploy_destiny"] : null) == "2")) {
                echo " ";
                echo "checked";
            }
            echo " />
                        ";
            // line 636
            echo (isset($context["text_destiny_category"]) ? $context["text_destiny_category"] : null);
            echo "
                        <button class=\"btn btn-success\" data-keyboard=\"true\" class=\"destiny-category\" data-toggle=\"modal\" data-target=\"#destcatModal\" onclick=\"return false;\">";
            // line 637
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
            // line 648
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 649
                echo "                                  <div class=\"\">
                                    <input type=\"checkbox\" value=\"";
                // line 650
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\" name=\"wk_cdeploy_destiny_category[]\" id=\"dcat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["cat"], "category_id", array(), "array"), (isset($context["wk_cdeploy_destiny_category"]) ? $context["wk_cdeploy_destiny_category"] : null))) {
                    echo "checked";
                    echo " ";
                }
                echo "><label for=\"dcat";
                echo $this->getAttribute($context["cat"], "category_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["cat"], "name", array(), "array");
                echo "</label> <button class=\"btn btn-default btn-xs wk_ori_cat\" onclick=\"return false;\"><i class=\"fa fa-plus\"></i></button>
                                      <div class=\"form-group\">
                                      ";
                // line 652
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category_data"]) ? $context["category_data"] : null), $this->getAttribute($context["cat"], "category_id", array(), "array"), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 653
                    echo "                                      <div class=\"\">
                                        <input type=\"checkbox\" value=\"";
                    // line 654
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\" name=\"wk_cdeploy_destiny_subcategory[]\" id=\"dsub";
                    echo $this->getAttribute($context["sub"], "category_id", array(), "array");
                    echo "\"";
                    if (twig_in_filter($this->getAttribute($context["sub"], "category_id", array(), "array"), (isset($context["wk_cdeploy_destiny_subcategory"]) ? $context["wk_cdeploy_destiny_subcategory"] : null))) {
                        echo " ";
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
                // line 657
                echo "                                      </div>
                                  </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 660
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
            // line 673
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
            // line 681
            echo "      <div class=\"alert\">
          ";
            // line 682
            echo (isset($context["error_marketplace_disable"]) ? $context["error_marketplace_disable"] : null);
            echo "
      </div>
     ";
        }
        // line 685
        echo "    </div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
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

\$('input[name=\\'wk_crosssell_crosssell_applicable\\']').click(function(){
  \$(this).autocomplete(\"search\");
});
// crosssell_applicable
\$('input[name=\\'wk_crosssell_crosssell_applicable\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wk_crosssell/vendor&user_token=";
        // line 721
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
    \$('input[name=\\'wk_crosssell_crosssell_applicable\\']').val('');
    \$('#vendor-crosssell-applicable' + item['value']).remove();

    \$('#vendor-crosssell-applicable').append('<div id=\"vendor-crosssell-applicable' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"wk_crosssell_vendor_crosssell_applicable[]\" value=\"' + item['value'] + '\" /></div>');

    \$('#vendor-crosssell-applicable div:odd').attr('class', 'odd');
    \$('#vendor-crosssell-applicable div:even').attr('class', 'even');

    return false;
  },
  focus: function(item) {
      return false;
   }
});

\$('#vendor-crosssell-applicable').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
  \$('#vendor-crosssell-applicable div:odd').attr('class', 'odd');
  \$('#vendor-crosssell-applicable div:even').attr('class', 'even');
});

\$('input[name=\\'wk_crosssell_countdown_applicable\\']').click(function(){
  \$(this).autocomplete(\"search\");
});
// countdown_applicable
\$('input[name=\\'wk_crosssell_countdown_applicable\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wk_crosssell/vendor&user_token=";
        // line 764
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
    \$('input[name=\\'wk_crosssell_countdown_applicable\\']').val('');
    \$('#vendor-countdown-applicable' + item['value']).remove();

    \$('#vendor-countdown-applicable').append('<div id=\"vendor-countdown-applicable' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"wk_crosssell_vendor_countdown_applicable[]\" value=\"' + item['value'] + '\" /></div>');

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

\$('input[name=\\'wk_crosssell_units_applicable\\']').click(function(){
  \$(this).autocomplete(\"search\");
});
// units_applicable
\$('input[name=\\'wk_crosssell_units_applicable\\']').autocomplete({
  minLength: 0,
  delay: 101,
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wk_crosssell/vendor&user_token=";
        // line 807
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
    \$('input[name=\\'wk_crosssell_units_applicable\\']').val('');
    \$('#vendor-units-applicable' + item['value']).remove();

    \$('#vendor-units-applicable').append('<div id=\"vendor-units-applicable' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"wk_crosssell_vendor_units_applicable[]\" value=\"' + item['value'] + '\" /></div>');

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

if (\$('#wk_cdeploy4').is(':checked')) {
  \$('#wk_cdeploy').slideDown();
}

\$('#wk_cdeploy4').on('change', function() {
  if (\$('#wk_cdeploy4').is(':checked')) {
    \$('#wk_cdeploy').slideDown();
  }
});
\$('.wk_cdeploy').on('change', function() {
  if (\$('.wk_cdeploy').is(':checked')) {
    \$('#wk_cdeploy').slideUp();
  }
});

var rows = 0;
\$('#stats-load').on('click', function () {
  var stats_body = \$('.stats-body').html();
  if (\$.trim(stats_body) == '') {
    getTableData(0);
  }
});

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
});

function getTableData (start) {
  var content;
  \$.ajax({
    url: 'index.php?route=extension/module/wk_crosssell/stats&user_token=";
        // line 891
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
          content += '<td>Cross-sell</td>';
          content += '<td><a onclick=\"return confirm(\\'";
        // line 910
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

</script>
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
";
        // line 964
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/wk_crosssell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2161 => 964,  2104 => 910,  2082 => 891,  1995 => 807,  1949 => 764,  1903 => 721,  1865 => 685,  1859 => 682,  1856 => 681,  1845 => 673,  1830 => 660,  1822 => 657,  1801 => 654,  1798 => 653,  1794 => 652,  1778 => 650,  1775 => 649,  1771 => 648,  1757 => 637,  1753 => 636,  1746 => 635,  1735 => 626,  1714 => 623,  1711 => 622,  1707 => 621,  1693 => 610,  1689 => 609,  1682 => 608,  1671 => 599,  1663 => 596,  1643 => 593,  1640 => 592,  1636 => 591,  1620 => 589,  1617 => 588,  1613 => 587,  1599 => 576,  1595 => 575,  1588 => 574,  1577 => 565,  1556 => 562,  1553 => 561,  1549 => 560,  1534 => 548,  1530 => 547,  1523 => 546,  1517 => 543,  1510 => 542,  1504 => 539,  1497 => 538,  1491 => 535,  1484 => 534,  1478 => 531,  1471 => 530,  1463 => 527,  1458 => 525,  1454 => 524,  1439 => 512,  1435 => 511,  1431 => 510,  1427 => 509,  1423 => 508,  1419 => 507,  1415 => 506,  1411 => 505,  1407 => 504,  1403 => 503,  1399 => 502,  1395 => 501,  1380 => 491,  1368 => 482,  1360 => 479,  1348 => 470,  1340 => 467,  1334 => 464,  1328 => 461,  1320 => 456,  1313 => 451,  1299 => 447,  1289 => 444,  1283 => 442,  1279 => 441,  1275 => 439,  1256 => 437,  1252 => 436,  1243 => 432,  1229 => 426,  1220 => 425,  1211 => 424,  1202 => 423,  1193 => 422,  1184 => 421,  1175 => 420,  1169 => 417,  1161 => 412,  1155 => 411,  1151 => 410,  1143 => 405,  1137 => 404,  1133 => 403,  1125 => 400,  1116 => 396,  1109 => 394,  1100 => 390,  1093 => 388,  1088 => 385,  1075 => 382,  1062 => 381,  1058 => 380,  1051 => 378,  1045 => 374,  1040 => 372,  1035 => 371,  1030 => 369,  1025 => 368,  1023 => 367,  1015 => 364,  1006 => 360,  999 => 358,  994 => 356,  986 => 351,  979 => 346,  965 => 342,  955 => 339,  949 => 337,  945 => 336,  941 => 334,  922 => 332,  918 => 331,  909 => 327,  900 => 321,  894 => 320,  890 => 319,  882 => 314,  876 => 313,  872 => 312,  864 => 309,  858 => 305,  853 => 303,  848 => 302,  843 => 300,  838 => 299,  836 => 298,  828 => 295,  819 => 291,  812 => 289,  806 => 285,  801 => 283,  796 => 282,  791 => 280,  786 => 279,  784 => 278,  776 => 275,  771 => 272,  758 => 269,  745 => 268,  741 => 267,  734 => 265,  729 => 263,  719 => 255,  705 => 251,  699 => 249,  695 => 248,  691 => 246,  672 => 244,  668 => 243,  659 => 239,  653 => 235,  644 => 232,  635 => 231,  632 => 230,  627 => 229,  625 => 228,  620 => 226,  615 => 223,  610 => 221,  605 => 220,  600 => 218,  595 => 217,  593 => 216,  585 => 213,  579 => 209,  574 => 207,  569 => 206,  564 => 204,  559 => 203,  557 => 202,  549 => 199,  544 => 197,  536 => 191,  522 => 187,  516 => 185,  512 => 184,  508 => 182,  489 => 180,  485 => 179,  476 => 175,  469 => 170,  455 => 166,  449 => 164,  445 => 163,  441 => 161,  422 => 159,  418 => 158,  409 => 154,  403 => 150,  394 => 147,  385 => 146,  382 => 145,  377 => 144,  375 => 143,  370 => 141,  365 => 138,  360 => 136,  355 => 135,  350 => 133,  345 => 132,  343 => 131,  335 => 128,  329 => 124,  324 => 122,  319 => 121,  314 => 119,  309 => 118,  307 => 117,  299 => 114,  294 => 112,  287 => 107,  282 => 105,  277 => 104,  272 => 102,  267 => 101,  265 => 100,  257 => 97,  252 => 95,  245 => 90,  236 => 87,  227 => 86,  224 => 85,  219 => 84,  217 => 83,  212 => 81,  207 => 78,  202 => 76,  197 => 75,  192 => 73,  187 => 72,  185 => 71,  177 => 68,  171 => 64,  166 => 62,  161 => 61,  156 => 59,  151 => 58,  149 => 57,  141 => 54,  136 => 52,  129 => 48,  124 => 46,  116 => 41,  110 => 38,  106 => 37,  101 => 35,  97 => 34,  93 => 32,  91 => 31,  86 => 29,  82 => 27,  74 => 23,  71 => 22,  63 => 18,  61 => 17,  55 => 13,  44 => 11,  40 => 10,  35 => 8,  28 => 6,  19 => 1,);
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
/* */
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-cpanel">*/
/*             <form action="{{ action_control }}" method="post" enctype="multipart/form-data" id="form-cpanel" class="form-horizontal">*/
/*               <div class="pull-right">*/
/*                 <button type="submit" form="form-cpanel" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*               </div>*/
/*               <br>*/
/*               <fieldset>*/
/*                 <legend>{{ text_crosssell }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-crosssell-status"><span data-toggle="tooltip" data-original-title="{{ help_crosssell_status }}">{{ entry_crosssell_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="module_wk_crosssell_crosssell_status" id="input-crosssell-status" class="form-control">*/
/*                       {% if (wk_crosssell_crosssell_status) %}*/
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
/*                   <label class="col-sm-2 control-label" for="input-crosssell-applicable"><span data-toggle="tooltip" title="{{ help_crosssell_applicable }}">{{ entry_crosssell_applicable }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="wk_crosssell_crosssell_applicable_status" id="incrosssell-applicable-status" class="form-control">*/
/*                       {% if (wk_crosssell_crosssell_applicable_status) %}*/
/*                       <option value="1" selected="selected">{{ text_except }}</option>*/
/*                       <option value="0">{{ text_noone }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_except }}</option>*/
/*                       <option value="0" selected="selected">{{ text_noone }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-sm-10 col-sm-offset-2">*/
/*                     <input type="text" name="wk_crosssell_crosssell_applicable" value="" placeholder="{{ entry_crosssell_applicable }}" id="input-crosssell-applicable" class="form-control" />*/
/*                     <div id="vendor-crosssell-applicable" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                       {% set class = 'odd' %}*/
/*                       {% for vendor_crosssell_applicable in vendor_crosssell_applicables %}*/
/*                       {% set class = class == 'even' ? 'odd' : 'even' %}*/
/*                       <div id="vendor-crosssell-applicable{{ vendor_crosssell_applicable['vendor_id'] }}" class="{{ class }}"><i class="fa fa-minus-circle"></i> {{ vendor_crosssell_applicable['name'] }}*/
/*                         <input type="hidden" name="wk_crosssell_vendor_crosssell_applicable[]" value="{{ vendor_crosssell_applicable['vendor_id'] }}" />*/
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
/*                     <select name="wk_crosssell_tax_status" id="input-tax-status" class="form-control">*/
/*                       {% if (wk_crosssell_tax_status) %}*/
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
/*                     <select name="wk_crosssell_countdown_status" id="input-countdown-status" class="form-control">*/
/*                       {% if (wk_crosssell_countdown_status) %}*/
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
/*                     <select name="wk_crosssell_countdown_applicable_status" id="input-countdown-applicable-status" class="form-control">*/
/*                       {% if (wk_crosssell_countdown_applicable_status) %}*/
/*                       <option value="1" selected="selected">{{ text_except }}</option>*/
/*                       <option value="0">{{ text_noone }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_except }}</option>*/
/*                       <option value="0" selected="selected">{{ text_noone }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-sm-10 col-sm-offset-2">*/
/*                     <input type="text" name="wk_crosssell_countdown_applicable" value="" placeholder="{{ entry_countdown_applicable }}" id="input-countdown-applicable" class="form-control" />*/
/*                     <div id="vendor-countdown-applicable" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                       {% set class = 'odd' %}*/
/*                       {% for vendor_countdown_applicable in vendor_countdown_applicables %}*/
/*                       {% set class = class == 'even' ? 'odd' : 'even' %}*/
/*                       <div id="vendor-countdown-applicable{{ vendor_countdown_applicable['vendor_id'] }}" class="{{ class }}"><i class="fa fa-minus-circle"></i> {{ vendor_countdown_applicable['name'] }}*/
/*                         <input type="hidden" name="wk_crosssell_vendor_countdown_applicable[]" value="{{ vendor_countdown_applicable['vendor_id'] }}" />*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group ">*/
/*                   <label class="col-sm-2 control-label" for="input-countdown-syntax"><span data-toggle="tooltip" title="{{ help_countdown_syntax }}">{{ entry_countdown_syntax }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="tab-pane" id="tab-countdown">*/
/*                       <ul class="nav nav-tabs" id="countdown">*/
/*                         {% for language in languages %}*/
/*                         <li><a href="#tab-countdown-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                       <div class="tab-content">*/
/*                         {% for language in languages %}*/
/*                         <div class="tab-pane" id="tab-countdown-language{{ language['language_id'] }}">*/
/*                           <div class="form-group">*/
/*                             <textarea name="wk_crosssell_countdown_syntax[{{ language['language_id'] }}]" placeholder="{{ entry_countdown_syntax }}" class="form-control summernote" rows="3">{{ wk_crosssell_countdown_syntax[language['language_id']] is defined ? wk_crosssell_countdown_syntax[language['language_id']] : '' }}</textarea>*/
/*                           </div>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group ">*/
/*                   <label class="col-sm-2 control-label" for="input-countdowntime-syntax"><span data-toggle="tooltip" title="{{ help_countdowntime_syntax }}">{{ entry_countdowntime_syntax }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="tab-pane" id="tab-countdowntime">*/
/*                       <ul class="nav nav-tabs" id="countdowntime">*/
/*                         {% for language in languages %}*/
/*                         <li><a href="#tab-countdowntime-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                       <div class="tab-content">*/
/*                         {% for language in languages %}*/
/*                         <div class="tab-pane" id="tab-countdowntime-language{{ language['language_id'] }}">*/
/*                           <div class="form-group">*/
/*                             <textarea name="wk_crosssell_countdowntime_syntax[{{ language['language_id'] }}]" placeholder="{{ entry_countdowntime_syntax }}" class="form-control summernote" rows="3">{{ wk_crosssell_countdowntime_syntax[language['language_id']] is defined ? wk_crosssell_countdowntime_syntax[language['language_id']] : '' }}</textarea>*/
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
/*                     <select name="wk_crosssell_units_status" id="input-units-status" class="form-control">*/
/*                       {% if (wk_crosssell_units_status) %}*/
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
/*                     <select name="wk_crosssell_units_applicable_status" id="inunits-applicable-status" class="form-control">*/
/*                       {% if (wk_crosssell_units_applicable_status) %}*/
/*                       <option value="1" selected="selected">{{ text_except }}</option>*/
/*                       <option value="0">{{ text_noone }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_except }}</option>*/
/*                       <option value="0" selected="selected">{{ text_noone }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                   <div class="col-sm-10 col-sm-offset-2">*/
/*                     <input type="text" name="wk_crosssell_units_applicable" value="" placeholder="{{ entry_units_applicable }}" id="input-units-applicable" class="form-control" />*/
/*                     <div id="vendor-units-applicable" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                       {% set class = 'odd' %}*/
/*                       {% for vendor_units_applicable in vendor_units_applicables %}*/
/*                       {% set class = class == 'even' ? 'odd' : 'even' %}*/
/*                       <div id="vendor-units-applicable{{ vendor_units_applicable['vendor_id'] }}" class="{{ class }}"><i class="fa fa-minus-circle"></i> {{ vendor_units_applicable['name'] }}*/
/*                         <input type="hidden" name="wk_crosssell_vendor_units_applicable[]" value="{{ vendor_units_applicable['vendor_id'] }}" />*/
/*                       </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group ">*/
/*                   <label class="col-sm-2 control-label" for="input-units-syntax"><span data-toggle="tooltip" title="{{ help_units_syntax }}">{{ entry_units_syntax }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="tab-pane" id="tab-units">*/
/*                       <ul class="nav nav-tabs" id="units">*/
/*                         {% for language in languages %}*/
/*                         <li><a href="#tab-units-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                         {% endfor %}*/
/*                       </ul>*/
/*                       <div class="tab-content">*/
/*                         {% for language in languages %}*/
/*                         <div class="tab-pane" id="tab-units-language{{ language['language_id'] }}">*/
/*                           <div class="form-group">*/
/*                             <textarea name="wk_crosssell_units_syntax[{{ language['language_id'] }}]" placeholder="{{ entry_units_syntax }}" class="form-control summernote" rows="3">{{ wk_crosssell_units_syntax[language['language_id']] is defined ? wk_crosssell_units_syntax[language['language_id']] : '' }}</textarea>*/
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
/*                     <div class="input-group" style="margin-bottom:2px;"><span class="input-group-addon"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</span>*/
/*                       <input type="text" name="wk_cwidget_title[{{ language['language_id'] }}]" placeholder="{{ entry_title }}" class="form-control" value="{{ wk_cwidget_title[language['language_id']] is defined ? wk_cwidget_title[language['language_id']] : '' }}" />*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-widget-status"><span data-toggle="tooltip" data-original-title="{{ help_widget_status }}">{{ entry_widget_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="wk_cwidget_status" id="input-widget-status" class="form-control">*/
/*                     {% if (wk_cwidget_status) %}*/
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
/*                 <label class="col-sm-2 control-label" for="input-crossselling-widget"><span data-toggle="tooltip" data-original-title="{{ help_crossselling_widget }}">{{ entry_crossselling_widget }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="number" min="0" name="wk_cwidget_crossselling_widget" value="{{ wk_cwidget_crossselling_widget }}" placeholder="{{ entry_crossselling_widget }}" id="input-crossselling-widget" class="form-control int_number" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-display-type"><span data-toggle="tooltip" data-original-title="{{ help_display_type }}">{{ entry_display_type }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="wk_cwidget_display_type" id="input-display-type" class="form-control">*/
/*                     {% if (wk_cwidget_display_type) %}*/
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
/*                     <input type="number" min="0" name="wk_cwidget_picture_width" value="{{ wk_cwidget_picture_width }}" placeholder="{{ entry_picture_width }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-sm-10 col-sm-offset-2">*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ text_height }}</span>*/
/*                     <input type="number" min="0" name="wk_cwidget_picture_height" value="{{ wk_cwidget_picture_height }}" placeholder="{{ entry_picture_height }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group ">*/
/*                 <label class="col-sm-2 control-label" for="input-crossselling-details"><span data-toggle="tooltip" title="{{ help_crossselling_details }}">{{ entry_crossselling_details }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-pane" id="tab-widgets">*/
/*                     <ul class="nav nav-tabs" id="widget-details">*/
/*                       {% for language in languages %}*/
/*                       <li><a href="#tab-widgets-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                       {% for language in languages %}*/
/*                       <div class="tab-pane" id="tab-widgets-language{{ language['language_id'] }}">*/
/*                         <div class="form-group">*/
/*                           <textarea name="wk_cwidget_crossselling_details[{{ language['language_id'] }}]" placeholder="{{ entry_crossselling_details }}" class="form-control summernote" rows="3">{{ wk_cwidget_crossselling_details[language['language_id']] is defined ? wk_cwidget_crossselling_details[language['language_id']] : '' }}</textarea>*/
/*                         </div>*/
/*                         <!-- <div class="form-group">*/
/*                           <textarea name="wk_cwidget_crossselling_details2[{{ language['language_id'] }}]" placeholder="{{ entry_crossselling_details }}" class="form-control summernote" rows="3">{{ wk_cwidget_crossselling_details2[language['language_id']] is defined ? wk_cwidget_crossselling_details2[language['language_id']] : '' }}</textarea>*/
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
/*                   <select name="wk_clisting_status" id="input-listing-status" class="form-control">*/
/*                     {% if (wk_clisting_status) %}*/
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
/*                     <div class="input-group" style="margin-bottom:2px;"><span class="input-group-addon"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</span>*/
/*                       <input type="text" name="wk_clisting_menulink_title[{{ language['language_id'] }}]" placeholder="{{ entry_title_menulink }}" class="form-control" value="{{ wk_clisting_menulink_title[language['language_id']] is defined ? wk_clisting_menulink_title[language['language_id']] : '' }}" />*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-menu"><span data-toggle="tooltip" data-original-title="{{ help_sort_menu }}">{{ entry_sort_menu }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="number"  min="0" name="wk_clisting_sort_menu" value="{{ wk_clisting_sort_menu }}" placeholder="{{ entry_sort_menu }}" id="input-sort-menu" class="form-control int_number" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-bundles-page"><span data-toggle="tooltip" data-original-title="{{ help_bundles_page }}">{{ entry_bundles_page }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="number"  min="0" name="wk_clisting_bundles_page" value="{{ wk_clisting_bundles_page }}" placeholder="{{ entry_bundles_page }}" id="input-bundles-page" class="form-control int_number" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-picture-size"><span data-toggle="tooltip" data-original-title="{{ help_picture_size }}">{{ entry_picture_size }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ text_width }}</span>*/
/*                     <input type="number" min="0" name="wk_clisting_picture_width" value="{{ wk_clisting_picture_width }}" placeholder="{{ entry_picture_width }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-sm-10 col-sm-offset-2">*/
/*                   <div class="input-group">*/
/*                     <span class="input-group-addon">{{ text_height }}</span>*/
/*                     <input type="number" min="0" name="wk_clisting_picture_height" value="{{ wk_clisting_picture_height }}" placeholder="{{ entry_picture_height }}" id="input-picture-size" class="form-control int_number" />*/
/*                     <span class="input-group-addon">{{ text_px }}</span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="wk_clisting_theme" class="form-control" id="input-theme">*/
/*                     <option {% if (wk_clisting_theme == "ps_gray") %} {{ " selected" }}{% endif %} value="ps_gray">{{ text_gray }}</option>*/
/*                     <option {% if (wk_clisting_theme == "ps_blue") %} {{ " selected" }}{% endif %} value="ps_blue">{{ text_blue }}</option>*/
/*                     <option {% if (wk_clisting_theme == "ps_green") %} {{ " selected" }}{% endif %} value="ps_green">{{ text_green }}</option>*/
/*                     <option {% if (wk_clisting_theme == "ps_orange") %} {{ " selected" }}{% endif %} value="ps_orange">{{ text_orange }}</option>*/
/*                     <option {% if (wk_clisting_theme == "ps_red") %} {{ " selected" }}{% endif %} value="ps_red">{{ text_red }}</option>*/
/*                     <option {% if (wk_clisting_theme == "ps_purple") %} {{ " selected" }}{% endif %} value="ps_purple">{{ text_purple }}</option>*/
/*                     <option {% if (wk_clisting_theme == "ps_yellow") %} {{ " selected" }}{% endif %} value="ps_yellow">{{ text_yellow }}</option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group ">*/
/*                 <label class="col-sm-2 control-label" for="input-crossselling-details"><span data-toggle="tooltip" title="{{ help_crossselling_details }}">{{ entry_crossselling_details }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-pane" id="tab-listings">*/
/*                     <ul class="nav nav-tabs" id="listing-details">*/
/*                       {% for language in languages %}*/
/*                       <li><a href="#tab-listings-language{{ language['language_id'] }}" data-toggle="tab"><img src="language/{{ language['code'] }}/{{ language['code'] }}.png" title="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                       {% for language in languages %}*/
/*                       <div class="tab-pane" id="tab-listings-language{{ language['language_id'] }}">*/
/*                         <div class="form-group">*/
/*                           <textarea name="wk_clisting_crossselling_details[{{ language['language_id'] }}]" placeholder="{{ entry_crossselling_details }}" class="form-control summernote" rows="3">{{ wk_clisting_crossselling_details[language['language_id']] is defined ? wk_clisting_crossselling_details[language['language_id']] : '' }}</textarea>*/
/*                         </div>*/
/*                         <!-- <div class="form-group">*/
/*                           <textarea name="wk_clisting_crossselling_details2[{{ language['language_id'] }}]" placeholder="{{ entry_crossselling_details }}" class="form-control summernote" rows="3">{{ wk_clisting_crossselling_details2[language['language_id']] is defined ? wk_clisting_crossselling_details2[language['language_id']] : '' }}</textarea>*/
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
/*                     <input type="radio" name="wk_cdeploy" class="wk_cdeploy" value="1" {% if (wk_cdeploy == '1') %} {{ "checked" }}{% endif %}/>*/
/*                     {{ text_offer_product }}*/
/*                   </label>*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="wk_cdeploy" class="wk_cdeploy" value="2" {% if (wk_cdeploy == '2') %} {{ "checked" }}{% endif %} />*/
/*                     {{ text_offer_category }}*/
/*                   </label>*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="wk_cdeploy" class="wk_cdeploy" value="3" {% if (wk_cdeploy == '3') %} {{ "checked" }}{% endif %} />*/
/*                     {{ text_offer_neither }}*/
/*                   </label>*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="wk_cdeploy" id="wk_cdeploy4" value="4" {% if (wk_cdeploy == '4') %} {{ "checked" }}{% endif %} />*/
/*                     {{ text_offer_list }}*/
/*                     <div id="wk_cdeploy" style="display:none;">*/
/*                       <label class="radio">*/
/*                         <input type="radio" name="wk_cdeploy_origin" value="1" {% if (wk_cdeploy_origin == '1') %} {{ "checked" }}{% endif %} />*/
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
/*                                     <input type="checkbox" value="{{ product['product_id'] }}" name="wk_cdeploy_origin_product[]" id="oproduct{{ product['product_id'] }}"{% if product['product_id'] in wk_cdeploy_origin_product %} {{ "checked" }} {% endif %}><label for="oproduct{{ product['product_id'] }}">{{ product['name'] }}</label>*/
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
/*                         <input type="radio" name="wk_cdeploy_origin" value="2" {% if (wk_cdeploy_origin == '2') %} {{ "checked" }}{% endif %} />*/
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
/*                                     <input type="checkbox" value="{{ cat['category_id'] }}" name="wk_cdeploy_origin_category[]" id="ocat{{ cat['category_id'] }}"{% if cat['category_id'] in wk_cdeploy_origin_category %}{{ "checked" }} {% endif %}><label for="ocat{{ cat['category_id'] }}">{{ cat['name'] }}</label> <button class="btn btn-default btn-xs wk_ori_cat" onclick="return false;"><i class="fa fa-plus"></i></button>*/
/*                                       <div class="form-group">*/
/*                                       {% for sub in category_data[cat['category_id']] %}*/
/*                                       <div class="">*/
/*                                         <input type="checkbox" value="{{ sub['category_id'] }}" name="wk_cdeploy_origin_subcategory[]" id="osub{{ sub['category_id'] }}"{% if sub['category_id'] in wk_cdeploy_origin_subcategory %}{{ "checked" }} {% endif %}><label for="osub{{ sub['category_id'] }}">{{ sub['name'] }}</label>*/
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
/*                         <input type="radio" name="wk_cdeploy_destiny" value="1" {% if (wk_cdeploy_destiny == '1') %} {{ "checked" }}{% endif %} />*/
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
/*                                     <input type="checkbox" value="{{ product['product_id'] }}" name="wk_cdeploy_destiny_product[]" id="dproduct{{ product['product_id'] }}"{% if product['product_id'] in wk_cdeploy_destiny_product %} {{ "checked" }} {% endif %}><label for="dproduct{{ product['product_id'] }}">{{ product['name'] }}</label>*/
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
/*                         <input type="radio" name="wk_cdeploy_destiny" value="2" {% if (wk_cdeploy_destiny == '2') %} {{ "checked" }}{% endif %} />*/
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
/*                                     <input type="checkbox" value="{{ cat['category_id'] }}" name="wk_cdeploy_destiny_category[]" id="dcat{{ cat['category_id'] }}" {% if cat['category_id'] in wk_cdeploy_destiny_category %}{{ "checked" }} {% endif %}><label for="dcat{{ cat['category_id'] }}">{{ cat['name'] }}</label> <button class="btn btn-default btn-xs wk_ori_cat" onclick="return false;"><i class="fa fa-plus"></i></button>*/
/*                                       <div class="form-group">*/
/*                                       {% for sub in category_data[cat['category_id']] %}*/
/*                                       <div class="">*/
/*                                         <input type="checkbox" value="{{ sub['category_id'] }}" name="wk_cdeploy_destiny_subcategory[]" id="dsub{{ sub['category_id'] }}"{% if sub['category_id'] in wk_cdeploy_destiny_subcategory %} {{ "checked" }} {% endif %}><label for="dsub{{ sub['category_id'] }}">{{ sub['name'] }}</label>*/
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
/*      {% else %}*/
/*       <div class="alert">*/
/*           {{ error_marketplace_disable }}*/
/*       </div>*/
/*      {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
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
/* $('input[name=\'wk_crosssell_crosssell_applicable\']').click(function(){*/
/*   $(this).autocomplete("search");*/
/* });*/
/* // crosssell_applicable*/
/* $('input[name=\'wk_crosssell_crosssell_applicable\']').autocomplete({*/
/*   minLength: 0,*/
/*   delay: 101,*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/wk_crosssell/vendor&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
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
/*     $('input[name=\'wk_crosssell_crosssell_applicable\']').val('');*/
/*     $('#vendor-crosssell-applicable' + item['value']).remove();*/
/* */
/*     $('#vendor-crosssell-applicable').append('<div id="vendor-crosssell-applicable' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="wk_crosssell_vendor_crosssell_applicable[]" value="' + item['value'] + '" /></div>');*/
/* */
/*     $('#vendor-crosssell-applicable div:odd').attr('class', 'odd');*/
/*     $('#vendor-crosssell-applicable div:even').attr('class', 'even');*/
/* */
/*     return false;*/
/*   },*/
/*   focus: function(item) {*/
/*       return false;*/
/*    }*/
/* });*/
/* */
/* $('#vendor-crosssell-applicable').delegate('.fa-minus-circle', 'click', function() {*/
/*   $(this).parent().remove();*/
/*   $('#vendor-crosssell-applicable div:odd').attr('class', 'odd');*/
/*   $('#vendor-crosssell-applicable div:even').attr('class', 'even');*/
/* });*/
/* */
/* $('input[name=\'wk_crosssell_countdown_applicable\']').click(function(){*/
/*   $(this).autocomplete("search");*/
/* });*/
/* // countdown_applicable*/
/* $('input[name=\'wk_crosssell_countdown_applicable\']').autocomplete({*/
/*   minLength: 0,*/
/*   delay: 101,*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/wk_crosssell/vendor&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
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
/*     $('input[name=\'wk_crosssell_countdown_applicable\']').val('');*/
/*     $('#vendor-countdown-applicable' + item['value']).remove();*/
/* */
/*     $('#vendor-countdown-applicable').append('<div id="vendor-countdown-applicable' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="wk_crosssell_vendor_countdown_applicable[]" value="' + item['value'] + '" /></div>');*/
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
/* $('input[name=\'wk_crosssell_units_applicable\']').click(function(){*/
/*   $(this).autocomplete("search");*/
/* });*/
/* // units_applicable*/
/* $('input[name=\'wk_crosssell_units_applicable\']').autocomplete({*/
/*   minLength: 0,*/
/*   delay: 101,*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/wk_crosssell/vendor&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
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
/*     $('input[name=\'wk_crosssell_units_applicable\']').val('');*/
/*     $('#vendor-units-applicable' + item['value']).remove();*/
/* */
/*     $('#vendor-units-applicable').append('<div id="vendor-units-applicable' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="wk_crosssell_vendor_units_applicable[]" value="' + item['value'] + '" /></div>');*/
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
/* if ($('#wk_cdeploy4').is(':checked')) {*/
/*   $('#wk_cdeploy').slideDown();*/
/* }*/
/* */
/* $('#wk_cdeploy4').on('change', function() {*/
/*   if ($('#wk_cdeploy4').is(':checked')) {*/
/*     $('#wk_cdeploy').slideDown();*/
/*   }*/
/* });*/
/* $('.wk_cdeploy').on('change', function() {*/
/*   if ($('.wk_cdeploy').is(':checked')) {*/
/*     $('#wk_cdeploy').slideUp();*/
/*   }*/
/* });*/
/* */
/* var rows = 0;*/
/* $('#stats-load').on('click', function () {*/
/*   var stats_body = $('.stats-body').html();*/
/*   if ($.trim(stats_body) == '') {*/
/*     getTableData(0);*/
/*   }*/
/* });*/
/* */
/* var number, showing, all = false, prev = 0;*/
/* $(window).on('scroll', function () {*/
/* */
/*   if ($('#tab-stats').hasClass('active')) {*/
/*     var diff = $(document).height() - $(window).height();*/
/*     var foot = diff - $(window).scrollTop();*/
/* */
/*     if (foot == 0) {*/
/*         number = $('.stats-body tr:last-child').attr('count');*/
/* */
/*         if (number && (number != prev) && !all) {*/
/*           getTableData(number);*/
/*           prev = number;*/
/*         }*/
/*     };*/
/*   }*/
/* });*/
/* */
/* function getTableData (start) {*/
/*   var content;*/
/*   $.ajax({*/
/*     url: 'index.php?route=extension/module/wk_crosssell/stats&user_token={{ user_token }}&start_limit=' + start,*/
/*     dataType: 'json',*/
/*     beforeSend: function() {*/
/*       $('#wkfoot').addClass('fa-spinner');*/
/*     },*/
/*     success: function(json) {*/
/*       if (json) {*/
/*         for (var i = 0; i < json['total']; i++) {*/
/*           rows++;*/
/*           content = '<tr count="' + rows + '">';*/
/*           content += '<td class="text-right">' + json["table_data"][i]["vendor_id"] + '</td>';*/
/*           content += '<td>' + json["table_data"][i]["vendor_name"] + '</td>';*/
/*           content += '<td class="text-right">' + json["table_data"][i]["store_id"] + '</td>';*/
/*           content += '<td>' + json["table_data"][i]["parents"] + '</td>';*/
/*           content += '<td>' + json["table_data"][i]["childs"] + '</td>';*/
/*           content += '<td>' + json["table_data"][i]["date_added"] + '</td>';*/
/*           content += '<td>' + json["table_data"][i]["date_start"] + '</td>';*/
/*           content += '<td>' + json["table_data"][i]["date_end"] + '</td>';*/
/*           content += '<td>Cross-sell</td>';*/
/*           content += '<td><a onclick="return confirm(\'{{ text_confirm_delete }}\');" href="' + json["table_data"][i]["delete"] + '" class="btn btn-danger"><i class="fa fa-times"></i></td>';*/
/*           content += '<td>' + json["table_data"][i]["countdown"] + '</td>';*/
/*           content += '<td class="text-right">' + json["table_data"][i]["units"] + '</td>';*/
/*           content += '</tr>';*/
/*           $('.stats-body').append(content);*/
/*         };*/
/*         showing = parseInt(start) + parseInt(json['total']);*/
/*         content = 'Showing ' + showing + ' of ' + json['all'] + ' results';*/
/*         $('.stats-result').text(content);*/
/*         if (showing == json['all']) {*/
/*           all = true;*/
/*         };*/
/*       }*/
/*       $('#wkfoot').removeClass('fa-spinner');*/
/*     }*/
/*   });*/
/* }*/
/* */
/* </script>*/
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
/* {{ footer }}*/
/* */
