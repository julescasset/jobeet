<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_a1baf7d6656b0b55b78ec4a4c2f9e10d6320d7b51f91f6ef709f7b9f24879c3b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62dbcb72c9b7e8106fc0cb69ceaccaf83bf88c76fd4e8d98f6ec8f2df7f3f30b = $this->env->getExtension("native_profiler");
        $__internal_62dbcb72c9b7e8106fc0cb69ceaccaf83bf88c76fd4e8d98f6ec8f2df7f3f30b->enter($__internal_62dbcb72c9b7e8106fc0cb69ceaccaf83bf88c76fd4e8d98f6ec8f2df7f3f30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62dbcb72c9b7e8106fc0cb69ceaccaf83bf88c76fd4e8d98f6ec8f2df7f3f30b->leave($__internal_62dbcb72c9b7e8106fc0cb69ceaccaf83bf88c76fd4e8d98f6ec8f2df7f3f30b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b1fe380e16c42b9a3842c467573ac1a8e9e0eb5fc05385e6a7693dcf74fc1791 = $this->env->getExtension("native_profiler");
        $__internal_b1fe380e16c42b9a3842c467573ac1a8e9e0eb5fc05385e6a7693dcf74fc1791->enter($__internal_b1fe380e16c42b9a3842c467573ac1a8e9e0eb5fc05385e6a7693dcf74fc1791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b1fe380e16c42b9a3842c467573ac1a8e9e0eb5fc05385e6a7693dcf74fc1791->leave($__internal_b1fe380e16c42b9a3842c467573ac1a8e9e0eb5fc05385e6a7693dcf74fc1791_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% for key, val in value %}*/
/*         [{{ key }} => {{ val }}]*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
