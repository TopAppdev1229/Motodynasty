<?php

/* themes/motodynasty/templates/views-view-field--news_listing--block--title.html.twig */
class __TwigTemplate_319c759a2a9f1add27901cf3ac069a628439781b89b66e879338627e406b3882 extends Twig_Template
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
        $tags = array("set" => 26);
        $filters = array("date" => 31, "striptags" => 33);
        $functions = array("file_url" => 27);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('date', 'striptags'),
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
<div class=\"news_listing_for_front\">
<div class=\"news_image_box\">
\t";
        // line 26
        $context["image_path"] = $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_image", array());
        // line 27
        echo "\t<img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image_path"]) ? $context["image_path"] : null), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "\" width=\"280px\" height=\"260px\">
</div>
\t\t
<div class=\"news_date_and_description_box\">
    <div class=\"news_date\">";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_news_date", array()), "value", array()), "F d, Y"), "html", null, true));
        echo " </div>
\t<div class=\"news_title\"><a href=\"/node/";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "id", array(), "method"), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "title", array()), "value", array()), "html", null, true));
        echo " </a></div>
\t<div class=\"short_description\">";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_short_description", array()), "value", array())), "html", null, true));
        echo "</div>
\t<div class=\"read_more\"><a href=\"/node/";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "id", array(), "method"), "html", null, true));
        echo "\"> READ MORE  > </a></div>
</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "themes/motodynasty/templates/views-view-field--news_listing--block--title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 34,  68 => 33,  62 => 32,  58 => 31,  50 => 27,  48 => 26,  43 => 23,);
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
/* <div class="news_listing_for_front">*/
/* <div class="news_image_box">*/
/* 	{% set image_path = row._entity.field_image %}*/
/* 	<img src="{{ file_url(image_path.entity.uri.value) }}" width="280px" height="260px">*/
/* </div>*/
/* 		*/
/* <div class="news_date_and_description_box">*/
/*     <div class="news_date">{{ row._entity.field_news_date.value | date("F d, Y") }} </div>*/
/* 	<div class="news_title"><a href="/node/{{ row._entity.id() }}">{{ row._entity.title.value }} </a></div>*/
/* 	<div class="short_description">{{ row._entity.field_short_description.value|striptags }}</div>*/
/* 	<div class="read_more"><a href="/node/{{ row._entity.id() }}"> READ MORE  > </a></div>*/
/* </div>*/
/* */
/* </div>*/
/* */
/* */
