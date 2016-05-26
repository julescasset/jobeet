<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_0d92170ff32a4b396b8a66a3e97301bff7d07a0bde5114782250e49895072f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a90209973e19db93321294f46340691b79a94534b29e56a865739ea6af619890 = $this->env->getExtension("native_profiler");
        $__internal_a90209973e19db93321294f46340691b79a94534b29e56a865739ea6af619890->enter($__internal_a90209973e19db93321294f46340691b79a94534b29e56a865739ea6af619890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a90209973e19db93321294f46340691b79a94534b29e56a865739ea6af619890->leave($__internal_a90209973e19db93321294f46340691b79a94534b29e56a865739ea6af619890_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
