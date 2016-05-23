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
        $__internal_333ecddde1b49fa9cf74a7ba2fee5f4da808daf0e13b8576063c45f552bee6d5 = $this->env->getExtension("native_profiler");
        $__internal_333ecddde1b49fa9cf74a7ba2fee5f4da808daf0e13b8576063c45f552bee6d5->enter($__internal_333ecddde1b49fa9cf74a7ba2fee5f4da808daf0e13b8576063c45f552bee6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_333ecddde1b49fa9cf74a7ba2fee5f4da808daf0e13b8576063c45f552bee6d5->leave($__internal_333ecddde1b49fa9cf74a7ba2fee5f4da808daf0e13b8576063c45f552bee6d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f6d9ecf983026e9bcaa41a4001d4406d38b9c03d96ee7d780b0e1551f055baf = $this->env->getExtension("native_profiler");
        $__internal_7f6d9ecf983026e9bcaa41a4001d4406d38b9c03d96ee7d780b0e1551f055baf->enter($__internal_7f6d9ecf983026e9bcaa41a4001d4406d38b9c03d96ee7d780b0e1551f055baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f6d9ecf983026e9bcaa41a4001d4406d38b9c03d96ee7d780b0e1551f055baf->leave($__internal_7f6d9ecf983026e9bcaa41a4001d4406d38b9c03d96ee7d780b0e1551f055baf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_331be0ee927d1cc99c8352956dca67d2cc01c51055759b67bcaf038377fdda85 = $this->env->getExtension("native_profiler");
        $__internal_331be0ee927d1cc99c8352956dca67d2cc01c51055759b67bcaf038377fdda85->enter($__internal_331be0ee927d1cc99c8352956dca67d2cc01c51055759b67bcaf038377fdda85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_331be0ee927d1cc99c8352956dca67d2cc01c51055759b67bcaf038377fdda85->leave($__internal_331be0ee927d1cc99c8352956dca67d2cc01c51055759b67bcaf038377fdda85_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3f1cbf802c7f208fdb15bafa402caa8a1bb19129a885a508f33856e82f94f4 = $this->env->getExtension("native_profiler");
        $__internal_fd3f1cbf802c7f208fdb15bafa402caa8a1bb19129a885a508f33856e82f94f4->enter($__internal_fd3f1cbf802c7f208fdb15bafa402caa8a1bb19129a885a508f33856e82f94f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fd3f1cbf802c7f208fdb15bafa402caa8a1bb19129a885a508f33856e82f94f4->leave($__internal_fd3f1cbf802c7f208fdb15bafa402caa8a1bb19129a885a508f33856e82f94f4_prof);

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
