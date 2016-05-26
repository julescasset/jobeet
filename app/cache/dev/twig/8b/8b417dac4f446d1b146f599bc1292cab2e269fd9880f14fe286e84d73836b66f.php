<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4d004d12959cd81ffb4f4cc9e77505490cfc8c06114392b7c2ecd1a9ffeea558 extends Twig_Template
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
        $__internal_ce2ce3db139e46acec92bcdb1b6679ae8c383244e0326525898bd7629fc0a60a = $this->env->getExtension("native_profiler");
        $__internal_ce2ce3db139e46acec92bcdb1b6679ae8c383244e0326525898bd7629fc0a60a->enter($__internal_ce2ce3db139e46acec92bcdb1b6679ae8c383244e0326525898bd7629fc0a60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ce2ce3db139e46acec92bcdb1b6679ae8c383244e0326525898bd7629fc0a60a->leave($__internal_ce2ce3db139e46acec92bcdb1b6679ae8c383244e0326525898bd7629fc0a60a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
