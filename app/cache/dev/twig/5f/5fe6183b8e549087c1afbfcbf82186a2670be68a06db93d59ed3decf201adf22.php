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
        $__internal_b6c902a7cced40636c321ce5ce91ec9dfb50224c3745884d9b2ac36b7c79e52e = $this->env->getExtension("native_profiler");
        $__internal_b6c902a7cced40636c321ce5ce91ec9dfb50224c3745884d9b2ac36b7c79e52e->enter($__internal_b6c902a7cced40636c321ce5ce91ec9dfb50224c3745884d9b2ac36b7c79e52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c902a7cced40636c321ce5ce91ec9dfb50224c3745884d9b2ac36b7c79e52e->leave($__internal_b6c902a7cced40636c321ce5ce91ec9dfb50224c3745884d9b2ac36b7c79e52e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_37f991426d1ff81861486dad65c565d7241da91aafd0ce07beaa5ce52c95736a = $this->env->getExtension("native_profiler");
        $__internal_37f991426d1ff81861486dad65c565d7241da91aafd0ce07beaa5ce52c95736a->enter($__internal_37f991426d1ff81861486dad65c565d7241da91aafd0ce07beaa5ce52c95736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_37f991426d1ff81861486dad65c565d7241da91aafd0ce07beaa5ce52c95736a->leave($__internal_37f991426d1ff81861486dad65c565d7241da91aafd0ce07beaa5ce52c95736a_prof);

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
