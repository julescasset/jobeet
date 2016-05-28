<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_386c195fdbfe6ebec0f86e054643fccb7dfe5dbab4064232aad7884511634d98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3662a77b30a159adce583a594d089e58f567dde890a02f6052f40a69e57a854d = $this->env->getExtension("native_profiler");
        $__internal_3662a77b30a159adce583a594d089e58f567dde890a02f6052f40a69e57a854d->enter($__internal_3662a77b30a159adce583a594d089e58f567dde890a02f6052f40a69e57a854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3662a77b30a159adce583a594d089e58f567dde890a02f6052f40a69e57a854d->leave($__internal_3662a77b30a159adce583a594d089e58f567dde890a02f6052f40a69e57a854d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18846cf865dec1810c52f7d2a9f3875db9774230f60f5416759d1025c70d98a3 = $this->env->getExtension("native_profiler");
        $__internal_18846cf865dec1810c52f7d2a9f3875db9774230f60f5416759d1025c70d98a3->enter($__internal_18846cf865dec1810c52f7d2a9f3875db9774230f60f5416759d1025c70d98a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_18846cf865dec1810c52f7d2a9f3875db9774230f60f5416759d1025c70d98a3->leave($__internal_18846cf865dec1810c52f7d2a9f3875db9774230f60f5416759d1025c70d98a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3754367f97cedc58efcdc906b083987a92f7e5c0f9a5d2f8dc2441330510a659 = $this->env->getExtension("native_profiler");
        $__internal_3754367f97cedc58efcdc906b083987a92f7e5c0f9a5d2f8dc2441330510a659->enter($__internal_3754367f97cedc58efcdc906b083987a92f7e5c0f9a5d2f8dc2441330510a659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3754367f97cedc58efcdc906b083987a92f7e5c0f9a5d2f8dc2441330510a659->leave($__internal_3754367f97cedc58efcdc906b083987a92f7e5c0f9a5d2f8dc2441330510a659_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8109d47b04893ea70f72c0a0ead68c846bf0437a8818c5c3c49e4cc312b6f934 = $this->env->getExtension("native_profiler");
        $__internal_8109d47b04893ea70f72c0a0ead68c846bf0437a8818c5c3c49e4cc312b6f934->enter($__internal_8109d47b04893ea70f72c0a0ead68c846bf0437a8818c5c3c49e4cc312b6f934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8109d47b04893ea70f72c0a0ead68c846bf0437a8818c5c3c49e4cc312b6f934->leave($__internal_8109d47b04893ea70f72c0a0ead68c846bf0437a8818c5c3c49e4cc312b6f934_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
