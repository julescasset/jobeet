<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_37e4d9f806559e689dc6c70a5a77a23afe7ca2e192a7c2050d7258f30225990c extends Twig_Template
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
        $__internal_57b5773c2c7a806232b5aaa89bc1bc2697b02336d80ee13ff1d2ff2e422ee47a = $this->env->getExtension("native_profiler");
        $__internal_57b5773c2c7a806232b5aaa89bc1bc2697b02336d80ee13ff1d2ff2e422ee47a->enter($__internal_57b5773c2c7a806232b5aaa89bc1bc2697b02336d80ee13ff1d2ff2e422ee47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_57b5773c2c7a806232b5aaa89bc1bc2697b02336d80ee13ff1d2ff2e422ee47a->leave($__internal_57b5773c2c7a806232b5aaa89bc1bc2697b02336d80ee13ff1d2ff2e422ee47a_prof);

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
