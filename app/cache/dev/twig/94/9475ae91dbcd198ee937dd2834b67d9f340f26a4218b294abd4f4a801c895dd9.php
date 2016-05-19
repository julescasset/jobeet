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
        $__internal_db532019347c5528a425c545d731dd1621cfd850763486ed63fb430a940e714b = $this->env->getExtension("native_profiler");
        $__internal_db532019347c5528a425c545d731dd1621cfd850763486ed63fb430a940e714b->enter($__internal_db532019347c5528a425c545d731dd1621cfd850763486ed63fb430a940e714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_db532019347c5528a425c545d731dd1621cfd850763486ed63fb430a940e714b->leave($__internal_db532019347c5528a425c545d731dd1621cfd850763486ed63fb430a940e714b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fd48d5f4bf0a2dc3fc1671816d1b15c1c5c6fd58d10934d2a4a17ec70181c8f = $this->env->getExtension("native_profiler");
        $__internal_0fd48d5f4bf0a2dc3fc1671816d1b15c1c5c6fd58d10934d2a4a17ec70181c8f->enter($__internal_0fd48d5f4bf0a2dc3fc1671816d1b15c1c5c6fd58d10934d2a4a17ec70181c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0fd48d5f4bf0a2dc3fc1671816d1b15c1c5c6fd58d10934d2a4a17ec70181c8f->leave($__internal_0fd48d5f4bf0a2dc3fc1671816d1b15c1c5c6fd58d10934d2a4a17ec70181c8f_prof);

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
