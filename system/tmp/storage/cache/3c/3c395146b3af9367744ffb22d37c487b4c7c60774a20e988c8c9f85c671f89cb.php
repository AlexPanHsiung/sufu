<?php

/* default/template/affiliate/register.twig */
class __TwigTemplate_33c0a0f20b0a0fc424fa520ebd1c8b7bc144ea989c67f893b2ca4dd22accf457 extends Twig_Template
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
<div id=\"affiliate-register\" class=\"container\">
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
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 21
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
      <p>";
        // line 22
        echo (isset($context["text_signup"]) ? $context["text_signup"] : null);
        echo "</p>
      <form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <legend>";
        // line 25
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
          <div class=\"form-group required\" style=\"display: ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 27
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 29
            echo "              ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 30
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 32
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                  ";
                // line 33
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
              </div>
              ";
            } else {
                // line 36
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 38
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                  ";
                // line 39
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
              </div>
              ";
            }
            // line 42
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 45
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 47
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 48
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 49
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
              ";
        }
        // line 50
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 53
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 55
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 56
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 57
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
              ";
        }
        // line 58
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 61
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 63
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 64
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 65
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 66
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 69
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 71
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 72
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 73
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
              ";
        }
        // line 74
        echo " </div>
          </div>
          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 77
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 78
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 79
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 80
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                    // line 82
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 83
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                
                
                
                
                
                
                ";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 91
                        echo "                ";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 92
                            echo "                
                
                
                
                
                <option value=\"";
                            // line 97
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                
                
                
                
                
                
                ";
                        } else {
                            // line 105
                            echo "                
                
                
                
                
                
                <option value=\"";
                            // line 111
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                
                
                
                
                
                
                ";
                        }
                        // line 119
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "              
              
              
              
              
              
              </select>
              ";
                    // line 127
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 128
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 129
                    echo " </div>
          </div>
          ";
                }
                // line 132
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 133
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 134
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 137
                        echo "                <div class=\"radio\"> ";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 138
                            echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                            // line 139
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                    ";
                            // line 140
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                  ";
                        } else {
                            // line 142
                            echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                            // line 143
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                    ";
                            // line 144
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                  ";
                        }
                        // line 145
                        echo " </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo " </div>
              ";
                    // line 147
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 148
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 149
                    echo " </div>
          </div>
          ";
                }
                // line 152
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 153
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 154
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                    // line 156
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 157
                        echo "                <div class=\"checkbox\">";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 158
                            echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                            // line 159
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                    ";
                            // line 160
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                  ";
                        } else {
                            // line 162
                            echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                            // line 163
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                    ";
                            // line 164
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                  ";
                        }
                        // line 165
                        echo " </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo " </div>
              ";
                    // line 167
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 168
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 169
                    echo " </div>
          </div>
          ";
                }
                // line 172
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 173
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 174
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                    // line 176
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
              ";
                    // line 177
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 178
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 179
                    echo " </div>
          </div>
          ";
                }
                // line 182
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 183
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 184
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                    // line 186
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "</textarea>
              ";
                    // line 187
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 188
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 189
                    echo " </div>
          </div>
          ";
                }
                // line 192
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 193
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 194
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                    // line 196
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                    // line 197
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo "  ";
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo " ";
                    }
                    echo "\" />
              ";
                    // line 198
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 199
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 200
                    echo "</div>
          </div>
          ";
                }
                // line 203
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 204
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 205
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                    // line 212
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 213
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 214
                    echo " </div>
          </div>
          ";
                }
                // line 217
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 218
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 219
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                    // line 222
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                    // line 226
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 227
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 228
                    echo " </div>
          </div>
          ";
                }
                // line 231
                echo "          ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 232
                    echo "          <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 233
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                    // line 236
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                    // line 240
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 241
                        echo "              <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
              ";
                    }
                    // line 242
                    echo " </div>
          </div>
          ";
                }
                // line 245
                echo "          ";
            }
            // line 246
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "        </fieldset>
        <fieldset id=\"affiliate\">
          <legend>";
        // line 249
        echo (isset($context["text_your_affiliate"]) ? $context["text_your_affiliate"] : null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 251
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 253
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company\" class=\"form-control\" />
            </div>
          </div>       
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-website\">";
        // line 258
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"website\" value=\"";
        // line 260
        echo (isset($context["website"]) ? $context["website"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "\" id=\"input-website\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 264
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"tax\" value=\"";
        // line 266
        echo (isset($context["tax"]) ? $context["tax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "\" id=\"input-tax\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 270
        echo (isset($context["entry_payment"]) ? $context["entry_payment"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <!--
              <div class=\"radio\">
                <label> ";
        // line 274
        if (((isset($context["payment"]) ? $context["payment"] : null) == "cheque")) {
            // line 275
            echo "                  <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                  ";
        } else {
            // line 277
            echo "                  <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                  ";
        }
        // line 279
        echo "                  ";
        echo (isset($context["text_cheque"]) ? $context["text_cheque"] : null);
        echo "</label>
              </div>
              <div class=\"radio\">
                <label> ";
        // line 282
        if (((isset($context["payment"]) ? $context["payment"] : null) == "paypal")) {
            // line 283
            echo "                  <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                  ";
        } else {
            // line 285
            echo "                  <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                  ";
        }
        // line 287
        echo "                  ";
        echo (isset($context["text_paypal"]) ? $context["text_paypal"] : null);
        echo "</label>
              </div>
              -->
              <div class=\"radio\">
                <label> ";
        // line 291
        if (((isset($context["payment"]) ? $context["payment"] : null) == "bank")) {
            // line 292
            echo "                  <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                  ";
        } else {
            // line 294
            echo "                  <input type=\"radio\" name=\"payment\" value=\"bank\" />
                  ";
        }
        // line 296
        echo "                  ";
        echo (isset($context["text_bank"]) ? $context["text_bank"] : null);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"form-group payment required\" id=\"payment-cheque\">
            <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 301
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"cheque\" value=\"";
        // line 303
        echo (isset($context["cheque"]) ? $context["cheque"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "\" id=\"input-cheque\" class=\"form-control\" />
              ";
        // line 304
        if ((isset($context["error_cheque"]) ? $context["error_cheque"] : null)) {
            // line 305
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_cheque"]) ? $context["error_cheque"] : null);
            echo "</div>
              ";
        }
        // line 306
        echo " </div>
          </div>
          <div class=\"form-group payment required\" id=\"payment-paypal\">
            <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 309
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"paypal\" value=\"";
        // line 311
        echo (isset($context["paypal"]) ? $context["paypal"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "\" id=\"input-paypal\" class=\"form-control\" />
              ";
        // line 312
        if ((isset($context["error_paypal"]) ? $context["error_paypal"] : null)) {
            // line 313
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_paypal"]) ? $context["error_paypal"] : null);
            echo "</div>
              ";
        }
        // line 314
        echo " </div>
          </div>
          <div class=\"payment\" id=\"payment-bank\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 318
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_name\" value=\"";
        // line 320
        echo (isset($context["bank_name"]) ? $context["bank_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "\" id=\"input-bank-name\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 324
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 326
        echo (isset($context["bank_branch_number"]) ? $context["bank_branch_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\" />
              </div>
            </div>
            <!--
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 331
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 333
        echo (isset($context["bank_swift_code"]) ? $context["bank_swift_code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\" />
              </div>
            </div>
            -->
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 338
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 340
        echo (isset($context["bank_account_name"]) ? $context["bank_account_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\" />
                ";
        // line 341
        if ((isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null)) {
            // line 342
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null);
            echo "</div>
                ";
        }
        // line 343
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 346
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 348
        echo (isset($context["bank_account_number"]) ? $context["bank_account_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\" />
                ";
        // line 349
        if ((isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null)) {
            // line 350
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null);
            echo "</div>
                ";
        }
        // line 351
        echo " </div>
            </div>
            ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 354
            echo "            ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "affiliate")) {
                // line 355
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 356
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 357
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"custom_field[";
                    // line 359
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                  <option value=\"\">";
                    // line 360
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                  
                
                
                
                
                
                
                ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 369
                        echo "                ";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 370
                            echo "                
                
                
                
                
                  <option value=\"";
                            // line 375
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                  
                
                
                
                
                
                
                ";
                        } else {
                            // line 384
                            echo "                
                
                
                
                
                
                
                  <option value=\"";
                            // line 391
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                  
                
                
                
                
                
                
                ";
                        }
                        // line 400
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 401
                    echo "              
              
              
              
              
              
              
                </select>
                ";
                    // line 409
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 410
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 411
                    echo " </div>
            </div>
            ";
                }
                // line 414
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 415
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\">";
                    // line 416
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <div> ";
                    // line 418
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 419
                        echo "                  <div class=\"radio\"> ";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 420
                            echo "                    <label>
                      <input type=\"radio\" name=\"custom_field[";
                            // line 421
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                      ";
                            // line 422
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                    ";
                        } else {
                            // line 424
                            echo "                    <label>
                      <input type=\"radio\" name=\"custom_field[";
                            // line 425
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                      ";
                            // line 426
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                    ";
                        }
                        // line 427
                        echo " </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 428
                    echo " </div>
                ";
                    // line 429
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 430
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 431
                    echo " </div>
            </div>
            ";
                }
                // line 434
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 435
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\">";
                    // line 436
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <div> ";
                    // line 438
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 439
                        echo "                  <div class=\"checkbox\"> ";
                        if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 440
                            echo "                    <label>
                      <input type=\"checkbox\" name=\"custom_field[";
                            // line 441
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                      ";
                            // line 442
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                    ";
                        } else {
                            // line 444
                            echo "                    <label>
                      <input type=\"checkbox\" name=\"custom_field[";
                            // line 445
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                      ";
                            // line 446
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                    ";
                        }
                        // line 447
                        echo " </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 448
                    echo " </div>
                ";
                    // line 449
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 450
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 451
                    echo " </div>
            </div>
            ";
                }
                // line 454
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 455
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 456
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"custom_field[";
                    // line 458
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                ";
                    // line 459
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 460
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 461
                    echo " </div>
            </div>
            ";
                }
                // line 464
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 465
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 466
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"custom_field[";
                    // line 468
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "</textarea>
                ";
                    // line 469
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 470
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 471
                    echo " </div>
            </div>
            ";
                }
                // line 474
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 475
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\">";
                    // line 476
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <button type=\"button\" id=\"button-custom-field";
                    // line 478
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 479
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo "  ";
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo " ";
                    }
                    echo "\" />
                ";
                    // line 480
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 481
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 482
                    echo " </div>
            </div>
            ";
                }
                // line 485
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 486
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 487
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 490
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
                ";
                    // line 494
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 495
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 496
                    echo " </div>
            </div>
            ";
                }
                // line 499
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 500
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 501
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group time\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 504
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
                ";
                    // line 508
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 509
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 510
                    echo " </div>
            </div>
            ";
                }
                // line 513
                echo "            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 514
                    echo "            <div id=\"custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 515
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"input-group datetime\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 518
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
                ";
                    // line 522
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 523
                        echo "                <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                ";
                    }
                    // line 524
                    echo " </div>
            </div>
            ";
                }
                // line 527
                echo "            ";
            }
            // line 528
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 531
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 533
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 535
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 536
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 537
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
              ";
        }
        // line 538
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 541
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 543
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 544
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 545
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
              ";
        }
        // line 546
        echo " </div>
          </div>
        </fieldset>
        ";
        // line 549
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        ";
        // line 550
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 551
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">";
            // line 552
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
            ";
            // line 553
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 554
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 556
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 558
            echo "            &nbsp;
            <input type=\"submit\" value=\"";
            // line 559
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 563
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 565
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 569
        echo "      </form>
      ";
        // line 570
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 571
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('#affiliate .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#affiliate .form-group').length) {
\t\t\$('#affiliate .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(node).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 692
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 697
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 702
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment\\']').on('change', function() {
\t\$('.payment').hide();

\t\$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');
//--></script> 
";
        // line 716
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/affiliate/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1921 => 716,  1904 => 702,  1896 => 697,  1888 => 692,  1764 => 571,  1760 => 570,  1757 => 569,  1750 => 565,  1746 => 563,  1739 => 559,  1736 => 558,  1732 => 556,  1728 => 554,  1726 => 553,  1722 => 552,  1719 => 551,  1717 => 550,  1713 => 549,  1708 => 546,  1702 => 545,  1700 => 544,  1694 => 543,  1689 => 541,  1684 => 538,  1678 => 537,  1676 => 536,  1670 => 535,  1665 => 533,  1660 => 531,  1650 => 528,  1647 => 527,  1642 => 524,  1636 => 523,  1634 => 522,  1615 => 518,  1607 => 515,  1600 => 514,  1597 => 513,  1592 => 510,  1586 => 509,  1584 => 508,  1565 => 504,  1557 => 501,  1550 => 500,  1547 => 499,  1542 => 496,  1536 => 495,  1534 => 494,  1515 => 490,  1507 => 487,  1500 => 486,  1497 => 485,  1492 => 482,  1486 => 481,  1484 => 480,  1472 => 479,  1464 => 478,  1459 => 476,  1452 => 475,  1449 => 474,  1444 => 471,  1438 => 470,  1436 => 469,  1420 => 468,  1413 => 466,  1406 => 465,  1403 => 464,  1398 => 461,  1392 => 460,  1390 => 459,  1374 => 458,  1367 => 456,  1360 => 455,  1357 => 454,  1352 => 451,  1346 => 450,  1344 => 449,  1341 => 448,  1334 => 447,  1329 => 446,  1321 => 445,  1318 => 444,  1313 => 442,  1305 => 441,  1302 => 440,  1299 => 439,  1295 => 438,  1290 => 436,  1283 => 435,  1280 => 434,  1275 => 431,  1269 => 430,  1267 => 429,  1264 => 428,  1257 => 427,  1252 => 426,  1244 => 425,  1241 => 424,  1236 => 422,  1228 => 421,  1225 => 420,  1222 => 419,  1218 => 418,  1213 => 416,  1206 => 415,  1203 => 414,  1198 => 411,  1192 => 410,  1190 => 409,  1180 => 401,  1174 => 400,  1160 => 391,  1151 => 384,  1137 => 375,  1130 => 370,  1127 => 369,  1123 => 368,  1112 => 360,  1104 => 359,  1097 => 357,  1090 => 356,  1087 => 355,  1084 => 354,  1080 => 353,  1076 => 351,  1070 => 350,  1068 => 349,  1062 => 348,  1057 => 346,  1052 => 343,  1046 => 342,  1044 => 341,  1038 => 340,  1033 => 338,  1023 => 333,  1018 => 331,  1008 => 326,  1003 => 324,  994 => 320,  989 => 318,  983 => 314,  977 => 313,  975 => 312,  969 => 311,  964 => 309,  959 => 306,  953 => 305,  951 => 304,  945 => 303,  940 => 301,  931 => 296,  927 => 294,  923 => 292,  921 => 291,  913 => 287,  909 => 285,  905 => 283,  903 => 282,  896 => 279,  892 => 277,  888 => 275,  886 => 274,  879 => 270,  870 => 266,  865 => 264,  856 => 260,  851 => 258,  841 => 253,  836 => 251,  831 => 249,  827 => 247,  821 => 246,  818 => 245,  813 => 242,  807 => 241,  805 => 240,  786 => 236,  778 => 233,  771 => 232,  768 => 231,  763 => 228,  757 => 227,  755 => 226,  736 => 222,  728 => 219,  721 => 218,  718 => 217,  713 => 214,  707 => 213,  705 => 212,  686 => 208,  678 => 205,  671 => 204,  668 => 203,  663 => 200,  657 => 199,  655 => 198,  643 => 197,  635 => 196,  630 => 194,  623 => 193,  620 => 192,  615 => 189,  609 => 188,  607 => 187,  591 => 186,  584 => 184,  577 => 183,  574 => 182,  569 => 179,  563 => 178,  561 => 177,  545 => 176,  538 => 174,  531 => 173,  528 => 172,  523 => 169,  517 => 168,  515 => 167,  512 => 166,  505 => 165,  500 => 164,  492 => 163,  489 => 162,  484 => 160,  476 => 159,  473 => 158,  470 => 157,  466 => 156,  461 => 154,  454 => 153,  451 => 152,  446 => 149,  440 => 148,  438 => 147,  435 => 146,  428 => 145,  423 => 144,  415 => 143,  412 => 142,  407 => 140,  399 => 139,  396 => 138,  393 => 137,  389 => 136,  384 => 134,  377 => 133,  374 => 132,  369 => 129,  363 => 128,  361 => 127,  352 => 120,  346 => 119,  333 => 111,  325 => 105,  312 => 97,  305 => 92,  302 => 91,  298 => 90,  288 => 83,  280 => 82,  273 => 80,  266 => 79,  263 => 78,  260 => 77,  256 => 76,  252 => 74,  246 => 73,  244 => 72,  238 => 71,  233 => 69,  228 => 66,  222 => 65,  220 => 64,  214 => 63,  209 => 61,  204 => 58,  198 => 57,  196 => 56,  190 => 55,  185 => 53,  180 => 50,  174 => 49,  172 => 48,  166 => 47,  161 => 45,  151 => 42,  145 => 39,  141 => 38,  137 => 36,  131 => 33,  127 => 32,  123 => 30,  120 => 29,  116 => 28,  112 => 27,  104 => 26,  100 => 25,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  56 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="affiliate-register" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
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
/*       <p>{{ text_account_already }}</p>*/
/*       <p>{{ text_signup }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset id="account">*/
/*           <legend>{{ text_your_details }}</legend>*/
/*           <div class="form-group required" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*             <label class="col-sm-2 control-label">{{ entry_customer_group }}</label>*/
/*             <div class="col-sm-10">{% for customer_group in customer_groups %}*/
/*               {% if customer_group.customer_group_id == customer_group_id %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                   {{ customer_group.name }}</label>*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*                   {{ customer_group.name }}</label>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endfor %}</div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*               {% if error_firstname %}*/
/*               <div class="text-danger">{{ error_firstname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*               {% if error_lastname %}*/
/*               <div class="text-danger">{{ error_lastname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*               {% if error_telephone %}*/
/*               <div class="text-danger">{{ error_telephone }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% for custom_field in custom_fields %}*/
/*           {% if custom_field.location == 'account' %}*/
/*           {% if custom_field.type == 'select' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               */
/*               */
/*               */
/*               */
/*               */
/*               */
/*               </select>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'radio' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="radio"> {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %} </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'checkbox' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="checkbox">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %} </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'text' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'textarea' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'file' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'date' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </fieldset>*/
/*         <fieldset id="affiliate">*/
/*           <legend>{{ text_your_affiliate }}</legend>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-company">{{ entry_company }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-company" class="form-control" />*/
/*             </div>*/
/*           </div>       */
/*           */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-website">{{ entry_website }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="website" value="{{ website }}" placeholder="{{ entry_website }}" id="input-website" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax">{{ entry_tax }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="tax" value="{{ tax }}" placeholder="{{ entry_tax }}" id="input-tax" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_payment }}</label>*/
/*             <div class="col-sm-10">*/
/*               <!--*/
/*               <div class="radio">*/
/*                 <label> {% if payment == 'cheque' %}*/
/*                   <input type="radio" name="payment" value="cheque" checked="checked" />*/
/*                   {% else %}*/
/*                   <input type="radio" name="payment" value="cheque" />*/
/*                   {% endif %}*/
/*                   {{ text_cheque }}</label>*/
/*               </div>*/
/*               <div class="radio">*/
/*                 <label> {% if payment == 'paypal' %}*/
/*                   <input type="radio" name="payment" value="paypal" checked="checked" />*/
/*                   {% else %}*/
/*                   <input type="radio" name="payment" value="paypal" />*/
/*                   {% endif %}*/
/*                   {{ text_paypal }}</label>*/
/*               </div>*/
/*               -->*/
/*               <div class="radio">*/
/*                 <label> {% if payment == 'bank' %}*/
/*                   <input type="radio" name="payment" value="bank" checked="checked" />*/
/*                   {% else %}*/
/*                   <input type="radio" name="payment" value="bank" />*/
/*                   {% endif %}*/
/*                   {{ text_bank }}</label>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group payment required" id="payment-cheque">*/
/*             <label class="col-sm-2 control-label" for="input-cheque">{{ entry_cheque }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="cheque" value="{{ cheque }}" placeholder="{{ entry_cheque }}" id="input-cheque" class="form-control" />*/
/*               {% if error_cheque %}*/
/*               <div class="text-danger">{{ error_cheque }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group payment required" id="payment-paypal">*/
/*             <label class="col-sm-2 control-label" for="input-paypal">{{ entry_paypal }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="paypal" value="{{ paypal }}" placeholder="{{ entry_paypal }}" id="input-paypal" class="form-control" />*/
/*               {% if error_paypal %}*/
/*               <div class="text-danger">{{ error_paypal }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="payment" id="payment-bank">*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-bank-name">{{ entry_bank_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="bank_name" value="{{ bank_name }}" placeholder="{{ entry_bank_name }}" id="input-bank-name" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-bank-branch-number">{{ entry_bank_branch_number }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="bank_branch_number" value="{{ bank_branch_number }}" placeholder="{{ entry_bank_branch_number }}" id="input-bank-branch-number" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*             <!--*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-bank-swift-code">{{ entry_bank_swift_code }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="bank_swift_code" value="{{ bank_swift_code }}" placeholder="{{ entry_bank_swift_code }}" id="input-bank-swift-code" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*             -->*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-bank-account-name">{{ entry_bank_account_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="bank_account_name" value="{{ bank_account_name }}" placeholder="{{ entry_bank_account_name }}" id="input-bank-account-name" class="form-control" />*/
/*                 {% if error_bank_account_name %}*/
/*                 <div class="text-danger">{{ error_bank_account_name }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-bank-account-number">{{ entry_bank_account_number }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="bank_account_number" value="{{ bank_account_number }}" placeholder="{{ entry_bank_account_number }}" id="input-bank-account-number" class="form-control" />*/
/*                 {% if error_bank_account_number %}*/
/*                 <div class="text-danger">{{ error_bank_account_number }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% for custom_field in custom_fields %}*/
/*             {% if custom_field.location == 'affiliate' %}*/
/*             {% if custom_field.type == 'select' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                   <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                   */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                   <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                   */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               */
/*               */
/*               */
/*               */
/*               */
/*               */
/*               */
/*                 </select>*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'radio' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                   <div class="radio"> {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                     <label>*/
/*                       <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                       {{ custom_field_value.name }}</label>*/
/*                     {% else %}*/
/*                     <label>*/
/*                       <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                       {{ custom_field_value.name }}</label>*/
/*                     {% endif %} </div>*/
/*                   {% endfor %} </div>*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'checkbox' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                   <div class="checkbox"> {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                     <label>*/
/*                       <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                       {{ custom_field_value.name }}</label>*/
/*                     {% else %}*/
/*                     <label>*/
/*                       <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                       {{ custom_field_value.name }}</label>*/
/*                     {% endif %} </div>*/
/*                   {% endfor %} </div>*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'text' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'textarea' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'file' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                 <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'date' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group date">*/
/*                   <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'time' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group time">*/
/*                   <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if custom_field.type == 'time' %}*/
/*             <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group datetime">*/
/*                   <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*                 {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                 <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endif %}*/
/*             {% endfor %} </div>*/
/*         </fieldset>*/
/*         <fieldset>*/
/*           <legend>{{ text_your_password }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control" />*/
/*               {% if error_confirm %}*/
/*               <div class="text-danger">{{ error_confirm }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         {{ captcha }}*/
/*         {% if text_agree %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-right">{{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             &nbsp;*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('#account .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/* 		$('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/* 		$('#account .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('#affiliate .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#affiliate .form-group').length) {*/
/* 		$('#affiliate .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#affiliate .form-group').length) {*/
/* 		$('#affiliate .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#affiliate .form-group').length) {*/
/* 		$('#affiliate .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#affiliate .form-group').length) {*/
/* 		$('#affiliate .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('input[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('.custom-field').hide();*/
/* 			$('.custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('#custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('button[id^=\'button-custom-field\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(node).parent().find('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'payment\']').on('change', function() {*/
/* 	$('.payment').hide();*/
/* */
/* 	$('#payment-' + this.value).show();*/
/* });*/
/* */
/* $('input[name=\'payment\']:checked').trigger('change');*/
/* //--></script> */
/* {{ footer }} */
