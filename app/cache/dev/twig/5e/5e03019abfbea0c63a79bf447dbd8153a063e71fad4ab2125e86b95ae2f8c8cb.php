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
        $__internal_43e528414603ad6fe56ba2c146a8bdaab76f90150a1b68beca515f01375dfb07 = $this->env->getExtension("native_profiler");
        $__internal_43e528414603ad6fe56ba2c146a8bdaab76f90150a1b68beca515f01375dfb07->enter($__internal_43e528414603ad6fe56ba2c146a8bdaab76f90150a1b68beca515f01375dfb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e528414603ad6fe56ba2c146a8bdaab76f90150a1b68beca515f01375dfb07->leave($__internal_43e528414603ad6fe56ba2c146a8bdaab76f90150a1b68beca515f01375dfb07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_843ba80a1c8aa8aa7f294c49a8c208b5047f6b090f80a17a0dca2d22e36f2e73 = $this->env->getExtension("native_profiler");
        $__internal_843ba80a1c8aa8aa7f294c49a8c208b5047f6b090f80a17a0dca2d22e36f2e73->enter($__internal_843ba80a1c8aa8aa7f294c49a8c208b5047f6b090f80a17a0dca2d22e36f2e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_843ba80a1c8aa8aa7f294c49a8c208b5047f6b090f80a17a0dca2d22e36f2e73->leave($__internal_843ba80a1c8aa8aa7f294c49a8c208b5047f6b090f80a17a0dca2d22e36f2e73_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a37fe31ab8101c82a8d9d3a0f9aa38ab176c79d50a3bbfaf5f4f6f24096b6fd0 = $this->env->getExtension("native_profiler");
        $__internal_a37fe31ab8101c82a8d9d3a0f9aa38ab176c79d50a3bbfaf5f4f6f24096b6fd0->enter($__internal_a37fe31ab8101c82a8d9d3a0f9aa38ab176c79d50a3bbfaf5f4f6f24096b6fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a37fe31ab8101c82a8d9d3a0f9aa38ab176c79d50a3bbfaf5f4f6f24096b6fd0->leave($__internal_a37fe31ab8101c82a8d9d3a0f9aa38ab176c79d50a3bbfaf5f4f6f24096b6fd0_prof);

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
