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
        $__internal_e0d5a7cc1683c7cff9d89fa48aecce0359ff6361ae75e38ad6917a36c56e5aaf = $this->env->getExtension("native_profiler");
        $__internal_e0d5a7cc1683c7cff9d89fa48aecce0359ff6361ae75e38ad6917a36c56e5aaf->enter($__internal_e0d5a7cc1683c7cff9d89fa48aecce0359ff6361ae75e38ad6917a36c56e5aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d5a7cc1683c7cff9d89fa48aecce0359ff6361ae75e38ad6917a36c56e5aaf->leave($__internal_e0d5a7cc1683c7cff9d89fa48aecce0359ff6361ae75e38ad6917a36c56e5aaf_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2b20791d56a338a7c247e6570964f4681db18dcce18e6ed6127b8e1b4228ceea = $this->env->getExtension("native_profiler");
        $__internal_2b20791d56a338a7c247e6570964f4681db18dcce18e6ed6127b8e1b4228ceea->enter($__internal_2b20791d56a338a7c247e6570964f4681db18dcce18e6ed6127b8e1b4228ceea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_2b20791d56a338a7c247e6570964f4681db18dcce18e6ed6127b8e1b4228ceea->leave($__internal_2b20791d56a338a7c247e6570964f4681db18dcce18e6ed6127b8e1b4228ceea_prof);

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
