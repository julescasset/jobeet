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
        $__internal_7ee0d217c79ecf0aa978a71625eb6d0ad72aa2a663c3b6b08156c1170473d5de = $this->env->getExtension("native_profiler");
        $__internal_7ee0d217c79ecf0aa978a71625eb6d0ad72aa2a663c3b6b08156c1170473d5de->enter($__internal_7ee0d217c79ecf0aa978a71625eb6d0ad72aa2a663c3b6b08156c1170473d5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7ee0d217c79ecf0aa978a71625eb6d0ad72aa2a663c3b6b08156c1170473d5de->leave($__internal_7ee0d217c79ecf0aa978a71625eb6d0ad72aa2a663c3b6b08156c1170473d5de_prof);

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
