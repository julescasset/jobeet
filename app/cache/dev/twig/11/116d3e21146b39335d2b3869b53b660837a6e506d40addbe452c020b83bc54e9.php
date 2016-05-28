<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_a4b5c98bb33bcfbd388aaa5e87a031f028623f2b49f87306874c3340ed25a3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cb6645d6f2a2e641504f1437031473f31025375a87360b92457dccd87dc153a = $this->env->getExtension("native_profiler");
        $__internal_8cb6645d6f2a2e641504f1437031473f31025375a87360b92457dccd87dc153a->enter($__internal_8cb6645d6f2a2e641504f1437031473f31025375a87360b92457dccd87dc153a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb6645d6f2a2e641504f1437031473f31025375a87360b92457dccd87dc153a->leave($__internal_8cb6645d6f2a2e641504f1437031473f31025375a87360b92457dccd87dc153a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
