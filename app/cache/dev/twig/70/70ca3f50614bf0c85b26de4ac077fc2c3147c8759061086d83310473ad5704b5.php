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
        $__internal_2a461967095045a2f1959bceb06ffec5b17e3d17c2dc60f7bbf020bb464be604 = $this->env->getExtension("native_profiler");
        $__internal_2a461967095045a2f1959bceb06ffec5b17e3d17c2dc60f7bbf020bb464be604->enter($__internal_2a461967095045a2f1959bceb06ffec5b17e3d17c2dc60f7bbf020bb464be604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2a461967095045a2f1959bceb06ffec5b17e3d17c2dc60f7bbf020bb464be604->leave($__internal_2a461967095045a2f1959bceb06ffec5b17e3d17c2dc60f7bbf020bb464be604_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5175543e23461fe4bd45fedaf50a349e64dc0f6b5e2e39787840e370d90df2f2 = $this->env->getExtension("native_profiler");
        $__internal_5175543e23461fe4bd45fedaf50a349e64dc0f6b5e2e39787840e370d90df2f2->enter($__internal_5175543e23461fe4bd45fedaf50a349e64dc0f6b5e2e39787840e370d90df2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5175543e23461fe4bd45fedaf50a349e64dc0f6b5e2e39787840e370d90df2f2->leave($__internal_5175543e23461fe4bd45fedaf50a349e64dc0f6b5e2e39787840e370d90df2f2_prof);

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
