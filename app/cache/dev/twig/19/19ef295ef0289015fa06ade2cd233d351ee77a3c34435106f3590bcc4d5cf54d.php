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
        $__internal_4fcc6e4997c84698f87f28509a35e28ef2a3052aaa9d5c4460869c15f93c3dc2 = $this->env->getExtension("native_profiler");
        $__internal_4fcc6e4997c84698f87f28509a35e28ef2a3052aaa9d5c4460869c15f93c3dc2->enter($__internal_4fcc6e4997c84698f87f28509a35e28ef2a3052aaa9d5c4460869c15f93c3dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4fcc6e4997c84698f87f28509a35e28ef2a3052aaa9d5c4460869c15f93c3dc2->leave($__internal_4fcc6e4997c84698f87f28509a35e28ef2a3052aaa9d5c4460869c15f93c3dc2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9246043a6f58610bd8971ae40019c213a128854a6ddc461275ed36b56c040660 = $this->env->getExtension("native_profiler");
        $__internal_9246043a6f58610bd8971ae40019c213a128854a6ddc461275ed36b56c040660->enter($__internal_9246043a6f58610bd8971ae40019c213a128854a6ddc461275ed36b56c040660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9246043a6f58610bd8971ae40019c213a128854a6ddc461275ed36b56c040660->leave($__internal_9246043a6f58610bd8971ae40019c213a128854a6ddc461275ed36b56c040660_prof);

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
