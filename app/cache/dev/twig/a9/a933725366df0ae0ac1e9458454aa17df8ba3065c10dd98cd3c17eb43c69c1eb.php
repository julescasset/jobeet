<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_3f1b19743f93d8297ba23fccff91019e25b22eadc815b84e67e8a3fc54222570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_f5687dbeac027e6fd0af6e4740c353834cb54d05a368850bcb74e76eed5b4c42 = $this->env->getExtension("native_profiler");
        $__internal_f5687dbeac027e6fd0af6e4740c353834cb54d05a368850bcb74e76eed5b4c42->enter($__internal_f5687dbeac027e6fd0af6e4740c353834cb54d05a368850bcb74e76eed5b4c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5687dbeac027e6fd0af6e4740c353834cb54d05a368850bcb74e76eed5b4c42->leave($__internal_f5687dbeac027e6fd0af6e4740c353834cb54d05a368850bcb74e76eed5b4c42_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b017f1a0a605ea2cd7635a5ab9c67d96dc61d14cc90c766cab9c119ae6b961ca = $this->env->getExtension("native_profiler");
        $__internal_b017f1a0a605ea2cd7635a5ab9c67d96dc61d14cc90c766cab9c119ae6b961ca->enter($__internal_b017f1a0a605ea2cd7635a5ab9c67d96dc61d14cc90c766cab9c119ae6b961ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b017f1a0a605ea2cd7635a5ab9c67d96dc61d14cc90c766cab9c119ae6b961ca->leave($__internal_b017f1a0a605ea2cd7635a5ab9c67d96dc61d14cc90c766cab9c119ae6b961ca_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
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
