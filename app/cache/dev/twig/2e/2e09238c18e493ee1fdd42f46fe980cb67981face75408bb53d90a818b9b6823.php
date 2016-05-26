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
        $__internal_66efbb202c841f215e40ee51539c20dced3ea316ad1296535f1b46dc5de9ecf1 = $this->env->getExtension("native_profiler");
        $__internal_66efbb202c841f215e40ee51539c20dced3ea316ad1296535f1b46dc5de9ecf1->enter($__internal_66efbb202c841f215e40ee51539c20dced3ea316ad1296535f1b46dc5de9ecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_66efbb202c841f215e40ee51539c20dced3ea316ad1296535f1b46dc5de9ecf1->leave($__internal_66efbb202c841f215e40ee51539c20dced3ea316ad1296535f1b46dc5de9ecf1_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_592a9b699228b81193a818fb98f10e46838b985cd03afc7c1353d77578b2c1cf = $this->env->getExtension("native_profiler");
        $__internal_592a9b699228b81193a818fb98f10e46838b985cd03afc7c1353d77578b2c1cf->enter($__internal_592a9b699228b81193a818fb98f10e46838b985cd03afc7c1353d77578b2c1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_592a9b699228b81193a818fb98f10e46838b985cd03afc7c1353d77578b2c1cf->leave($__internal_592a9b699228b81193a818fb98f10e46838b985cd03afc7c1353d77578b2c1cf_prof);

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
