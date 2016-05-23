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
        $__internal_27e6168c41984a2100e0d8d4d9d07892c2f05c2bdf494e9018053b4276f92dce = $this->env->getExtension("native_profiler");
        $__internal_27e6168c41984a2100e0d8d4d9d07892c2f05c2bdf494e9018053b4276f92dce->enter($__internal_27e6168c41984a2100e0d8d4d9d07892c2f05c2bdf494e9018053b4276f92dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_27e6168c41984a2100e0d8d4d9d07892c2f05c2bdf494e9018053b4276f92dce->leave($__internal_27e6168c41984a2100e0d8d4d9d07892c2f05c2bdf494e9018053b4276f92dce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c9dcd2529788a8f2dc1012f41a0a63377f294a5813c4f7c176f374ba22b8aa1 = $this->env->getExtension("native_profiler");
        $__internal_6c9dcd2529788a8f2dc1012f41a0a63377f294a5813c4f7c176f374ba22b8aa1->enter($__internal_6c9dcd2529788a8f2dc1012f41a0a63377f294a5813c4f7c176f374ba22b8aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6c9dcd2529788a8f2dc1012f41a0a63377f294a5813c4f7c176f374ba22b8aa1->leave($__internal_6c9dcd2529788a8f2dc1012f41a0a63377f294a5813c4f7c176f374ba22b8aa1_prof);

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
