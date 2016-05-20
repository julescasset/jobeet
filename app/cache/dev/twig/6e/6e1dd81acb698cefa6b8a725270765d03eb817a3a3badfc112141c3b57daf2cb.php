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
        $__internal_f4870e89e331acee5405838318386c3b98ff35bf143d65c884fdc48d9a358f33 = $this->env->getExtension("native_profiler");
        $__internal_f4870e89e331acee5405838318386c3b98ff35bf143d65c884fdc48d9a358f33->enter($__internal_f4870e89e331acee5405838318386c3b98ff35bf143d65c884fdc48d9a358f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f4870e89e331acee5405838318386c3b98ff35bf143d65c884fdc48d9a358f33->leave($__internal_f4870e89e331acee5405838318386c3b98ff35bf143d65c884fdc48d9a358f33_prof);

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
