<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_09852cb57c87b454943744d8621abe6d990c51c3e0b659e2afb721be4906177f extends Twig_Template
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
        $__internal_5c1033452779d72626c728b23b02224e27b2836767f2b283c5c93acee5ff888f = $this->env->getExtension("native_profiler");
        $__internal_5c1033452779d72626c728b23b02224e27b2836767f2b283c5c93acee5ff888f->enter($__internal_5c1033452779d72626c728b23b02224e27b2836767f2b283c5c93acee5ff888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5c1033452779d72626c728b23b02224e27b2836767f2b283c5c93acee5ff888f->leave($__internal_5c1033452779d72626c728b23b02224e27b2836767f2b283c5c93acee5ff888f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
