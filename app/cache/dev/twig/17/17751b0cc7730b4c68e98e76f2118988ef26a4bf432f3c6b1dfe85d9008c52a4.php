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
        $__internal_7d43462e4b2158a82151e7ba43654ba6ac27eb8d7fab23ac444cdb4f799a6ce7 = $this->env->getExtension("native_profiler");
        $__internal_7d43462e4b2158a82151e7ba43654ba6ac27eb8d7fab23ac444cdb4f799a6ce7->enter($__internal_7d43462e4b2158a82151e7ba43654ba6ac27eb8d7fab23ac444cdb4f799a6ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d43462e4b2158a82151e7ba43654ba6ac27eb8d7fab23ac444cdb4f799a6ce7->leave($__internal_7d43462e4b2158a82151e7ba43654ba6ac27eb8d7fab23ac444cdb4f799a6ce7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_736092a732c6eb421ab77685447af97dc2873d29cb7fbfa37d6bebcdaaa4a6bf = $this->env->getExtension("native_profiler");
        $__internal_736092a732c6eb421ab77685447af97dc2873d29cb7fbfa37d6bebcdaaa4a6bf->enter($__internal_736092a732c6eb421ab77685447af97dc2873d29cb7fbfa37d6bebcdaaa4a6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_736092a732c6eb421ab77685447af97dc2873d29cb7fbfa37d6bebcdaaa4a6bf->leave($__internal_736092a732c6eb421ab77685447af97dc2873d29cb7fbfa37d6bebcdaaa4a6bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0929033b93be63e96077f6b6290651d0284456579909ca1d49734592b4c5d80 = $this->env->getExtension("native_profiler");
        $__internal_d0929033b93be63e96077f6b6290651d0284456579909ca1d49734592b4c5d80->enter($__internal_d0929033b93be63e96077f6b6290651d0284456579909ca1d49734592b4c5d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d0929033b93be63e96077f6b6290651d0284456579909ca1d49734592b4c5d80->leave($__internal_d0929033b93be63e96077f6b6290651d0284456579909ca1d49734592b4c5d80_prof);

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
