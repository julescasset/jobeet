<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_3d23d4b496951f5423b46b6597a555a5b729c182bb71b661ce8b5bf53b146969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1630711b6b5b98b56d0ebb0d3d6b4a26be14814005ec953df751867e2bd5186 = $this->env->getExtension("native_profiler");
        $__internal_e1630711b6b5b98b56d0ebb0d3d6b4a26be14814005ec953df751867e2bd5186->enter($__internal_e1630711b6b5b98b56d0ebb0d3d6b4a26be14814005ec953df751867e2bd5186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_e1630711b6b5b98b56d0ebb0d3d6b4a26be14814005ec953df751867e2bd5186->leave($__internal_e1630711b6b5b98b56d0ebb0d3d6b4a26be14814005ec953df751867e2bd5186_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_ec2121dd35d10ccc33cbea928c9dc939d2447a8b127cddc6bab7ccc392d55d61 = $this->env->getExtension("native_profiler");
        $__internal_ec2121dd35d10ccc33cbea928c9dc939d2447a8b127cddc6bab7ccc392d55d61->enter($__internal_ec2121dd35d10ccc33cbea928c9dc939d2447a8b127cddc6bab7ccc392d55d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_ec2121dd35d10ccc33cbea928c9dc939d2447a8b127cddc6bab7ccc392d55d61->leave($__internal_ec2121dd35d10ccc33cbea928c9dc939d2447a8b127cddc6bab7ccc392d55d61_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_c93247cd767a557de792c5669a8b4fd6293619948616ec97a3cdf3df7b12fd74 = $this->env->getExtension("native_profiler");
        $__internal_c93247cd767a557de792c5669a8b4fd6293619948616ec97a3cdf3df7b12fd74->enter($__internal_c93247cd767a557de792c5669a8b4fd6293619948616ec97a3cdf3df7b12fd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_c93247cd767a557de792c5669a8b4fd6293619948616ec97a3cdf3df7b12fd74->leave($__internal_c93247cd767a557de792c5669a8b4fd6293619948616ec97a3cdf3df7b12fd74_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_7952378504e20100ce2228e2f57e06866cad7f34a2d933ba65ce6b972125bc79 = $this->env->getExtension("native_profiler");
        $__internal_7952378504e20100ce2228e2f57e06866cad7f34a2d933ba65ce6b972125bc79->enter($__internal_7952378504e20100ce2228e2f57e06866cad7f34a2d933ba65ce6b972125bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_7952378504e20100ce2228e2f57e06866cad7f34a2d933ba65ce6b972125bc79->leave($__internal_7952378504e20100ce2228e2f57e06866cad7f34a2d933ba65ce6b972125bc79_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 25,  91 => 23,  87 => 21,  81 => 19,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  54 => 29,  52 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 14,  28 => 12,  25 => 11,);
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
/* <div id="sonata-ba-field-container-{{ field_element.vars.id }}" class="sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}">*/
/* */
/*     {% block label %}*/
/*         {% if inline == 'natural' %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/* */
/*     <div class="sonata-ba-field-error-messages">*/
/*         {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
