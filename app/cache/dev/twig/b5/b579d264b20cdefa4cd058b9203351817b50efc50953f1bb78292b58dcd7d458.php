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
        $__internal_011ed943386dfb19bfa71e673ab99c887308374ec6520e2bec0338d70e0d07a4 = $this->env->getExtension("native_profiler");
        $__internal_011ed943386dfb19bfa71e673ab99c887308374ec6520e2bec0338d70e0d07a4->enter($__internal_011ed943386dfb19bfa71e673ab99c887308374ec6520e2bec0338d70e0d07a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011ed943386dfb19bfa71e673ab99c887308374ec6520e2bec0338d70e0d07a4->leave($__internal_011ed943386dfb19bfa71e673ab99c887308374ec6520e2bec0338d70e0d07a4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_df8fa4ff3abb37af3e93e7fda690a7a5d38a6b70e5fcb2995b2fd5ea3ed43e64 = $this->env->getExtension("native_profiler");
        $__internal_df8fa4ff3abb37af3e93e7fda690a7a5d38a6b70e5fcb2995b2fd5ea3ed43e64->enter($__internal_df8fa4ff3abb37af3e93e7fda690a7a5d38a6b70e5fcb2995b2fd5ea3ed43e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_df8fa4ff3abb37af3e93e7fda690a7a5d38a6b70e5fcb2995b2fd5ea3ed43e64->leave($__internal_df8fa4ff3abb37af3e93e7fda690a7a5d38a6b70e5fcb2995b2fd5ea3ed43e64_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_bf69dac6d643a24e5bf462b69484c53e1c1c81bd73a906efa20f95f6fd90f26e = $this->env->getExtension("native_profiler");
        $__internal_bf69dac6d643a24e5bf462b69484c53e1c1c81bd73a906efa20f95f6fd90f26e->enter($__internal_bf69dac6d643a24e5bf462b69484c53e1c1c81bd73a906efa20f95f6fd90f26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_bf69dac6d643a24e5bf462b69484c53e1c1c81bd73a906efa20f95f6fd90f26e->leave($__internal_bf69dac6d643a24e5bf462b69484c53e1c1c81bd73a906efa20f95f6fd90f26e_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_e9ba756ae4cd4eb9f425066706dba06cf168afbbdf9ba2e3971e19e7ffb48d93 = $this->env->getExtension("native_profiler");
        $__internal_e9ba756ae4cd4eb9f425066706dba06cf168afbbdf9ba2e3971e19e7ffb48d93->enter($__internal_e9ba756ae4cd4eb9f425066706dba06cf168afbbdf9ba2e3971e19e7ffb48d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e9ba756ae4cd4eb9f425066706dba06cf168afbbdf9ba2e3971e19e7ffb48d93->leave($__internal_e9ba756ae4cd4eb9f425066706dba06cf168afbbdf9ba2e3971e19e7ffb48d93_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_10112c6a0a092707c829a5459c1009d1e613e878374b4f8637ee10ea07dad86f = $this->env->getExtension("native_profiler");
        $__internal_10112c6a0a092707c829a5459c1009d1e613e878374b4f8637ee10ea07dad86f->enter($__internal_10112c6a0a092707c829a5459c1009d1e613e878374b4f8637ee10ea07dad86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_10112c6a0a092707c829a5459c1009d1e613e878374b4f8637ee10ea07dad86f->leave($__internal_10112c6a0a092707c829a5459c1009d1e613e878374b4f8637ee10ea07dad86f_prof);

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
