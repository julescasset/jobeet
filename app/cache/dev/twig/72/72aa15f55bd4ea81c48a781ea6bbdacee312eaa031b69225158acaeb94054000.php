<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_cf94a0948b754057ad2dbd108df5a516fd5827a1967e045558ee08a48d7fffc7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89e036af79375c7a00e266bf87309a028cbeeeb975063afd37f33428c2d2a760 = $this->env->getExtension("native_profiler");
        $__internal_89e036af79375c7a00e266bf87309a028cbeeeb975063afd37f33428c2d2a760->enter($__internal_89e036af79375c7a00e266bf87309a028cbeeeb975063afd37f33428c2d2a760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e036af79375c7a00e266bf87309a028cbeeeb975063afd37f33428c2d2a760->leave($__internal_89e036af79375c7a00e266bf87309a028cbeeeb975063afd37f33428c2d2a760_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_e65c6095f0d8361e41b832bb851a61f64054deedaf593a02915816a8e60cfa0c = $this->env->getExtension("native_profiler");
        $__internal_e65c6095f0d8361e41b832bb851a61f64054deedaf593a02915816a8e60cfa0c->enter($__internal_e65c6095f0d8361e41b832bb851a61f64054deedaf593a02915816a8e60cfa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_e65c6095f0d8361e41b832bb851a61f64054deedaf593a02915816a8e60cfa0c->leave($__internal_e65c6095f0d8361e41b832bb851a61f64054deedaf593a02915816a8e60cfa0c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c0aacae48f55332f2e85cd4bb5fa1ff16182bc86230cee78067eb3b4d5ec79fa = $this->env->getExtension("native_profiler");
        $__internal_c0aacae48f55332f2e85cd4bb5fa1ff16182bc86230cee78067eb3b4d5ec79fa->enter($__internal_c0aacae48f55332f2e85cd4bb5fa1ff16182bc86230cee78067eb3b4d5ec79fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_c0aacae48f55332f2e85cd4bb5fa1ff16182bc86230cee78067eb3b4d5ec79fa->leave($__internal_c0aacae48f55332f2e85cd4bb5fa1ff16182bc86230cee78067eb3b4d5ec79fa_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0ef8f9e2a6a3ffbb5fe3abe1dc2944543c8cedbdd6e6a3e4046b28d89cababa1 = $this->env->getExtension("native_profiler");
        $__internal_0ef8f9e2a6a3ffbb5fe3abe1dc2944543c8cedbdd6e6a3e4046b28d89cababa1->enter($__internal_0ef8f9e2a6a3ffbb5fe3abe1dc2944543c8cedbdd6e6a3e4046b28d89cababa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_0ef8f9e2a6a3ffbb5fe3abe1dc2944543c8cedbdd6e6a3e4046b28d89cababa1->leave($__internal_0ef8f9e2a6a3ffbb5fe3abe1dc2944543c8cedbdd6e6a3e4046b28d89cababa1_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_4572d0e0ef54a9ab7c252b38df015077b79c31208d8eeda46d825ea84bf645f5 = $this->env->getExtension("native_profiler");
        $__internal_4572d0e0ef54a9ab7c252b38df015077b79c31208d8eeda46d825ea84bf645f5->enter($__internal_4572d0e0ef54a9ab7c252b38df015077b79c31208d8eeda46d825ea84bf645f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_4572d0e0ef54a9ab7c252b38df015077b79c31208d8eeda46d825ea84bf645f5->leave($__internal_4572d0e0ef54a9ab7c252b38df015077b79c31208d8eeda46d825ea84bf645f5_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c63f768f1739b2f0ba1757ac4da59dec94e379de9416ea11c863f0807258e50 = $this->env->getExtension("native_profiler");
        $__internal_6c63f768f1739b2f0ba1757ac4da59dec94e379de9416ea11c863f0807258e50->enter($__internal_6c63f768f1739b2f0ba1757ac4da59dec94e379de9416ea11c863f0807258e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6c63f768f1739b2f0ba1757ac4da59dec94e379de9416ea11c863f0807258e50->leave($__internal_6c63f768f1739b2f0ba1757ac4da59dec94e379de9416ea11c863f0807258e50_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_94539a4865699050a269dbb9fd904a6102a2d09760a43d305f9439ba89bfb908 = $this->env->getExtension("native_profiler");
        $__internal_94539a4865699050a269dbb9fd904a6102a2d09760a43d305f9439ba89bfb908->enter($__internal_94539a4865699050a269dbb9fd904a6102a2d09760a43d305f9439ba89bfb908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_94539a4865699050a269dbb9fd904a6102a2d09760a43d305f9439ba89bfb908->leave($__internal_94539a4865699050a269dbb9fd904a6102a2d09760a43d305f9439ba89bfb908_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_681b68c09916da35e1474a48f2a1c9af9aa30d59a206ce94719ab8bd6468d80b = $this->env->getExtension("native_profiler");
        $__internal_681b68c09916da35e1474a48f2a1c9af9aa30d59a206ce94719ab8bd6468d80b->enter($__internal_681b68c09916da35e1474a48f2a1c9af9aa30d59a206ce94719ab8bd6468d80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_681b68c09916da35e1474a48f2a1c9af9aa30d59a206ce94719ab8bd6468d80b->leave($__internal_681b68c09916da35e1474a48f2a1c9af9aa30d59a206ce94719ab8bd6468d80b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
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
