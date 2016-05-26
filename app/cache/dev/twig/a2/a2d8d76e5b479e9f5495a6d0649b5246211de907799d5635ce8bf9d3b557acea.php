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
        $__internal_52272b31ba2f6a2bd3ae50ede683cfba8077f80140b1f667fe75802f8a600d72 = $this->env->getExtension("native_profiler");
        $__internal_52272b31ba2f6a2bd3ae50ede683cfba8077f80140b1f667fe75802f8a600d72->enter($__internal_52272b31ba2f6a2bd3ae50ede683cfba8077f80140b1f667fe75802f8a600d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52272b31ba2f6a2bd3ae50ede683cfba8077f80140b1f667fe75802f8a600d72->leave($__internal_52272b31ba2f6a2bd3ae50ede683cfba8077f80140b1f667fe75802f8a600d72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69abab0d0f426ec4b11f7c6d441a4e11217174effaada55964362cbf4fd463bc = $this->env->getExtension("native_profiler");
        $__internal_69abab0d0f426ec4b11f7c6d441a4e11217174effaada55964362cbf4fd463bc->enter($__internal_69abab0d0f426ec4b11f7c6d441a4e11217174effaada55964362cbf4fd463bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69abab0d0f426ec4b11f7c6d441a4e11217174effaada55964362cbf4fd463bc->leave($__internal_69abab0d0f426ec4b11f7c6d441a4e11217174effaada55964362cbf4fd463bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27149ce9fe67e8e80a47aea7ddd81f5e1178e4fd077a1274f640a330a05b475b = $this->env->getExtension("native_profiler");
        $__internal_27149ce9fe67e8e80a47aea7ddd81f5e1178e4fd077a1274f640a330a05b475b->enter($__internal_27149ce9fe67e8e80a47aea7ddd81f5e1178e4fd077a1274f640a330a05b475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_27149ce9fe67e8e80a47aea7ddd81f5e1178e4fd077a1274f640a330a05b475b->leave($__internal_27149ce9fe67e8e80a47aea7ddd81f5e1178e4fd077a1274f640a330a05b475b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5f3a25aafafcd4e59ffce3efd481a314747b461dc7f5a6b3f74d552e557539e = $this->env->getExtension("native_profiler");
        $__internal_a5f3a25aafafcd4e59ffce3efd481a314747b461dc7f5a6b3f74d552e557539e->enter($__internal_a5f3a25aafafcd4e59ffce3efd481a314747b461dc7f5a6b3f74d552e557539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a5f3a25aafafcd4e59ffce3efd481a314747b461dc7f5a6b3f74d552e557539e->leave($__internal_a5f3a25aafafcd4e59ffce3efd481a314747b461dc7f5a6b3f74d552e557539e_prof);

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
