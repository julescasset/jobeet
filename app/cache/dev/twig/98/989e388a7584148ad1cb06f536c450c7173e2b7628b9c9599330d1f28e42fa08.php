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
        $__internal_7b3798756601f3b945e4c4a3f3fd719b681960b9f06b4f0ce30ae59ff7bba3fa = $this->env->getExtension("native_profiler");
        $__internal_7b3798756601f3b945e4c4a3f3fd719b681960b9f06b4f0ce30ae59ff7bba3fa->enter($__internal_7b3798756601f3b945e4c4a3f3fd719b681960b9f06b4f0ce30ae59ff7bba3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3798756601f3b945e4c4a3f3fd719b681960b9f06b4f0ce30ae59ff7bba3fa->leave($__internal_7b3798756601f3b945e4c4a3f3fd719b681960b9f06b4f0ce30ae59ff7bba3fa_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_538d75b238ec46b3f06dd8876ea66a283e7f9427627aaaa7ce7ff388610b92dc = $this->env->getExtension("native_profiler");
        $__internal_538d75b238ec46b3f06dd8876ea66a283e7f9427627aaaa7ce7ff388610b92dc->enter($__internal_538d75b238ec46b3f06dd8876ea66a283e7f9427627aaaa7ce7ff388610b92dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_538d75b238ec46b3f06dd8876ea66a283e7f9427627aaaa7ce7ff388610b92dc->leave($__internal_538d75b238ec46b3f06dd8876ea66a283e7f9427627aaaa7ce7ff388610b92dc_prof);

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
