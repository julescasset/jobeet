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
        $__internal_a2c65582b0b7dfd4707cc79d3f4f241b4473eed9e144c7688f54c6c0b447e760 = $this->env->getExtension("native_profiler");
        $__internal_a2c65582b0b7dfd4707cc79d3f4f241b4473eed9e144c7688f54c6c0b447e760->enter($__internal_a2c65582b0b7dfd4707cc79d3f4f241b4473eed9e144c7688f54c6c0b447e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c65582b0b7dfd4707cc79d3f4f241b4473eed9e144c7688f54c6c0b447e760->leave($__internal_a2c65582b0b7dfd4707cc79d3f4f241b4473eed9e144c7688f54c6c0b447e760_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_403fef19d2c7292688608a8e585fd47d3b6ed57f8dc742934e43607ad7b5d3b6 = $this->env->getExtension("native_profiler");
        $__internal_403fef19d2c7292688608a8e585fd47d3b6ed57f8dc742934e43607ad7b5d3b6->enter($__internal_403fef19d2c7292688608a8e585fd47d3b6ed57f8dc742934e43607ad7b5d3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_403fef19d2c7292688608a8e585fd47d3b6ed57f8dc742934e43607ad7b5d3b6->leave($__internal_403fef19d2c7292688608a8e585fd47d3b6ed57f8dc742934e43607ad7b5d3b6_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_72afa05bd5d77bf995836bbdc9bb175ad8723d81b4e0b72db29e938a524d27da = $this->env->getExtension("native_profiler");
        $__internal_72afa05bd5d77bf995836bbdc9bb175ad8723d81b4e0b72db29e938a524d27da->enter($__internal_72afa05bd5d77bf995836bbdc9bb175ad8723d81b4e0b72db29e938a524d27da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_72afa05bd5d77bf995836bbdc9bb175ad8723d81b4e0b72db29e938a524d27da->leave($__internal_72afa05bd5d77bf995836bbdc9bb175ad8723d81b4e0b72db29e938a524d27da_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8f7bf271f5e1cb1e4fbe8ba20e6e31d1526c758f7c726c86edb504c2edb1c7a = $this->env->getExtension("native_profiler");
        $__internal_c8f7bf271f5e1cb1e4fbe8ba20e6e31d1526c758f7c726c86edb504c2edb1c7a->enter($__internal_c8f7bf271f5e1cb1e4fbe8ba20e6e31d1526c758f7c726c86edb504c2edb1c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_c8f7bf271f5e1cb1e4fbe8ba20e6e31d1526c758f7c726c86edb504c2edb1c7a->leave($__internal_c8f7bf271f5e1cb1e4fbe8ba20e6e31d1526c758f7c726c86edb504c2edb1c7a_prof);

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
