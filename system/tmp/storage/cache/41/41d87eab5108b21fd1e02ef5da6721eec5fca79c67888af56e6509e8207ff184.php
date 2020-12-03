<?php

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_7870f0fa35e6488df98d078ae1823d1266b50ba1934e3500251040bb984b3fd6 extends Twig_Template
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
        echo "<!--
<div class=\"swiper-viewport\">
  <div id=\"carousel";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
  </div>
  <div class=\"swiper-pagination carousel";
        // line 8
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
-->

<div class=\"col-xs-12 text-center\" style=\"background-color: white; margin-bottom: 20px;\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 18
            echo "  <div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-2\" style=\"padding: 0px; margin-bottom: 30px;\">
    ";
            // line 19
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 20
                echo "      <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\">
        <img src=\"";
                // line 21
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive center-block\" />
        ";
                // line 23
                echo "      </a>
    ";
            } else {
                // line 25
                echo "      <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive center-block\" />
      ";
                // line 27
                echo "    ";
            }
            // line 28
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>

<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 33
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 5,
\tpagination: '.carousel";
        // line 36
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
\tautoplay: 2500,
\tloop: true
});
--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  116 => 33,  111 => 30,  104 => 28,  101 => 27,  94 => 25,  90 => 23,  84 => 21,  79 => 20,  77 => 19,  74 => 18,  70 => 17,  58 => 8,  54 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!--*/
/* <div class="swiper-viewport">*/
/*   <div id="carousel{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">{% for banner in banners %}*/
/*       <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}</div>*/
/*   </div>*/
/*   <div class="swiper-pagination carousel{{ module }}"></div>*/
/*   <div class="swiper-pager">*/
/*     <div class="swiper-button-next"></div>*/
/*     <div class="swiper-button-prev"></div>*/
/*   </div>*/
/* </div>*/
/* -->*/
/* */
/* <div class="col-xs-12 text-center" style="background-color: white; margin-bottom: 20px;">*/
/*   {% for banner in banners %}*/
/*   <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2" style="padding: 0px; margin-bottom: 30px;">*/
/*     {% if banner.link %}*/
/*       <a href="{{ banner.link }}">*/
/*         <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive center-block" />*/
/*         {# {{ banner.title }} #}*/
/*       </a>*/
/*     {% else %}*/
/*       <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive center-block" />*/
/*       {# <h4>{{ banner.title }}</h4> #}*/
/*     {% endif %}*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#carousel{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 5,*/
/* 	pagination: '.carousel{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	nextButton: '.swiper-button-next',*/
/*     prevButton: '.swiper-button-prev',*/
/* 	autoplay: 2500,*/
/* 	loop: true*/
/* });*/
/* --></script>*/
