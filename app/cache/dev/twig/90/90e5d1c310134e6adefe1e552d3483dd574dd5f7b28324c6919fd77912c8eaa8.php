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
        $__internal_e2d16df193cb347cc0b25d26d84b203097db1dce92ee1d4e2a6200a302f3bac8 = $this->env->getExtension("native_profiler");
        $__internal_e2d16df193cb347cc0b25d26d84b203097db1dce92ee1d4e2a6200a302f3bac8->enter($__internal_e2d16df193cb347cc0b25d26d84b203097db1dce92ee1d4e2a6200a302f3bac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d16df193cb347cc0b25d26d84b203097db1dce92ee1d4e2a6200a302f3bac8->leave($__internal_e2d16df193cb347cc0b25d26d84b203097db1dce92ee1d4e2a6200a302f3bac8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db956c86a3100120ed9e5ce52a8461ca1ae315e651fc093f57b9338728b9055a = $this->env->getExtension("native_profiler");
        $__internal_db956c86a3100120ed9e5ce52a8461ca1ae315e651fc093f57b9338728b9055a->enter($__internal_db956c86a3100120ed9e5ce52a8461ca1ae315e651fc093f57b9338728b9055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_db956c86a3100120ed9e5ce52a8461ca1ae315e651fc093f57b9338728b9055a->leave($__internal_db956c86a3100120ed9e5ce52a8461ca1ae315e651fc093f57b9338728b9055a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae97f6d544c0fdf36523d515719b9fd56c0a11f4bdf6ae8183fbdef18d4bff2 = $this->env->getExtension("native_profiler");
        $__internal_1ae97f6d544c0fdf36523d515719b9fd56c0a11f4bdf6ae8183fbdef18d4bff2->enter($__internal_1ae97f6d544c0fdf36523d515719b9fd56c0a11f4bdf6ae8183fbdef18d4bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ae97f6d544c0fdf36523d515719b9fd56c0a11f4bdf6ae8183fbdef18d4bff2->leave($__internal_1ae97f6d544c0fdf36523d515719b9fd56c0a11f4bdf6ae8183fbdef18d4bff2_prof);

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
