<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e493821a67e7e11acfb07de825d638f52c0a5bf54ecb4cbc81e6afd1281591e8 extends Twig_Template
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
        $__internal_4cf97269627a713f5dc08b1c62b129d6e7c5e48bec0e58c8c690ec6f41ac1898 = $this->env->getExtension("native_profiler");
        $__internal_4cf97269627a713f5dc08b1c62b129d6e7c5e48bec0e58c8c690ec6f41ac1898->enter($__internal_4cf97269627a713f5dc08b1c62b129d6e7c5e48bec0e58c8c690ec6f41ac1898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4cf97269627a713f5dc08b1c62b129d6e7c5e48bec0e58c8c690ec6f41ac1898->leave($__internal_4cf97269627a713f5dc08b1c62b129d6e7c5e48bec0e58c8c690ec6f41ac1898_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
