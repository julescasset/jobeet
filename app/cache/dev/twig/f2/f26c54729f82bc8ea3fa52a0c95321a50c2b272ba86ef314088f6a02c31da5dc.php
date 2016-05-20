<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_731fc35ff8d317c534100c668545e8f27551b84db8a433aa9cbccfdbab971618 extends Twig_Template
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
        $__internal_93d1b0a66c6943454e5caed204938b5853dc5c48e79e370805c0267cad1c7f80 = $this->env->getExtension("native_profiler");
        $__internal_93d1b0a66c6943454e5caed204938b5853dc5c48e79e370805c0267cad1c7f80->enter($__internal_93d1b0a66c6943454e5caed204938b5853dc5c48e79e370805c0267cad1c7f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_93d1b0a66c6943454e5caed204938b5853dc5c48e79e370805c0267cad1c7f80->leave($__internal_93d1b0a66c6943454e5caed204938b5853dc5c48e79e370805c0267cad1c7f80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
