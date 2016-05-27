<?php

/* @SonataAdmin/CRUD/list_trans.html.twig */
class __TwigTemplate_cc94f13372d5d246291dc57df18aad75ae99b9c4603c105eb76c684bceed8fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a11a0d7475fc62c2dc08d98b71c365517869ec72b8ea66e2ee48a6c7b0c3fea8 = $this->env->getExtension("native_profiler");
        $__internal_a11a0d7475fc62c2dc08d98b71c365517869ec72b8ea66e2ee48a6c7b0c3fea8->enter($__internal_a11a0d7475fc62c2dc08d98b71c365517869ec72b8ea66e2ee48a6c7b0c3fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11a0d7475fc62c2dc08d98b71c365517869ec72b8ea66e2ee48a6c7b0c3fea8->leave($__internal_a11a0d7475fc62c2dc08d98b71c365517869ec72b8ea66e2ee48a6c7b0c3fea8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5e5a018064d182f3cb8f8d03089566129c7d284815e7ea6f1adfe0402c542ba3 = $this->env->getExtension("native_profiler");
        $__internal_5e5a018064d182f3cb8f8d03089566129c7d284815e7ea6f1adfe0402c542ba3->enter($__internal_5e5a018064d182f3cb8f8d03089566129c7d284815e7ea6f1adfe0402c542ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_5e5a018064d182f3cb8f8d03089566129c7d284815e7ea6f1adfe0402c542ba3->leave($__internal_5e5a018064d182f3cb8f8d03089566129c7d284815e7ea6f1adfe0402c542ba3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}*/
/*     {% set valueFormat = field_description.options.format|default('%s') %}*/
/* */
/*     {{valueFormat|format(value)|trans({}, translationDomain)}}*/
/* {% endblock %}*/
/* */
