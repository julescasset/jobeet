<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_6ce1283e971e660998b1dfb128cd820e6e6ba625fac3e7dbc63ac7cb49398618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_917fb0eaa4c6b6005d645e4ed74f73c8eef9b2fe1e8be35e0cf55ce9d1114c79 = $this->env->getExtension("native_profiler");
        $__internal_917fb0eaa4c6b6005d645e4ed74f73c8eef9b2fe1e8be35e0cf55ce9d1114c79->enter($__internal_917fb0eaa4c6b6005d645e4ed74f73c8eef9b2fe1e8be35e0cf55ce9d1114c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917fb0eaa4c6b6005d645e4ed74f73c8eef9b2fe1e8be35e0cf55ce9d1114c79->leave($__internal_917fb0eaa4c6b6005d645e4ed74f73c8eef9b2fe1e8be35e0cf55ce9d1114c79_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e6bf264d576a090df21ba1a77482830897917546248692b35a9c566614daf17d = $this->env->getExtension("native_profiler");
        $__internal_e6bf264d576a090df21ba1a77482830897917546248692b35a9c566614daf17d->enter($__internal_e6bf264d576a090df21ba1a77482830897917546248692b35a9c566614daf17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e6bf264d576a090df21ba1a77482830897917546248692b35a9c566614daf17d->leave($__internal_e6bf264d576a090df21ba1a77482830897917546248692b35a9c566614daf17d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
