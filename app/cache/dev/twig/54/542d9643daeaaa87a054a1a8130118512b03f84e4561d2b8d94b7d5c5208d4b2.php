<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_e293765a4b9334a1eac52b97f38af2bb3f7bd3d7c574df6fee1335aaea218c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_79447d46d5e6704a55ad2735dc2cf03071bacbe5dafad88e2837db42ea65c0a7 = $this->env->getExtension("native_profiler");
        $__internal_79447d46d5e6704a55ad2735dc2cf03071bacbe5dafad88e2837db42ea65c0a7->enter($__internal_79447d46d5e6704a55ad2735dc2cf03071bacbe5dafad88e2837db42ea65c0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79447d46d5e6704a55ad2735dc2cf03071bacbe5dafad88e2837db42ea65c0a7->leave($__internal_79447d46d5e6704a55ad2735dc2cf03071bacbe5dafad88e2837db42ea65c0a7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_917dcf9805c87eb9a39b39044fc2be0b9155e3c7af9c319f558d1b73324022f5 = $this->env->getExtension("native_profiler");
        $__internal_917dcf9805c87eb9a39b39044fc2be0b9155e3c7af9c319f558d1b73324022f5->enter($__internal_917dcf9805c87eb9a39b39044fc2be0b9155e3c7af9c319f558d1b73324022f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_917dcf9805c87eb9a39b39044fc2be0b9155e3c7af9c319f558d1b73324022f5->leave($__internal_917dcf9805c87eb9a39b39044fc2be0b9155e3c7af9c319f558d1b73324022f5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
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
