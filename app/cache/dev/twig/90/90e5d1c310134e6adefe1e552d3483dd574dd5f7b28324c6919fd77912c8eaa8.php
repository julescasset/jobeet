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
        $__internal_d9c87ceb8ef6d4979107f3c698c5787b7500395c09651ec1327b2e9a9a7cfe82 = $this->env->getExtension("native_profiler");
        $__internal_d9c87ceb8ef6d4979107f3c698c5787b7500395c09651ec1327b2e9a9a7cfe82->enter($__internal_d9c87ceb8ef6d4979107f3c698c5787b7500395c09651ec1327b2e9a9a7cfe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9c87ceb8ef6d4979107f3c698c5787b7500395c09651ec1327b2e9a9a7cfe82->leave($__internal_d9c87ceb8ef6d4979107f3c698c5787b7500395c09651ec1327b2e9a9a7cfe82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_494d0480de38efd5ff92747b14844de6f0cbcf371c43f392bc568a4ed2ecdaaa = $this->env->getExtension("native_profiler");
        $__internal_494d0480de38efd5ff92747b14844de6f0cbcf371c43f392bc568a4ed2ecdaaa->enter($__internal_494d0480de38efd5ff92747b14844de6f0cbcf371c43f392bc568a4ed2ecdaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_494d0480de38efd5ff92747b14844de6f0cbcf371c43f392bc568a4ed2ecdaaa->leave($__internal_494d0480de38efd5ff92747b14844de6f0cbcf371c43f392bc568a4ed2ecdaaa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_89431095b040fc8d5370ea53d030248f733fb4c9e2a61c340a14db28ed687c6b = $this->env->getExtension("native_profiler");
        $__internal_89431095b040fc8d5370ea53d030248f733fb4c9e2a61c340a14db28ed687c6b->enter($__internal_89431095b040fc8d5370ea53d030248f733fb4c9e2a61c340a14db28ed687c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89431095b040fc8d5370ea53d030248f733fb4c9e2a61c340a14db28ed687c6b->leave($__internal_89431095b040fc8d5370ea53d030248f733fb4c9e2a61c340a14db28ed687c6b_prof);

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
