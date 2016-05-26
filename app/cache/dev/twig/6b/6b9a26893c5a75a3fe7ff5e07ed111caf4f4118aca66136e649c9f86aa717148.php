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
        $__internal_10ebec426190d518262a99da71c8ed4b834f7951e65cf3a54c56d058fa9885f7 = $this->env->getExtension("native_profiler");
        $__internal_10ebec426190d518262a99da71c8ed4b834f7951e65cf3a54c56d058fa9885f7->enter($__internal_10ebec426190d518262a99da71c8ed4b834f7951e65cf3a54c56d058fa9885f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ebec426190d518262a99da71c8ed4b834f7951e65cf3a54c56d058fa9885f7->leave($__internal_10ebec426190d518262a99da71c8ed4b834f7951e65cf3a54c56d058fa9885f7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_24161b8eb1e5ab4b7132fdbf1d806beea5d780935832d17efe22b9832592400d = $this->env->getExtension("native_profiler");
        $__internal_24161b8eb1e5ab4b7132fdbf1d806beea5d780935832d17efe22b9832592400d->enter($__internal_24161b8eb1e5ab4b7132fdbf1d806beea5d780935832d17efe22b9832592400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_24161b8eb1e5ab4b7132fdbf1d806beea5d780935832d17efe22b9832592400d->leave($__internal_24161b8eb1e5ab4b7132fdbf1d806beea5d780935832d17efe22b9832592400d_prof);

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
