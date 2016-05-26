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
        $__internal_ff81ad6ed37fde16c2bfc812a68b7d1ab48a21986e27dd4e788ab313adee980b = $this->env->getExtension("native_profiler");
        $__internal_ff81ad6ed37fde16c2bfc812a68b7d1ab48a21986e27dd4e788ab313adee980b->enter($__internal_ff81ad6ed37fde16c2bfc812a68b7d1ab48a21986e27dd4e788ab313adee980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_ff81ad6ed37fde16c2bfc812a68b7d1ab48a21986e27dd4e788ab313adee980b->leave($__internal_ff81ad6ed37fde16c2bfc812a68b7d1ab48a21986e27dd4e788ab313adee980b_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_3a4bdd6d676e35cd9b1543a6fc26cbefb7c7cef75387991b6f0189e55e3642e6 = $this->env->getExtension("native_profiler");
        $__internal_3a4bdd6d676e35cd9b1543a6fc26cbefb7c7cef75387991b6f0189e55e3642e6->enter($__internal_3a4bdd6d676e35cd9b1543a6fc26cbefb7c7cef75387991b6f0189e55e3642e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_3a4bdd6d676e35cd9b1543a6fc26cbefb7c7cef75387991b6f0189e55e3642e6->leave($__internal_3a4bdd6d676e35cd9b1543a6fc26cbefb7c7cef75387991b6f0189e55e3642e6_prof);

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
