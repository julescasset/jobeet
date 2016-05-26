<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ee1215bee0afb98f3acc1d394576a7cfc9e86af2053f17b82af18625af07d05c extends Twig_Template
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
        $__internal_f8bd810fce61990106e75cd6b7f94e296ac48fd4ba5a87b3c0d0df602ab18bdd = $this->env->getExtension("native_profiler");
        $__internal_f8bd810fce61990106e75cd6b7f94e296ac48fd4ba5a87b3c0d0df602ab18bdd->enter($__internal_f8bd810fce61990106e75cd6b7f94e296ac48fd4ba5a87b3c0d0df602ab18bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f8bd810fce61990106e75cd6b7f94e296ac48fd4ba5a87b3c0d0df602ab18bdd->leave($__internal_f8bd810fce61990106e75cd6b7f94e296ac48fd4ba5a87b3c0d0df602ab18bdd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_05998331ad94200e6d61868f66769517b7e163a8d7dbcad1a36b98581576dbd3 = $this->env->getExtension("native_profiler");
        $__internal_05998331ad94200e6d61868f66769517b7e163a8d7dbcad1a36b98581576dbd3->enter($__internal_05998331ad94200e6d61868f66769517b7e163a8d7dbcad1a36b98581576dbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_05998331ad94200e6d61868f66769517b7e163a8d7dbcad1a36b98581576dbd3->leave($__internal_05998331ad94200e6d61868f66769517b7e163a8d7dbcad1a36b98581576dbd3_prof);

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
