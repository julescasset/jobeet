<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_3bd6cac13a50e527179008d81540c1e42e36ac96de427cfd7b2257767b065d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4b66084e5d9841374c5e69fdf13a432bbc02de326f955f9cbdec5442a4d0895 = $this->env->getExtension("native_profiler");
        $__internal_c4b66084e5d9841374c5e69fdf13a432bbc02de326f955f9cbdec5442a4d0895->enter($__internal_c4b66084e5d9841374c5e69fdf13a432bbc02de326f955f9cbdec5442a4d0895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b66084e5d9841374c5e69fdf13a432bbc02de326f955f9cbdec5442a4d0895->leave($__internal_c4b66084e5d9841374c5e69fdf13a432bbc02de326f955f9cbdec5442a4d0895_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c4528b154ded4fbe8654370c1487b645a925377afd96bee64622346d1b9bf0ba = $this->env->getExtension("native_profiler");
        $__internal_c4528b154ded4fbe8654370c1487b645a925377afd96bee64622346d1b9bf0ba->enter($__internal_c4528b154ded4fbe8654370c1487b645a925377afd96bee64622346d1b9bf0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_c4528b154ded4fbe8654370c1487b645a925377afd96bee64622346d1b9bf0ba->leave($__internal_c4528b154ded4fbe8654370c1487b645a925377afd96bee64622346d1b9bf0ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
