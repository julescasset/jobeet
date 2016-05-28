<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7347dcfe6ebd8b0577306e25d0472d762627db5a9ad0902a3d103dd8e7661ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1f463e128b8ebdf3ae46479c5d5691bcf1607c3ae3427dee08688374e4d5ec33 = $this->env->getExtension("native_profiler");
        $__internal_1f463e128b8ebdf3ae46479c5d5691bcf1607c3ae3427dee08688374e4d5ec33->enter($__internal_1f463e128b8ebdf3ae46479c5d5691bcf1607c3ae3427dee08688374e4d5ec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f463e128b8ebdf3ae46479c5d5691bcf1607c3ae3427dee08688374e4d5ec33->leave($__internal_1f463e128b8ebdf3ae46479c5d5691bcf1607c3ae3427dee08688374e4d5ec33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0e7b113736f23d0a7f9a3200a17f2d590049003e9beec2d0e2d869881e33441 = $this->env->getExtension("native_profiler");
        $__internal_b0e7b113736f23d0a7f9a3200a17f2d590049003e9beec2d0e2d869881e33441->enter($__internal_b0e7b113736f23d0a7f9a3200a17f2d590049003e9beec2d0e2d869881e33441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0e7b113736f23d0a7f9a3200a17f2d590049003e9beec2d0e2d869881e33441->leave($__internal_b0e7b113736f23d0a7f9a3200a17f2d590049003e9beec2d0e2d869881e33441_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78363ef1afeaa048f8919b9450d8709034e059cb881cdc8f8ac24219e70b6413 = $this->env->getExtension("native_profiler");
        $__internal_78363ef1afeaa048f8919b9450d8709034e059cb881cdc8f8ac24219e70b6413->enter($__internal_78363ef1afeaa048f8919b9450d8709034e059cb881cdc8f8ac24219e70b6413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78363ef1afeaa048f8919b9450d8709034e059cb881cdc8f8ac24219e70b6413->leave($__internal_78363ef1afeaa048f8919b9450d8709034e059cb881cdc8f8ac24219e70b6413_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81aeb095610b2bd3ce2991e8f2896beadd62bf5bd8c0b5fbc4763eaab577e6bf = $this->env->getExtension("native_profiler");
        $__internal_81aeb095610b2bd3ce2991e8f2896beadd62bf5bd8c0b5fbc4763eaab577e6bf->enter($__internal_81aeb095610b2bd3ce2991e8f2896beadd62bf5bd8c0b5fbc4763eaab577e6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81aeb095610b2bd3ce2991e8f2896beadd62bf5bd8c0b5fbc4763eaab577e6bf->leave($__internal_81aeb095610b2bd3ce2991e8f2896beadd62bf5bd8c0b5fbc4763eaab577e6bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
