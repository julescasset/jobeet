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
        $__internal_ca632f9b9964b0c0609a36c9f11e6d1d23c56ad0fb9e6cd0fb17d604ede61cdc = $this->env->getExtension("native_profiler");
        $__internal_ca632f9b9964b0c0609a36c9f11e6d1d23c56ad0fb9e6cd0fb17d604ede61cdc->enter($__internal_ca632f9b9964b0c0609a36c9f11e6d1d23c56ad0fb9e6cd0fb17d604ede61cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca632f9b9964b0c0609a36c9f11e6d1d23c56ad0fb9e6cd0fb17d604ede61cdc->leave($__internal_ca632f9b9964b0c0609a36c9f11e6d1d23c56ad0fb9e6cd0fb17d604ede61cdc_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_0680a585399a3286c58a99d05819e5547136ec9c5310a6d811e70b8f7d2c4c63 = $this->env->getExtension("native_profiler");
        $__internal_0680a585399a3286c58a99d05819e5547136ec9c5310a6d811e70b8f7d2c4c63->enter($__internal_0680a585399a3286c58a99d05819e5547136ec9c5310a6d811e70b8f7d2c4c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_0680a585399a3286c58a99d05819e5547136ec9c5310a6d811e70b8f7d2c4c63->leave($__internal_0680a585399a3286c58a99d05819e5547136ec9c5310a6d811e70b8f7d2c4c63_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6f71c078f7dd7b74a0852b353e82e2d8e7a9c047944055fa3669823143247211 = $this->env->getExtension("native_profiler");
        $__internal_6f71c078f7dd7b74a0852b353e82e2d8e7a9c047944055fa3669823143247211->enter($__internal_6f71c078f7dd7b74a0852b353e82e2d8e7a9c047944055fa3669823143247211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6f71c078f7dd7b74a0852b353e82e2d8e7a9c047944055fa3669823143247211->leave($__internal_6f71c078f7dd7b74a0852b353e82e2d8e7a9c047944055fa3669823143247211_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5371793857f9839e937b9d6312a520148d4507decf7498da4c6ec75e779ddccc = $this->env->getExtension("native_profiler");
        $__internal_5371793857f9839e937b9d6312a520148d4507decf7498da4c6ec75e779ddccc->enter($__internal_5371793857f9839e937b9d6312a520148d4507decf7498da4c6ec75e779ddccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5371793857f9839e937b9d6312a520148d4507decf7498da4c6ec75e779ddccc->leave($__internal_5371793857f9839e937b9d6312a520148d4507decf7498da4c6ec75e779ddccc_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_260be40a64effa90b20e0a3ece9b98c4c1af822654b3d29786f92c79eeb47cfd = $this->env->getExtension("native_profiler");
        $__internal_260be40a64effa90b20e0a3ece9b98c4c1af822654b3d29786f92c79eeb47cfd->enter($__internal_260be40a64effa90b20e0a3ece9b98c4c1af822654b3d29786f92c79eeb47cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_260be40a64effa90b20e0a3ece9b98c4c1af822654b3d29786f92c79eeb47cfd->leave($__internal_260be40a64effa90b20e0a3ece9b98c4c1af822654b3d29786f92c79eeb47cfd_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3b3a75bb6786c45f888aa23cf72817b4ec2c270d05162f3236051980c8db976 = $this->env->getExtension("native_profiler");
        $__internal_a3b3a75bb6786c45f888aa23cf72817b4ec2c270d05162f3236051980c8db976->enter($__internal_a3b3a75bb6786c45f888aa23cf72817b4ec2c270d05162f3236051980c8db976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a3b3a75bb6786c45f888aa23cf72817b4ec2c270d05162f3236051980c8db976->leave($__internal_a3b3a75bb6786c45f888aa23cf72817b4ec2c270d05162f3236051980c8db976_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_1526bb84fb9ba926a926d2ffe7dc24123ebe952e38f51fa15d099ea43fa02943 = $this->env->getExtension("native_profiler");
        $__internal_1526bb84fb9ba926a926d2ffe7dc24123ebe952e38f51fa15d099ea43fa02943->enter($__internal_1526bb84fb9ba926a926d2ffe7dc24123ebe952e38f51fa15d099ea43fa02943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_1526bb84fb9ba926a926d2ffe7dc24123ebe952e38f51fa15d099ea43fa02943->leave($__internal_1526bb84fb9ba926a926d2ffe7dc24123ebe952e38f51fa15d099ea43fa02943_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f53419763440673fd415bb1bc66ba59663e528aa1c9a1697db2ea81235a7d16f = $this->env->getExtension("native_profiler");
        $__internal_f53419763440673fd415bb1bc66ba59663e528aa1c9a1697db2ea81235a7d16f->enter($__internal_f53419763440673fd415bb1bc66ba59663e528aa1c9a1697db2ea81235a7d16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f53419763440673fd415bb1bc66ba59663e528aa1c9a1697db2ea81235a7d16f->leave($__internal_f53419763440673fd415bb1bc66ba59663e528aa1c9a1697db2ea81235a7d16f_prof);

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
