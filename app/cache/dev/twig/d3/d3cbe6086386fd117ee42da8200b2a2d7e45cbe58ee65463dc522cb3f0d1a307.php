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
        $__internal_89cfc8ca212908aed2c44c65c34c552aad2025ca6d5bffae3bda73fb74314e32 = $this->env->getExtension("native_profiler");
        $__internal_89cfc8ca212908aed2c44c65c34c552aad2025ca6d5bffae3bda73fb74314e32->enter($__internal_89cfc8ca212908aed2c44c65c34c552aad2025ca6d5bffae3bda73fb74314e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89cfc8ca212908aed2c44c65c34c552aad2025ca6d5bffae3bda73fb74314e32->leave($__internal_89cfc8ca212908aed2c44c65c34c552aad2025ca6d5bffae3bda73fb74314e32_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8924f20d2dd2c2c2e7b15012cddce91ed579c71f1c9cc3db95850644481c6a64 = $this->env->getExtension("native_profiler");
        $__internal_8924f20d2dd2c2c2e7b15012cddce91ed579c71f1c9cc3db95850644481c6a64->enter($__internal_8924f20d2dd2c2c2e7b15012cddce91ed579c71f1c9cc3db95850644481c6a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8924f20d2dd2c2c2e7b15012cddce91ed579c71f1c9cc3db95850644481c6a64->leave($__internal_8924f20d2dd2c2c2e7b15012cddce91ed579c71f1c9cc3db95850644481c6a64_prof);

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
