<?php

/* extension/fraud/fraudlabspro_info.twig */
class __TwigTemplate_73dbf7d781971428950385d6d6792f38c6eac195808064e8c1266122275fc2f8 extends Twig_Template
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
        echo "<table class=\"table table-bordered\">
  <tr>
    <td style=\"text-align:center; background-color:#ab1b1c; border:1px solid #ab1b1c;\" colspan=\"2\"><img src=\"https://www.fraudlabspro.com/images/logo_200.png\" alt=\"FraudLabs Pro\" /></td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 6
        echo (isset($context["help_transaction_id"]) ? $context["help_transaction_id"] : null);
        echo "\">";
        echo (isset($context["text_transaction_id"]) ? $context["text_transaction_id"] : null);
        echo "</span></td>
    <td><a href=\"https://www.fraudlabspro.com/merchant/transaction-details/";
        // line 7
        echo (isset($context["flp_id"]) ? $context["flp_id"] : null);
        echo "/\" target=\"_blank\">";
        echo (isset($context["flp_id"]) ? $context["flp_id"] : null);
        echo "</a></td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 10
        echo (isset($context["help_score"]) ? $context["help_score"] : null);
        echo "\">";
        echo (isset($context["text_score"]) ? $context["text_score"] : null);
        echo "</span></td>
    <td><img class=\"img-responsive\" alt=\"\" src=\"//fraudlabspro.hexa-soft.com/images/fraudscore/fraudlabsproscore";
        // line 11
        echo (isset($context["flp_score"]) ? $context["flp_score"] : null);
        echo ".png\" /></td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 14
        echo (isset($context["help_status"]) ? $context["help_status"] : null);
        echo "\">";
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</span></td>
    <td id=\"flp_status\"><span style=\"font-weight:bold; color: ";
        // line 15
        if ((twig_lower_filter($this->env, (isset($context["flp_status"]) ? $context["flp_status"] : null)) == "approve")) {
            echo " #5cb85c ";
        } elseif ((twig_lower_filter($this->env, (isset($context["flp_status"]) ? $context["flp_status"] : null)) == "review")) {
            echo " #f0ad4e ";
        } else {
            echo " #d9534f ";
        }
        echo ";\">";
        echo (isset($context["flp_status"]) ? $context["flp_status"] : null);
        echo "</span></td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 18
        echo (isset($context["help_ip_address"]) ? $context["help_ip_address"] : null);
        echo "\">";
        echo (isset($context["text_ip_address"]) ? $context["text_ip_address"] : null);
        echo "</span></td>
    <td>";
        // line 19
        echo (isset($context["flp_ip_address"]) ? $context["flp_ip_address"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 22
        echo (isset($context["help_ip_net_speed"]) ? $context["help_ip_net_speed"] : null);
        echo "\">";
        echo (isset($context["text_ip_net_speed"]) ? $context["text_ip_net_speed"] : null);
        echo "</span></td>
    <td>";
        // line 23
        echo (isset($context["flp_ip_net_speed"]) ? $context["flp_ip_net_speed"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 26
        echo (isset($context["help_ip_isp_name"]) ? $context["help_ip_isp_name"] : null);
        echo "\">";
        echo (isset($context["text_ip_isp_name"]) ? $context["text_ip_isp_name"] : null);
        echo "</span></td>
    <td>";
        // line 27
        echo (isset($context["flp_ip_isp_name"]) ? $context["flp_ip_isp_name"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 30
        echo (isset($context["help_ip_usage_type"]) ? $context["help_ip_usage_type"] : null);
        echo "\">";
        echo (isset($context["text_ip_usage_type"]) ? $context["text_ip_usage_type"] : null);
        echo "</span></td>
    <td>";
        // line 31
        echo (isset($context["flp_ip_usage_type"]) ? $context["flp_ip_usage_type"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 34
        echo (isset($context["help_ip_domain"]) ? $context["help_ip_domain"] : null);
        echo "\">";
        echo (isset($context["text_ip_domain"]) ? $context["text_ip_domain"] : null);
        echo "</span></td>
    <td>";
        // line 35
        echo (isset($context["flp_ip_domain"]) ? $context["flp_ip_domain"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 38
        echo (isset($context["help_ip_time_zone"]) ? $context["help_ip_time_zone"] : null);
        echo "\">";
        echo (isset($context["text_ip_time_zone"]) ? $context["text_ip_time_zone"] : null);
        echo "</span></td>
    <td>";
        // line 39
        echo (isset($context["flp_ip_time_zone"]) ? $context["flp_ip_time_zone"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 42
        echo (isset($context["help_ip_location"]) ? $context["help_ip_location"] : null);
        echo "\">";
        echo (isset($context["text_ip_location"]) ? $context["text_ip_location"] : null);
        echo "</span></td>
    <td>";
        // line 43
        echo (isset($context["flp_ip_location"]) ? $context["flp_ip_location"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 46
        echo (isset($context["help_ip_distance"]) ? $context["help_ip_distance"] : null);
        echo "\">";
        echo (isset($context["text_ip_distance"]) ? $context["text_ip_distance"] : null);
        echo "</span></td>
    <td>";
        // line 47
        echo (isset($context["flp_ip_distance"]) ? $context["flp_ip_distance"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 50
        echo (isset($context["help_ip_latitude"]) ? $context["help_ip_latitude"] : null);
        echo "\">";
        echo (isset($context["text_ip_latitude"]) ? $context["text_ip_latitude"] : null);
        echo "</span></td>
    <td>";
        // line 51
        echo (isset($context["flp_ip_latitude"]) ? $context["flp_ip_latitude"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 54
        echo (isset($context["help_ip_longitude"]) ? $context["help_ip_longitude"] : null);
        echo "\">";
        echo (isset($context["text_ip_longitude"]) ? $context["text_ip_longitude"] : null);
        echo "</span></td>
    <td>";
        // line 55
        echo (isset($context["flp_ip_longitude"]) ? $context["flp_ip_longitude"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 58
        echo (isset($context["help_risk_country"]) ? $context["help_risk_country"] : null);
        echo "\">";
        echo (isset($context["text_risk_country"]) ? $context["text_risk_country"] : null);
        echo "</span></td>
    <td>";
        // line 59
        echo (isset($context["flp_risk_country"]) ? $context["flp_risk_country"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 62
        echo (isset($context["help_free_email"]) ? $context["help_free_email"] : null);
        echo "\">";
        echo (isset($context["text_free_email"]) ? $context["text_free_email"] : null);
        echo "</span></td>
    <td>";
        // line 63
        echo (isset($context["flp_free_email"]) ? $context["flp_free_email"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 66
        echo (isset($context["help_ship_forward"]) ? $context["help_ship_forward"] : null);
        echo "\">";
        echo (isset($context["text_ship_forward"]) ? $context["text_ship_forward"] : null);
        echo "</span></td>
    <td>";
        // line 67
        echo (isset($context["flp_ship_forward"]) ? $context["flp_ship_forward"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 70
        echo (isset($context["help_using_proxy"]) ? $context["help_using_proxy"] : null);
        echo "\">";
        echo (isset($context["text_using_proxy"]) ? $context["text_using_proxy"] : null);
        echo "</span></td>
    <td>";
        // line 71
        echo (isset($context["flp_using_proxy"]) ? $context["flp_using_proxy"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 74
        echo (isset($context["help_bin_found"]) ? $context["help_bin_found"] : null);
        echo "\">";
        echo (isset($context["text_bin_found"]) ? $context["text_bin_found"] : null);
        echo "</span></td>
    <td>";
        // line 75
        echo (isset($context["flp_bin_found"]) ? $context["flp_bin_found"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 78
        echo (isset($context["help_email_blacklist"]) ? $context["help_email_blacklist"] : null);
        echo "\">";
        echo (isset($context["text_email_blacklist"]) ? $context["text_email_blacklist"] : null);
        echo "</span></td>
    <td>";
        // line 79
        echo (isset($context["flp_email_blacklist"]) ? $context["flp_email_blacklist"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 82
        echo (isset($context["help_credit_card_blacklist"]) ? $context["help_credit_card_blacklist"] : null);
        echo "\">";
        echo (isset($context["text_credit_card_blacklist"]) ? $context["text_credit_card_blacklist"] : null);
        echo "</span></td>
    <td>";
        // line 83
        echo (isset($context["flp_credit_card_blacklist"]) ? $context["flp_credit_card_blacklist"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 86
        echo (isset($context["help_credits"]) ? $context["help_credits"] : null);
        echo "\">";
        echo (isset($context["text_credits"]) ? $context["text_credits"] : null);
        echo "</span></td>
    <td>";
        // line 87
        echo (isset($context["flp_credits"]) ? $context["flp_credits"] : null);
        echo " ";
        echo (isset($context["text_flp_upgrade"]) ? $context["text_flp_upgrade"] : null);
        echo "</td>
  </tr>
  <tr>
    <td><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 90
        echo (isset($context["help_message"]) ? $context["help_message"] : null);
        echo "\">";
        echo (isset($context["text_message"]) ? $context["text_message"] : null);
        echo "</span></td>
    <td>";
        // line 91
        echo (isset($context["flp_message"]) ? $context["flp_message"] : null);
        echo "</td>
  </tr>
  
  
  ";
        // line 95
        if (((isset($context["flp_status"]) ? $context["flp_status"] : null) == "review")) {
            // line 96
            echo "  <tr style=\"background-color: #eee;\">
    <td id=\"flp_action\" colspan=\"2\">
      <form id=\"review-action\" method=\"post\">
\t<div align=\"center\">
\t  <button type=\"button\" id=\"button-flp-approve\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i> Approve</button>
\t  <button type=\"button\" id=\"button-flp-reject\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> Reject</button>
\t</div>
\t<input type=\"hidden\" id=\"flp_id\" name=\"flp_id\" value=\"";
            // line 103
            echo (isset($context["flp_id"]) ? $context["flp_id"] : null);
            echo "\" />
\t<input type=\"hidden\" id=\"new_status\" name=\"new_status\" value=\"\" />
      </form>
      
      <script>
\t\$(document).ready(function(){
\t\t\$(\"#button-flp-approve\").click(function(){
\t\t\t\$(\"#new_status\").val(\"APPROVE\");
\t\t\t\$(\"#review-action\").submit();
\t\t});
\t});
\t
\t\$(document).ready(function(){
\t\t\$(\"#button-flp-reject\").click(function(){
\t\t\t\$(\"#new_status\").val(\"REJECT\");
\t\t\t\$(\"#review-action\").submit();
\t\t});
\t});
      </script>
    </td>
  </tr>
  ";
        }
        // line 125
        echo "</table>
<div>
\t";
        // line 127
        echo (isset($context["text_flp_merchant_area"]) ? $context["text_flp_merchant_area"] : null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "extension/fraud/fraudlabspro_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 127,  339 => 125,  314 => 103,  305 => 96,  303 => 95,  296 => 91,  290 => 90,  282 => 87,  276 => 86,  270 => 83,  264 => 82,  258 => 79,  252 => 78,  246 => 75,  240 => 74,  234 => 71,  228 => 70,  222 => 67,  216 => 66,  210 => 63,  204 => 62,  198 => 59,  192 => 58,  186 => 55,  180 => 54,  174 => 51,  168 => 50,  162 => 47,  156 => 46,  150 => 43,  144 => 42,  138 => 39,  132 => 38,  126 => 35,  120 => 34,  114 => 31,  108 => 30,  102 => 27,  96 => 26,  90 => 23,  84 => 22,  78 => 19,  72 => 18,  58 => 15,  52 => 14,  46 => 11,  40 => 10,  32 => 7,  26 => 6,  19 => 1,);
    }
}
/* <table class="table table-bordered">*/
/*   <tr>*/
/*     <td style="text-align:center; background-color:#ab1b1c; border:1px solid #ab1b1c;" colspan="2"><img src="https://www.fraudlabspro.com/images/logo_200.png" alt="FraudLabs Pro" /></td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_transaction_id }}">{{ text_transaction_id }}</span></td>*/
/*     <td><a href="https://www.fraudlabspro.com/merchant/transaction-details/{{ flp_id }}/" target="_blank">{{ flp_id }}</a></td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_score }}">{{ text_score }}</span></td>*/
/*     <td><img class="img-responsive" alt="" src="//fraudlabspro.hexa-soft.com/images/fraudscore/fraudlabsproscore{{ flp_score }}.png" /></td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_status }}">{{ text_status }}</span></td>*/
/*     <td id="flp_status"><span style="font-weight:bold; color: {% if flp_status|lower == 'approve' %} #5cb85c {% elseif flp_status|lower == 'review' %} #f0ad4e {% else %} #d9534f {% endif %};">{{ flp_status }}</span></td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_address }}">{{ text_ip_address }}</span></td>*/
/*     <td>{{ flp_ip_address }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_net_speed }}">{{ text_ip_net_speed }}</span></td>*/
/*     <td>{{ flp_ip_net_speed }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_isp_name }}">{{ text_ip_isp_name }}</span></td>*/
/*     <td>{{ flp_ip_isp_name }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_usage_type }}">{{ text_ip_usage_type }}</span></td>*/
/*     <td>{{ flp_ip_usage_type }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_domain }}">{{ text_ip_domain }}</span></td>*/
/*     <td>{{ flp_ip_domain }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_time_zone }}">{{ text_ip_time_zone }}</span></td>*/
/*     <td>{{ flp_ip_time_zone }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_location }}">{{ text_ip_location }}</span></td>*/
/*     <td>{{ flp_ip_location }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_distance }}">{{ text_ip_distance }}</span></td>*/
/*     <td>{{ flp_ip_distance }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_latitude }}">{{ text_ip_latitude }}</span></td>*/
/*     <td>{{ flp_ip_latitude }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ip_longitude }}">{{ text_ip_longitude }}</span></td>*/
/*     <td>{{ flp_ip_longitude }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_risk_country }}">{{ text_risk_country }}</span></td>*/
/*     <td>{{ flp_risk_country }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_free_email }}">{{ text_free_email }}</span></td>*/
/*     <td>{{ flp_free_email }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_ship_forward }}">{{ text_ship_forward }}</span></td>*/
/*     <td>{{ flp_ship_forward }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_using_proxy }}">{{ text_using_proxy }}</span></td>*/
/*     <td>{{ flp_using_proxy }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_bin_found }}">{{ text_bin_found }}</span></td>*/
/*     <td>{{ flp_bin_found }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_email_blacklist }}">{{ text_email_blacklist }}</span></td>*/
/*     <td>{{ flp_email_blacklist }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_credit_card_blacklist }}">{{ text_credit_card_blacklist }}</span></td>*/
/*     <td>{{ flp_credit_card_blacklist }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_credits }}">{{ text_credits }}</span></td>*/
/*     <td>{{ flp_credits }} {{ text_flp_upgrade }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_message }}">{{ text_message }}</span></td>*/
/*     <td>{{ flp_message }}</td>*/
/*   </tr>*/
/*   */
/*   */
/*   {% if flp_status == 'review' %}*/
/*   <tr style="background-color: #eee;">*/
/*     <td id="flp_action" colspan="2">*/
/*       <form id="review-action" method="post">*/
/* 	<div align="center">*/
/* 	  <button type="button" id="button-flp-approve" class="btn btn-primary"><i class="fa fa-check"></i> Approve</button>*/
/* 	  <button type="button" id="button-flp-reject" class="btn btn-danger"><i class="fa fa-remove"></i> Reject</button>*/
/* 	</div>*/
/* 	<input type="hidden" id="flp_id" name="flp_id" value="{{ flp_id }}" />*/
/* 	<input type="hidden" id="new_status" name="new_status" value="" />*/
/*       </form>*/
/*       */
/*       <script>*/
/* 	$(document).ready(function(){*/
/* 		$("#button-flp-approve").click(function(){*/
/* 			$("#new_status").val("APPROVE");*/
/* 			$("#review-action").submit();*/
/* 		});*/
/* 	});*/
/* 	*/
/* 	$(document).ready(function(){*/
/* 		$("#button-flp-reject").click(function(){*/
/* 			$("#new_status").val("REJECT");*/
/* 			$("#review-action").submit();*/
/* 		});*/
/* 	});*/
/*       </script>*/
/*     </td>*/
/*   </tr>*/
/*   {% endif %}*/
/* </table>*/
/* <div>*/
/* 	{{ text_flp_merchant_area }}*/
/* </div>*/
