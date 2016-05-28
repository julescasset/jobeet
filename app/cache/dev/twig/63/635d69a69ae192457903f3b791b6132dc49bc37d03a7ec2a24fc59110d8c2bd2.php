<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_6e993c40b424c7b7181eaaf5049e32b87e1ecf109219fd9da28176215dfdc051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_0ffb5e8b0dc2edeeff4644b7fa5f6334835451a3df2e047fe4c2f29a02f3c9c4 = $this->env->getExtension("native_profiler");
        $__internal_0ffb5e8b0dc2edeeff4644b7fa5f6334835451a3df2e047fe4c2f29a02f3c9c4->enter($__internal_0ffb5e8b0dc2edeeff4644b7fa5f6334835451a3df2e047fe4c2f29a02f3c9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ffb5e8b0dc2edeeff4644b7fa5f6334835451a3df2e047fe4c2f29a02f3c9c4->leave($__internal_0ffb5e8b0dc2edeeff4644b7fa5f6334835451a3df2e047fe4c2f29a02f3c9c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_44e3374790a35994cd58fcddffa15365b9c3f0065817a04d3b9135fee8f934ef = $this->env->getExtension("native_profiler");
        $__internal_44e3374790a35994cd58fcddffa15365b9c3f0065817a04d3b9135fee8f934ef->enter($__internal_44e3374790a35994cd58fcddffa15365b9c3f0065817a04d3b9135fee8f934ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_44e3374790a35994cd58fcddffa15365b9c3f0065817a04d3b9135fee8f934ef->leave($__internal_44e3374790a35994cd58fcddffa15365b9c3f0065817a04d3b9135fee8f934ef_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
