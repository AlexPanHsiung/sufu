<?php

/* simplica/template/common/header.twig */
class __TwigTemplate_5cd8b869c971580e6c28da1b64916290d89bc157081c49c29c633286aff3403b extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html xmlns=\"http://www.w3.org/1999/xhtml\"
      xmlns:fb=\"http://ogp.me/ns/fb#\"
      dir=\"";
        // line 8
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\"
      lang=\"";
        // line 9
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 15
        echo (isset($context["title"]) ? $context["title"] : null);
        echo " - ";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</title>
<base href=\"";
        // line 16
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 20
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 23
        echo "
";
        // line 24
        if ((isset($context["fbThumb"]) ? $context["fbThumb"] : null)) {
            // line 25
            echo "<meta property=\"og:image\" content=\"";
            echo $this->getAttribute((isset($context["fbThumb"]) ? $context["fbThumb"] : null), "fbThumbSrc", array());
            echo "\" />
<meta property=\"og:image:width\" content=\"";
            // line 26
            echo $this->getAttribute((isset($context["fbThumb"]) ? $context["fbThumb"] : null), "fbThumbWidth", array());
            echo "\" />
<meta property=\"og:image:height\" content=\"";
            // line 27
            echo $this->getAttribute((isset($context["fbThumb"]) ? $context["fbThumb"] : null), "fbThumbHeight", array());
            echo "\" />
";
        }
        // line 29
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"rel=\"stylesheet\">
<link href=\"catalog/view/theme/simplica/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 37
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 40
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 44
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 47
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '287795112416650');
  fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=287795112416650&ev=PageView&noscript=1\"/></noscript>
<!-- End Facebook Pixel Code -->

        <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
      
</head>
<body>

          ";
        // line 70
        if ((array_key_exists("notification", $context) && (isset($context["notification"]) ? $context["notification"] : null))) {
            echo " ";
            echo (isset($context["notification"]) ? $context["notification"] : null);
            echo " ";
        }
        // line 71
        echo "      
<nav id=\"top\">
  <div class=\"container\">
    <div class=\"visible-xs\" style=\"display: inline-block; padding-top: 6px;\">
      <a href=\"index.php?route=product/search\" style=\"color: #eee;\"><i class=\"fa fa-search\"></i></a>
      ";
        // line 76
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 77
            echo "      <a href=\"";
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" style=\"float: right; color: white;\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a>
      ";
        }
        // line 79
        echo "    </div>
    ";
        // line 80
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    ";
        // line 81
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right hidden-xs\" style=\"display: inline-block;\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 84
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 85
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 87
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 88
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 89
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 90
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 91
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 92
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 94
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 95
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_be_affiliate"]) ? $context["text_be_affiliate"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 96
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 98
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 100
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 101
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 102
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<nav class=\"sufu-nav col-xs-12 visible-xs\">
  <div class=\"container row\">
    <a class=\"col-xs-1 text-center\" href=\"\" style=\"width: 20%; padding: 0px;\">
      <i class=\"material-icons md-24\" style=\"margin: top;\">
        home
      </i>
      </br>
      首頁
    </a>
    <a class=\"col-xs-1 text-center\" href=\"index.php?route=product/special\" style=\"width: 20%; padding: 0px;\">
      <i class=\"material-icons md-24\">
        equalizer
      </i>
      </br>
      促銷商品
    </a>
    <a class=\"col-xs-1 text-center\" href=\"";
        // line 123
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" style=\"width: 20%; padding: 0px;\">
      <i class=\"material-icons md-24\">
        favorite_border
      </i>
      </br>
      收藏
    </a>
    <a class=\"col-xs-1 text-center\" href=\"";
        // line 130
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" style=\"width: 20%; padding: 0px;\">
      <i class=\"material-icons md-24\">
        shopping_cart
      </i>
      </br>
      購物車
    </a>
    <a class=\"col-xs-1 text-center\" href=\"";
        // line 137
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" style=\"width: 20%; padding: 0px;\">
      <i class=\"material-icons md-24\">
        account_circle
      </i>
      </br>
      會員中心
    </a>
  </div>
</nav>
<div id=\"return-top\">
  <a><i class=\"material-icons\" style=\"font-size: 40px;\">arrow_upward</i></a>
</div>
<header>
  <div class=\"container\">
    <div class=\"row align-end\">
      <div class=\"col-sm-3 col-xs-12\" style=\"margin-top: 65px;\">
        <div id=\"logo\">";
        // line 153
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" style=\"width: 240px;\" /></a>";
        } else {
            // line 154
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 155
        echo "</div>
      </div>
      <div class=\"col-sm-3 col-xs-12 hidden-xs\">";
        // line 157
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-sm-3 col-xs-6\">
        <div class=\"btn-group btn-block\">
          <a id=\"be_affiliate\" class=\"text-center\" href=\"";
        // line 160
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">
            <img src=\"image/catalog/HTML/295x70-join-affiliate.jpg\" width=\"100%\" style=\"padding-top: 15px; padding-bottom: 15px;\"/>
          </a>
        </div>
      </div>
      <div class=\"col-sm-3 col-xs-6\">";
        // line 165
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 169
        echo (isset($context["menu"]) ? $context["menu"] : null);
    }

    public function getTemplateName()
    {
        return "simplica/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 169,  418 => 165,  410 => 160,  404 => 157,  400 => 155,  392 => 154,  380 => 153,  361 => 137,  351 => 130,  341 => 123,  313 => 102,  305 => 101,  297 => 100,  293 => 98,  286 => 96,  280 => 95,  273 => 94,  266 => 92,  260 => 91,  254 => 90,  248 => 89,  241 => 88,  239 => 87,  230 => 85,  224 => 84,  218 => 81,  214 => 80,  211 => 79,  203 => 77,  201 => 76,  194 => 71,  188 => 70,  165 => 49,  157 => 47,  153 => 46,  142 => 44,  138 => 43,  135 => 42,  126 => 40,  122 => 39,  109 => 37,  105 => 36,  96 => 29,  91 => 27,  87 => 26,  82 => 25,  80 => 24,  77 => 23,  71 => 21,  69 => 20,  63 => 18,  61 => 17,  57 => 16,  51 => 15,  42 => 9,  38 => 8,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html xmlns="http://www.w3.org/1999/xhtml"*/
/*       xmlns:fb="http://ogp.me/ns/fb#"*/
/*       dir="{{ direction }}"*/
/*       lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }} - {{ name }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* */
/* {% if fbThumb %}*/
/* <meta property="og:image" content="{{ fbThumb.fbThumbSrc }}" />*/
/* <meta property="og:image:width" content="{{ fbThumb.fbThumbWidth }}" />*/
/* <meta property="og:image:height" content="{{ fbThumb.fbThumbHeight }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">*/
/* <link href="catalog/view/theme/simplica/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <!-- Facebook Pixel Code -->*/
/* <script>*/
/*   !function(f,b,e,v,n,t,s)*/
/*   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?*/
/*   n.callMethod.apply(n,arguments):n.queue.push(arguments)};*/
/*   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';*/
/*   n.queue=[];t=b.createElement(e);t.async=!0;*/
/*   t.src=v;s=b.getElementsByTagName(e)[0];*/
/*   s.parentNode.insertBefore(t,s)}(window, document,'script',*/
/*   'https://connect.facebook.net/en_US/fbevents.js');*/
/*   fbq('init', '287795112416650');*/
/*   fbq('track', 'PageView');*/
/* </script>*/
/* <noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=287795112416650&ev=PageView&noscript=1"/></noscript>*/
/* <!-- End Facebook Pixel Code -->*/
/* */
/*         <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/*       */
/* </head>*/
/* <body>*/
/* */
/*           {% if notification is defined and notification %} {{ notification }} {% endif %}*/
/*       */
/* <nav id="top">*/
/*   <div class="container">*/
/*     <div class="visible-xs" style="display: inline-block; padding-top: 6px;">*/
/*       <a href="index.php?route=product/search" style="color: #eee;"><i class="fa fa-search"></i></a>*/
/*       {% if logged %}*/
/*       <a href="{{ logout }}" style="float: right; color: white;">{{ text_logout }}</a>*/
/*       {% endif %}*/
/*     </div>*/
/*     {{ currency }}*/
/*     {{ language }}*/
/*     <div id="top-links" class="nav pull-right hidden-xs" style="display: inline-block;">*/
/*       <ul class="list-inline">*/
/*         <li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="hidden-xs">{{ telephone }}</span></li>*/
/*         <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ affiliate }}">{{ text_be_affiliate }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs">{{ text_wishlist }}</span></a></li>*/
/*         <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">{{ text_shopping_cart }}</span></a></li>*/
/*         <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs">{{ text_checkout }}</span></a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <nav class="sufu-nav col-xs-12 visible-xs">*/
/*   <div class="container row">*/
/*     <a class="col-xs-1 text-center" href="" style="width: 20%; padding: 0px;">*/
/*       <i class="material-icons md-24" style="margin: top;">*/
/*         home*/
/*       </i>*/
/*       </br>*/
/*       首頁*/
/*     </a>*/
/*     <a class="col-xs-1 text-center" href="index.php?route=product/special" style="width: 20%; padding: 0px;">*/
/*       <i class="material-icons md-24">*/
/*         equalizer*/
/*       </i>*/
/*       </br>*/
/*       促銷商品*/
/*     </a>*/
/*     <a class="col-xs-1 text-center" href="{{ wishlist }}" style="width: 20%; padding: 0px;">*/
/*       <i class="material-icons md-24">*/
/*         favorite_border*/
/*       </i>*/
/*       </br>*/
/*       收藏*/
/*     </a>*/
/*     <a class="col-xs-1 text-center" href="{{ shopping_cart }}" style="width: 20%; padding: 0px;">*/
/*       <i class="material-icons md-24">*/
/*         shopping_cart*/
/*       </i>*/
/*       </br>*/
/*       購物車*/
/*     </a>*/
/*     <a class="col-xs-1 text-center" href="{{ account }}" style="width: 20%; padding: 0px;">*/
/*       <i class="material-icons md-24">*/
/*         account_circle*/
/*       </i>*/
/*       </br>*/
/*       會員中心*/
/*     </a>*/
/*   </div>*/
/* </nav>*/
/* <div id="return-top">*/
/*   <a><i class="material-icons" style="font-size: 40px;">arrow_upward</i></a>*/
/* </div>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row align-end">*/
/*       <div class="col-sm-3 col-xs-12" style="margin-top: 65px;">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" style="width: 240px;" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-sm-3 col-xs-12 hidden-xs">{{ search }}</div>*/
/*       <div class="col-sm-3 col-xs-6">*/
/*         <div class="btn-group btn-block">*/
/*           <a id="be_affiliate" class="text-center" href="{{ affiliate }}">*/
/*             <img src="image/catalog/HTML/295x70-join-affiliate.jpg" width="100%" style="padding-top: 15px; padding-bottom: 15px;"/>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-3 col-xs-6">{{ cart }}</div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
