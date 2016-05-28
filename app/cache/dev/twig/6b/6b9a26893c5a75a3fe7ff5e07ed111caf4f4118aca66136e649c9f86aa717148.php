<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_f12a9778b55d3d329783fb2997f55d3902d359a849ccfc7b3ccb817989182597 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3085ca5703c95c11f76e7c732ce2c1001d77f810b656ab014b6b0ca0645e73a = $this->env->getExtension("native_profiler");
        $__internal_b3085ca5703c95c11f76e7c732ce2c1001d77f810b656ab014b6b0ca0645e73a->enter($__internal_b3085ca5703c95c11f76e7c732ce2c1001d77f810b656ab014b6b0ca0645e73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3085ca5703c95c11f76e7c732ce2c1001d77f810b656ab014b6b0ca0645e73a->leave($__internal_b3085ca5703c95c11f76e7c732ce2c1001d77f810b656ab014b6b0ca0645e73a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f5e3ae3bb2af81a9ae6245b81c6fbed13d501419730c8dde0eee14968e75f497 = $this->env->getExtension("native_profiler");
        $__internal_f5e3ae3bb2af81a9ae6245b81c6fbed13d501419730c8dde0eee14968e75f497->enter($__internal_f5e3ae3bb2af81a9ae6245b81c6fbed13d501419730c8dde0eee14968e75f497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f5e3ae3bb2af81a9ae6245b81c6fbed13d501419730c8dde0eee14968e75f497->leave($__internal_f5e3ae3bb2af81a9ae6245b81c6fbed13d501419730c8dde0eee14968e75f497_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
