<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_d68e5bea2e76ad6cf6a04212145c66f83bd5935750ddce58871385f11bd8ce76 extends Twig_Template
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
        $__internal_4d4ebf90a45eedaf4b7c942d60aaeb9292cfae11eef58e509e85a9b5ab24c2d6 = $this->env->getExtension("native_profiler");
        $__internal_4d4ebf90a45eedaf4b7c942d60aaeb9292cfae11eef58e509e85a9b5ab24c2d6->enter($__internal_4d4ebf90a45eedaf4b7c942d60aaeb9292cfae11eef58e509e85a9b5ab24c2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_4d4ebf90a45eedaf4b7c942d60aaeb9292cfae11eef58e509e85a9b5ab24c2d6->leave($__internal_4d4ebf90a45eedaf4b7c942d60aaeb9292cfae11eef58e509e85a9b5ab24c2d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
