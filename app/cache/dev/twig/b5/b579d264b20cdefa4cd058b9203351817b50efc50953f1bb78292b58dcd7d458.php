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
        $__internal_9add48b13591be534bb92ba4330c8ed57a652ee0d3e96051ab9c528757750e70 = $this->env->getExtension("native_profiler");
        $__internal_9add48b13591be534bb92ba4330c8ed57a652ee0d3e96051ab9c528757750e70->enter($__internal_9add48b13591be534bb92ba4330c8ed57a652ee0d3e96051ab9c528757750e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9add48b13591be534bb92ba4330c8ed57a652ee0d3e96051ab9c528757750e70->leave($__internal_9add48b13591be534bb92ba4330c8ed57a652ee0d3e96051ab9c528757750e70_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1ba2b42ca1ccace472cdd1cefa2dd97be7212c1ae6879c6ebe321b70339befb2 = $this->env->getExtension("native_profiler");
        $__internal_1ba2b42ca1ccace472cdd1cefa2dd97be7212c1ae6879c6ebe321b70339befb2->enter($__internal_1ba2b42ca1ccace472cdd1cefa2dd97be7212c1ae6879c6ebe321b70339befb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_1ba2b42ca1ccace472cdd1cefa2dd97be7212c1ae6879c6ebe321b70339befb2->leave($__internal_1ba2b42ca1ccace472cdd1cefa2dd97be7212c1ae6879c6ebe321b70339befb2_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_9ff832cc0c07ecc13ee1f9f9038d386dbdb4cf028725361b4b45e249d7edb1f8 = $this->env->getExtension("native_profiler");
        $__internal_9ff832cc0c07ecc13ee1f9f9038d386dbdb4cf028725361b4b45e249d7edb1f8->enter($__internal_9ff832cc0c07ecc13ee1f9f9038d386dbdb4cf028725361b4b45e249d7edb1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_9ff832cc0c07ecc13ee1f9f9038d386dbdb4cf028725361b4b45e249d7edb1f8->leave($__internal_9ff832cc0c07ecc13ee1f9f9038d386dbdb4cf028725361b4b45e249d7edb1f8_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_0c6df5c6671a575c427fdb93c6904f95e94cb7cd69f51df37d2c31322270ba17 = $this->env->getExtension("native_profiler");
        $__internal_0c6df5c6671a575c427fdb93c6904f95e94cb7cd69f51df37d2c31322270ba17->enter($__internal_0c6df5c6671a575c427fdb93c6904f95e94cb7cd69f51df37d2c31322270ba17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0c6df5c6671a575c427fdb93c6904f95e94cb7cd69f51df37d2c31322270ba17->leave($__internal_0c6df5c6671a575c427fdb93c6904f95e94cb7cd69f51df37d2c31322270ba17_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_ab628ce8fd24458a342788feabb930556b7c30acb715488d03678ccf2e857dd0 = $this->env->getExtension("native_profiler");
        $__internal_ab628ce8fd24458a342788feabb930556b7c30acb715488d03678ccf2e857dd0->enter($__internal_ab628ce8fd24458a342788feabb930556b7c30acb715488d03678ccf2e857dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_ab628ce8fd24458a342788feabb930556b7c30acb715488d03678ccf2e857dd0->leave($__internal_ab628ce8fd24458a342788feabb930556b7c30acb715488d03678ccf2e857dd0_prof);

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
