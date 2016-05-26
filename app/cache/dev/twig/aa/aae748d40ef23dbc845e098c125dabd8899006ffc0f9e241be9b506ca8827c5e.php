<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_373f4d8464eed57a17af969cd57fa86820829fd62dc2859eb63b0e2b78a59f28 extends Twig_Template
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
        $__internal_542f6870f3753e91ad6e5747b1bc4991128783b065b5d336823c3cd2060d740a = $this->env->getExtension("native_profiler");
        $__internal_542f6870f3753e91ad6e5747b1bc4991128783b065b5d336823c3cd2060d740a->enter($__internal_542f6870f3753e91ad6e5747b1bc4991128783b065b5d336823c3cd2060d740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_542f6870f3753e91ad6e5747b1bc4991128783b065b5d336823c3cd2060d740a->leave($__internal_542f6870f3753e91ad6e5747b1bc4991128783b065b5d336823c3cd2060d740a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
