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
        $__internal_47ce74132950b7ff79ab2bc07daeb191c7609f7c66165509e3fa6ce4680f932d = $this->env->getExtension("native_profiler");
        $__internal_47ce74132950b7ff79ab2bc07daeb191c7609f7c66165509e3fa6ce4680f932d->enter($__internal_47ce74132950b7ff79ab2bc07daeb191c7609f7c66165509e3fa6ce4680f932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_47ce74132950b7ff79ab2bc07daeb191c7609f7c66165509e3fa6ce4680f932d->leave($__internal_47ce74132950b7ff79ab2bc07daeb191c7609f7c66165509e3fa6ce4680f932d_prof);

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
