<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9c5fffa6cbbccd772811f64c66253ac084f99e65a6af25916a089e8f09635a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb07bca02fd5a54fc09d57743567c8a23d9d22b5c8bdf34a6a40216b9c925507 = $this->env->getExtension("native_profiler");
        $__internal_bb07bca02fd5a54fc09d57743567c8a23d9d22b5c8bdf34a6a40216b9c925507->enter($__internal_bb07bca02fd5a54fc09d57743567c8a23d9d22b5c8bdf34a6a40216b9c925507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bb07bca02fd5a54fc09d57743567c8a23d9d22b5c8bdf34a6a40216b9c925507->leave($__internal_bb07bca02fd5a54fc09d57743567c8a23d9d22b5c8bdf34a6a40216b9c925507_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a905871427b1a66a0f47c17f6dc6c5edaa53848a5c658b725a636135b31c5ae = $this->env->getExtension("native_profiler");
        $__internal_0a905871427b1a66a0f47c17f6dc6c5edaa53848a5c658b725a636135b31c5ae->enter($__internal_0a905871427b1a66a0f47c17f6dc6c5edaa53848a5c658b725a636135b31c5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0a905871427b1a66a0f47c17f6dc6c5edaa53848a5c658b725a636135b31c5ae->leave($__internal_0a905871427b1a66a0f47c17f6dc6c5edaa53848a5c658b725a636135b31c5ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
