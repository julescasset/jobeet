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
        $__internal_db4a16614d5362fd7b4592cff6b0eaac3bf03601ddd0d453db6c78f8236ffce1 = $this->env->getExtension("native_profiler");
        $__internal_db4a16614d5362fd7b4592cff6b0eaac3bf03601ddd0d453db6c78f8236ffce1->enter($__internal_db4a16614d5362fd7b4592cff6b0eaac3bf03601ddd0d453db6c78f8236ffce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_db4a16614d5362fd7b4592cff6b0eaac3bf03601ddd0d453db6c78f8236ffce1->leave($__internal_db4a16614d5362fd7b4592cff6b0eaac3bf03601ddd0d453db6c78f8236ffce1_prof);

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
