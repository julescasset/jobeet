<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4d004d12959cd81ffb4f4cc9e77505490cfc8c06114392b7c2ecd1a9ffeea558 extends Twig_Template
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
        $__internal_c2c2346c307073a0a33fb256cafb9dacdd60d9b777f9095e31a6fada7b8b6b63 = $this->env->getExtension("native_profiler");
        $__internal_c2c2346c307073a0a33fb256cafb9dacdd60d9b777f9095e31a6fada7b8b6b63->enter($__internal_c2c2346c307073a0a33fb256cafb9dacdd60d9b777f9095e31a6fada7b8b6b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c2c2346c307073a0a33fb256cafb9dacdd60d9b777f9095e31a6fada7b8b6b63->leave($__internal_c2c2346c307073a0a33fb256cafb9dacdd60d9b777f9095e31a6fada7b8b6b63_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
