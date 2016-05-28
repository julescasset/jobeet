<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_b6d70e953e526e8305fef1915e3663d7755876161cac5d5ec45ee426d1fbf86d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f2bb503e20f62e34a90e9411a7bcf743ed6f0704aeb887753845cfef8b8cdc7 = $this->env->getExtension("native_profiler");
        $__internal_6f2bb503e20f62e34a90e9411a7bcf743ed6f0704aeb887753845cfef8b8cdc7->enter($__internal_6f2bb503e20f62e34a90e9411a7bcf743ed6f0704aeb887753845cfef8b8cdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f2bb503e20f62e34a90e9411a7bcf743ed6f0704aeb887753845cfef8b8cdc7->leave($__internal_6f2bb503e20f62e34a90e9411a7bcf743ed6f0704aeb887753845cfef8b8cdc7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_524d21ac7a16ae0989bfe39a4ccafaa1b70af1aba442f3928b2fff5f294dd8dd = $this->env->getExtension("native_profiler");
        $__internal_524d21ac7a16ae0989bfe39a4ccafaa1b70af1aba442f3928b2fff5f294dd8dd->enter($__internal_524d21ac7a16ae0989bfe39a4ccafaa1b70af1aba442f3928b2fff5f294dd8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_524d21ac7a16ae0989bfe39a4ccafaa1b70af1aba442f3928b2fff5f294dd8dd->leave($__internal_524d21ac7a16ae0989bfe39a4ccafaa1b70af1aba442f3928b2fff5f294dd8dd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
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
