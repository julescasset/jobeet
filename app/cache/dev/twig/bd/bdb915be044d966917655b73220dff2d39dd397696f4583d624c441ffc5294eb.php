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
        $__internal_443fe059ce5747868e37be8ea6d56c66e1027612bc6cdd64fe22263e40fb472d = $this->env->getExtension("native_profiler");
        $__internal_443fe059ce5747868e37be8ea6d56c66e1027612bc6cdd64fe22263e40fb472d->enter($__internal_443fe059ce5747868e37be8ea6d56c66e1027612bc6cdd64fe22263e40fb472d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_443fe059ce5747868e37be8ea6d56c66e1027612bc6cdd64fe22263e40fb472d->leave($__internal_443fe059ce5747868e37be8ea6d56c66e1027612bc6cdd64fe22263e40fb472d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b056d8bb5338193712bd0a2ecb642058b7049bc5c9734af577114e84d1281060 = $this->env->getExtension("native_profiler");
        $__internal_b056d8bb5338193712bd0a2ecb642058b7049bc5c9734af577114e84d1281060->enter($__internal_b056d8bb5338193712bd0a2ecb642058b7049bc5c9734af577114e84d1281060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b056d8bb5338193712bd0a2ecb642058b7049bc5c9734af577114e84d1281060->leave($__internal_b056d8bb5338193712bd0a2ecb642058b7049bc5c9734af577114e84d1281060_prof);

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
