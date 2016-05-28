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
        $__internal_71ab43cad379a455c37a0caadc594b0be9ac90d0bcd3c4c406d1e85408363309 = $this->env->getExtension("native_profiler");
        $__internal_71ab43cad379a455c37a0caadc594b0be9ac90d0bcd3c4c406d1e85408363309->enter($__internal_71ab43cad379a455c37a0caadc594b0be9ac90d0bcd3c4c406d1e85408363309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71ab43cad379a455c37a0caadc594b0be9ac90d0bcd3c4c406d1e85408363309->leave($__internal_71ab43cad379a455c37a0caadc594b0be9ac90d0bcd3c4c406d1e85408363309_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f8472a37572d95fde1daa49f3259c5afab9f7249abe030f64b5b694d9afa433a = $this->env->getExtension("native_profiler");
        $__internal_f8472a37572d95fde1daa49f3259c5afab9f7249abe030f64b5b694d9afa433a->enter($__internal_f8472a37572d95fde1daa49f3259c5afab9f7249abe030f64b5b694d9afa433a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_f8472a37572d95fde1daa49f3259c5afab9f7249abe030f64b5b694d9afa433a->leave($__internal_f8472a37572d95fde1daa49f3259c5afab9f7249abe030f64b5b694d9afa433a_prof);

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
