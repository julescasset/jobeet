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
        $__internal_84b127f8c3492e77512a17b35508486a1827e67f7c1218217688f531e9c1d3db = $this->env->getExtension("native_profiler");
        $__internal_84b127f8c3492e77512a17b35508486a1827e67f7c1218217688f531e9c1d3db->enter($__internal_84b127f8c3492e77512a17b35508486a1827e67f7c1218217688f531e9c1d3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b127f8c3492e77512a17b35508486a1827e67f7c1218217688f531e9c1d3db->leave($__internal_84b127f8c3492e77512a17b35508486a1827e67f7c1218217688f531e9c1d3db_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bff1bf5fc9db28ffe228872a3310916f2ed54f5008a77d2ae4c8d89451652122 = $this->env->getExtension("native_profiler");
        $__internal_bff1bf5fc9db28ffe228872a3310916f2ed54f5008a77d2ae4c8d89451652122->enter($__internal_bff1bf5fc9db28ffe228872a3310916f2ed54f5008a77d2ae4c8d89451652122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_bff1bf5fc9db28ffe228872a3310916f2ed54f5008a77d2ae4c8d89451652122->leave($__internal_bff1bf5fc9db28ffe228872a3310916f2ed54f5008a77d2ae4c8d89451652122_prof);

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
