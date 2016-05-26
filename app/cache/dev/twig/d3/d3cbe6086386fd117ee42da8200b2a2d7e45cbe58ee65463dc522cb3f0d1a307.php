<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_51a631656a074027d8fdea3be931f34d0ee64eea7b184832ccda56d400a04d2c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d83cf463cf8adf0ddfe575b2dda4e996450897bfcabeb75ed0f7343753f54d4c = $this->env->getExtension("native_profiler");
        $__internal_d83cf463cf8adf0ddfe575b2dda4e996450897bfcabeb75ed0f7343753f54d4c->enter($__internal_d83cf463cf8adf0ddfe575b2dda4e996450897bfcabeb75ed0f7343753f54d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83cf463cf8adf0ddfe575b2dda4e996450897bfcabeb75ed0f7343753f54d4c->leave($__internal_d83cf463cf8adf0ddfe575b2dda4e996450897bfcabeb75ed0f7343753f54d4c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f10acf670b1da2e85be8ea4a3dbf4a9539c0caae84800dfac2959e2da9b3d0a = $this->env->getExtension("native_profiler");
        $__internal_2f10acf670b1da2e85be8ea4a3dbf4a9539c0caae84800dfac2959e2da9b3d0a->enter($__internal_2f10acf670b1da2e85be8ea4a3dbf4a9539c0caae84800dfac2959e2da9b3d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2f10acf670b1da2e85be8ea4a3dbf4a9539c0caae84800dfac2959e2da9b3d0a->leave($__internal_2f10acf670b1da2e85be8ea4a3dbf4a9539c0caae84800dfac2959e2da9b3d0a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
