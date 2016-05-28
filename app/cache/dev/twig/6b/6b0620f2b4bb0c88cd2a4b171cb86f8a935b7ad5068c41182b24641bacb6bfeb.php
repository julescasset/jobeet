<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_521e7f932fe1c6ff8f6e88d1ad1de257b30be44691ff6957790c70cfc18abc4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5748c971952e7468264a34902c20dec349428e07c33a6237a4d05c67fd86fb85 = $this->env->getExtension("native_profiler");
        $__internal_5748c971952e7468264a34902c20dec349428e07c33a6237a4d05c67fd86fb85->enter($__internal_5748c971952e7468264a34902c20dec349428e07c33a6237a4d05c67fd86fb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5748c971952e7468264a34902c20dec349428e07c33a6237a4d05c67fd86fb85->leave($__internal_5748c971952e7468264a34902c20dec349428e07c33a6237a4d05c67fd86fb85_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
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
/* {% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}*/
/* */
