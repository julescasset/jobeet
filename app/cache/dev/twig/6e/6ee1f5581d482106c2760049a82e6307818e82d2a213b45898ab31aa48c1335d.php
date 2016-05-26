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
        $__internal_951c265f3f3583f8f3683966fc0013a92066437c535f419e6e08ecfebe059d04 = $this->env->getExtension("native_profiler");
        $__internal_951c265f3f3583f8f3683966fc0013a92066437c535f419e6e08ecfebe059d04->enter($__internal_951c265f3f3583f8f3683966fc0013a92066437c535f419e6e08ecfebe059d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_951c265f3f3583f8f3683966fc0013a92066437c535f419e6e08ecfebe059d04->leave($__internal_951c265f3f3583f8f3683966fc0013a92066437c535f419e6e08ecfebe059d04_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_e7944ba4dcce8d06ca5e7c54c0f9e0098e017a2945964533e49082a2a5de01dc = $this->env->getExtension("native_profiler");
        $__internal_e7944ba4dcce8d06ca5e7c54c0f9e0098e017a2945964533e49082a2a5de01dc->enter($__internal_e7944ba4dcce8d06ca5e7c54c0f9e0098e017a2945964533e49082a2a5de01dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_e7944ba4dcce8d06ca5e7c54c0f9e0098e017a2945964533e49082a2a5de01dc->leave($__internal_e7944ba4dcce8d06ca5e7c54c0f9e0098e017a2945964533e49082a2a5de01dc_prof);

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
