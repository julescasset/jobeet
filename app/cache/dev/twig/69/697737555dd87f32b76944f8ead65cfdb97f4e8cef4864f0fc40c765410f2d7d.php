<?php

/* @SonataAdmin/CRUD/list__action_show.html.twig */
class __TwigTemplate_d279969a227f9a2ce86b7d0b8ecdd9684f7e39ee0056ae9b5522b98134fefb7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a855db581907da63a899de8bf5158b1cd03083ceff91ce4311cb9da8d8a09195 = $this->env->getExtension("native_profiler");
        $__internal_a855db581907da63a899de8bf5158b1cd03083ceff91ce4311cb9da8d8a09195->enter($__internal_a855db581907da63a899de8bf5158b1cd03083ceff91ce4311cb9da8d8a09195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_show.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-search-plus\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_a855db581907da63a899de8bf5158b1cd03083ceff91ce4311cb9da8d8a09195->leave($__internal_a855db581907da63a899de8bf5158b1cd03083ceff91ce4311cb9da8d8a09195_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.isGranted('VIEW', object) and admin.hasRoute('show') %}*/
/*     <a href="{{ admin.generateObjectUrl('show', object) }}" class="btn btn-sm btn-default view_link" title="{{ 'action_show'|trans({}, 'SonataAdminBundle') }}">*/
/*         <i class="fa fa-search-plus"></i>*/
/*         {{ 'action_show'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
/* */
