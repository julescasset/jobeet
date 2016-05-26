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
        $__internal_6099047cc5b3f0eae114fc805c7fc14dfc6207431f3cb17763729acc85e1fe74 = $this->env->getExtension("native_profiler");
        $__internal_6099047cc5b3f0eae114fc805c7fc14dfc6207431f3cb17763729acc85e1fe74->enter($__internal_6099047cc5b3f0eae114fc805c7fc14dfc6207431f3cb17763729acc85e1fe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6099047cc5b3f0eae114fc805c7fc14dfc6207431f3cb17763729acc85e1fe74->leave($__internal_6099047cc5b3f0eae114fc805c7fc14dfc6207431f3cb17763729acc85e1fe74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfb405eec00ccd7c11b0e9d9d627521bace88352ad61380ea0998ada18f33d4e = $this->env->getExtension("native_profiler");
        $__internal_cfb405eec00ccd7c11b0e9d9d627521bace88352ad61380ea0998ada18f33d4e->enter($__internal_cfb405eec00ccd7c11b0e9d9d627521bace88352ad61380ea0998ada18f33d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cfb405eec00ccd7c11b0e9d9d627521bace88352ad61380ea0998ada18f33d4e->leave($__internal_cfb405eec00ccd7c11b0e9d9d627521bace88352ad61380ea0998ada18f33d4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18dc40421e1dfd4d97af70a34c9de1b36627d9b1430a00b6f25f002127fa8a01 = $this->env->getExtension("native_profiler");
        $__internal_18dc40421e1dfd4d97af70a34c9de1b36627d9b1430a00b6f25f002127fa8a01->enter($__internal_18dc40421e1dfd4d97af70a34c9de1b36627d9b1430a00b6f25f002127fa8a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18dc40421e1dfd4d97af70a34c9de1b36627d9b1430a00b6f25f002127fa8a01->leave($__internal_18dc40421e1dfd4d97af70a34c9de1b36627d9b1430a00b6f25f002127fa8a01_prof);

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
