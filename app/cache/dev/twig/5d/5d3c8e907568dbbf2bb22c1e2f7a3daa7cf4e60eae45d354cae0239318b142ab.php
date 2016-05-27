<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_d0d68499a4d54383d9accb9589c5186eed75c674a8b282e9d9ccb71d1b14f086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1e5cfd0b13eff35bdf8d3731cf1465951aa72ad1d38e864d83e8092e2b261d7 = $this->env->getExtension("native_profiler");
        $__internal_d1e5cfd0b13eff35bdf8d3731cf1465951aa72ad1d38e864d83e8092e2b261d7->enter($__internal_d1e5cfd0b13eff35bdf8d3731cf1465951aa72ad1d38e864d83e8092e2b261d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e5cfd0b13eff35bdf8d3731cf1465951aa72ad1d38e864d83e8092e2b261d7->leave($__internal_d1e5cfd0b13eff35bdf8d3731cf1465951aa72ad1d38e864d83e8092e2b261d7_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_e7d10430402387da3f1ae9cc08a4812196b8b90468317d103b0aa0fec5158553 = $this->env->getExtension("native_profiler");
        $__internal_e7d10430402387da3f1ae9cc08a4812196b8b90468317d103b0aa0fec5158553->enter($__internal_e7d10430402387da3f1ae9cc08a4812196b8b90468317d103b0aa0fec5158553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_e7d10430402387da3f1ae9cc08a4812196b8b90468317d103b0aa0fec5158553->leave($__internal_e7d10430402387da3f1ae9cc08a4812196b8b90468317d103b0aa0fec5158553_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_888224eda838d50e978e28a334ed500326b7867274a6ac5c0d046ca726a35009 = $this->env->getExtension("native_profiler");
        $__internal_888224eda838d50e978e28a334ed500326b7867274a6ac5c0d046ca726a35009->enter($__internal_888224eda838d50e978e28a334ed500326b7867274a6ac5c0d046ca726a35009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_888224eda838d50e978e28a334ed500326b7867274a6ac5c0d046ca726a35009->leave($__internal_888224eda838d50e978e28a334ed500326b7867274a6ac5c0d046ca726a35009_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
