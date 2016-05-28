<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_613fdda6608b0844652bb21c30429311ca4cb9b6240aac005557ee82960cfc80 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dc69250becadb321ff42c268f88bcdb89c12f803595f9e69f974c5198da1e1e = $this->env->getExtension("native_profiler");
        $__internal_3dc69250becadb321ff42c268f88bcdb89c12f803595f9e69f974c5198da1e1e->enter($__internal_3dc69250becadb321ff42c268f88bcdb89c12f803595f9e69f974c5198da1e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc69250becadb321ff42c268f88bcdb89c12f803595f9e69f974c5198da1e1e->leave($__internal_3dc69250becadb321ff42c268f88bcdb89c12f803595f9e69f974c5198da1e1e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
