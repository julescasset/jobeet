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
        $__internal_11c334f615a39ef30e9a4e56c9b0c806691361042068a2dbacb0034b39bdd874 = $this->env->getExtension("native_profiler");
        $__internal_11c334f615a39ef30e9a4e56c9b0c806691361042068a2dbacb0034b39bdd874->enter($__internal_11c334f615a39ef30e9a4e56c9b0c806691361042068a2dbacb0034b39bdd874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_11c334f615a39ef30e9a4e56c9b0c806691361042068a2dbacb0034b39bdd874->leave($__internal_11c334f615a39ef30e9a4e56c9b0c806691361042068a2dbacb0034b39bdd874_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_a69d899b8f4de5878f3dfef1810043bd9816a3002188e51cb393f847ebf77ae6 = $this->env->getExtension("native_profiler");
        $__internal_a69d899b8f4de5878f3dfef1810043bd9816a3002188e51cb393f847ebf77ae6->enter($__internal_a69d899b8f4de5878f3dfef1810043bd9816a3002188e51cb393f847ebf77ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_a69d899b8f4de5878f3dfef1810043bd9816a3002188e51cb393f847ebf77ae6->leave($__internal_a69d899b8f4de5878f3dfef1810043bd9816a3002188e51cb393f847ebf77ae6_prof);

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
