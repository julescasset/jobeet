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
        $__internal_ffe4e0b5b1f6ac17db8e9442393e0d458893f6270233b0438b6df02ae2a5ed7b = $this->env->getExtension("native_profiler");
        $__internal_ffe4e0b5b1f6ac17db8e9442393e0d458893f6270233b0438b6df02ae2a5ed7b->enter($__internal_ffe4e0b5b1f6ac17db8e9442393e0d458893f6270233b0438b6df02ae2a5ed7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe4e0b5b1f6ac17db8e9442393e0d458893f6270233b0438b6df02ae2a5ed7b->leave($__internal_ffe4e0b5b1f6ac17db8e9442393e0d458893f6270233b0438b6df02ae2a5ed7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66483117695004448526010bda2f533cbf520c00721d78b71e1b3b9333c97de4 = $this->env->getExtension("native_profiler");
        $__internal_66483117695004448526010bda2f533cbf520c00721d78b71e1b3b9333c97de4->enter($__internal_66483117695004448526010bda2f533cbf520c00721d78b71e1b3b9333c97de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_66483117695004448526010bda2f533cbf520c00721d78b71e1b3b9333c97de4->leave($__internal_66483117695004448526010bda2f533cbf520c00721d78b71e1b3b9333c97de4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f090642a55be919a1171546ea693583162a769eac3ebe384f035943b898dacef = $this->env->getExtension("native_profiler");
        $__internal_f090642a55be919a1171546ea693583162a769eac3ebe384f035943b898dacef->enter($__internal_f090642a55be919a1171546ea693583162a769eac3ebe384f035943b898dacef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f090642a55be919a1171546ea693583162a769eac3ebe384f035943b898dacef->leave($__internal_f090642a55be919a1171546ea693583162a769eac3ebe384f035943b898dacef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26b81880f052cf0809588dbb11f993cc9cb8b5c3156b307ecf478818a6cc7c2a = $this->env->getExtension("native_profiler");
        $__internal_26b81880f052cf0809588dbb11f993cc9cb8b5c3156b307ecf478818a6cc7c2a->enter($__internal_26b81880f052cf0809588dbb11f993cc9cb8b5c3156b307ecf478818a6cc7c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_26b81880f052cf0809588dbb11f993cc9cb8b5c3156b307ecf478818a6cc7c2a->leave($__internal_26b81880f052cf0809588dbb11f993cc9cb8b5c3156b307ecf478818a6cc7c2a_prof);

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
