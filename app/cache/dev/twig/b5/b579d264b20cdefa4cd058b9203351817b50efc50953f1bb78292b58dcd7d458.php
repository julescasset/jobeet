<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_7f662c8ba2028462ad7957a983bb66d0c13bce628c539be57efbdfb6a4634b13 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5d2bb39c15c0889ec958e5be142f81049d376f6557e4d311dbb756b74032195 = $this->env->getExtension("native_profiler");
        $__internal_d5d2bb39c15c0889ec958e5be142f81049d376f6557e4d311dbb756b74032195->enter($__internal_d5d2bb39c15c0889ec958e5be142f81049d376f6557e4d311dbb756b74032195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d2bb39c15c0889ec958e5be142f81049d376f6557e4d311dbb756b74032195->leave($__internal_d5d2bb39c15c0889ec958e5be142f81049d376f6557e4d311dbb756b74032195_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_da30130b79d902a397905d944b066e481f7d8cf199f369fe36d53f82cb7b2164 = $this->env->getExtension("native_profiler");
        $__internal_da30130b79d902a397905d944b066e481f7d8cf199f369fe36d53f82cb7b2164->enter($__internal_da30130b79d902a397905d944b066e481f7d8cf199f369fe36d53f82cb7b2164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_da30130b79d902a397905d944b066e481f7d8cf199f369fe36d53f82cb7b2164->leave($__internal_da30130b79d902a397905d944b066e481f7d8cf199f369fe36d53f82cb7b2164_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_42f7c6cfc2ac5dbae6bd83f77302d3dbb96127710646691fed1c62d38e4d05fc = $this->env->getExtension("native_profiler");
        $__internal_42f7c6cfc2ac5dbae6bd83f77302d3dbb96127710646691fed1c62d38e4d05fc->enter($__internal_42f7c6cfc2ac5dbae6bd83f77302d3dbb96127710646691fed1c62d38e4d05fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_42f7c6cfc2ac5dbae6bd83f77302d3dbb96127710646691fed1c62d38e4d05fc->leave($__internal_42f7c6cfc2ac5dbae6bd83f77302d3dbb96127710646691fed1c62d38e4d05fc_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_c59c1c7b87c693aec61a6c3f4c2b20257d0a2b097b25bfa6661bf1e92dccc5ac = $this->env->getExtension("native_profiler");
        $__internal_c59c1c7b87c693aec61a6c3f4c2b20257d0a2b097b25bfa6661bf1e92dccc5ac->enter($__internal_c59c1c7b87c693aec61a6c3f4c2b20257d0a2b097b25bfa6661bf1e92dccc5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_c59c1c7b87c693aec61a6c3f4c2b20257d0a2b097b25bfa6661bf1e92dccc5ac->leave($__internal_c59c1c7b87c693aec61a6c3f4c2b20257d0a2b097b25bfa6661bf1e92dccc5ac_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_528a36c0104c8dcbe1518483bdee3e39efb2b814d47fe53038c5072596ff8c3b = $this->env->getExtension("native_profiler");
        $__internal_528a36c0104c8dcbe1518483bdee3e39efb2b814d47fe53038c5072596ff8c3b->enter($__internal_528a36c0104c8dcbe1518483bdee3e39efb2b814d47fe53038c5072596ff8c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_528a36c0104c8dcbe1518483bdee3e39efb2b814d47fe53038c5072596ff8c3b->leave($__internal_528a36c0104c8dcbe1518483bdee3e39efb2b814d47fe53038c5072596ff8c3b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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
