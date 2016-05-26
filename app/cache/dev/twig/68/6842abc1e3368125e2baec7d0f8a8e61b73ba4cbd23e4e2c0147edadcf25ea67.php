<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_c369d1cb199cfb0daa6d684bfe5e91517f3d639ea91c1197ce49ea649176de9f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_853c7df2752aa0f5e64deba9d9938c7e029e58b764d3a08a152c19d68a4adb7e = $this->env->getExtension("native_profiler");
        $__internal_853c7df2752aa0f5e64deba9d9938c7e029e58b764d3a08a152c19d68a4adb7e->enter($__internal_853c7df2752aa0f5e64deba9d9938c7e029e58b764d3a08a152c19d68a4adb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853c7df2752aa0f5e64deba9d9938c7e029e58b764d3a08a152c19d68a4adb7e->leave($__internal_853c7df2752aa0f5e64deba9d9938c7e029e58b764d3a08a152c19d68a4adb7e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5d5307155e7d5320aaa6a268475364cfa6678d90e2e827337cd9df3578121ee3 = $this->env->getExtension("native_profiler");
        $__internal_5d5307155e7d5320aaa6a268475364cfa6678d90e2e827337cd9df3578121ee3->enter($__internal_5d5307155e7d5320aaa6a268475364cfa6678d90e2e827337cd9df3578121ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_5d5307155e7d5320aaa6a268475364cfa6678d90e2e827337cd9df3578121ee3->leave($__internal_5d5307155e7d5320aaa6a268475364cfa6678d90e2e827337cd9df3578121ee3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
