<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_5ed524498ba508fb56194bdafec4865a35c93eb754d20b6dbf82b34422ef1ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
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
        $__internal_26b6a59e41fbcf73ff234bca9cd8fd12b89f366ec7dc3a043d5494a81dd98c6b = $this->env->getExtension("native_profiler");
        $__internal_26b6a59e41fbcf73ff234bca9cd8fd12b89f366ec7dc3a043d5494a81dd98c6b->enter($__internal_26b6a59e41fbcf73ff234bca9cd8fd12b89f366ec7dc3a043d5494a81dd98c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b6a59e41fbcf73ff234bca9cd8fd12b89f366ec7dc3a043d5494a81dd98c6b->leave($__internal_26b6a59e41fbcf73ff234bca9cd8fd12b89f366ec7dc3a043d5494a81dd98c6b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3c0279ebe036524e6f7d2ea701adc378900212fa509d92a84f08f2a0bd5eacea = $this->env->getExtension("native_profiler");
        $__internal_3c0279ebe036524e6f7d2ea701adc378900212fa509d92a84f08f2a0bd5eacea->enter($__internal_3c0279ebe036524e6f7d2ea701adc378900212fa509d92a84f08f2a0bd5eacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_3c0279ebe036524e6f7d2ea701adc378900212fa509d92a84f08f2a0bd5eacea->leave($__internal_3c0279ebe036524e6f7d2ea701adc378900212fa509d92a84f08f2a0bd5eacea_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
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
