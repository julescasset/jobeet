<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_1ed5cf843f2b9d1fbc7e1b59db8bd0647897a677126a160a1bee24a6b5fc6695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b448935d62618a78225092197497d6360d156339b14015d68757086222d581 = $this->env->getExtension("native_profiler");
        $__internal_13b448935d62618a78225092197497d6360d156339b14015d68757086222d581->enter($__internal_13b448935d62618a78225092197497d6360d156339b14015d68757086222d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b448935d62618a78225092197497d6360d156339b14015d68757086222d581->leave($__internal_13b448935d62618a78225092197497d6360d156339b14015d68757086222d581_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
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
