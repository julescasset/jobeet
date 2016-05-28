<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_4c0ca9edc80507ef3055e8839d3321ba2328346fc25a01a36fb38ff67c2aaa2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a18243a82bff88cc1bec01c31b3a3953414fe206bc3b9fa18bb82d62247ad89 = $this->env->getExtension("native_profiler");
        $__internal_0a18243a82bff88cc1bec01c31b3a3953414fe206bc3b9fa18bb82d62247ad89->enter($__internal_0a18243a82bff88cc1bec01c31b3a3953414fe206bc3b9fa18bb82d62247ad89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a18243a82bff88cc1bec01c31b3a3953414fe206bc3b9fa18bb82d62247ad89->leave($__internal_0a18243a82bff88cc1bec01c31b3a3953414fe206bc3b9fa18bb82d62247ad89_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0f876e39b4bcfeae7f1de41c7e345b44a3e47322664c22990ac21f1774b20ec4 = $this->env->getExtension("native_profiler");
        $__internal_0f876e39b4bcfeae7f1de41c7e345b44a3e47322664c22990ac21f1774b20ec4->enter($__internal_0f876e39b4bcfeae7f1de41c7e345b44a3e47322664c22990ac21f1774b20ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_0f876e39b4bcfeae7f1de41c7e345b44a3e47322664c22990ac21f1774b20ec4->leave($__internal_0f876e39b4bcfeae7f1de41c7e345b44a3e47322664c22990ac21f1774b20ec4_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0dcd05e0fa34ad76905bc45f62245f27556b68226a4391d8924ad91097bcd537 = $this->env->getExtension("native_profiler");
        $__internal_0dcd05e0fa34ad76905bc45f62245f27556b68226a4391d8924ad91097bcd537->enter($__internal_0dcd05e0fa34ad76905bc45f62245f27556b68226a4391d8924ad91097bcd537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_0dcd05e0fa34ad76905bc45f62245f27556b68226a4391d8924ad91097bcd537->leave($__internal_0dcd05e0fa34ad76905bc45f62245f27556b68226a4391d8924ad91097bcd537_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c20d26b01e6a42a99140b56cb9108881d3aee84c454d16b9519502838691227 = $this->env->getExtension("native_profiler");
        $__internal_7c20d26b01e6a42a99140b56cb9108881d3aee84c454d16b9519502838691227->enter($__internal_7c20d26b01e6a42a99140b56cb9108881d3aee84c454d16b9519502838691227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_7c20d26b01e6a42a99140b56cb9108881d3aee84c454d16b9519502838691227->leave($__internal_7c20d26b01e6a42a99140b56cb9108881d3aee84c454d16b9519502838691227_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
