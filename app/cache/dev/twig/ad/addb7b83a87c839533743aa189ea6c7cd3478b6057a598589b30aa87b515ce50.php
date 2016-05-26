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
        $__internal_67c75effaa966290a5468bc3ed43f78bbd65338681689e52e3c526f3d7ea6194 = $this->env->getExtension("native_profiler");
        $__internal_67c75effaa966290a5468bc3ed43f78bbd65338681689e52e3c526f3d7ea6194->enter($__internal_67c75effaa966290a5468bc3ed43f78bbd65338681689e52e3c526f3d7ea6194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

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
        
        $__internal_67c75effaa966290a5468bc3ed43f78bbd65338681689e52e3c526f3d7ea6194->leave($__internal_67c75effaa966290a5468bc3ed43f78bbd65338681689e52e3c526f3d7ea6194_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_feba5eadb2499cb89927a922a56002f5d68d9cb2fdba3a9eeef38167c68bf671 = $this->env->getExtension("native_profiler");
        $__internal_feba5eadb2499cb89927a922a56002f5d68d9cb2fdba3a9eeef38167c68bf671->enter($__internal_feba5eadb2499cb89927a922a56002f5d68d9cb2fdba3a9eeef38167c68bf671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_feba5eadb2499cb89927a922a56002f5d68d9cb2fdba3a9eeef38167c68bf671->leave($__internal_feba5eadb2499cb89927a922a56002f5d68d9cb2fdba3a9eeef38167c68bf671_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_e6b9b82e08923733eef7864ecc16892c9419b19475b9164670c7739f233bb6ca = $this->env->getExtension("native_profiler");
        $__internal_e6b9b82e08923733eef7864ecc16892c9419b19475b9164670c7739f233bb6ca->enter($__internal_e6b9b82e08923733eef7864ecc16892c9419b19475b9164670c7739f233bb6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_e6b9b82e08923733eef7864ecc16892c9419b19475b9164670c7739f233bb6ca->leave($__internal_e6b9b82e08923733eef7864ecc16892c9419b19475b9164670c7739f233bb6ca_prof);

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
