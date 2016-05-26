<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_c079224c24e8eb6590a68e35c2d6923ea7460117ed04cfe7a90e04ac7f35ee91 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_107eca6eccb926678faf5c0e1713d4674470b81fac263820d5dcd995514a0334 = $this->env->getExtension("native_profiler");
        $__internal_107eca6eccb926678faf5c0e1713d4674470b81fac263820d5dcd995514a0334->enter($__internal_107eca6eccb926678faf5c0e1713d4674470b81fac263820d5dcd995514a0334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107eca6eccb926678faf5c0e1713d4674470b81fac263820d5dcd995514a0334->leave($__internal_107eca6eccb926678faf5c0e1713d4674470b81fac263820d5dcd995514a0334_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3450b6de4ab223c5697b468a675f8deab9759d1ae02e854f27ff4a527368bb02 = $this->env->getExtension("native_profiler");
        $__internal_3450b6de4ab223c5697b468a675f8deab9759d1ae02e854f27ff4a527368bb02->enter($__internal_3450b6de4ab223c5697b468a675f8deab9759d1ae02e854f27ff4a527368bb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_3450b6de4ab223c5697b468a675f8deab9759d1ae02e854f27ff4a527368bb02->leave($__internal_3450b6de4ab223c5697b468a675f8deab9759d1ae02e854f27ff4a527368bb02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
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
