<?php

/* themes/motodynasty/templates/views-view-field--our_team--block--title.html.twig */
class __TwigTemplate_79f2a1195c123e78304b15452c9fd3a86f8c6d8f02ca52b8a8841a46fc8c9c2f extends Twig_Template
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
        $tags = array("set" => 30);
        $filters = array();
        $functions = array("file_url" => 31);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array(),
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
<div class=\"player_area\">
\t<div class=\"image_wrapper\">
\t\t<div class=\"player_no\"><span>";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_player_number", array()), "value", array()), "html", null, true));
        echo "</span></div>
\t\t<div class=\"bio\"><span><a href=\"#\">bio</a></span></div>
\t\t<div class=\"image_box\">
\t\t\t<a href=\"#\">
\t\t\t\t";
        // line 30
        $context["image_path"] = $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_image", array());
        // line 31
        echo "\t\t\t\t<img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image_path"]) ? $context["image_path"] : null), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "\" width=\"100%\" height=\"323px\">
\t\t\t</a>
\t\t</div>
\t\t<div class=\"social_links\">
\t\t\t<ul class=\"socials\">
\t\t\t\t<li><a class=\"fa fa-twitter\" href=\"#\"></a></li>
\t\t\t\t<li><a class=\"fa fa-facebook\" href=\"#\"></a></li>
\t\t\t\t<li><a class=\"fa fa-google-plus\" href=\"#\"></a></li>
\t\t\t\t<li><a class=\"fa fa-pinterest\" href=\"#\"></a></li>
\t\t\t\t<li><a class=\"fa fa-linkedin\" href=\"#\"></a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t
\t<div class=\"player_info\">
\t\t<div class=\"player_name\"><h3><a href=\"#\">";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "title", array()), "value", array()), "html", null, true));
        echo "</a></h3></div>
\t\t<div class=\"position\">
\t\t\t";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "_entity", array()), "field_player_position", array()), "entity", array()), "name", array()), "value", array()), "html", null, true));
        echo "
\t\t</div>
\t</div>
\t
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/motodynasty/templates/views-view-field--our_team--block--title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 48,  76 => 46,  57 => 31,  55 => 30,  48 => 26,  43 => 23,);
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
/* <div class="player_area">*/
/* 	<div class="image_wrapper">*/
/* 		<div class="player_no"><span>{{ row._entity.field_player_number.value }}</span></div>*/
/* 		<div class="bio"><span><a href="#">bio</a></span></div>*/
/* 		<div class="image_box">*/
/* 			<a href="#">*/
/* 				{% set image_path = row._entity.field_image %}*/
/* 				<img src="{{ file_url(image_path.entity.uri.value) }}" width="100%" height="323px">*/
/* 			</a>*/
/* 		</div>*/
/* 		<div class="social_links">*/
/* 			<ul class="socials">*/
/* 				<li><a class="fa fa-twitter" href="#"></a></li>*/
/* 				<li><a class="fa fa-facebook" href="#"></a></li>*/
/* 				<li><a class="fa fa-google-plus" href="#"></a></li>*/
/* 				<li><a class="fa fa-pinterest" href="#"></a></li>*/
/* 				<li><a class="fa fa-linkedin" href="#"></a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="player_info">*/
/* 		<div class="player_name"><h3><a href="#">{{ row._entity.title.value }}</a></h3></div>*/
/* 		<div class="position">*/
/* 			{{ row._entity.field_player_position.entity.name.value }}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* */
/* */
