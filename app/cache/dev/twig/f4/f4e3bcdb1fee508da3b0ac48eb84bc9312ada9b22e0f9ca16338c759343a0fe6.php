<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_04d8a9ec3e974f1c5ea8a0a7f476694e416f2a9e40d6daf0a76ca39949f7dcdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e345649d9c509ab02ab9376c6efb381f5b77c3cfafe064e1a37ba3e80f55663a = $this->env->getExtension("native_profiler");
        $__internal_e345649d9c509ab02ab9376c6efb381f5b77c3cfafe064e1a37ba3e80f55663a->enter($__internal_e345649d9c509ab02ab9376c6efb381f5b77c3cfafe064e1a37ba3e80f55663a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e345649d9c509ab02ab9376c6efb381f5b77c3cfafe064e1a37ba3e80f55663a->leave($__internal_e345649d9c509ab02ab9376c6efb381f5b77c3cfafe064e1a37ba3e80f55663a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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