<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_223e9c6da8e2268b63ab583b6d45166416a146e1a92ff49e48e34ec51ea6e196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_707008ceda97fbc9c418c579e84dd2124e2f9fef3a9f9ac268b146778295cf8f = $this->env->getExtension("native_profiler");
        $__internal_707008ceda97fbc9c418c579e84dd2124e2f9fef3a9f9ac268b146778295cf8f->enter($__internal_707008ceda97fbc9c418c579e84dd2124e2f9fef3a9f9ac268b146778295cf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707008ceda97fbc9c418c579e84dd2124e2f9fef3a9f9ac268b146778295cf8f->leave($__internal_707008ceda97fbc9c418c579e84dd2124e2f9fef3a9f9ac268b146778295cf8f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_54a1554fd3e6c663ed3703e72ccb895c4d127d1f2504ce76be90495ff6173497 = $this->env->getExtension("native_profiler");
        $__internal_54a1554fd3e6c663ed3703e72ccb895c4d127d1f2504ce76be90495ff6173497->enter($__internal_54a1554fd3e6c663ed3703e72ccb895c4d127d1f2504ce76be90495ff6173497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_54a1554fd3e6c663ed3703e72ccb895c4d127d1f2504ce76be90495ff6173497->leave($__internal_54a1554fd3e6c663ed3703e72ccb895c4d127d1f2504ce76be90495ff6173497_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
