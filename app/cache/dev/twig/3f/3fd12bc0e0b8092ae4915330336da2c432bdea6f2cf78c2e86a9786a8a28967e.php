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
        $__internal_0067b5a2b711fabfcaaafd6caf1e6f5822f1b097932dd392af11049fec86b8d9 = $this->env->getExtension("native_profiler");
        $__internal_0067b5a2b711fabfcaaafd6caf1e6f5822f1b097932dd392af11049fec86b8d9->enter($__internal_0067b5a2b711fabfcaaafd6caf1e6f5822f1b097932dd392af11049fec86b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0067b5a2b711fabfcaaafd6caf1e6f5822f1b097932dd392af11049fec86b8d9->leave($__internal_0067b5a2b711fabfcaaafd6caf1e6f5822f1b097932dd392af11049fec86b8d9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_24408f62beeb24e914c15d18053bfefc316fc94f75662b116c71ae36d6d5a2e4 = $this->env->getExtension("native_profiler");
        $__internal_24408f62beeb24e914c15d18053bfefc316fc94f75662b116c71ae36d6d5a2e4->enter($__internal_24408f62beeb24e914c15d18053bfefc316fc94f75662b116c71ae36d6d5a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_24408f62beeb24e914c15d18053bfefc316fc94f75662b116c71ae36d6d5a2e4->leave($__internal_24408f62beeb24e914c15d18053bfefc316fc94f75662b116c71ae36d6d5a2e4_prof);

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
