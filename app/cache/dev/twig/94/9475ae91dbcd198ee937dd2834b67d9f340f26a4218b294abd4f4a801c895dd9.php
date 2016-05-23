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
        $__internal_46bb2130dc4f1fb4f5ca8485862af202f24eff1fc03b8069a674d7a5a4e06664 = $this->env->getExtension("native_profiler");
        $__internal_46bb2130dc4f1fb4f5ca8485862af202f24eff1fc03b8069a674d7a5a4e06664->enter($__internal_46bb2130dc4f1fb4f5ca8485862af202f24eff1fc03b8069a674d7a5a4e06664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_46bb2130dc4f1fb4f5ca8485862af202f24eff1fc03b8069a674d7a5a4e06664->leave($__internal_46bb2130dc4f1fb4f5ca8485862af202f24eff1fc03b8069a674d7a5a4e06664_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3acf52ed5b6f4ee7187f3192a6116f8db1366412dd2ab4500a232089443a0a5d = $this->env->getExtension("native_profiler");
        $__internal_3acf52ed5b6f4ee7187f3192a6116f8db1366412dd2ab4500a232089443a0a5d->enter($__internal_3acf52ed5b6f4ee7187f3192a6116f8db1366412dd2ab4500a232089443a0a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3acf52ed5b6f4ee7187f3192a6116f8db1366412dd2ab4500a232089443a0a5d->leave($__internal_3acf52ed5b6f4ee7187f3192a6116f8db1366412dd2ab4500a232089443a0a5d_prof);

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
