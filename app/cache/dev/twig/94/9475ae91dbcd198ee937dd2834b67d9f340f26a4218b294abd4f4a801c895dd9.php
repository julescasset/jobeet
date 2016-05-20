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
        $__internal_87ba9e485abb1c1dcc207be031f45487f50524dae8667296334f758b218dee5e = $this->env->getExtension("native_profiler");
        $__internal_87ba9e485abb1c1dcc207be031f45487f50524dae8667296334f758b218dee5e->enter($__internal_87ba9e485abb1c1dcc207be031f45487f50524dae8667296334f758b218dee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87ba9e485abb1c1dcc207be031f45487f50524dae8667296334f758b218dee5e->leave($__internal_87ba9e485abb1c1dcc207be031f45487f50524dae8667296334f758b218dee5e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94da7164eda5bb248fc7b59f6f464f1f20fa8034a0d85a74a9ff7c7c0364bed6 = $this->env->getExtension("native_profiler");
        $__internal_94da7164eda5bb248fc7b59f6f464f1f20fa8034a0d85a74a9ff7c7c0364bed6->enter($__internal_94da7164eda5bb248fc7b59f6f464f1f20fa8034a0d85a74a9ff7c7c0364bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_94da7164eda5bb248fc7b59f6f464f1f20fa8034a0d85a74a9ff7c7c0364bed6->leave($__internal_94da7164eda5bb248fc7b59f6f464f1f20fa8034a0d85a74a9ff7c7c0364bed6_prof);

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
