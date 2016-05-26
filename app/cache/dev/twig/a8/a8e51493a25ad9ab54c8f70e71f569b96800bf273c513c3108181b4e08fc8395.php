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
        $__internal_cc991102edcf2857daa4d84ab84f2ab100a6819869e9145b60d2d59b9c3ef172 = $this->env->getExtension("native_profiler");
        $__internal_cc991102edcf2857daa4d84ab84f2ab100a6819869e9145b60d2d59b9c3ef172->enter($__internal_cc991102edcf2857daa4d84ab84f2ab100a6819869e9145b60d2d59b9c3ef172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc991102edcf2857daa4d84ab84f2ab100a6819869e9145b60d2d59b9c3ef172->leave($__internal_cc991102edcf2857daa4d84ab84f2ab100a6819869e9145b60d2d59b9c3ef172_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5348f7ab63e581da69777a1cc7a721213400bd553240226727636dc13759fc4f = $this->env->getExtension("native_profiler");
        $__internal_5348f7ab63e581da69777a1cc7a721213400bd553240226727636dc13759fc4f->enter($__internal_5348f7ab63e581da69777a1cc7a721213400bd553240226727636dc13759fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_5348f7ab63e581da69777a1cc7a721213400bd553240226727636dc13759fc4f->leave($__internal_5348f7ab63e581da69777a1cc7a721213400bd553240226727636dc13759fc4f_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_66ee2696cf67f6394b69bfbbdd4967387cd7a7fdc2ab60dfc4774651ec74dd21 = $this->env->getExtension("native_profiler");
        $__internal_66ee2696cf67f6394b69bfbbdd4967387cd7a7fdc2ab60dfc4774651ec74dd21->enter($__internal_66ee2696cf67f6394b69bfbbdd4967387cd7a7fdc2ab60dfc4774651ec74dd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_66ee2696cf67f6394b69bfbbdd4967387cd7a7fdc2ab60dfc4774651ec74dd21->leave($__internal_66ee2696cf67f6394b69bfbbdd4967387cd7a7fdc2ab60dfc4774651ec74dd21_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_eef07d057d885fad77d880b54e972ccd77302795d5a12792be6d0f90f842feea = $this->env->getExtension("native_profiler");
        $__internal_eef07d057d885fad77d880b54e972ccd77302795d5a12792be6d0f90f842feea->enter($__internal_eef07d057d885fad77d880b54e972ccd77302795d5a12792be6d0f90f842feea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_eef07d057d885fad77d880b54e972ccd77302795d5a12792be6d0f90f842feea->leave($__internal_eef07d057d885fad77d880b54e972ccd77302795d5a12792be6d0f90f842feea_prof);

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
