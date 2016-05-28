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
        $__internal_c37b198df8e2d06dbd76021add0e6bf3f04b6457b18d21141818889f7a8aad2d = $this->env->getExtension("native_profiler");
        $__internal_c37b198df8e2d06dbd76021add0e6bf3f04b6457b18d21141818889f7a8aad2d->enter($__internal_c37b198df8e2d06dbd76021add0e6bf3f04b6457b18d21141818889f7a8aad2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37b198df8e2d06dbd76021add0e6bf3f04b6457b18d21141818889f7a8aad2d->leave($__internal_c37b198df8e2d06dbd76021add0e6bf3f04b6457b18d21141818889f7a8aad2d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cc544fbb3f606817b72d8c64fe50669a67ee21cf4e57a2f0b4069ca153818bde = $this->env->getExtension("native_profiler");
        $__internal_cc544fbb3f606817b72d8c64fe50669a67ee21cf4e57a2f0b4069ca153818bde->enter($__internal_cc544fbb3f606817b72d8c64fe50669a67ee21cf4e57a2f0b4069ca153818bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_cc544fbb3f606817b72d8c64fe50669a67ee21cf4e57a2f0b4069ca153818bde->leave($__internal_cc544fbb3f606817b72d8c64fe50669a67ee21cf4e57a2f0b4069ca153818bde_prof);

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
