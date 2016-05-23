<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe9c09e0ae5eef7969944d8137249f017a83052964eef2b3587f8e623f26cafb extends Twig_Template
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
        $__internal_6c7e6bf081fa9465f75f702ff2df829d94cd6615bda54cc94c866d71a3c6ef54 = $this->env->getExtension("native_profiler");
        $__internal_6c7e6bf081fa9465f75f702ff2df829d94cd6615bda54cc94c866d71a3c6ef54->enter($__internal_6c7e6bf081fa9465f75f702ff2df829d94cd6615bda54cc94c866d71a3c6ef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6c7e6bf081fa9465f75f702ff2df829d94cd6615bda54cc94c866d71a3c6ef54->leave($__internal_6c7e6bf081fa9465f75f702ff2df829d94cd6615bda54cc94c866d71a3c6ef54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
