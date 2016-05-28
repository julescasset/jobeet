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
        $__internal_10b5e2d0f2729a88b258ed4141409fb98b77d21a73b4486fc599e4f2d0bbba5b = $this->env->getExtension("native_profiler");
        $__internal_10b5e2d0f2729a88b258ed4141409fb98b77d21a73b4486fc599e4f2d0bbba5b->enter($__internal_10b5e2d0f2729a88b258ed4141409fb98b77d21a73b4486fc599e4f2d0bbba5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10b5e2d0f2729a88b258ed4141409fb98b77d21a73b4486fc599e4f2d0bbba5b->leave($__internal_10b5e2d0f2729a88b258ed4141409fb98b77d21a73b4486fc599e4f2d0bbba5b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b0f3cf017163a8e63921bd5d0ff3f06c716696221651be273c15507714bd38de = $this->env->getExtension("native_profiler");
        $__internal_b0f3cf017163a8e63921bd5d0ff3f06c716696221651be273c15507714bd38de->enter($__internal_b0f3cf017163a8e63921bd5d0ff3f06c716696221651be273c15507714bd38de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_b0f3cf017163a8e63921bd5d0ff3f06c716696221651be273c15507714bd38de->leave($__internal_b0f3cf017163a8e63921bd5d0ff3f06c716696221651be273c15507714bd38de_prof);

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
