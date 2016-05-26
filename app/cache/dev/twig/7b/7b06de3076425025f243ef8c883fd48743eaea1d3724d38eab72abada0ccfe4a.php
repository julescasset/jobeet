<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ffa0305c6bc21f8b8b7aca4942c5577865e2cbb1d2cd71005ee4cca3626b42c2 extends Twig_Template
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
        $__internal_99e3fc3a41e3166012223c25c47a6f4a84a18a6584627ee6b96f58a96fe5a7e7 = $this->env->getExtension("native_profiler");
        $__internal_99e3fc3a41e3166012223c25c47a6f4a84a18a6584627ee6b96f58a96fe5a7e7->enter($__internal_99e3fc3a41e3166012223c25c47a6f4a84a18a6584627ee6b96f58a96fe5a7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_99e3fc3a41e3166012223c25c47a6f4a84a18a6584627ee6b96f58a96fe5a7e7->leave($__internal_99e3fc3a41e3166012223c25c47a6f4a84a18a6584627ee6b96f58a96fe5a7e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
