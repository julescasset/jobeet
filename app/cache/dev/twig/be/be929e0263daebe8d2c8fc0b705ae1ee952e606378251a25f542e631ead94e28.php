<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_43e62d4f44cf7e29d86ba2063773a815c94892f6329d08cab230fbb3caa42051 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c27a70a64254eeba4d684e332fb86a8d8ed45e110be1260d0b44e141856aadb1 = $this->env->getExtension("native_profiler");
        $__internal_c27a70a64254eeba4d684e332fb86a8d8ed45e110be1260d0b44e141856aadb1->enter($__internal_c27a70a64254eeba4d684e332fb86a8d8ed45e110be1260d0b44e141856aadb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27a70a64254eeba4d684e332fb86a8d8ed45e110be1260d0b44e141856aadb1->leave($__internal_c27a70a64254eeba4d684e332fb86a8d8ed45e110be1260d0b44e141856aadb1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
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
