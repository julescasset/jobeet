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
        $__internal_66752bb5b1339fb3f52c9322af16fae79cbae29ea7d8671f2a4db46938b5a1d6 = $this->env->getExtension("native_profiler");
        $__internal_66752bb5b1339fb3f52c9322af16fae79cbae29ea7d8671f2a4db46938b5a1d6->enter($__internal_66752bb5b1339fb3f52c9322af16fae79cbae29ea7d8671f2a4db46938b5a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_66752bb5b1339fb3f52c9322af16fae79cbae29ea7d8671f2a4db46938b5a1d6->leave($__internal_66752bb5b1339fb3f52c9322af16fae79cbae29ea7d8671f2a4db46938b5a1d6_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_92ef161310f86899268e945e2385efec2a5f899077e2450aafa7608c0cd4ef05 = $this->env->getExtension("native_profiler");
        $__internal_92ef161310f86899268e945e2385efec2a5f899077e2450aafa7608c0cd4ef05->enter($__internal_92ef161310f86899268e945e2385efec2a5f899077e2450aafa7608c0cd4ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_92ef161310f86899268e945e2385efec2a5f899077e2450aafa7608c0cd4ef05->leave($__internal_92ef161310f86899268e945e2385efec2a5f899077e2450aafa7608c0cd4ef05_prof);

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
