<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_5da40dd12c99359d2a380911180cde24a7666fe860a180f74c128b047afd55ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3c8b9665f79c24b523ed49c9cf6146aabba5c1bd20b28dc5ee9d9272eafe042 = $this->env->getExtension("native_profiler");
        $__internal_e3c8b9665f79c24b523ed49c9cf6146aabba5c1bd20b28dc5ee9d9272eafe042->enter($__internal_e3c8b9665f79c24b523ed49c9cf6146aabba5c1bd20b28dc5ee9d9272eafe042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c8b9665f79c24b523ed49c9cf6146aabba5c1bd20b28dc5ee9d9272eafe042->leave($__internal_e3c8b9665f79c24b523ed49c9cf6146aabba5c1bd20b28dc5ee9d9272eafe042_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
