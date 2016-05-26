<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_ec8c87506ed3993b9389c55a132defa1c7194513e71ef9c7abf3484f074576a9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_583b34bf428851920be1dac339c5b772349125056960ebf508758c800c5aec7f = $this->env->getExtension("native_profiler");
        $__internal_583b34bf428851920be1dac339c5b772349125056960ebf508758c800c5aec7f->enter($__internal_583b34bf428851920be1dac339c5b772349125056960ebf508758c800c5aec7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583b34bf428851920be1dac339c5b772349125056960ebf508758c800c5aec7f->leave($__internal_583b34bf428851920be1dac339c5b772349125056960ebf508758c800c5aec7f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1d8ccc9315becd8c5fba45673caa5a6265d1c632f7ad649963c0edead169f4ba = $this->env->getExtension("native_profiler");
        $__internal_1d8ccc9315becd8c5fba45673caa5a6265d1c632f7ad649963c0edead169f4ba->enter($__internal_1d8ccc9315becd8c5fba45673caa5a6265d1c632f7ad649963c0edead169f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1d8ccc9315becd8c5fba45673caa5a6265d1c632f7ad649963c0edead169f4ba->leave($__internal_1d8ccc9315becd8c5fba45673caa5a6265d1c632f7ad649963c0edead169f4ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
