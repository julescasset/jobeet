<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dacbcef3561821a179ce5686dc00404a6e5e5ecd3e4afd747e85334287430496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3c22838ca3923bab53c66604a9d7e0ebf6662724d9f5b8f78bf2a21515b1fd40 = $this->env->getExtension("native_profiler");
        $__internal_3c22838ca3923bab53c66604a9d7e0ebf6662724d9f5b8f78bf2a21515b1fd40->enter($__internal_3c22838ca3923bab53c66604a9d7e0ebf6662724d9f5b8f78bf2a21515b1fd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c22838ca3923bab53c66604a9d7e0ebf6662724d9f5b8f78bf2a21515b1fd40->leave($__internal_3c22838ca3923bab53c66604a9d7e0ebf6662724d9f5b8f78bf2a21515b1fd40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ed814e9d42802dfb325bcb783acb10490aeefae609a7faef3550e5602f9b728 = $this->env->getExtension("native_profiler");
        $__internal_7ed814e9d42802dfb325bcb783acb10490aeefae609a7faef3550e5602f9b728->enter($__internal_7ed814e9d42802dfb325bcb783acb10490aeefae609a7faef3550e5602f9b728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ed814e9d42802dfb325bcb783acb10490aeefae609a7faef3550e5602f9b728->leave($__internal_7ed814e9d42802dfb325bcb783acb10490aeefae609a7faef3550e5602f9b728_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c05eff99540730f6c7fff5612cdcc65aa126c5661a9019f43abf32b9a177745 = $this->env->getExtension("native_profiler");
        $__internal_9c05eff99540730f6c7fff5612cdcc65aa126c5661a9019f43abf32b9a177745->enter($__internal_9c05eff99540730f6c7fff5612cdcc65aa126c5661a9019f43abf32b9a177745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c05eff99540730f6c7fff5612cdcc65aa126c5661a9019f43abf32b9a177745->leave($__internal_9c05eff99540730f6c7fff5612cdcc65aa126c5661a9019f43abf32b9a177745_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8830732eebef17847c2913ea1d129c979b4c921f769ae7282ebc2d3b11bdf754 = $this->env->getExtension("native_profiler");
        $__internal_8830732eebef17847c2913ea1d129c979b4c921f769ae7282ebc2d3b11bdf754->enter($__internal_8830732eebef17847c2913ea1d129c979b4c921f769ae7282ebc2d3b11bdf754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8830732eebef17847c2913ea1d129c979b4c921f769ae7282ebc2d3b11bdf754->leave($__internal_8830732eebef17847c2913ea1d129c979b4c921f769ae7282ebc2d3b11bdf754_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
