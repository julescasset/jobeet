<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6952821444f3772ed78f7e8cc4c31d426b3c715acd41efb9184f68a0191e218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6003eeb66ff67b1d62b931c4a824c0283028e6448bcb1e15b3a3b91826629c6c = $this->env->getExtension("native_profiler");
        $__internal_6003eeb66ff67b1d62b931c4a824c0283028e6448bcb1e15b3a3b91826629c6c->enter($__internal_6003eeb66ff67b1d62b931c4a824c0283028e6448bcb1e15b3a3b91826629c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6003eeb66ff67b1d62b931c4a824c0283028e6448bcb1e15b3a3b91826629c6c->leave($__internal_6003eeb66ff67b1d62b931c4a824c0283028e6448bcb1e15b3a3b91826629c6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_014f61c2c7935e9e167f8fff7bb69cb05539c1bbe195fe03ab783b5e373e7f07 = $this->env->getExtension("native_profiler");
        $__internal_014f61c2c7935e9e167f8fff7bb69cb05539c1bbe195fe03ab783b5e373e7f07->enter($__internal_014f61c2c7935e9e167f8fff7bb69cb05539c1bbe195fe03ab783b5e373e7f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_014f61c2c7935e9e167f8fff7bb69cb05539c1bbe195fe03ab783b5e373e7f07->leave($__internal_014f61c2c7935e9e167f8fff7bb69cb05539c1bbe195fe03ab783b5e373e7f07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dca0859a786cfc829d3c40965144757ecf2630d1649b843f239fe01caa866f51 = $this->env->getExtension("native_profiler");
        $__internal_dca0859a786cfc829d3c40965144757ecf2630d1649b843f239fe01caa866f51->enter($__internal_dca0859a786cfc829d3c40965144757ecf2630d1649b843f239fe01caa866f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dca0859a786cfc829d3c40965144757ecf2630d1649b843f239fe01caa866f51->leave($__internal_dca0859a786cfc829d3c40965144757ecf2630d1649b843f239fe01caa866f51_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_14651ea93a7e66cb32f6396acade3eab8779f76fdb17c7fbe10110c7804d6dc9 = $this->env->getExtension("native_profiler");
        $__internal_14651ea93a7e66cb32f6396acade3eab8779f76fdb17c7fbe10110c7804d6dc9->enter($__internal_14651ea93a7e66cb32f6396acade3eab8779f76fdb17c7fbe10110c7804d6dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_14651ea93a7e66cb32f6396acade3eab8779f76fdb17c7fbe10110c7804d6dc9->leave($__internal_14651ea93a7e66cb32f6396acade3eab8779f76fdb17c7fbe10110c7804d6dc9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
