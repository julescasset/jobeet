<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_234f8829152bc3fa88852243d85f671b73b281133184462065481c300d32c009 extends Twig_Template
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
        $__internal_4d9acf03045b70e3efa1f5e76b0b8700b6e07b559737ba9751a8108d61b432d9 = $this->env->getExtension("native_profiler");
        $__internal_4d9acf03045b70e3efa1f5e76b0b8700b6e07b559737ba9751a8108d61b432d9->enter($__internal_4d9acf03045b70e3efa1f5e76b0b8700b6e07b559737ba9751a8108d61b432d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

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
        
        $__internal_4d9acf03045b70e3efa1f5e76b0b8700b6e07b559737ba9751a8108d61b432d9->leave($__internal_4d9acf03045b70e3efa1f5e76b0b8700b6e07b559737ba9751a8108d61b432d9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_78190f6a3c31a9478130e636d5dbab9ad570e8bb1a2d7866b10b4dcfd98d7bbf = $this->env->getExtension("native_profiler");
        $__internal_78190f6a3c31a9478130e636d5dbab9ad570e8bb1a2d7866b10b4dcfd98d7bbf->enter($__internal_78190f6a3c31a9478130e636d5dbab9ad570e8bb1a2d7866b10b4dcfd98d7bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_78190f6a3c31a9478130e636d5dbab9ad570e8bb1a2d7866b10b4dcfd98d7bbf->leave($__internal_78190f6a3c31a9478130e636d5dbab9ad570e8bb1a2d7866b10b4dcfd98d7bbf_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_5c610f4d04a26828e8c75cb732b85e95d3441e1a239595c7006ffdf40d8b5feb = $this->env->getExtension("native_profiler");
        $__internal_5c610f4d04a26828e8c75cb732b85e95d3441e1a239595c7006ffdf40d8b5feb->enter($__internal_5c610f4d04a26828e8c75cb732b85e95d3441e1a239595c7006ffdf40d8b5feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_5c610f4d04a26828e8c75cb732b85e95d3441e1a239595c7006ffdf40d8b5feb->leave($__internal_5c610f4d04a26828e8c75cb732b85e95d3441e1a239595c7006ffdf40d8b5feb_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_63eb41c923522ab71b63624ef826b48cbeb78967d6b6e49def0263db0db040a0 = $this->env->getExtension("native_profiler");
        $__internal_63eb41c923522ab71b63624ef826b48cbeb78967d6b6e49def0263db0db040a0->enter($__internal_63eb41c923522ab71b63624ef826b48cbeb78967d6b6e49def0263db0db040a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_63eb41c923522ab71b63624ef826b48cbeb78967d6b6e49def0263db0db040a0->leave($__internal_63eb41c923522ab71b63624ef826b48cbeb78967d6b6e49def0263db0db040a0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
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
