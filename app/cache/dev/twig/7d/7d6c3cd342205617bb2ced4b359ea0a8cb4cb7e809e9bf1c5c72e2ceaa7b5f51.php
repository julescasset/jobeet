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
        $__internal_30305788cba63d20eaee556e3f50befd1010b49aed8456c605cc25a77b1fb423 = $this->env->getExtension("native_profiler");
        $__internal_30305788cba63d20eaee556e3f50befd1010b49aed8456c605cc25a77b1fb423->enter($__internal_30305788cba63d20eaee556e3f50befd1010b49aed8456c605cc25a77b1fb423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_30305788cba63d20eaee556e3f50befd1010b49aed8456c605cc25a77b1fb423->leave($__internal_30305788cba63d20eaee556e3f50befd1010b49aed8456c605cc25a77b1fb423_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_768ed778ce1cf3f97db5fe5b5d96acad7155929156740ae6780841b17bd58cf4 = $this->env->getExtension("native_profiler");
        $__internal_768ed778ce1cf3f97db5fe5b5d96acad7155929156740ae6780841b17bd58cf4->enter($__internal_768ed778ce1cf3f97db5fe5b5d96acad7155929156740ae6780841b17bd58cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_768ed778ce1cf3f97db5fe5b5d96acad7155929156740ae6780841b17bd58cf4->leave($__internal_768ed778ce1cf3f97db5fe5b5d96acad7155929156740ae6780841b17bd58cf4_prof);

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
