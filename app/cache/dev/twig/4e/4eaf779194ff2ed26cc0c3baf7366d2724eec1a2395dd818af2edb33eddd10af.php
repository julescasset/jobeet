<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_063aaef72c73d300be3716b17c685de7db25c000f05a273ed39ed48955b4bd47 extends Twig_Template
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
        $__internal_ed7df9b33f8789a4d60d35f632fbc16374ca7f967f4b8cf0529b7c0b66e834a3 = $this->env->getExtension("native_profiler");
        $__internal_ed7df9b33f8789a4d60d35f632fbc16374ca7f967f4b8cf0529b7c0b66e834a3->enter($__internal_ed7df9b33f8789a4d60d35f632fbc16374ca7f967f4b8cf0529b7c0b66e834a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_ed7df9b33f8789a4d60d35f632fbc16374ca7f967f4b8cf0529b7c0b66e834a3->leave($__internal_ed7df9b33f8789a4d60d35f632fbc16374ca7f967f4b8cf0529b7c0b66e834a3_prof);

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
