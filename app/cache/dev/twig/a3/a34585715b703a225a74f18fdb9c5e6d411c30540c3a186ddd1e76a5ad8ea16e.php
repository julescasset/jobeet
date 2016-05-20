<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4213cf961b45a2838d8977e13abf5e2d8c2863808d7857c72589474222984898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa8ac91a4f7a352b79977f9e3974a5abd8190ba08cf4086273891474fc26d8e7 = $this->env->getExtension("native_profiler");
        $__internal_aa8ac91a4f7a352b79977f9e3974a5abd8190ba08cf4086273891474fc26d8e7->enter($__internal_aa8ac91a4f7a352b79977f9e3974a5abd8190ba08cf4086273891474fc26d8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa8ac91a4f7a352b79977f9e3974a5abd8190ba08cf4086273891474fc26d8e7->leave($__internal_aa8ac91a4f7a352b79977f9e3974a5abd8190ba08cf4086273891474fc26d8e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc89ce8ec9d19dbff766043f429736db801d1754fbcf95ae0a6396d8f0dda5d6 = $this->env->getExtension("native_profiler");
        $__internal_cc89ce8ec9d19dbff766043f429736db801d1754fbcf95ae0a6396d8f0dda5d6->enter($__internal_cc89ce8ec9d19dbff766043f429736db801d1754fbcf95ae0a6396d8f0dda5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc89ce8ec9d19dbff766043f429736db801d1754fbcf95ae0a6396d8f0dda5d6->leave($__internal_cc89ce8ec9d19dbff766043f429736db801d1754fbcf95ae0a6396d8f0dda5d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_576450f7ad324dd641fb579ea0661a7f4a20610a82d8e929c3332ebed128f357 = $this->env->getExtension("native_profiler");
        $__internal_576450f7ad324dd641fb579ea0661a7f4a20610a82d8e929c3332ebed128f357->enter($__internal_576450f7ad324dd641fb579ea0661a7f4a20610a82d8e929c3332ebed128f357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_576450f7ad324dd641fb579ea0661a7f4a20610a82d8e929c3332ebed128f357->leave($__internal_576450f7ad324dd641fb579ea0661a7f4a20610a82d8e929c3332ebed128f357_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4655cf408b916804882b9c6bdfa6f4ea87e9b74606754d1d078ea7a77feebe49 = $this->env->getExtension("native_profiler");
        $__internal_4655cf408b916804882b9c6bdfa6f4ea87e9b74606754d1d078ea7a77feebe49->enter($__internal_4655cf408b916804882b9c6bdfa6f4ea87e9b74606754d1d078ea7a77feebe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4655cf408b916804882b9c6bdfa6f4ea87e9b74606754d1d078ea7a77feebe49->leave($__internal_4655cf408b916804882b9c6bdfa6f4ea87e9b74606754d1d078ea7a77feebe49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
