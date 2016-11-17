<?php

/* themes/motodynasty/templates/page--front.html.twig */
class __TwigTemplate_6e2d8cdf3d04751ea9109332da416ef1e73a9024a4701c2c8089eb3484322e8f extends Twig_Template
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
        $tags = array("if" => 75);
        $filters = array("t" => 65);
        $functions = array("path" => 65, "drupal_block" => 119);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path', 'drupal_block')
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

";
        // line 75
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow_area", array())) {
            // line 76
            echo "<div id=\"slideshow_area\">
    <div class=\"slideshow_area\">";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow_area", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 80
        echo "
";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "latest_results", array())) {
            // line 82
            echo "<div id=\"whole_latest_results\">
\t<div id=\"latest_result_area\">";
            // line 83
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "latest_results", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 86
        echo "
";
        // line 87
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "about_team", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "trainers", array()))) {
            // line 88
            echo "<div id=\"team_and_trainers_area\">
\t<div id=\"team_and_trainers\">
\t\t<div class=\"about_team_area\">";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "about_team", array()), "html", null, true));
            echo "</div>
\t\t<div class=\"trainers_area\">";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "trainers", array()), "html", null, true));
            echo "</div>
\t</div>
</div>
";
        }
        // line 95
        echo "
";
        // line 96
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "support", array())) {
            // line 97
            echo "<div id=\"whole_support_area\">
    <div id=\"support_area\">";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "support", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 101
        echo "
";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_match", array())) {
            // line 103
            echo "<div id=\"whole_next_match_area\">
    <div id=\"next_match_area\">";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_match", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 107
        echo "
";
        // line 108
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "our_news", array())) {
            // line 109
            echo "<div id=\"whole_our_news_area\">
    <div id=\"our_news_area\">";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "our_news", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 113
        echo "
";
        // line 114
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery", array())) {
            // line 115
            echo "<div id=\"whole_gallery_area\">
    <div id=\"gallery_area\">
\t\t";
            // line 117
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery", array()), "html", null, true));
            echo "
\t\t<div id=\"gallery_tabs_content\">
\t\t\t<section id=\"tab1\" class=\"tab-content active\">";
            // line 119
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_tweak')->drupalBlock("views_block__gallery_all_block_1"), "html", null, true));
            echo "</section>
\t\t\t<section id=\"tab2\" class=\"tab-content hide\">";
            // line 120
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_tweak')->drupalBlock("views_block__gallery_all_block_2"), "html", null, true));
            echo "</section>
\t\t\t<section id=\"tab3\" class=\"tab-content hide\">";
            // line 121
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_tweak')->drupalBlock("views_block__gallery_all_block_3"), "html", null, true));
            echo "</section>
\t\t\t<section id=\"tab4\" class=\"tab-content hide\">";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_tweak')->drupalBlock("views_block__gallery_all_block_4"), "html", null, true));
            echo "</section>
\t\t\t<section id=\"tab5\" class=\"tab-content hide\">";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_tweak')->drupalBlock("views_block__gallery_all_block_5"), "html", null, true));
            echo "</section>
\t\t\t<section id=\"tab6\" class=\"tab-content hide\">";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_tweak')->drupalBlock("views_block__gallery_all_block_6"), "html", null, true));
            echo "</section>
\t\t</div>
\t</div>
</div>
";
        }
        // line 129
        echo "
";
        // line 130
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "our_awards", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "achievements", array()))) {
            // line 131
            echo "<div id=\"awards_and_achievements_area\">
\t<div id=\"awards_and_achievements\">
\t\t<div class=\"our_awards_area\">";
            // line 133
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "our_awards", array()), "html", null, true));
            echo "</div>
\t\t<div class=\"achievements_area\">";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "achievements", array()), "html", null, true));
            echo "</div>
\t</div>
</div>
";
        }
        // line 138
        echo "
";
        // line 139
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "our_team", array())) {
            // line 140
            echo "<div id=\"whole_our_team\">
    <div id=\"our_team_area\">";
            // line 141
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "our_team", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 144
        echo "

<div id=\"main_area\">            
\t<div id=\"midcontent\" class=\"column main-content\">
\t    <h2 class=\"page-title\">";
        // line 148
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "#title", array(), "array"), "html", null, true));
        echo "</h1>
        <div class=\"content_area\">";
        // line 149
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "</div>
\t</div>
</div>

";
        // line 153
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "shop_area", array())) {
            // line 154
            echo "<div id=\"whole_shop_area\">
    <div id=\"shop_area\">";
            // line 155
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "shop_area", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 158
        echo "
";
        // line 159
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video", array())) {
            // line 160
            echo "<div id=\"whole_video_area\">
    <div id=\"video_area\">";
            // line 161
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video", array()), "html", null, true));
            echo "</div>
</div>
";
        }
        // line 164
        echo "
<div id=\"footer_top_area\">
\t<div id=\"footer_top\">
\t\t<div class=\"footer_top_left\">";
        // line 167
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_left", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_top_right\">";
        // line 168
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_right", array()), "html", null, true));
        echo "</div>
\t</div>
</div>

<div id=\"footer_bottom_area\">
\t<div id=\"footer_bottom_top\">
\t\t<div class=\"footer_logo\">";
        // line 174
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_logo", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_socail_link\">";
        // line 175
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_socail", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_top_content\">";
        // line 176
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array()), "html", null, true));
        echo "</div>
\t</div>
\t<div id=\"footer_bottom_middle\">
\t\t<div class=\"footer_middle_left\">";
        // line 179
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle_left", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_middle_right\">";
        // line 180
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle_right", array()), "html", null, true));
        echo "</div>
\t</div>
\t<div id=\"footer_bottom_last\">
\t\t<div class=\"footer_menu\">";
        // line 183
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"footer_copyright\">";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_copyright", array()), "html", null, true));
        echo "</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/motodynasty/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 184,  322 => 183,  316 => 180,  312 => 179,  306 => 176,  302 => 175,  298 => 174,  289 => 168,  285 => 167,  280 => 164,  274 => 161,  271 => 160,  269 => 159,  266 => 158,  260 => 155,  257 => 154,  255 => 153,  248 => 149,  244 => 148,  238 => 144,  232 => 141,  229 => 140,  227 => 139,  224 => 138,  217 => 134,  213 => 133,  209 => 131,  207 => 130,  204 => 129,  196 => 124,  192 => 123,  188 => 122,  184 => 121,  180 => 120,  176 => 119,  171 => 117,  167 => 115,  165 => 114,  162 => 113,  156 => 110,  153 => 109,  151 => 108,  148 => 107,  142 => 104,  139 => 103,  137 => 102,  134 => 101,  128 => 98,  125 => 97,  123 => 96,  120 => 95,  113 => 91,  109 => 90,  105 => 88,  103 => 87,  100 => 86,  94 => 83,  91 => 82,  89 => 81,  86 => 80,  80 => 77,  77 => 76,  75 => 75,  67 => 70,  60 => 66,  54 => 65,  47 => 61,  43 => 59,);
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
/* {% if page.slideshow_area %}*/
/* <div id="slideshow_area">*/
/*     <div class="slideshow_area">{{ page.slideshow_area }}</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.latest_results %}*/
/* <div id="whole_latest_results">*/
/* 	<div id="latest_result_area">{{ page.latest_results }}</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.about_team or page.trainers %}*/
/* <div id="team_and_trainers_area">*/
/* 	<div id="team_and_trainers">*/
/* 		<div class="about_team_area">{{ page.about_team }}</div>*/
/* 		<div class="trainers_area">{{ page.trainers }}</div>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.support %}*/
/* <div id="whole_support_area">*/
/*     <div id="support_area">{{ page.support }}</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.next_match %}*/
/* <div id="whole_next_match_area">*/
/*     <div id="next_match_area">{{ page.next_match }}</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.our_news %}*/
/* <div id="whole_our_news_area">*/
/*     <div id="our_news_area">{{ page.our_news }}</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.gallery %}*/
/* <div id="whole_gallery_area">*/
/*     <div id="gallery_area">*/
/* 		{{ page.gallery }}*/
/* 		<div id="gallery_tabs_content">*/
/* 			<section id="tab1" class="tab-content active">{{ drupal_block('views_block__gallery_all_block_1') }}</section>*/
/* 			<section id="tab2" class="tab-content hide">{{ drupal_block('views_block__gallery_all_block_2') }}</section>*/
/* 			<section id="tab3" class="tab-content hide">{{ drupal_block('views_block__gallery_all_block_3') }}</section>*/
/* 			<section id="tab4" class="tab-content hide">{{ drupal_block('views_block__gallery_all_block_4') }}</section>*/
/* 			<section id="tab5" class="tab-content hide">{{ drupal_block('views_block__gallery_all_block_5') }}</section>*/
/* 			<section id="tab6" class="tab-content hide">{{ drupal_block('views_block__gallery_all_block_6') }}</section>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.our_awards or page.achievements %}*/
/* <div id="awards_and_achievements_area">*/
/* 	<div id="awards_and_achievements">*/
/* 		<div class="our_awards_area">{{ page.our_awards }}</div>*/
/* 		<div class="achievements_area">{{ page.achievements }}</div>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.our_team %}*/
/* <div id="whole_our_team">*/
/*     <div id="our_team_area">{{ page.our_team }}</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* <div id="main_area">            */
/* 	<div id="midcontent" class="column main-content">*/
/* 	    <h2 class="page-title">{{ page['#title'] }}</h1>*/
/*         <div class="content_area">{{ page.content }}</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% if page.shop_area %}*/
/* <div id="whole_shop_area">*/
/*     <div id="shop_area">{{ page.shop_area }}</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if page.video %}*/
/* <div id="whole_video_area">*/
/*     <div id="video_area">{{ page.video }}</div>*/
/* </div>*/
/* {% endif %}*/
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
