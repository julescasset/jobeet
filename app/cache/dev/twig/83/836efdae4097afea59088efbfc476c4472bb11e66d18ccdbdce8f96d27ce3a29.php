<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cc898cd160bf70b6f4c22c0001444813f5803e713653eb8268eaff2935f4d9da extends Twig_Template
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
        $__internal_f29f2746b38731e9cdca7b51950aed44ca7fa971df55728b82c75cd792c84e2e = $this->env->getExtension("native_profiler");
        $__internal_f29f2746b38731e9cdca7b51950aed44ca7fa971df55728b82c75cd792c84e2e->enter($__internal_f29f2746b38731e9cdca7b51950aed44ca7fa971df55728b82c75cd792c84e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f29f2746b38731e9cdca7b51950aed44ca7fa971df55728b82c75cd792c84e2e->leave($__internal_f29f2746b38731e9cdca7b51950aed44ca7fa971df55728b82c75cd792c84e2e_prof);

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
