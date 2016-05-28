<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bcfcedd1bddce799784096d6f154e0efab47d224c8ad0e0d0200809a2c16fa55 extends Twig_Template
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
        $__internal_8710d555f2d0a0ec3e5db16f560def49eb615d05364abb5b2e9c72475db4144a = $this->env->getExtension("native_profiler");
        $__internal_8710d555f2d0a0ec3e5db16f560def49eb615d05364abb5b2e9c72475db4144a->enter($__internal_8710d555f2d0a0ec3e5db16f560def49eb615d05364abb5b2e9c72475db4144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8710d555f2d0a0ec3e5db16f560def49eb615d05364abb5b2e9c72475db4144a->leave($__internal_8710d555f2d0a0ec3e5db16f560def49eb615d05364abb5b2e9c72475db4144a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
