<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_8244430625f5dc8c52c2a04ad25ebe489523de75c08a1ea2456b24f5e049ea6b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19d92f62bed8ca4f63566ead69b687e7ad3a9fbbd90dafe749c76180d6bf5061 = $this->env->getExtension("native_profiler");
        $__internal_19d92f62bed8ca4f63566ead69b687e7ad3a9fbbd90dafe749c76180d6bf5061->enter($__internal_19d92f62bed8ca4f63566ead69b687e7ad3a9fbbd90dafe749c76180d6bf5061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d92f62bed8ca4f63566ead69b687e7ad3a9fbbd90dafe749c76180d6bf5061->leave($__internal_19d92f62bed8ca4f63566ead69b687e7ad3a9fbbd90dafe749c76180d6bf5061_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c376b19f21d0b37dd1414826c92fe66fc66108ee8a317c405eb2acf00c72d134 = $this->env->getExtension("native_profiler");
        $__internal_c376b19f21d0b37dd1414826c92fe66fc66108ee8a317c405eb2acf00c72d134->enter($__internal_c376b19f21d0b37dd1414826c92fe66fc66108ee8a317c405eb2acf00c72d134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c376b19f21d0b37dd1414826c92fe66fc66108ee8a317c405eb2acf00c72d134->leave($__internal_c376b19f21d0b37dd1414826c92fe66fc66108ee8a317c405eb2acf00c72d134_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
