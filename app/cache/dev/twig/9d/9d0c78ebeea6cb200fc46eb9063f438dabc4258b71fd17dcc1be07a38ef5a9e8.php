<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2a8fa62dbccd2b9f45ff4b53ac0aee14bdfadc9fced3bb825d593afe8842e19b extends Twig_Template
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
        $__internal_118fbdd9f9d75b07bf2dae751c0c133511e934359bc34b547168b0551ae7baac = $this->env->getExtension("native_profiler");
        $__internal_118fbdd9f9d75b07bf2dae751c0c133511e934359bc34b547168b0551ae7baac->enter($__internal_118fbdd9f9d75b07bf2dae751c0c133511e934359bc34b547168b0551ae7baac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_118fbdd9f9d75b07bf2dae751c0c133511e934359bc34b547168b0551ae7baac->leave($__internal_118fbdd9f9d75b07bf2dae751c0c133511e934359bc34b547168b0551ae7baac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
