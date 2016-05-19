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
        $__internal_87808bf6286b575509c37c84f3322ab7cb03a2df828b6a191c0755cc236996cb = $this->env->getExtension("native_profiler");
        $__internal_87808bf6286b575509c37c84f3322ab7cb03a2df828b6a191c0755cc236996cb->enter($__internal_87808bf6286b575509c37c84f3322ab7cb03a2df828b6a191c0755cc236996cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87808bf6286b575509c37c84f3322ab7cb03a2df828b6a191c0755cc236996cb->leave($__internal_87808bf6286b575509c37c84f3322ab7cb03a2df828b6a191c0755cc236996cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4524c7a19fd600ddfa4e31fb0fa9013bf77cf2dd83cc715fdbc3125610fce78 = $this->env->getExtension("native_profiler");
        $__internal_f4524c7a19fd600ddfa4e31fb0fa9013bf77cf2dd83cc715fdbc3125610fce78->enter($__internal_f4524c7a19fd600ddfa4e31fb0fa9013bf77cf2dd83cc715fdbc3125610fce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f4524c7a19fd600ddfa4e31fb0fa9013bf77cf2dd83cc715fdbc3125610fce78->leave($__internal_f4524c7a19fd600ddfa4e31fb0fa9013bf77cf2dd83cc715fdbc3125610fce78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8076bc92cc79c11eac24eb6c89cf11133da8177f53a51a412358cef38142d2a = $this->env->getExtension("native_profiler");
        $__internal_b8076bc92cc79c11eac24eb6c89cf11133da8177f53a51a412358cef38142d2a->enter($__internal_b8076bc92cc79c11eac24eb6c89cf11133da8177f53a51a412358cef38142d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b8076bc92cc79c11eac24eb6c89cf11133da8177f53a51a412358cef38142d2a->leave($__internal_b8076bc92cc79c11eac24eb6c89cf11133da8177f53a51a412358cef38142d2a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a17cf7f835c2a308605d23e77a3b200d5f45bb5dc41b81d28e28b33e8b94350 = $this->env->getExtension("native_profiler");
        $__internal_1a17cf7f835c2a308605d23e77a3b200d5f45bb5dc41b81d28e28b33e8b94350->enter($__internal_1a17cf7f835c2a308605d23e77a3b200d5f45bb5dc41b81d28e28b33e8b94350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1a17cf7f835c2a308605d23e77a3b200d5f45bb5dc41b81d28e28b33e8b94350->leave($__internal_1a17cf7f835c2a308605d23e77a3b200d5f45bb5dc41b81d28e28b33e8b94350_prof);

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
