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
        $__internal_ac39599eb16d004a04b60314fbee02d78c729f048be2d046f9658e2f0dd35bab = $this->env->getExtension("native_profiler");
        $__internal_ac39599eb16d004a04b60314fbee02d78c729f048be2d046f9658e2f0dd35bab->enter($__internal_ac39599eb16d004a04b60314fbee02d78c729f048be2d046f9658e2f0dd35bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac39599eb16d004a04b60314fbee02d78c729f048be2d046f9658e2f0dd35bab->leave($__internal_ac39599eb16d004a04b60314fbee02d78c729f048be2d046f9658e2f0dd35bab_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cc941b57676ba96c07da6a08b3d4dc1ef57046c4bd710f2959e13c12bab1e790 = $this->env->getExtension("native_profiler");
        $__internal_cc941b57676ba96c07da6a08b3d4dc1ef57046c4bd710f2959e13c12bab1e790->enter($__internal_cc941b57676ba96c07da6a08b3d4dc1ef57046c4bd710f2959e13c12bab1e790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_cc941b57676ba96c07da6a08b3d4dc1ef57046c4bd710f2959e13c12bab1e790->leave($__internal_cc941b57676ba96c07da6a08b3d4dc1ef57046c4bd710f2959e13c12bab1e790_prof);

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
