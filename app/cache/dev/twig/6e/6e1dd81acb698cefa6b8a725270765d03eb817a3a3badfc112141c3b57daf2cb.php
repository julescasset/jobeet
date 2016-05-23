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
        $__internal_66c71f070d9da034d0f1bce8a011474567c2244de9911a8fd9d3ab31e2af826d = $this->env->getExtension("native_profiler");
        $__internal_66c71f070d9da034d0f1bce8a011474567c2244de9911a8fd9d3ab31e2af826d->enter($__internal_66c71f070d9da034d0f1bce8a011474567c2244de9911a8fd9d3ab31e2af826d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_66c71f070d9da034d0f1bce8a011474567c2244de9911a8fd9d3ab31e2af826d->leave($__internal_66c71f070d9da034d0f1bce8a011474567c2244de9911a8fd9d3ab31e2af826d_prof);

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
