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
        $__internal_3a9e9f05a57fe56b7b76c7834a1775cc15e7cf165c485f89389d0fb29af13b43 = $this->env->getExtension("native_profiler");
        $__internal_3a9e9f05a57fe56b7b76c7834a1775cc15e7cf165c485f89389d0fb29af13b43->enter($__internal_3a9e9f05a57fe56b7b76c7834a1775cc15e7cf165c485f89389d0fb29af13b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a9e9f05a57fe56b7b76c7834a1775cc15e7cf165c485f89389d0fb29af13b43->leave($__internal_3a9e9f05a57fe56b7b76c7834a1775cc15e7cf165c485f89389d0fb29af13b43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eedaa4a4c2a504ccc0971b638daad1cea183c7a160b61a64f358693841aec947 = $this->env->getExtension("native_profiler");
        $__internal_eedaa4a4c2a504ccc0971b638daad1cea183c7a160b61a64f358693841aec947->enter($__internal_eedaa4a4c2a504ccc0971b638daad1cea183c7a160b61a64f358693841aec947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eedaa4a4c2a504ccc0971b638daad1cea183c7a160b61a64f358693841aec947->leave($__internal_eedaa4a4c2a504ccc0971b638daad1cea183c7a160b61a64f358693841aec947_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82df4965a3b72e54a806f47df50db1df05346becb9f173f712ec7807536a8f38 = $this->env->getExtension("native_profiler");
        $__internal_82df4965a3b72e54a806f47df50db1df05346becb9f173f712ec7807536a8f38->enter($__internal_82df4965a3b72e54a806f47df50db1df05346becb9f173f712ec7807536a8f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82df4965a3b72e54a806f47df50db1df05346becb9f173f712ec7807536a8f38->leave($__internal_82df4965a3b72e54a806f47df50db1df05346becb9f173f712ec7807536a8f38_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a43a249b9d898bb59b41f81070a95aa7670aceb4bc835af9a0f200f955cce7a = $this->env->getExtension("native_profiler");
        $__internal_0a43a249b9d898bb59b41f81070a95aa7670aceb4bc835af9a0f200f955cce7a->enter($__internal_0a43a249b9d898bb59b41f81070a95aa7670aceb4bc835af9a0f200f955cce7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0a43a249b9d898bb59b41f81070a95aa7670aceb4bc835af9a0f200f955cce7a->leave($__internal_0a43a249b9d898bb59b41f81070a95aa7670aceb4bc835af9a0f200f955cce7a_prof);

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
