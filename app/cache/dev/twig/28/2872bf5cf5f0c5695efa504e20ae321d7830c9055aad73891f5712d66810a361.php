<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_949263562096f2a09160042ee3238883179d57a583a8db34dfe4de7d362d57a7 extends Twig_Template
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
        $__internal_09a348ab8a00000a03c273bbbd63acd323b2c2d049c181a4895de1f78a9497f8 = $this->env->getExtension("native_profiler");
        $__internal_09a348ab8a00000a03c273bbbd63acd323b2c2d049c181a4895de1f78a9497f8->enter($__internal_09a348ab8a00000a03c273bbbd63acd323b2c2d049c181a4895de1f78a9497f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_09a348ab8a00000a03c273bbbd63acd323b2c2d049c181a4895de1f78a9497f8->leave($__internal_09a348ab8a00000a03c273bbbd63acd323b2c2d049c181a4895de1f78a9497f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
