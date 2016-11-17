<?php

/* themes/motodynasty/templates/views-view-field--slideshow--block--title.html.twig */
class __TwigTemplate_0f083e7b57e0b6e67681f337d7990622d68f8357a5c52730751c48f9300ac0da extends Twig_Template
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
        $tags = array("set" => 25);
        $filters = array("raw" => 30);
        $functions = array("file_url" => 26);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('raw'),
                array('file_url')
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

        // line 23
        echo "
<div class=\"image-box\">
\t";
        // line 25
        $context["image_path"] = $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_image", array());
        // line 26
        echo "\t<img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image_path"]) ? $context["image_path"] : null), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "\" width=\"100%\" height=\"100%\">
</div>
\t\t
<div class=\"slideshow_content\">
\t<div class=\"title\"><a href=\"#\"><span>";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "title", array()), "value", array()), "html", null, true));
        echo "</span><span>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_title_with_blue", array()), "value", array())));
        echo "</span> </a></div>
\t<div class=\"description_text\">";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_description_with_blue", array()), "value", array())));
        echo "</div>
\t<div class=\"read-more\"><a href=\"#\">Read More<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/motodynasty/templates/views-view-field--slideshow--block--title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  57 => 30,  49 => 26,  47 => 25,  43 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a single field in a view.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view that the field belongs to.*/
/*  * - field: The field handler that can process the input.*/
/*  * - row: The raw result of the database query that generated this field.*/
/*  * - output: The processed output that will normally be used.*/
/*  **/
/*  * When fetching output from the row this construct should be used:*/
/*  * data = row[field.field_alias]*/
/*  **/
/*  * The above will guarantee that you'll always get the correct data, regardless*/
/*  * of any changes in the aliasing that might happen if the view is modified.*/
/*  **/
/*  * @see template_preprocess_views_view_field()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* <div class="image-box">*/
/* 	{% set image_path = row._entity.field_image %}*/
/* 	<img src="{{ file_url(image_path.entity.uri.value) }}" width="100%" height="100%">*/
/* </div>*/
/* 		*/
/* <div class="slideshow_content">*/
/* 	<div class="title"><a href="#"><span>{{ row._entity.title.value }}</span><span>{{ row._entity.field_title_with_blue.value|raw }}</span> </a></div>*/
/* 	<div class="description_text">{{ row._entity.field_description_with_blue.value|raw }}</div>*/
/* 	<div class="read-more"><a href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>*/
/* </div>*/
/* */
