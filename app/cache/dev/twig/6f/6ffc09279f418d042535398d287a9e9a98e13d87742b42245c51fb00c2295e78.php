<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_51673ab710871660f668caea544699a0bae4c449748c80c2730c9a9b6655f1b8 extends Twig_Template
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
        $__internal_89a12f452751ed84f3eaf4f2d11590637126a8eecc9a67135f6858afd7ceded5 = $this->env->getExtension("native_profiler");
        $__internal_89a12f452751ed84f3eaf4f2d11590637126a8eecc9a67135f6858afd7ceded5->enter($__internal_89a12f452751ed84f3eaf4f2d11590637126a8eecc9a67135f6858afd7ceded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_89a12f452751ed84f3eaf4f2d11590637126a8eecc9a67135f6858afd7ceded5->leave($__internal_89a12f452751ed84f3eaf4f2d11590637126a8eecc9a67135f6858afd7ceded5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
