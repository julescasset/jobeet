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
        $__internal_b72f26d5423360fd41dfc52e388f8264353e20fbf674388fe6a94aa431133524 = $this->env->getExtension("native_profiler");
        $__internal_b72f26d5423360fd41dfc52e388f8264353e20fbf674388fe6a94aa431133524->enter($__internal_b72f26d5423360fd41dfc52e388f8264353e20fbf674388fe6a94aa431133524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72f26d5423360fd41dfc52e388f8264353e20fbf674388fe6a94aa431133524->leave($__internal_b72f26d5423360fd41dfc52e388f8264353e20fbf674388fe6a94aa431133524_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e57f8e172d6ac743ecbdcbb084295b8e35725e8bc5738b34466003d84637257 = $this->env->getExtension("native_profiler");
        $__internal_5e57f8e172d6ac743ecbdcbb084295b8e35725e8bc5738b34466003d84637257->enter($__internal_5e57f8e172d6ac743ecbdcbb084295b8e35725e8bc5738b34466003d84637257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e57f8e172d6ac743ecbdcbb084295b8e35725e8bc5738b34466003d84637257->leave($__internal_5e57f8e172d6ac743ecbdcbb084295b8e35725e8bc5738b34466003d84637257_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd1b76395dfdb4e10b571a04dc1c41fa2daebdb1eee1e6803d1ea9cbc8028a1b = $this->env->getExtension("native_profiler");
        $__internal_dd1b76395dfdb4e10b571a04dc1c41fa2daebdb1eee1e6803d1ea9cbc8028a1b->enter($__internal_dd1b76395dfdb4e10b571a04dc1c41fa2daebdb1eee1e6803d1ea9cbc8028a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd1b76395dfdb4e10b571a04dc1c41fa2daebdb1eee1e6803d1ea9cbc8028a1b->leave($__internal_dd1b76395dfdb4e10b571a04dc1c41fa2daebdb1eee1e6803d1ea9cbc8028a1b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_818c8e6e87e67cdffc56770a4fba90712f6a5a7b9b2c0c3b8e739157f8b8da27 = $this->env->getExtension("native_profiler");
        $__internal_818c8e6e87e67cdffc56770a4fba90712f6a5a7b9b2c0c3b8e739157f8b8da27->enter($__internal_818c8e6e87e67cdffc56770a4fba90712f6a5a7b9b2c0c3b8e739157f8b8da27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_818c8e6e87e67cdffc56770a4fba90712f6a5a7b9b2c0c3b8e739157f8b8da27->leave($__internal_818c8e6e87e67cdffc56770a4fba90712f6a5a7b9b2c0c3b8e739157f8b8da27_prof);

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
