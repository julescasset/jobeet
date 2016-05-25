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
        $__internal_981c136e691ea9337d3619d067a640bdcee26e3400f1ff4a42d12839051b5e90 = $this->env->getExtension("native_profiler");
        $__internal_981c136e691ea9337d3619d067a640bdcee26e3400f1ff4a42d12839051b5e90->enter($__internal_981c136e691ea9337d3619d067a640bdcee26e3400f1ff4a42d12839051b5e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981c136e691ea9337d3619d067a640bdcee26e3400f1ff4a42d12839051b5e90->leave($__internal_981c136e691ea9337d3619d067a640bdcee26e3400f1ff4a42d12839051b5e90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8160f98a5d28a2a69759cc4c5e2db78b5b1fa7fe5c6f97cb9883a1c7b9b36a1 = $this->env->getExtension("native_profiler");
        $__internal_c8160f98a5d28a2a69759cc4c5e2db78b5b1fa7fe5c6f97cb9883a1c7b9b36a1->enter($__internal_c8160f98a5d28a2a69759cc4c5e2db78b5b1fa7fe5c6f97cb9883a1c7b9b36a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8160f98a5d28a2a69759cc4c5e2db78b5b1fa7fe5c6f97cb9883a1c7b9b36a1->leave($__internal_c8160f98a5d28a2a69759cc4c5e2db78b5b1fa7fe5c6f97cb9883a1c7b9b36a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c42739ea18ba1e83a7bd0dc293eb5b8e53173a075d88d520d12ab6f4f284dba8 = $this->env->getExtension("native_profiler");
        $__internal_c42739ea18ba1e83a7bd0dc293eb5b8e53173a075d88d520d12ab6f4f284dba8->enter($__internal_c42739ea18ba1e83a7bd0dc293eb5b8e53173a075d88d520d12ab6f4f284dba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c42739ea18ba1e83a7bd0dc293eb5b8e53173a075d88d520d12ab6f4f284dba8->leave($__internal_c42739ea18ba1e83a7bd0dc293eb5b8e53173a075d88d520d12ab6f4f284dba8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10c113675bd2aba257d77293aba14a287a300377a82701b7588cebc7fe0d82ba = $this->env->getExtension("native_profiler");
        $__internal_10c113675bd2aba257d77293aba14a287a300377a82701b7588cebc7fe0d82ba->enter($__internal_10c113675bd2aba257d77293aba14a287a300377a82701b7588cebc7fe0d82ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_10c113675bd2aba257d77293aba14a287a300377a82701b7588cebc7fe0d82ba->leave($__internal_10c113675bd2aba257d77293aba14a287a300377a82701b7588cebc7fe0d82ba_prof);

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
