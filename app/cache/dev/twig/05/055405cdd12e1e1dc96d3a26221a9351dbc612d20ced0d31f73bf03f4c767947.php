<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_3822c35227d1bd3b1616106613ce1685f1073d0a23d31e7ba1a53a090fa5312c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98444198aaa2c3aa0cb78843d5201e7b2ea635859fcdc91a947d7fbde8dd90c9 = $this->env->getExtension("native_profiler");
        $__internal_98444198aaa2c3aa0cb78843d5201e7b2ea635859fcdc91a947d7fbde8dd90c9->enter($__internal_98444198aaa2c3aa0cb78843d5201e7b2ea635859fcdc91a947d7fbde8dd90c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98444198aaa2c3aa0cb78843d5201e7b2ea635859fcdc91a947d7fbde8dd90c9->leave($__internal_98444198aaa2c3aa0cb78843d5201e7b2ea635859fcdc91a947d7fbde8dd90c9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */