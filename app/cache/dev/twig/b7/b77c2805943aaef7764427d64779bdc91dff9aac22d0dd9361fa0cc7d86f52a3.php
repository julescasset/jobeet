<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_328e8361a44af851a4c1083a8dd95a026376351b35e827f6e6690f69725125fb extends Twig_Template
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
        $__internal_78ce727f0578d5dbe91568fb683d6ee9ddc267b5f64f6e5fbc1fbf0070dd5c1d = $this->env->getExtension("native_profiler");
        $__internal_78ce727f0578d5dbe91568fb683d6ee9ddc267b5f64f6e5fbc1fbf0070dd5c1d->enter($__internal_78ce727f0578d5dbe91568fb683d6ee9ddc267b5f64f6e5fbc1fbf0070dd5c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_78ce727f0578d5dbe91568fb683d6ee9ddc267b5f64f6e5fbc1fbf0070dd5c1d->leave($__internal_78ce727f0578d5dbe91568fb683d6ee9ddc267b5f64f6e5fbc1fbf0070dd5c1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
