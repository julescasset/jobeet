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
        $__internal_d21cc39c834768dd120aac27556962a834682918637f79a8f0c19a29c9864567 = $this->env->getExtension("native_profiler");
        $__internal_d21cc39c834768dd120aac27556962a834682918637f79a8f0c19a29c9864567->enter($__internal_d21cc39c834768dd120aac27556962a834682918637f79a8f0c19a29c9864567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21cc39c834768dd120aac27556962a834682918637f79a8f0c19a29c9864567->leave($__internal_d21cc39c834768dd120aac27556962a834682918637f79a8f0c19a29c9864567_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_9093d1c3ddbd4a40f7e02efec5f18b2a9ae56cd414e9e3395f460ba3e8eb7d0c = $this->env->getExtension("native_profiler");
        $__internal_9093d1c3ddbd4a40f7e02efec5f18b2a9ae56cd414e9e3395f460ba3e8eb7d0c->enter($__internal_9093d1c3ddbd4a40f7e02efec5f18b2a9ae56cd414e9e3395f460ba3e8eb7d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_9093d1c3ddbd4a40f7e02efec5f18b2a9ae56cd414e9e3395f460ba3e8eb7d0c->leave($__internal_9093d1c3ddbd4a40f7e02efec5f18b2a9ae56cd414e9e3395f460ba3e8eb7d0c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6329b272916eee25ad070763684fe084b4fc1173300d86eb52c9e2ffdf29c002 = $this->env->getExtension("native_profiler");
        $__internal_6329b272916eee25ad070763684fe084b4fc1173300d86eb52c9e2ffdf29c002->enter($__internal_6329b272916eee25ad070763684fe084b4fc1173300d86eb52c9e2ffdf29c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6329b272916eee25ad070763684fe084b4fc1173300d86eb52c9e2ffdf29c002->leave($__internal_6329b272916eee25ad070763684fe084b4fc1173300d86eb52c9e2ffdf29c002_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_706276fc81a4ffaa1e2ef5e07719aa4d83abb40d634eab83e64071a3be61ce74 = $this->env->getExtension("native_profiler");
        $__internal_706276fc81a4ffaa1e2ef5e07719aa4d83abb40d634eab83e64071a3be61ce74->enter($__internal_706276fc81a4ffaa1e2ef5e07719aa4d83abb40d634eab83e64071a3be61ce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_706276fc81a4ffaa1e2ef5e07719aa4d83abb40d634eab83e64071a3be61ce74->leave($__internal_706276fc81a4ffaa1e2ef5e07719aa4d83abb40d634eab83e64071a3be61ce74_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_e8a96493f914644e41449e7232b59a4ff9d8483330f6d5a54bc0ba03c409110d = $this->env->getExtension("native_profiler");
        $__internal_e8a96493f914644e41449e7232b59a4ff9d8483330f6d5a54bc0ba03c409110d->enter($__internal_e8a96493f914644e41449e7232b59a4ff9d8483330f6d5a54bc0ba03c409110d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_e8a96493f914644e41449e7232b59a4ff9d8483330f6d5a54bc0ba03c409110d->leave($__internal_e8a96493f914644e41449e7232b59a4ff9d8483330f6d5a54bc0ba03c409110d_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6b7d6c7510ffcc6b1f1dafcc7d689a2dee7e94c7b0a86d16e15b9aab24dfec0 = $this->env->getExtension("native_profiler");
        $__internal_d6b7d6c7510ffcc6b1f1dafcc7d689a2dee7e94c7b0a86d16e15b9aab24dfec0->enter($__internal_d6b7d6c7510ffcc6b1f1dafcc7d689a2dee7e94c7b0a86d16e15b9aab24dfec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d6b7d6c7510ffcc6b1f1dafcc7d689a2dee7e94c7b0a86d16e15b9aab24dfec0->leave($__internal_d6b7d6c7510ffcc6b1f1dafcc7d689a2dee7e94c7b0a86d16e15b9aab24dfec0_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_4f901cd48d216581be96d8727b047313f2772938491cb302b5dc6dada73ed912 = $this->env->getExtension("native_profiler");
        $__internal_4f901cd48d216581be96d8727b047313f2772938491cb302b5dc6dada73ed912->enter($__internal_4f901cd48d216581be96d8727b047313f2772938491cb302b5dc6dada73ed912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_4f901cd48d216581be96d8727b047313f2772938491cb302b5dc6dada73ed912->leave($__internal_4f901cd48d216581be96d8727b047313f2772938491cb302b5dc6dada73ed912_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_2ba2a319b9a104254eda428e89ad698641a2f587f39181dccac80729ecda1ba2 = $this->env->getExtension("native_profiler");
        $__internal_2ba2a319b9a104254eda428e89ad698641a2f587f39181dccac80729ecda1ba2->enter($__internal_2ba2a319b9a104254eda428e89ad698641a2f587f39181dccac80729ecda1ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_2ba2a319b9a104254eda428e89ad698641a2f587f39181dccac80729ecda1ba2->leave($__internal_2ba2a319b9a104254eda428e89ad698641a2f587f39181dccac80729ecda1ba2_prof);

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
