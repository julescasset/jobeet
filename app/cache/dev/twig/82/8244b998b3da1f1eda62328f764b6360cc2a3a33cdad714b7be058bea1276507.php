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
        $__internal_f33ecd76a58a964bb049e046e4d51c10e517468a1e242db5194c35e76eb08d19 = $this->env->getExtension("native_profiler");
        $__internal_f33ecd76a58a964bb049e046e4d51c10e517468a1e242db5194c35e76eb08d19->enter($__internal_f33ecd76a58a964bb049e046e4d51c10e517468a1e242db5194c35e76eb08d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_f33ecd76a58a964bb049e046e4d51c10e517468a1e242db5194c35e76eb08d19->leave($__internal_f33ecd76a58a964bb049e046e4d51c10e517468a1e242db5194c35e76eb08d19_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_418e06a504b9d69d2bd36109af20f9d9149472781ee5d33c71498421b391b426 = $this->env->getExtension("native_profiler");
        $__internal_418e06a504b9d69d2bd36109af20f9d9149472781ee5d33c71498421b391b426->enter($__internal_418e06a504b9d69d2bd36109af20f9d9149472781ee5d33c71498421b391b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_418e06a504b9d69d2bd36109af20f9d9149472781ee5d33c71498421b391b426->leave($__internal_418e06a504b9d69d2bd36109af20f9d9149472781ee5d33c71498421b391b426_prof);

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
