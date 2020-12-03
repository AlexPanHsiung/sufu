<?php

/* simplica/template/product/product.twig */
class __TwigTemplate_fbce23f2509b26e63627c6fd4502bd115e94309795a0be6b40fff74a80a6b925 extends Twig_Template
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
<div id=\"product-product\" class=\"container\">
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
  <!--<div class=\"row\">-->
  <div>
    ";
        // line 10
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 11
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 19
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "        ";
        }
        // line 24
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> ";
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 25
            echo "          <ul class=\"thumbnails\">
            ";
            // line 26
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 27
                echo "            <li><a class=\"thumbnail\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a></li>
            ";
            }
            // line 29
            echo "            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 30
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 31
                    echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            ";
            }
            // line 34
            echo "          </ul>
          ";
        }
        // line 36
        echo "        </div>
        ";
        // line 37
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 39
            echo "        ";
        } else {
            // line 40
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 41
            echo "        ";
        }
        // line 42
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          
          <h1>";
        // line 44
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 46
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 47
            echo "            <li>";
            echo (isset($context["text_brand"]) ? $context["text_brand"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 49
        echo "            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
<li>";
        // line 50
        echo (isset($context["text_upc"]) ? $context["text_upc"] : null);
        echo " ";
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "</li>   
\t\t
            ";
        // line 52
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 53
            echo "            <li>";
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo " ";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo " ";
            echo (isset($context["weight_class"]) ? $context["weight_class"] : null);
            echo "</li>
            ";
        }
        // line 54
        echo " 
            ";
        // line 55
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 56
            echo "            <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
            ";
        }
        // line 58
        echo "            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>

                            ";
        // line 60
        if ((isset($context["wk_custome_field_wkcustomfields"]) ? $context["wk_custome_field_wkcustomfields"] : null)) {
            // line 61
            echo "                                     ";
            if ( !twig_test_empty((isset($context["customFields"]) ? $context["customFields"] : null))) {
                // line 62
                echo "                                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["customFields"]) ? $context["customFields"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 63
                    echo "                                            <li>";
                    echo (($this->getAttribute($context["value"], "fieldName", array(), "array") . ":") . $this->getAttribute($context["value"], "fieldValue", array(), "array"));
                    echo "</li>
                                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                                    ";
            }
            // line 66
            echo "                            ";
        }
        // line 67
        echo "                              
          </ul>

                        ";
        // line 70
        if ((array_key_exists("delivery_date", $context) && (isset($context["delivery_date"]) ? $context["delivery_date"] : null))) {
            // line 71
            echo "                            <ul class=\"list-unstyled\">
                              <li>";
            // line 72
            echo (((isset($context["text_delivery_date"]) ? $context["text_delivery_date"] : null) . " : ") . (isset($context["delivery_date"]) ? $context["delivery_date"] : null));
            echo "</li>
                            </ul>
                        ";
        }
        // line 75
        echo "                    
          ";
        // line 76
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 77
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 78
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 79
                echo "            <li>
              <h2 class=\"price\">";
                // line 80
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 83
                echo "            <li><span style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
            <li>
              <h2 class=\"price\">";
                // line 85
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
            </li>
            ";
            }
            // line 88
            echo "            ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 89
                echo "            <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 91
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 92
                echo "            <li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 94
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 95
                echo "            <li>
              <hr>
            </li>
            ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 99
                    echo "            <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            ";
            }
            // line 102
            echo "          </ul>
          ";
        }
        // line 104
        echo "          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 105
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 106
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
          <div id=\"product\"> ";
        // line 108
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 109
            echo "            <hr>
            <h3>";
            // line 110
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 112
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 113
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 114
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 115
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 116
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 118
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 119
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 120
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 121
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "              </select>
            </div>
            ";
                }
                // line 126
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 127
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 128
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 129
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 130
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 132
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 133
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 134
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 135
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 136
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 137
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo " </div>
            </div>
            ";
                }
                // line 142
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 143
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 144
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 145
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 146
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 148
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 149
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 150
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 151
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 152
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 153
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo " </div>
            </div>
            ";
                }
                // line 158
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 159
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 160
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 161
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 164
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 165
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 166
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 170
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 171
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 172
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 173
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 174
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 177
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 178
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 179
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 181
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 187
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 188
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 189
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 191
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 197
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 198
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 199
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 201
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 207
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "            ";
        }
        // line 209
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 210
            echo "            <hr>
            <h3>";
            // line 211
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 214
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 216
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 222
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 223
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
              <div class=\"row\">
                <div class=\"col-xs-6\">
                  <div class=\"input-group number-spinner\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" data-dir=\"dwn\"><i class=\"fa fa-minus\"></i></button>
                    </span>
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 230
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control text-center\" />
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" data-dir=\"up\"><i class=\"fa fa-plus\"></i></button>
                    </span>
                  </div>
                </div>
                <div class=\"col-xs-6\"><button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 236
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button></div>
              </div>
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 238
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
            </div>
            ";
        // line 240
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 241
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 242
        echo "</div>
          ";
        // line 243
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 244
            echo "          <div class=\"rating\">
            <p>";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 246
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 247
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 250
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\">
              <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
              <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a>
              <a class=\"addthis_counter addthis_pill_style\"></a>
              <!-- Custom part BEGIN -->
              ";
            // line 255
            if ((isset($context["product_qrcode"]) ? $context["product_qrcode"] : null)) {
                // line 256
                echo "              <button type=\"button\" id=\"show-qrcode\" class=\"btn btn-primary\" style=\"width:120px; padding: 0px; display: inline-block; float: right;\">";
                echo (isset($context["text_qrcode"]) ? $context["text_qrcode"] : null);
                echo "</button>
              ";
            }
            // line 258
            echo "              <!-- Custom part END -->
            </div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 264
        echo "
          ";
        // line 265
        if ((isset($context["product_qrcode"]) ? $context["product_qrcode"] : null)) {
            // line 266
            echo "          <div id=\"product-qrcode\" class=\"hidden\" style=\"float: right;\">
            <img src=\"";
            // line 267
            echo (isset($context["product_qrcode"]) ? $context["product_qrcode"] : null);
            echo "\" alt=\"\">
          </div>
          ";
        }
        // line 270
        echo "
        </div>
      </div>



      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 277
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>

\t\t\t<!--xml-->
\t\t\t";
        // line 280
        if ((isset($context["customtabs"]) ? $context["customtabs"] : null)) {
            // line 281
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customtabs"]) ? $context["customtabs"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["customtab"]) {
                // line 282
                echo "\t\t\t\t<li><a href=\"#tabcustom";
                echo $context["key"];
                echo "\" data-toggle=\"tab\">";
                echo $this->getAttribute($context["customtab"], "title", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "            ";
        }
        // line 285
        echo "\t\t\t<!--xml-->
\t\t\t
        ";
        // line 287
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 288
            echo "        <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
        ";
        }
        // line 290
        echo "        ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 291
            echo "        <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
        ";
        }
        // line 293
        echo "      </ul>

      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"tab-content\">

\t\t\t<!--xml-->
\t\t\t";
        // line 300
        if ((isset($context["customtabs"]) ? $context["customtabs"] : null)) {
            // line 301
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customtabs"]) ? $context["customtabs"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["customtab"]) {
                // line 302
                echo "\t\t\t\t<div class=\"tab-pane\"id=\"tabcustom";
                echo $context["key"];
                echo "\">
\t\t\t\t\t";
                // line 303
                echo $this->getAttribute($context["customtab"], "description", array());
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "\t\t\t";
        }
        // line 307
        echo "\t\t\t<!--xml-->
\t\t\t
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 309
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 310
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 311
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 313
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 314
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 316
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 320
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 321
                    echo "                <tr>
                  <td>";
                    // line 322
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 323
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "              </table>
            </div>
            ";
        }
        // line 331
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 332
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 335
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 336
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 337
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 339
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 340
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 345
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 347
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 352
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 353
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 363
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 365
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 368
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 372
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 374
            echo "              </form>
            </div>
            ";
        }
        // line 377
        echo "          </div>          
        </div>
      </div>

      ";
        // line 381
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 382
            echo "      <h3>";
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 383
            $context["i"] = 0;
            // line 384
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 385
                echo "        ";
                if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 386
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 387
                    echo "        ";
                } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 388
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 389
                    echo "        ";
                } else {
                    // line 390
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 391
                    echo "        ";
                }
                // line 392
                echo "        <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 394
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 396
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
              <p>";
                // line 397
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
              ";
                // line 398
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 399
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 400
                        echo "                ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 401
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 403
                echo "              ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 404
                    echo "              <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 405
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                ";
                    } else {
                        // line 406
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 407
                    echo "                ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 408
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 410
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 411
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 412
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 416
                if ((((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null)) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 2) == 0))) {
                    // line 417
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 418
(isset($context["column_left"]) ? $context["column_left"] : null) || ((isset($context["column_right"]) ? $context["column_right"] : null) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 3) == 0)))) {
                    // line 419
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 420
(isset($context["i"]) ? $context["i"] : null) + 1) % 4) == 0)) {
                    // line 421
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 423
                echo "        ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 424
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 426
        echo "        ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 427
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 429
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 430
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 431
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 433
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 434
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 512
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 517
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 523
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
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
\t\t\t\t\t\$('.text-danger').remove();

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
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 590
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 594
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$('#show-qrcode').on('click', function(){
  \$('#product-qrcode').toggleClass('hidden');
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 

<script type=\"text/javascript\"><!--
\$(document).on('click', '.number-spinner button', function () {    
  var btn = \$(this),
    oldValue = btn.closest('.number-spinner').find('input').val().trim(),
    newVal = 1;
      
  if (btn.attr('data-dir') == 'up') {
    newVal = parseInt(oldValue) + 1;
  } else {
    if (oldValue > 1) {
      newVal = parseInt(oldValue) - 1;
    } else {
      newVal = 1;
    }
  }
  btn.closest('.number-spinner').find('input').val(newVal);
});
//--></script>
";
        // line 655
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "simplica/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1627 => 655,  1563 => 594,  1556 => 590,  1486 => 523,  1477 => 517,  1469 => 512,  1388 => 434,  1383 => 433,  1374 => 431,  1367 => 430,  1357 => 429,  1353 => 428,  1348 => 427,  1345 => 426,  1336 => 424,  1333 => 423,  1329 => 421,  1327 => 420,  1324 => 419,  1322 => 418,  1319 => 417,  1317 => 416,  1308 => 412,  1302 => 411,  1294 => 410,  1290 => 408,  1278 => 407,  1271 => 406,  1265 => 405,  1262 => 404,  1259 => 403,  1250 => 401,  1243 => 400,  1238 => 399,  1236 => 398,  1232 => 397,  1226 => 396,  1215 => 394,  1209 => 392,  1206 => 391,  1203 => 390,  1200 => 389,  1197 => 388,  1194 => 387,  1191 => 386,  1188 => 385,  1183 => 384,  1181 => 383,  1176 => 382,  1174 => 381,  1168 => 377,  1163 => 374,  1157 => 372,  1148 => 368,  1142 => 365,  1137 => 363,  1124 => 353,  1120 => 352,  1112 => 347,  1107 => 345,  1099 => 340,  1095 => 339,  1091 => 337,  1089 => 336,  1085 => 335,  1080 => 332,  1077 => 331,  1072 => 328,  1065 => 326,  1056 => 323,  1052 => 322,  1049 => 321,  1045 => 320,  1038 => 316,  1034 => 314,  1030 => 313,  1026 => 311,  1024 => 310,  1020 => 309,  1016 => 307,  1013 => 306,  1004 => 303,  999 => 302,  994 => 301,  992 => 300,  983 => 293,  977 => 291,  974 => 290,  968 => 288,  966 => 287,  962 => 285,  959 => 284,  948 => 282,  943 => 281,  941 => 280,  935 => 277,  926 => 270,  920 => 267,  917 => 266,  915 => 265,  912 => 264,  904 => 258,  898 => 256,  896 => 255,  888 => 250,  874 => 247,  867 => 246,  863 => 245,  860 => 244,  858 => 243,  855 => 242,  849 => 241,  847 => 240,  842 => 238,  835 => 236,  826 => 230,  816 => 223,  813 => 222,  807 => 218,  796 => 216,  792 => 215,  788 => 214,  782 => 211,  779 => 210,  776 => 209,  773 => 208,  767 => 207,  754 => 201,  747 => 199,  740 => 198,  737 => 197,  724 => 191,  717 => 189,  710 => 188,  707 => 187,  694 => 181,  687 => 179,  680 => 178,  677 => 177,  669 => 174,  661 => 173,  657 => 172,  650 => 171,  647 => 170,  635 => 167,  629 => 166,  622 => 165,  619 => 164,  607 => 161,  601 => 160,  594 => 159,  591 => 158,  586 => 155,  578 => 153,  571 => 152,  569 => 151,  564 => 150,  548 => 149,  542 => 148,  538 => 146,  532 => 145,  528 => 144,  521 => 143,  518 => 142,  513 => 139,  505 => 137,  498 => 136,  496 => 135,  492 => 134,  474 => 133,  468 => 132,  464 => 130,  458 => 129,  454 => 128,  447 => 127,  444 => 126,  439 => 123,  432 => 121,  425 => 120,  423 => 119,  416 => 118,  412 => 117,  408 => 116,  402 => 115,  396 => 114,  389 => 113,  386 => 112,  382 => 111,  378 => 110,  375 => 109,  373 => 108,  366 => 106,  360 => 105,  357 => 104,  353 => 102,  350 => 101,  339 => 99,  335 => 98,  330 => 95,  327 => 94,  319 => 92,  316 => 91,  308 => 89,  305 => 88,  299 => 85,  293 => 83,  287 => 80,  284 => 79,  282 => 78,  279 => 77,  277 => 76,  274 => 75,  268 => 72,  265 => 71,  263 => 70,  258 => 67,  255 => 66,  252 => 65,  243 => 63,  238 => 62,  235 => 61,  233 => 60,  225 => 58,  217 => 56,  215 => 55,  212 => 54,  202 => 53,  200 => 52,  193 => 50,  186 => 49,  176 => 47,  174 => 46,  169 => 44,  163 => 42,  160 => 41,  157 => 40,  154 => 39,  151 => 38,  149 => 37,  146 => 36,  142 => 34,  139 => 33,  122 => 31,  117 => 30,  114 => 29,  100 => 27,  98 => 26,  95 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <!--<div class="row">-->*/
/*   <div>*/
/*     {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> {% if thumb or images %}*/
/*           <ul class="thumbnails">*/
/*             {% if thumb %}*/
/*             <li><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endif %}*/
/*             {% if images %}*/
/*             {% for image in images %}*/
/*             <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ heading_title }}"> <img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           */
/*           <h1>{{ heading_title }}</h1>*/
/*           <ul class="list-unstyled">*/
/*             {% if manufacturer %}*/
/*             <li>{{ text_brand }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li>{{ text_model }} {{ model }}</li>*/
/* <li>{{ text_upc }} {{ upc }}</li>   */
/* 		*/
/*             {% if weight %}*/
/*             <li>{{ text_weight }} {{ weight }} {{ weight_class }}</li>*/
/*             {% endif %} */
/*             {% if reward %}*/
/*             <li>{{ text_reward }} {{ reward }}</li>*/
/*             {% endif %}*/
/*             <li>{{ text_stock }} {{ stock }}</li>*/
/* */
/*                             {% if wk_custome_field_wkcustomfields %}*/
/*                                      {% if customFields is not empty %}*/
/*                                       {% for key, value in customFields %}*/
/*                                             <li>{{ value['fieldName'] ~ ':' ~ value['fieldValue'] }}</li>*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                             {% endif %}*/
/*                               */
/*           </ul>*/
/* */
/*                         {% if delivery_date is defined and delivery_date %}*/
/*                             <ul class="list-unstyled">*/
/*                               <li>{{ text_delivery_date  ~ ' : ' ~ delivery_date }}</li>*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     */
/*           {% if price %}*/
/*           <ul class="list-unstyled">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h2 class="price">{{ price }}</h2>*/
/*             </li>*/
/*             {% else %}*/
/*             <li><span style="text-decoration: line-through;">{{ price }}</span></li>*/
/*             <li>*/
/*               <h2 class="price">{{ special }}</h2>*/
/*             </li>*/
/*             {% endif %}*/
/*             {% if tax %}*/
/*             <li>{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li>{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             <li>*/
/*               <hr>*/
/*             </li>*/
/*             {% for discount in discounts %}*/
/*             <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <div class="btn-group">*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i></button>*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*           </div>*/
/*           <div id="product"> {% if options %}*/
/*             <hr>*/
/*             <h3>{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*               <div class="row">*/
/*                 <div class="col-xs-6">*/
/*                   <div class="input-group number-spinner">*/
/*                     <span class="input-group-btn">*/
/*                       <button class="btn btn-default" data-dir="dwn"><i class="fa fa-minus"></i></button>*/
/*                     </span>*/
/*                     <input type="text" name="quantity" value="{{ minimum }}" id="input-quantity" class="form-control text-center" />*/
/*                     <span class="input-group-btn">*/
/*                       <button class="btn btn-default" data-dir="up"><i class="fa fa-plus"></i></button>*/
/*                     </span>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-xs-6"><button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button></div>*/
/*               </div>*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}</div>*/
/*           {% if review_status %}*/
/*           <div class="rating">*/
/*             <p>{% for i in 1..5 %}*/
/*               {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*               {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*             <hr>*/
/*             <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}">*/
/*               <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>*/
/*               <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a>*/
/*               <a class="addthis_counter addthis_pill_style"></a>*/
/*               <!-- Custom part BEGIN -->*/
/*               {% if product_qrcode %}*/
/*               <button type="button" id="show-qrcode" class="btn btn-primary" style="width:120px; padding: 0px; display: inline-block; float: right;">{{ text_qrcode }}</button>*/
/*               {% endif %}*/
/*               <!-- Custom part END -->*/
/*             </div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*             <!-- AddThis Button END --> */
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if product_qrcode %}*/
/*           <div id="product-qrcode" class="hidden" style="float: right;">*/
/*             <img src="{{ product_qrcode }}" alt="">*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*         </div>*/
/*       </div>*/
/* */
/* */
/* */
/*       <ul class="nav nav-tabs">*/
/*         <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/* */
/* 			<!--xml-->*/
/* 			{% if customtabs %}*/
/* 			{% for key, customtab in customtabs %}*/
/* 				<li><a href="#tabcustom{{ key }}" data-toggle="tab">{{ customtab.title }}</a></li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/* 			<!--xml-->*/
/* 			*/
/*         {% if attribute_groups %}*/
/*         <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*         {% endif %}*/
/*         {% if review_status %}*/
/*         <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/* */
/*       <div class="row">*/
/*         <div class="col-sm-12">*/
/*           <div class="tab-content">*/
/* */
/* 			<!--xml-->*/
/* 			{% if customtabs %}*/
/*             {% for key, customtab in customtabs %}*/
/* 				<div class="tab-pane"id="tabcustom{{ key }}">*/
/* 					{{ customtab.description }}*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 			{% endif %}*/
/* 			<!--xml-->*/
/* 			*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>          */
/*         </div>*/
/*       </div>*/
/* */
/*       {% if products %}*/
/*       <h3>{{ text_related }}</h3>*/
/*       <div class="row"> {% set i = 0 %}*/
/*         {% for product in products %}*/
/*         {% if column_left and column_right %}*/
/*         {% set class = 'col-xs-8 col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-xs-6 col-md-4' %}*/
/*         {% else %}*/
/*         {% set class = 'col-xs-6 col-sm-3' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class="product-thumb transition">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div class="caption">*/
/*               <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*               <p>{{ product.description }}</p>*/
/*               {% if product.rating %}*/
/*               <div class="rating"> {% for j in 1..5 %}*/
/*                 {% if product.rating < j %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> {% endif %}*/
/*                 {% endfor %} </div>*/
/*               {% endif %}*/
/*               {% if product.price %}*/
/*               <p class="price"> {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                 {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*               {% endif %} </div>*/
/*             <div class="button-group">*/
/*               <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span> <i class="fa fa-shopping-cart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% if column_left and column_right and (i + 1) % 2 == 0 %}*/
/*         <div class="clearfix visible-md visible-sm"></div>*/
/*         {% elseif column_left or column_right and (i + 1) % 3 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% elseif (i + 1) % 4 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% endif %}*/
/*         {% set i = i + 1 %}*/
/*         {% endfor %} </div>*/
/*         {% endif %}*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
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
/* 					$('.text-danger').remove();*/
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
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#show-qrcode').on('click', function(){*/
/*   $('#product-qrcode').toggleClass('hidden');*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* */
/* <script type="text/javascript"><!--*/
/* $(document).on('click', '.number-spinner button', function () {    */
/*   var btn = $(this),*/
/*     oldValue = btn.closest('.number-spinner').find('input').val().trim(),*/
/*     newVal = 1;*/
/*       */
/*   if (btn.attr('data-dir') == 'up') {*/
/*     newVal = parseInt(oldValue) + 1;*/
/*   } else {*/
/*     if (oldValue > 1) {*/
/*       newVal = parseInt(oldValue) - 1;*/
/*     } else {*/
/*       newVal = 1;*/
/*     }*/
/*   }*/
/*   btn.closest('.number-spinner').find('input').val(newVal);*/
/* });*/
/* //--></script>*/
/* {{ footer }} */
/* */
