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
        $__internal_304a46c6b92a737c05be28181ad4b7f6e5faffe868970c28fb5563fad41d28f9 = $this->env->getExtension("native_profiler");
        $__internal_304a46c6b92a737c05be28181ad4b7f6e5faffe868970c28fb5563fad41d28f9->enter($__internal_304a46c6b92a737c05be28181ad4b7f6e5faffe868970c28fb5563fad41d28f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_304a46c6b92a737c05be28181ad4b7f6e5faffe868970c28fb5563fad41d28f9->leave($__internal_304a46c6b92a737c05be28181ad4b7f6e5faffe868970c28fb5563fad41d28f9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f2e0d6ee85ecdc75d847b5033be8984f41658c03b8f41145b366b7ba60a29ed = $this->env->getExtension("native_profiler");
        $__internal_2f2e0d6ee85ecdc75d847b5033be8984f41658c03b8f41145b366b7ba60a29ed->enter($__internal_2f2e0d6ee85ecdc75d847b5033be8984f41658c03b8f41145b366b7ba60a29ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f2e0d6ee85ecdc75d847b5033be8984f41658c03b8f41145b366b7ba60a29ed->leave($__internal_2f2e0d6ee85ecdc75d847b5033be8984f41658c03b8f41145b366b7ba60a29ed_prof);

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
