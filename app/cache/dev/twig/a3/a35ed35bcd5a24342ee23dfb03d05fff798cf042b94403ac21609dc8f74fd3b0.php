<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_04d19ce5478ddc40e8139c05493d0aa1a149b7d93c5cc8ba7a7a024bad0be392 extends Twig_Template
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
        $__internal_5ad55cb5a470ee409df6fa00b7df1caf2f9f4ef53e39405124c718a8adf4df61 = $this->env->getExtension("native_profiler");
        $__internal_5ad55cb5a470ee409df6fa00b7df1caf2f9f4ef53e39405124c718a8adf4df61->enter($__internal_5ad55cb5a470ee409df6fa00b7df1caf2f9f4ef53e39405124c718a8adf4df61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5ad55cb5a470ee409df6fa00b7df1caf2f9f4ef53e39405124c718a8adf4df61->leave($__internal_5ad55cb5a470ee409df6fa00b7df1caf2f9f4ef53e39405124c718a8adf4df61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
