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
        $__internal_c3209cb8cb1d2410451925c7bdfaa85b93e74a89294ce3e928e81ced4baf1408 = $this->env->getExtension("native_profiler");
        $__internal_c3209cb8cb1d2410451925c7bdfaa85b93e74a89294ce3e928e81ced4baf1408->enter($__internal_c3209cb8cb1d2410451925c7bdfaa85b93e74a89294ce3e928e81ced4baf1408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3209cb8cb1d2410451925c7bdfaa85b93e74a89294ce3e928e81ced4baf1408->leave($__internal_c3209cb8cb1d2410451925c7bdfaa85b93e74a89294ce3e928e81ced4baf1408_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f779e612827d369d26a377b0e9dac06bfb5651dc8c004e4ed87eab0f613fbaa = $this->env->getExtension("native_profiler");
        $__internal_2f779e612827d369d26a377b0e9dac06bfb5651dc8c004e4ed87eab0f613fbaa->enter($__internal_2f779e612827d369d26a377b0e9dac06bfb5651dc8c004e4ed87eab0f613fbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f779e612827d369d26a377b0e9dac06bfb5651dc8c004e4ed87eab0f613fbaa->leave($__internal_2f779e612827d369d26a377b0e9dac06bfb5651dc8c004e4ed87eab0f613fbaa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_615cb20e4f32cafe075c52bf069bb63be374cfa7bcf7897fb570c9929d7cf975 = $this->env->getExtension("native_profiler");
        $__internal_615cb20e4f32cafe075c52bf069bb63be374cfa7bcf7897fb570c9929d7cf975->enter($__internal_615cb20e4f32cafe075c52bf069bb63be374cfa7bcf7897fb570c9929d7cf975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_615cb20e4f32cafe075c52bf069bb63be374cfa7bcf7897fb570c9929d7cf975->leave($__internal_615cb20e4f32cafe075c52bf069bb63be374cfa7bcf7897fb570c9929d7cf975_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17b3b1d729c8ce45f478e6e006645f050761ac5d659bcfa4f21e44a2c8f1c373 = $this->env->getExtension("native_profiler");
        $__internal_17b3b1d729c8ce45f478e6e006645f050761ac5d659bcfa4f21e44a2c8f1c373->enter($__internal_17b3b1d729c8ce45f478e6e006645f050761ac5d659bcfa4f21e44a2c8f1c373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_17b3b1d729c8ce45f478e6e006645f050761ac5d659bcfa4f21e44a2c8f1c373->leave($__internal_17b3b1d729c8ce45f478e6e006645f050761ac5d659bcfa4f21e44a2c8f1c373_prof);

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
