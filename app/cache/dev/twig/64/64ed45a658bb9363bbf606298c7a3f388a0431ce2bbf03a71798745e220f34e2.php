<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_03fa8b16c5fa0d7836de7800a33c12042283a20927ce0240e2a318a813118f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_3b1d12d1b4eff512eb4cbd3f5788e48e42347d14068002f0984f0de5acea4a21 = $this->env->getExtension("native_profiler");
        $__internal_3b1d12d1b4eff512eb4cbd3f5788e48e42347d14068002f0984f0de5acea4a21->enter($__internal_3b1d12d1b4eff512eb4cbd3f5788e48e42347d14068002f0984f0de5acea4a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1d12d1b4eff512eb4cbd3f5788e48e42347d14068002f0984f0de5acea4a21->leave($__internal_3b1d12d1b4eff512eb4cbd3f5788e48e42347d14068002f0984f0de5acea4a21_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7281390e79193b8e81380605923bdddf242db243f851c691297609aab894cd2e = $this->env->getExtension("native_profiler");
        $__internal_7281390e79193b8e81380605923bdddf242db243f851c691297609aab894cd2e->enter($__internal_7281390e79193b8e81380605923bdddf242db243f851c691297609aab894cd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_7281390e79193b8e81380605923bdddf242db243f851c691297609aab894cd2e->leave($__internal_7281390e79193b8e81380605923bdddf242db243f851c691297609aab894cd2e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
