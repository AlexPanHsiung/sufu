<?php

/* sale/return_history.twig */
class __TwigTemplate_8355f5281389ec4cf58676372fe18138acce3baabccc0087781fa8d35e15324a extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\">";
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "</div>
";
        }
        // line 4
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 5
            echo "<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 9
        echo "<table class=\"table table-bordered\">
  <thead>
    <tr>
      <td class=\"text-left\">";
        // line 12
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 13
        echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 14
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 15
        echo (isset($context["column_notify"]) ? $context["column_notify"] : null);
        echo "</td>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 21
                echo "    <tr>
      <td class=\"text-left\">";
                // line 22
                echo $this->getAttribute($context["history"], "date_added", array());
                echo "</td>
      <td class=\"text-left\">";
                // line 23
                echo $this->getAttribute($context["history"], "comment", array());
                echo "</td>
      <td class=\"text-left\">";
                // line 24
                echo $this->getAttribute($context["history"], "status", array());
                echo "</td>
      <td class=\"text-left\">";
                // line 25
                echo $this->getAttribute($context["history"], "notify", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    <tr>
      <td class=\"text-center\" colspan=\"4\">";
            // line 30
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
    </tr>
    ";
        }
        // line 33
        echo "  </tbody>
</table>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 36
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 37
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sale/return_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  109 => 36,  104 => 33,  98 => 30,  95 => 29,  92 => 28,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  68 => 21,  63 => 20,  61 => 19,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  37 => 9,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if error %}*/
/* <div class="alert alert-danger alert-dismissible">{{ error }}</div>*/
/* {% endif %}*/
/* {% if success %}*/
/* <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* </div>*/
/* {% endif %}*/
/* <table class="table table-bordered">*/
/*   <thead>*/
/*     <tr>*/
/*       <td class="text-left">{{ column_date_added }}</td>*/
/*       <td class="text-left">{{ column_comment }}</td>*/
/*       <td class="text-left">{{ column_status }}</td>*/
/*       <td class="text-left">{{ column_notify }}</td>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% if histories %}*/
/*     {% for history in histories %}*/
/*     <tr>*/
/*       <td class="text-left">{{ history.date_added }}</td>*/
/*       <td class="text-left">{{ history.comment }}</td>*/
/*       <td class="text-left">{{ history.status }}</td>*/
/*       <td class="text-left">{{ history.notify }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*     {% else %}*/
/*     <tr>*/
/*       <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*     </tr>*/
/*     {% endif %}*/
/*   </tbody>*/
/* </table>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* */
