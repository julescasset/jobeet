<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_6af78e96af034d4c2119a8ee1ee4ff473e6adac04a6834b6674ccbd5af5c07c2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_127c012dd6357ecbd63de5279d059165328a337a7d0638f0d4ea2416c64594f4 = $this->env->getExtension("native_profiler");
        $__internal_127c012dd6357ecbd63de5279d059165328a337a7d0638f0d4ea2416c64594f4->enter($__internal_127c012dd6357ecbd63de5279d059165328a337a7d0638f0d4ea2416c64594f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_127c012dd6357ecbd63de5279d059165328a337a7d0638f0d4ea2416c64594f4->leave($__internal_127c012dd6357ecbd63de5279d059165328a337a7d0638f0d4ea2416c64594f4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_554f76504724c65124f945a305474cc1717dd6ffbbc63d57a64134e928f59438 = $this->env->getExtension("native_profiler");
        $__internal_554f76504724c65124f945a305474cc1717dd6ffbbc63d57a64134e928f59438->enter($__internal_554f76504724c65124f945a305474cc1717dd6ffbbc63d57a64134e928f59438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_554f76504724c65124f945a305474cc1717dd6ffbbc63d57a64134e928f59438->leave($__internal_554f76504724c65124f945a305474cc1717dd6ffbbc63d57a64134e928f59438_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
