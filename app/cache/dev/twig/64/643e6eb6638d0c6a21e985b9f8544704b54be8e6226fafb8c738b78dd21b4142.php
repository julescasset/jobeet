<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e6dfee9c224048c52537711461fe136851d77e6d6fcaef6f31460d85b3d78400 extends Twig_Template
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
        $__internal_056dd6d9cfe544e451c0e14b7af65c8b4efcd0b6d5cbe0c8ae4dd27d273ecbff = $this->env->getExtension("native_profiler");
        $__internal_056dd6d9cfe544e451c0e14b7af65c8b4efcd0b6d5cbe0c8ae4dd27d273ecbff->enter($__internal_056dd6d9cfe544e451c0e14b7af65c8b4efcd0b6d5cbe0c8ae4dd27d273ecbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_056dd6d9cfe544e451c0e14b7af65c8b4efcd0b6d5cbe0c8ae4dd27d273ecbff->leave($__internal_056dd6d9cfe544e451c0e14b7af65c8b4efcd0b6d5cbe0c8ae4dd27d273ecbff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
