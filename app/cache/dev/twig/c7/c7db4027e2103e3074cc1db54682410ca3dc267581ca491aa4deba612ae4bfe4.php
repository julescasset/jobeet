<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_67deaea403a1ed647d35f719e57f6bd98215a79306f9875f07b0b8169afb0420 extends Twig_Template
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
        $__internal_3851234825e218e816566292d7d46e7950e60c5bcad8866b6804a7aa0eca1d6c = $this->env->getExtension("native_profiler");
        $__internal_3851234825e218e816566292d7d46e7950e60c5bcad8866b6804a7aa0eca1d6c->enter($__internal_3851234825e218e816566292d7d46e7950e60c5bcad8866b6804a7aa0eca1d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_3851234825e218e816566292d7d46e7950e60c5bcad8866b6804a7aa0eca1d6c->leave($__internal_3851234825e218e816566292d7d46e7950e60c5bcad8866b6804a7aa0eca1d6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
