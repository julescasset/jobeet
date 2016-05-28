<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_2fed81524dd95c6a0a14491bec741d39e4b50fd390c0a83cfcb381148dee7f6a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_841d657137ab3e9cfb64cfbd8b206127bb6fc99031d336a2cfed152fad9bd03c = $this->env->getExtension("native_profiler");
        $__internal_841d657137ab3e9cfb64cfbd8b206127bb6fc99031d336a2cfed152fad9bd03c->enter($__internal_841d657137ab3e9cfb64cfbd8b206127bb6fc99031d336a2cfed152fad9bd03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_841d657137ab3e9cfb64cfbd8b206127bb6fc99031d336a2cfed152fad9bd03c->leave($__internal_841d657137ab3e9cfb64cfbd8b206127bb6fc99031d336a2cfed152fad9bd03c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_fa1f2b168c0802da41fcc2ed0fbe938d2a3f89e9cc7d5909c3a35495e289bc38 = $this->env->getExtension("native_profiler");
        $__internal_fa1f2b168c0802da41fcc2ed0fbe938d2a3f89e9cc7d5909c3a35495e289bc38->enter($__internal_fa1f2b168c0802da41fcc2ed0fbe938d2a3f89e9cc7d5909c3a35495e289bc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_fa1f2b168c0802da41fcc2ed0fbe938d2a3f89e9cc7d5909c3a35495e289bc38->leave($__internal_fa1f2b168c0802da41fcc2ed0fbe938d2a3f89e9cc7d5909c3a35495e289bc38_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
