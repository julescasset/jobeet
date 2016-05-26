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
        $__internal_07c0f002ce86607b3a33c7cb24007587eb014c5510f1c9ecc274da3dffaed913 = $this->env->getExtension("native_profiler");
        $__internal_07c0f002ce86607b3a33c7cb24007587eb014c5510f1c9ecc274da3dffaed913->enter($__internal_07c0f002ce86607b3a33c7cb24007587eb014c5510f1c9ecc274da3dffaed913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c0f002ce86607b3a33c7cb24007587eb014c5510f1c9ecc274da3dffaed913->leave($__internal_07c0f002ce86607b3a33c7cb24007587eb014c5510f1c9ecc274da3dffaed913_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4555767cbad04533467d0f16421a311d56be8ff69421fd79ca75c0c9b5b4de54 = $this->env->getExtension("native_profiler");
        $__internal_4555767cbad04533467d0f16421a311d56be8ff69421fd79ca75c0c9b5b4de54->enter($__internal_4555767cbad04533467d0f16421a311d56be8ff69421fd79ca75c0c9b5b4de54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4555767cbad04533467d0f16421a311d56be8ff69421fd79ca75c0c9b5b4de54->leave($__internal_4555767cbad04533467d0f16421a311d56be8ff69421fd79ca75c0c9b5b4de54_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_288477b76cf04efd5224a559288a304dd550043ab0473f3728bea2c368c88ccc = $this->env->getExtension("native_profiler");
        $__internal_288477b76cf04efd5224a559288a304dd550043ab0473f3728bea2c368c88ccc->enter($__internal_288477b76cf04efd5224a559288a304dd550043ab0473f3728bea2c368c88ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_288477b76cf04efd5224a559288a304dd550043ab0473f3728bea2c368c88ccc->leave($__internal_288477b76cf04efd5224a559288a304dd550043ab0473f3728bea2c368c88ccc_prof);

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
