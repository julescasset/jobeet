<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_396b0a768252804227b59459fa6aa59c2ef0b97bfeeac233d2050272aba7e68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14180c6f981366844ee1219e1a6a342923790c70127f5b532e4fc0af7427e1ea = $this->env->getExtension("native_profiler");
        $__internal_14180c6f981366844ee1219e1a6a342923790c70127f5b532e4fc0af7427e1ea->enter($__internal_14180c6f981366844ee1219e1a6a342923790c70127f5b532e4fc0af7427e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_14180c6f981366844ee1219e1a6a342923790c70127f5b532e4fc0af7427e1ea->leave($__internal_14180c6f981366844ee1219e1a6a342923790c70127f5b532e4fc0af7427e1ea_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_c689e9fe51f7d0222d5736caa5e54fec4f787352c76f1e4510768c69db6d0d48 = $this->env->getExtension("native_profiler");
        $__internal_c689e9fe51f7d0222d5736caa5e54fec4f787352c76f1e4510768c69db6d0d48->enter($__internal_c689e9fe51f7d0222d5736caa5e54fec4f787352c76f1e4510768c69db6d0d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_c689e9fe51f7d0222d5736caa5e54fec4f787352c76f1e4510768c69db6d0d48->leave($__internal_c689e9fe51f7d0222d5736caa5e54fec4f787352c76f1e4510768c69db6d0d48_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_c566e64973b7420ecb587a0361c8822adfb8b22856a742908da7d8d0c2c0a104 = $this->env->getExtension("native_profiler");
        $__internal_c566e64973b7420ecb587a0361c8822adfb8b22856a742908da7d8d0c2c0a104->enter($__internal_c566e64973b7420ecb587a0361c8822adfb8b22856a742908da7d8d0c2c0a104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_c566e64973b7420ecb587a0361c8822adfb8b22856a742908da7d8d0c2c0a104->leave($__internal_c566e64973b7420ecb587a0361c8822adfb8b22856a742908da7d8d0c2c0a104_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
