<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c2a3ca036253bca95eb77b527be6810b735cd02688d6ecda0c1a5203fe5392c2 extends Twig_Template
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
        $__internal_d3815d224d8baa45067b7415640757f918c69bff8464e0bf81db3cbe3e8d269c = $this->env->getExtension("native_profiler");
        $__internal_d3815d224d8baa45067b7415640757f918c69bff8464e0bf81db3cbe3e8d269c->enter($__internal_d3815d224d8baa45067b7415640757f918c69bff8464e0bf81db3cbe3e8d269c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d3815d224d8baa45067b7415640757f918c69bff8464e0bf81db3cbe3e8d269c->leave($__internal_d3815d224d8baa45067b7415640757f918c69bff8464e0bf81db3cbe3e8d269c_prof);

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
