<?php

/* @SonataAdmin/CRUD/show_date.html.twig */
class __TwigTemplate_9a1a8a2222543764e340de1985ad46c876029c4339c0f392acdef2537f33497a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_date.html.twig", 12);
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
        $__internal_1312dfff57610f8d54be704a2c9184e66b505bb0067ad59c41601be1a2df60dc = $this->env->getExtension("native_profiler");
        $__internal_1312dfff57610f8d54be704a2c9184e66b505bb0067ad59c41601be1a2df60dc->enter($__internal_1312dfff57610f8d54be704a2c9184e66b505bb0067ad59c41601be1a2df60dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1312dfff57610f8d54be704a2c9184e66b505bb0067ad59c41601be1a2df60dc->leave($__internal_1312dfff57610f8d54be704a2c9184e66b505bb0067ad59c41601be1a2df60dc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a4e039091523eeb2aecf2d66ba2c5bf39e0eba70e44d4c3ff01337c25d939ad = $this->env->getExtension("native_profiler");
        $__internal_8a4e039091523eeb2aecf2d66ba2c5bf39e0eba70e44d4c3ff01337c25d939ad->enter($__internal_8a4e039091523eeb2aecf2d66ba2c5bf39e0eba70e44d4c3ff01337c25d939ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_8a4e039091523eeb2aecf2d66ba2c5bf39e0eba70e44d4c3ff01337c25d939ad->leave($__internal_8a4e039091523eeb2aecf2d66ba2c5bf39e0eba70e44d4c3ff01337c25d939ad_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_date.html.twig";
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
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
