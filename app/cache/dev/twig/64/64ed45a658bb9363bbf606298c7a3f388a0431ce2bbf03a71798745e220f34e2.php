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
        $__internal_e696181b6689f95a7770a025243bcf41ec81880c986d319fa8d111420996a29b = $this->env->getExtension("native_profiler");
        $__internal_e696181b6689f95a7770a025243bcf41ec81880c986d319fa8d111420996a29b->enter($__internal_e696181b6689f95a7770a025243bcf41ec81880c986d319fa8d111420996a29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e696181b6689f95a7770a025243bcf41ec81880c986d319fa8d111420996a29b->leave($__internal_e696181b6689f95a7770a025243bcf41ec81880c986d319fa8d111420996a29b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_adaa7dabf69e8990d0cfecc73dc0a3aadf98f4c627f016711445f744ac414129 = $this->env->getExtension("native_profiler");
        $__internal_adaa7dabf69e8990d0cfecc73dc0a3aadf98f4c627f016711445f744ac414129->enter($__internal_adaa7dabf69e8990d0cfecc73dc0a3aadf98f4c627f016711445f744ac414129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_adaa7dabf69e8990d0cfecc73dc0a3aadf98f4c627f016711445f744ac414129->leave($__internal_adaa7dabf69e8990d0cfecc73dc0a3aadf98f4c627f016711445f744ac414129_prof);

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
