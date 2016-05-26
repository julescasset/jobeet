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
        $__internal_b77276b4a7a4b5b1f365a428c8b23f984f1feb3ac6fd2bcb897763e377d0f581 = $this->env->getExtension("native_profiler");
        $__internal_b77276b4a7a4b5b1f365a428c8b23f984f1feb3ac6fd2bcb897763e377d0f581->enter($__internal_b77276b4a7a4b5b1f365a428c8b23f984f1feb3ac6fd2bcb897763e377d0f581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b77276b4a7a4b5b1f365a428c8b23f984f1feb3ac6fd2bcb897763e377d0f581->leave($__internal_b77276b4a7a4b5b1f365a428c8b23f984f1feb3ac6fd2bcb897763e377d0f581_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0482fbb20bdf8c948e7455ff770b9e42a1e1607bf2bc7bc0affad457a5c7b9d = $this->env->getExtension("native_profiler");
        $__internal_f0482fbb20bdf8c948e7455ff770b9e42a1e1607bf2bc7bc0affad457a5c7b9d->enter($__internal_f0482fbb20bdf8c948e7455ff770b9e42a1e1607bf2bc7bc0affad457a5c7b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0482fbb20bdf8c948e7455ff770b9e42a1e1607bf2bc7bc0affad457a5c7b9d->leave($__internal_f0482fbb20bdf8c948e7455ff770b9e42a1e1607bf2bc7bc0affad457a5c7b9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4674fd28f89277c88a08cd4c612ceba5a0c47b06fc44e73e4db1e36d503d634e = $this->env->getExtension("native_profiler");
        $__internal_4674fd28f89277c88a08cd4c612ceba5a0c47b06fc44e73e4db1e36d503d634e->enter($__internal_4674fd28f89277c88a08cd4c612ceba5a0c47b06fc44e73e4db1e36d503d634e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4674fd28f89277c88a08cd4c612ceba5a0c47b06fc44e73e4db1e36d503d634e->leave($__internal_4674fd28f89277c88a08cd4c612ceba5a0c47b06fc44e73e4db1e36d503d634e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e0795df45a396a57387d0d0900ae40d5f04bb34fefcd696a8813d80534d9db5 = $this->env->getExtension("native_profiler");
        $__internal_4e0795df45a396a57387d0d0900ae40d5f04bb34fefcd696a8813d80534d9db5->enter($__internal_4e0795df45a396a57387d0d0900ae40d5f04bb34fefcd696a8813d80534d9db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e0795df45a396a57387d0d0900ae40d5f04bb34fefcd696a8813d80534d9db5->leave($__internal_4e0795df45a396a57387d0d0900ae40d5f04bb34fefcd696a8813d80534d9db5_prof);

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
