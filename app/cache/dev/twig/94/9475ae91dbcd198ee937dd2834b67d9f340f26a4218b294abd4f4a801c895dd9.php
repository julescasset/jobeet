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
        $__internal_0d36a7345bbde72f34d8ac5d30e73db6dce262ef56358672507455bb47e9a077 = $this->env->getExtension("native_profiler");
        $__internal_0d36a7345bbde72f34d8ac5d30e73db6dce262ef56358672507455bb47e9a077->enter($__internal_0d36a7345bbde72f34d8ac5d30e73db6dce262ef56358672507455bb47e9a077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0d36a7345bbde72f34d8ac5d30e73db6dce262ef56358672507455bb47e9a077->leave($__internal_0d36a7345bbde72f34d8ac5d30e73db6dce262ef56358672507455bb47e9a077_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_074c730302e439bdbe23d58c8d49a5a6143690e0b77f9b99731f348680dd2dd1 = $this->env->getExtension("native_profiler");
        $__internal_074c730302e439bdbe23d58c8d49a5a6143690e0b77f9b99731f348680dd2dd1->enter($__internal_074c730302e439bdbe23d58c8d49a5a6143690e0b77f9b99731f348680dd2dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_074c730302e439bdbe23d58c8d49a5a6143690e0b77f9b99731f348680dd2dd1->leave($__internal_074c730302e439bdbe23d58c8d49a5a6143690e0b77f9b99731f348680dd2dd1_prof);

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
