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
        $__internal_ceb3c98d82c885408a7fddb0e91a5d916cee51694d65ac05b4959ec52539cb72 = $this->env->getExtension("native_profiler");
        $__internal_ceb3c98d82c885408a7fddb0e91a5d916cee51694d65ac05b4959ec52539cb72->enter($__internal_ceb3c98d82c885408a7fddb0e91a5d916cee51694d65ac05b4959ec52539cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb3c98d82c885408a7fddb0e91a5d916cee51694d65ac05b4959ec52539cb72->leave($__internal_ceb3c98d82c885408a7fddb0e91a5d916cee51694d65ac05b4959ec52539cb72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ded8f95cd301fb5d3f64f446b0b2bfe0ebdbec16effc4bfeac8652fe01c52c89 = $this->env->getExtension("native_profiler");
        $__internal_ded8f95cd301fb5d3f64f446b0b2bfe0ebdbec16effc4bfeac8652fe01c52c89->enter($__internal_ded8f95cd301fb5d3f64f446b0b2bfe0ebdbec16effc4bfeac8652fe01c52c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ded8f95cd301fb5d3f64f446b0b2bfe0ebdbec16effc4bfeac8652fe01c52c89->leave($__internal_ded8f95cd301fb5d3f64f446b0b2bfe0ebdbec16effc4bfeac8652fe01c52c89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1183ebd6cc12487392155779590d87651512461c0e0bad995c959cd9dbed8f6 = $this->env->getExtension("native_profiler");
        $__internal_a1183ebd6cc12487392155779590d87651512461c0e0bad995c959cd9dbed8f6->enter($__internal_a1183ebd6cc12487392155779590d87651512461c0e0bad995c959cd9dbed8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1183ebd6cc12487392155779590d87651512461c0e0bad995c959cd9dbed8f6->leave($__internal_a1183ebd6cc12487392155779590d87651512461c0e0bad995c959cd9dbed8f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9309e84613e82501143af3f7c776000aea06cbf4859aee7210a904b46737752e = $this->env->getExtension("native_profiler");
        $__internal_9309e84613e82501143af3f7c776000aea06cbf4859aee7210a904b46737752e->enter($__internal_9309e84613e82501143af3f7c776000aea06cbf4859aee7210a904b46737752e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9309e84613e82501143af3f7c776000aea06cbf4859aee7210a904b46737752e->leave($__internal_9309e84613e82501143af3f7c776000aea06cbf4859aee7210a904b46737752e_prof);

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
