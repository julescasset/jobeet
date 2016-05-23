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
        $__internal_cb921ef906509b893a351d3a89c956bc8ae220bcb78edff9ccbcb3385284ca94 = $this->env->getExtension("native_profiler");
        $__internal_cb921ef906509b893a351d3a89c956bc8ae220bcb78edff9ccbcb3385284ca94->enter($__internal_cb921ef906509b893a351d3a89c956bc8ae220bcb78edff9ccbcb3385284ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb921ef906509b893a351d3a89c956bc8ae220bcb78edff9ccbcb3385284ca94->leave($__internal_cb921ef906509b893a351d3a89c956bc8ae220bcb78edff9ccbcb3385284ca94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65f41639e3195459f43d3658848bbdc5ed4ca4c6d806e03e0e15346d658aaf90 = $this->env->getExtension("native_profiler");
        $__internal_65f41639e3195459f43d3658848bbdc5ed4ca4c6d806e03e0e15346d658aaf90->enter($__internal_65f41639e3195459f43d3658848bbdc5ed4ca4c6d806e03e0e15346d658aaf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_65f41639e3195459f43d3658848bbdc5ed4ca4c6d806e03e0e15346d658aaf90->leave($__internal_65f41639e3195459f43d3658848bbdc5ed4ca4c6d806e03e0e15346d658aaf90_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d93a28bbf9f250b83fad41975c1ee37647cf3db3eb11578b8a9cd0060422eb0 = $this->env->getExtension("native_profiler");
        $__internal_1d93a28bbf9f250b83fad41975c1ee37647cf3db3eb11578b8a9cd0060422eb0->enter($__internal_1d93a28bbf9f250b83fad41975c1ee37647cf3db3eb11578b8a9cd0060422eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d93a28bbf9f250b83fad41975c1ee37647cf3db3eb11578b8a9cd0060422eb0->leave($__internal_1d93a28bbf9f250b83fad41975c1ee37647cf3db3eb11578b8a9cd0060422eb0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fec9d4668e2f733c16677f74d48a264b13685b3fcdb2e6df6d629def4fc5ed3 = $this->env->getExtension("native_profiler");
        $__internal_2fec9d4668e2f733c16677f74d48a264b13685b3fcdb2e6df6d629def4fc5ed3->enter($__internal_2fec9d4668e2f733c16677f74d48a264b13685b3fcdb2e6df6d629def4fc5ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2fec9d4668e2f733c16677f74d48a264b13685b3fcdb2e6df6d629def4fc5ed3->leave($__internal_2fec9d4668e2f733c16677f74d48a264b13685b3fcdb2e6df6d629def4fc5ed3_prof);

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
