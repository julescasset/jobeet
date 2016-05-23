<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_949263562096f2a09160042ee3238883179d57a583a8db34dfe4de7d362d57a7 extends Twig_Template
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
        $__internal_93b48d319adb6cbb0321cf7490d3b9f71ea7cf75b54ca3babf92636533b89705 = $this->env->getExtension("native_profiler");
        $__internal_93b48d319adb6cbb0321cf7490d3b9f71ea7cf75b54ca3babf92636533b89705->enter($__internal_93b48d319adb6cbb0321cf7490d3b9f71ea7cf75b54ca3babf92636533b89705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_93b48d319adb6cbb0321cf7490d3b9f71ea7cf75b54ca3babf92636533b89705->leave($__internal_93b48d319adb6cbb0321cf7490d3b9f71ea7cf75b54ca3babf92636533b89705_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
