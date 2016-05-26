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
        $__internal_7ed74063648f03fdb79bee8d2e480cf263fc72a6ba59a9e3305e4b77e54c85c4 = $this->env->getExtension("native_profiler");
        $__internal_7ed74063648f03fdb79bee8d2e480cf263fc72a6ba59a9e3305e4b77e54c85c4->enter($__internal_7ed74063648f03fdb79bee8d2e480cf263fc72a6ba59a9e3305e4b77e54c85c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed74063648f03fdb79bee8d2e480cf263fc72a6ba59a9e3305e4b77e54c85c4->leave($__internal_7ed74063648f03fdb79bee8d2e480cf263fc72a6ba59a9e3305e4b77e54c85c4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_feb0e812c0bf3077ea152c618e2c9239d357a0dc3798e096895479859d7b21e3 = $this->env->getExtension("native_profiler");
        $__internal_feb0e812c0bf3077ea152c618e2c9239d357a0dc3798e096895479859d7b21e3->enter($__internal_feb0e812c0bf3077ea152c618e2c9239d357a0dc3798e096895479859d7b21e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_feb0e812c0bf3077ea152c618e2c9239d357a0dc3798e096895479859d7b21e3->leave($__internal_feb0e812c0bf3077ea152c618e2c9239d357a0dc3798e096895479859d7b21e3_prof);

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
