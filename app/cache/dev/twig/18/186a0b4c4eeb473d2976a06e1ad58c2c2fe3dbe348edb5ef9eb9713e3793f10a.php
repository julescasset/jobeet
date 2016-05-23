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
        $__internal_086e1c277a8ec4b387a8156df22fe5062fd9b4985af95378f2d641107f73c12a = $this->env->getExtension("native_profiler");
        $__internal_086e1c277a8ec4b387a8156df22fe5062fd9b4985af95378f2d641107f73c12a->enter($__internal_086e1c277a8ec4b387a8156df22fe5062fd9b4985af95378f2d641107f73c12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086e1c277a8ec4b387a8156df22fe5062fd9b4985af95378f2d641107f73c12a->leave($__internal_086e1c277a8ec4b387a8156df22fe5062fd9b4985af95378f2d641107f73c12a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa61bea4cacdc18a656ad6960dee01e3847793e2b2bde6ae11fb15f5ecb402e3 = $this->env->getExtension("native_profiler");
        $__internal_aa61bea4cacdc18a656ad6960dee01e3847793e2b2bde6ae11fb15f5ecb402e3->enter($__internal_aa61bea4cacdc18a656ad6960dee01e3847793e2b2bde6ae11fb15f5ecb402e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa61bea4cacdc18a656ad6960dee01e3847793e2b2bde6ae11fb15f5ecb402e3->leave($__internal_aa61bea4cacdc18a656ad6960dee01e3847793e2b2bde6ae11fb15f5ecb402e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaf979d9b71c52c3c349729561fbf3d875d8c627a23df7a9804cfb1ec61da9fd = $this->env->getExtension("native_profiler");
        $__internal_aaf979d9b71c52c3c349729561fbf3d875d8c627a23df7a9804cfb1ec61da9fd->enter($__internal_aaf979d9b71c52c3c349729561fbf3d875d8c627a23df7a9804cfb1ec61da9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aaf979d9b71c52c3c349729561fbf3d875d8c627a23df7a9804cfb1ec61da9fd->leave($__internal_aaf979d9b71c52c3c349729561fbf3d875d8c627a23df7a9804cfb1ec61da9fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d30c7bf9d26de19e20799775360f22cd18e3ea63bbd8eeaf9c1bfb61e0e999ce = $this->env->getExtension("native_profiler");
        $__internal_d30c7bf9d26de19e20799775360f22cd18e3ea63bbd8eeaf9c1bfb61e0e999ce->enter($__internal_d30c7bf9d26de19e20799775360f22cd18e3ea63bbd8eeaf9c1bfb61e0e999ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d30c7bf9d26de19e20799775360f22cd18e3ea63bbd8eeaf9c1bfb61e0e999ce->leave($__internal_d30c7bf9d26de19e20799775360f22cd18e3ea63bbd8eeaf9c1bfb61e0e999ce_prof);

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
