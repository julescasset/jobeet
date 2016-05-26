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
        $__internal_0eec8b5595b7eab274531b0f47a8e5effaa8a21448ffb295a55e89d05beaae19 = $this->env->getExtension("native_profiler");
        $__internal_0eec8b5595b7eab274531b0f47a8e5effaa8a21448ffb295a55e89d05beaae19->enter($__internal_0eec8b5595b7eab274531b0f47a8e5effaa8a21448ffb295a55e89d05beaae19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_0eec8b5595b7eab274531b0f47a8e5effaa8a21448ffb295a55e89d05beaae19->leave($__internal_0eec8b5595b7eab274531b0f47a8e5effaa8a21448ffb295a55e89d05beaae19_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_99638f205e33e4434cd5f2c53d95f390654a24a21ec40075f070154628b70e11 = $this->env->getExtension("native_profiler");
        $__internal_99638f205e33e4434cd5f2c53d95f390654a24a21ec40075f070154628b70e11->enter($__internal_99638f205e33e4434cd5f2c53d95f390654a24a21ec40075f070154628b70e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_99638f205e33e4434cd5f2c53d95f390654a24a21ec40075f070154628b70e11->leave($__internal_99638f205e33e4434cd5f2c53d95f390654a24a21ec40075f070154628b70e11_prof);

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
