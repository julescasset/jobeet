<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_60fd5c13930a8e793ea276910b75a95c31ed702122e202af1b49883e63d3b8b6 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea8c63df07885819695685561b21cff20c65f20c8aef12fdf1aeb19161d0b493 = $this->env->getExtension("native_profiler");
        $__internal_ea8c63df07885819695685561b21cff20c65f20c8aef12fdf1aeb19161d0b493->enter($__internal_ea8c63df07885819695685561b21cff20c65f20c8aef12fdf1aeb19161d0b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8c63df07885819695685561b21cff20c65f20c8aef12fdf1aeb19161d0b493->leave($__internal_ea8c63df07885819695685561b21cff20c65f20c8aef12fdf1aeb19161d0b493_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f0cbcfb20f3374e0466a0dda9eefd5c62d04da505e901f08292dfdd7c6f9b1b1 = $this->env->getExtension("native_profiler");
        $__internal_f0cbcfb20f3374e0466a0dda9eefd5c62d04da505e901f08292dfdd7c6f9b1b1->enter($__internal_f0cbcfb20f3374e0466a0dda9eefd5c62d04da505e901f08292dfdd7c6f9b1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f0cbcfb20f3374e0466a0dda9eefd5c62d04da505e901f08292dfdd7c6f9b1b1->leave($__internal_f0cbcfb20f3374e0466a0dda9eefd5c62d04da505e901f08292dfdd7c6f9b1b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
