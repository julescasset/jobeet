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
        $__internal_58bf986fcb4eef8ad2c00d37a0b13dd59cc9c58960f8844b54e01993ae666e63 = $this->env->getExtension("native_profiler");
        $__internal_58bf986fcb4eef8ad2c00d37a0b13dd59cc9c58960f8844b54e01993ae666e63->enter($__internal_58bf986fcb4eef8ad2c00d37a0b13dd59cc9c58960f8844b54e01993ae666e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58bf986fcb4eef8ad2c00d37a0b13dd59cc9c58960f8844b54e01993ae666e63->leave($__internal_58bf986fcb4eef8ad2c00d37a0b13dd59cc9c58960f8844b54e01993ae666e63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c073b92e373334f511bb527469e5286bea5d6964098673d0e18aa2f88b02655e = $this->env->getExtension("native_profiler");
        $__internal_c073b92e373334f511bb527469e5286bea5d6964098673d0e18aa2f88b02655e->enter($__internal_c073b92e373334f511bb527469e5286bea5d6964098673d0e18aa2f88b02655e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c073b92e373334f511bb527469e5286bea5d6964098673d0e18aa2f88b02655e->leave($__internal_c073b92e373334f511bb527469e5286bea5d6964098673d0e18aa2f88b02655e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de3ccb9c2846bbfd2f32d7e4db1960314ea49b1bb60b3f841abc32c9649288d1 = $this->env->getExtension("native_profiler");
        $__internal_de3ccb9c2846bbfd2f32d7e4db1960314ea49b1bb60b3f841abc32c9649288d1->enter($__internal_de3ccb9c2846bbfd2f32d7e4db1960314ea49b1bb60b3f841abc32c9649288d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de3ccb9c2846bbfd2f32d7e4db1960314ea49b1bb60b3f841abc32c9649288d1->leave($__internal_de3ccb9c2846bbfd2f32d7e4db1960314ea49b1bb60b3f841abc32c9649288d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1edae092488b881aab2e7155b8d8dc52ab237c0fd111a1221f6787ac9f5c77a = $this->env->getExtension("native_profiler");
        $__internal_b1edae092488b881aab2e7155b8d8dc52ab237c0fd111a1221f6787ac9f5c77a->enter($__internal_b1edae092488b881aab2e7155b8d8dc52ab237c0fd111a1221f6787ac9f5c77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1edae092488b881aab2e7155b8d8dc52ab237c0fd111a1221f6787ac9f5c77a->leave($__internal_b1edae092488b881aab2e7155b8d8dc52ab237c0fd111a1221f6787ac9f5c77a_prof);

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
