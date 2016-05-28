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
        $__internal_04d845ca87e562efe65c9c19451e07bd17d9641e825cc71fb3d17e6861dd7f4c = $this->env->getExtension("native_profiler");
        $__internal_04d845ca87e562efe65c9c19451e07bd17d9641e825cc71fb3d17e6861dd7f4c->enter($__internal_04d845ca87e562efe65c9c19451e07bd17d9641e825cc71fb3d17e6861dd7f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d845ca87e562efe65c9c19451e07bd17d9641e825cc71fb3d17e6861dd7f4c->leave($__internal_04d845ca87e562efe65c9c19451e07bd17d9641e825cc71fb3d17e6861dd7f4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15ffe74e4f71280dfe89d2c547171ec58da39c5a2889192a76580f2bf376da01 = $this->env->getExtension("native_profiler");
        $__internal_15ffe74e4f71280dfe89d2c547171ec58da39c5a2889192a76580f2bf376da01->enter($__internal_15ffe74e4f71280dfe89d2c547171ec58da39c5a2889192a76580f2bf376da01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15ffe74e4f71280dfe89d2c547171ec58da39c5a2889192a76580f2bf376da01->leave($__internal_15ffe74e4f71280dfe89d2c547171ec58da39c5a2889192a76580f2bf376da01_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc3287e888ef06d607201427b3f2e41b7b8459da562cac85c3cc4eee1942af7e = $this->env->getExtension("native_profiler");
        $__internal_fc3287e888ef06d607201427b3f2e41b7b8459da562cac85c3cc4eee1942af7e->enter($__internal_fc3287e888ef06d607201427b3f2e41b7b8459da562cac85c3cc4eee1942af7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc3287e888ef06d607201427b3f2e41b7b8459da562cac85c3cc4eee1942af7e->leave($__internal_fc3287e888ef06d607201427b3f2e41b7b8459da562cac85c3cc4eee1942af7e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4ba47dbcefeb4f70c5b520fc4847c72d66b118a60ac09cbf4410a34914f8f83 = $this->env->getExtension("native_profiler");
        $__internal_a4ba47dbcefeb4f70c5b520fc4847c72d66b118a60ac09cbf4410a34914f8f83->enter($__internal_a4ba47dbcefeb4f70c5b520fc4847c72d66b118a60ac09cbf4410a34914f8f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a4ba47dbcefeb4f70c5b520fc4847c72d66b118a60ac09cbf4410a34914f8f83->leave($__internal_a4ba47dbcefeb4f70c5b520fc4847c72d66b118a60ac09cbf4410a34914f8f83_prof);

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
