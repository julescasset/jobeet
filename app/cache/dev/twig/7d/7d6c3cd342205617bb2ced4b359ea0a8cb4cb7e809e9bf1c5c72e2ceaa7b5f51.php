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
        $__internal_1fe88fb54adc12f4d637c3a4036c6d5f7137ceaa0ab07311947fe584352de0e0 = $this->env->getExtension("native_profiler");
        $__internal_1fe88fb54adc12f4d637c3a4036c6d5f7137ceaa0ab07311947fe584352de0e0->enter($__internal_1fe88fb54adc12f4d637c3a4036c6d5f7137ceaa0ab07311947fe584352de0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1fe88fb54adc12f4d637c3a4036c6d5f7137ceaa0ab07311947fe584352de0e0->leave($__internal_1fe88fb54adc12f4d637c3a4036c6d5f7137ceaa0ab07311947fe584352de0e0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b09091226b74ab26aa48a86117fe506c5e6e51b95534f85fcab49e7c2244802 = $this->env->getExtension("native_profiler");
        $__internal_6b09091226b74ab26aa48a86117fe506c5e6e51b95534f85fcab49e7c2244802->enter($__internal_6b09091226b74ab26aa48a86117fe506c5e6e51b95534f85fcab49e7c2244802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b09091226b74ab26aa48a86117fe506c5e6e51b95534f85fcab49e7c2244802->leave($__internal_6b09091226b74ab26aa48a86117fe506c5e6e51b95534f85fcab49e7c2244802_prof);

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
