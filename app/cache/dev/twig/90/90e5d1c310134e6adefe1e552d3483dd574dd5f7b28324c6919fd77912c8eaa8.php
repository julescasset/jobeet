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
        $__internal_999cbf15aebccd705415938f746e31f7a848b270a386cd6fb532d81f867d907e = $this->env->getExtension("native_profiler");
        $__internal_999cbf15aebccd705415938f746e31f7a848b270a386cd6fb532d81f867d907e->enter($__internal_999cbf15aebccd705415938f746e31f7a848b270a386cd6fb532d81f867d907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_999cbf15aebccd705415938f746e31f7a848b270a386cd6fb532d81f867d907e->leave($__internal_999cbf15aebccd705415938f746e31f7a848b270a386cd6fb532d81f867d907e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_733cc0f7a433f00e11d5153a237dbf6e8e6c5f12b176d0453ab9fff2fa3f2453 = $this->env->getExtension("native_profiler");
        $__internal_733cc0f7a433f00e11d5153a237dbf6e8e6c5f12b176d0453ab9fff2fa3f2453->enter($__internal_733cc0f7a433f00e11d5153a237dbf6e8e6c5f12b176d0453ab9fff2fa3f2453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_733cc0f7a433f00e11d5153a237dbf6e8e6c5f12b176d0453ab9fff2fa3f2453->leave($__internal_733cc0f7a433f00e11d5153a237dbf6e8e6c5f12b176d0453ab9fff2fa3f2453_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18c985a89339cce83c21d4524a9b1b0d851ff1aab0ae7c332fe5b665ce86370 = $this->env->getExtension("native_profiler");
        $__internal_f18c985a89339cce83c21d4524a9b1b0d851ff1aab0ae7c332fe5b665ce86370->enter($__internal_f18c985a89339cce83c21d4524a9b1b0d851ff1aab0ae7c332fe5b665ce86370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f18c985a89339cce83c21d4524a9b1b0d851ff1aab0ae7c332fe5b665ce86370->leave($__internal_f18c985a89339cce83c21d4524a9b1b0d851ff1aab0ae7c332fe5b665ce86370_prof);

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
