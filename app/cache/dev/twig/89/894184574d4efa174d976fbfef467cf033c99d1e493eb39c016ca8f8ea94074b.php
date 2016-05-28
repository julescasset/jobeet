<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_92b901e1a92f8a3a7056b8321b05e6e1cc60f6e0ca5bafceb736003727ed7a2a extends Twig_Template
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
        $__internal_f6d5dcdb870e9b409da3a8384f017b6459c13e18559c747951fa2468d667ce51 = $this->env->getExtension("native_profiler");
        $__internal_f6d5dcdb870e9b409da3a8384f017b6459c13e18559c747951fa2468d667ce51->enter($__internal_f6d5dcdb870e9b409da3a8384f017b6459c13e18559c747951fa2468d667ce51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f6d5dcdb870e9b409da3a8384f017b6459c13e18559c747951fa2468d667ce51->leave($__internal_f6d5dcdb870e9b409da3a8384f017b6459c13e18559c747951fa2468d667ce51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
