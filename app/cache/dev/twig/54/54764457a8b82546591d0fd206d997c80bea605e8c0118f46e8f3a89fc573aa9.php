<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_42dd5022f085e2a0290612ef93670848fa40418b844af0cabbf6931288011933 extends Twig_Template
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
        $__internal_874ad663ff7fa882a521435274fa736b8e502bfb846b9ea939f3f2192812ef8a = $this->env->getExtension("native_profiler");
        $__internal_874ad663ff7fa882a521435274fa736b8e502bfb846b9ea939f3f2192812ef8a->enter($__internal_874ad663ff7fa882a521435274fa736b8e502bfb846b9ea939f3f2192812ef8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_874ad663ff7fa882a521435274fa736b8e502bfb846b9ea939f3f2192812ef8a->leave($__internal_874ad663ff7fa882a521435274fa736b8e502bfb846b9ea939f3f2192812ef8a_prof);

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
