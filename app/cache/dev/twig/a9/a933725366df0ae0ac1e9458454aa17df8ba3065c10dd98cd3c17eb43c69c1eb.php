<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_3f1b19743f93d8297ba23fccff91019e25b22eadc815b84e67e8a3fc54222570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_139ff2bebdf005055828ede96da161d6a9addc0071408556f853aa9e25df57d5 = $this->env->getExtension("native_profiler");
        $__internal_139ff2bebdf005055828ede96da161d6a9addc0071408556f853aa9e25df57d5->enter($__internal_139ff2bebdf005055828ede96da161d6a9addc0071408556f853aa9e25df57d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_139ff2bebdf005055828ede96da161d6a9addc0071408556f853aa9e25df57d5->leave($__internal_139ff2bebdf005055828ede96da161d6a9addc0071408556f853aa9e25df57d5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_74e832cc39c7af523be3a977b6d4b4a30e0a1bf10af0d5e3eea2af2a51791358 = $this->env->getExtension("native_profiler");
        $__internal_74e832cc39c7af523be3a977b6d4b4a30e0a1bf10af0d5e3eea2af2a51791358->enter($__internal_74e832cc39c7af523be3a977b6d4b4a30e0a1bf10af0d5e3eea2af2a51791358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_74e832cc39c7af523be3a977b6d4b4a30e0a1bf10af0d5e3eea2af2a51791358->leave($__internal_74e832cc39c7af523be3a977b6d4b4a30e0a1bf10af0d5e3eea2af2a51791358_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
