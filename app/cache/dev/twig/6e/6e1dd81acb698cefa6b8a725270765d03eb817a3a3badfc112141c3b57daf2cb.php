<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ecddd8ed31a240ebfd62e53b28eb2a0815b6e10f9c3e94d87afdbf0785be100f extends Twig_Template
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
        $__internal_775519c1b9d5accf288c68ac9dd0cff4857aa2093d5984112d19d1d232fb8c09 = $this->env->getExtension("native_profiler");
        $__internal_775519c1b9d5accf288c68ac9dd0cff4857aa2093d5984112d19d1d232fb8c09->enter($__internal_775519c1b9d5accf288c68ac9dd0cff4857aa2093d5984112d19d1d232fb8c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_775519c1b9d5accf288c68ac9dd0cff4857aa2093d5984112d19d1d232fb8c09->leave($__internal_775519c1b9d5accf288c68ac9dd0cff4857aa2093d5984112d19d1d232fb8c09_prof);

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
