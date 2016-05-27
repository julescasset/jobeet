<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ab0886b2c580037722ee3e23c6e79064760e2bce2d8047d56578b8dbf508c8cf extends Twig_Template
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
        $__internal_20262a30e559b186b07bf896afdef049dd1feea2bd10bb946e00d6019d5f0644 = $this->env->getExtension("native_profiler");
        $__internal_20262a30e559b186b07bf896afdef049dd1feea2bd10bb946e00d6019d5f0644->enter($__internal_20262a30e559b186b07bf896afdef049dd1feea2bd10bb946e00d6019d5f0644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20262a30e559b186b07bf896afdef049dd1feea2bd10bb946e00d6019d5f0644->leave($__internal_20262a30e559b186b07bf896afdef049dd1feea2bd10bb946e00d6019d5f0644_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_575a38b7a2ace9061499a58470b038b507d1c77154351cec78b358802cda4702 = $this->env->getExtension("native_profiler");
        $__internal_575a38b7a2ace9061499a58470b038b507d1c77154351cec78b358802cda4702->enter($__internal_575a38b7a2ace9061499a58470b038b507d1c77154351cec78b358802cda4702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_575a38b7a2ace9061499a58470b038b507d1c77154351cec78b358802cda4702->leave($__internal_575a38b7a2ace9061499a58470b038b507d1c77154351cec78b358802cda4702_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41c9b1ef9c3bd68b7ab58d1eada1c844d27c120c00a17f5e3e9e5aabe61ae427 = $this->env->getExtension("native_profiler");
        $__internal_41c9b1ef9c3bd68b7ab58d1eada1c844d27c120c00a17f5e3e9e5aabe61ae427->enter($__internal_41c9b1ef9c3bd68b7ab58d1eada1c844d27c120c00a17f5e3e9e5aabe61ae427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41c9b1ef9c3bd68b7ab58d1eada1c844d27c120c00a17f5e3e9e5aabe61ae427->leave($__internal_41c9b1ef9c3bd68b7ab58d1eada1c844d27c120c00a17f5e3e9e5aabe61ae427_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e115acb2d86ad056d2f1b69e8621bcbdf256236be6fdf7f3e5b81133b4cc6b32 = $this->env->getExtension("native_profiler");
        $__internal_e115acb2d86ad056d2f1b69e8621bcbdf256236be6fdf7f3e5b81133b4cc6b32->enter($__internal_e115acb2d86ad056d2f1b69e8621bcbdf256236be6fdf7f3e5b81133b4cc6b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e115acb2d86ad056d2f1b69e8621bcbdf256236be6fdf7f3e5b81133b4cc6b32->leave($__internal_e115acb2d86ad056d2f1b69e8621bcbdf256236be6fdf7f3e5b81133b4cc6b32_prof);

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
