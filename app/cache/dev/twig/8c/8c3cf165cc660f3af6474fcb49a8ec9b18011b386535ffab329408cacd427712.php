<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c3b16645717c3fd7e55e90a316176d508e6e501200ad2714a6b1d0477c522ed5 extends Twig_Template
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
        $__internal_14c71fd9e413bafa8eca9c512735b8ef61df092cc5285c64a4f16f101ba33591 = $this->env->getExtension("native_profiler");
        $__internal_14c71fd9e413bafa8eca9c512735b8ef61df092cc5285c64a4f16f101ba33591->enter($__internal_14c71fd9e413bafa8eca9c512735b8ef61df092cc5285c64a4f16f101ba33591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_14c71fd9e413bafa8eca9c512735b8ef61df092cc5285c64a4f16f101ba33591->leave($__internal_14c71fd9e413bafa8eca9c512735b8ef61df092cc5285c64a4f16f101ba33591_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
