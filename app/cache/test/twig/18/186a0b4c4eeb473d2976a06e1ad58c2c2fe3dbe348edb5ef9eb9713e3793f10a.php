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
        $__internal_f3e8ea3fc2b85353d51fd8b457841266fc57f38711b3b459651d7c573b8b9b4c = $this->env->getExtension("native_profiler");
        $__internal_f3e8ea3fc2b85353d51fd8b457841266fc57f38711b3b459651d7c573b8b9b4c->enter($__internal_f3e8ea3fc2b85353d51fd8b457841266fc57f38711b3b459651d7c573b8b9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3e8ea3fc2b85353d51fd8b457841266fc57f38711b3b459651d7c573b8b9b4c->leave($__internal_f3e8ea3fc2b85353d51fd8b457841266fc57f38711b3b459651d7c573b8b9b4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_464e1345ddb1a1e4282f82450ff34e01260ddfc7d90db5ffb44e3bc6ca3c503b = $this->env->getExtension("native_profiler");
        $__internal_464e1345ddb1a1e4282f82450ff34e01260ddfc7d90db5ffb44e3bc6ca3c503b->enter($__internal_464e1345ddb1a1e4282f82450ff34e01260ddfc7d90db5ffb44e3bc6ca3c503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_464e1345ddb1a1e4282f82450ff34e01260ddfc7d90db5ffb44e3bc6ca3c503b->leave($__internal_464e1345ddb1a1e4282f82450ff34e01260ddfc7d90db5ffb44e3bc6ca3c503b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f359ac80ca2de2eefc0ed1c0cf151c4c3d5149129fca5287c7adb252d93a72b4 = $this->env->getExtension("native_profiler");
        $__internal_f359ac80ca2de2eefc0ed1c0cf151c4c3d5149129fca5287c7adb252d93a72b4->enter($__internal_f359ac80ca2de2eefc0ed1c0cf151c4c3d5149129fca5287c7adb252d93a72b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f359ac80ca2de2eefc0ed1c0cf151c4c3d5149129fca5287c7adb252d93a72b4->leave($__internal_f359ac80ca2de2eefc0ed1c0cf151c4c3d5149129fca5287c7adb252d93a72b4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c356216a3ecaf58f13ca508f07981779b0f99a16582bde3e8f0d08f7c3deb344 = $this->env->getExtension("native_profiler");
        $__internal_c356216a3ecaf58f13ca508f07981779b0f99a16582bde3e8f0d08f7c3deb344->enter($__internal_c356216a3ecaf58f13ca508f07981779b0f99a16582bde3e8f0d08f7c3deb344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c356216a3ecaf58f13ca508f07981779b0f99a16582bde3e8f0d08f7c3deb344->leave($__internal_c356216a3ecaf58f13ca508f07981779b0f99a16582bde3e8f0d08f7c3deb344_prof);

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
