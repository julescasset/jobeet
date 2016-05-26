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
        $__internal_f9fc350d0442a6b7e4e316063f81193ef8adfdabacbc87394ed71040e60e04f6 = $this->env->getExtension("native_profiler");
        $__internal_f9fc350d0442a6b7e4e316063f81193ef8adfdabacbc87394ed71040e60e04f6->enter($__internal_f9fc350d0442a6b7e4e316063f81193ef8adfdabacbc87394ed71040e60e04f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9fc350d0442a6b7e4e316063f81193ef8adfdabacbc87394ed71040e60e04f6->leave($__internal_f9fc350d0442a6b7e4e316063f81193ef8adfdabacbc87394ed71040e60e04f6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_edbdd28e26e9f4d42e1b89a0928e524a8ae2298d9c96936344f3b929b6f5fe8f = $this->env->getExtension("native_profiler");
        $__internal_edbdd28e26e9f4d42e1b89a0928e524a8ae2298d9c96936344f3b929b6f5fe8f->enter($__internal_edbdd28e26e9f4d42e1b89a0928e524a8ae2298d9c96936344f3b929b6f5fe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_edbdd28e26e9f4d42e1b89a0928e524a8ae2298d9c96936344f3b929b6f5fe8f->leave($__internal_edbdd28e26e9f4d42e1b89a0928e524a8ae2298d9c96936344f3b929b6f5fe8f_prof);

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
