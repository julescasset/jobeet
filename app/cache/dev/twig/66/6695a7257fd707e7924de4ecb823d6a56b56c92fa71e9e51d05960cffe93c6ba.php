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
        $__internal_b8fe32f9ab60314b772e3fd054c6aa60e29ad2ed01dadf5d614252f6606e180a = $this->env->getExtension("native_profiler");
        $__internal_b8fe32f9ab60314b772e3fd054c6aa60e29ad2ed01dadf5d614252f6606e180a->enter($__internal_b8fe32f9ab60314b772e3fd054c6aa60e29ad2ed01dadf5d614252f6606e180a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8fe32f9ab60314b772e3fd054c6aa60e29ad2ed01dadf5d614252f6606e180a->leave($__internal_b8fe32f9ab60314b772e3fd054c6aa60e29ad2ed01dadf5d614252f6606e180a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcaa4ff8668ee73b3e959c6c25f2fe5b9fd5e072a93dce130d28be487b61af3a = $this->env->getExtension("native_profiler");
        $__internal_fcaa4ff8668ee73b3e959c6c25f2fe5b9fd5e072a93dce130d28be487b61af3a->enter($__internal_fcaa4ff8668ee73b3e959c6c25f2fe5b9fd5e072a93dce130d28be487b61af3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fcaa4ff8668ee73b3e959c6c25f2fe5b9fd5e072a93dce130d28be487b61af3a->leave($__internal_fcaa4ff8668ee73b3e959c6c25f2fe5b9fd5e072a93dce130d28be487b61af3a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c67b9ca73dc53d18eef28c3be9824880069fbda0ebb02a93e9738a7d2ca8d15d = $this->env->getExtension("native_profiler");
        $__internal_c67b9ca73dc53d18eef28c3be9824880069fbda0ebb02a93e9738a7d2ca8d15d->enter($__internal_c67b9ca73dc53d18eef28c3be9824880069fbda0ebb02a93e9738a7d2ca8d15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c67b9ca73dc53d18eef28c3be9824880069fbda0ebb02a93e9738a7d2ca8d15d->leave($__internal_c67b9ca73dc53d18eef28c3be9824880069fbda0ebb02a93e9738a7d2ca8d15d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37e0df21e8b68dd314cec84bbe0c438aac13e067f65652ec1606754a970a244 = $this->env->getExtension("native_profiler");
        $__internal_f37e0df21e8b68dd314cec84bbe0c438aac13e067f65652ec1606754a970a244->enter($__internal_f37e0df21e8b68dd314cec84bbe0c438aac13e067f65652ec1606754a970a244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f37e0df21e8b68dd314cec84bbe0c438aac13e067f65652ec1606754a970a244->leave($__internal_f37e0df21e8b68dd314cec84bbe0c438aac13e067f65652ec1606754a970a244_prof);

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
