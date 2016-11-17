<?php

/* {# inline_template_start #}<div class="achievement_right_box">
<div class="achievement_title_text">{{ title }}</div>
<div class="achievement_sub_title">{{ field_sub_title }} </div>
</div> */
class __TwigTemplate_b94119f5a26a08b28c242d708704eba6cb500f7ed2ff83d83d8871982ef33e12 extends Twig_Template
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
        echo "<div class=\"achievement_right_box\">
<div class=\"achievement_title_text\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
<div class=\"achievement_sub_title\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_sub_title"]) ? $context["field_sub_title"] : null), "html", null, true));
        echo " </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"achievement_right_box\">
<div class=\"achievement_title_text\">{{ title }}</div>
<div class=\"achievement_sub_title\">{{ field_sub_title }} </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  49 => 2,  46 => 1,);
    }
}
/* {# inline_template_start #}<div class="achievement_right_box">*/
/* <div class="achievement_title_text">{{ title }}</div>*/
/* <div class="achievement_sub_title">{{ field_sub_title }} </div>*/
/* </div>*/
