<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_345982176747d812fcdad8784338529660174b88778df52e379988c574b12fb7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7ab08a7c85959b0026d0f8b43d740761abb9eb9456dee72a6eade37ae6c3a9c = $this->env->getExtension("native_profiler");
        $__internal_d7ab08a7c85959b0026d0f8b43d740761abb9eb9456dee72a6eade37ae6c3a9c->enter($__internal_d7ab08a7c85959b0026d0f8b43d740761abb9eb9456dee72a6eade37ae6c3a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ab08a7c85959b0026d0f8b43d740761abb9eb9456dee72a6eade37ae6c3a9c->leave($__internal_d7ab08a7c85959b0026d0f8b43d740761abb9eb9456dee72a6eade37ae6c3a9c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c4003f869db33429a7e530447e0a6bcb37420d3e9d546fa4aa766d125a25ce79 = $this->env->getExtension("native_profiler");
        $__internal_c4003f869db33429a7e530447e0a6bcb37420d3e9d546fa4aa766d125a25ce79->enter($__internal_c4003f869db33429a7e530447e0a6bcb37420d3e9d546fa4aa766d125a25ce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_c4003f869db33429a7e530447e0a6bcb37420d3e9d546fa4aa766d125a25ce79->leave($__internal_c4003f869db33429a7e530447e0a6bcb37420d3e9d546fa4aa766d125a25ce79_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-default" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
