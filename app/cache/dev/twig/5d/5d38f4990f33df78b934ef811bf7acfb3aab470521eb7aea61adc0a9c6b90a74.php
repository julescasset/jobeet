<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_aed7a941484854fd17f1ba6224fd677b0afee9f1ff0333c345f0d812db850a7a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f17bd36421fbd226bd9712c2f21db2f18102065b2ac6d4875650fb488e7c48a = $this->env->getExtension("native_profiler");
        $__internal_0f17bd36421fbd226bd9712c2f21db2f18102065b2ac6d4875650fb488e7c48a->enter($__internal_0f17bd36421fbd226bd9712c2f21db2f18102065b2ac6d4875650fb488e7c48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f17bd36421fbd226bd9712c2f21db2f18102065b2ac6d4875650fb488e7c48a->leave($__internal_0f17bd36421fbd226bd9712c2f21db2f18102065b2ac6d4875650fb488e7c48a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1f35d3114bbf0cf82efddd804fa425f45c918f78fd33edbfecec6dbc22886fb4 = $this->env->getExtension("native_profiler");
        $__internal_1f35d3114bbf0cf82efddd804fa425f45c918f78fd33edbfecec6dbc22886fb4->enter($__internal_1f35d3114bbf0cf82efddd804fa425f45c918f78fd33edbfecec6dbc22886fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1f35d3114bbf0cf82efddd804fa425f45c918f78fd33edbfecec6dbc22886fb4->leave($__internal_1f35d3114bbf0cf82efddd804fa425f45c918f78fd33edbfecec6dbc22886fb4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
