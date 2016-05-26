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
        $__internal_2c76139d9b1abb47cef3fdc45910883a504ef88ea3998e75d3a7d86e7b5df06a = $this->env->getExtension("native_profiler");
        $__internal_2c76139d9b1abb47cef3fdc45910883a504ef88ea3998e75d3a7d86e7b5df06a->enter($__internal_2c76139d9b1abb47cef3fdc45910883a504ef88ea3998e75d3a7d86e7b5df06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c76139d9b1abb47cef3fdc45910883a504ef88ea3998e75d3a7d86e7b5df06a->leave($__internal_2c76139d9b1abb47cef3fdc45910883a504ef88ea3998e75d3a7d86e7b5df06a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_66b01676f71cca599aa6713a5f1ea3bc29499d647de715639e6b1100f2a2ed25 = $this->env->getExtension("native_profiler");
        $__internal_66b01676f71cca599aa6713a5f1ea3bc29499d647de715639e6b1100f2a2ed25->enter($__internal_66b01676f71cca599aa6713a5f1ea3bc29499d647de715639e6b1100f2a2ed25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_66b01676f71cca599aa6713a5f1ea3bc29499d647de715639e6b1100f2a2ed25->leave($__internal_66b01676f71cca599aa6713a5f1ea3bc29499d647de715639e6b1100f2a2ed25_prof);

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
