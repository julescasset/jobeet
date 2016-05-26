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
        $__internal_d0a460edeb77f4912026b1b4d0b0bd9380b51935acf6a474e2e3299eebd8dd90 = $this->env->getExtension("native_profiler");
        $__internal_d0a460edeb77f4912026b1b4d0b0bd9380b51935acf6a474e2e3299eebd8dd90->enter($__internal_d0a460edeb77f4912026b1b4d0b0bd9380b51935acf6a474e2e3299eebd8dd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d0a460edeb77f4912026b1b4d0b0bd9380b51935acf6a474e2e3299eebd8dd90->leave($__internal_d0a460edeb77f4912026b1b4d0b0bd9380b51935acf6a474e2e3299eebd8dd90_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_fb2ccdb791fd3b35f7c681806efaaa843b6b80ed0dd85c702ac19e3adde75a0e = $this->env->getExtension("native_profiler");
        $__internal_fb2ccdb791fd3b35f7c681806efaaa843b6b80ed0dd85c702ac19e3adde75a0e->enter($__internal_fb2ccdb791fd3b35f7c681806efaaa843b6b80ed0dd85c702ac19e3adde75a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_fb2ccdb791fd3b35f7c681806efaaa843b6b80ed0dd85c702ac19e3adde75a0e->leave($__internal_fb2ccdb791fd3b35f7c681806efaaa843b6b80ed0dd85c702ac19e3adde75a0e_prof);

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
