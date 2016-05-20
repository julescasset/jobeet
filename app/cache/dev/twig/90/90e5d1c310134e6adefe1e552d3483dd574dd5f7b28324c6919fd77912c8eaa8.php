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
        $__internal_8d8a4a09e19e53e36a07177405d93b9e41e8c67a69f0baeb23acb42565195713 = $this->env->getExtension("native_profiler");
        $__internal_8d8a4a09e19e53e36a07177405d93b9e41e8c67a69f0baeb23acb42565195713->enter($__internal_8d8a4a09e19e53e36a07177405d93b9e41e8c67a69f0baeb23acb42565195713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8a4a09e19e53e36a07177405d93b9e41e8c67a69f0baeb23acb42565195713->leave($__internal_8d8a4a09e19e53e36a07177405d93b9e41e8c67a69f0baeb23acb42565195713_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f000fa7a3dc618e208c39517ff1bafbb71486f12ce58514e43e267c2d0b120ca = $this->env->getExtension("native_profiler");
        $__internal_f000fa7a3dc618e208c39517ff1bafbb71486f12ce58514e43e267c2d0b120ca->enter($__internal_f000fa7a3dc618e208c39517ff1bafbb71486f12ce58514e43e267c2d0b120ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f000fa7a3dc618e208c39517ff1bafbb71486f12ce58514e43e267c2d0b120ca->leave($__internal_f000fa7a3dc618e208c39517ff1bafbb71486f12ce58514e43e267c2d0b120ca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd7fb3b3bd4dd049788493149bbaa17dc79685b58f31cf66338ad76245ffe631 = $this->env->getExtension("native_profiler");
        $__internal_bd7fb3b3bd4dd049788493149bbaa17dc79685b58f31cf66338ad76245ffe631->enter($__internal_bd7fb3b3bd4dd049788493149bbaa17dc79685b58f31cf66338ad76245ffe631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd7fb3b3bd4dd049788493149bbaa17dc79685b58f31cf66338ad76245ffe631->leave($__internal_bd7fb3b3bd4dd049788493149bbaa17dc79685b58f31cf66338ad76245ffe631_prof);

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
