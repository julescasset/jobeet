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
        $__internal_fb37abe09e375563b3e6bcb2cfe0e8de8581e316d3f395d1f6907a3da91faa3d = $this->env->getExtension("native_profiler");
        $__internal_fb37abe09e375563b3e6bcb2cfe0e8de8581e316d3f395d1f6907a3da91faa3d->enter($__internal_fb37abe09e375563b3e6bcb2cfe0e8de8581e316d3f395d1f6907a3da91faa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb37abe09e375563b3e6bcb2cfe0e8de8581e316d3f395d1f6907a3da91faa3d->leave($__internal_fb37abe09e375563b3e6bcb2cfe0e8de8581e316d3f395d1f6907a3da91faa3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_666f95e7cb015890b3728dacb0d84ce9e196993b21d659745279dce9d47d8eeb = $this->env->getExtension("native_profiler");
        $__internal_666f95e7cb015890b3728dacb0d84ce9e196993b21d659745279dce9d47d8eeb->enter($__internal_666f95e7cb015890b3728dacb0d84ce9e196993b21d659745279dce9d47d8eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_666f95e7cb015890b3728dacb0d84ce9e196993b21d659745279dce9d47d8eeb->leave($__internal_666f95e7cb015890b3728dacb0d84ce9e196993b21d659745279dce9d47d8eeb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b5988e69eacd6e7f1ecb71120a7c115de246fd49b66bc6da4bc58cdd3949019 = $this->env->getExtension("native_profiler");
        $__internal_9b5988e69eacd6e7f1ecb71120a7c115de246fd49b66bc6da4bc58cdd3949019->enter($__internal_9b5988e69eacd6e7f1ecb71120a7c115de246fd49b66bc6da4bc58cdd3949019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b5988e69eacd6e7f1ecb71120a7c115de246fd49b66bc6da4bc58cdd3949019->leave($__internal_9b5988e69eacd6e7f1ecb71120a7c115de246fd49b66bc6da4bc58cdd3949019_prof);

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
