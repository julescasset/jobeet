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
        $__internal_fc889a271acf559b88d5bcbeddf1875ee2e72f0332ac5bcf833e708381bb8072 = $this->env->getExtension("native_profiler");
        $__internal_fc889a271acf559b88d5bcbeddf1875ee2e72f0332ac5bcf833e708381bb8072->enter($__internal_fc889a271acf559b88d5bcbeddf1875ee2e72f0332ac5bcf833e708381bb8072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc889a271acf559b88d5bcbeddf1875ee2e72f0332ac5bcf833e708381bb8072->leave($__internal_fc889a271acf559b88d5bcbeddf1875ee2e72f0332ac5bcf833e708381bb8072_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d62d94c47483337b7a64ee62d7bb4fe9af62c869c939398bc37512afad0ec206 = $this->env->getExtension("native_profiler");
        $__internal_d62d94c47483337b7a64ee62d7bb4fe9af62c869c939398bc37512afad0ec206->enter($__internal_d62d94c47483337b7a64ee62d7bb4fe9af62c869c939398bc37512afad0ec206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d62d94c47483337b7a64ee62d7bb4fe9af62c869c939398bc37512afad0ec206->leave($__internal_d62d94c47483337b7a64ee62d7bb4fe9af62c869c939398bc37512afad0ec206_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc8c36ff4a856be2948164afbd99d5375c6ea52508df14c43ac8f97bef1b3ec2 = $this->env->getExtension("native_profiler");
        $__internal_dc8c36ff4a856be2948164afbd99d5375c6ea52508df14c43ac8f97bef1b3ec2->enter($__internal_dc8c36ff4a856be2948164afbd99d5375c6ea52508df14c43ac8f97bef1b3ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dc8c36ff4a856be2948164afbd99d5375c6ea52508df14c43ac8f97bef1b3ec2->leave($__internal_dc8c36ff4a856be2948164afbd99d5375c6ea52508df14c43ac8f97bef1b3ec2_prof);

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
