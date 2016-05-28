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
        $__internal_14789e84501273d8a07fa1db5a0c2ff5c32d4939f14c4e9f8b49451419bd3666 = $this->env->getExtension("native_profiler");
        $__internal_14789e84501273d8a07fa1db5a0c2ff5c32d4939f14c4e9f8b49451419bd3666->enter($__internal_14789e84501273d8a07fa1db5a0c2ff5c32d4939f14c4e9f8b49451419bd3666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14789e84501273d8a07fa1db5a0c2ff5c32d4939f14c4e9f8b49451419bd3666->leave($__internal_14789e84501273d8a07fa1db5a0c2ff5c32d4939f14c4e9f8b49451419bd3666_prof);

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
