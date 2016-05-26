<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_71adff48d8f044296ae02ee138e45465078dc38001e04fac6a1476e0812e0d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e856bc85842bce8d893361b847e5704b3d32a90644554a07d22ff8121fb2f6 = $this->env->getExtension("native_profiler");
        $__internal_49e856bc85842bce8d893361b847e5704b3d32a90644554a07d22ff8121fb2f6->enter($__internal_49e856bc85842bce8d893361b847e5704b3d32a90644554a07d22ff8121fb2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e856bc85842bce8d893361b847e5704b3d32a90644554a07d22ff8121fb2f6->leave($__internal_49e856bc85842bce8d893361b847e5704b3d32a90644554a07d22ff8121fb2f6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_99a136c9e5e635ee6c2edfa7af3ff2b59c8a8958fc2cddc25bdaf777a7366faa = $this->env->getExtension("native_profiler");
        $__internal_99a136c9e5e635ee6c2edfa7af3ff2b59c8a8958fc2cddc25bdaf777a7366faa->enter($__internal_99a136c9e5e635ee6c2edfa7af3ff2b59c8a8958fc2cddc25bdaf777a7366faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_99a136c9e5e635ee6c2edfa7af3ff2b59c8a8958fc2cddc25bdaf777a7366faa->leave($__internal_99a136c9e5e635ee6c2edfa7af3ff2b59c8a8958fc2cddc25bdaf777a7366faa_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
