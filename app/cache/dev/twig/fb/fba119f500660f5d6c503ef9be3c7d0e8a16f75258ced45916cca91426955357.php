<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_ef480c088868aa0ca3d669d65bb82dc9f889bf680c19ff11f5534ffddf3a591c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6c736ee3d00470c6ff06f33f6a8b9e8f715d4ba317eae9c5533c7ab09072c41 = $this->env->getExtension("native_profiler");
        $__internal_a6c736ee3d00470c6ff06f33f6a8b9e8f715d4ba317eae9c5533c7ab09072c41->enter($__internal_a6c736ee3d00470c6ff06f33f6a8b9e8f715d4ba317eae9c5533c7ab09072c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6c736ee3d00470c6ff06f33f6a8b9e8f715d4ba317eae9c5533c7ab09072c41->leave($__internal_a6c736ee3d00470c6ff06f33f6a8b9e8f715d4ba317eae9c5533c7ab09072c41_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_215da24bf7b4397ec8cca8c995dfedbf5fdd89ba929a264dba5fdc4edcf7bdee = $this->env->getExtension("native_profiler");
        $__internal_215da24bf7b4397ec8cca8c995dfedbf5fdd89ba929a264dba5fdc4edcf7bdee->enter($__internal_215da24bf7b4397ec8cca8c995dfedbf5fdd89ba929a264dba5fdc4edcf7bdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_215da24bf7b4397ec8cca8c995dfedbf5fdd89ba929a264dba5fdc4edcf7bdee->leave($__internal_215da24bf7b4397ec8cca8c995dfedbf5fdd89ba929a264dba5fdc4edcf7bdee_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
