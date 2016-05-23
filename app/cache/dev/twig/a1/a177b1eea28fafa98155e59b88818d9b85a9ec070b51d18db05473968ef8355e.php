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
        $__internal_6a17eb2f105bd9d0b8b75513bd13f5a61f9e95eb61e55dd07e9baa33d364291d = $this->env->getExtension("native_profiler");
        $__internal_6a17eb2f105bd9d0b8b75513bd13f5a61f9e95eb61e55dd07e9baa33d364291d->enter($__internal_6a17eb2f105bd9d0b8b75513bd13f5a61f9e95eb61e55dd07e9baa33d364291d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6a17eb2f105bd9d0b8b75513bd13f5a61f9e95eb61e55dd07e9baa33d364291d->leave($__internal_6a17eb2f105bd9d0b8b75513bd13f5a61f9e95eb61e55dd07e9baa33d364291d_prof);

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
