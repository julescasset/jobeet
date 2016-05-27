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
        $__internal_48d1b4315c8b5d3d76d43459c2d5cbe92a524623e66812e3a1849cd7f3c2d350 = $this->env->getExtension("native_profiler");
        $__internal_48d1b4315c8b5d3d76d43459c2d5cbe92a524623e66812e3a1849cd7f3c2d350->enter($__internal_48d1b4315c8b5d3d76d43459c2d5cbe92a524623e66812e3a1849cd7f3c2d350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d1b4315c8b5d3d76d43459c2d5cbe92a524623e66812e3a1849cd7f3c2d350->leave($__internal_48d1b4315c8b5d3d76d43459c2d5cbe92a524623e66812e3a1849cd7f3c2d350_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a01ee5e59c1604292c7f198e7a6c102e00428a65af36003947289c1d67a94adf = $this->env->getExtension("native_profiler");
        $__internal_a01ee5e59c1604292c7f198e7a6c102e00428a65af36003947289c1d67a94adf->enter($__internal_a01ee5e59c1604292c7f198e7a6c102e00428a65af36003947289c1d67a94adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_a01ee5e59c1604292c7f198e7a6c102e00428a65af36003947289c1d67a94adf->leave($__internal_a01ee5e59c1604292c7f198e7a6c102e00428a65af36003947289c1d67a94adf_prof);

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
