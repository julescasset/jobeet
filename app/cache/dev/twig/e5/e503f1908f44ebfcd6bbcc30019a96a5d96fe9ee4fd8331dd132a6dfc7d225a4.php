<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a35bd7936787faf0a8a5e301206b60679e0ec536d1d3ff6111a82159b8641bfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1ba18deaf41bc9142c083971774b9c3cc0d9ea75a66a0b7844eb8b974b8bf775 = $this->env->getExtension("native_profiler");
        $__internal_1ba18deaf41bc9142c083971774b9c3cc0d9ea75a66a0b7844eb8b974b8bf775->enter($__internal_1ba18deaf41bc9142c083971774b9c3cc0d9ea75a66a0b7844eb8b974b8bf775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ba18deaf41bc9142c083971774b9c3cc0d9ea75a66a0b7844eb8b974b8bf775->leave($__internal_1ba18deaf41bc9142c083971774b9c3cc0d9ea75a66a0b7844eb8b974b8bf775_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81f302b0876368565fa6b96b1d3a96ec8b9e303943d8972c9dfb6c669bdabb2 = $this->env->getExtension("native_profiler");
        $__internal_a81f302b0876368565fa6b96b1d3a96ec8b9e303943d8972c9dfb6c669bdabb2->enter($__internal_a81f302b0876368565fa6b96b1d3a96ec8b9e303943d8972c9dfb6c669bdabb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a81f302b0876368565fa6b96b1d3a96ec8b9e303943d8972c9dfb6c669bdabb2->leave($__internal_a81f302b0876368565fa6b96b1d3a96ec8b9e303943d8972c9dfb6c669bdabb2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b3936911a7deef30d0c4e30f82e35ab742bd37e61dadaacae45929e04bf0da5 = $this->env->getExtension("native_profiler");
        $__internal_2b3936911a7deef30d0c4e30f82e35ab742bd37e61dadaacae45929e04bf0da5->enter($__internal_2b3936911a7deef30d0c4e30f82e35ab742bd37e61dadaacae45929e04bf0da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2b3936911a7deef30d0c4e30f82e35ab742bd37e61dadaacae45929e04bf0da5->leave($__internal_2b3936911a7deef30d0c4e30f82e35ab742bd37e61dadaacae45929e04bf0da5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
