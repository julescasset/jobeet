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
        $__internal_2a66729261c0e25cb7b647fd88ad6938c3783edb1078cb070fd038e915946bb5 = $this->env->getExtension("native_profiler");
        $__internal_2a66729261c0e25cb7b647fd88ad6938c3783edb1078cb070fd038e915946bb5->enter($__internal_2a66729261c0e25cb7b647fd88ad6938c3783edb1078cb070fd038e915946bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2a66729261c0e25cb7b647fd88ad6938c3783edb1078cb070fd038e915946bb5->leave($__internal_2a66729261c0e25cb7b647fd88ad6938c3783edb1078cb070fd038e915946bb5_prof);

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
