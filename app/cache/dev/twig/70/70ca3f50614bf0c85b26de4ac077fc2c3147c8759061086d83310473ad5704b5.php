<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_7dd9f5fc5016eaed936fdd387989d4f62fc0b1c363ad43d239dc150b3a4d385e extends Twig_Template
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
        $__internal_edf7d7e4e65fbef9207c785791c919fdc4462dae4f545c6038fae443b19ba808 = $this->env->getExtension("native_profiler");
        $__internal_edf7d7e4e65fbef9207c785791c919fdc4462dae4f545c6038fae443b19ba808->enter($__internal_edf7d7e4e65fbef9207c785791c919fdc4462dae4f545c6038fae443b19ba808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_edf7d7e4e65fbef9207c785791c919fdc4462dae4f545c6038fae443b19ba808->leave($__internal_edf7d7e4e65fbef9207c785791c919fdc4462dae4f545c6038fae443b19ba808_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3674faeda6341fde86541a5e85f5e09df0be80ea10acf11e7f807a4fa4e08401 = $this->env->getExtension("native_profiler");
        $__internal_3674faeda6341fde86541a5e85f5e09df0be80ea10acf11e7f807a4fa4e08401->enter($__internal_3674faeda6341fde86541a5e85f5e09df0be80ea10acf11e7f807a4fa4e08401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3674faeda6341fde86541a5e85f5e09df0be80ea10acf11e7f807a4fa4e08401->leave($__internal_3674faeda6341fde86541a5e85f5e09df0be80ea10acf11e7f807a4fa4e08401_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
