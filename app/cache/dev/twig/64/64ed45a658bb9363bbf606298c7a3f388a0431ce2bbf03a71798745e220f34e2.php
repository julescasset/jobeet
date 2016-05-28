<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_03fa8b16c5fa0d7836de7800a33c12042283a20927ce0240e2a318a813118f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_0c03a9c09d67d94fcee66e2c7f4d53330a1a67f4231cdd1afb7ba3ad13eef6bb = $this->env->getExtension("native_profiler");
        $__internal_0c03a9c09d67d94fcee66e2c7f4d53330a1a67f4231cdd1afb7ba3ad13eef6bb->enter($__internal_0c03a9c09d67d94fcee66e2c7f4d53330a1a67f4231cdd1afb7ba3ad13eef6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c03a9c09d67d94fcee66e2c7f4d53330a1a67f4231cdd1afb7ba3ad13eef6bb->leave($__internal_0c03a9c09d67d94fcee66e2c7f4d53330a1a67f4231cdd1afb7ba3ad13eef6bb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b7aa706df87a085afeda8df4cc495b15ec1bf392234ea0d8a4dcecefb2241744 = $this->env->getExtension("native_profiler");
        $__internal_b7aa706df87a085afeda8df4cc495b15ec1bf392234ea0d8a4dcecefb2241744->enter($__internal_b7aa706df87a085afeda8df4cc495b15ec1bf392234ea0d8a4dcecefb2241744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_b7aa706df87a085afeda8df4cc495b15ec1bf392234ea0d8a4dcecefb2241744->leave($__internal_b7aa706df87a085afeda8df4cc495b15ec1bf392234ea0d8a4dcecefb2241744_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
