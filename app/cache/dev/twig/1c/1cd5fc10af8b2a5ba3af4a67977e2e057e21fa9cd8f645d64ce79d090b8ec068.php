<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_953f859306f93b53874fad79305759d85243837d16b53395144347315f943330 extends Twig_Template
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
        $__internal_f16f28d275f76ffb480fa7b56fa640bea3569e8051c34844fc39e7ba3b369060 = $this->env->getExtension("native_profiler");
        $__internal_f16f28d275f76ffb480fa7b56fa640bea3569e8051c34844fc39e7ba3b369060->enter($__internal_f16f28d275f76ffb480fa7b56fa640bea3569e8051c34844fc39e7ba3b369060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_f16f28d275f76ffb480fa7b56fa640bea3569e8051c34844fc39e7ba3b369060->leave($__internal_f16f28d275f76ffb480fa7b56fa640bea3569e8051c34844fc39e7ba3b369060_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_aef94e681d3aa9044ce71572b3f632e82317dd63a0b98fbc188191b12efcb544 = $this->env->getExtension("native_profiler");
        $__internal_aef94e681d3aa9044ce71572b3f632e82317dd63a0b98fbc188191b12efcb544->enter($__internal_aef94e681d3aa9044ce71572b3f632e82317dd63a0b98fbc188191b12efcb544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_aef94e681d3aa9044ce71572b3f632e82317dd63a0b98fbc188191b12efcb544->leave($__internal_aef94e681d3aa9044ce71572b3f632e82317dd63a0b98fbc188191b12efcb544_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_7d9ffa64e697f671a92a069bca35166e35dcdcc9a8ebf80ef5de32f600424ac7 = $this->env->getExtension("native_profiler");
        $__internal_7d9ffa64e697f671a92a069bca35166e35dcdcc9a8ebf80ef5de32f600424ac7->enter($__internal_7d9ffa64e697f671a92a069bca35166e35dcdcc9a8ebf80ef5de32f600424ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_7d9ffa64e697f671a92a069bca35166e35dcdcc9a8ebf80ef5de32f600424ac7->leave($__internal_7d9ffa64e697f671a92a069bca35166e35dcdcc9a8ebf80ef5de32f600424ac7_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_dc2d49a13c4d61ad12e48f126070d3e9ee6fd32abfb5bda51b7c70e5d8cecd9e = $this->env->getExtension("native_profiler");
        $__internal_dc2d49a13c4d61ad12e48f126070d3e9ee6fd32abfb5bda51b7c70e5d8cecd9e->enter($__internal_dc2d49a13c4d61ad12e48f126070d3e9ee6fd32abfb5bda51b7c70e5d8cecd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_dc2d49a13c4d61ad12e48f126070d3e9ee6fd32abfb5bda51b7c70e5d8cecd9e->leave($__internal_dc2d49a13c4d61ad12e48f126070d3e9ee6fd32abfb5bda51b7c70e5d8cecd9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
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
