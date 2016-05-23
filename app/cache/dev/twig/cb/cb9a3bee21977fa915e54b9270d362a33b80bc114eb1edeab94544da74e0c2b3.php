<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_dc636cb03a7f5c582c4b9cac5a00df19122b8742e9f0f3a0d7341ccf1a02e30f extends Twig_Template
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
        $__internal_34955d009fe9e4e043ec1fa4e431ec25bc6efb1d817281c51fbbc075c83c2d40 = $this->env->getExtension("native_profiler");
        $__internal_34955d009fe9e4e043ec1fa4e431ec25bc6efb1d817281c51fbbc075c83c2d40->enter($__internal_34955d009fe9e4e043ec1fa4e431ec25bc6efb1d817281c51fbbc075c83c2d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34955d009fe9e4e043ec1fa4e431ec25bc6efb1d817281c51fbbc075c83c2d40->leave($__internal_34955d009fe9e4e043ec1fa4e431ec25bc6efb1d817281c51fbbc075c83c2d40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c80365b42ba93db17921bf79a7f4fb0f0f214a94a8901a715cf2a505eb91629 = $this->env->getExtension("native_profiler");
        $__internal_3c80365b42ba93db17921bf79a7f4fb0f0f214a94a8901a715cf2a505eb91629->enter($__internal_3c80365b42ba93db17921bf79a7f4fb0f0f214a94a8901a715cf2a505eb91629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3c80365b42ba93db17921bf79a7f4fb0f0f214a94a8901a715cf2a505eb91629->leave($__internal_3c80365b42ba93db17921bf79a7f4fb0f0f214a94a8901a715cf2a505eb91629_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a9a495484712a2254b96d76009249d65358299881015a98efe87ad8bf1be057 = $this->env->getExtension("native_profiler");
        $__internal_1a9a495484712a2254b96d76009249d65358299881015a98efe87ad8bf1be057->enter($__internal_1a9a495484712a2254b96d76009249d65358299881015a98efe87ad8bf1be057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1a9a495484712a2254b96d76009249d65358299881015a98efe87ad8bf1be057->leave($__internal_1a9a495484712a2254b96d76009249d65358299881015a98efe87ad8bf1be057_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae99eca2784564f5ad5f75684c3a4095e9de340cd5f2d4c2a9922ad0f30f7a2b = $this->env->getExtension("native_profiler");
        $__internal_ae99eca2784564f5ad5f75684c3a4095e9de340cd5f2d4c2a9922ad0f30f7a2b->enter($__internal_ae99eca2784564f5ad5f75684c3a4095e9de340cd5f2d4c2a9922ad0f30f7a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ae99eca2784564f5ad5f75684c3a4095e9de340cd5f2d4c2a9922ad0f30f7a2b->leave($__internal_ae99eca2784564f5ad5f75684c3a4095e9de340cd5f2d4c2a9922ad0f30f7a2b_prof);

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
