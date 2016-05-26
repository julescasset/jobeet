<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_9ce8eb6ca174c16aace385165ddaa946e507f012bc231907df6a1d9e55f6895b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_9e2ceea8fee4568f3bee1e3d7d2510d7013bb39871318aaa8e67ee1a63c9b3c7 = $this->env->getExtension("native_profiler");
        $__internal_9e2ceea8fee4568f3bee1e3d7d2510d7013bb39871318aaa8e67ee1a63c9b3c7->enter($__internal_9e2ceea8fee4568f3bee1e3d7d2510d7013bb39871318aaa8e67ee1a63c9b3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e2ceea8fee4568f3bee1e3d7d2510d7013bb39871318aaa8e67ee1a63c9b3c7->leave($__internal_9e2ceea8fee4568f3bee1e3d7d2510d7013bb39871318aaa8e67ee1a63c9b3c7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_24f1f11cbd248096e9ffcc10c30c8dbeb7cc9cf6a64d8dcafe99ba25de377333 = $this->env->getExtension("native_profiler");
        $__internal_24f1f11cbd248096e9ffcc10c30c8dbeb7cc9cf6a64d8dcafe99ba25de377333->enter($__internal_24f1f11cbd248096e9ffcc10c30c8dbeb7cc9cf6a64d8dcafe99ba25de377333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_24f1f11cbd248096e9ffcc10c30c8dbeb7cc9cf6a64d8dcafe99ba25de377333->leave($__internal_24f1f11cbd248096e9ffcc10c30c8dbeb7cc9cf6a64d8dcafe99ba25de377333_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
