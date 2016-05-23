<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_888feb420720c66dc98723f35003979afd11d615453c555eb75c196a1e3129b0 extends Twig_Template
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
        $__internal_c4d13eefeb6820df825243a1183fe320fc2d3efdcbea6ae1137d1896a2479b63 = $this->env->getExtension("native_profiler");
        $__internal_c4d13eefeb6820df825243a1183fe320fc2d3efdcbea6ae1137d1896a2479b63->enter($__internal_c4d13eefeb6820df825243a1183fe320fc2d3efdcbea6ae1137d1896a2479b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d13eefeb6820df825243a1183fe320fc2d3efdcbea6ae1137d1896a2479b63->leave($__internal_c4d13eefeb6820df825243a1183fe320fc2d3efdcbea6ae1137d1896a2479b63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83f10b04cb1c4631f6c42377312b889c7761a8f7e5644b0dd6989ca9b98598e8 = $this->env->getExtension("native_profiler");
        $__internal_83f10b04cb1c4631f6c42377312b889c7761a8f7e5644b0dd6989ca9b98598e8->enter($__internal_83f10b04cb1c4631f6c42377312b889c7761a8f7e5644b0dd6989ca9b98598e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83f10b04cb1c4631f6c42377312b889c7761a8f7e5644b0dd6989ca9b98598e8->leave($__internal_83f10b04cb1c4631f6c42377312b889c7761a8f7e5644b0dd6989ca9b98598e8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7abf6ea24943bed08bdc721299ebaf75bc148dc9e5b27f98d2452d8c7881e615 = $this->env->getExtension("native_profiler");
        $__internal_7abf6ea24943bed08bdc721299ebaf75bc148dc9e5b27f98d2452d8c7881e615->enter($__internal_7abf6ea24943bed08bdc721299ebaf75bc148dc9e5b27f98d2452d8c7881e615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7abf6ea24943bed08bdc721299ebaf75bc148dc9e5b27f98d2452d8c7881e615->leave($__internal_7abf6ea24943bed08bdc721299ebaf75bc148dc9e5b27f98d2452d8c7881e615_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_931db6716db3197c4d7faf6b44c6615a5e4cc1e816c8b7e931b748d2c9015ed6 = $this->env->getExtension("native_profiler");
        $__internal_931db6716db3197c4d7faf6b44c6615a5e4cc1e816c8b7e931b748d2c9015ed6->enter($__internal_931db6716db3197c4d7faf6b44c6615a5e4cc1e816c8b7e931b748d2c9015ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_931db6716db3197c4d7faf6b44c6615a5e4cc1e816c8b7e931b748d2c9015ed6->leave($__internal_931db6716db3197c4d7faf6b44c6615a5e4cc1e816c8b7e931b748d2c9015ed6_prof);

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
