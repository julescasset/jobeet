<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_ec8c87506ed3993b9389c55a132defa1c7194513e71ef9c7abf3484f074576a9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71e6e918ed1b58fc06aedca24f0c137341a05345597dcb5c0482d8392a304e12 = $this->env->getExtension("native_profiler");
        $__internal_71e6e918ed1b58fc06aedca24f0c137341a05345597dcb5c0482d8392a304e12->enter($__internal_71e6e918ed1b58fc06aedca24f0c137341a05345597dcb5c0482d8392a304e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e6e918ed1b58fc06aedca24f0c137341a05345597dcb5c0482d8392a304e12->leave($__internal_71e6e918ed1b58fc06aedca24f0c137341a05345597dcb5c0482d8392a304e12_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0ac8fbae2e8515206b7722283051ed2fd3f8b07825a24c6615966bf81199eda7 = $this->env->getExtension("native_profiler");
        $__internal_0ac8fbae2e8515206b7722283051ed2fd3f8b07825a24c6615966bf81199eda7->enter($__internal_0ac8fbae2e8515206b7722283051ed2fd3f8b07825a24c6615966bf81199eda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0ac8fbae2e8515206b7722283051ed2fd3f8b07825a24c6615966bf81199eda7->leave($__internal_0ac8fbae2e8515206b7722283051ed2fd3f8b07825a24c6615966bf81199eda7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
