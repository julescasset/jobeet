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
        $__internal_d48a56070f685e195a4e9e785d7e96c539f92603446f0808b9d91620a7473a3a = $this->env->getExtension("native_profiler");
        $__internal_d48a56070f685e195a4e9e785d7e96c539f92603446f0808b9d91620a7473a3a->enter($__internal_d48a56070f685e195a4e9e785d7e96c539f92603446f0808b9d91620a7473a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48a56070f685e195a4e9e785d7e96c539f92603446f0808b9d91620a7473a3a->leave($__internal_d48a56070f685e195a4e9e785d7e96c539f92603446f0808b9d91620a7473a3a_prof);

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
