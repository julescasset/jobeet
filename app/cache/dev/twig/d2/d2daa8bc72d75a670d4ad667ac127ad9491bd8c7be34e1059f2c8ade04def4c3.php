<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8ac25b982ccb2f8368f7371e6b446e0af47ed984c50243e8cf1bb10fdfc38735 extends Twig_Template
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
        $__internal_9998c363cd67a0ca111fa43214b4ca00a3427cc40009450cf9b19ae3998dbfd8 = $this->env->getExtension("native_profiler");
        $__internal_9998c363cd67a0ca111fa43214b4ca00a3427cc40009450cf9b19ae3998dbfd8->enter($__internal_9998c363cd67a0ca111fa43214b4ca00a3427cc40009450cf9b19ae3998dbfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9998c363cd67a0ca111fa43214b4ca00a3427cc40009450cf9b19ae3998dbfd8->leave($__internal_9998c363cd67a0ca111fa43214b4ca00a3427cc40009450cf9b19ae3998dbfd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
