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
        $__internal_222a862b7f2f344ca57440b3fa0ce2c083b26d4774b4f1c44c27717d3b107467 = $this->env->getExtension("native_profiler");
        $__internal_222a862b7f2f344ca57440b3fa0ce2c083b26d4774b4f1c44c27717d3b107467->enter($__internal_222a862b7f2f344ca57440b3fa0ce2c083b26d4774b4f1c44c27717d3b107467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222a862b7f2f344ca57440b3fa0ce2c083b26d4774b4f1c44c27717d3b107467->leave($__internal_222a862b7f2f344ca57440b3fa0ce2c083b26d4774b4f1c44c27717d3b107467_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62a872469f04567f64bf0ffb9d9952a63afca8110cea5ed737eb381ff30ec909 = $this->env->getExtension("native_profiler");
        $__internal_62a872469f04567f64bf0ffb9d9952a63afca8110cea5ed737eb381ff30ec909->enter($__internal_62a872469f04567f64bf0ffb9d9952a63afca8110cea5ed737eb381ff30ec909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_62a872469f04567f64bf0ffb9d9952a63afca8110cea5ed737eb381ff30ec909->leave($__internal_62a872469f04567f64bf0ffb9d9952a63afca8110cea5ed737eb381ff30ec909_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69a1e5fb6ed210156edd1574445a8f1270df8150a2b71f8e95bc17d8ced6a3ab = $this->env->getExtension("native_profiler");
        $__internal_69a1e5fb6ed210156edd1574445a8f1270df8150a2b71f8e95bc17d8ced6a3ab->enter($__internal_69a1e5fb6ed210156edd1574445a8f1270df8150a2b71f8e95bc17d8ced6a3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69a1e5fb6ed210156edd1574445a8f1270df8150a2b71f8e95bc17d8ced6a3ab->leave($__internal_69a1e5fb6ed210156edd1574445a8f1270df8150a2b71f8e95bc17d8ced6a3ab_prof);

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
