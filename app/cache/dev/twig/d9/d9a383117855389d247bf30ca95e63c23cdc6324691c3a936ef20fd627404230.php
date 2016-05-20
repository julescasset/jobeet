<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3a447d8a62d6ceedba9dc50c6a64e9197c9590b391af8c547f16197bbd456822 extends Twig_Template
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
        $__internal_64fc75514c2f6ce0d43b0692b18e079c4dd61db00fabea23eaa881e100001d55 = $this->env->getExtension("native_profiler");
        $__internal_64fc75514c2f6ce0d43b0692b18e079c4dd61db00fabea23eaa881e100001d55->enter($__internal_64fc75514c2f6ce0d43b0692b18e079c4dd61db00fabea23eaa881e100001d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_64fc75514c2f6ce0d43b0692b18e079c4dd61db00fabea23eaa881e100001d55->leave($__internal_64fc75514c2f6ce0d43b0692b18e079c4dd61db00fabea23eaa881e100001d55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
