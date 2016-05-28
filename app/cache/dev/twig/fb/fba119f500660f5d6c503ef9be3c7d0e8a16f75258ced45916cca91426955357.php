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
        $__internal_ea6579db99bcefda42e98cb366c8ac1c76a5418e593400b2485f9ef1b0ea74a2 = $this->env->getExtension("native_profiler");
        $__internal_ea6579db99bcefda42e98cb366c8ac1c76a5418e593400b2485f9ef1b0ea74a2->enter($__internal_ea6579db99bcefda42e98cb366c8ac1c76a5418e593400b2485f9ef1b0ea74a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6579db99bcefda42e98cb366c8ac1c76a5418e593400b2485f9ef1b0ea74a2->leave($__internal_ea6579db99bcefda42e98cb366c8ac1c76a5418e593400b2485f9ef1b0ea74a2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4d7ab2739e21728b77d7cea9fb94aefb0c9a7459da00ee7f280b623ca560cde5 = $this->env->getExtension("native_profiler");
        $__internal_4d7ab2739e21728b77d7cea9fb94aefb0c9a7459da00ee7f280b623ca560cde5->enter($__internal_4d7ab2739e21728b77d7cea9fb94aefb0c9a7459da00ee7f280b623ca560cde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4d7ab2739e21728b77d7cea9fb94aefb0c9a7459da00ee7f280b623ca560cde5->leave($__internal_4d7ab2739e21728b77d7cea9fb94aefb0c9a7459da00ee7f280b623ca560cde5_prof);

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
