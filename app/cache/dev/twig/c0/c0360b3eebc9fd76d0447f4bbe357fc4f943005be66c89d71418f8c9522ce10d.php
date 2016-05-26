<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_5370e0de0f6e45130c211a21eddefb6c29cbd73a3d03dd1f868482cccc360ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a9294f86455e4c85bb00068ce10828a6faf311f078cc186f3653b65278a1f52 = $this->env->getExtension("native_profiler");
        $__internal_9a9294f86455e4c85bb00068ce10828a6faf311f078cc186f3653b65278a1f52->enter($__internal_9a9294f86455e4c85bb00068ce10828a6faf311f078cc186f3653b65278a1f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a9294f86455e4c85bb00068ce10828a6faf311f078cc186f3653b65278a1f52->leave($__internal_9a9294f86455e4c85bb00068ce10828a6faf311f078cc186f3653b65278a1f52_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
