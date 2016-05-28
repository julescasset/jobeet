<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_60fd5c13930a8e793ea276910b75a95c31ed702122e202af1b49883e63d3b8b6 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4a014a0c0709406da50b04e23f3a43bcef7b82feae81c34b7882935009f7ffe = $this->env->getExtension("native_profiler");
        $__internal_e4a014a0c0709406da50b04e23f3a43bcef7b82feae81c34b7882935009f7ffe->enter($__internal_e4a014a0c0709406da50b04e23f3a43bcef7b82feae81c34b7882935009f7ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a014a0c0709406da50b04e23f3a43bcef7b82feae81c34b7882935009f7ffe->leave($__internal_e4a014a0c0709406da50b04e23f3a43bcef7b82feae81c34b7882935009f7ffe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ca07f13998dc1bd84275e93b170a7948dd76ca0b9ac493da3b4e6b8c75b1ac46 = $this->env->getExtension("native_profiler");
        $__internal_ca07f13998dc1bd84275e93b170a7948dd76ca0b9ac493da3b4e6b8c75b1ac46->enter($__internal_ca07f13998dc1bd84275e93b170a7948dd76ca0b9ac493da3b4e6b8c75b1ac46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ca07f13998dc1bd84275e93b170a7948dd76ca0b9ac493da3b4e6b8c75b1ac46->leave($__internal_ca07f13998dc1bd84275e93b170a7948dd76ca0b9ac493da3b4e6b8c75b1ac46_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
