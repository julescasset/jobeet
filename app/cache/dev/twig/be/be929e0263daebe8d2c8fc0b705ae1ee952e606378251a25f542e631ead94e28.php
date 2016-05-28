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
        $__internal_219a4045b9d1d90636a14a7fd59300141832f3fe5fdb73104f7eaed2b09f6558 = $this->env->getExtension("native_profiler");
        $__internal_219a4045b9d1d90636a14a7fd59300141832f3fe5fdb73104f7eaed2b09f6558->enter($__internal_219a4045b9d1d90636a14a7fd59300141832f3fe5fdb73104f7eaed2b09f6558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219a4045b9d1d90636a14a7fd59300141832f3fe5fdb73104f7eaed2b09f6558->leave($__internal_219a4045b9d1d90636a14a7fd59300141832f3fe5fdb73104f7eaed2b09f6558_prof);

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
