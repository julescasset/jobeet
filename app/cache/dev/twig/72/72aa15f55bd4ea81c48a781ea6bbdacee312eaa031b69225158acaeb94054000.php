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
        $__internal_c8824598f32122b7d3480e88ba580b633c235a49a20a8fd878e41f3955f6c731 = $this->env->getExtension("native_profiler");
        $__internal_c8824598f32122b7d3480e88ba580b633c235a49a20a8fd878e41f3955f6c731->enter($__internal_c8824598f32122b7d3480e88ba580b633c235a49a20a8fd878e41f3955f6c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8824598f32122b7d3480e88ba580b633c235a49a20a8fd878e41f3955f6c731->leave($__internal_c8824598f32122b7d3480e88ba580b633c235a49a20a8fd878e41f3955f6c731_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_8b2242c0eae27e1e6c04c1e31d4e6993bb28d7d1521599636e9e49080b5ef878 = $this->env->getExtension("native_profiler");
        $__internal_8b2242c0eae27e1e6c04c1e31d4e6993bb28d7d1521599636e9e49080b5ef878->enter($__internal_8b2242c0eae27e1e6c04c1e31d4e6993bb28d7d1521599636e9e49080b5ef878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_8b2242c0eae27e1e6c04c1e31d4e6993bb28d7d1521599636e9e49080b5ef878->leave($__internal_8b2242c0eae27e1e6c04c1e31d4e6993bb28d7d1521599636e9e49080b5ef878_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4f996c3553bce88e8b9b1c7e97c8e7a45923fd6c391dbcd33a725e0e9199d0cf = $this->env->getExtension("native_profiler");
        $__internal_4f996c3553bce88e8b9b1c7e97c8e7a45923fd6c391dbcd33a725e0e9199d0cf->enter($__internal_4f996c3553bce88e8b9b1c7e97c8e7a45923fd6c391dbcd33a725e0e9199d0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4f996c3553bce88e8b9b1c7e97c8e7a45923fd6c391dbcd33a725e0e9199d0cf->leave($__internal_4f996c3553bce88e8b9b1c7e97c8e7a45923fd6c391dbcd33a725e0e9199d0cf_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_4d78bf67fda859f5f79fd8206a4aff64ae462e12ce2cfa671ebdab7a0b9a4b3c = $this->env->getExtension("native_profiler");
        $__internal_4d78bf67fda859f5f79fd8206a4aff64ae462e12ce2cfa671ebdab7a0b9a4b3c->enter($__internal_4d78bf67fda859f5f79fd8206a4aff64ae462e12ce2cfa671ebdab7a0b9a4b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_4d78bf67fda859f5f79fd8206a4aff64ae462e12ce2cfa671ebdab7a0b9a4b3c->leave($__internal_4d78bf67fda859f5f79fd8206a4aff64ae462e12ce2cfa671ebdab7a0b9a4b3c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_1de7dd27479b35acc70e3204727845e51101af1287db6dbd7625c843bc347ea1 = $this->env->getExtension("native_profiler");
        $__internal_1de7dd27479b35acc70e3204727845e51101af1287db6dbd7625c843bc347ea1->enter($__internal_1de7dd27479b35acc70e3204727845e51101af1287db6dbd7625c843bc347ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_1de7dd27479b35acc70e3204727845e51101af1287db6dbd7625c843bc347ea1->leave($__internal_1de7dd27479b35acc70e3204727845e51101af1287db6dbd7625c843bc347ea1_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01f5685c7e0cb27f57da56f7515429644aa9a02efdf0d782e544cd944577acec = $this->env->getExtension("native_profiler");
        $__internal_01f5685c7e0cb27f57da56f7515429644aa9a02efdf0d782e544cd944577acec->enter($__internal_01f5685c7e0cb27f57da56f7515429644aa9a02efdf0d782e544cd944577acec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_01f5685c7e0cb27f57da56f7515429644aa9a02efdf0d782e544cd944577acec->leave($__internal_01f5685c7e0cb27f57da56f7515429644aa9a02efdf0d782e544cd944577acec_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_923dce393795a72900b4e0b111d454ce2c9f2a72ad7e08643e12026229be7cfc = $this->env->getExtension("native_profiler");
        $__internal_923dce393795a72900b4e0b111d454ce2c9f2a72ad7e08643e12026229be7cfc->enter($__internal_923dce393795a72900b4e0b111d454ce2c9f2a72ad7e08643e12026229be7cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_923dce393795a72900b4e0b111d454ce2c9f2a72ad7e08643e12026229be7cfc->leave($__internal_923dce393795a72900b4e0b111d454ce2c9f2a72ad7e08643e12026229be7cfc_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_1aeb2a6b5c063c42381c892cfcd150e7c21f31c8854f3de00cfd4dd733aa4ede = $this->env->getExtension("native_profiler");
        $__internal_1aeb2a6b5c063c42381c892cfcd150e7c21f31c8854f3de00cfd4dd733aa4ede->enter($__internal_1aeb2a6b5c063c42381c892cfcd150e7c21f31c8854f3de00cfd4dd733aa4ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_1aeb2a6b5c063c42381c892cfcd150e7c21f31c8854f3de00cfd4dd733aa4ede->leave($__internal_1aeb2a6b5c063c42381c892cfcd150e7c21f31c8854f3de00cfd4dd733aa4ede_prof);

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
