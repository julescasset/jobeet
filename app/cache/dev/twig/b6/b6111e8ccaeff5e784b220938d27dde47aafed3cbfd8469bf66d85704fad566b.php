<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_71adff48d8f044296ae02ee138e45465078dc38001e04fac6a1476e0812e0d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
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
        $__internal_b1ca26d07704b1de122fa1d5d4f61e3a1688940b192815211d58a4c54d172730 = $this->env->getExtension("native_profiler");
        $__internal_b1ca26d07704b1de122fa1d5d4f61e3a1688940b192815211d58a4c54d172730->enter($__internal_b1ca26d07704b1de122fa1d5d4f61e3a1688940b192815211d58a4c54d172730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ca26d07704b1de122fa1d5d4f61e3a1688940b192815211d58a4c54d172730->leave($__internal_b1ca26d07704b1de122fa1d5d4f61e3a1688940b192815211d58a4c54d172730_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d7e6fc63d588943527658170a11351d9e5ca9fb75b202147ed28213ac1ec7934 = $this->env->getExtension("native_profiler");
        $__internal_d7e6fc63d588943527658170a11351d9e5ca9fb75b202147ed28213ac1ec7934->enter($__internal_d7e6fc63d588943527658170a11351d9e5ca9fb75b202147ed28213ac1ec7934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_d7e6fc63d588943527658170a11351d9e5ca9fb75b202147ed28213ac1ec7934->leave($__internal_d7e6fc63d588943527658170a11351d9e5ca9fb75b202147ed28213ac1ec7934_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
