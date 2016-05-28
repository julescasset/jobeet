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
        $__internal_a436a14438c15bef95be804b0c78499e2ad1bce50200c761f3cf2fe5d3b132d9 = $this->env->getExtension("native_profiler");
        $__internal_a436a14438c15bef95be804b0c78499e2ad1bce50200c761f3cf2fe5d3b132d9->enter($__internal_a436a14438c15bef95be804b0c78499e2ad1bce50200c761f3cf2fe5d3b132d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a436a14438c15bef95be804b0c78499e2ad1bce50200c761f3cf2fe5d3b132d9->leave($__internal_a436a14438c15bef95be804b0c78499e2ad1bce50200c761f3cf2fe5d3b132d9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_24e9d8f9f9c2e902701d2569d298a91b5e5c30d763c83257f2658a096db3dcbb = $this->env->getExtension("native_profiler");
        $__internal_24e9d8f9f9c2e902701d2569d298a91b5e5c30d763c83257f2658a096db3dcbb->enter($__internal_24e9d8f9f9c2e902701d2569d298a91b5e5c30d763c83257f2658a096db3dcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_24e9d8f9f9c2e902701d2569d298a91b5e5c30d763c83257f2658a096db3dcbb->leave($__internal_24e9d8f9f9c2e902701d2569d298a91b5e5c30d763c83257f2658a096db3dcbb_prof);

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
