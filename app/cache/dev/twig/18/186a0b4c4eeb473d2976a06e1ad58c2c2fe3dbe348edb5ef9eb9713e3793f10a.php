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
        $__internal_ad0631659b174059a09147f3c8dcd4b950edade4f5623597ad61d46383433cb6 = $this->env->getExtension("native_profiler");
        $__internal_ad0631659b174059a09147f3c8dcd4b950edade4f5623597ad61d46383433cb6->enter($__internal_ad0631659b174059a09147f3c8dcd4b950edade4f5623597ad61d46383433cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad0631659b174059a09147f3c8dcd4b950edade4f5623597ad61d46383433cb6->leave($__internal_ad0631659b174059a09147f3c8dcd4b950edade4f5623597ad61d46383433cb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a74a1349cf89650eade3b523828a3b8b78160cac3315bb93993f57434d46a109 = $this->env->getExtension("native_profiler");
        $__internal_a74a1349cf89650eade3b523828a3b8b78160cac3315bb93993f57434d46a109->enter($__internal_a74a1349cf89650eade3b523828a3b8b78160cac3315bb93993f57434d46a109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a74a1349cf89650eade3b523828a3b8b78160cac3315bb93993f57434d46a109->leave($__internal_a74a1349cf89650eade3b523828a3b8b78160cac3315bb93993f57434d46a109_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a599cec9c0379c1ba22a9412d5492dbebe5572d4cd42e4ff6738031ba424ec19 = $this->env->getExtension("native_profiler");
        $__internal_a599cec9c0379c1ba22a9412d5492dbebe5572d4cd42e4ff6738031ba424ec19->enter($__internal_a599cec9c0379c1ba22a9412d5492dbebe5572d4cd42e4ff6738031ba424ec19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a599cec9c0379c1ba22a9412d5492dbebe5572d4cd42e4ff6738031ba424ec19->leave($__internal_a599cec9c0379c1ba22a9412d5492dbebe5572d4cd42e4ff6738031ba424ec19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f644d44a6fa4581681fc371a021871a5671c24ad0882a618fe5155b10aff2390 = $this->env->getExtension("native_profiler");
        $__internal_f644d44a6fa4581681fc371a021871a5671c24ad0882a618fe5155b10aff2390->enter($__internal_f644d44a6fa4581681fc371a021871a5671c24ad0882a618fe5155b10aff2390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f644d44a6fa4581681fc371a021871a5671c24ad0882a618fe5155b10aff2390->leave($__internal_f644d44a6fa4581681fc371a021871a5671c24ad0882a618fe5155b10aff2390_prof);

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
