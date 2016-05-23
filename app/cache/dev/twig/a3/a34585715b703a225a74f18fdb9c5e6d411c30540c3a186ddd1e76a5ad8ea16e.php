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
        $__internal_e270ddc5fcf7aab986ead7aea851938a7d0ab8dc4e68a83b491e6c5e8f763682 = $this->env->getExtension("native_profiler");
        $__internal_e270ddc5fcf7aab986ead7aea851938a7d0ab8dc4e68a83b491e6c5e8f763682->enter($__internal_e270ddc5fcf7aab986ead7aea851938a7d0ab8dc4e68a83b491e6c5e8f763682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e270ddc5fcf7aab986ead7aea851938a7d0ab8dc4e68a83b491e6c5e8f763682->leave($__internal_e270ddc5fcf7aab986ead7aea851938a7d0ab8dc4e68a83b491e6c5e8f763682_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_756dfaae5495891d49db30977d7d2bb2290fd4d5cea2a34a5bbb4dd6c433aded = $this->env->getExtension("native_profiler");
        $__internal_756dfaae5495891d49db30977d7d2bb2290fd4d5cea2a34a5bbb4dd6c433aded->enter($__internal_756dfaae5495891d49db30977d7d2bb2290fd4d5cea2a34a5bbb4dd6c433aded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_756dfaae5495891d49db30977d7d2bb2290fd4d5cea2a34a5bbb4dd6c433aded->leave($__internal_756dfaae5495891d49db30977d7d2bb2290fd4d5cea2a34a5bbb4dd6c433aded_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a7e6f55b4e20e285977104daf16a2048e68616a9a04cf2e96b04e1d87cf3f72 = $this->env->getExtension("native_profiler");
        $__internal_9a7e6f55b4e20e285977104daf16a2048e68616a9a04cf2e96b04e1d87cf3f72->enter($__internal_9a7e6f55b4e20e285977104daf16a2048e68616a9a04cf2e96b04e1d87cf3f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a7e6f55b4e20e285977104daf16a2048e68616a9a04cf2e96b04e1d87cf3f72->leave($__internal_9a7e6f55b4e20e285977104daf16a2048e68616a9a04cf2e96b04e1d87cf3f72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_469a5cade897df606005317a83eb5255cd54fbfb37f2b00c738df3a072a601d7 = $this->env->getExtension("native_profiler");
        $__internal_469a5cade897df606005317a83eb5255cd54fbfb37f2b00c738df3a072a601d7->enter($__internal_469a5cade897df606005317a83eb5255cd54fbfb37f2b00c738df3a072a601d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_469a5cade897df606005317a83eb5255cd54fbfb37f2b00c738df3a072a601d7->leave($__internal_469a5cade897df606005317a83eb5255cd54fbfb37f2b00c738df3a072a601d7_prof);

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
