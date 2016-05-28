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
        $__internal_1c155638b4beb068aa3e104a8638105af7644f994caff51e7693ff994822f13d = $this->env->getExtension("native_profiler");
        $__internal_1c155638b4beb068aa3e104a8638105af7644f994caff51e7693ff994822f13d->enter($__internal_1c155638b4beb068aa3e104a8638105af7644f994caff51e7693ff994822f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c155638b4beb068aa3e104a8638105af7644f994caff51e7693ff994822f13d->leave($__internal_1c155638b4beb068aa3e104a8638105af7644f994caff51e7693ff994822f13d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bbe80c13229157e5a8c6532cb972c369847ccded79cd18ff7b85f4dfb0f930b2 = $this->env->getExtension("native_profiler");
        $__internal_bbe80c13229157e5a8c6532cb972c369847ccded79cd18ff7b85f4dfb0f930b2->enter($__internal_bbe80c13229157e5a8c6532cb972c369847ccded79cd18ff7b85f4dfb0f930b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_bbe80c13229157e5a8c6532cb972c369847ccded79cd18ff7b85f4dfb0f930b2->leave($__internal_bbe80c13229157e5a8c6532cb972c369847ccded79cd18ff7b85f4dfb0f930b2_prof);

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
