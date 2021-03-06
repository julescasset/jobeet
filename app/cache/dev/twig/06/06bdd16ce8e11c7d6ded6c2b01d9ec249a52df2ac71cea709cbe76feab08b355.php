<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_c298c38165b383c3ce0b03d439d75fa240974737bd6c78ea13d1248ce5c4f6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23fa751fe0ec7039495212683a08940fccde5422e10578b045cc2dff0ec34fb6 = $this->env->getExtension("native_profiler");
        $__internal_23fa751fe0ec7039495212683a08940fccde5422e10578b045cc2dff0ec34fb6->enter($__internal_23fa751fe0ec7039495212683a08940fccde5422e10578b045cc2dff0ec34fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_23fa751fe0ec7039495212683a08940fccde5422e10578b045cc2dff0ec34fb6->leave($__internal_23fa751fe0ec7039495212683a08940fccde5422e10578b045cc2dff0ec34fb6_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_fb2ff5e031c249eec7957ff8fcb04e4f9598c2720792e653936770425060b2bd = $this->env->getExtension("native_profiler");
        $__internal_fb2ff5e031c249eec7957ff8fcb04e4f9598c2720792e653936770425060b2bd->enter($__internal_fb2ff5e031c249eec7957ff8fcb04e4f9598c2720792e653936770425060b2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_fb2ff5e031c249eec7957ff8fcb04e4f9598c2720792e653936770425060b2bd->leave($__internal_fb2ff5e031c249eec7957ff8fcb04e4f9598c2720792e653936770425060b2bd_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_3a17f723fcd4a7ea655518ac8893be42f78d46aba764c0a4d28629feb8d4d204 = $this->env->getExtension("native_profiler");
        $__internal_3a17f723fcd4a7ea655518ac8893be42f78d46aba764c0a4d28629feb8d4d204->enter($__internal_3a17f723fcd4a7ea655518ac8893be42f78d46aba764c0a4d28629feb8d4d204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_3a17f723fcd4a7ea655518ac8893be42f78d46aba764c0a4d28629feb8d4d204->leave($__internal_3a17f723fcd4a7ea655518ac8893be42f78d46aba764c0a4d28629feb8d4d204_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_5bfb7a7cf9404936ee9df8f011d45cd55b80835d646c568385e5c41a1d902457 = $this->env->getExtension("native_profiler");
        $__internal_5bfb7a7cf9404936ee9df8f011d45cd55b80835d646c568385e5c41a1d902457->enter($__internal_5bfb7a7cf9404936ee9df8f011d45cd55b80835d646c568385e5c41a1d902457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_5bfb7a7cf9404936ee9df8f011d45cd55b80835d646c568385e5c41a1d902457->leave($__internal_5bfb7a7cf9404936ee9df8f011d45cd55b80835d646c568385e5c41a1d902457_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
