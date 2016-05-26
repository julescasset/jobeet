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
        $__internal_5c37d535a7888063155202a7c41bb6609bfe7319838a4a112b100029b21312c3 = $this->env->getExtension("native_profiler");
        $__internal_5c37d535a7888063155202a7c41bb6609bfe7319838a4a112b100029b21312c3->enter($__internal_5c37d535a7888063155202a7c41bb6609bfe7319838a4a112b100029b21312c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c37d535a7888063155202a7c41bb6609bfe7319838a4a112b100029b21312c3->leave($__internal_5c37d535a7888063155202a7c41bb6609bfe7319838a4a112b100029b21312c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97079cb3d34425eb08ffde569b2c2461bb836de682323ed752e255ebde67ef8f = $this->env->getExtension("native_profiler");
        $__internal_97079cb3d34425eb08ffde569b2c2461bb836de682323ed752e255ebde67ef8f->enter($__internal_97079cb3d34425eb08ffde569b2c2461bb836de682323ed752e255ebde67ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97079cb3d34425eb08ffde569b2c2461bb836de682323ed752e255ebde67ef8f->leave($__internal_97079cb3d34425eb08ffde569b2c2461bb836de682323ed752e255ebde67ef8f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_325c17126429c2ff75d418691cff3f35f1f29dc535ccfdab9673533463699aeb = $this->env->getExtension("native_profiler");
        $__internal_325c17126429c2ff75d418691cff3f35f1f29dc535ccfdab9673533463699aeb->enter($__internal_325c17126429c2ff75d418691cff3f35f1f29dc535ccfdab9673533463699aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_325c17126429c2ff75d418691cff3f35f1f29dc535ccfdab9673533463699aeb->leave($__internal_325c17126429c2ff75d418691cff3f35f1f29dc535ccfdab9673533463699aeb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd43578a37b4f22e002287bbb36ac2ee8aa67f430173fe5363b41ee55ee99e82 = $this->env->getExtension("native_profiler");
        $__internal_fd43578a37b4f22e002287bbb36ac2ee8aa67f430173fe5363b41ee55ee99e82->enter($__internal_fd43578a37b4f22e002287bbb36ac2ee8aa67f430173fe5363b41ee55ee99e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd43578a37b4f22e002287bbb36ac2ee8aa67f430173fe5363b41ee55ee99e82->leave($__internal_fd43578a37b4f22e002287bbb36ac2ee8aa67f430173fe5363b41ee55ee99e82_prof);

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
