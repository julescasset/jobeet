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
        $__internal_b8da7ff271e0ea303c879c555bdee80b8190d302c1be12be579b3f95f2e05918 = $this->env->getExtension("native_profiler");
        $__internal_b8da7ff271e0ea303c879c555bdee80b8190d302c1be12be579b3f95f2e05918->enter($__internal_b8da7ff271e0ea303c879c555bdee80b8190d302c1be12be579b3f95f2e05918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8da7ff271e0ea303c879c555bdee80b8190d302c1be12be579b3f95f2e05918->leave($__internal_b8da7ff271e0ea303c879c555bdee80b8190d302c1be12be579b3f95f2e05918_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_83dd1c81730659a216bbb2667f25d485e6f176bcc2320adcaeea9e01d20b7b1b = $this->env->getExtension("native_profiler");
        $__internal_83dd1c81730659a216bbb2667f25d485e6f176bcc2320adcaeea9e01d20b7b1b->enter($__internal_83dd1c81730659a216bbb2667f25d485e6f176bcc2320adcaeea9e01d20b7b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_83dd1c81730659a216bbb2667f25d485e6f176bcc2320adcaeea9e01d20b7b1b->leave($__internal_83dd1c81730659a216bbb2667f25d485e6f176bcc2320adcaeea9e01d20b7b1b_prof);

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
