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
        $__internal_2261b0247b42d9ce24f2fefb96ef2dda0da23062de94c4d4d5879e92f36a659b = $this->env->getExtension("native_profiler");
        $__internal_2261b0247b42d9ce24f2fefb96ef2dda0da23062de94c4d4d5879e92f36a659b->enter($__internal_2261b0247b42d9ce24f2fefb96ef2dda0da23062de94c4d4d5879e92f36a659b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2261b0247b42d9ce24f2fefb96ef2dda0da23062de94c4d4d5879e92f36a659b->leave($__internal_2261b0247b42d9ce24f2fefb96ef2dda0da23062de94c4d4d5879e92f36a659b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac5b96ec7473da0453c6f2503eae1113aa7bea8f2df741154761c9a1bc5d3e04 = $this->env->getExtension("native_profiler");
        $__internal_ac5b96ec7473da0453c6f2503eae1113aa7bea8f2df741154761c9a1bc5d3e04->enter($__internal_ac5b96ec7473da0453c6f2503eae1113aa7bea8f2df741154761c9a1bc5d3e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ac5b96ec7473da0453c6f2503eae1113aa7bea8f2df741154761c9a1bc5d3e04->leave($__internal_ac5b96ec7473da0453c6f2503eae1113aa7bea8f2df741154761c9a1bc5d3e04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab1b38ee8d6e34cea82f4851003e830f63f1977ee3767a4b907be2f81b3c46ed = $this->env->getExtension("native_profiler");
        $__internal_ab1b38ee8d6e34cea82f4851003e830f63f1977ee3767a4b907be2f81b3c46ed->enter($__internal_ab1b38ee8d6e34cea82f4851003e830f63f1977ee3767a4b907be2f81b3c46ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab1b38ee8d6e34cea82f4851003e830f63f1977ee3767a4b907be2f81b3c46ed->leave($__internal_ab1b38ee8d6e34cea82f4851003e830f63f1977ee3767a4b907be2f81b3c46ed_prof);

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
