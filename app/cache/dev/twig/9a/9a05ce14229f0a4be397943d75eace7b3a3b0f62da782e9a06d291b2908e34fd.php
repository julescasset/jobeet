<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_7261827f133c4d8dbbcaaccdbfd6756e5e584d3a0a21de59476610f7d6bd1331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_6a50742dc99bc6a65b53d973dff243ae09021a6fdb4317f919dad22c7cfedc59 = $this->env->getExtension("native_profiler");
        $__internal_6a50742dc99bc6a65b53d973dff243ae09021a6fdb4317f919dad22c7cfedc59->enter($__internal_6a50742dc99bc6a65b53d973dff243ae09021a6fdb4317f919dad22c7cfedc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a50742dc99bc6a65b53d973dff243ae09021a6fdb4317f919dad22c7cfedc59->leave($__internal_6a50742dc99bc6a65b53d973dff243ae09021a6fdb4317f919dad22c7cfedc59_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0a26939150b2c0eb0732662fa2a359d04b95ea23f8f0ba21c01dbbff4ada1bb0 = $this->env->getExtension("native_profiler");
        $__internal_0a26939150b2c0eb0732662fa2a359d04b95ea23f8f0ba21c01dbbff4ada1bb0->enter($__internal_0a26939150b2c0eb0732662fa2a359d04b95ea23f8f0ba21c01dbbff4ada1bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_0a26939150b2c0eb0732662fa2a359d04b95ea23f8f0ba21c01dbbff4ada1bb0->leave($__internal_0a26939150b2c0eb0732662fa2a359d04b95ea23f8f0ba21c01dbbff4ada1bb0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
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
