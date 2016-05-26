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
        $__internal_69cc59fb70243708f61030dcc28755fd18e623fd69d44da60c754dd105591615 = $this->env->getExtension("native_profiler");
        $__internal_69cc59fb70243708f61030dcc28755fd18e623fd69d44da60c754dd105591615->enter($__internal_69cc59fb70243708f61030dcc28755fd18e623fd69d44da60c754dd105591615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

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
        
        $__internal_69cc59fb70243708f61030dcc28755fd18e623fd69d44da60c754dd105591615->leave($__internal_69cc59fb70243708f61030dcc28755fd18e623fd69d44da60c754dd105591615_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_0046f50597f0bc5c981d53d4116d184b2bbe7820d8994e100a184c20cddb68ec = $this->env->getExtension("native_profiler");
        $__internal_0046f50597f0bc5c981d53d4116d184b2bbe7820d8994e100a184c20cddb68ec->enter($__internal_0046f50597f0bc5c981d53d4116d184b2bbe7820d8994e100a184c20cddb68ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_0046f50597f0bc5c981d53d4116d184b2bbe7820d8994e100a184c20cddb68ec->leave($__internal_0046f50597f0bc5c981d53d4116d184b2bbe7820d8994e100a184c20cddb68ec_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_b4d2c4d506afcf8c30623040b782e25188218e60327008b1e3035691e5eaaacb = $this->env->getExtension("native_profiler");
        $__internal_b4d2c4d506afcf8c30623040b782e25188218e60327008b1e3035691e5eaaacb->enter($__internal_b4d2c4d506afcf8c30623040b782e25188218e60327008b1e3035691e5eaaacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_b4d2c4d506afcf8c30623040b782e25188218e60327008b1e3035691e5eaaacb->leave($__internal_b4d2c4d506afcf8c30623040b782e25188218e60327008b1e3035691e5eaaacb_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_11dd6b9638c5baea82e50076a0c07190f941ec35f200bacf4b488a56d99b74a7 = $this->env->getExtension("native_profiler");
        $__internal_11dd6b9638c5baea82e50076a0c07190f941ec35f200bacf4b488a56d99b74a7->enter($__internal_11dd6b9638c5baea82e50076a0c07190f941ec35f200bacf4b488a56d99b74a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_11dd6b9638c5baea82e50076a0c07190f941ec35f200bacf4b488a56d99b74a7->leave($__internal_11dd6b9638c5baea82e50076a0c07190f941ec35f200bacf4b488a56d99b74a7_prof);

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
