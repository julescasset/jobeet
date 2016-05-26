<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_1dcba4098654753d4b798bca58e7aa7469587a762a4705e04ed8a61ac1c54bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c314e42106169c9768c72455451660bd4ac5c4e9d1fcb47e4036dd3ff834bc7 = $this->env->getExtension("native_profiler");
        $__internal_8c314e42106169c9768c72455451660bd4ac5c4e9d1fcb47e4036dd3ff834bc7->enter($__internal_8c314e42106169c9768c72455451660bd4ac5c4e9d1fcb47e4036dd3ff834bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c314e42106169c9768c72455451660bd4ac5c4e9d1fcb47e4036dd3ff834bc7->leave($__internal_8c314e42106169c9768c72455451660bd4ac5c4e9d1fcb47e4036dd3ff834bc7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
