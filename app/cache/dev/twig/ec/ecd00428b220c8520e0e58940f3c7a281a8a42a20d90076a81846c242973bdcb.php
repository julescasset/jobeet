<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ef1e4bacafa204a0c930db35453ce46f503bcb46c79c6a95c5317c9b751f7bec extends Twig_Template
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
        $__internal_dd78848ea857665181fdc98f10dba2be347a2f4f0166f71ea2d3a9bd139b4eec = $this->env->getExtension("native_profiler");
        $__internal_dd78848ea857665181fdc98f10dba2be347a2f4f0166f71ea2d3a9bd139b4eec->enter($__internal_dd78848ea857665181fdc98f10dba2be347a2f4f0166f71ea2d3a9bd139b4eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dd78848ea857665181fdc98f10dba2be347a2f4f0166f71ea2d3a9bd139b4eec->leave($__internal_dd78848ea857665181fdc98f10dba2be347a2f4f0166f71ea2d3a9bd139b4eec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
