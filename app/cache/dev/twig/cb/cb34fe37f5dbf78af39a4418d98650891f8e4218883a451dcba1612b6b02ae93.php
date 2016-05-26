<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_c1f0c88dc27ba4c8b2faa42c4817e00286c14028572cb2fcad61d88b26dd6fdb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08160c2dde89c5ef5ae6b4e7c6d3c49249431fffdddf8849b7eb0cb8b4612f11 = $this->env->getExtension("native_profiler");
        $__internal_08160c2dde89c5ef5ae6b4e7c6d3c49249431fffdddf8849b7eb0cb8b4612f11->enter($__internal_08160c2dde89c5ef5ae6b4e7c6d3c49249431fffdddf8849b7eb0cb8b4612f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08160c2dde89c5ef5ae6b4e7c6d3c49249431fffdddf8849b7eb0cb8b4612f11->leave($__internal_08160c2dde89c5ef5ae6b4e7c6d3c49249431fffdddf8849b7eb0cb8b4612f11_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3894fc438735c070963e7cf6860b845f3c4053252e0ae07ee1d2741778727835 = $this->env->getExtension("native_profiler");
        $__internal_3894fc438735c070963e7cf6860b845f3c4053252e0ae07ee1d2741778727835->enter($__internal_3894fc438735c070963e7cf6860b845f3c4053252e0ae07ee1d2741778727835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3894fc438735c070963e7cf6860b845f3c4053252e0ae07ee1d2741778727835->leave($__internal_3894fc438735c070963e7cf6860b845f3c4053252e0ae07ee1d2741778727835_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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
