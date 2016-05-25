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
        $__internal_f104b4a3d7f08260adf64bc1a1b75a707dcfdd2632ef363fb419d4787bd2ee8c = $this->env->getExtension("native_profiler");
        $__internal_f104b4a3d7f08260adf64bc1a1b75a707dcfdd2632ef363fb419d4787bd2ee8c->enter($__internal_f104b4a3d7f08260adf64bc1a1b75a707dcfdd2632ef363fb419d4787bd2ee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f104b4a3d7f08260adf64bc1a1b75a707dcfdd2632ef363fb419d4787bd2ee8c->leave($__internal_f104b4a3d7f08260adf64bc1a1b75a707dcfdd2632ef363fb419d4787bd2ee8c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccb556cb930c2e4e11fa768f58933b061a73383edf86bb0eaae0b6e67686c357 = $this->env->getExtension("native_profiler");
        $__internal_ccb556cb930c2e4e11fa768f58933b061a73383edf86bb0eaae0b6e67686c357->enter($__internal_ccb556cb930c2e4e11fa768f58933b061a73383edf86bb0eaae0b6e67686c357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ccb556cb930c2e4e11fa768f58933b061a73383edf86bb0eaae0b6e67686c357->leave($__internal_ccb556cb930c2e4e11fa768f58933b061a73383edf86bb0eaae0b6e67686c357_prof);

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
