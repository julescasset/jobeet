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
        $__internal_860521a72c32a114cb3bf752e5b4d31f1b2239c663a1171d40652d932ed90cbf = $this->env->getExtension("native_profiler");
        $__internal_860521a72c32a114cb3bf752e5b4d31f1b2239c663a1171d40652d932ed90cbf->enter($__internal_860521a72c32a114cb3bf752e5b4d31f1b2239c663a1171d40652d932ed90cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_860521a72c32a114cb3bf752e5b4d31f1b2239c663a1171d40652d932ed90cbf->leave($__internal_860521a72c32a114cb3bf752e5b4d31f1b2239c663a1171d40652d932ed90cbf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e45316ae8257a0ac33bbae9e20359a5e8dfa6f44df33d8e0a195f2e0a2300d76 = $this->env->getExtension("native_profiler");
        $__internal_e45316ae8257a0ac33bbae9e20359a5e8dfa6f44df33d8e0a195f2e0a2300d76->enter($__internal_e45316ae8257a0ac33bbae9e20359a5e8dfa6f44df33d8e0a195f2e0a2300d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e45316ae8257a0ac33bbae9e20359a5e8dfa6f44df33d8e0a195f2e0a2300d76->leave($__internal_e45316ae8257a0ac33bbae9e20359a5e8dfa6f44df33d8e0a195f2e0a2300d76_prof);

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
