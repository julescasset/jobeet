<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_d7778050451f81e790ed1d1413eb9063526e92915a71e9786948b6b49c3354bb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7ee36adfbdabe8415b44ca23ac7c2bcfe5d0922f63f6398ff524560191a67b4 = $this->env->getExtension("native_profiler");
        $__internal_b7ee36adfbdabe8415b44ca23ac7c2bcfe5d0922f63f6398ff524560191a67b4->enter($__internal_b7ee36adfbdabe8415b44ca23ac7c2bcfe5d0922f63f6398ff524560191a67b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ee36adfbdabe8415b44ca23ac7c2bcfe5d0922f63f6398ff524560191a67b4->leave($__internal_b7ee36adfbdabe8415b44ca23ac7c2bcfe5d0922f63f6398ff524560191a67b4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7bdee34ff1c52f316352a66392f18a665d445a2ceabff60ce4ddad20e1583d58 = $this->env->getExtension("native_profiler");
        $__internal_7bdee34ff1c52f316352a66392f18a665d445a2ceabff60ce4ddad20e1583d58->enter($__internal_7bdee34ff1c52f316352a66392f18a665d445a2ceabff60ce4ddad20e1583d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_7bdee34ff1c52f316352a66392f18a665d445a2ceabff60ce4ddad20e1583d58->leave($__internal_7bdee34ff1c52f316352a66392f18a665d445a2ceabff60ce4ddad20e1583d58_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
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
