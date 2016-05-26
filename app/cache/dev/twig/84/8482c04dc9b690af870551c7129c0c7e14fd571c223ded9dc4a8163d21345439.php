<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_5c5c6bfb0699d799635c0a4db5598ce07f567e14549341af77881601317079bd extends Twig_Template
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
        $__internal_b6c006c9450cce2a3b906a3f87c4db0ad897eb19a7400a949befe0d6d1624ca1 = $this->env->getExtension("native_profiler");
        $__internal_b6c006c9450cce2a3b906a3f87c4db0ad897eb19a7400a949befe0d6d1624ca1->enter($__internal_b6c006c9450cce2a3b906a3f87c4db0ad897eb19a7400a949befe0d6d1624ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_b6c006c9450cce2a3b906a3f87c4db0ad897eb19a7400a949befe0d6d1624ca1->leave($__internal_b6c006c9450cce2a3b906a3f87c4db0ad897eb19a7400a949befe0d6d1624ca1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
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
