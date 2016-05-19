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
        $__internal_3a508918cfff7b8d2b46ea7939f42bafb710c4ad43e0db41a7141292e6d20a62 = $this->env->getExtension("native_profiler");
        $__internal_3a508918cfff7b8d2b46ea7939f42bafb710c4ad43e0db41a7141292e6d20a62->enter($__internal_3a508918cfff7b8d2b46ea7939f42bafb710c4ad43e0db41a7141292e6d20a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a508918cfff7b8d2b46ea7939f42bafb710c4ad43e0db41a7141292e6d20a62->leave($__internal_3a508918cfff7b8d2b46ea7939f42bafb710c4ad43e0db41a7141292e6d20a62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8be14602cea2baa800568f89bd6028742be0032e6dde59af33904bb2ac96bdcb = $this->env->getExtension("native_profiler");
        $__internal_8be14602cea2baa800568f89bd6028742be0032e6dde59af33904bb2ac96bdcb->enter($__internal_8be14602cea2baa800568f89bd6028742be0032e6dde59af33904bb2ac96bdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8be14602cea2baa800568f89bd6028742be0032e6dde59af33904bb2ac96bdcb->leave($__internal_8be14602cea2baa800568f89bd6028742be0032e6dde59af33904bb2ac96bdcb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54c05b0631cf5e298a9eced1be3be64743923b47f7743b12408dab75b39f3ccb = $this->env->getExtension("native_profiler");
        $__internal_54c05b0631cf5e298a9eced1be3be64743923b47f7743b12408dab75b39f3ccb->enter($__internal_54c05b0631cf5e298a9eced1be3be64743923b47f7743b12408dab75b39f3ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_54c05b0631cf5e298a9eced1be3be64743923b47f7743b12408dab75b39f3ccb->leave($__internal_54c05b0631cf5e298a9eced1be3be64743923b47f7743b12408dab75b39f3ccb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0afb4baf030a656a07024f1087c2313d1b9e3abf07d9132204d4d060f56cdb27 = $this->env->getExtension("native_profiler");
        $__internal_0afb4baf030a656a07024f1087c2313d1b9e3abf07d9132204d4d060f56cdb27->enter($__internal_0afb4baf030a656a07024f1087c2313d1b9e3abf07d9132204d4d060f56cdb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0afb4baf030a656a07024f1087c2313d1b9e3abf07d9132204d4d060f56cdb27->leave($__internal_0afb4baf030a656a07024f1087c2313d1b9e3abf07d9132204d4d060f56cdb27_prof);

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
