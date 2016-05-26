<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_7967e0dd551e07b175879a7af0c5b73e29d2793723462c77d2b23dbc836b9fec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_datetime.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abba04b0e5e20c8264ef96d236ccda2c05658461f5191b5ebfdb4d32d0bb2924 = $this->env->getExtension("native_profiler");
        $__internal_abba04b0e5e20c8264ef96d236ccda2c05658461f5191b5ebfdb4d32d0bb2924->enter($__internal_abba04b0e5e20c8264ef96d236ccda2c05658461f5191b5ebfdb4d32d0bb2924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abba04b0e5e20c8264ef96d236ccda2c05658461f5191b5ebfdb4d32d0bb2924->leave($__internal_abba04b0e5e20c8264ef96d236ccda2c05658461f5191b5ebfdb4d32d0bb2924_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_574a63b52e05a1fb585ad1c56d218edc08ee1236b39ec7b8b26da382eb6ca2d9 = $this->env->getExtension("native_profiler");
        $__internal_574a63b52e05a1fb585ad1c56d218edc08ee1236b39ec7b8b26da382eb6ca2d9->enter($__internal_574a63b52e05a1fb585ad1c56d218edc08ee1236b39ec7b8b26da382eb6ca2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_574a63b52e05a1fb585ad1c56d218edc08ee1236b39ec7b8b26da382eb6ca2d9->leave($__internal_574a63b52e05a1fb585ad1c56d218edc08ee1236b39ec7b8b26da382eb6ca2d9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
