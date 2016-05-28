<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8835240ca82f7283bbe8c0a25159a8a7d8cbaa0722f414de16e04b66507be08d extends Twig_Template
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
        $__internal_991736e8f29ba7c71f80191ab968f8f8fa523ed9246fe90bee4fa1fe48f9e8a7 = $this->env->getExtension("native_profiler");
        $__internal_991736e8f29ba7c71f80191ab968f8f8fa523ed9246fe90bee4fa1fe48f9e8a7->enter($__internal_991736e8f29ba7c71f80191ab968f8f8fa523ed9246fe90bee4fa1fe48f9e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_991736e8f29ba7c71f80191ab968f8f8fa523ed9246fe90bee4fa1fe48f9e8a7->leave($__internal_991736e8f29ba7c71f80191ab968f8f8fa523ed9246fe90bee4fa1fe48f9e8a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
