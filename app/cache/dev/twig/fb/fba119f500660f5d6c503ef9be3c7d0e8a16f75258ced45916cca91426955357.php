<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_ef480c088868aa0ca3d669d65bb82dc9f889bf680c19ff11f5534ffddf3a591c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac2c624a23fd2513fe896d5c12735f360233810339008006982b009472a263f8 = $this->env->getExtension("native_profiler");
        $__internal_ac2c624a23fd2513fe896d5c12735f360233810339008006982b009472a263f8->enter($__internal_ac2c624a23fd2513fe896d5c12735f360233810339008006982b009472a263f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac2c624a23fd2513fe896d5c12735f360233810339008006982b009472a263f8->leave($__internal_ac2c624a23fd2513fe896d5c12735f360233810339008006982b009472a263f8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_732400c5fa84c8f5f7727ac014195f1132cebf5c103d6ff28f65dcdfe95c3add = $this->env->getExtension("native_profiler");
        $__internal_732400c5fa84c8f5f7727ac014195f1132cebf5c103d6ff28f65dcdfe95c3add->enter($__internal_732400c5fa84c8f5f7727ac014195f1132cebf5c103d6ff28f65dcdfe95c3add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_732400c5fa84c8f5f7727ac014195f1132cebf5c103d6ff28f65dcdfe95c3add->leave($__internal_732400c5fa84c8f5f7727ac014195f1132cebf5c103d6ff28f65dcdfe95c3add_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
