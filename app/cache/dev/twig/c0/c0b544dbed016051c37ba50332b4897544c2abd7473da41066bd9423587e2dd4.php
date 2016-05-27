<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_295d0e48222cc9de78a126662de64f5d5921dda356187832f6c2529fcd1f019d extends Twig_Template
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
        $__internal_03e16510d51927e15ce0b781fbbdc962f80461ebcd149b6971358eae6d4fea03 = $this->env->getExtension("native_profiler");
        $__internal_03e16510d51927e15ce0b781fbbdc962f80461ebcd149b6971358eae6d4fea03->enter($__internal_03e16510d51927e15ce0b781fbbdc962f80461ebcd149b6971358eae6d4fea03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e16510d51927e15ce0b781fbbdc962f80461ebcd149b6971358eae6d4fea03->leave($__internal_03e16510d51927e15ce0b781fbbdc962f80461ebcd149b6971358eae6d4fea03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c2cac7785e832d93aa8a1cab9143f0cbd0b9e2e84d64d5f736f5a31317f1e8b = $this->env->getExtension("native_profiler");
        $__internal_1c2cac7785e832d93aa8a1cab9143f0cbd0b9e2e84d64d5f736f5a31317f1e8b->enter($__internal_1c2cac7785e832d93aa8a1cab9143f0cbd0b9e2e84d64d5f736f5a31317f1e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c2cac7785e832d93aa8a1cab9143f0cbd0b9e2e84d64d5f736f5a31317f1e8b->leave($__internal_1c2cac7785e832d93aa8a1cab9143f0cbd0b9e2e84d64d5f736f5a31317f1e8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5959f1d9ff07936849ef96778389a6296ad9e47c5b873e9b8d1e4d76a3f208c = $this->env->getExtension("native_profiler");
        $__internal_c5959f1d9ff07936849ef96778389a6296ad9e47c5b873e9b8d1e4d76a3f208c->enter($__internal_c5959f1d9ff07936849ef96778389a6296ad9e47c5b873e9b8d1e4d76a3f208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5959f1d9ff07936849ef96778389a6296ad9e47c5b873e9b8d1e4d76a3f208c->leave($__internal_c5959f1d9ff07936849ef96778389a6296ad9e47c5b873e9b8d1e4d76a3f208c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05a6320c0d3ec9dd79d22dd30d302a58b8cb9ce0c453b7e9173bd07797a9c37a = $this->env->getExtension("native_profiler");
        $__internal_05a6320c0d3ec9dd79d22dd30d302a58b8cb9ce0c453b7e9173bd07797a9c37a->enter($__internal_05a6320c0d3ec9dd79d22dd30d302a58b8cb9ce0c453b7e9173bd07797a9c37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_05a6320c0d3ec9dd79d22dd30d302a58b8cb9ce0c453b7e9173bd07797a9c37a->leave($__internal_05a6320c0d3ec9dd79d22dd30d302a58b8cb9ce0c453b7e9173bd07797a9c37a_prof);

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
