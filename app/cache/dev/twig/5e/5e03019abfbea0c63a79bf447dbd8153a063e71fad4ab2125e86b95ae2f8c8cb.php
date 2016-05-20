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
        $__internal_57286853a09cdcaad4d40ee71966e0ad3efe39ab03eabcc6ae9e780f9d93e520 = $this->env->getExtension("native_profiler");
        $__internal_57286853a09cdcaad4d40ee71966e0ad3efe39ab03eabcc6ae9e780f9d93e520->enter($__internal_57286853a09cdcaad4d40ee71966e0ad3efe39ab03eabcc6ae9e780f9d93e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57286853a09cdcaad4d40ee71966e0ad3efe39ab03eabcc6ae9e780f9d93e520->leave($__internal_57286853a09cdcaad4d40ee71966e0ad3efe39ab03eabcc6ae9e780f9d93e520_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1abe0ac1701d22039fa6ce96fef81b483b9732b57a9efd9d49946c9b73055ef = $this->env->getExtension("native_profiler");
        $__internal_b1abe0ac1701d22039fa6ce96fef81b483b9732b57a9efd9d49946c9b73055ef->enter($__internal_b1abe0ac1701d22039fa6ce96fef81b483b9732b57a9efd9d49946c9b73055ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b1abe0ac1701d22039fa6ce96fef81b483b9732b57a9efd9d49946c9b73055ef->leave($__internal_b1abe0ac1701d22039fa6ce96fef81b483b9732b57a9efd9d49946c9b73055ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4905caf8eabbd1946a24a5ad22f2a56d061103988ce7c82cf1b241735303b48 = $this->env->getExtension("native_profiler");
        $__internal_d4905caf8eabbd1946a24a5ad22f2a56d061103988ce7c82cf1b241735303b48->enter($__internal_d4905caf8eabbd1946a24a5ad22f2a56d061103988ce7c82cf1b241735303b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4905caf8eabbd1946a24a5ad22f2a56d061103988ce7c82cf1b241735303b48->leave($__internal_d4905caf8eabbd1946a24a5ad22f2a56d061103988ce7c82cf1b241735303b48_prof);

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
