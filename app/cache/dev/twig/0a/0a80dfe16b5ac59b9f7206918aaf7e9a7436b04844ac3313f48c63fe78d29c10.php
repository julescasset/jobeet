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
        $__internal_1e404800f51feb3fc98d09974404497a9919f9cd37bb15f886f93d34c5101773 = $this->env->getExtension("native_profiler");
        $__internal_1e404800f51feb3fc98d09974404497a9919f9cd37bb15f886f93d34c5101773->enter($__internal_1e404800f51feb3fc98d09974404497a9919f9cd37bb15f886f93d34c5101773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e404800f51feb3fc98d09974404497a9919f9cd37bb15f886f93d34c5101773->leave($__internal_1e404800f51feb3fc98d09974404497a9919f9cd37bb15f886f93d34c5101773_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4a50a462572f05fede290a0bdd9f9890765c995e9b49a0c64ed2c76c64bd041b = $this->env->getExtension("native_profiler");
        $__internal_4a50a462572f05fede290a0bdd9f9890765c995e9b49a0c64ed2c76c64bd041b->enter($__internal_4a50a462572f05fede290a0bdd9f9890765c995e9b49a0c64ed2c76c64bd041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4a50a462572f05fede290a0bdd9f9890765c995e9b49a0c64ed2c76c64bd041b->leave($__internal_4a50a462572f05fede290a0bdd9f9890765c995e9b49a0c64ed2c76c64bd041b_prof);

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
