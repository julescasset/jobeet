<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_61f174e359dd39ff1f5ea4ed2652deabf2c1fdf472d5360f64384c5d7d1f2f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e749ccafb573d877db411752dd422d8b78e67dc51b1bbe66131a6148c9ba10b = $this->env->getExtension("native_profiler");
        $__internal_9e749ccafb573d877db411752dd422d8b78e67dc51b1bbe66131a6148c9ba10b->enter($__internal_9e749ccafb573d877db411752dd422d8b78e67dc51b1bbe66131a6148c9ba10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e749ccafb573d877db411752dd422d8b78e67dc51b1bbe66131a6148c9ba10b->leave($__internal_9e749ccafb573d877db411752dd422d8b78e67dc51b1bbe66131a6148c9ba10b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
