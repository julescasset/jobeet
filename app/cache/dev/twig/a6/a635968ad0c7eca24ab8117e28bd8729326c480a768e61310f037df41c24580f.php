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
        $__internal_f882743111250632b8ca848a00ae7b12ad5011411a23a7e0fab2789e9f3ef4e2 = $this->env->getExtension("native_profiler");
        $__internal_f882743111250632b8ca848a00ae7b12ad5011411a23a7e0fab2789e9f3ef4e2->enter($__internal_f882743111250632b8ca848a00ae7b12ad5011411a23a7e0fab2789e9f3ef4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f882743111250632b8ca848a00ae7b12ad5011411a23a7e0fab2789e9f3ef4e2->leave($__internal_f882743111250632b8ca848a00ae7b12ad5011411a23a7e0fab2789e9f3ef4e2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_50434f9e236ac17a459ca4025845c4bfbe87218b6d8a1bb0eee093139fd2bfa2 = $this->env->getExtension("native_profiler");
        $__internal_50434f9e236ac17a459ca4025845c4bfbe87218b6d8a1bb0eee093139fd2bfa2->enter($__internal_50434f9e236ac17a459ca4025845c4bfbe87218b6d8a1bb0eee093139fd2bfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_50434f9e236ac17a459ca4025845c4bfbe87218b6d8a1bb0eee093139fd2bfa2->leave($__internal_50434f9e236ac17a459ca4025845c4bfbe87218b6d8a1bb0eee093139fd2bfa2_prof);

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
