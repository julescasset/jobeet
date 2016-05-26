<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_51673ab710871660f668caea544699a0bae4c449748c80c2730c9a9b6655f1b8 extends Twig_Template
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
        $__internal_7e7f1d8b4ee2d50510fce49dc7ebfdcb4dea8becda7879e56cd85ae8e447dc3b = $this->env->getExtension("native_profiler");
        $__internal_7e7f1d8b4ee2d50510fce49dc7ebfdcb4dea8becda7879e56cd85ae8e447dc3b->enter($__internal_7e7f1d8b4ee2d50510fce49dc7ebfdcb4dea8becda7879e56cd85ae8e447dc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7e7f1d8b4ee2d50510fce49dc7ebfdcb4dea8becda7879e56cd85ae8e447dc3b->leave($__internal_7e7f1d8b4ee2d50510fce49dc7ebfdcb4dea8becda7879e56cd85ae8e447dc3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
