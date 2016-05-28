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
        $__internal_737ebe5ff1508b93d7a88bdacf9b45edd1c533ce4c1d1cc5d250ab118675235c = $this->env->getExtension("native_profiler");
        $__internal_737ebe5ff1508b93d7a88bdacf9b45edd1c533ce4c1d1cc5d250ab118675235c->enter($__internal_737ebe5ff1508b93d7a88bdacf9b45edd1c533ce4c1d1cc5d250ab118675235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_737ebe5ff1508b93d7a88bdacf9b45edd1c533ce4c1d1cc5d250ab118675235c->leave($__internal_737ebe5ff1508b93d7a88bdacf9b45edd1c533ce4c1d1cc5d250ab118675235c_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_7c6d7a0ef7784b9bc1f0ce401e49dec5c6d7519dd8078c8649d4327213d74a32 = $this->env->getExtension("native_profiler");
        $__internal_7c6d7a0ef7784b9bc1f0ce401e49dec5c6d7519dd8078c8649d4327213d74a32->enter($__internal_7c6d7a0ef7784b9bc1f0ce401e49dec5c6d7519dd8078c8649d4327213d74a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_7c6d7a0ef7784b9bc1f0ce401e49dec5c6d7519dd8078c8649d4327213d74a32->leave($__internal_7c6d7a0ef7784b9bc1f0ce401e49dec5c6d7519dd8078c8649d4327213d74a32_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_50d4984f471e68b2d9ccb5b7bbf26c5597099178f2153b37202b3afe7e537e9e = $this->env->getExtension("native_profiler");
        $__internal_50d4984f471e68b2d9ccb5b7bbf26c5597099178f2153b37202b3afe7e537e9e->enter($__internal_50d4984f471e68b2d9ccb5b7bbf26c5597099178f2153b37202b3afe7e537e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_50d4984f471e68b2d9ccb5b7bbf26c5597099178f2153b37202b3afe7e537e9e->leave($__internal_50d4984f471e68b2d9ccb5b7bbf26c5597099178f2153b37202b3afe7e537e9e_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_a5abbf3531cd7c2136a49956c5d0f5b3d2c798afd1e4edda09307b7aeb9f1d78 = $this->env->getExtension("native_profiler");
        $__internal_a5abbf3531cd7c2136a49956c5d0f5b3d2c798afd1e4edda09307b7aeb9f1d78->enter($__internal_a5abbf3531cd7c2136a49956c5d0f5b3d2c798afd1e4edda09307b7aeb9f1d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_a5abbf3531cd7c2136a49956c5d0f5b3d2c798afd1e4edda09307b7aeb9f1d78->leave($__internal_a5abbf3531cd7c2136a49956c5d0f5b3d2c798afd1e4edda09307b7aeb9f1d78_prof);

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
