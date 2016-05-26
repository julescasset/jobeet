<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_f290d572be632fd31b582d874c3325424d90d51436cbd195d096ff6b9baad8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9834c509fa444cee3158e6c94246d83ba677e63415c031ed7e9f55eb94945bd2 = $this->env->getExtension("native_profiler");
        $__internal_9834c509fa444cee3158e6c94246d83ba677e63415c031ed7e9f55eb94945bd2->enter($__internal_9834c509fa444cee3158e6c94246d83ba677e63415c031ed7e9f55eb94945bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_9834c509fa444cee3158e6c94246d83ba677e63415c031ed7e9f55eb94945bd2->leave($__internal_9834c509fa444cee3158e6c94246d83ba677e63415c031ed7e9f55eb94945bd2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_579d7a01e3a25c26ebcea37c643a19872a3f9c8802418b1559f8a58ca5b2db46 = $this->env->getExtension("native_profiler");
        $__internal_579d7a01e3a25c26ebcea37c643a19872a3f9c8802418b1559f8a58ca5b2db46->enter($__internal_579d7a01e3a25c26ebcea37c643a19872a3f9c8802418b1559f8a58ca5b2db46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_579d7a01e3a25c26ebcea37c643a19872a3f9c8802418b1559f8a58ca5b2db46->leave($__internal_579d7a01e3a25c26ebcea37c643a19872a3f9c8802418b1559f8a58ca5b2db46_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_5a4bf1975321751d3599b95b3a24b67c3424dbd7d9d0fa60007690ff7182dba0 = $this->env->getExtension("native_profiler");
        $__internal_5a4bf1975321751d3599b95b3a24b67c3424dbd7d9d0fa60007690ff7182dba0->enter($__internal_5a4bf1975321751d3599b95b3a24b67c3424dbd7d9d0fa60007690ff7182dba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_5a4bf1975321751d3599b95b3a24b67c3424dbd7d9d0fa60007690ff7182dba0->leave($__internal_5a4bf1975321751d3599b95b3a24b67c3424dbd7d9d0fa60007690ff7182dba0_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_8fbca89feb30224d289ebdd34bd6b23494d40c9bf74350af8ddf9d7f37397036 = $this->env->getExtension("native_profiler");
        $__internal_8fbca89feb30224d289ebdd34bd6b23494d40c9bf74350af8ddf9d7f37397036->enter($__internal_8fbca89feb30224d289ebdd34bd6b23494d40c9bf74350af8ddf9d7f37397036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_8fbca89feb30224d289ebdd34bd6b23494d40c9bf74350af8ddf9d7f37397036->leave($__internal_8fbca89feb30224d289ebdd34bd6b23494d40c9bf74350af8ddf9d7f37397036_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
