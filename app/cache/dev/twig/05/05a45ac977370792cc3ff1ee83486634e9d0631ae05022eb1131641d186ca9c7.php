<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_66ab4437267630c296d760f56348b2e9bb2d4afbcd6f1b6b445de715f698cbc8 extends Twig_Template
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
        $__internal_b2b1a5d86afb12c5605831aba52647ae85864ff8546745e72ec9ac6abff8487a = $this->env->getExtension("native_profiler");
        $__internal_b2b1a5d86afb12c5605831aba52647ae85864ff8546745e72ec9ac6abff8487a->enter($__internal_b2b1a5d86afb12c5605831aba52647ae85864ff8546745e72ec9ac6abff8487a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b2b1a5d86afb12c5605831aba52647ae85864ff8546745e72ec9ac6abff8487a->leave($__internal_b2b1a5d86afb12c5605831aba52647ae85864ff8546745e72ec9ac6abff8487a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
