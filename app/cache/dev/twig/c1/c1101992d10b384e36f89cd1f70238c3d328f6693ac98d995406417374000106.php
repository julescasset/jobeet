<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_5d388f0bf3692ca524840d20b183754e2244dab56c4548ace0d5f873f1e421c6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc4d92e287bdb380e015525b5fdfcc5d6c0cfa656a1ae64c7cb174ba6547506c = $this->env->getExtension("native_profiler");
        $__internal_bc4d92e287bdb380e015525b5fdfcc5d6c0cfa656a1ae64c7cb174ba6547506c->enter($__internal_bc4d92e287bdb380e015525b5fdfcc5d6c0cfa656a1ae64c7cb174ba6547506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4d92e287bdb380e015525b5fdfcc5d6c0cfa656a1ae64c7cb174ba6547506c->leave($__internal_bc4d92e287bdb380e015525b5fdfcc5d6c0cfa656a1ae64c7cb174ba6547506c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6f6dff7fce81d5c32d2dc177feb5a715e0c2090b0a41960abf8a1c774c556a9b = $this->env->getExtension("native_profiler");
        $__internal_6f6dff7fce81d5c32d2dc177feb5a715e0c2090b0a41960abf8a1c774c556a9b->enter($__internal_6f6dff7fce81d5c32d2dc177feb5a715e0c2090b0a41960abf8a1c774c556a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_6f6dff7fce81d5c32d2dc177feb5a715e0c2090b0a41960abf8a1c774c556a9b->leave($__internal_6f6dff7fce81d5c32d2dc177feb5a715e0c2090b0a41960abf8a1c774c556a9b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
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
