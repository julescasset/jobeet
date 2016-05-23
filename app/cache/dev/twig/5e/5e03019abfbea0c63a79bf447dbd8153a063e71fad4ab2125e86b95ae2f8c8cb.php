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
        $__internal_5d0824597aa5ac0ea74c5d3bef8fd25166a84d808b1b3b382759f88294e5d980 = $this->env->getExtension("native_profiler");
        $__internal_5d0824597aa5ac0ea74c5d3bef8fd25166a84d808b1b3b382759f88294e5d980->enter($__internal_5d0824597aa5ac0ea74c5d3bef8fd25166a84d808b1b3b382759f88294e5d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d0824597aa5ac0ea74c5d3bef8fd25166a84d808b1b3b382759f88294e5d980->leave($__internal_5d0824597aa5ac0ea74c5d3bef8fd25166a84d808b1b3b382759f88294e5d980_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdc46db66afed9f482a5f522f5b3a5f2ccb1705b569ff5240315a586eebbd686 = $this->env->getExtension("native_profiler");
        $__internal_bdc46db66afed9f482a5f522f5b3a5f2ccb1705b569ff5240315a586eebbd686->enter($__internal_bdc46db66afed9f482a5f522f5b3a5f2ccb1705b569ff5240315a586eebbd686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bdc46db66afed9f482a5f522f5b3a5f2ccb1705b569ff5240315a586eebbd686->leave($__internal_bdc46db66afed9f482a5f522f5b3a5f2ccb1705b569ff5240315a586eebbd686_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9430b4dfb4a127df8ddb21fcfee53d738fb3fd95fe7be61241ca054c6e1324ac = $this->env->getExtension("native_profiler");
        $__internal_9430b4dfb4a127df8ddb21fcfee53d738fb3fd95fe7be61241ca054c6e1324ac->enter($__internal_9430b4dfb4a127df8ddb21fcfee53d738fb3fd95fe7be61241ca054c6e1324ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9430b4dfb4a127df8ddb21fcfee53d738fb3fd95fe7be61241ca054c6e1324ac->leave($__internal_9430b4dfb4a127df8ddb21fcfee53d738fb3fd95fe7be61241ca054c6e1324ac_prof);

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
