<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a413beca946af93f10f2735aaf63ec92f8c6b489ff15de4d031a3fab43e5c383 extends Twig_Template
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
        $__internal_b7f1194fe72695f37d2d9af9c41c14d802fe4cca908c53e35d4a0ff81447c6b5 = $this->env->getExtension("native_profiler");
        $__internal_b7f1194fe72695f37d2d9af9c41c14d802fe4cca908c53e35d4a0ff81447c6b5->enter($__internal_b7f1194fe72695f37d2d9af9c41c14d802fe4cca908c53e35d4a0ff81447c6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b7f1194fe72695f37d2d9af9c41c14d802fe4cca908c53e35d4a0ff81447c6b5->leave($__internal_b7f1194fe72695f37d2d9af9c41c14d802fe4cca908c53e35d4a0ff81447c6b5_prof);

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
