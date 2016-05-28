<?php

/* @SonataBlock/Block/block_template.html.twig */
class __TwigTemplate_78716e16164ac8525d60c064d84297de86319c209f007b352fe9dd6233e3e435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eab73cbfc705bf9702d5f0d9425e5e81b17666b03788cc8c5d967f5752c6587b = $this->env->getExtension("native_profiler");
        $__internal_eab73cbfc705bf9702d5f0d9425e5e81b17666b03788cc8c5d967f5752c6587b->enter($__internal_eab73cbfc705bf9702d5f0d9425e5e81b17666b03788cc8c5d967f5752c6587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab73cbfc705bf9702d5f0d9425e5e81b17666b03788cc8c5d967f5752c6587b->leave($__internal_eab73cbfc705bf9702d5f0d9425e5e81b17666b03788cc8c5d967f5752c6587b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5df09c01754f58e57362d5b4f61a7b661da19cd54f11afd59b3ae1890944d2d1 = $this->env->getExtension("native_profiler");
        $__internal_5df09c01754f58e57362d5b4f61a7b661da19cd54f11afd59b3ae1890944d2d1->enter($__internal_5df09c01754f58e57362d5b4f61a7b661da19cd54f11afd59b3ae1890944d2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_5df09c01754f58e57362d5b4f61a7b661da19cd54f11afd59b3ae1890944d2d1->leave($__internal_5df09c01754f58e57362d5b4f61a7b661da19cd54f11afd59b3ae1890944d2d1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 33,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <h3>Sonata Block Template</h3>*/
/*     If you want to use the <code>sonata.block.template</code> block type, you need to create a template :*/
/* */
/*     <pre>*/
/*         {%- verbatim -%}*/
/* {# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}*/
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     &lt;h3&gt;The block title&lt;/h3&gt;*/
/*     &lt;p&gt;*/
/*         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus*/
/*         vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,*/
/*         mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet*/
/*         massa volutpat auctor.*/
/*     &lt;/p&gt;*/
/* {% endblock %}*/
/*         {%- endverbatim -%}*/
/*     </pre>*/
/* */
/*     And then call it from a template with the <code>sonata_block_render</code> helper:*/
/* */
/*     <pre>*/
/* {%- verbatim -%}*/
/* {{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {*/
/*     'template': 'MyBundle:Block:my_block_feature_1.html.twig',*/
/* }) }}*/
/* {%- endverbatim -%}*/
/*     </pre>*/
/* {% endblock %}*/
/* */
