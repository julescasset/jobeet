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
        $__internal_cf3740c1ff3b19d38a6cfeed8a1ce48b2bd4ab8f4acb0e218be08e0cf137466d = $this->env->getExtension("native_profiler");
        $__internal_cf3740c1ff3b19d38a6cfeed8a1ce48b2bd4ab8f4acb0e218be08e0cf137466d->enter($__internal_cf3740c1ff3b19d38a6cfeed8a1ce48b2bd4ab8f4acb0e218be08e0cf137466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3740c1ff3b19d38a6cfeed8a1ce48b2bd4ab8f4acb0e218be08e0cf137466d->leave($__internal_cf3740c1ff3b19d38a6cfeed8a1ce48b2bd4ab8f4acb0e218be08e0cf137466d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_58fa03f71dcbfcc8503e4c4dcc6b673ea7e9627124214ab81e42d5a2c516b0e2 = $this->env->getExtension("native_profiler");
        $__internal_58fa03f71dcbfcc8503e4c4dcc6b673ea7e9627124214ab81e42d5a2c516b0e2->enter($__internal_58fa03f71dcbfcc8503e4c4dcc6b673ea7e9627124214ab81e42d5a2c516b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_58fa03f71dcbfcc8503e4c4dcc6b673ea7e9627124214ab81e42d5a2c516b0e2->leave($__internal_58fa03f71dcbfcc8503e4c4dcc6b673ea7e9627124214ab81e42d5a2c516b0e2_prof);

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
