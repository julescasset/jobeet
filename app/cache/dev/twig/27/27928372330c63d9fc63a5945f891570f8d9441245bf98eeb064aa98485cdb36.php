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
        $__internal_b2322ebd8ced4ca43116d290d96c88a786ea18828aaa03d0b3357dbd17188ade = $this->env->getExtension("native_profiler");
        $__internal_b2322ebd8ced4ca43116d290d96c88a786ea18828aaa03d0b3357dbd17188ade->enter($__internal_b2322ebd8ced4ca43116d290d96c88a786ea18828aaa03d0b3357dbd17188ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b2322ebd8ced4ca43116d290d96c88a786ea18828aaa03d0b3357dbd17188ade->leave($__internal_b2322ebd8ced4ca43116d290d96c88a786ea18828aaa03d0b3357dbd17188ade_prof);

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
