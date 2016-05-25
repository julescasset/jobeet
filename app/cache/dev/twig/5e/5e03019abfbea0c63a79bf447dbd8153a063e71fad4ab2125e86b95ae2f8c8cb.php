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
        $__internal_e8d219bc22065df0326cb08c4e4ce1677e6a22432d9987790d85d067b039b2d1 = $this->env->getExtension("native_profiler");
        $__internal_e8d219bc22065df0326cb08c4e4ce1677e6a22432d9987790d85d067b039b2d1->enter($__internal_e8d219bc22065df0326cb08c4e4ce1677e6a22432d9987790d85d067b039b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d219bc22065df0326cb08c4e4ce1677e6a22432d9987790d85d067b039b2d1->leave($__internal_e8d219bc22065df0326cb08c4e4ce1677e6a22432d9987790d85d067b039b2d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_126efde6ff3e1705d71cfa529070696cf31faf7547b42caeb56521865835421b = $this->env->getExtension("native_profiler");
        $__internal_126efde6ff3e1705d71cfa529070696cf31faf7547b42caeb56521865835421b->enter($__internal_126efde6ff3e1705d71cfa529070696cf31faf7547b42caeb56521865835421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_126efde6ff3e1705d71cfa529070696cf31faf7547b42caeb56521865835421b->leave($__internal_126efde6ff3e1705d71cfa529070696cf31faf7547b42caeb56521865835421b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a51b03e1e2699b33ef81b92879e3ccf20e3b5efda2e44b5501c5bbba3db84c9 = $this->env->getExtension("native_profiler");
        $__internal_3a51b03e1e2699b33ef81b92879e3ccf20e3b5efda2e44b5501c5bbba3db84c9->enter($__internal_3a51b03e1e2699b33ef81b92879e3ccf20e3b5efda2e44b5501c5bbba3db84c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a51b03e1e2699b33ef81b92879e3ccf20e3b5efda2e44b5501c5bbba3db84c9->leave($__internal_3a51b03e1e2699b33ef81b92879e3ccf20e3b5efda2e44b5501c5bbba3db84c9_prof);

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
