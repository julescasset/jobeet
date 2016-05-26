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
        $__internal_fc7c673df32c80102d4d13ea4bc8e92ecf3ff225d26295e757a2e52a674c52da = $this->env->getExtension("native_profiler");
        $__internal_fc7c673df32c80102d4d13ea4bc8e92ecf3ff225d26295e757a2e52a674c52da->enter($__internal_fc7c673df32c80102d4d13ea4bc8e92ecf3ff225d26295e757a2e52a674c52da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fc7c673df32c80102d4d13ea4bc8e92ecf3ff225d26295e757a2e52a674c52da->leave($__internal_fc7c673df32c80102d4d13ea4bc8e92ecf3ff225d26295e757a2e52a674c52da_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_699aab7860e9abff54a56fd5440b9b0d2e264b087eaa015eba13e482824cbd4c = $this->env->getExtension("native_profiler");
        $__internal_699aab7860e9abff54a56fd5440b9b0d2e264b087eaa015eba13e482824cbd4c->enter($__internal_699aab7860e9abff54a56fd5440b9b0d2e264b087eaa015eba13e482824cbd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_699aab7860e9abff54a56fd5440b9b0d2e264b087eaa015eba13e482824cbd4c->leave($__internal_699aab7860e9abff54a56fd5440b9b0d2e264b087eaa015eba13e482824cbd4c_prof);

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
