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
        $__internal_9991e6ab89ea38d6ca8a366c150aa6b4c6baa17d0c68f960eda989884c91666b = $this->env->getExtension("native_profiler");
        $__internal_9991e6ab89ea38d6ca8a366c150aa6b4c6baa17d0c68f960eda989884c91666b->enter($__internal_9991e6ab89ea38d6ca8a366c150aa6b4c6baa17d0c68f960eda989884c91666b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

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
        
        $__internal_9991e6ab89ea38d6ca8a366c150aa6b4c6baa17d0c68f960eda989884c91666b->leave($__internal_9991e6ab89ea38d6ca8a366c150aa6b4c6baa17d0c68f960eda989884c91666b_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_75fa2ce71416157e5a3d6954bc24e72523abe362b511ca8dd47325d4582f0ffa = $this->env->getExtension("native_profiler");
        $__internal_75fa2ce71416157e5a3d6954bc24e72523abe362b511ca8dd47325d4582f0ffa->enter($__internal_75fa2ce71416157e5a3d6954bc24e72523abe362b511ca8dd47325d4582f0ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_75fa2ce71416157e5a3d6954bc24e72523abe362b511ca8dd47325d4582f0ffa->leave($__internal_75fa2ce71416157e5a3d6954bc24e72523abe362b511ca8dd47325d4582f0ffa_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_4a61ea232db6aeccba8097a5a2b66119e38023d78f7699d28f15127b32a2dbd9 = $this->env->getExtension("native_profiler");
        $__internal_4a61ea232db6aeccba8097a5a2b66119e38023d78f7699d28f15127b32a2dbd9->enter($__internal_4a61ea232db6aeccba8097a5a2b66119e38023d78f7699d28f15127b32a2dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_4a61ea232db6aeccba8097a5a2b66119e38023d78f7699d28f15127b32a2dbd9->leave($__internal_4a61ea232db6aeccba8097a5a2b66119e38023d78f7699d28f15127b32a2dbd9_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_b3f77f6e490c4335dfd9c0deb1e60dc2f10d48ef3dc560567705f300ae576424 = $this->env->getExtension("native_profiler");
        $__internal_b3f77f6e490c4335dfd9c0deb1e60dc2f10d48ef3dc560567705f300ae576424->enter($__internal_b3f77f6e490c4335dfd9c0deb1e60dc2f10d48ef3dc560567705f300ae576424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_b3f77f6e490c4335dfd9c0deb1e60dc2f10d48ef3dc560567705f300ae576424->leave($__internal_b3f77f6e490c4335dfd9c0deb1e60dc2f10d48ef3dc560567705f300ae576424_prof);

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
