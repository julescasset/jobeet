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
        $__internal_bfe40e0b8bf27bead308f33a704968c9f994e1378372fc522b8941271fcf2659 = $this->env->getExtension("native_profiler");
        $__internal_bfe40e0b8bf27bead308f33a704968c9f994e1378372fc522b8941271fcf2659->enter($__internal_bfe40e0b8bf27bead308f33a704968c9f994e1378372fc522b8941271fcf2659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe40e0b8bf27bead308f33a704968c9f994e1378372fc522b8941271fcf2659->leave($__internal_bfe40e0b8bf27bead308f33a704968c9f994e1378372fc522b8941271fcf2659_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_672642d223bda3696ed65d585a12dacf2c7cb28a2540b842c93f10226c9e5710 = $this->env->getExtension("native_profiler");
        $__internal_672642d223bda3696ed65d585a12dacf2c7cb28a2540b842c93f10226c9e5710->enter($__internal_672642d223bda3696ed65d585a12dacf2c7cb28a2540b842c93f10226c9e5710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_672642d223bda3696ed65d585a12dacf2c7cb28a2540b842c93f10226c9e5710->leave($__internal_672642d223bda3696ed65d585a12dacf2c7cb28a2540b842c93f10226c9e5710_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b386489613f15a277e19fac0b9a500847cbc8da8fe8fa8a08ba443437606f6a7 = $this->env->getExtension("native_profiler");
        $__internal_b386489613f15a277e19fac0b9a500847cbc8da8fe8fa8a08ba443437606f6a7->enter($__internal_b386489613f15a277e19fac0b9a500847cbc8da8fe8fa8a08ba443437606f6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b386489613f15a277e19fac0b9a500847cbc8da8fe8fa8a08ba443437606f6a7->leave($__internal_b386489613f15a277e19fac0b9a500847cbc8da8fe8fa8a08ba443437606f6a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66a13fefd54ad39df0f218d763d97664f79be09bbb881e6ff216417635935372 = $this->env->getExtension("native_profiler");
        $__internal_66a13fefd54ad39df0f218d763d97664f79be09bbb881e6ff216417635935372->enter($__internal_66a13fefd54ad39df0f218d763d97664f79be09bbb881e6ff216417635935372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66a13fefd54ad39df0f218d763d97664f79be09bbb881e6ff216417635935372->leave($__internal_66a13fefd54ad39df0f218d763d97664f79be09bbb881e6ff216417635935372_prof);

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
