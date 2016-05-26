<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_6e993c40b424c7b7181eaaf5049e32b87e1ecf109219fd9da28176215dfdc051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c95e36df3a121d45f88e6995f52681e353bdea451dabe5f6567a02a840051b97 = $this->env->getExtension("native_profiler");
        $__internal_c95e36df3a121d45f88e6995f52681e353bdea451dabe5f6567a02a840051b97->enter($__internal_c95e36df3a121d45f88e6995f52681e353bdea451dabe5f6567a02a840051b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c95e36df3a121d45f88e6995f52681e353bdea451dabe5f6567a02a840051b97->leave($__internal_c95e36df3a121d45f88e6995f52681e353bdea451dabe5f6567a02a840051b97_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_11f5bd0b90a4de249caf326b5db5a8b1f92aa89abd447f7c9fdd46b6c78edf3f = $this->env->getExtension("native_profiler");
        $__internal_11f5bd0b90a4de249caf326b5db5a8b1f92aa89abd447f7c9fdd46b6c78edf3f->enter($__internal_11f5bd0b90a4de249caf326b5db5a8b1f92aa89abd447f7c9fdd46b6c78edf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_11f5bd0b90a4de249caf326b5db5a8b1f92aa89abd447f7c9fdd46b6c78edf3f->leave($__internal_11f5bd0b90a4de249caf326b5db5a8b1f92aa89abd447f7c9fdd46b6c78edf3f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
