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
        $__internal_8c7b2eb8fc7fd73f68d59190c9e0aaebebdd8c82a86ff1e535ed6324560bb349 = $this->env->getExtension("native_profiler");
        $__internal_8c7b2eb8fc7fd73f68d59190c9e0aaebebdd8c82a86ff1e535ed6324560bb349->enter($__internal_8c7b2eb8fc7fd73f68d59190c9e0aaebebdd8c82a86ff1e535ed6324560bb349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c7b2eb8fc7fd73f68d59190c9e0aaebebdd8c82a86ff1e535ed6324560bb349->leave($__internal_8c7b2eb8fc7fd73f68d59190c9e0aaebebdd8c82a86ff1e535ed6324560bb349_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_05cf2ed38f4b412f8f63bb0a2e04f58f0344da7d789f97def305fba7f10207f7 = $this->env->getExtension("native_profiler");
        $__internal_05cf2ed38f4b412f8f63bb0a2e04f58f0344da7d789f97def305fba7f10207f7->enter($__internal_05cf2ed38f4b412f8f63bb0a2e04f58f0344da7d789f97def305fba7f10207f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_05cf2ed38f4b412f8f63bb0a2e04f58f0344da7d789f97def305fba7f10207f7->leave($__internal_05cf2ed38f4b412f8f63bb0a2e04f58f0344da7d789f97def305fba7f10207f7_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_0db6c131b851f0766625a1950d122d52693ed09f3f3b409bc7f76cce19ad97ae = $this->env->getExtension("native_profiler");
        $__internal_0db6c131b851f0766625a1950d122d52693ed09f3f3b409bc7f76cce19ad97ae->enter($__internal_0db6c131b851f0766625a1950d122d52693ed09f3f3b409bc7f76cce19ad97ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0db6c131b851f0766625a1950d122d52693ed09f3f3b409bc7f76cce19ad97ae->leave($__internal_0db6c131b851f0766625a1950d122d52693ed09f3f3b409bc7f76cce19ad97ae_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a75ae27fa94d12ee12d6c38e8e18ed909dcb84fc8562698f8863e97c021595f3 = $this->env->getExtension("native_profiler");
        $__internal_a75ae27fa94d12ee12d6c38e8e18ed909dcb84fc8562698f8863e97c021595f3->enter($__internal_a75ae27fa94d12ee12d6c38e8e18ed909dcb84fc8562698f8863e97c021595f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_a75ae27fa94d12ee12d6c38e8e18ed909dcb84fc8562698f8863e97c021595f3->leave($__internal_a75ae27fa94d12ee12d6c38e8e18ed909dcb84fc8562698f8863e97c021595f3_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_57d33f019385cd8906a2b2f3a4efcdc5bb94a6901cee1850ff4d2ff193c33f9b = $this->env->getExtension("native_profiler");
        $__internal_57d33f019385cd8906a2b2f3a4efcdc5bb94a6901cee1850ff4d2ff193c33f9b->enter($__internal_57d33f019385cd8906a2b2f3a4efcdc5bb94a6901cee1850ff4d2ff193c33f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_57d33f019385cd8906a2b2f3a4efcdc5bb94a6901cee1850ff4d2ff193c33f9b->leave($__internal_57d33f019385cd8906a2b2f3a4efcdc5bb94a6901cee1850ff4d2ff193c33f9b_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_24869492ff7e7ddc86c3d23983cc13f6ed49f5cd5c62b424cdbe540b82b4ef41 = $this->env->getExtension("native_profiler");
        $__internal_24869492ff7e7ddc86c3d23983cc13f6ed49f5cd5c62b424cdbe540b82b4ef41->enter($__internal_24869492ff7e7ddc86c3d23983cc13f6ed49f5cd5c62b424cdbe540b82b4ef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_24869492ff7e7ddc86c3d23983cc13f6ed49f5cd5c62b424cdbe540b82b4ef41->leave($__internal_24869492ff7e7ddc86c3d23983cc13f6ed49f5cd5c62b424cdbe540b82b4ef41_prof);

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
