<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_ddf0846fdfa62bf2450c43f153bc59b6ca4fafdd04c492f2a5ed008dd64a79bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_692e6d7d27a24133acb23c4f08130eec05407a4bd307b2414a811734da7a5d91 = $this->env->getExtension("native_profiler");
        $__internal_692e6d7d27a24133acb23c4f08130eec05407a4bd307b2414a811734da7a5d91->enter($__internal_692e6d7d27a24133acb23c4f08130eec05407a4bd307b2414a811734da7a5d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692e6d7d27a24133acb23c4f08130eec05407a4bd307b2414a811734da7a5d91->leave($__internal_692e6d7d27a24133acb23c4f08130eec05407a4bd307b2414a811734da7a5d91_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
