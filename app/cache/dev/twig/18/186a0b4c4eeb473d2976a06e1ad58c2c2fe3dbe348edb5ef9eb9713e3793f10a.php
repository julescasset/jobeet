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
        $__internal_87fbc438c6c78fd6761ad6c7c3a149281bfc6dae59a5a723217946c84a0e1ac4 = $this->env->getExtension("native_profiler");
        $__internal_87fbc438c6c78fd6761ad6c7c3a149281bfc6dae59a5a723217946c84a0e1ac4->enter($__internal_87fbc438c6c78fd6761ad6c7c3a149281bfc6dae59a5a723217946c84a0e1ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87fbc438c6c78fd6761ad6c7c3a149281bfc6dae59a5a723217946c84a0e1ac4->leave($__internal_87fbc438c6c78fd6761ad6c7c3a149281bfc6dae59a5a723217946c84a0e1ac4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd178c1ad8e9ec8293313b570e7fa7d42f4d18bee003765b30a52885c802b364 = $this->env->getExtension("native_profiler");
        $__internal_dd178c1ad8e9ec8293313b570e7fa7d42f4d18bee003765b30a52885c802b364->enter($__internal_dd178c1ad8e9ec8293313b570e7fa7d42f4d18bee003765b30a52885c802b364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd178c1ad8e9ec8293313b570e7fa7d42f4d18bee003765b30a52885c802b364->leave($__internal_dd178c1ad8e9ec8293313b570e7fa7d42f4d18bee003765b30a52885c802b364_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04f9931025e3b5221132f0fa4669d1c342835ba8bcc78321df57aff6a9900a04 = $this->env->getExtension("native_profiler");
        $__internal_04f9931025e3b5221132f0fa4669d1c342835ba8bcc78321df57aff6a9900a04->enter($__internal_04f9931025e3b5221132f0fa4669d1c342835ba8bcc78321df57aff6a9900a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04f9931025e3b5221132f0fa4669d1c342835ba8bcc78321df57aff6a9900a04->leave($__internal_04f9931025e3b5221132f0fa4669d1c342835ba8bcc78321df57aff6a9900a04_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bd2ef9562811dfa7e9493af2e8313b8439db06bca7a36e3898f81c741c1ca03 = $this->env->getExtension("native_profiler");
        $__internal_5bd2ef9562811dfa7e9493af2e8313b8439db06bca7a36e3898f81c741c1ca03->enter($__internal_5bd2ef9562811dfa7e9493af2e8313b8439db06bca7a36e3898f81c741c1ca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5bd2ef9562811dfa7e9493af2e8313b8439db06bca7a36e3898f81c741c1ca03->leave($__internal_5bd2ef9562811dfa7e9493af2e8313b8439db06bca7a36e3898f81c741c1ca03_prof);

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
