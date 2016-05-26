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
        $__internal_c330005c354645088f7196fc59a35507759d566beab4668749ac05966c3f40cc = $this->env->getExtension("native_profiler");
        $__internal_c330005c354645088f7196fc59a35507759d566beab4668749ac05966c3f40cc->enter($__internal_c330005c354645088f7196fc59a35507759d566beab4668749ac05966c3f40cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c330005c354645088f7196fc59a35507759d566beab4668749ac05966c3f40cc->leave($__internal_c330005c354645088f7196fc59a35507759d566beab4668749ac05966c3f40cc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6780da948ebe246a4832fa3ea53247c8519554f495daa3656f4fe83ea7a4efd9 = $this->env->getExtension("native_profiler");
        $__internal_6780da948ebe246a4832fa3ea53247c8519554f495daa3656f4fe83ea7a4efd9->enter($__internal_6780da948ebe246a4832fa3ea53247c8519554f495daa3656f4fe83ea7a4efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6780da948ebe246a4832fa3ea53247c8519554f495daa3656f4fe83ea7a4efd9->leave($__internal_6780da948ebe246a4832fa3ea53247c8519554f495daa3656f4fe83ea7a4efd9_prof);

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
