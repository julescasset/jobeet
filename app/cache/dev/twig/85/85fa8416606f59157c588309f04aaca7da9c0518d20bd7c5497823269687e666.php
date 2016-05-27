<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_79dbe61d9cd85a66e62a50b11071c81b1efe575786ede1bda1c69ea4b7010ea4 extends Twig_Template
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
        $__internal_81d86efd9dc48f9482152cd7b3fada0ec5fa5dd24e332878beef111a53005309 = $this->env->getExtension("native_profiler");
        $__internal_81d86efd9dc48f9482152cd7b3fada0ec5fa5dd24e332878beef111a53005309->enter($__internal_81d86efd9dc48f9482152cd7b3fada0ec5fa5dd24e332878beef111a53005309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_81d86efd9dc48f9482152cd7b3fada0ec5fa5dd24e332878beef111a53005309->leave($__internal_81d86efd9dc48f9482152cd7b3fada0ec5fa5dd24e332878beef111a53005309_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
