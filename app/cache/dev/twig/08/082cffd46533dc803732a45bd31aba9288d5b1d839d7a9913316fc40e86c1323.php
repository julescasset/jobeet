<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_82383d583114a1b1109080ad77c2290fab432cfd5563e8d9e7ca118d28a8745a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5704165c9f6e77429240fd871f5377bee031329db7bd458a9fbe9794869131fb = $this->env->getExtension("native_profiler");
        $__internal_5704165c9f6e77429240fd871f5377bee031329db7bd458a9fbe9794869131fb->enter($__internal_5704165c9f6e77429240fd871f5377bee031329db7bd458a9fbe9794869131fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5704165c9f6e77429240fd871f5377bee031329db7bd458a9fbe9794869131fb->leave($__internal_5704165c9f6e77429240fd871f5377bee031329db7bd458a9fbe9794869131fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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