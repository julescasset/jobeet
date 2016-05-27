<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_616c7edf78e2e28cf6e4e1c407ba2fd457f167343847badcc2d68d024606d180 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caea995d1ddb30f91ad584a736ae5a21c826d0346e5c6754b0fb6fb40379b857 = $this->env->getExtension("native_profiler");
        $__internal_caea995d1ddb30f91ad584a736ae5a21c826d0346e5c6754b0fb6fb40379b857->enter($__internal_caea995d1ddb30f91ad584a736ae5a21c826d0346e5c6754b0fb6fb40379b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caea995d1ddb30f91ad584a736ae5a21c826d0346e5c6754b0fb6fb40379b857->leave($__internal_caea995d1ddb30f91ad584a736ae5a21c826d0346e5c6754b0fb6fb40379b857_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_61d4645d0b09ce6ccf97c65a4b9529a455ff0b2a2c99617a80f293d4f15d5cd6 = $this->env->getExtension("native_profiler");
        $__internal_61d4645d0b09ce6ccf97c65a4b9529a455ff0b2a2c99617a80f293d4f15d5cd6->enter($__internal_61d4645d0b09ce6ccf97c65a4b9529a455ff0b2a2c99617a80f293d4f15d5cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_61d4645d0b09ce6ccf97c65a4b9529a455ff0b2a2c99617a80f293d4f15d5cd6->leave($__internal_61d4645d0b09ce6ccf97c65a4b9529a455ff0b2a2c99617a80f293d4f15d5cd6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
