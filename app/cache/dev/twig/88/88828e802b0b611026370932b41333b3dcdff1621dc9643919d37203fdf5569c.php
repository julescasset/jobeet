<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_2ed80588168de56f1860d177acbe28a696b4cf5703b6b06d23158dc9c6acc09b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5aae2e40322b92b0cd8eb03a3c2aa5c9c395c1be05d650f1256490ff62de75f4 = $this->env->getExtension("native_profiler");
        $__internal_5aae2e40322b92b0cd8eb03a3c2aa5c9c395c1be05d650f1256490ff62de75f4->enter($__internal_5aae2e40322b92b0cd8eb03a3c2aa5c9c395c1be05d650f1256490ff62de75f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aae2e40322b92b0cd8eb03a3c2aa5c9c395c1be05d650f1256490ff62de75f4->leave($__internal_5aae2e40322b92b0cd8eb03a3c2aa5c9c395c1be05d650f1256490ff62de75f4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
