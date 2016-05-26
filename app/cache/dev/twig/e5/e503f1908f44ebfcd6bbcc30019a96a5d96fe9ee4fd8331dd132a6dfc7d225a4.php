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
        $__internal_651e8e2710e2df29466336e4aba615b7a83a4aced253b7011fc9d69b1453a46d = $this->env->getExtension("native_profiler");
        $__internal_651e8e2710e2df29466336e4aba615b7a83a4aced253b7011fc9d69b1453a46d->enter($__internal_651e8e2710e2df29466336e4aba615b7a83a4aced253b7011fc9d69b1453a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651e8e2710e2df29466336e4aba615b7a83a4aced253b7011fc9d69b1453a46d->leave($__internal_651e8e2710e2df29466336e4aba615b7a83a4aced253b7011fc9d69b1453a46d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92c6d957aadd1810680ed8cd3243f7dabf0baa733bd9652a3675e26849c0f9b7 = $this->env->getExtension("native_profiler");
        $__internal_92c6d957aadd1810680ed8cd3243f7dabf0baa733bd9652a3675e26849c0f9b7->enter($__internal_92c6d957aadd1810680ed8cd3243f7dabf0baa733bd9652a3675e26849c0f9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_92c6d957aadd1810680ed8cd3243f7dabf0baa733bd9652a3675e26849c0f9b7->leave($__internal_92c6d957aadd1810680ed8cd3243f7dabf0baa733bd9652a3675e26849c0f9b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db545e874bf03c186f8f9bf8b7b06cd89d34c2e2bc0e8b41723458df1ad4ebf7 = $this->env->getExtension("native_profiler");
        $__internal_db545e874bf03c186f8f9bf8b7b06cd89d34c2e2bc0e8b41723458df1ad4ebf7->enter($__internal_db545e874bf03c186f8f9bf8b7b06cd89d34c2e2bc0e8b41723458df1ad4ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db545e874bf03c186f8f9bf8b7b06cd89d34c2e2bc0e8b41723458df1ad4ebf7->leave($__internal_db545e874bf03c186f8f9bf8b7b06cd89d34c2e2bc0e8b41723458df1ad4ebf7_prof);

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
