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
        $__internal_61126df6c4c40c1027087be98f8691436f7c5864b9f46334183d767a7430ea57 = $this->env->getExtension("native_profiler");
        $__internal_61126df6c4c40c1027087be98f8691436f7c5864b9f46334183d767a7430ea57->enter($__internal_61126df6c4c40c1027087be98f8691436f7c5864b9f46334183d767a7430ea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61126df6c4c40c1027087be98f8691436f7c5864b9f46334183d767a7430ea57->leave($__internal_61126df6c4c40c1027087be98f8691436f7c5864b9f46334183d767a7430ea57_prof);

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
