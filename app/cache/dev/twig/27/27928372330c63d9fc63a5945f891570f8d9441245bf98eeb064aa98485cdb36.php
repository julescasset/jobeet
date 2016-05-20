<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_eb53d95e460215dec1c23b65fa28f6520b5f956b7270a27fa8c3a12ba10f913c extends Twig_Template
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
        $__internal_d96937e130fc96687cb02325b7810d23ca67af3374e90579698d3725065cd28b = $this->env->getExtension("native_profiler");
        $__internal_d96937e130fc96687cb02325b7810d23ca67af3374e90579698d3725065cd28b->enter($__internal_d96937e130fc96687cb02325b7810d23ca67af3374e90579698d3725065cd28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d96937e130fc96687cb02325b7810d23ca67af3374e90579698d3725065cd28b->leave($__internal_d96937e130fc96687cb02325b7810d23ca67af3374e90579698d3725065cd28b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
