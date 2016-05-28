<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_6ce1283e971e660998b1dfb128cd820e6e6ba625fac3e7dbc63ac7cb49398618 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61458900bf0b8b9184d643ddaf2231e8559e4aed5883801fc5237a95d719b936 = $this->env->getExtension("native_profiler");
        $__internal_61458900bf0b8b9184d643ddaf2231e8559e4aed5883801fc5237a95d719b936->enter($__internal_61458900bf0b8b9184d643ddaf2231e8559e4aed5883801fc5237a95d719b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61458900bf0b8b9184d643ddaf2231e8559e4aed5883801fc5237a95d719b936->leave($__internal_61458900bf0b8b9184d643ddaf2231e8559e4aed5883801fc5237a95d719b936_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a8089877576f599207ea35db5f98e99bfeaecfcbebbd65cc063da3392f570181 = $this->env->getExtension("native_profiler");
        $__internal_a8089877576f599207ea35db5f98e99bfeaecfcbebbd65cc063da3392f570181->enter($__internal_a8089877576f599207ea35db5f98e99bfeaecfcbebbd65cc063da3392f570181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_a8089877576f599207ea35db5f98e99bfeaecfcbebbd65cc063da3392f570181->leave($__internal_a8089877576f599207ea35db5f98e99bfeaecfcbebbd65cc063da3392f570181_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
