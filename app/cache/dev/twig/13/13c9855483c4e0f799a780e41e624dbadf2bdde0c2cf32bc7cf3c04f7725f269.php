<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_81dd80cd66955c4e9b4d90ef4cf991acee566d8ff64615c21386dd1cc70040ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8384331f9a326cd860efe7ed5f3fcebac83a03a56cd29f939537708f07cafb41 = $this->env->getExtension("native_profiler");
        $__internal_8384331f9a326cd860efe7ed5f3fcebac83a03a56cd29f939537708f07cafb41->enter($__internal_8384331f9a326cd860efe7ed5f3fcebac83a03a56cd29f939537708f07cafb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8384331f9a326cd860efe7ed5f3fcebac83a03a56cd29f939537708f07cafb41->leave($__internal_8384331f9a326cd860efe7ed5f3fcebac83a03a56cd29f939537708f07cafb41_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
