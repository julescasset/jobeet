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
        $__internal_994585a4ea758491c181cf5b60503dd6fc92ef31da3cfc9fed30963c3dff0c8c = $this->env->getExtension("native_profiler");
        $__internal_994585a4ea758491c181cf5b60503dd6fc92ef31da3cfc9fed30963c3dff0c8c->enter($__internal_994585a4ea758491c181cf5b60503dd6fc92ef31da3cfc9fed30963c3dff0c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_994585a4ea758491c181cf5b60503dd6fc92ef31da3cfc9fed30963c3dff0c8c->leave($__internal_994585a4ea758491c181cf5b60503dd6fc92ef31da3cfc9fed30963c3dff0c8c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_89c562540081964e17ba8b9d726637b849d360b23fc677f21a94c3eaaf34e638 = $this->env->getExtension("native_profiler");
        $__internal_89c562540081964e17ba8b9d726637b849d360b23fc677f21a94c3eaaf34e638->enter($__internal_89c562540081964e17ba8b9d726637b849d360b23fc677f21a94c3eaaf34e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_89c562540081964e17ba8b9d726637b849d360b23fc677f21a94c3eaaf34e638->leave($__internal_89c562540081964e17ba8b9d726637b849d360b23fc677f21a94c3eaaf34e638_prof);

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
