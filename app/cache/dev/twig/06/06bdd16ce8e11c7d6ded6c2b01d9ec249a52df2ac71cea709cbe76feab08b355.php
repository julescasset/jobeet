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
        $__internal_1aac9a58e0948beff1956d55892c75c9e9a81498d303f45e703d5fd8ac12a942 = $this->env->getExtension("native_profiler");
        $__internal_1aac9a58e0948beff1956d55892c75c9e9a81498d303f45e703d5fd8ac12a942->enter($__internal_1aac9a58e0948beff1956d55892c75c9e9a81498d303f45e703d5fd8ac12a942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

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
        
        $__internal_1aac9a58e0948beff1956d55892c75c9e9a81498d303f45e703d5fd8ac12a942->leave($__internal_1aac9a58e0948beff1956d55892c75c9e9a81498d303f45e703d5fd8ac12a942_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_420e056cf9f65b703f706e44d7513bc913be665c7d5412f35af04222d90d1b21 = $this->env->getExtension("native_profiler");
        $__internal_420e056cf9f65b703f706e44d7513bc913be665c7d5412f35af04222d90d1b21->enter($__internal_420e056cf9f65b703f706e44d7513bc913be665c7d5412f35af04222d90d1b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_420e056cf9f65b703f706e44d7513bc913be665c7d5412f35af04222d90d1b21->leave($__internal_420e056cf9f65b703f706e44d7513bc913be665c7d5412f35af04222d90d1b21_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_5abe32324c2eb3f0e2de7a5540df43bd643b6ba409174c59f880dd28609826bd = $this->env->getExtension("native_profiler");
        $__internal_5abe32324c2eb3f0e2de7a5540df43bd643b6ba409174c59f880dd28609826bd->enter($__internal_5abe32324c2eb3f0e2de7a5540df43bd643b6ba409174c59f880dd28609826bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_5abe32324c2eb3f0e2de7a5540df43bd643b6ba409174c59f880dd28609826bd->leave($__internal_5abe32324c2eb3f0e2de7a5540df43bd643b6ba409174c59f880dd28609826bd_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_521d0ca67f9d8c69926af70d75a9ca8fdf2a43e71ed9e6dfdc07051f11ea619e = $this->env->getExtension("native_profiler");
        $__internal_521d0ca67f9d8c69926af70d75a9ca8fdf2a43e71ed9e6dfdc07051f11ea619e->enter($__internal_521d0ca67f9d8c69926af70d75a9ca8fdf2a43e71ed9e6dfdc07051f11ea619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_521d0ca67f9d8c69926af70d75a9ca8fdf2a43e71ed9e6dfdc07051f11ea619e->leave($__internal_521d0ca67f9d8c69926af70d75a9ca8fdf2a43e71ed9e6dfdc07051f11ea619e_prof);

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
