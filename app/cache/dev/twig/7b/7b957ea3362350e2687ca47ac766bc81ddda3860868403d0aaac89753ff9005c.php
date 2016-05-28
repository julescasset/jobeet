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
        $__internal_92d8c2cf56a623d6eda391fc02f95f5a483c6e6179b6fb9eb8747bb23b4aff81 = $this->env->getExtension("native_profiler");
        $__internal_92d8c2cf56a623d6eda391fc02f95f5a483c6e6179b6fb9eb8747bb23b4aff81->enter($__internal_92d8c2cf56a623d6eda391fc02f95f5a483c6e6179b6fb9eb8747bb23b4aff81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d8c2cf56a623d6eda391fc02f95f5a483c6e6179b6fb9eb8747bb23b4aff81->leave($__internal_92d8c2cf56a623d6eda391fc02f95f5a483c6e6179b6fb9eb8747bb23b4aff81_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_65fcc8455d20ed00946dcfa8164ff853f4ad9cefec20f58d9b3bd872115d0d40 = $this->env->getExtension("native_profiler");
        $__internal_65fcc8455d20ed00946dcfa8164ff853f4ad9cefec20f58d9b3bd872115d0d40->enter($__internal_65fcc8455d20ed00946dcfa8164ff853f4ad9cefec20f58d9b3bd872115d0d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_65fcc8455d20ed00946dcfa8164ff853f4ad9cefec20f58d9b3bd872115d0d40->leave($__internal_65fcc8455d20ed00946dcfa8164ff853f4ad9cefec20f58d9b3bd872115d0d40_prof);

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
