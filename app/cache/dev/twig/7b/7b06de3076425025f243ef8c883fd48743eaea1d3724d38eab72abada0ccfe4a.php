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
        $__internal_46cb4cbb858e77230f16433da467644d9c2ea279565b8330cb2e3ef7d5cdccd9 = $this->env->getExtension("native_profiler");
        $__internal_46cb4cbb858e77230f16433da467644d9c2ea279565b8330cb2e3ef7d5cdccd9->enter($__internal_46cb4cbb858e77230f16433da467644d9c2ea279565b8330cb2e3ef7d5cdccd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_46cb4cbb858e77230f16433da467644d9c2ea279565b8330cb2e3ef7d5cdccd9->leave($__internal_46cb4cbb858e77230f16433da467644d9c2ea279565b8330cb2e3ef7d5cdccd9_prof);

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
