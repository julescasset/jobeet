<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e6e8f5243b188e18efae36cfd74394f0962fd824908acedeb2cc6a8f5eff8ded extends Twig_Template
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
        $__internal_6945a908411a60f79cf5f486466e9fcb847980860ee05d9a4988fd93707d0b3b = $this->env->getExtension("native_profiler");
        $__internal_6945a908411a60f79cf5f486466e9fcb847980860ee05d9a4988fd93707d0b3b->enter($__internal_6945a908411a60f79cf5f486466e9fcb847980860ee05d9a4988fd93707d0b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6945a908411a60f79cf5f486466e9fcb847980860ee05d9a4988fd93707d0b3b->leave($__internal_6945a908411a60f79cf5f486466e9fcb847980860ee05d9a4988fd93707d0b3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */