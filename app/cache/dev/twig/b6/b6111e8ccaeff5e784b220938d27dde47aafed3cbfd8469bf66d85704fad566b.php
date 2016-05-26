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
        $__internal_a0dccc0bafdd7c775c14b0a1b2dd523994cd6c85d1e102050cae8ec536ea0826 = $this->env->getExtension("native_profiler");
        $__internal_a0dccc0bafdd7c775c14b0a1b2dd523994cd6c85d1e102050cae8ec536ea0826->enter($__internal_a0dccc0bafdd7c775c14b0a1b2dd523994cd6c85d1e102050cae8ec536ea0826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0dccc0bafdd7c775c14b0a1b2dd523994cd6c85d1e102050cae8ec536ea0826->leave($__internal_a0dccc0bafdd7c775c14b0a1b2dd523994cd6c85d1e102050cae8ec536ea0826_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_01404f8a2613de5a52dd545f73e16632d34b409067cef7999fe277016d22896a = $this->env->getExtension("native_profiler");
        $__internal_01404f8a2613de5a52dd545f73e16632d34b409067cef7999fe277016d22896a->enter($__internal_01404f8a2613de5a52dd545f73e16632d34b409067cef7999fe277016d22896a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_01404f8a2613de5a52dd545f73e16632d34b409067cef7999fe277016d22896a->leave($__internal_01404f8a2613de5a52dd545f73e16632d34b409067cef7999fe277016d22896a_prof);

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
