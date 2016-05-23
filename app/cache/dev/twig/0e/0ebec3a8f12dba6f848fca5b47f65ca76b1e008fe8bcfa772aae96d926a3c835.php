<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f75e537e6be7030237ee5880d50120f25147bf5e3745e6fd3599eb23421f230b extends Twig_Template
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
        $__internal_de123bca497fb80226c3cc8b2dc12602fcef3b7f80ff4a8d906ce606dce98db2 = $this->env->getExtension("native_profiler");
        $__internal_de123bca497fb80226c3cc8b2dc12602fcef3b7f80ff4a8d906ce606dce98db2->enter($__internal_de123bca497fb80226c3cc8b2dc12602fcef3b7f80ff4a8d906ce606dce98db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_de123bca497fb80226c3cc8b2dc12602fcef3b7f80ff4a8d906ce606dce98db2->leave($__internal_de123bca497fb80226c3cc8b2dc12602fcef3b7f80ff4a8d906ce606dce98db2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
