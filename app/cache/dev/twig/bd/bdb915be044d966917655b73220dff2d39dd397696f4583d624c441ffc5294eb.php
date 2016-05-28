<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_9ce8eb6ca174c16aace385165ddaa946e507f012bc231907df6a1d9e55f6895b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_254456fed396e37c61fd381c41b467057955acc8afebb6f9f8b5840513ddacc1 = $this->env->getExtension("native_profiler");
        $__internal_254456fed396e37c61fd381c41b467057955acc8afebb6f9f8b5840513ddacc1->enter($__internal_254456fed396e37c61fd381c41b467057955acc8afebb6f9f8b5840513ddacc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254456fed396e37c61fd381c41b467057955acc8afebb6f9f8b5840513ddacc1->leave($__internal_254456fed396e37c61fd381c41b467057955acc8afebb6f9f8b5840513ddacc1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fee4acba4cc7ce41dda81b5a7892b5c2d67fa3db0468a54d6a04cd0ae8c345aa = $this->env->getExtension("native_profiler");
        $__internal_fee4acba4cc7ce41dda81b5a7892b5c2d67fa3db0468a54d6a04cd0ae8c345aa->enter($__internal_fee4acba4cc7ce41dda81b5a7892b5c2d67fa3db0468a54d6a04cd0ae8c345aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_fee4acba4cc7ce41dda81b5a7892b5c2d67fa3db0468a54d6a04cd0ae8c345aa->leave($__internal_fee4acba4cc7ce41dda81b5a7892b5c2d67fa3db0468a54d6a04cd0ae8c345aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
