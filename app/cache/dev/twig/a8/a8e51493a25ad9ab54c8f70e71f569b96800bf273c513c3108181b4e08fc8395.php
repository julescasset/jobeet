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
        $__internal_3a517c06ac35ba89ff71fe9e79a9b23bedc7e4506f3fdf16d8655706037d8e13 = $this->env->getExtension("native_profiler");
        $__internal_3a517c06ac35ba89ff71fe9e79a9b23bedc7e4506f3fdf16d8655706037d8e13->enter($__internal_3a517c06ac35ba89ff71fe9e79a9b23bedc7e4506f3fdf16d8655706037d8e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a517c06ac35ba89ff71fe9e79a9b23bedc7e4506f3fdf16d8655706037d8e13->leave($__internal_3a517c06ac35ba89ff71fe9e79a9b23bedc7e4506f3fdf16d8655706037d8e13_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6ed21444923c8bd90f981c1abf8868d9a1050acf305b89d1f012bee5609648ee = $this->env->getExtension("native_profiler");
        $__internal_6ed21444923c8bd90f981c1abf8868d9a1050acf305b89d1f012bee5609648ee->enter($__internal_6ed21444923c8bd90f981c1abf8868d9a1050acf305b89d1f012bee5609648ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_6ed21444923c8bd90f981c1abf8868d9a1050acf305b89d1f012bee5609648ee->leave($__internal_6ed21444923c8bd90f981c1abf8868d9a1050acf305b89d1f012bee5609648ee_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_273ac7a7c265dcab7972c9ade6733f341b30178e3c7158f21d9fcdea3b4b3905 = $this->env->getExtension("native_profiler");
        $__internal_273ac7a7c265dcab7972c9ade6733f341b30178e3c7158f21d9fcdea3b4b3905->enter($__internal_273ac7a7c265dcab7972c9ade6733f341b30178e3c7158f21d9fcdea3b4b3905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_273ac7a7c265dcab7972c9ade6733f341b30178e3c7158f21d9fcdea3b4b3905->leave($__internal_273ac7a7c265dcab7972c9ade6733f341b30178e3c7158f21d9fcdea3b4b3905_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d0f566bc1aad5b9a221391d301ae52df72b051a201d711033e6da83562d30ac = $this->env->getExtension("native_profiler");
        $__internal_6d0f566bc1aad5b9a221391d301ae52df72b051a201d711033e6da83562d30ac->enter($__internal_6d0f566bc1aad5b9a221391d301ae52df72b051a201d711033e6da83562d30ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_6d0f566bc1aad5b9a221391d301ae52df72b051a201d711033e6da83562d30ac->leave($__internal_6d0f566bc1aad5b9a221391d301ae52df72b051a201d711033e6da83562d30ac_prof);

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
