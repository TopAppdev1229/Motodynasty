<?php

/* themes/motodynasty/templates/html.html.twig */
class __TwigTemplate_42a816c97c4d7e12eaeb77fefc908dd4378fac4ac87817fd380edf419bf67f4c extends Twig_Template
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
        $tags = array("set" => 48);
        $filters = array("clean_class" => 50, "raw" => 66, "safe_join" => 67, "t" => 73);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class', 'raw', 'safe_join', 't'),
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

        // line 48
        $context["body_classes"] = array(0 => ((        // line 49
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 51
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 52
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")), 4 => ((( !$this->getAttribute(        // line 53
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("no-sidebars") : ("")), 5 => ((($this->getAttribute(        // line 54
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("sidebar-first") : ("")), 6 => ((($this->getAttribute(        // line 55
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) ? ("sidebar-second") : ("")), 7 => ((($this->getAttribute(        // line 56
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("two-sidebars") : ("")), 8 => (($this->getAttribute($this->getAttribute(        // line 57
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-is-" . $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array()))) : ("")), 9 => (($this->getAttribute(        // line 58
(isset($context["theme"]) ? $context["theme"] : null), "has_glyphicons", array())) ? ("has-glyphicons") : ("")), 10 => ((        // line 59
(isset($context["current_path"]) ? $context["current_path"] : null)) ? (("node" . \Drupal\Component\Utility\Html::getClass((isset($context["current_path"]) ? $context["current_path"] : null)))) : ("")));
        // line 62
        echo "
<!DOCTYPE html>
<html ";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </head>
  <body";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/motodynasty/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 78,  100 => 77,  96 => 76,  92 => 75,  87 => 73,  82 => 71,  77 => 69,  73 => 68,  69 => 67,  65 => 66,  60 => 64,  56 => 62,  54 => 59,  53 => 58,  52 => 57,  51 => 56,  50 => 55,  49 => 54,  48 => 53,  47 => 52,  46 => 51,  45 => 50,  44 => 49,  43 => 48,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display the basic html structure of a single*/
/*  * Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - $css: An array of CSS files for the current page.*/
/*  * - $language: (object) The language the site is being displayed in.*/
/*  *   $language->language contains its textual representation.*/
/*  *   $language->dir contains the language direction. It will either be 'ltr' or*/
/*  *   'rtl'.*/
/*  * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.*/
/*  * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.*/
/*  * - $head_title: A modified version of the page title, for use in the TITLE*/
/*  *   tag.*/
/*  * - $head_title_array: (array) An associative array containing the string parts*/
/*  *   that were used to generate the $head_title variable, already prepared to be*/
/*  *   output as TITLE tag. The key/value pairs may contain one or more of the*/
/*  *   following, depending on conditions:*/
/*  *   - title: The title of the current page, if any.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site, if any, and if there is no title.*/
/*  * - $head: Markup for the HEAD section (including meta tags, keyword tags, and*/
/*  *   so on).*/
/*  * - $styles: Style tags necessary to import all CSS files for the page.*/
/*  * - $scripts: Script tags necessary to load the JavaScript files and settings*/
/*  *   for the page.*/
/*  * - $page_top: Initial markup from any modules that have altered the*/
/*  *   page. This variable should always be output first, before all other dynamic*/
/*  *   content.*/
/*  * - $page: The rendered page content.*/
/*  * - $page_bottom: Final closing markup from any modules that have altered the*/
/*  *   page. This variable should always be output last, after all other dynamic*/
/*  *   content.*/
/*  * - $classes String of classes that can be used to style contextually through*/
/*  *   CSS.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see bootstrap_preprocess_html()*/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_html()*/
/*  * @see template_process()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set body_classes = [*/
/*     logged_in ? 'user-logged-in',*/
/*     not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*     node_type ? 'page-node-type-' ~ node_type|clean_class,*/
/*     db_offline ? 'db-offline',*/
/*     not page.sidebar_first and not page.sidebar_second ? 'no-sidebars',*/
/*     page.sidebar_first and not page.sidebar_second ? 'sidebar-first',*/
/*     page.sidebar_second and not page.sidebar_first ? 'sidebar-second',*/
/*     page.sidebar_first and page.sidebar_second ? 'two-sidebars',*/
/*     theme.settings.navbar_position ? 'navbar-is-' ~ theme.settings.navbar_position,*/
/*     theme.has_glyphicons ? 'has-glyphicons',*/
/* 	current_path ? 'node' ~ current_path|clean_class,*/
/*   ]*/
/* %}*/
/* */
/* <!DOCTYPE html>*/
/* <html {{ html_attributes }}>*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   <body{{ attributes.addClass(body_classes) }}>*/
/*     <a href="#main-content" class="visually-hidden focusable skip-link">*/
/*       {{ 'Skip to main content'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
