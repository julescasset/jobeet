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
        $__internal_53390d7c0128724798153d8ac386abf6b1b8ef6f6154b4e24c7bb0fefe01a8ea = $this->env->getExtension("native_profiler");
        $__internal_53390d7c0128724798153d8ac386abf6b1b8ef6f6154b4e24c7bb0fefe01a8ea->enter($__internal_53390d7c0128724798153d8ac386abf6b1b8ef6f6154b4e24c7bb0fefe01a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_53390d7c0128724798153d8ac386abf6b1b8ef6f6154b4e24c7bb0fefe01a8ea->leave($__internal_53390d7c0128724798153d8ac386abf6b1b8ef6f6154b4e24c7bb0fefe01a8ea_prof);

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
