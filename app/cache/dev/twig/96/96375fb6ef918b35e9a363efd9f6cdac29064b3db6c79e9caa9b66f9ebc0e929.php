<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1958d8bd9e9edffb6866d4521b9f425ae9d83dc9e936c3174c61a0657d5ae9d6 extends Twig_Template
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
        $__internal_5dc83fd6910f6adcabb2eda84483c1994d9413a4cac460c6d2b134ee4d5426d6 = $this->env->getExtension("native_profiler");
        $__internal_5dc83fd6910f6adcabb2eda84483c1994d9413a4cac460c6d2b134ee4d5426d6->enter($__internal_5dc83fd6910f6adcabb2eda84483c1994d9413a4cac460c6d2b134ee4d5426d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5dc83fd6910f6adcabb2eda84483c1994d9413a4cac460c6d2b134ee4d5426d6->leave($__internal_5dc83fd6910f6adcabb2eda84483c1994d9413a4cac460c6d2b134ee4d5426d6_prof);

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
