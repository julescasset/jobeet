<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_e45b95cc8a42ccda92b77805defd7196d10d344e90235c159251db8d9b1c178a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55ef3621724db05c52b9449d34ce2f770c372994569fd274cd03eada5e223161 = $this->env->getExtension("native_profiler");
        $__internal_55ef3621724db05c52b9449d34ce2f770c372994569fd274cd03eada5e223161->enter($__internal_55ef3621724db05c52b9449d34ce2f770c372994569fd274cd03eada5e223161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ef3621724db05c52b9449d34ce2f770c372994569fd274cd03eada5e223161->leave($__internal_55ef3621724db05c52b9449d34ce2f770c372994569fd274cd03eada5e223161_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
