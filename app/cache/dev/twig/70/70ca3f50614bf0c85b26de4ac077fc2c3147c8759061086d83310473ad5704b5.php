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
        $__internal_b29409f23db20b66f25d69d26973f5e4a5d3d90fbcff7e2f6d0e097eb633facd = $this->env->getExtension("native_profiler");
        $__internal_b29409f23db20b66f25d69d26973f5e4a5d3d90fbcff7e2f6d0e097eb633facd->enter($__internal_b29409f23db20b66f25d69d26973f5e4a5d3d90fbcff7e2f6d0e097eb633facd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b29409f23db20b66f25d69d26973f5e4a5d3d90fbcff7e2f6d0e097eb633facd->leave($__internal_b29409f23db20b66f25d69d26973f5e4a5d3d90fbcff7e2f6d0e097eb633facd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_963856c1d4fe3dad442f254df35f0cdceffc9d3545da23455d289a2e2c7904d8 = $this->env->getExtension("native_profiler");
        $__internal_963856c1d4fe3dad442f254df35f0cdceffc9d3545da23455d289a2e2c7904d8->enter($__internal_963856c1d4fe3dad442f254df35f0cdceffc9d3545da23455d289a2e2c7904d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_963856c1d4fe3dad442f254df35f0cdceffc9d3545da23455d289a2e2c7904d8->leave($__internal_963856c1d4fe3dad442f254df35f0cdceffc9d3545da23455d289a2e2c7904d8_prof);

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
