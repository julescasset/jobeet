<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_9051a8f17da7bbbf7499dbdadb3e29f5fb8813450a30c78f95775d9ef5d32320 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1458f0536d02f8a7bf35e1b11c50215c0df5a01ba8633fbe684718927d110558 = $this->env->getExtension("native_profiler");
        $__internal_1458f0536d02f8a7bf35e1b11c50215c0df5a01ba8633fbe684718927d110558->enter($__internal_1458f0536d02f8a7bf35e1b11c50215c0df5a01ba8633fbe684718927d110558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1458f0536d02f8a7bf35e1b11c50215c0df5a01ba8633fbe684718927d110558->leave($__internal_1458f0536d02f8a7bf35e1b11c50215c0df5a01ba8633fbe684718927d110558_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_06ee5c408268b747078f7c0cebacaaca541710a0b1f28da659b1c4343ea98937 = $this->env->getExtension("native_profiler");
        $__internal_06ee5c408268b747078f7c0cebacaaca541710a0b1f28da659b1c4343ea98937->enter($__internal_06ee5c408268b747078f7c0cebacaaca541710a0b1f28da659b1c4343ea98937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_06ee5c408268b747078f7c0cebacaaca541710a0b1f28da659b1c4343ea98937->leave($__internal_06ee5c408268b747078f7c0cebacaaca541710a0b1f28da659b1c4343ea98937_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
