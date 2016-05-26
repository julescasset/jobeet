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
        $__internal_3d245161af510a11791ae8f7dd0b5acf5df3877adac15652694fdbd775c50aca = $this->env->getExtension("native_profiler");
        $__internal_3d245161af510a11791ae8f7dd0b5acf5df3877adac15652694fdbd775c50aca->enter($__internal_3d245161af510a11791ae8f7dd0b5acf5df3877adac15652694fdbd775c50aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d245161af510a11791ae8f7dd0b5acf5df3877adac15652694fdbd775c50aca->leave($__internal_3d245161af510a11791ae8f7dd0b5acf5df3877adac15652694fdbd775c50aca_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4ea9f08692f8fe6bb69f539bec4480cbe2b1b36709995c7055f0e1bdabb278de = $this->env->getExtension("native_profiler");
        $__internal_4ea9f08692f8fe6bb69f539bec4480cbe2b1b36709995c7055f0e1bdabb278de->enter($__internal_4ea9f08692f8fe6bb69f539bec4480cbe2b1b36709995c7055f0e1bdabb278de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4ea9f08692f8fe6bb69f539bec4480cbe2b1b36709995c7055f0e1bdabb278de->leave($__internal_4ea9f08692f8fe6bb69f539bec4480cbe2b1b36709995c7055f0e1bdabb278de_prof);

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
