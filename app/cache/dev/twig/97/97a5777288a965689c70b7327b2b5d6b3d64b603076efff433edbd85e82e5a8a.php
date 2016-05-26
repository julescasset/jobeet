<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_715926942b75590a2e9aa239c81664cd806470738fdd2ecf1e72c6209c7adbc0 extends Twig_Template
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
        $__internal_ad4d03148c99b7f3f45de63ddc478f7bc269a1a0a3b9dfbcb6f7bc163fd79a6c = $this->env->getExtension("native_profiler");
        $__internal_ad4d03148c99b7f3f45de63ddc478f7bc269a1a0a3b9dfbcb6f7bc163fd79a6c->enter($__internal_ad4d03148c99b7f3f45de63ddc478f7bc269a1a0a3b9dfbcb6f7bc163fd79a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ad4d03148c99b7f3f45de63ddc478f7bc269a1a0a3b9dfbcb6f7bc163fd79a6c->leave($__internal_ad4d03148c99b7f3f45de63ddc478f7bc269a1a0a3b9dfbcb6f7bc163fd79a6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
