<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_21e1af2a866855cc1b2def806893fa061e0c3c2d5b6c9096a74c6847db30c776 extends Twig_Template
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
        $__internal_0af095c78d7376701e491e6c741fe3a8a966954a4f944ad173e2d0d989d3d89b = $this->env->getExtension("native_profiler");
        $__internal_0af095c78d7376701e491e6c741fe3a8a966954a4f944ad173e2d0d989d3d89b->enter($__internal_0af095c78d7376701e491e6c741fe3a8a966954a4f944ad173e2d0d989d3d89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0af095c78d7376701e491e6c741fe3a8a966954a4f944ad173e2d0d989d3d89b->leave($__internal_0af095c78d7376701e491e6c741fe3a8a966954a4f944ad173e2d0d989d3d89b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
