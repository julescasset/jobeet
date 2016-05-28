<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0ad7d33724231ab0f8c95fcac39387df48fc5ee846c153a9b5f77acb91b12900 extends Twig_Template
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
        $__internal_4dfe52dc6cc05762bb8be0b50a90e968283de3214bc8008cf60e19497423c4fa = $this->env->getExtension("native_profiler");
        $__internal_4dfe52dc6cc05762bb8be0b50a90e968283de3214bc8008cf60e19497423c4fa->enter($__internal_4dfe52dc6cc05762bb8be0b50a90e968283de3214bc8008cf60e19497423c4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dfe52dc6cc05762bb8be0b50a90e968283de3214bc8008cf60e19497423c4fa->leave($__internal_4dfe52dc6cc05762bb8be0b50a90e968283de3214bc8008cf60e19497423c4fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53213508ce4b950d75da66bc6e181f6868488ad9c0fd86b517a62b0f87eb19bc = $this->env->getExtension("native_profiler");
        $__internal_53213508ce4b950d75da66bc6e181f6868488ad9c0fd86b517a62b0f87eb19bc->enter($__internal_53213508ce4b950d75da66bc6e181f6868488ad9c0fd86b517a62b0f87eb19bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_53213508ce4b950d75da66bc6e181f6868488ad9c0fd86b517a62b0f87eb19bc->leave($__internal_53213508ce4b950d75da66bc6e181f6868488ad9c0fd86b517a62b0f87eb19bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92932a79b64842755d0b034c5031048ecd9960663813bdce3bc480830060bb22 = $this->env->getExtension("native_profiler");
        $__internal_92932a79b64842755d0b034c5031048ecd9960663813bdce3bc480830060bb22->enter($__internal_92932a79b64842755d0b034c5031048ecd9960663813bdce3bc480830060bb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92932a79b64842755d0b034c5031048ecd9960663813bdce3bc480830060bb22->leave($__internal_92932a79b64842755d0b034c5031048ecd9960663813bdce3bc480830060bb22_prof);

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
