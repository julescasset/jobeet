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
        $__internal_0395a8149084e6e5d201a8b5b22a05171f3c5b33341cf4b3a685815eb0ad7847 = $this->env->getExtension("native_profiler");
        $__internal_0395a8149084e6e5d201a8b5b22a05171f3c5b33341cf4b3a685815eb0ad7847->enter($__internal_0395a8149084e6e5d201a8b5b22a05171f3c5b33341cf4b3a685815eb0ad7847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0395a8149084e6e5d201a8b5b22a05171f3c5b33341cf4b3a685815eb0ad7847->leave($__internal_0395a8149084e6e5d201a8b5b22a05171f3c5b33341cf4b3a685815eb0ad7847_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_2aab7ccc70d5f9dcee6f1121e17cb267d537aa728000ac00a33c9797187cbb4b = $this->env->getExtension("native_profiler");
        $__internal_2aab7ccc70d5f9dcee6f1121e17cb267d537aa728000ac00a33c9797187cbb4b->enter($__internal_2aab7ccc70d5f9dcee6f1121e17cb267d537aa728000ac00a33c9797187cbb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_2aab7ccc70d5f9dcee6f1121e17cb267d537aa728000ac00a33c9797187cbb4b->leave($__internal_2aab7ccc70d5f9dcee6f1121e17cb267d537aa728000ac00a33c9797187cbb4b_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5591adc676ddac6bdb43661d5e6b9bad69908790b993b0f8d1cad227008ff8f2 = $this->env->getExtension("native_profiler");
        $__internal_5591adc676ddac6bdb43661d5e6b9bad69908790b993b0f8d1cad227008ff8f2->enter($__internal_5591adc676ddac6bdb43661d5e6b9bad69908790b993b0f8d1cad227008ff8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5591adc676ddac6bdb43661d5e6b9bad69908790b993b0f8d1cad227008ff8f2->leave($__internal_5591adc676ddac6bdb43661d5e6b9bad69908790b993b0f8d1cad227008ff8f2_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_604abbb2701360c4f9eae5e8c2e275e4c007ba8c9b001aeab01c83a32e00e1b2 = $this->env->getExtension("native_profiler");
        $__internal_604abbb2701360c4f9eae5e8c2e275e4c007ba8c9b001aeab01c83a32e00e1b2->enter($__internal_604abbb2701360c4f9eae5e8c2e275e4c007ba8c9b001aeab01c83a32e00e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_604abbb2701360c4f9eae5e8c2e275e4c007ba8c9b001aeab01c83a32e00e1b2->leave($__internal_604abbb2701360c4f9eae5e8c2e275e4c007ba8c9b001aeab01c83a32e00e1b2_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_ca6bd75392f281afaf1ada41510bf3dee608195a8112a8fb79e07d935578761a = $this->env->getExtension("native_profiler");
        $__internal_ca6bd75392f281afaf1ada41510bf3dee608195a8112a8fb79e07d935578761a->enter($__internal_ca6bd75392f281afaf1ada41510bf3dee608195a8112a8fb79e07d935578761a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_ca6bd75392f281afaf1ada41510bf3dee608195a8112a8fb79e07d935578761a->leave($__internal_ca6bd75392f281afaf1ada41510bf3dee608195a8112a8fb79e07d935578761a_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_160d176a4a26b46efb87eef92629513236a4725d80e56ff78217ab5c987614f8 = $this->env->getExtension("native_profiler");
        $__internal_160d176a4a26b46efb87eef92629513236a4725d80e56ff78217ab5c987614f8->enter($__internal_160d176a4a26b46efb87eef92629513236a4725d80e56ff78217ab5c987614f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_160d176a4a26b46efb87eef92629513236a4725d80e56ff78217ab5c987614f8->leave($__internal_160d176a4a26b46efb87eef92629513236a4725d80e56ff78217ab5c987614f8_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_947d55abb1eedad2ab53c73d7a38ec2ec75e11e11a6e250e0d91839d1336c9f0 = $this->env->getExtension("native_profiler");
        $__internal_947d55abb1eedad2ab53c73d7a38ec2ec75e11e11a6e250e0d91839d1336c9f0->enter($__internal_947d55abb1eedad2ab53c73d7a38ec2ec75e11e11a6e250e0d91839d1336c9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_947d55abb1eedad2ab53c73d7a38ec2ec75e11e11a6e250e0d91839d1336c9f0->leave($__internal_947d55abb1eedad2ab53c73d7a38ec2ec75e11e11a6e250e0d91839d1336c9f0_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_506ca5e20010d7abc3d659b35b588c7dbf287ea47ab3a90c62b9f1dd3f49b8dd = $this->env->getExtension("native_profiler");
        $__internal_506ca5e20010d7abc3d659b35b588c7dbf287ea47ab3a90c62b9f1dd3f49b8dd->enter($__internal_506ca5e20010d7abc3d659b35b588c7dbf287ea47ab3a90c62b9f1dd3f49b8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_506ca5e20010d7abc3d659b35b588c7dbf287ea47ab3a90c62b9f1dd3f49b8dd->leave($__internal_506ca5e20010d7abc3d659b35b588c7dbf287ea47ab3a90c62b9f1dd3f49b8dd_prof);

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
