<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_c369d1cb199cfb0daa6d684bfe5e91517f3d639ea91c1197ce49ea649176de9f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18164567deacf3978223f6848c6417d3984329ec3672dce61c62495441c4ee2f = $this->env->getExtension("native_profiler");
        $__internal_18164567deacf3978223f6848c6417d3984329ec3672dce61c62495441c4ee2f->enter($__internal_18164567deacf3978223f6848c6417d3984329ec3672dce61c62495441c4ee2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18164567deacf3978223f6848c6417d3984329ec3672dce61c62495441c4ee2f->leave($__internal_18164567deacf3978223f6848c6417d3984329ec3672dce61c62495441c4ee2f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_79eabac8ff1da5b83d90c2ca77319422b2e47ccdd40b7878eb0fe25e59dfea78 = $this->env->getExtension("native_profiler");
        $__internal_79eabac8ff1da5b83d90c2ca77319422b2e47ccdd40b7878eb0fe25e59dfea78->enter($__internal_79eabac8ff1da5b83d90c2ca77319422b2e47ccdd40b7878eb0fe25e59dfea78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_79eabac8ff1da5b83d90c2ca77319422b2e47ccdd40b7878eb0fe25e59dfea78->leave($__internal_79eabac8ff1da5b83d90c2ca77319422b2e47ccdd40b7878eb0fe25e59dfea78_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
