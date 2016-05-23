<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c58bd5b7092db6d8e11978729d822840b57f416571d5bce87e59490d9c647b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a271563b833047b8ce33e8dfbb2c61a91e95d7a34d595c480b850b2efbb931bd = $this->env->getExtension("native_profiler");
        $__internal_a271563b833047b8ce33e8dfbb2c61a91e95d7a34d595c480b850b2efbb931bd->enter($__internal_a271563b833047b8ce33e8dfbb2c61a91e95d7a34d595c480b850b2efbb931bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a271563b833047b8ce33e8dfbb2c61a91e95d7a34d595c480b850b2efbb931bd->leave($__internal_a271563b833047b8ce33e8dfbb2c61a91e95d7a34d595c480b850b2efbb931bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
