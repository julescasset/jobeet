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
        $__internal_c7c6b7b1fb928b6a3f6fbbfed6c832f7ec7db7eb71b401f1b816d668b3116671 = $this->env->getExtension("native_profiler");
        $__internal_c7c6b7b1fb928b6a3f6fbbfed6c832f7ec7db7eb71b401f1b816d668b3116671->enter($__internal_c7c6b7b1fb928b6a3f6fbbfed6c832f7ec7db7eb71b401f1b816d668b3116671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c6b7b1fb928b6a3f6fbbfed6c832f7ec7db7eb71b401f1b816d668b3116671->leave($__internal_c7c6b7b1fb928b6a3f6fbbfed6c832f7ec7db7eb71b401f1b816d668b3116671_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ba26c1f5575fec9b06d777baf2e14c7b65bc5cc3a18d8af83546dd2bc6b7d9f6 = $this->env->getExtension("native_profiler");
        $__internal_ba26c1f5575fec9b06d777baf2e14c7b65bc5cc3a18d8af83546dd2bc6b7d9f6->enter($__internal_ba26c1f5575fec9b06d777baf2e14c7b65bc5cc3a18d8af83546dd2bc6b7d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ba26c1f5575fec9b06d777baf2e14c7b65bc5cc3a18d8af83546dd2bc6b7d9f6->leave($__internal_ba26c1f5575fec9b06d777baf2e14c7b65bc5cc3a18d8af83546dd2bc6b7d9f6_prof);

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
