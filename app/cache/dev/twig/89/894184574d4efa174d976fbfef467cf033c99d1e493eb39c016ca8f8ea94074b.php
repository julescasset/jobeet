<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_92b901e1a92f8a3a7056b8321b05e6e1cc60f6e0ca5bafceb736003727ed7a2a extends Twig_Template
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
        $__internal_03cbd460a9efe01e24a4e89148f0ca0643b804e614b679ad348b1c348eb08e7a = $this->env->getExtension("native_profiler");
        $__internal_03cbd460a9efe01e24a4e89148f0ca0643b804e614b679ad348b1c348eb08e7a->enter($__internal_03cbd460a9efe01e24a4e89148f0ca0643b804e614b679ad348b1c348eb08e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_03cbd460a9efe01e24a4e89148f0ca0643b804e614b679ad348b1c348eb08e7a->leave($__internal_03cbd460a9efe01e24a4e89148f0ca0643b804e614b679ad348b1c348eb08e7a_prof);

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
