<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e44c35ca95ff1a9a4183d4e961560ec630ef5abafe8dd224829f22abf17681ac extends Twig_Template
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
        $__internal_145c85de0dbc2d049be69f08782210ab3befcec5c0439d46a50b1f219021f593 = $this->env->getExtension("native_profiler");
        $__internal_145c85de0dbc2d049be69f08782210ab3befcec5c0439d46a50b1f219021f593->enter($__internal_145c85de0dbc2d049be69f08782210ab3befcec5c0439d46a50b1f219021f593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_145c85de0dbc2d049be69f08782210ab3befcec5c0439d46a50b1f219021f593->leave($__internal_145c85de0dbc2d049be69f08782210ab3befcec5c0439d46a50b1f219021f593_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
