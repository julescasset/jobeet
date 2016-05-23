<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8ac25b982ccb2f8368f7371e6b446e0af47ed984c50243e8cf1bb10fdfc38735 extends Twig_Template
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
        $__internal_1c5f699ea649867b56d7827dc3a36c8506c72d8c0ea7c3d90980611a00f830f3 = $this->env->getExtension("native_profiler");
        $__internal_1c5f699ea649867b56d7827dc3a36c8506c72d8c0ea7c3d90980611a00f830f3->enter($__internal_1c5f699ea649867b56d7827dc3a36c8506c72d8c0ea7c3d90980611a00f830f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1c5f699ea649867b56d7827dc3a36c8506c72d8c0ea7c3d90980611a00f830f3->leave($__internal_1c5f699ea649867b56d7827dc3a36c8506c72d8c0ea7c3d90980611a00f830f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
