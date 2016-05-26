<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_aacdb270c0755c1d8edd1f6c9ea5b5c7b68532424030727faa2dfcd7bfb1b4ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4ae42ec634c284564fb69e482fa39f963210fb195a696feb28066b0bdb63791 = $this->env->getExtension("native_profiler");
        $__internal_e4ae42ec634c284564fb69e482fa39f963210fb195a696feb28066b0bdb63791->enter($__internal_e4ae42ec634c284564fb69e482fa39f963210fb195a696feb28066b0bdb63791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4ae42ec634c284564fb69e482fa39f963210fb195a696feb28066b0bdb63791->leave($__internal_e4ae42ec634c284564fb69e482fa39f963210fb195a696feb28066b0bdb63791_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_88ad2dcfb11e6080c7b3ec00756ad6a9ab59e9d3e813ba725c9ea74cc2e4f717 = $this->env->getExtension("native_profiler");
        $__internal_88ad2dcfb11e6080c7b3ec00756ad6a9ab59e9d3e813ba725c9ea74cc2e4f717->enter($__internal_88ad2dcfb11e6080c7b3ec00756ad6a9ab59e9d3e813ba725c9ea74cc2e4f717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_88ad2dcfb11e6080c7b3ec00756ad6a9ab59e9d3e813ba725c9ea74cc2e4f717->leave($__internal_88ad2dcfb11e6080c7b3ec00756ad6a9ab59e9d3e813ba725c9ea74cc2e4f717_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_638d9fee561f711998ba4bad9a0284acb2440e5817c1a6e1bcaf45fe73e7cfb9 = $this->env->getExtension("native_profiler");
        $__internal_638d9fee561f711998ba4bad9a0284acb2440e5817c1a6e1bcaf45fe73e7cfb9->enter($__internal_638d9fee561f711998ba4bad9a0284acb2440e5817c1a6e1bcaf45fe73e7cfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_638d9fee561f711998ba4bad9a0284acb2440e5817c1a6e1bcaf45fe73e7cfb9->leave($__internal_638d9fee561f711998ba4bad9a0284acb2440e5817c1a6e1bcaf45fe73e7cfb9_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_533cdf776a3fa491398efcc395fd5082fd100d0d09abd03b302f14e3c1537ef2 = $this->env->getExtension("native_profiler");
        $__internal_533cdf776a3fa491398efcc395fd5082fd100d0d09abd03b302f14e3c1537ef2->enter($__internal_533cdf776a3fa491398efcc395fd5082fd100d0d09abd03b302f14e3c1537ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_533cdf776a3fa491398efcc395fd5082fd100d0d09abd03b302f14e3c1537ef2->leave($__internal_533cdf776a3fa491398efcc395fd5082fd100d0d09abd03b302f14e3c1537ef2_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_98449746a55750f031faeba23a73a274fb3225f03e0abe3db94405c652666e43 = $this->env->getExtension("native_profiler");
        $__internal_98449746a55750f031faeba23a73a274fb3225f03e0abe3db94405c652666e43->enter($__internal_98449746a55750f031faeba23a73a274fb3225f03e0abe3db94405c652666e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_98449746a55750f031faeba23a73a274fb3225f03e0abe3db94405c652666e43->leave($__internal_98449746a55750f031faeba23a73a274fb3225f03e0abe3db94405c652666e43_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
