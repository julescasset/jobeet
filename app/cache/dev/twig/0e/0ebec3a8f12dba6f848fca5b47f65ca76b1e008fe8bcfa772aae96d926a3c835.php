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
        $__internal_4e0ee6d7846396832598d210d93e0147db9aebdcf59269a8c34e9121ae8f7be9 = $this->env->getExtension("native_profiler");
        $__internal_4e0ee6d7846396832598d210d93e0147db9aebdcf59269a8c34e9121ae8f7be9->enter($__internal_4e0ee6d7846396832598d210d93e0147db9aebdcf59269a8c34e9121ae8f7be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4e0ee6d7846396832598d210d93e0147db9aebdcf59269a8c34e9121ae8f7be9->leave($__internal_4e0ee6d7846396832598d210d93e0147db9aebdcf59269a8c34e9121ae8f7be9_prof);

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
