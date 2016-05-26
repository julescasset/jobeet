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
        $__internal_5c1bc12b45d192334ef1b1a0243d158c5d1ce512537bf131ffb2c0d235c524e2 = $this->env->getExtension("native_profiler");
        $__internal_5c1bc12b45d192334ef1b1a0243d158c5d1ce512537bf131ffb2c0d235c524e2->enter($__internal_5c1bc12b45d192334ef1b1a0243d158c5d1ce512537bf131ffb2c0d235c524e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1bc12b45d192334ef1b1a0243d158c5d1ce512537bf131ffb2c0d235c524e2->leave($__internal_5c1bc12b45d192334ef1b1a0243d158c5d1ce512537bf131ffb2c0d235c524e2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c7a101f0b4abe1a67f73daec5012a3368246beb201971aed359f941ca57cbc60 = $this->env->getExtension("native_profiler");
        $__internal_c7a101f0b4abe1a67f73daec5012a3368246beb201971aed359f941ca57cbc60->enter($__internal_c7a101f0b4abe1a67f73daec5012a3368246beb201971aed359f941ca57cbc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c7a101f0b4abe1a67f73daec5012a3368246beb201971aed359f941ca57cbc60->leave($__internal_c7a101f0b4abe1a67f73daec5012a3368246beb201971aed359f941ca57cbc60_prof);

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
