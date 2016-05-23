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
        $__internal_a76ccb42dc3c49ace85e81ae0de128d99ec799f926292554c221b3b4b4262467 = $this->env->getExtension("native_profiler");
        $__internal_a76ccb42dc3c49ace85e81ae0de128d99ec799f926292554c221b3b4b4262467->enter($__internal_a76ccb42dc3c49ace85e81ae0de128d99ec799f926292554c221b3b4b4262467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76ccb42dc3c49ace85e81ae0de128d99ec799f926292554c221b3b4b4262467->leave($__internal_a76ccb42dc3c49ace85e81ae0de128d99ec799f926292554c221b3b4b4262467_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32304e9d036ed5823cedb2c1122c9ba68554919fbb2808ffe73b11f3002eee3d = $this->env->getExtension("native_profiler");
        $__internal_32304e9d036ed5823cedb2c1122c9ba68554919fbb2808ffe73b11f3002eee3d->enter($__internal_32304e9d036ed5823cedb2c1122c9ba68554919fbb2808ffe73b11f3002eee3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32304e9d036ed5823cedb2c1122c9ba68554919fbb2808ffe73b11f3002eee3d->leave($__internal_32304e9d036ed5823cedb2c1122c9ba68554919fbb2808ffe73b11f3002eee3d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87d049c50fd004b9e5150fd4c9e85774c9d75b3dd6bcb01bd0a82874270a1796 = $this->env->getExtension("native_profiler");
        $__internal_87d049c50fd004b9e5150fd4c9e85774c9d75b3dd6bcb01bd0a82874270a1796->enter($__internal_87d049c50fd004b9e5150fd4c9e85774c9d75b3dd6bcb01bd0a82874270a1796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87d049c50fd004b9e5150fd4c9e85774c9d75b3dd6bcb01bd0a82874270a1796->leave($__internal_87d049c50fd004b9e5150fd4c9e85774c9d75b3dd6bcb01bd0a82874270a1796_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a3f82a777ca388ed073296ba06a53d4a5f7a6f48dd4f45a52be728789c6a8c0 = $this->env->getExtension("native_profiler");
        $__internal_3a3f82a777ca388ed073296ba06a53d4a5f7a6f48dd4f45a52be728789c6a8c0->enter($__internal_3a3f82a777ca388ed073296ba06a53d4a5f7a6f48dd4f45a52be728789c6a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a3f82a777ca388ed073296ba06a53d4a5f7a6f48dd4f45a52be728789c6a8c0->leave($__internal_3a3f82a777ca388ed073296ba06a53d4a5f7a6f48dd4f45a52be728789c6a8c0_prof);

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
