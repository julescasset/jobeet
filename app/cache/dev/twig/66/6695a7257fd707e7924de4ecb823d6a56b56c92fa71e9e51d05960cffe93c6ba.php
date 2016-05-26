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
        $__internal_549896dac6857d6465945670cdbb321c9da3f982f63f938ab2651fe4ad049a0a = $this->env->getExtension("native_profiler");
        $__internal_549896dac6857d6465945670cdbb321c9da3f982f63f938ab2651fe4ad049a0a->enter($__internal_549896dac6857d6465945670cdbb321c9da3f982f63f938ab2651fe4ad049a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549896dac6857d6465945670cdbb321c9da3f982f63f938ab2651fe4ad049a0a->leave($__internal_549896dac6857d6465945670cdbb321c9da3f982f63f938ab2651fe4ad049a0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28617e62ceeb2368acb6b139972e9d326053fa1b1d4a89283f1e1881c96d9672 = $this->env->getExtension("native_profiler");
        $__internal_28617e62ceeb2368acb6b139972e9d326053fa1b1d4a89283f1e1881c96d9672->enter($__internal_28617e62ceeb2368acb6b139972e9d326053fa1b1d4a89283f1e1881c96d9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28617e62ceeb2368acb6b139972e9d326053fa1b1d4a89283f1e1881c96d9672->leave($__internal_28617e62ceeb2368acb6b139972e9d326053fa1b1d4a89283f1e1881c96d9672_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_afac0dad405a56c1b72729624889dd08d3a7e4202b9d4f6aa008e7f44fad008f = $this->env->getExtension("native_profiler");
        $__internal_afac0dad405a56c1b72729624889dd08d3a7e4202b9d4f6aa008e7f44fad008f->enter($__internal_afac0dad405a56c1b72729624889dd08d3a7e4202b9d4f6aa008e7f44fad008f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_afac0dad405a56c1b72729624889dd08d3a7e4202b9d4f6aa008e7f44fad008f->leave($__internal_afac0dad405a56c1b72729624889dd08d3a7e4202b9d4f6aa008e7f44fad008f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_115f6764c1238d3acbaef287b1df1fd2e551e69c2acf5159d36f870b6863b9f6 = $this->env->getExtension("native_profiler");
        $__internal_115f6764c1238d3acbaef287b1df1fd2e551e69c2acf5159d36f870b6863b9f6->enter($__internal_115f6764c1238d3acbaef287b1df1fd2e551e69c2acf5159d36f870b6863b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_115f6764c1238d3acbaef287b1df1fd2e551e69c2acf5159d36f870b6863b9f6->leave($__internal_115f6764c1238d3acbaef287b1df1fd2e551e69c2acf5159d36f870b6863b9f6_prof);

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
