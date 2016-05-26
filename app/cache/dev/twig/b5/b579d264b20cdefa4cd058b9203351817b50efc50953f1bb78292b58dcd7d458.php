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
        $__internal_7c4586e20356f99ecca4e6ebab1d95729e67b8792ddd6af3f3116b3e2eb4fc0a = $this->env->getExtension("native_profiler");
        $__internal_7c4586e20356f99ecca4e6ebab1d95729e67b8792ddd6af3f3116b3e2eb4fc0a->enter($__internal_7c4586e20356f99ecca4e6ebab1d95729e67b8792ddd6af3f3116b3e2eb4fc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c4586e20356f99ecca4e6ebab1d95729e67b8792ddd6af3f3116b3e2eb4fc0a->leave($__internal_7c4586e20356f99ecca4e6ebab1d95729e67b8792ddd6af3f3116b3e2eb4fc0a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1bd4f405e714161861a636752c08ac088a76502e925d18c1aad86e61311108c8 = $this->env->getExtension("native_profiler");
        $__internal_1bd4f405e714161861a636752c08ac088a76502e925d18c1aad86e61311108c8->enter($__internal_1bd4f405e714161861a636752c08ac088a76502e925d18c1aad86e61311108c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_1bd4f405e714161861a636752c08ac088a76502e925d18c1aad86e61311108c8->leave($__internal_1bd4f405e714161861a636752c08ac088a76502e925d18c1aad86e61311108c8_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_52b63c8d5ad128a6e4a94689cca31d3615f42a9e63d66c45f363ef1821ca5f00 = $this->env->getExtension("native_profiler");
        $__internal_52b63c8d5ad128a6e4a94689cca31d3615f42a9e63d66c45f363ef1821ca5f00->enter($__internal_52b63c8d5ad128a6e4a94689cca31d3615f42a9e63d66c45f363ef1821ca5f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_52b63c8d5ad128a6e4a94689cca31d3615f42a9e63d66c45f363ef1821ca5f00->leave($__internal_52b63c8d5ad128a6e4a94689cca31d3615f42a9e63d66c45f363ef1821ca5f00_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_176455da1e35100cead5b3279a97910b05aa15c0167f4dec54461e0e097ebb7b = $this->env->getExtension("native_profiler");
        $__internal_176455da1e35100cead5b3279a97910b05aa15c0167f4dec54461e0e097ebb7b->enter($__internal_176455da1e35100cead5b3279a97910b05aa15c0167f4dec54461e0e097ebb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_176455da1e35100cead5b3279a97910b05aa15c0167f4dec54461e0e097ebb7b->leave($__internal_176455da1e35100cead5b3279a97910b05aa15c0167f4dec54461e0e097ebb7b_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_20bb381412834cf7699fb921ac31066d942cfc933db89033bf162714ae6c1622 = $this->env->getExtension("native_profiler");
        $__internal_20bb381412834cf7699fb921ac31066d942cfc933db89033bf162714ae6c1622->enter($__internal_20bb381412834cf7699fb921ac31066d942cfc933db89033bf162714ae6c1622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_20bb381412834cf7699fb921ac31066d942cfc933db89033bf162714ae6c1622->leave($__internal_20bb381412834cf7699fb921ac31066d942cfc933db89033bf162714ae6c1622_prof);

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
