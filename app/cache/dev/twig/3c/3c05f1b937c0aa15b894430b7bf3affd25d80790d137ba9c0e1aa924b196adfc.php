<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_8131f12bffa97cc65804a5ca9a9981f94ccaeb124dbf4f70ed65f9e80c5426ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_623549240d967d9ad81c140f551a116a2aed38b3fbf71ad5d501f8b6d61764a7 = $this->env->getExtension("native_profiler");
        $__internal_623549240d967d9ad81c140f551a116a2aed38b3fbf71ad5d501f8b6d61764a7->enter($__internal_623549240d967d9ad81c140f551a116a2aed38b3fbf71ad5d501f8b6d61764a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_623549240d967d9ad81c140f551a116a2aed38b3fbf71ad5d501f8b6d61764a7->leave($__internal_623549240d967d9ad81c140f551a116a2aed38b3fbf71ad5d501f8b6d61764a7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
