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
        $__internal_fba9eb0f6506e41398f53a3e440edbbe74c9b04d6e8ebeace2a29a8e67335293 = $this->env->getExtension("native_profiler");
        $__internal_fba9eb0f6506e41398f53a3e440edbbe74c9b04d6e8ebeace2a29a8e67335293->enter($__internal_fba9eb0f6506e41398f53a3e440edbbe74c9b04d6e8ebeace2a29a8e67335293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fba9eb0f6506e41398f53a3e440edbbe74c9b04d6e8ebeace2a29a8e67335293->leave($__internal_fba9eb0f6506e41398f53a3e440edbbe74c9b04d6e8ebeace2a29a8e67335293_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fd8eff7470be53c22049e0986e74681ba354f26a8b2a0fdf5342694ebd8c21ad = $this->env->getExtension("native_profiler");
        $__internal_fd8eff7470be53c22049e0986e74681ba354f26a8b2a0fdf5342694ebd8c21ad->enter($__internal_fd8eff7470be53c22049e0986e74681ba354f26a8b2a0fdf5342694ebd8c21ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_fd8eff7470be53c22049e0986e74681ba354f26a8b2a0fdf5342694ebd8c21ad->leave($__internal_fd8eff7470be53c22049e0986e74681ba354f26a8b2a0fdf5342694ebd8c21ad_prof);

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
