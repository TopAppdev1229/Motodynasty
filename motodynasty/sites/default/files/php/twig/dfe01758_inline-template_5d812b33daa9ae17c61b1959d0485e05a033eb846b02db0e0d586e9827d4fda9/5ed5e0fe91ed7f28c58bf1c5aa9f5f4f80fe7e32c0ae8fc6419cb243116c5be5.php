<?php

/* {# inline_template_start #}<div class="product_image_area">
    <div class="product_image_box">{{ field_image }}</div>
    <div class="product_name">{{ title }}</div>
</div>
<div class="product_content">
    <div class="price-wrap">
        <div class="old_price">$<span>{{ field_old_price }}</span></div>
        <div class="shop_price">$<span>{{  field_new_price }}</span></div>
    </div>

    <div class="buttons">
        <a href="#" class="button_buy" >Buy</a>
    </div>
</div> */
class __TwigTemplate_0e9870347257be3c90733e369925e205280038c1ceff5b52d2d786d1124394d4 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"product_image_area\">
    <div class=\"product_image_box\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "</div>
    <div class=\"product_name\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
</div>
<div class=\"product_content\">
    <div class=\"price-wrap\">
        <div class=\"old_price\">\$<span>";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_old_price"]) ? $context["field_old_price"] : null), "html", null, true));
        echo "</span></div>
        <div class=\"shop_price\">\$<span>";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_new_price"]) ? $context["field_new_price"] : null), "html", null, true));
        echo "</span></div>
    </div>

    <div class=\"buttons\">
        <a href=\"#\" class=\"button_buy\" >Buy</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"product_image_area\">
    <div class=\"product_image_box\">{{ field_image }}</div>
    <div class=\"product_name\">{{ title }}</div>
</div>
<div class=\"product_content\">
    <div class=\"price-wrap\">
        <div class=\"old_price\">\$<span>{{ field_old_price }}</span></div>
        <div class=\"shop_price\">\$<span>{{  field_new_price }}</span></div>
    </div>

    <div class=\"buttons\">
        <a href=\"#\" class=\"button_buy\" >Buy</a>
    </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  70 => 7,  63 => 3,  59 => 2,  56 => 1,);
    }
}
/* {# inline_template_start #}<div class="product_image_area">*/
/*     <div class="product_image_box">{{ field_image }}</div>*/
/*     <div class="product_name">{{ title }}</div>*/
/* </div>*/
/* <div class="product_content">*/
/*     <div class="price-wrap">*/
/*         <div class="old_price">$<span>{{ field_old_price }}</span></div>*/
/*         <div class="shop_price">$<span>{{  field_new_price }}</span></div>*/
/*     </div>*/
/* */
/*     <div class="buttons">*/
/*         <a href="#" class="button_buy" >Buy</a>*/
/*     </div>*/
/* </div>*/
