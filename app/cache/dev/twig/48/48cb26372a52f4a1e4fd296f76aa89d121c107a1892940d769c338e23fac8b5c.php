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
        $__internal_c1369a2350b1ff4d00c9bc9b3ba20300cb25b93af76f45df291191941ab3f297 = $this->env->getExtension("native_profiler");
        $__internal_c1369a2350b1ff4d00c9bc9b3ba20300cb25b93af76f45df291191941ab3f297->enter($__internal_c1369a2350b1ff4d00c9bc9b3ba20300cb25b93af76f45df291191941ab3f297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

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
        
        $__internal_c1369a2350b1ff4d00c9bc9b3ba20300cb25b93af76f45df291191941ab3f297->leave($__internal_c1369a2350b1ff4d00c9bc9b3ba20300cb25b93af76f45df291191941ab3f297_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f592a0d16974bb805f3de760ad7747a3df9027775a61cae1e0b382db06fa127f = $this->env->getExtension("native_profiler");
        $__internal_f592a0d16974bb805f3de760ad7747a3df9027775a61cae1e0b382db06fa127f->enter($__internal_f592a0d16974bb805f3de760ad7747a3df9027775a61cae1e0b382db06fa127f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_f592a0d16974bb805f3de760ad7747a3df9027775a61cae1e0b382db06fa127f->leave($__internal_f592a0d16974bb805f3de760ad7747a3df9027775a61cae1e0b382db06fa127f_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_56a39b1ff863a92c5fcffe4d3620667eecd76e2435e6dbce93deb01d4a5d47bd = $this->env->getExtension("native_profiler");
        $__internal_56a39b1ff863a92c5fcffe4d3620667eecd76e2435e6dbce93deb01d4a5d47bd->enter($__internal_56a39b1ff863a92c5fcffe4d3620667eecd76e2435e6dbce93deb01d4a5d47bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_56a39b1ff863a92c5fcffe4d3620667eecd76e2435e6dbce93deb01d4a5d47bd->leave($__internal_56a39b1ff863a92c5fcffe4d3620667eecd76e2435e6dbce93deb01d4a5d47bd_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_68b95cccf97d576b0210e8b324da0278db70500bb53605452c542e07d426c1d7 = $this->env->getExtension("native_profiler");
        $__internal_68b95cccf97d576b0210e8b324da0278db70500bb53605452c542e07d426c1d7->enter($__internal_68b95cccf97d576b0210e8b324da0278db70500bb53605452c542e07d426c1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_68b95cccf97d576b0210e8b324da0278db70500bb53605452c542e07d426c1d7->leave($__internal_68b95cccf97d576b0210e8b324da0278db70500bb53605452c542e07d426c1d7_prof);

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
