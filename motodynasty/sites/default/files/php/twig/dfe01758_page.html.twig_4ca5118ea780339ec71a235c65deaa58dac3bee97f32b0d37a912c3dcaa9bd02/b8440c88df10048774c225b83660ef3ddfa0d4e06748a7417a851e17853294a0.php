<?php

/* themes/motodynasty/templates/page.html.twig */
class __TwigTemplate_122ecd6404e8f8646a62939972ee81aff7836fee287d25921677ebbb4e83dc9a extends Twig_Template
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
        $filters = array("t" => 65);
        $functions = array("path" => 65);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('t'),
                array('path')
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

        // line 59
        echo "
<div id=\"whole_header_area\">
\t<div class=\"social_area\">";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_social_area", array()), "html", null, true));
        echo "</div>
\t<div id=\"header_top_area\">
\t\t<div class=\"header_area\">\t
\t\t\t<div class=\"logo_area\">
\t\t\t\t<a href=\"";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sport.ak")));
        echo "\" rel=\"Sport.ak\" class=\"site-branding__logo\">
\t\t\t\t<img src=\"";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/logo.png\"/>
\t\t\t\t<span>Sport<em>.ak</em></span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"menu_area\">";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu_area", array()), "html", null, true));
        echo "</div>
\t\t</div>
\t</div>
</div>

<div id=\"main_area\">            
\t<div id=\"midcontent\" class=\"column main-content\">
\t    <h2 class=\"page-title\">";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "#title", array(), "array"), "html", null, true));
        echo "</h1>
        <div class=\"content_area\">";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "</div>
\t</div>
</div>

<div id=\"footer_top_area\">
\t<div id=\"footer_top\">
\t\t<div class=\"footer_top_left\">";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_left", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_top_right\">";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_right", array()), "html", null, true));
        echo "</div>
\t</div>
</div>

<div id=\"footer_bottom_area\">
\t<div id=\"footer_bottom_top\">
\t\t<div class=\"footer_logo\">";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_logo", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_socail_link\">";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_socail", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_top_content\">";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array()), "html", null, true));
        echo "</div>
\t</div>
\t<div id=\"footer_bottom_middle\">
\t\t<div class=\"footer_middle_left\">";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle_left", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_middle_right\">";
        // line 97
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle_right", array()), "html", null, true));
        echo "</div>
\t</div>
\t<div id=\"footer_bottom_last\">
\t\t<div class=\"footer_menu\">";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_copyright\">";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_copyright", array()), "html", null, true));
        echo "</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/motodynasty/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 101,  127 => 100,  121 => 97,  117 => 96,  111 => 93,  107 => 92,  103 => 91,  94 => 85,  90 => 84,  81 => 78,  77 => 77,  67 => 70,  60 => 66,  54 => 65,  47 => 61,  43 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <div id="whole_header_area">*/
/* 	<div class="social_area">{{ page.header_social_area }}</div>*/
/* 	<div id="header_top_area">*/
/* 		<div class="header_area">	*/
/* 			<div class="logo_area">*/
/* 				<a href="{{ path('<front>') }}" title="{{ 'Sport.ak'|t }}" rel="Sport.ak" class="site-branding__logo">*/
/* 				<img src="{{ base_path ~ directory }}/logo.png"/>*/
/* 				<span>Sport<em>.ak</em></span>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="menu_area">{{ page.menu_area }}</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="main_area">            */
/* 	<div id="midcontent" class="column main-content">*/
/* 	    <h2 class="page-title">{{ page['#title'] }}</h1>*/
/*         <div class="content_area">{{ page.content }}</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="footer_top_area">*/
/* 	<div id="footer_top">*/
/* 		<div class="footer_top_left">{{ page.footer_top_left }}</div>*/
/* 		<div class="footer_top_right">{{ page.footer_top_right }}</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="footer_bottom_area">*/
/* 	<div id="footer_bottom_top">*/
/* 		<div class="footer_logo">{{ page.footer_logo }}</div>*/
/* 		<div class="footer_socail_link">{{ page.footer_socail }}</div>*/
/* 		<div class="footer_top_content">{{ page.footer_top_content }}</div>*/
/* 	</div>*/
/* 	<div id="footer_bottom_middle">*/
/* 		<div class="footer_middle_left">{{ page.footer_middle_left }}</div>*/
/* 		<div class="footer_middle_right">{{ page.footer_middle_right }}</div>*/
/* 	</div>*/
/* 	<div id="footer_bottom_last">*/
/* 		<div class="footer_menu">{{ page.footer_menu }}</div>*/
/* 		<div class="footer_copyright">{{ page.footer_copyright }}</div>*/
/* 	</div>*/
/* </div>*/
/* */
