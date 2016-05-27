<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cc898cd160bf70b6f4c22c0001444813f5803e713653eb8268eaff2935f4d9da extends Twig_Template
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
        $__internal_48502870b5d1615172af5740bf87af6e8cf1bf2167bfc19eba93bf018195ffc2 = $this->env->getExtension("native_profiler");
        $__internal_48502870b5d1615172af5740bf87af6e8cf1bf2167bfc19eba93bf018195ffc2->enter($__internal_48502870b5d1615172af5740bf87af6e8cf1bf2167bfc19eba93bf018195ffc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_48502870b5d1615172af5740bf87af6e8cf1bf2167bfc19eba93bf018195ffc2->leave($__internal_48502870b5d1615172af5740bf87af6e8cf1bf2167bfc19eba93bf018195ffc2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
