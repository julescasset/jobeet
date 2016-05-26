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
        $__internal_7b56114f194943b6323613e9585dd977dac978d46691f183333fc7e9728e2ae0 = $this->env->getExtension("native_profiler");
        $__internal_7b56114f194943b6323613e9585dd977dac978d46691f183333fc7e9728e2ae0->enter($__internal_7b56114f194943b6323613e9585dd977dac978d46691f183333fc7e9728e2ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7b56114f194943b6323613e9585dd977dac978d46691f183333fc7e9728e2ae0->leave($__internal_7b56114f194943b6323613e9585dd977dac978d46691f183333fc7e9728e2ae0_prof);

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
