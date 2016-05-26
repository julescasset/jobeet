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
        $__internal_ed39c4131db5ff84ced05888d095c42517af1326e785a196f3348a10dc171ed5 = $this->env->getExtension("native_profiler");
        $__internal_ed39c4131db5ff84ced05888d095c42517af1326e785a196f3348a10dc171ed5->enter($__internal_ed39c4131db5ff84ced05888d095c42517af1326e785a196f3348a10dc171ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ed39c4131db5ff84ced05888d095c42517af1326e785a196f3348a10dc171ed5->leave($__internal_ed39c4131db5ff84ced05888d095c42517af1326e785a196f3348a10dc171ed5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a44e1e740a4c0cefec082fb09afefc51633d6aa0ad2d67640fc880fd9407d13 = $this->env->getExtension("native_profiler");
        $__internal_6a44e1e740a4c0cefec082fb09afefc51633d6aa0ad2d67640fc880fd9407d13->enter($__internal_6a44e1e740a4c0cefec082fb09afefc51633d6aa0ad2d67640fc880fd9407d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a44e1e740a4c0cefec082fb09afefc51633d6aa0ad2d67640fc880fd9407d13->leave($__internal_6a44e1e740a4c0cefec082fb09afefc51633d6aa0ad2d67640fc880fd9407d13_prof);

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
