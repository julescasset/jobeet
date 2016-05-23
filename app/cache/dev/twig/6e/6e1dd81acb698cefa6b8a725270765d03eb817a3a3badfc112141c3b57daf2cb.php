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
        $__internal_ccee93c7add72d99e024b5b159c488f38b3e8238e841adf0a5485bc86f11c591 = $this->env->getExtension("native_profiler");
        $__internal_ccee93c7add72d99e024b5b159c488f38b3e8238e841adf0a5485bc86f11c591->enter($__internal_ccee93c7add72d99e024b5b159c488f38b3e8238e841adf0a5485bc86f11c591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_ccee93c7add72d99e024b5b159c488f38b3e8238e841adf0a5485bc86f11c591->leave($__internal_ccee93c7add72d99e024b5b159c488f38b3e8238e841adf0a5485bc86f11c591_prof);

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
