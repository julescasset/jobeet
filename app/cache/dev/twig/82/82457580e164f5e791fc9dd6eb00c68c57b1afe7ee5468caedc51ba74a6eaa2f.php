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
        $__internal_25e8beb43dfa3c2bee014071bbc76331dd9ee425499c1515451fd4553a446b73 = $this->env->getExtension("native_profiler");
        $__internal_25e8beb43dfa3c2bee014071bbc76331dd9ee425499c1515451fd4553a446b73->enter($__internal_25e8beb43dfa3c2bee014071bbc76331dd9ee425499c1515451fd4553a446b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25e8beb43dfa3c2bee014071bbc76331dd9ee425499c1515451fd4553a446b73->leave($__internal_25e8beb43dfa3c2bee014071bbc76331dd9ee425499c1515451fd4553a446b73_prof);

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
