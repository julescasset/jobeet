<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_849c9b072fc4a703276b3e547f4bfea37ea4d6fea5d1cf62a4a026192f7bdbb2 extends Twig_Template
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
        $__internal_32da884864736534a05f33c98b44be0586fd5a32ec16d592eb51f5f7a1ff1346 = $this->env->getExtension("native_profiler");
        $__internal_32da884864736534a05f33c98b44be0586fd5a32ec16d592eb51f5f7a1ff1346->enter($__internal_32da884864736534a05f33c98b44be0586fd5a32ec16d592eb51f5f7a1ff1346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_32da884864736534a05f33c98b44be0586fd5a32ec16d592eb51f5f7a1ff1346->leave($__internal_32da884864736534a05f33c98b44be0586fd5a32ec16d592eb51f5f7a1ff1346_prof);

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
