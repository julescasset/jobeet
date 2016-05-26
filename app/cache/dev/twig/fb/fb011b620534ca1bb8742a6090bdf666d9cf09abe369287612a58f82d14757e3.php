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
        $__internal_a268a4b07b18b25f180309570671d1bcbfed58e9109571d7c300b5eadf44cff2 = $this->env->getExtension("native_profiler");
        $__internal_a268a4b07b18b25f180309570671d1bcbfed58e9109571d7c300b5eadf44cff2->enter($__internal_a268a4b07b18b25f180309570671d1bcbfed58e9109571d7c300b5eadf44cff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a268a4b07b18b25f180309570671d1bcbfed58e9109571d7c300b5eadf44cff2->leave($__internal_a268a4b07b18b25f180309570671d1bcbfed58e9109571d7c300b5eadf44cff2_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_093be0111b6449179c08d68c0c449abcdb4aaa19b22858ceee9f79e9fdfa6a16 = $this->env->getExtension("native_profiler");
        $__internal_093be0111b6449179c08d68c0c449abcdb4aaa19b22858ceee9f79e9fdfa6a16->enter($__internal_093be0111b6449179c08d68c0c449abcdb4aaa19b22858ceee9f79e9fdfa6a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_093be0111b6449179c08d68c0c449abcdb4aaa19b22858ceee9f79e9fdfa6a16->leave($__internal_093be0111b6449179c08d68c0c449abcdb4aaa19b22858ceee9f79e9fdfa6a16_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_eb3823ff4dc61320ca742e49319eae0a1eb8cf9d019846bd29075f3380d19031 = $this->env->getExtension("native_profiler");
        $__internal_eb3823ff4dc61320ca742e49319eae0a1eb8cf9d019846bd29075f3380d19031->enter($__internal_eb3823ff4dc61320ca742e49319eae0a1eb8cf9d019846bd29075f3380d19031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_eb3823ff4dc61320ca742e49319eae0a1eb8cf9d019846bd29075f3380d19031->leave($__internal_eb3823ff4dc61320ca742e49319eae0a1eb8cf9d019846bd29075f3380d19031_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_d8c7ab98fa73056c9871bcb9a2d94351f52d3e3015aa247632c1302f8a40d70c = $this->env->getExtension("native_profiler");
        $__internal_d8c7ab98fa73056c9871bcb9a2d94351f52d3e3015aa247632c1302f8a40d70c->enter($__internal_d8c7ab98fa73056c9871bcb9a2d94351f52d3e3015aa247632c1302f8a40d70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_d8c7ab98fa73056c9871bcb9a2d94351f52d3e3015aa247632c1302f8a40d70c->leave($__internal_d8c7ab98fa73056c9871bcb9a2d94351f52d3e3015aa247632c1302f8a40d70c_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_8b8cdb0e3899c4c588aaabd9f7ca0ebc11e8b72676dad6fdb01a63c83cba9b1d = $this->env->getExtension("native_profiler");
        $__internal_8b8cdb0e3899c4c588aaabd9f7ca0ebc11e8b72676dad6fdb01a63c83cba9b1d->enter($__internal_8b8cdb0e3899c4c588aaabd9f7ca0ebc11e8b72676dad6fdb01a63c83cba9b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_8b8cdb0e3899c4c588aaabd9f7ca0ebc11e8b72676dad6fdb01a63c83cba9b1d->leave($__internal_8b8cdb0e3899c4c588aaabd9f7ca0ebc11e8b72676dad6fdb01a63c83cba9b1d_prof);

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
