<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_fae8b15c2d4724a7804b7f3147fbc38a0465379df70fca707b32213d71933b1c extends Twig_Template
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
        $__internal_8855290685da66e48c565f00ee229f79d83aaa12d8f7a35b1f56f66b624916f7 = $this->env->getExtension("native_profiler");
        $__internal_8855290685da66e48c565f00ee229f79d83aaa12d8f7a35b1f56f66b624916f7->enter($__internal_8855290685da66e48c565f00ee229f79d83aaa12d8f7a35b1f56f66b624916f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_8855290685da66e48c565f00ee229f79d83aaa12d8f7a35b1f56f66b624916f7->leave($__internal_8855290685da66e48c565f00ee229f79d83aaa12d8f7a35b1f56f66b624916f7_prof);

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
