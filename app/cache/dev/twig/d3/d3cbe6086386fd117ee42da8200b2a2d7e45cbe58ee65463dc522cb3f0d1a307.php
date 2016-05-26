<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_51a631656a074027d8fdea3be931f34d0ee64eea7b184832ccda56d400a04d2c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a6c23e2adeacb3782429d6cb7d4b0d3a6cc82b7d92481c7e8e73838d4609e16 = $this->env->getExtension("native_profiler");
        $__internal_0a6c23e2adeacb3782429d6cb7d4b0d3a6cc82b7d92481c7e8e73838d4609e16->enter($__internal_0a6c23e2adeacb3782429d6cb7d4b0d3a6cc82b7d92481c7e8e73838d4609e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6c23e2adeacb3782429d6cb7d4b0d3a6cc82b7d92481c7e8e73838d4609e16->leave($__internal_0a6c23e2adeacb3782429d6cb7d4b0d3a6cc82b7d92481c7e8e73838d4609e16_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_97a0d0ada4f7bc25fb449cda4ce8bacdcd6c6c93dc17f79fe67ff85a6b976293 = $this->env->getExtension("native_profiler");
        $__internal_97a0d0ada4f7bc25fb449cda4ce8bacdcd6c6c93dc17f79fe67ff85a6b976293->enter($__internal_97a0d0ada4f7bc25fb449cda4ce8bacdcd6c6c93dc17f79fe67ff85a6b976293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_97a0d0ada4f7bc25fb449cda4ce8bacdcd6c6c93dc17f79fe67ff85a6b976293->leave($__internal_97a0d0ada4f7bc25fb449cda4ce8bacdcd6c6c93dc17f79fe67ff85a6b976293_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
