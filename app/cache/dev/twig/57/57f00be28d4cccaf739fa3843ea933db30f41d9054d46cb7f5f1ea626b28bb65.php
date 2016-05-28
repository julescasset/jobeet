<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_64ddee258b5ee3b763d00664f34fd10cce1f6eb43b195b9cc2ad2a211cd04376 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffa0147e09536008cda5cdd69cb1f08f9a3db8fe8918bacd32fd8079612ce5cf = $this->env->getExtension("native_profiler");
        $__internal_ffa0147e09536008cda5cdd69cb1f08f9a3db8fe8918bacd32fd8079612ce5cf->enter($__internal_ffa0147e09536008cda5cdd69cb1f08f9a3db8fe8918bacd32fd8079612ce5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa0147e09536008cda5cdd69cb1f08f9a3db8fe8918bacd32fd8079612ce5cf->leave($__internal_ffa0147e09536008cda5cdd69cb1f08f9a3db8fe8918bacd32fd8079612ce5cf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_02e0602546d62f2e43c1b6e2d7e0da24b68705c6e1a37c0fdc1d49a82e54cd1a = $this->env->getExtension("native_profiler");
        $__internal_02e0602546d62f2e43c1b6e2d7e0da24b68705c6e1a37c0fdc1d49a82e54cd1a->enter($__internal_02e0602546d62f2e43c1b6e2d7e0da24b68705c6e1a37c0fdc1d49a82e54cd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_02e0602546d62f2e43c1b6e2d7e0da24b68705c6e1a37c0fdc1d49a82e54cd1a->leave($__internal_02e0602546d62f2e43c1b6e2d7e0da24b68705c6e1a37c0fdc1d49a82e54cd1a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
