<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f0ec720153c79e55cdc71ee32199593ed58d29574ba08bb205809697b0a0e84a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_85bccbf8b7cfa939227c963c39cf141dc02965ab3f68a28ac6cbd1126999fbc9 = $this->env->getExtension("native_profiler");
        $__internal_85bccbf8b7cfa939227c963c39cf141dc02965ab3f68a28ac6cbd1126999fbc9->enter($__internal_85bccbf8b7cfa939227c963c39cf141dc02965ab3f68a28ac6cbd1126999fbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85bccbf8b7cfa939227c963c39cf141dc02965ab3f68a28ac6cbd1126999fbc9->leave($__internal_85bccbf8b7cfa939227c963c39cf141dc02965ab3f68a28ac6cbd1126999fbc9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ea45f60e31c34f08410b54d128a917ecaf272e5fdc61ab6fd8bc5a95f43a44c = $this->env->getExtension("native_profiler");
        $__internal_4ea45f60e31c34f08410b54d128a917ecaf272e5fdc61ab6fd8bc5a95f43a44c->enter($__internal_4ea45f60e31c34f08410b54d128a917ecaf272e5fdc61ab6fd8bc5a95f43a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4ea45f60e31c34f08410b54d128a917ecaf272e5fdc61ab6fd8bc5a95f43a44c->leave($__internal_4ea45f60e31c34f08410b54d128a917ecaf272e5fdc61ab6fd8bc5a95f43a44c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bac2080b9dc37703d047793e317dce15b1c0c233fd6dbc07886e3c82f6c781e9 = $this->env->getExtension("native_profiler");
        $__internal_bac2080b9dc37703d047793e317dce15b1c0c233fd6dbc07886e3c82f6c781e9->enter($__internal_bac2080b9dc37703d047793e317dce15b1c0c233fd6dbc07886e3c82f6c781e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bac2080b9dc37703d047793e317dce15b1c0c233fd6dbc07886e3c82f6c781e9->leave($__internal_bac2080b9dc37703d047793e317dce15b1c0c233fd6dbc07886e3c82f6c781e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
