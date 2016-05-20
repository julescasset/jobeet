<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_196dd9c2765e5be7848268259673fa566bd650096896dc9c2e0e52cef11670e5 extends Twig_Template
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
        $__internal_c4d264ca4d5633e8b484e8cf82094cf9081bf0bcb4be3a93dc498436879c3c0e = $this->env->getExtension("native_profiler");
        $__internal_c4d264ca4d5633e8b484e8cf82094cf9081bf0bcb4be3a93dc498436879c3c0e->enter($__internal_c4d264ca4d5633e8b484e8cf82094cf9081bf0bcb4be3a93dc498436879c3c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c4d264ca4d5633e8b484e8cf82094cf9081bf0bcb4be3a93dc498436879c3c0e->leave($__internal_c4d264ca4d5633e8b484e8cf82094cf9081bf0bcb4be3a93dc498436879c3c0e_prof);

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
