<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_1aa2f321779ff4ec9979836fa4132dd90504ea5fa31912b4e965e1f42dfb146b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0be260e3924cc5b76c929c429714c323041790e7ec1b38d8811e7afed09d9b73 = $this->env->getExtension("native_profiler");
        $__internal_0be260e3924cc5b76c929c429714c323041790e7ec1b38d8811e7afed09d9b73->enter($__internal_0be260e3924cc5b76c929c429714c323041790e7ec1b38d8811e7afed09d9b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be260e3924cc5b76c929c429714c323041790e7ec1b38d8811e7afed09d9b73->leave($__internal_0be260e3924cc5b76c929c429714c323041790e7ec1b38d8811e7afed09d9b73_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dc9706757f5a016c55ed197187f9422cd999d678b4f864e093fb040a41e56da = $this->env->getExtension("native_profiler");
        $__internal_7dc9706757f5a016c55ed197187f9422cd999d678b4f864e093fb040a41e56da->enter($__internal_7dc9706757f5a016c55ed197187f9422cd999d678b4f864e093fb040a41e56da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_7dc9706757f5a016c55ed197187f9422cd999d678b4f864e093fb040a41e56da->leave($__internal_7dc9706757f5a016c55ed197187f9422cd999d678b4f864e093fb040a41e56da_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_854b8058ba2587e79e110b4bdd7867de74823da44173eb71c3c9ac40c86364b4 = $this->env->getExtension("native_profiler");
        $__internal_854b8058ba2587e79e110b4bdd7867de74823da44173eb71c3c9ac40c86364b4->enter($__internal_854b8058ba2587e79e110b4bdd7867de74823da44173eb71c3c9ac40c86364b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_854b8058ba2587e79e110b4bdd7867de74823da44173eb71c3c9ac40c86364b4->leave($__internal_854b8058ba2587e79e110b4bdd7867de74823da44173eb71c3c9ac40c86364b4_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d9986046b55b3f02d30e70c3f4f2fc5bfea59ec02920a15688363c06d6a172a1 = $this->env->getExtension("native_profiler");
        $__internal_d9986046b55b3f02d30e70c3f4f2fc5bfea59ec02920a15688363c06d6a172a1->enter($__internal_d9986046b55b3f02d30e70c3f4f2fc5bfea59ec02920a15688363c06d6a172a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_d9986046b55b3f02d30e70c3f4f2fc5bfea59ec02920a15688363c06d6a172a1->leave($__internal_d9986046b55b3f02d30e70c3f4f2fc5bfea59ec02920a15688363c06d6a172a1_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_436f27f243f12f1a19c12e9b063909050abe391e8148b1cd1245b932ef777b9f = $this->env->getExtension("native_profiler");
        $__internal_436f27f243f12f1a19c12e9b063909050abe391e8148b1cd1245b932ef777b9f->enter($__internal_436f27f243f12f1a19c12e9b063909050abe391e8148b1cd1245b932ef777b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_436f27f243f12f1a19c12e9b063909050abe391e8148b1cd1245b932ef777b9f->leave($__internal_436f27f243f12f1a19c12e9b063909050abe391e8148b1cd1245b932ef777b9f_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_27c9f35e717a2d603baae4fefceee0087aff95aacd411630503c37fb6a5edb23 = $this->env->getExtension("native_profiler");
        $__internal_27c9f35e717a2d603baae4fefceee0087aff95aacd411630503c37fb6a5edb23->enter($__internal_27c9f35e717a2d603baae4fefceee0087aff95aacd411630503c37fb6a5edb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_27c9f35e717a2d603baae4fefceee0087aff95aacd411630503c37fb6a5edb23->leave($__internal_27c9f35e717a2d603baae4fefceee0087aff95aacd411630503c37fb6a5edb23_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
