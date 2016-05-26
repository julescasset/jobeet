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
        $__internal_46a0d4575888d6c1cbde40372ed16198f3a466fe802002fb1ba52687cac1d54a = $this->env->getExtension("native_profiler");
        $__internal_46a0d4575888d6c1cbde40372ed16198f3a466fe802002fb1ba52687cac1d54a->enter($__internal_46a0d4575888d6c1cbde40372ed16198f3a466fe802002fb1ba52687cac1d54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46a0d4575888d6c1cbde40372ed16198f3a466fe802002fb1ba52687cac1d54a->leave($__internal_46a0d4575888d6c1cbde40372ed16198f3a466fe802002fb1ba52687cac1d54a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_87136ae8b59790f3f8b73fb062eb65dc8c8214255e975710744db3dd3ce6a34f = $this->env->getExtension("native_profiler");
        $__internal_87136ae8b59790f3f8b73fb062eb65dc8c8214255e975710744db3dd3ce6a34f->enter($__internal_87136ae8b59790f3f8b73fb062eb65dc8c8214255e975710744db3dd3ce6a34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_87136ae8b59790f3f8b73fb062eb65dc8c8214255e975710744db3dd3ce6a34f->leave($__internal_87136ae8b59790f3f8b73fb062eb65dc8c8214255e975710744db3dd3ce6a34f_prof);

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
