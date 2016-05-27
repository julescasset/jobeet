<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_82360856ef18f19914d7914400296c8fe5148879e5a106800931827e3d600027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e78358624e24966a9515060d7cc02d5ab54327c7b28ca23f237f0193f8769983 = $this->env->getExtension("native_profiler");
        $__internal_e78358624e24966a9515060d7cc02d5ab54327c7b28ca23f237f0193f8769983->enter($__internal_e78358624e24966a9515060d7cc02d5ab54327c7b28ca23f237f0193f8769983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78358624e24966a9515060d7cc02d5ab54327c7b28ca23f237f0193f8769983->leave($__internal_e78358624e24966a9515060d7cc02d5ab54327c7b28ca23f237f0193f8769983_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_62e816ab47e01a98776796de59ee5d6861c0cc23633d9ba7394c0e03c3eb54c2 = $this->env->getExtension("native_profiler");
        $__internal_62e816ab47e01a98776796de59ee5d6861c0cc23633d9ba7394c0e03c3eb54c2->enter($__internal_62e816ab47e01a98776796de59ee5d6861c0cc23633d9ba7394c0e03c3eb54c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_62e816ab47e01a98776796de59ee5d6861c0cc23633d9ba7394c0e03c3eb54c2->leave($__internal_62e816ab47e01a98776796de59ee5d6861c0cc23633d9ba7394c0e03c3eb54c2_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_8dde7c9b596d59c373fd9425ecb54c2f1601748edc56ee97243230ff86f4343b = $this->env->getExtension("native_profiler");
        $__internal_8dde7c9b596d59c373fd9425ecb54c2f1601748edc56ee97243230ff86f4343b->enter($__internal_8dde7c9b596d59c373fd9425ecb54c2f1601748edc56ee97243230ff86f4343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_8dde7c9b596d59c373fd9425ecb54c2f1601748edc56ee97243230ff86f4343b->leave($__internal_8dde7c9b596d59c373fd9425ecb54c2f1601748edc56ee97243230ff86f4343b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3af0cd45b4b595a5491dba9dc4d1fadd912af96e5ff232b3022d8e5129bfe528 = $this->env->getExtension("native_profiler");
        $__internal_3af0cd45b4b595a5491dba9dc4d1fadd912af96e5ff232b3022d8e5129bfe528->enter($__internal_3af0cd45b4b595a5491dba9dc4d1fadd912af96e5ff232b3022d8e5129bfe528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_3af0cd45b4b595a5491dba9dc4d1fadd912af96e5ff232b3022d8e5129bfe528->leave($__internal_3af0cd45b4b595a5491dba9dc4d1fadd912af96e5ff232b3022d8e5129bfe528_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_46cf9ed0ae410a682fd77384ce76e0c67d3bc03e5cac2a816c6a890c03565d9b = $this->env->getExtension("native_profiler");
        $__internal_46cf9ed0ae410a682fd77384ce76e0c67d3bc03e5cac2a816c6a890c03565d9b->enter($__internal_46cf9ed0ae410a682fd77384ce76e0c67d3bc03e5cac2a816c6a890c03565d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_46cf9ed0ae410a682fd77384ce76e0c67d3bc03e5cac2a816c6a890c03565d9b->leave($__internal_46cf9ed0ae410a682fd77384ce76e0c67d3bc03e5cac2a816c6a890c03565d9b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2142efc3077b2b9bbec9e0d4dff66b9bf1910b8c43020acb1f9bb161cd0b420f = $this->env->getExtension("native_profiler");
        $__internal_2142efc3077b2b9bbec9e0d4dff66b9bf1910b8c43020acb1f9bb161cd0b420f->enter($__internal_2142efc3077b2b9bbec9e0d4dff66b9bf1910b8c43020acb1f9bb161cd0b420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_2142efc3077b2b9bbec9e0d4dff66b9bf1910b8c43020acb1f9bb161cd0b420f->leave($__internal_2142efc3077b2b9bbec9e0d4dff66b9bf1910b8c43020acb1f9bb161cd0b420f_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_833f41c37bca1ae1e8260ee5c7204c2091bc0b65b19625d400735847621ed848 = $this->env->getExtension("native_profiler");
        $__internal_833f41c37bca1ae1e8260ee5c7204c2091bc0b65b19625d400735847621ed848->enter($__internal_833f41c37bca1ae1e8260ee5c7204c2091bc0b65b19625d400735847621ed848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_833f41c37bca1ae1e8260ee5c7204c2091bc0b65b19625d400735847621ed848->leave($__internal_833f41c37bca1ae1e8260ee5c7204c2091bc0b65b19625d400735847621ed848_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_aabf759e1d46f4331598f62f8f205c9b92719351eba01578e90b314ccfa5c5b2 = $this->env->getExtension("native_profiler");
        $__internal_aabf759e1d46f4331598f62f8f205c9b92719351eba01578e90b314ccfa5c5b2->enter($__internal_aabf759e1d46f4331598f62f8f205c9b92719351eba01578e90b314ccfa5c5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_aabf759e1d46f4331598f62f8f205c9b92719351eba01578e90b314ccfa5c5b2->leave($__internal_aabf759e1d46f4331598f62f8f205c9b92719351eba01578e90b314ccfa5c5b2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
