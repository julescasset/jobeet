<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a413beca946af93f10f2735aaf63ec92f8c6b489ff15de4d031a3fab43e5c383 extends Twig_Template
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
        $__internal_f6c6c7375d51ff083a7c5d06fa364dd36dace4d43e650b05e052ff815ecd8fe1 = $this->env->getExtension("native_profiler");
        $__internal_f6c6c7375d51ff083a7c5d06fa364dd36dace4d43e650b05e052ff815ecd8fe1->enter($__internal_f6c6c7375d51ff083a7c5d06fa364dd36dace4d43e650b05e052ff815ecd8fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f6c6c7375d51ff083a7c5d06fa364dd36dace4d43e650b05e052ff815ecd8fe1->leave($__internal_f6c6c7375d51ff083a7c5d06fa364dd36dace4d43e650b05e052ff815ecd8fe1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
