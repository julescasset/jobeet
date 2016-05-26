<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_9f2b6e9a8c05559c87940d15fa3f781fdfd582b7baefc52092300c4ef6eae9fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_0f2a373dcd7b72a85317acd675e0f295de530fec1ea2e430af28b0c534096a30 = $this->env->getExtension("native_profiler");
        $__internal_0f2a373dcd7b72a85317acd675e0f295de530fec1ea2e430af28b0c534096a30->enter($__internal_0f2a373dcd7b72a85317acd675e0f295de530fec1ea2e430af28b0c534096a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2a373dcd7b72a85317acd675e0f295de530fec1ea2e430af28b0c534096a30->leave($__internal_0f2a373dcd7b72a85317acd675e0f295de530fec1ea2e430af28b0c534096a30_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9d44722650b8271d4fc59e5b73a7d268ec1f6370e6b2b8585ed0e28f43691a05 = $this->env->getExtension("native_profiler");
        $__internal_9d44722650b8271d4fc59e5b73a7d268ec1f6370e6b2b8585ed0e28f43691a05->enter($__internal_9d44722650b8271d4fc59e5b73a7d268ec1f6370e6b2b8585ed0e28f43691a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9d44722650b8271d4fc59e5b73a7d268ec1f6370e6b2b8585ed0e28f43691a05->leave($__internal_9d44722650b8271d4fc59e5b73a7d268ec1f6370e6b2b8585ed0e28f43691a05_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
