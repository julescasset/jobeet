<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_8b7951f48738995674b3c425804ffa36d849d6772d4d9e9f3769ddb9086b8b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_320904d79fccf08d57118bb46f3e2bb6f55e6674214dfcefb2e29d760ba7e742 = $this->env->getExtension("native_profiler");
        $__internal_320904d79fccf08d57118bb46f3e2bb6f55e6674214dfcefb2e29d760ba7e742->enter($__internal_320904d79fccf08d57118bb46f3e2bb6f55e6674214dfcefb2e29d760ba7e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_320904d79fccf08d57118bb46f3e2bb6f55e6674214dfcefb2e29d760ba7e742->leave($__internal_320904d79fccf08d57118bb46f3e2bb6f55e6674214dfcefb2e29d760ba7e742_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a53f05485dfb3047288443da2dc906de1104769d291e9d073b9b0db1982f5571 = $this->env->getExtension("native_profiler");
        $__internal_a53f05485dfb3047288443da2dc906de1104769d291e9d073b9b0db1982f5571->enter($__internal_a53f05485dfb3047288443da2dc906de1104769d291e9d073b9b0db1982f5571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_a53f05485dfb3047288443da2dc906de1104769d291e9d073b9b0db1982f5571->leave($__internal_a53f05485dfb3047288443da2dc906de1104769d291e9d073b9b0db1982f5571_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_09dec4eb8481904e8f9bc81489d23c81db515b20b68c36fbccfa0e2c3f353a38 = $this->env->getExtension("native_profiler");
        $__internal_09dec4eb8481904e8f9bc81489d23c81db515b20b68c36fbccfa0e2c3f353a38->enter($__internal_09dec4eb8481904e8f9bc81489d23c81db515b20b68c36fbccfa0e2c3f353a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_09dec4eb8481904e8f9bc81489d23c81db515b20b68c36fbccfa0e2c3f353a38->leave($__internal_09dec4eb8481904e8f9bc81489d23c81db515b20b68c36fbccfa0e2c3f353a38_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3a3633298efeaa7cf435193400f1344280dbccf99f461405bddd87e54b5c8f59 = $this->env->getExtension("native_profiler");
        $__internal_3a3633298efeaa7cf435193400f1344280dbccf99f461405bddd87e54b5c8f59->enter($__internal_3a3633298efeaa7cf435193400f1344280dbccf99f461405bddd87e54b5c8f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_3a3633298efeaa7cf435193400f1344280dbccf99f461405bddd87e54b5c8f59->leave($__internal_3a3633298efeaa7cf435193400f1344280dbccf99f461405bddd87e54b5c8f59_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_60370c6bfa15cd2b3003be5ca48afa28134f9c43c2b0428faef11d5aec9063bb = $this->env->getExtension("native_profiler");
        $__internal_60370c6bfa15cd2b3003be5ca48afa28134f9c43c2b0428faef11d5aec9063bb->enter($__internal_60370c6bfa15cd2b3003be5ca48afa28134f9c43c2b0428faef11d5aec9063bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_60370c6bfa15cd2b3003be5ca48afa28134f9c43c2b0428faef11d5aec9063bb->leave($__internal_60370c6bfa15cd2b3003be5ca48afa28134f9c43c2b0428faef11d5aec9063bb_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_88862f256a2b352578464a48dcc09d9c5d8fb79ae25ebccd76a3ead8af064644 = $this->env->getExtension("native_profiler");
        $__internal_88862f256a2b352578464a48dcc09d9c5d8fb79ae25ebccd76a3ead8af064644->enter($__internal_88862f256a2b352578464a48dcc09d9c5d8fb79ae25ebccd76a3ead8af064644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_88862f256a2b352578464a48dcc09d9c5d8fb79ae25ebccd76a3ead8af064644->leave($__internal_88862f256a2b352578464a48dcc09d9c5d8fb79ae25ebccd76a3ead8af064644_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
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
