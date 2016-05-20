<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_949263562096f2a09160042ee3238883179d57a583a8db34dfe4de7d362d57a7 extends Twig_Template
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
        $__internal_5e9a3bd847b6d5e58fac5ff45490d748c716cbfb4d2eb49ed465af2f3d92c72e = $this->env->getExtension("native_profiler");
        $__internal_5e9a3bd847b6d5e58fac5ff45490d748c716cbfb4d2eb49ed465af2f3d92c72e->enter($__internal_5e9a3bd847b6d5e58fac5ff45490d748c716cbfb4d2eb49ed465af2f3d92c72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5e9a3bd847b6d5e58fac5ff45490d748c716cbfb4d2eb49ed465af2f3d92c72e->leave($__internal_5e9a3bd847b6d5e58fac5ff45490d748c716cbfb4d2eb49ed465af2f3d92c72e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
