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
        $__internal_cafcc5ec8e38fdd27366bf5a477f6fd5a90352a199c1f87aa812fb32972fcd90 = $this->env->getExtension("native_profiler");
        $__internal_cafcc5ec8e38fdd27366bf5a477f6fd5a90352a199c1f87aa812fb32972fcd90->enter($__internal_cafcc5ec8e38fdd27366bf5a477f6fd5a90352a199c1f87aa812fb32972fcd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cafcc5ec8e38fdd27366bf5a477f6fd5a90352a199c1f87aa812fb32972fcd90->leave($__internal_cafcc5ec8e38fdd27366bf5a477f6fd5a90352a199c1f87aa812fb32972fcd90_prof);

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
