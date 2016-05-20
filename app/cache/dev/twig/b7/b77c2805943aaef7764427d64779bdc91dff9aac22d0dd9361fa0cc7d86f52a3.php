<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_328e8361a44af851a4c1083a8dd95a026376351b35e827f6e6690f69725125fb extends Twig_Template
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
        $__internal_a40c04e1288ca3b130eea085ff175af9620f9cb3725ad4dada1df30b1ab95805 = $this->env->getExtension("native_profiler");
        $__internal_a40c04e1288ca3b130eea085ff175af9620f9cb3725ad4dada1df30b1ab95805->enter($__internal_a40c04e1288ca3b130eea085ff175af9620f9cb3725ad4dada1df30b1ab95805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a40c04e1288ca3b130eea085ff175af9620f9cb3725ad4dada1df30b1ab95805->leave($__internal_a40c04e1288ca3b130eea085ff175af9620f9cb3725ad4dada1df30b1ab95805_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
