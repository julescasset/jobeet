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
        $__internal_2b228403b3752cd0f3427e58f63241728a7787c7e3f727c78d917dc3fb0f2074 = $this->env->getExtension("native_profiler");
        $__internal_2b228403b3752cd0f3427e58f63241728a7787c7e3f727c78d917dc3fb0f2074->enter($__internal_2b228403b3752cd0f3427e58f63241728a7787c7e3f727c78d917dc3fb0f2074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b228403b3752cd0f3427e58f63241728a7787c7e3f727c78d917dc3fb0f2074->leave($__internal_2b228403b3752cd0f3427e58f63241728a7787c7e3f727c78d917dc3fb0f2074_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_164514d683413db450041413239ef763fae0c6b596abf53aef773ba8292e09b3 = $this->env->getExtension("native_profiler");
        $__internal_164514d683413db450041413239ef763fae0c6b596abf53aef773ba8292e09b3->enter($__internal_164514d683413db450041413239ef763fae0c6b596abf53aef773ba8292e09b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_164514d683413db450041413239ef763fae0c6b596abf53aef773ba8292e09b3->leave($__internal_164514d683413db450041413239ef763fae0c6b596abf53aef773ba8292e09b3_prof);

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
