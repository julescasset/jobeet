<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fc4a3ed3ba65c0edbac4d7949252f5d87fbb333fdbc60a2c454810dc58acee06 extends Twig_Template
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
        $__internal_1d903c3350ef555763c8a8594ac2729a93cdac6296139df9deb33c844c99eb1e = $this->env->getExtension("native_profiler");
        $__internal_1d903c3350ef555763c8a8594ac2729a93cdac6296139df9deb33c844c99eb1e->enter($__internal_1d903c3350ef555763c8a8594ac2729a93cdac6296139df9deb33c844c99eb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d903c3350ef555763c8a8594ac2729a93cdac6296139df9deb33c844c99eb1e->leave($__internal_1d903c3350ef555763c8a8594ac2729a93cdac6296139df9deb33c844c99eb1e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d64457aef497518b0e0c21d19cc4e4ba60d546c7df782518eac37a3271dc3b36 = $this->env->getExtension("native_profiler");
        $__internal_d64457aef497518b0e0c21d19cc4e4ba60d546c7df782518eac37a3271dc3b36->enter($__internal_d64457aef497518b0e0c21d19cc4e4ba60d546c7df782518eac37a3271dc3b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d64457aef497518b0e0c21d19cc4e4ba60d546c7df782518eac37a3271dc3b36->leave($__internal_d64457aef497518b0e0c21d19cc4e4ba60d546c7df782518eac37a3271dc3b36_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fa4d68cb9ac80996aa7d1a67b785e984f7366d67db26c5bc6bcb912b505f140 = $this->env->getExtension("native_profiler");
        $__internal_4fa4d68cb9ac80996aa7d1a67b785e984f7366d67db26c5bc6bcb912b505f140->enter($__internal_4fa4d68cb9ac80996aa7d1a67b785e984f7366d67db26c5bc6bcb912b505f140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4fa4d68cb9ac80996aa7d1a67b785e984f7366d67db26c5bc6bcb912b505f140->leave($__internal_4fa4d68cb9ac80996aa7d1a67b785e984f7366d67db26c5bc6bcb912b505f140_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5215ff0ed09d173064a6792024a4dac493c4a0bd14371217ddf91fcc4bbc3da = $this->env->getExtension("native_profiler");
        $__internal_f5215ff0ed09d173064a6792024a4dac493c4a0bd14371217ddf91fcc4bbc3da->enter($__internal_f5215ff0ed09d173064a6792024a4dac493c4a0bd14371217ddf91fcc4bbc3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f5215ff0ed09d173064a6792024a4dac493c4a0bd14371217ddf91fcc4bbc3da->leave($__internal_f5215ff0ed09d173064a6792024a4dac493c4a0bd14371217ddf91fcc4bbc3da_prof);

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
