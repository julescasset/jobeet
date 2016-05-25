<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_09852cb57c87b454943744d8621abe6d990c51c3e0b659e2afb721be4906177f extends Twig_Template
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
        $__internal_a38cbc0c847981429de3213a7509802d135c67d17c47a93c6845253ffd64c011 = $this->env->getExtension("native_profiler");
        $__internal_a38cbc0c847981429de3213a7509802d135c67d17c47a93c6845253ffd64c011->enter($__internal_a38cbc0c847981429de3213a7509802d135c67d17c47a93c6845253ffd64c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a38cbc0c847981429de3213a7509802d135c67d17c47a93c6845253ffd64c011->leave($__internal_a38cbc0c847981429de3213a7509802d135c67d17c47a93c6845253ffd64c011_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
