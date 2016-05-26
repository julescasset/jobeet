<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_cbea1096f1ebc111b83b6e34a6aef08f2878a92b7b939bd937f8be05c810be64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f922b2ac0f51a206e829da295eaf0ceed9e5601522ebf9a2ba0506ca654bd8c = $this->env->getExtension("native_profiler");
        $__internal_6f922b2ac0f51a206e829da295eaf0ceed9e5601522ebf9a2ba0506ca654bd8c->enter($__internal_6f922b2ac0f51a206e829da295eaf0ceed9e5601522ebf9a2ba0506ca654bd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f922b2ac0f51a206e829da295eaf0ceed9e5601522ebf9a2ba0506ca654bd8c->leave($__internal_6f922b2ac0f51a206e829da295eaf0ceed9e5601522ebf9a2ba0506ca654bd8c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
