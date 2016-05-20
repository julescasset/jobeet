<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_895ddd46a6fb396a9d5d2b00ccace7c3bb2a609488362ed4f33cf6e7358ca702 extends Twig_Template
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
        $__internal_f7b75603b834d658abfa8dc4a61a29ad1ed38a9e818f412d77bb4d77846d094e = $this->env->getExtension("native_profiler");
        $__internal_f7b75603b834d658abfa8dc4a61a29ad1ed38a9e818f412d77bb4d77846d094e->enter($__internal_f7b75603b834d658abfa8dc4a61a29ad1ed38a9e818f412d77bb4d77846d094e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f7b75603b834d658abfa8dc4a61a29ad1ed38a9e818f412d77bb4d77846d094e->leave($__internal_f7b75603b834d658abfa8dc4a61a29ad1ed38a9e818f412d77bb4d77846d094e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
