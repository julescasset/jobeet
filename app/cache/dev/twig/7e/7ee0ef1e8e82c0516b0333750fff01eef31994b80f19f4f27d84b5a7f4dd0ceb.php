<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe9c09e0ae5eef7969944d8137249f017a83052964eef2b3587f8e623f26cafb extends Twig_Template
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
        $__internal_00553d44bcd7fb78cfffc1a6c18a711f28fb933fdb77032b7ffc225ad3c9e6ea = $this->env->getExtension("native_profiler");
        $__internal_00553d44bcd7fb78cfffc1a6c18a711f28fb933fdb77032b7ffc225ad3c9e6ea->enter($__internal_00553d44bcd7fb78cfffc1a6c18a711f28fb933fdb77032b7ffc225ad3c9e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_00553d44bcd7fb78cfffc1a6c18a711f28fb933fdb77032b7ffc225ad3c9e6ea->leave($__internal_00553d44bcd7fb78cfffc1a6c18a711f28fb933fdb77032b7ffc225ad3c9e6ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
