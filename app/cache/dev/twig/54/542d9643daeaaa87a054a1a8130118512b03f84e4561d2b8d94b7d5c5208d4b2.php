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
        $__internal_8af59afd67458618d90fa6ba564dc18281512093d14d0a565b236d0b67af6a1d = $this->env->getExtension("native_profiler");
        $__internal_8af59afd67458618d90fa6ba564dc18281512093d14d0a565b236d0b67af6a1d->enter($__internal_8af59afd67458618d90fa6ba564dc18281512093d14d0a565b236d0b67af6a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af59afd67458618d90fa6ba564dc18281512093d14d0a565b236d0b67af6a1d->leave($__internal_8af59afd67458618d90fa6ba564dc18281512093d14d0a565b236d0b67af6a1d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7b0ed8909ae44d9a5a109eb4a8e9617e86f167aceaed928ba9af28244e71247b = $this->env->getExtension("native_profiler");
        $__internal_7b0ed8909ae44d9a5a109eb4a8e9617e86f167aceaed928ba9af28244e71247b->enter($__internal_7b0ed8909ae44d9a5a109eb4a8e9617e86f167aceaed928ba9af28244e71247b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_7b0ed8909ae44d9a5a109eb4a8e9617e86f167aceaed928ba9af28244e71247b->leave($__internal_7b0ed8909ae44d9a5a109eb4a8e9617e86f167aceaed928ba9af28244e71247b_prof);

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
