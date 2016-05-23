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
        $__internal_bdf071458d9bb77a4ba11fc33515a62a8eb755fb05509ff2efe60ff631e4abe5 = $this->env->getExtension("native_profiler");
        $__internal_bdf071458d9bb77a4ba11fc33515a62a8eb755fb05509ff2efe60ff631e4abe5->enter($__internal_bdf071458d9bb77a4ba11fc33515a62a8eb755fb05509ff2efe60ff631e4abe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf071458d9bb77a4ba11fc33515a62a8eb755fb05509ff2efe60ff631e4abe5->leave($__internal_bdf071458d9bb77a4ba11fc33515a62a8eb755fb05509ff2efe60ff631e4abe5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d91c75ecfd117903996f92b90ee531cbd8cffdb9befacf4b561329fe710f98f8 = $this->env->getExtension("native_profiler");
        $__internal_d91c75ecfd117903996f92b90ee531cbd8cffdb9befacf4b561329fe710f98f8->enter($__internal_d91c75ecfd117903996f92b90ee531cbd8cffdb9befacf4b561329fe710f98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d91c75ecfd117903996f92b90ee531cbd8cffdb9befacf4b561329fe710f98f8->leave($__internal_d91c75ecfd117903996f92b90ee531cbd8cffdb9befacf4b561329fe710f98f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9462e5b5d2c7247b799a76ebdf4395897feed0ce773370418ffafa85013f7697 = $this->env->getExtension("native_profiler");
        $__internal_9462e5b5d2c7247b799a76ebdf4395897feed0ce773370418ffafa85013f7697->enter($__internal_9462e5b5d2c7247b799a76ebdf4395897feed0ce773370418ffafa85013f7697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9462e5b5d2c7247b799a76ebdf4395897feed0ce773370418ffafa85013f7697->leave($__internal_9462e5b5d2c7247b799a76ebdf4395897feed0ce773370418ffafa85013f7697_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a2251dfd15fa61752bfcefaf28fdf677971a88bfb1485f5019c03965e173c8c = $this->env->getExtension("native_profiler");
        $__internal_7a2251dfd15fa61752bfcefaf28fdf677971a88bfb1485f5019c03965e173c8c->enter($__internal_7a2251dfd15fa61752bfcefaf28fdf677971a88bfb1485f5019c03965e173c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7a2251dfd15fa61752bfcefaf28fdf677971a88bfb1485f5019c03965e173c8c->leave($__internal_7a2251dfd15fa61752bfcefaf28fdf677971a88bfb1485f5019c03965e173c8c_prof);

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
