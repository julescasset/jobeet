<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_3e29b075ca088e6f667b1bdd1fc7aebc9e8ca70085f9626fe3a7260fc9858dd0 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_960eb54d58ca31fd726d393164ed813fb08047bcd114ae07db398ed3ad860d60 = $this->env->getExtension("native_profiler");
        $__internal_960eb54d58ca31fd726d393164ed813fb08047bcd114ae07db398ed3ad860d60->enter($__internal_960eb54d58ca31fd726d393164ed813fb08047bcd114ae07db398ed3ad860d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960eb54d58ca31fd726d393164ed813fb08047bcd114ae07db398ed3ad860d60->leave($__internal_960eb54d58ca31fd726d393164ed813fb08047bcd114ae07db398ed3ad860d60_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1b244eb08a028111c8493725e7cd32cf8ae69d465c3925c50becef5a40ab1f9d = $this->env->getExtension("native_profiler");
        $__internal_1b244eb08a028111c8493725e7cd32cf8ae69d465c3925c50becef5a40ab1f9d->enter($__internal_1b244eb08a028111c8493725e7cd32cf8ae69d465c3925c50becef5a40ab1f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_1b244eb08a028111c8493725e7cd32cf8ae69d465c3925c50becef5a40ab1f9d->leave($__internal_1b244eb08a028111c8493725e7cd32cf8ae69d465c3925c50becef5a40ab1f9d_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_2fbab7e1e693ac156e865046828f87ee49befdb6bc4cbf22116d74c7c6397188 = $this->env->getExtension("native_profiler");
        $__internal_2fbab7e1e693ac156e865046828f87ee49befdb6bc4cbf22116d74c7c6397188->enter($__internal_2fbab7e1e693ac156e865046828f87ee49befdb6bc4cbf22116d74c7c6397188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_2fbab7e1e693ac156e865046828f87ee49befdb6bc4cbf22116d74c7c6397188->leave($__internal_2fbab7e1e693ac156e865046828f87ee49befdb6bc4cbf22116d74c7c6397188_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d7cea268b77f66fc1e292f4783cbd488795e335b966dfae1fca52e967d21c60 = $this->env->getExtension("native_profiler");
        $__internal_8d7cea268b77f66fc1e292f4783cbd488795e335b966dfae1fca52e967d21c60->enter($__internal_8d7cea268b77f66fc1e292f4783cbd488795e335b966dfae1fca52e967d21c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_8d7cea268b77f66fc1e292f4783cbd488795e335b966dfae1fca52e967d21c60->leave($__internal_8d7cea268b77f66fc1e292f4783cbd488795e335b966dfae1fca52e967d21c60_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
