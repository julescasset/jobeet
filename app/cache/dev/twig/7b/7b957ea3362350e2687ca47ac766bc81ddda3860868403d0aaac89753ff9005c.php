<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_fd0bee7ec1b439c72d8e67540f615c3f4be6eebb7013475c507d8b411fc207a5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_584bc6df43abe636a8e4604074fa80e3854bbdd31dd22f7891db8f7a024827a7 = $this->env->getExtension("native_profiler");
        $__internal_584bc6df43abe636a8e4604074fa80e3854bbdd31dd22f7891db8f7a024827a7->enter($__internal_584bc6df43abe636a8e4604074fa80e3854bbdd31dd22f7891db8f7a024827a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_584bc6df43abe636a8e4604074fa80e3854bbdd31dd22f7891db8f7a024827a7->leave($__internal_584bc6df43abe636a8e4604074fa80e3854bbdd31dd22f7891db8f7a024827a7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_29cba68ec27b6cbcd9ac056382af3744a0c45abf7ef99e58f9d2cf15af33d5ad = $this->env->getExtension("native_profiler");
        $__internal_29cba68ec27b6cbcd9ac056382af3744a0c45abf7ef99e58f9d2cf15af33d5ad->enter($__internal_29cba68ec27b6cbcd9ac056382af3744a0c45abf7ef99e58f9d2cf15af33d5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_29cba68ec27b6cbcd9ac056382af3744a0c45abf7ef99e58f9d2cf15af33d5ad->leave($__internal_29cba68ec27b6cbcd9ac056382af3744a0c45abf7ef99e58f9d2cf15af33d5ad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
