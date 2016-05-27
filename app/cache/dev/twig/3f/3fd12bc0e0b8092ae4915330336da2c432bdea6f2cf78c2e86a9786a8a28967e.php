<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_e342a9c54ad7231b85642e6216d438e1e89bc942e2baf83c06f13485163a0d5c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b1ecc37da20f45099b7611e0e1b831c0ad60cf6c3e4136b7a00a8441fd9ce48 = $this->env->getExtension("native_profiler");
        $__internal_1b1ecc37da20f45099b7611e0e1b831c0ad60cf6c3e4136b7a00a8441fd9ce48->enter($__internal_1b1ecc37da20f45099b7611e0e1b831c0ad60cf6c3e4136b7a00a8441fd9ce48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b1ecc37da20f45099b7611e0e1b831c0ad60cf6c3e4136b7a00a8441fd9ce48->leave($__internal_1b1ecc37da20f45099b7611e0e1b831c0ad60cf6c3e4136b7a00a8441fd9ce48_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d0356a4d150c5ca3e4d02eb38e30de9d35abbbe240809447e3930f6200c1008e = $this->env->getExtension("native_profiler");
        $__internal_d0356a4d150c5ca3e4d02eb38e30de9d35abbbe240809447e3930f6200c1008e->enter($__internal_d0356a4d150c5ca3e4d02eb38e30de9d35abbbe240809447e3930f6200c1008e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_d0356a4d150c5ca3e4d02eb38e30de9d35abbbe240809447e3930f6200c1008e->leave($__internal_d0356a4d150c5ca3e4d02eb38e30de9d35abbbe240809447e3930f6200c1008e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
