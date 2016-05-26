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
        $__internal_39638dd06ed51130ed843bf45bee2823142fa0c7e52349a7bb9513ce41516320 = $this->env->getExtension("native_profiler");
        $__internal_39638dd06ed51130ed843bf45bee2823142fa0c7e52349a7bb9513ce41516320->enter($__internal_39638dd06ed51130ed843bf45bee2823142fa0c7e52349a7bb9513ce41516320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_39638dd06ed51130ed843bf45bee2823142fa0c7e52349a7bb9513ce41516320->leave($__internal_39638dd06ed51130ed843bf45bee2823142fa0c7e52349a7bb9513ce41516320_prof);

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
