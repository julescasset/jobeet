<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a32b927f24044f33a903a675f28d7fb76ec169dc1bd948bc62377ddc080246d0 extends Twig_Template
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
        $__internal_3fdfce3455ef027e7a1312d2263331dc61adce75c619316b497e77c2c085a259 = $this->env->getExtension("native_profiler");
        $__internal_3fdfce3455ef027e7a1312d2263331dc61adce75c619316b497e77c2c085a259->enter($__internal_3fdfce3455ef027e7a1312d2263331dc61adce75c619316b497e77c2c085a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdfce3455ef027e7a1312d2263331dc61adce75c619316b497e77c2c085a259->leave($__internal_3fdfce3455ef027e7a1312d2263331dc61adce75c619316b497e77c2c085a259_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7119e609b21b5d84e5156fa828574b6503919bca690a18f2b3a314d6e5da04ae = $this->env->getExtension("native_profiler");
        $__internal_7119e609b21b5d84e5156fa828574b6503919bca690a18f2b3a314d6e5da04ae->enter($__internal_7119e609b21b5d84e5156fa828574b6503919bca690a18f2b3a314d6e5da04ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7119e609b21b5d84e5156fa828574b6503919bca690a18f2b3a314d6e5da04ae->leave($__internal_7119e609b21b5d84e5156fa828574b6503919bca690a18f2b3a314d6e5da04ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50003bdaa15f1ab0d282dba87ee0c1ddc138d3505db1f4d9796512eaa9526fa7 = $this->env->getExtension("native_profiler");
        $__internal_50003bdaa15f1ab0d282dba87ee0c1ddc138d3505db1f4d9796512eaa9526fa7->enter($__internal_50003bdaa15f1ab0d282dba87ee0c1ddc138d3505db1f4d9796512eaa9526fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50003bdaa15f1ab0d282dba87ee0c1ddc138d3505db1f4d9796512eaa9526fa7->leave($__internal_50003bdaa15f1ab0d282dba87ee0c1ddc138d3505db1f4d9796512eaa9526fa7_prof);

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
