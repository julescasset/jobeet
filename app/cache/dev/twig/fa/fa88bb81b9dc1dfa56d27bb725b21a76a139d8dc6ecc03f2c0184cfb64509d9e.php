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
        $__internal_5ca69658ed7676e245b519a80607513fa48ec6c46a63bfe5cd14c3bc792eaf14 = $this->env->getExtension("native_profiler");
        $__internal_5ca69658ed7676e245b519a80607513fa48ec6c46a63bfe5cd14c3bc792eaf14->enter($__internal_5ca69658ed7676e245b519a80607513fa48ec6c46a63bfe5cd14c3bc792eaf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca69658ed7676e245b519a80607513fa48ec6c46a63bfe5cd14c3bc792eaf14->leave($__internal_5ca69658ed7676e245b519a80607513fa48ec6c46a63bfe5cd14c3bc792eaf14_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48f5d67a7317fb3d09fbcd7f7bb1bddd68af51b6184fe0fd28d00fdaa320c4ee = $this->env->getExtension("native_profiler");
        $__internal_48f5d67a7317fb3d09fbcd7f7bb1bddd68af51b6184fe0fd28d00fdaa320c4ee->enter($__internal_48f5d67a7317fb3d09fbcd7f7bb1bddd68af51b6184fe0fd28d00fdaa320c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48f5d67a7317fb3d09fbcd7f7bb1bddd68af51b6184fe0fd28d00fdaa320c4ee->leave($__internal_48f5d67a7317fb3d09fbcd7f7bb1bddd68af51b6184fe0fd28d00fdaa320c4ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6f7b3a32393b60f2a842b7abe7e6723b54b7d6f09041593677bfd9712301494 = $this->env->getExtension("native_profiler");
        $__internal_f6f7b3a32393b60f2a842b7abe7e6723b54b7d6f09041593677bfd9712301494->enter($__internal_f6f7b3a32393b60f2a842b7abe7e6723b54b7d6f09041593677bfd9712301494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f6f7b3a32393b60f2a842b7abe7e6723b54b7d6f09041593677bfd9712301494->leave($__internal_f6f7b3a32393b60f2a842b7abe7e6723b54b7d6f09041593677bfd9712301494_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95508e5a49d0eb2fb5a940c2da5e8ce32971f700349f5458762a8aa177c7a34b = $this->env->getExtension("native_profiler");
        $__internal_95508e5a49d0eb2fb5a940c2da5e8ce32971f700349f5458762a8aa177c7a34b->enter($__internal_95508e5a49d0eb2fb5a940c2da5e8ce32971f700349f5458762a8aa177c7a34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_95508e5a49d0eb2fb5a940c2da5e8ce32971f700349f5458762a8aa177c7a34b->leave($__internal_95508e5a49d0eb2fb5a940c2da5e8ce32971f700349f5458762a8aa177c7a34b_prof);

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
