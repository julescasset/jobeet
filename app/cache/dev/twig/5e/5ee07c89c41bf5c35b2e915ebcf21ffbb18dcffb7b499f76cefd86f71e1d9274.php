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
        $__internal_6bb41d75e9092b89f3b7dfb788b1d51ee04c46e13056e2756cf49fae0b856e6a = $this->env->getExtension("native_profiler");
        $__internal_6bb41d75e9092b89f3b7dfb788b1d51ee04c46e13056e2756cf49fae0b856e6a->enter($__internal_6bb41d75e9092b89f3b7dfb788b1d51ee04c46e13056e2756cf49fae0b856e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb41d75e9092b89f3b7dfb788b1d51ee04c46e13056e2756cf49fae0b856e6a->leave($__internal_6bb41d75e9092b89f3b7dfb788b1d51ee04c46e13056e2756cf49fae0b856e6a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2aecf36e6c0f27d21bd866e2757f50c067cc2bc1d46168e2cee0c7fcec5e5ba1 = $this->env->getExtension("native_profiler");
        $__internal_2aecf36e6c0f27d21bd866e2757f50c067cc2bc1d46168e2cee0c7fcec5e5ba1->enter($__internal_2aecf36e6c0f27d21bd866e2757f50c067cc2bc1d46168e2cee0c7fcec5e5ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2aecf36e6c0f27d21bd866e2757f50c067cc2bc1d46168e2cee0c7fcec5e5ba1->leave($__internal_2aecf36e6c0f27d21bd866e2757f50c067cc2bc1d46168e2cee0c7fcec5e5ba1_prof);

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
