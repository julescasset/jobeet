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
        $__internal_2be14dc8d6413826c78403f0fe3f2873a7690ca9e22c72d5a2d0f1f2027d854b = $this->env->getExtension("native_profiler");
        $__internal_2be14dc8d6413826c78403f0fe3f2873a7690ca9e22c72d5a2d0f1f2027d854b->enter($__internal_2be14dc8d6413826c78403f0fe3f2873a7690ca9e22c72d5a2d0f1f2027d854b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2be14dc8d6413826c78403f0fe3f2873a7690ca9e22c72d5a2d0f1f2027d854b->leave($__internal_2be14dc8d6413826c78403f0fe3f2873a7690ca9e22c72d5a2d0f1f2027d854b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e6061b504842b29389eb41d0cec8f2df85d6c700b514caa7a7b112d65c9da0b = $this->env->getExtension("native_profiler");
        $__internal_9e6061b504842b29389eb41d0cec8f2df85d6c700b514caa7a7b112d65c9da0b->enter($__internal_9e6061b504842b29389eb41d0cec8f2df85d6c700b514caa7a7b112d65c9da0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e6061b504842b29389eb41d0cec8f2df85d6c700b514caa7a7b112d65c9da0b->leave($__internal_9e6061b504842b29389eb41d0cec8f2df85d6c700b514caa7a7b112d65c9da0b_prof);

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
