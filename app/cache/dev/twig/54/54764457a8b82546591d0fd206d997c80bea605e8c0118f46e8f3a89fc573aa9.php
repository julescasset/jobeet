<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_42dd5022f085e2a0290612ef93670848fa40418b844af0cabbf6931288011933 extends Twig_Template
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
        $__internal_6ce9e982be086bf288b8978e89352a4e7d79b19e8b04ef706126c7dedb1afcf2 = $this->env->getExtension("native_profiler");
        $__internal_6ce9e982be086bf288b8978e89352a4e7d79b19e8b04ef706126c7dedb1afcf2->enter($__internal_6ce9e982be086bf288b8978e89352a4e7d79b19e8b04ef706126c7dedb1afcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ce9e982be086bf288b8978e89352a4e7d79b19e8b04ef706126c7dedb1afcf2->leave($__internal_6ce9e982be086bf288b8978e89352a4e7d79b19e8b04ef706126c7dedb1afcf2_prof);

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
