<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_9d2fd03da7191a02a25a28c3a489c7d7126e87c0232bfa504b79699266da1bc8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_034e17026158999c7897084116e8e77e440d36bce8b5b72bbc548f967c9124ee = $this->env->getExtension("native_profiler");
        $__internal_034e17026158999c7897084116e8e77e440d36bce8b5b72bbc548f967c9124ee->enter($__internal_034e17026158999c7897084116e8e77e440d36bce8b5b72bbc548f967c9124ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034e17026158999c7897084116e8e77e440d36bce8b5b72bbc548f967c9124ee->leave($__internal_034e17026158999c7897084116e8e77e440d36bce8b5b72bbc548f967c9124ee_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8ec294b39139599959bf70cf7e35514f9f5ebd65eba78ace84b642f5b8ba105c = $this->env->getExtension("native_profiler");
        $__internal_8ec294b39139599959bf70cf7e35514f9f5ebd65eba78ace84b642f5b8ba105c->enter($__internal_8ec294b39139599959bf70cf7e35514f9f5ebd65eba78ace84b642f5b8ba105c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8ec294b39139599959bf70cf7e35514f9f5ebd65eba78ace84b642f5b8ba105c->leave($__internal_8ec294b39139599959bf70cf7e35514f9f5ebd65eba78ace84b642f5b8ba105c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
