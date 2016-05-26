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
        $__internal_9a01eacb98b967cd2e94b8f867e7e73c3726447b836811a2b5fc0b99bb672574 = $this->env->getExtension("native_profiler");
        $__internal_9a01eacb98b967cd2e94b8f867e7e73c3726447b836811a2b5fc0b99bb672574->enter($__internal_9a01eacb98b967cd2e94b8f867e7e73c3726447b836811a2b5fc0b99bb672574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_9a01eacb98b967cd2e94b8f867e7e73c3726447b836811a2b5fc0b99bb672574->leave($__internal_9a01eacb98b967cd2e94b8f867e7e73c3726447b836811a2b5fc0b99bb672574_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_7cff6b89dd31476ca8d8d7dcd4eb84a1ab9d99dd6d1165ec77644447b56c3f39 = $this->env->getExtension("native_profiler");
        $__internal_7cff6b89dd31476ca8d8d7dcd4eb84a1ab9d99dd6d1165ec77644447b56c3f39->enter($__internal_7cff6b89dd31476ca8d8d7dcd4eb84a1ab9d99dd6d1165ec77644447b56c3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_7cff6b89dd31476ca8d8d7dcd4eb84a1ab9d99dd6d1165ec77644447b56c3f39->leave($__internal_7cff6b89dd31476ca8d8d7dcd4eb84a1ab9d99dd6d1165ec77644447b56c3f39_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_2ba736270bafa0acc839d08c2c2caae52538e846b063f3a1d6dc10cbe509b456 = $this->env->getExtension("native_profiler");
        $__internal_2ba736270bafa0acc839d08c2c2caae52538e846b063f3a1d6dc10cbe509b456->enter($__internal_2ba736270bafa0acc839d08c2c2caae52538e846b063f3a1d6dc10cbe509b456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_2ba736270bafa0acc839d08c2c2caae52538e846b063f3a1d6dc10cbe509b456->leave($__internal_2ba736270bafa0acc839d08c2c2caae52538e846b063f3a1d6dc10cbe509b456_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_5385209d3b0ef25678bb0d630e533dbe12132a54bae61846daa9ed942e5de4e9 = $this->env->getExtension("native_profiler");
        $__internal_5385209d3b0ef25678bb0d630e533dbe12132a54bae61846daa9ed942e5de4e9->enter($__internal_5385209d3b0ef25678bb0d630e533dbe12132a54bae61846daa9ed942e5de4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_5385209d3b0ef25678bb0d630e533dbe12132a54bae61846daa9ed942e5de4e9->leave($__internal_5385209d3b0ef25678bb0d630e533dbe12132a54bae61846daa9ed942e5de4e9_prof);

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
