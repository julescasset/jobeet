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
        $__internal_f9ba00c083e55408e3fe0a6336ac57c9bb13eb059de4574d3c9b81446f4878ae = $this->env->getExtension("native_profiler");
        $__internal_f9ba00c083e55408e3fe0a6336ac57c9bb13eb059de4574d3c9b81446f4878ae->enter($__internal_f9ba00c083e55408e3fe0a6336ac57c9bb13eb059de4574d3c9b81446f4878ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ba00c083e55408e3fe0a6336ac57c9bb13eb059de4574d3c9b81446f4878ae->leave($__internal_f9ba00c083e55408e3fe0a6336ac57c9bb13eb059de4574d3c9b81446f4878ae_prof);

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
