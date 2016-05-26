<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_84334ac725959d9f20d373954fe7880a8c97c809b33f7ae2704b7d679226438f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45a9b5cbb47eee5c12a84ac71bfbe5996da5f38df09ffe7858a78837baaf3276 = $this->env->getExtension("native_profiler");
        $__internal_45a9b5cbb47eee5c12a84ac71bfbe5996da5f38df09ffe7858a78837baaf3276->enter($__internal_45a9b5cbb47eee5c12a84ac71bfbe5996da5f38df09ffe7858a78837baaf3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a9b5cbb47eee5c12a84ac71bfbe5996da5f38df09ffe7858a78837baaf3276->leave($__internal_45a9b5cbb47eee5c12a84ac71bfbe5996da5f38df09ffe7858a78837baaf3276_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_75fd890c18d4b1b8a1c301cadad8b9c52011729fc2a0702d27067d9385c133ca = $this->env->getExtension("native_profiler");
        $__internal_75fd890c18d4b1b8a1c301cadad8b9c52011729fc2a0702d27067d9385c133ca->enter($__internal_75fd890c18d4b1b8a1c301cadad8b9c52011729fc2a0702d27067d9385c133ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_75fd890c18d4b1b8a1c301cadad8b9c52011729fc2a0702d27067d9385c133ca->leave($__internal_75fd890c18d4b1b8a1c301cadad8b9c52011729fc2a0702d27067d9385c133ca_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_82dabe2a450892ecddf25aad95ad0db1df3841537da67b7310f5d8a85abab72c = $this->env->getExtension("native_profiler");
        $__internal_82dabe2a450892ecddf25aad95ad0db1df3841537da67b7310f5d8a85abab72c->enter($__internal_82dabe2a450892ecddf25aad95ad0db1df3841537da67b7310f5d8a85abab72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_82dabe2a450892ecddf25aad95ad0db1df3841537da67b7310f5d8a85abab72c->leave($__internal_82dabe2a450892ecddf25aad95ad0db1df3841537da67b7310f5d8a85abab72c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
