<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_86efdd3bc780ab7bee7db93f7fbc36e744a2826e7822e6f9586bdd8c2865f5af extends Twig_Template
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
        $__internal_15f17c7577c41934d2583b759d6c239d2a63a09a15c5a19a503b0624521068a9 = $this->env->getExtension("native_profiler");
        $__internal_15f17c7577c41934d2583b759d6c239d2a63a09a15c5a19a503b0624521068a9->enter($__internal_15f17c7577c41934d2583b759d6c239d2a63a09a15c5a19a503b0624521068a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_15f17c7577c41934d2583b759d6c239d2a63a09a15c5a19a503b0624521068a9->leave($__internal_15f17c7577c41934d2583b759d6c239d2a63a09a15c5a19a503b0624521068a9_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_8be602b64609350f0b137f7f30e700483404e8064152455717680d392fc19be2 = $this->env->getExtension("native_profiler");
        $__internal_8be602b64609350f0b137f7f30e700483404e8064152455717680d392fc19be2->enter($__internal_8be602b64609350f0b137f7f30e700483404e8064152455717680d392fc19be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_8be602b64609350f0b137f7f30e700483404e8064152455717680d392fc19be2->leave($__internal_8be602b64609350f0b137f7f30e700483404e8064152455717680d392fc19be2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
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
