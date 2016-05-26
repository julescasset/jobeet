<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2095fdc7e8e5f9e7a6e652019895875683153f73f16b7bb7e8b3e93594ff4059 extends Twig_Template
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
        $__internal_13c80e688ddf3fa589abae3660dd2d90c29f5dd884a7cc0fbef685b1b7d05fa7 = $this->env->getExtension("native_profiler");
        $__internal_13c80e688ddf3fa589abae3660dd2d90c29f5dd884a7cc0fbef685b1b7d05fa7->enter($__internal_13c80e688ddf3fa589abae3660dd2d90c29f5dd884a7cc0fbef685b1b7d05fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_13c80e688ddf3fa589abae3660dd2d90c29f5dd884a7cc0fbef685b1b7d05fa7->leave($__internal_13c80e688ddf3fa589abae3660dd2d90c29f5dd884a7cc0fbef685b1b7d05fa7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_57211430340bdae0edce706b10d8ec8c2ce1c7b32accaa6738d6720b3c7dbb17 = $this->env->getExtension("native_profiler");
        $__internal_57211430340bdae0edce706b10d8ec8c2ce1c7b32accaa6738d6720b3c7dbb17->enter($__internal_57211430340bdae0edce706b10d8ec8c2ce1c7b32accaa6738d6720b3c7dbb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_57211430340bdae0edce706b10d8ec8c2ce1c7b32accaa6738d6720b3c7dbb17->leave($__internal_57211430340bdae0edce706b10d8ec8c2ce1c7b32accaa6738d6720b3c7dbb17_prof);

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
