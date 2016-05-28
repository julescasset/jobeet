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
        $__internal_849f7c866cb8cddcc12c544d9b495155a4ffa6d2f43bd4ea02831fb2be3de245 = $this->env->getExtension("native_profiler");
        $__internal_849f7c866cb8cddcc12c544d9b495155a4ffa6d2f43bd4ea02831fb2be3de245->enter($__internal_849f7c866cb8cddcc12c544d9b495155a4ffa6d2f43bd4ea02831fb2be3de245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849f7c866cb8cddcc12c544d9b495155a4ffa6d2f43bd4ea02831fb2be3de245->leave($__internal_849f7c866cb8cddcc12c544d9b495155a4ffa6d2f43bd4ea02831fb2be3de245_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5a3f4cbb91eaa0d1fe86200b9c9a1cf2e8907b5f0e3efba4144101531c1ec47b = $this->env->getExtension("native_profiler");
        $__internal_5a3f4cbb91eaa0d1fe86200b9c9a1cf2e8907b5f0e3efba4144101531c1ec47b->enter($__internal_5a3f4cbb91eaa0d1fe86200b9c9a1cf2e8907b5f0e3efba4144101531c1ec47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_5a3f4cbb91eaa0d1fe86200b9c9a1cf2e8907b5f0e3efba4144101531c1ec47b->leave($__internal_5a3f4cbb91eaa0d1fe86200b9c9a1cf2e8907b5f0e3efba4144101531c1ec47b_prof);

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
