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
        $__internal_3a43b52634f32fbdbab6616477bd350575e2c9810f2ee8e2b46dfda1ceb68821 = $this->env->getExtension("native_profiler");
        $__internal_3a43b52634f32fbdbab6616477bd350575e2c9810f2ee8e2b46dfda1ceb68821->enter($__internal_3a43b52634f32fbdbab6616477bd350575e2c9810f2ee8e2b46dfda1ceb68821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a43b52634f32fbdbab6616477bd350575e2c9810f2ee8e2b46dfda1ceb68821->leave($__internal_3a43b52634f32fbdbab6616477bd350575e2c9810f2ee8e2b46dfda1ceb68821_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c91d500100f4b6519fb9a98e14d971c59eeb880625476c0fb1c1a04c025d5e6 = $this->env->getExtension("native_profiler");
        $__internal_8c91d500100f4b6519fb9a98e14d971c59eeb880625476c0fb1c1a04c025d5e6->enter($__internal_8c91d500100f4b6519fb9a98e14d971c59eeb880625476c0fb1c1a04c025d5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8c91d500100f4b6519fb9a98e14d971c59eeb880625476c0fb1c1a04c025d5e6->leave($__internal_8c91d500100f4b6519fb9a98e14d971c59eeb880625476c0fb1c1a04c025d5e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c39d04405c8d7994bc882167f0bc924ae558e048e6a84177b9b87c295f1b4416 = $this->env->getExtension("native_profiler");
        $__internal_c39d04405c8d7994bc882167f0bc924ae558e048e6a84177b9b87c295f1b4416->enter($__internal_c39d04405c8d7994bc882167f0bc924ae558e048e6a84177b9b87c295f1b4416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c39d04405c8d7994bc882167f0bc924ae558e048e6a84177b9b87c295f1b4416->leave($__internal_c39d04405c8d7994bc882167f0bc924ae558e048e6a84177b9b87c295f1b4416_prof);

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
