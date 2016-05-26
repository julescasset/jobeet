<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_a203aa8e98e93db714ea9921586de53254a2419ca42ed5554887982f1819aba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1de8fd1ea492343c5799cf111623d84f8d0bb784c142f2a4d3ab0b9e8e7bab0 = $this->env->getExtension("native_profiler");
        $__internal_d1de8fd1ea492343c5799cf111623d84f8d0bb784c142f2a4d3ab0b9e8e7bab0->enter($__internal_d1de8fd1ea492343c5799cf111623d84f8d0bb784c142f2a4d3ab0b9e8e7bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_d1de8fd1ea492343c5799cf111623d84f8d0bb784c142f2a4d3ab0b9e8e7bab0->leave($__internal_d1de8fd1ea492343c5799cf111623d84f8d0bb784c142f2a4d3ab0b9e8e7bab0_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_cdb1f5cd6ad98a598befde9b1c2100ea1f0ded5c5bed9f7a4442907d658ff2fa = $this->env->getExtension("native_profiler");
        $__internal_cdb1f5cd6ad98a598befde9b1c2100ea1f0ded5c5bed9f7a4442907d658ff2fa->enter($__internal_cdb1f5cd6ad98a598befde9b1c2100ea1f0ded5c5bed9f7a4442907d658ff2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_cdb1f5cd6ad98a598befde9b1c2100ea1f0ded5c5bed9f7a4442907d658ff2fa->leave($__internal_cdb1f5cd6ad98a598befde9b1c2100ea1f0ded5c5bed9f7a4442907d658ff2fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
