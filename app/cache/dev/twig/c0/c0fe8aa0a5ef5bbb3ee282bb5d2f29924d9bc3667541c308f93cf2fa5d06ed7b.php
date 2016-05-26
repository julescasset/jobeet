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
        $__internal_97185d5879321ead013c2b0561566976eda04c7977353d34310a84d144aaa05c = $this->env->getExtension("native_profiler");
        $__internal_97185d5879321ead013c2b0561566976eda04c7977353d34310a84d144aaa05c->enter($__internal_97185d5879321ead013c2b0561566976eda04c7977353d34310a84d144aaa05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97185d5879321ead013c2b0561566976eda04c7977353d34310a84d144aaa05c->leave($__internal_97185d5879321ead013c2b0561566976eda04c7977353d34310a84d144aaa05c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d0aee1be94bcfa12f6f478f84e4600671901847ee0a89bf6ce9a81af11eaf978 = $this->env->getExtension("native_profiler");
        $__internal_d0aee1be94bcfa12f6f478f84e4600671901847ee0a89bf6ce9a81af11eaf978->enter($__internal_d0aee1be94bcfa12f6f478f84e4600671901847ee0a89bf6ce9a81af11eaf978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_d0aee1be94bcfa12f6f478f84e4600671901847ee0a89bf6ce9a81af11eaf978->leave($__internal_d0aee1be94bcfa12f6f478f84e4600671901847ee0a89bf6ce9a81af11eaf978_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c862f191c3ec7846ef4d9bc4ff4ba38073ccc309c81edc8da5ef81ed0fc008a3 = $this->env->getExtension("native_profiler");
        $__internal_c862f191c3ec7846ef4d9bc4ff4ba38073ccc309c81edc8da5ef81ed0fc008a3->enter($__internal_c862f191c3ec7846ef4d9bc4ff4ba38073ccc309c81edc8da5ef81ed0fc008a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_c862f191c3ec7846ef4d9bc4ff4ba38073ccc309c81edc8da5ef81ed0fc008a3->leave($__internal_c862f191c3ec7846ef4d9bc4ff4ba38073ccc309c81edc8da5ef81ed0fc008a3_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_6173739db14510f62b570ef70fbfd0719a2708eed384fa30a8a5a06521933fe8 = $this->env->getExtension("native_profiler");
        $__internal_6173739db14510f62b570ef70fbfd0719a2708eed384fa30a8a5a06521933fe8->enter($__internal_6173739db14510f62b570ef70fbfd0719a2708eed384fa30a8a5a06521933fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_6173739db14510f62b570ef70fbfd0719a2708eed384fa30a8a5a06521933fe8->leave($__internal_6173739db14510f62b570ef70fbfd0719a2708eed384fa30a8a5a06521933fe8_prof);

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
