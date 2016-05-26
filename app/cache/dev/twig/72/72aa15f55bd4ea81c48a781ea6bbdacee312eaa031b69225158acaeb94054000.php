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
        $__internal_72c8e3df6d2f399b94f4acabfb0e7ffd8b7a3e40a41ca1f3582b896f5cc909bb = $this->env->getExtension("native_profiler");
        $__internal_72c8e3df6d2f399b94f4acabfb0e7ffd8b7a3e40a41ca1f3582b896f5cc909bb->enter($__internal_72c8e3df6d2f399b94f4acabfb0e7ffd8b7a3e40a41ca1f3582b896f5cc909bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c8e3df6d2f399b94f4acabfb0e7ffd8b7a3e40a41ca1f3582b896f5cc909bb->leave($__internal_72c8e3df6d2f399b94f4acabfb0e7ffd8b7a3e40a41ca1f3582b896f5cc909bb_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_893eddec5bba112feb4b21ac0e319c07c9fc643875ea65a2ef82a8f60c52adc4 = $this->env->getExtension("native_profiler");
        $__internal_893eddec5bba112feb4b21ac0e319c07c9fc643875ea65a2ef82a8f60c52adc4->enter($__internal_893eddec5bba112feb4b21ac0e319c07c9fc643875ea65a2ef82a8f60c52adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_893eddec5bba112feb4b21ac0e319c07c9fc643875ea65a2ef82a8f60c52adc4->leave($__internal_893eddec5bba112feb4b21ac0e319c07c9fc643875ea65a2ef82a8f60c52adc4_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_335dd8f328b600f0e61598cd4055d8ac949fee2c904896831c4d47b6f3cb597d = $this->env->getExtension("native_profiler");
        $__internal_335dd8f328b600f0e61598cd4055d8ac949fee2c904896831c4d47b6f3cb597d->enter($__internal_335dd8f328b600f0e61598cd4055d8ac949fee2c904896831c4d47b6f3cb597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_335dd8f328b600f0e61598cd4055d8ac949fee2c904896831c4d47b6f3cb597d->leave($__internal_335dd8f328b600f0e61598cd4055d8ac949fee2c904896831c4d47b6f3cb597d_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_41dc2f7f71e3e1be5443407fc258ad23b58dda5509e7164dbf381f0fbaeeecf4 = $this->env->getExtension("native_profiler");
        $__internal_41dc2f7f71e3e1be5443407fc258ad23b58dda5509e7164dbf381f0fbaeeecf4->enter($__internal_41dc2f7f71e3e1be5443407fc258ad23b58dda5509e7164dbf381f0fbaeeecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_41dc2f7f71e3e1be5443407fc258ad23b58dda5509e7164dbf381f0fbaeeecf4->leave($__internal_41dc2f7f71e3e1be5443407fc258ad23b58dda5509e7164dbf381f0fbaeeecf4_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_0515f924a4d9e97df3cb4fdfa2fb3412bf3533ff6ca87a1aa6b8db23bb22e360 = $this->env->getExtension("native_profiler");
        $__internal_0515f924a4d9e97df3cb4fdfa2fb3412bf3533ff6ca87a1aa6b8db23bb22e360->enter($__internal_0515f924a4d9e97df3cb4fdfa2fb3412bf3533ff6ca87a1aa6b8db23bb22e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_0515f924a4d9e97df3cb4fdfa2fb3412bf3533ff6ca87a1aa6b8db23bb22e360->leave($__internal_0515f924a4d9e97df3cb4fdfa2fb3412bf3533ff6ca87a1aa6b8db23bb22e360_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9fe54f0130ac943f97644bcf2568f63be7ebeae2fdfb0d4ddd53f48d41fa65b = $this->env->getExtension("native_profiler");
        $__internal_e9fe54f0130ac943f97644bcf2568f63be7ebeae2fdfb0d4ddd53f48d41fa65b->enter($__internal_e9fe54f0130ac943f97644bcf2568f63be7ebeae2fdfb0d4ddd53f48d41fa65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e9fe54f0130ac943f97644bcf2568f63be7ebeae2fdfb0d4ddd53f48d41fa65b->leave($__internal_e9fe54f0130ac943f97644bcf2568f63be7ebeae2fdfb0d4ddd53f48d41fa65b_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ab0527f9db8c25728c8482d94aac2b199b0c44a2e9e49d93af183dd4ba85aeaa = $this->env->getExtension("native_profiler");
        $__internal_ab0527f9db8c25728c8482d94aac2b199b0c44a2e9e49d93af183dd4ba85aeaa->enter($__internal_ab0527f9db8c25728c8482d94aac2b199b0c44a2e9e49d93af183dd4ba85aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_ab0527f9db8c25728c8482d94aac2b199b0c44a2e9e49d93af183dd4ba85aeaa->leave($__internal_ab0527f9db8c25728c8482d94aac2b199b0c44a2e9e49d93af183dd4ba85aeaa_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_cbafbe89ba0e774e4f081de7be38cf1a9221b812caf0e544a776566c2ec1e157 = $this->env->getExtension("native_profiler");
        $__internal_cbafbe89ba0e774e4f081de7be38cf1a9221b812caf0e544a776566c2ec1e157->enter($__internal_cbafbe89ba0e774e4f081de7be38cf1a9221b812caf0e544a776566c2ec1e157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_cbafbe89ba0e774e4f081de7be38cf1a9221b812caf0e544a776566c2ec1e157->leave($__internal_cbafbe89ba0e774e4f081de7be38cf1a9221b812caf0e544a776566c2ec1e157_prof);

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
