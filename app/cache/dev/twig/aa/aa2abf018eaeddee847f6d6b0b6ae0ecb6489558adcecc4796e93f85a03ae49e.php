<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_ddf0846fdfa62bf2450c43f153bc59b6ca4fafdd04c492f2a5ed008dd64a79bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_954aa054522cc82d7460b460a38da2180d55e26798a4d847d8d2cfb3eae18f15 = $this->env->getExtension("native_profiler");
        $__internal_954aa054522cc82d7460b460a38da2180d55e26798a4d847d8d2cfb3eae18f15->enter($__internal_954aa054522cc82d7460b460a38da2180d55e26798a4d847d8d2cfb3eae18f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_954aa054522cc82d7460b460a38da2180d55e26798a4d847d8d2cfb3eae18f15->leave($__internal_954aa054522cc82d7460b460a38da2180d55e26798a4d847d8d2cfb3eae18f15_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
