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
        $__internal_9aa6ca70f99a062ca51ac086a71c3db8b0c115dc152f83748f52a5dddf54d83a = $this->env->getExtension("native_profiler");
        $__internal_9aa6ca70f99a062ca51ac086a71c3db8b0c115dc152f83748f52a5dddf54d83a->enter($__internal_9aa6ca70f99a062ca51ac086a71c3db8b0c115dc152f83748f52a5dddf54d83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa6ca70f99a062ca51ac086a71c3db8b0c115dc152f83748f52a5dddf54d83a->leave($__internal_9aa6ca70f99a062ca51ac086a71c3db8b0c115dc152f83748f52a5dddf54d83a_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_d91ebbfe48d54502996b55a3af5c7dfe8d6a912232e91c0bde4143eb9de88bf9 = $this->env->getExtension("native_profiler");
        $__internal_d91ebbfe48d54502996b55a3af5c7dfe8d6a912232e91c0bde4143eb9de88bf9->enter($__internal_d91ebbfe48d54502996b55a3af5c7dfe8d6a912232e91c0bde4143eb9de88bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_d91ebbfe48d54502996b55a3af5c7dfe8d6a912232e91c0bde4143eb9de88bf9->leave($__internal_d91ebbfe48d54502996b55a3af5c7dfe8d6a912232e91c0bde4143eb9de88bf9_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_17ca43b4eb86b971b9b106f74f2335552bb9ba9fb685dce96afafb39637f01a0 = $this->env->getExtension("native_profiler");
        $__internal_17ca43b4eb86b971b9b106f74f2335552bb9ba9fb685dce96afafb39637f01a0->enter($__internal_17ca43b4eb86b971b9b106f74f2335552bb9ba9fb685dce96afafb39637f01a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_17ca43b4eb86b971b9b106f74f2335552bb9ba9fb685dce96afafb39637f01a0->leave($__internal_17ca43b4eb86b971b9b106f74f2335552bb9ba9fb685dce96afafb39637f01a0_prof);

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
