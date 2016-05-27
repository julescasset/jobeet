<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_a4f9fe4ff008fde3588a40d8347d24f20c9b9220498691048e4401a4d04210f8 extends Twig_Template
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
        $__internal_2de126c54e3f0e214bac2f403205932ba38b3b2a862fb5a4588fed1cda9c428b = $this->env->getExtension("native_profiler");
        $__internal_2de126c54e3f0e214bac2f403205932ba38b3b2a862fb5a4588fed1cda9c428b->enter($__internal_2de126c54e3f0e214bac2f403205932ba38b3b2a862fb5a4588fed1cda9c428b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_2de126c54e3f0e214bac2f403205932ba38b3b2a862fb5a4588fed1cda9c428b->leave($__internal_2de126c54e3f0e214bac2f403205932ba38b3b2a862fb5a4588fed1cda9c428b_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_2988e486ae42eb1ced9319f017572fa6eab20df76a1b56312bab01215c6b6cd9 = $this->env->getExtension("native_profiler");
        $__internal_2988e486ae42eb1ced9319f017572fa6eab20df76a1b56312bab01215c6b6cd9->enter($__internal_2988e486ae42eb1ced9319f017572fa6eab20df76a1b56312bab01215c6b6cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_2988e486ae42eb1ced9319f017572fa6eab20df76a1b56312bab01215c6b6cd9->leave($__internal_2988e486ae42eb1ced9319f017572fa6eab20df76a1b56312bab01215c6b6cd9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
