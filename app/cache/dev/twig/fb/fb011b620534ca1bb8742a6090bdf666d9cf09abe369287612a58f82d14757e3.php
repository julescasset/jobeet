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
        $__internal_5aed570f62c4436ee7b881c6ed0a7d4ee7d40128a68b5f3b2e20980768e40aba = $this->env->getExtension("native_profiler");
        $__internal_5aed570f62c4436ee7b881c6ed0a7d4ee7d40128a68b5f3b2e20980768e40aba->enter($__internal_5aed570f62c4436ee7b881c6ed0a7d4ee7d40128a68b5f3b2e20980768e40aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aed570f62c4436ee7b881c6ed0a7d4ee7d40128a68b5f3b2e20980768e40aba->leave($__internal_5aed570f62c4436ee7b881c6ed0a7d4ee7d40128a68b5f3b2e20980768e40aba_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fa96ed03954fd664ae531ed0f6f1afbe44fd4c887171c658a12e2916ef4bf204 = $this->env->getExtension("native_profiler");
        $__internal_fa96ed03954fd664ae531ed0f6f1afbe44fd4c887171c658a12e2916ef4bf204->enter($__internal_fa96ed03954fd664ae531ed0f6f1afbe44fd4c887171c658a12e2916ef4bf204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_fa96ed03954fd664ae531ed0f6f1afbe44fd4c887171c658a12e2916ef4bf204->leave($__internal_fa96ed03954fd664ae531ed0f6f1afbe44fd4c887171c658a12e2916ef4bf204_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_d23d825cd1872e6394de78471b2d833b9b704a31dd1f4dd30ca9977e2f459fca = $this->env->getExtension("native_profiler");
        $__internal_d23d825cd1872e6394de78471b2d833b9b704a31dd1f4dd30ca9977e2f459fca->enter($__internal_d23d825cd1872e6394de78471b2d833b9b704a31dd1f4dd30ca9977e2f459fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_d23d825cd1872e6394de78471b2d833b9b704a31dd1f4dd30ca9977e2f459fca->leave($__internal_d23d825cd1872e6394de78471b2d833b9b704a31dd1f4dd30ca9977e2f459fca_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_4adf807881b37c607edb60940f4cd192a90fdbd541583b7d3cfe9e7c43e3939a = $this->env->getExtension("native_profiler");
        $__internal_4adf807881b37c607edb60940f4cd192a90fdbd541583b7d3cfe9e7c43e3939a->enter($__internal_4adf807881b37c607edb60940f4cd192a90fdbd541583b7d3cfe9e7c43e3939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_4adf807881b37c607edb60940f4cd192a90fdbd541583b7d3cfe9e7c43e3939a->leave($__internal_4adf807881b37c607edb60940f4cd192a90fdbd541583b7d3cfe9e7c43e3939a_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_0f6b0403c13be192d1a5755743beb3294ed59741eaf803d72fb52f4c364eb836 = $this->env->getExtension("native_profiler");
        $__internal_0f6b0403c13be192d1a5755743beb3294ed59741eaf803d72fb52f4c364eb836->enter($__internal_0f6b0403c13be192d1a5755743beb3294ed59741eaf803d72fb52f4c364eb836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0f6b0403c13be192d1a5755743beb3294ed59741eaf803d72fb52f4c364eb836->leave($__internal_0f6b0403c13be192d1a5755743beb3294ed59741eaf803d72fb52f4c364eb836_prof);

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
