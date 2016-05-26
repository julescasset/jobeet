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
        $__internal_495b98389e76cc16f32e04a4033c9335ad6f4a072b49ccc9272a778f3b835558 = $this->env->getExtension("native_profiler");
        $__internal_495b98389e76cc16f32e04a4033c9335ad6f4a072b49ccc9272a778f3b835558->enter($__internal_495b98389e76cc16f32e04a4033c9335ad6f4a072b49ccc9272a778f3b835558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495b98389e76cc16f32e04a4033c9335ad6f4a072b49ccc9272a778f3b835558->leave($__internal_495b98389e76cc16f32e04a4033c9335ad6f4a072b49ccc9272a778f3b835558_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c9fb77aa7eaf1f721e0ba35e1c4876b5fccaca1fbd96df4d7edc9a562bf5b345 = $this->env->getExtension("native_profiler");
        $__internal_c9fb77aa7eaf1f721e0ba35e1c4876b5fccaca1fbd96df4d7edc9a562bf5b345->enter($__internal_c9fb77aa7eaf1f721e0ba35e1c4876b5fccaca1fbd96df4d7edc9a562bf5b345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c9fb77aa7eaf1f721e0ba35e1c4876b5fccaca1fbd96df4d7edc9a562bf5b345->leave($__internal_c9fb77aa7eaf1f721e0ba35e1c4876b5fccaca1fbd96df4d7edc9a562bf5b345_prof);

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
