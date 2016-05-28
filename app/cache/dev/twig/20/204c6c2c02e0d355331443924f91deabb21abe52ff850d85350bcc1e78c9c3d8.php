<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_faa2767faa23574f1cbbf1e43b44fac2f28b1a54eb0a39e2b676a8a3aff242b5 extends Twig_Template
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
        $__internal_8248add710c8ca69cd57897055d7d6606d3a581921b12182b9f3085f25fcf162 = $this->env->getExtension("native_profiler");
        $__internal_8248add710c8ca69cd57897055d7d6606d3a581921b12182b9f3085f25fcf162->enter($__internal_8248add710c8ca69cd57897055d7d6606d3a581921b12182b9f3085f25fcf162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_8248add710c8ca69cd57897055d7d6606d3a581921b12182b9f3085f25fcf162->leave($__internal_8248add710c8ca69cd57897055d7d6606d3a581921b12182b9f3085f25fcf162_prof);

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
