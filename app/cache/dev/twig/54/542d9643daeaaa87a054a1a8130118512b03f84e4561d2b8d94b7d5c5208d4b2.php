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
        $__internal_925ab8b27075c4c8258653ee17bbf8e7cd1abb8ec985f85e0bb4eff3be278711 = $this->env->getExtension("native_profiler");
        $__internal_925ab8b27075c4c8258653ee17bbf8e7cd1abb8ec985f85e0bb4eff3be278711->enter($__internal_925ab8b27075c4c8258653ee17bbf8e7cd1abb8ec985f85e0bb4eff3be278711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925ab8b27075c4c8258653ee17bbf8e7cd1abb8ec985f85e0bb4eff3be278711->leave($__internal_925ab8b27075c4c8258653ee17bbf8e7cd1abb8ec985f85e0bb4eff3be278711_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eeae583e3e6434ac1c86b4cde866ac89cbb9501383e91ccd30c945b5005c2c61 = $this->env->getExtension("native_profiler");
        $__internal_eeae583e3e6434ac1c86b4cde866ac89cbb9501383e91ccd30c945b5005c2c61->enter($__internal_eeae583e3e6434ac1c86b4cde866ac89cbb9501383e91ccd30c945b5005c2c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_eeae583e3e6434ac1c86b4cde866ac89cbb9501383e91ccd30c945b5005c2c61->leave($__internal_eeae583e3e6434ac1c86b4cde866ac89cbb9501383e91ccd30c945b5005c2c61_prof);

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
