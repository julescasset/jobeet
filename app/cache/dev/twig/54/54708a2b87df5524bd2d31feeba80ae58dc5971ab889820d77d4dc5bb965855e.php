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
        $__internal_a64baa48edc3fce79be369ec96f7ddcaddc74c8a3c99213a61b1685fdca82eeb = $this->env->getExtension("native_profiler");
        $__internal_a64baa48edc3fce79be369ec96f7ddcaddc74c8a3c99213a61b1685fdca82eeb->enter($__internal_a64baa48edc3fce79be369ec96f7ddcaddc74c8a3c99213a61b1685fdca82eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a64baa48edc3fce79be369ec96f7ddcaddc74c8a3c99213a61b1685fdca82eeb->leave($__internal_a64baa48edc3fce79be369ec96f7ddcaddc74c8a3c99213a61b1685fdca82eeb_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_6696c166a7d234d472e8c8b9a10d663de61bfe7ad7c992ce91f232bd806c38b8 = $this->env->getExtension("native_profiler");
        $__internal_6696c166a7d234d472e8c8b9a10d663de61bfe7ad7c992ce91f232bd806c38b8->enter($__internal_6696c166a7d234d472e8c8b9a10d663de61bfe7ad7c992ce91f232bd806c38b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_6696c166a7d234d472e8c8b9a10d663de61bfe7ad7c992ce91f232bd806c38b8->leave($__internal_6696c166a7d234d472e8c8b9a10d663de61bfe7ad7c992ce91f232bd806c38b8_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_414da966e7aa6ab21a9083cfd0f9dbf98101e8c44bedafb26ccac3e77e8c7c1b = $this->env->getExtension("native_profiler");
        $__internal_414da966e7aa6ab21a9083cfd0f9dbf98101e8c44bedafb26ccac3e77e8c7c1b->enter($__internal_414da966e7aa6ab21a9083cfd0f9dbf98101e8c44bedafb26ccac3e77e8c7c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_414da966e7aa6ab21a9083cfd0f9dbf98101e8c44bedafb26ccac3e77e8c7c1b->leave($__internal_414da966e7aa6ab21a9083cfd0f9dbf98101e8c44bedafb26ccac3e77e8c7c1b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_bc7ecf4426f9eb0f92ff545bf400f744da2fe670f9de6cd270a7c7df47adf7c2 = $this->env->getExtension("native_profiler");
        $__internal_bc7ecf4426f9eb0f92ff545bf400f744da2fe670f9de6cd270a7c7df47adf7c2->enter($__internal_bc7ecf4426f9eb0f92ff545bf400f744da2fe670f9de6cd270a7c7df47adf7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_bc7ecf4426f9eb0f92ff545bf400f744da2fe670f9de6cd270a7c7df47adf7c2->leave($__internal_bc7ecf4426f9eb0f92ff545bf400f744da2fe670f9de6cd270a7c7df47adf7c2_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f61a322a6465e3a1f7b0f70a04360608b718940ddd553180ab27cdc0f2a89103 = $this->env->getExtension("native_profiler");
        $__internal_f61a322a6465e3a1f7b0f70a04360608b718940ddd553180ab27cdc0f2a89103->enter($__internal_f61a322a6465e3a1f7b0f70a04360608b718940ddd553180ab27cdc0f2a89103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_f61a322a6465e3a1f7b0f70a04360608b718940ddd553180ab27cdc0f2a89103->leave($__internal_f61a322a6465e3a1f7b0f70a04360608b718940ddd553180ab27cdc0f2a89103_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94221dc1e46cd965c56e7d20130ec853791a3b45b4c2a0b7eb769475e7fb6858 = $this->env->getExtension("native_profiler");
        $__internal_94221dc1e46cd965c56e7d20130ec853791a3b45b4c2a0b7eb769475e7fb6858->enter($__internal_94221dc1e46cd965c56e7d20130ec853791a3b45b4c2a0b7eb769475e7fb6858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_94221dc1e46cd965c56e7d20130ec853791a3b45b4c2a0b7eb769475e7fb6858->leave($__internal_94221dc1e46cd965c56e7d20130ec853791a3b45b4c2a0b7eb769475e7fb6858_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_492c3855fb891dec728fe58ffb5c2732b0bc59ece7e7a3bfa1ce04fce6a91194 = $this->env->getExtension("native_profiler");
        $__internal_492c3855fb891dec728fe58ffb5c2732b0bc59ece7e7a3bfa1ce04fce6a91194->enter($__internal_492c3855fb891dec728fe58ffb5c2732b0bc59ece7e7a3bfa1ce04fce6a91194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_492c3855fb891dec728fe58ffb5c2732b0bc59ece7e7a3bfa1ce04fce6a91194->leave($__internal_492c3855fb891dec728fe58ffb5c2732b0bc59ece7e7a3bfa1ce04fce6a91194_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_945aab9a1dc812cc3a9a2498396dda5cfe86a790c4d6e8928286b7111cfec1b5 = $this->env->getExtension("native_profiler");
        $__internal_945aab9a1dc812cc3a9a2498396dda5cfe86a790c4d6e8928286b7111cfec1b5->enter($__internal_945aab9a1dc812cc3a9a2498396dda5cfe86a790c4d6e8928286b7111cfec1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_945aab9a1dc812cc3a9a2498396dda5cfe86a790c4d6e8928286b7111cfec1b5->leave($__internal_945aab9a1dc812cc3a9a2498396dda5cfe86a790c4d6e8928286b7111cfec1b5_prof);

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
