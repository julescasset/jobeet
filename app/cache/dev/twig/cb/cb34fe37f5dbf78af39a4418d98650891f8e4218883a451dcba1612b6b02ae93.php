<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_c1f0c88dc27ba4c8b2faa42c4817e00286c14028572cb2fcad61d88b26dd6fdb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4666da51711b7657f0ee640f2911146a28a4754b83a967d503a95a541903819 = $this->env->getExtension("native_profiler");
        $__internal_d4666da51711b7657f0ee640f2911146a28a4754b83a967d503a95a541903819->enter($__internal_d4666da51711b7657f0ee640f2911146a28a4754b83a967d503a95a541903819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4666da51711b7657f0ee640f2911146a28a4754b83a967d503a95a541903819->leave($__internal_d4666da51711b7657f0ee640f2911146a28a4754b83a967d503a95a541903819_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a28120b0da85616fc22fffa94bbf4667d02931ccb17d353887961b7e91a27c27 = $this->env->getExtension("native_profiler");
        $__internal_a28120b0da85616fc22fffa94bbf4667d02931ccb17d353887961b7e91a27c27->enter($__internal_a28120b0da85616fc22fffa94bbf4667d02931ccb17d353887961b7e91a27c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_a28120b0da85616fc22fffa94bbf4667d02931ccb17d353887961b7e91a27c27->leave($__internal_a28120b0da85616fc22fffa94bbf4667d02931ccb17d353887961b7e91a27c27_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
