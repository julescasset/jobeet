<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_16ea402656f81336e9c4db386d9a108dd18c8c7fac0bae750d8e9d248be0e6d4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_526557999d8667d701c6ee5b3ea1c335e728b96eee9eebf833d98049c7256c3e = $this->env->getExtension("native_profiler");
        $__internal_526557999d8667d701c6ee5b3ea1c335e728b96eee9eebf833d98049c7256c3e->enter($__internal_526557999d8667d701c6ee5b3ea1c335e728b96eee9eebf833d98049c7256c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526557999d8667d701c6ee5b3ea1c335e728b96eee9eebf833d98049c7256c3e->leave($__internal_526557999d8667d701c6ee5b3ea1c335e728b96eee9eebf833d98049c7256c3e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_615887eef84787c0a8a9708c677cd6de5d05875f88f19bbef13b0e2c88ad57b4 = $this->env->getExtension("native_profiler");
        $__internal_615887eef84787c0a8a9708c677cd6de5d05875f88f19bbef13b0e2c88ad57b4->enter($__internal_615887eef84787c0a8a9708c677cd6de5d05875f88f19bbef13b0e2c88ad57b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_615887eef84787c0a8a9708c677cd6de5d05875f88f19bbef13b0e2c88ad57b4->leave($__internal_615887eef84787c0a8a9708c677cd6de5d05875f88f19bbef13b0e2c88ad57b4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
