<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_29ee2a3459bfe237a54950267d78ea65bab74bd433f614b7a850b2b42a080ec2 extends Twig_Template
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
        $__internal_fee7597dc34523e0142f0bd7410997c778b52dd0f1514446de201b1d87b2d895 = $this->env->getExtension("native_profiler");
        $__internal_fee7597dc34523e0142f0bd7410997c778b52dd0f1514446de201b1d87b2d895->enter($__internal_fee7597dc34523e0142f0bd7410997c778b52dd0f1514446de201b1d87b2d895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fee7597dc34523e0142f0bd7410997c778b52dd0f1514446de201b1d87b2d895->leave($__internal_fee7597dc34523e0142f0bd7410997c778b52dd0f1514446de201b1d87b2d895_prof);

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
