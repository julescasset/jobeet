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
        $__internal_2285e73e425cc84b037bd66ff311657fae5a5720add240f9c4a711ff5f607ea3 = $this->env->getExtension("native_profiler");
        $__internal_2285e73e425cc84b037bd66ff311657fae5a5720add240f9c4a711ff5f607ea3->enter($__internal_2285e73e425cc84b037bd66ff311657fae5a5720add240f9c4a711ff5f607ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2285e73e425cc84b037bd66ff311657fae5a5720add240f9c4a711ff5f607ea3->leave($__internal_2285e73e425cc84b037bd66ff311657fae5a5720add240f9c4a711ff5f607ea3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d246c0b085bf5c124f8fe057b31d7f36588efbe8bf64577ca75be5f4663cc11 = $this->env->getExtension("native_profiler");
        $__internal_8d246c0b085bf5c124f8fe057b31d7f36588efbe8bf64577ca75be5f4663cc11->enter($__internal_8d246c0b085bf5c124f8fe057b31d7f36588efbe8bf64577ca75be5f4663cc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8d246c0b085bf5c124f8fe057b31d7f36588efbe8bf64577ca75be5f4663cc11->leave($__internal_8d246c0b085bf5c124f8fe057b31d7f36588efbe8bf64577ca75be5f4663cc11_prof);

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
