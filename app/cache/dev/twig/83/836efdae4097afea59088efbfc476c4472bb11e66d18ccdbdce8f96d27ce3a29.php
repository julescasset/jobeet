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
        $__internal_b297df79bd53daca423d19727d53015b2702681b47c9648fe915d9ef6df68f9b = $this->env->getExtension("native_profiler");
        $__internal_b297df79bd53daca423d19727d53015b2702681b47c9648fe915d9ef6df68f9b->enter($__internal_b297df79bd53daca423d19727d53015b2702681b47c9648fe915d9ef6df68f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b297df79bd53daca423d19727d53015b2702681b47c9648fe915d9ef6df68f9b->leave($__internal_b297df79bd53daca423d19727d53015b2702681b47c9648fe915d9ef6df68f9b_prof);

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
