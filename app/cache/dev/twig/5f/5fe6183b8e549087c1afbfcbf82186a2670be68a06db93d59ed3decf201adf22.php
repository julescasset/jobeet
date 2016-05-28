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
        $__internal_7c0f7e94c17c32450372a0774351e0047b7f55fdbe1a3305c47724acccb6f72b = $this->env->getExtension("native_profiler");
        $__internal_7c0f7e94c17c32450372a0774351e0047b7f55fdbe1a3305c47724acccb6f72b->enter($__internal_7c0f7e94c17c32450372a0774351e0047b7f55fdbe1a3305c47724acccb6f72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c0f7e94c17c32450372a0774351e0047b7f55fdbe1a3305c47724acccb6f72b->leave($__internal_7c0f7e94c17c32450372a0774351e0047b7f55fdbe1a3305c47724acccb6f72b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_02aba1335a44e5c8078ee096120ebccce2e5c7bbc3264f197f7daafcb073b87e = $this->env->getExtension("native_profiler");
        $__internal_02aba1335a44e5c8078ee096120ebccce2e5c7bbc3264f197f7daafcb073b87e->enter($__internal_02aba1335a44e5c8078ee096120ebccce2e5c7bbc3264f197f7daafcb073b87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_02aba1335a44e5c8078ee096120ebccce2e5c7bbc3264f197f7daafcb073b87e->leave($__internal_02aba1335a44e5c8078ee096120ebccce2e5c7bbc3264f197f7daafcb073b87e_prof);

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
