<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_95545cf40c80dd50fd829f33193c2e3f4cb056abab19dd9ee8c7f265476d2f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42a7430003de1cef9c9a351e3b7c303e079aa0c38915b482adf06a1522739ec4 = $this->env->getExtension("native_profiler");
        $__internal_42a7430003de1cef9c9a351e3b7c303e079aa0c38915b482adf06a1522739ec4->enter($__internal_42a7430003de1cef9c9a351e3b7c303e079aa0c38915b482adf06a1522739ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a7430003de1cef9c9a351e3b7c303e079aa0c38915b482adf06a1522739ec4->leave($__internal_42a7430003de1cef9c9a351e3b7c303e079aa0c38915b482adf06a1522739ec4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
