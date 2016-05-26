<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3c2f06cdaafd70ce6d34fd2fae08821909ba388adf2536c813d8ced81132cea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1f9c4ed43a24a7d54331c4b0e5bce4d7979461d64261864bbc84d2cc47aa0a3 = $this->env->getExtension("native_profiler");
        $__internal_b1f9c4ed43a24a7d54331c4b0e5bce4d7979461d64261864bbc84d2cc47aa0a3->enter($__internal_b1f9c4ed43a24a7d54331c4b0e5bce4d7979461d64261864bbc84d2cc47aa0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_b1f9c4ed43a24a7d54331c4b0e5bce4d7979461d64261864bbc84d2cc47aa0a3->leave($__internal_b1f9c4ed43a24a7d54331c4b0e5bce4d7979461d64261864bbc84d2cc47aa0a3_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_b95d36195fc5f1380faa20e095eb6741d3b63912822c9aa528df41319c81a04f = $this->env->getExtension("native_profiler");
        $__internal_b95d36195fc5f1380faa20e095eb6741d3b63912822c9aa528df41319c81a04f->enter($__internal_b95d36195fc5f1380faa20e095eb6741d3b63912822c9aa528df41319c81a04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_b95d36195fc5f1380faa20e095eb6741d3b63912822c9aa528df41319c81a04f->leave($__internal_b95d36195fc5f1380faa20e095eb6741d3b63912822c9aa528df41319c81a04f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
