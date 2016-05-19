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
        $__internal_c0d5e6a6724581ee68e3707f7aa9786864ddfb7748d213b27e5488aeecf49047 = $this->env->getExtension("native_profiler");
        $__internal_c0d5e6a6724581ee68e3707f7aa9786864ddfb7748d213b27e5488aeecf49047->enter($__internal_c0d5e6a6724581ee68e3707f7aa9786864ddfb7748d213b27e5488aeecf49047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d5e6a6724581ee68e3707f7aa9786864ddfb7748d213b27e5488aeecf49047->leave($__internal_c0d5e6a6724581ee68e3707f7aa9786864ddfb7748d213b27e5488aeecf49047_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c57c1b3573b30c91c2bd7cab283faff007d144dbf8d275388ed8316d9a6008fc = $this->env->getExtension("native_profiler");
        $__internal_c57c1b3573b30c91c2bd7cab283faff007d144dbf8d275388ed8316d9a6008fc->enter($__internal_c57c1b3573b30c91c2bd7cab283faff007d144dbf8d275388ed8316d9a6008fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c57c1b3573b30c91c2bd7cab283faff007d144dbf8d275388ed8316d9a6008fc->leave($__internal_c57c1b3573b30c91c2bd7cab283faff007d144dbf8d275388ed8316d9a6008fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a965cb79f1e72183bfe862de409608c33bd41e6e597c80373ce302ab1d2dcd12 = $this->env->getExtension("native_profiler");
        $__internal_a965cb79f1e72183bfe862de409608c33bd41e6e597c80373ce302ab1d2dcd12->enter($__internal_a965cb79f1e72183bfe862de409608c33bd41e6e597c80373ce302ab1d2dcd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a965cb79f1e72183bfe862de409608c33bd41e6e597c80373ce302ab1d2dcd12->leave($__internal_a965cb79f1e72183bfe862de409608c33bd41e6e597c80373ce302ab1d2dcd12_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_183bb1d33ad50eb9582b1979938edd454e9cf4d06ad7500446c218f96992ce22 = $this->env->getExtension("native_profiler");
        $__internal_183bb1d33ad50eb9582b1979938edd454e9cf4d06ad7500446c218f96992ce22->enter($__internal_183bb1d33ad50eb9582b1979938edd454e9cf4d06ad7500446c218f96992ce22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_183bb1d33ad50eb9582b1979938edd454e9cf4d06ad7500446c218f96992ce22->leave($__internal_183bb1d33ad50eb9582b1979938edd454e9cf4d06ad7500446c218f96992ce22_prof);

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
