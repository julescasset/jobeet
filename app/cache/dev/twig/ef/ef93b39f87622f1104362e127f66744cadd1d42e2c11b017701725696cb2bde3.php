<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_9d2fd03da7191a02a25a28c3a489c7d7126e87c0232bfa504b79699266da1bc8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_230003a1a4927f29b01fc83b8654915bab7df3bd6ffd26cd9e472e2233ae4ade = $this->env->getExtension("native_profiler");
        $__internal_230003a1a4927f29b01fc83b8654915bab7df3bd6ffd26cd9e472e2233ae4ade->enter($__internal_230003a1a4927f29b01fc83b8654915bab7df3bd6ffd26cd9e472e2233ae4ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_230003a1a4927f29b01fc83b8654915bab7df3bd6ffd26cd9e472e2233ae4ade->leave($__internal_230003a1a4927f29b01fc83b8654915bab7df3bd6ffd26cd9e472e2233ae4ade_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d2f70b8530dba62c859195ce0389ffa3e726ddf7f033cc69a72d1e985e107756 = $this->env->getExtension("native_profiler");
        $__internal_d2f70b8530dba62c859195ce0389ffa3e726ddf7f033cc69a72d1e985e107756->enter($__internal_d2f70b8530dba62c859195ce0389ffa3e726ddf7f033cc69a72d1e985e107756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d2f70b8530dba62c859195ce0389ffa3e726ddf7f033cc69a72d1e985e107756->leave($__internal_d2f70b8530dba62c859195ce0389ffa3e726ddf7f033cc69a72d1e985e107756_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
