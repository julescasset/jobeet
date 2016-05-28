<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_4647441b827fefa5c8d7f3b27330bef8716caeced4739474ccc1b360069b5ffc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2cfd95c242b377b7f9d3f4a81c4d938f4e7c936a2e2ef32bb8e57378ba5bef3 = $this->env->getExtension("native_profiler");
        $__internal_e2cfd95c242b377b7f9d3f4a81c4d938f4e7c936a2e2ef32bb8e57378ba5bef3->enter($__internal_e2cfd95c242b377b7f9d3f4a81c4d938f4e7c936a2e2ef32bb8e57378ba5bef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2cfd95c242b377b7f9d3f4a81c4d938f4e7c936a2e2ef32bb8e57378ba5bef3->leave($__internal_e2cfd95c242b377b7f9d3f4a81c4d938f4e7c936a2e2ef32bb8e57378ba5bef3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c16d367abf57d7d33186eecb1462c032d7bc6c15bb6758b76fa3fcee4b27409f = $this->env->getExtension("native_profiler");
        $__internal_c16d367abf57d7d33186eecb1462c032d7bc6c15bb6758b76fa3fcee4b27409f->enter($__internal_c16d367abf57d7d33186eecb1462c032d7bc6c15bb6758b76fa3fcee4b27409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_c16d367abf57d7d33186eecb1462c032d7bc6c15bb6758b76fa3fcee4b27409f->leave($__internal_c16d367abf57d7d33186eecb1462c032d7bc6c15bb6758b76fa3fcee4b27409f_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
