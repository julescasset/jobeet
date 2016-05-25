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
        $__internal_8bf10fb0fb297ad0a4ee4276e66e0bd9b14a182b3e628bdc65688d23898e5178 = $this->env->getExtension("native_profiler");
        $__internal_8bf10fb0fb297ad0a4ee4276e66e0bd9b14a182b3e628bdc65688d23898e5178->enter($__internal_8bf10fb0fb297ad0a4ee4276e66e0bd9b14a182b3e628bdc65688d23898e5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bf10fb0fb297ad0a4ee4276e66e0bd9b14a182b3e628bdc65688d23898e5178->leave($__internal_8bf10fb0fb297ad0a4ee4276e66e0bd9b14a182b3e628bdc65688d23898e5178_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d1881afaa55f30ec7e78ba046a0e90178fc45882eaba1b7a35f1a43c20a859f = $this->env->getExtension("native_profiler");
        $__internal_7d1881afaa55f30ec7e78ba046a0e90178fc45882eaba1b7a35f1a43c20a859f->enter($__internal_7d1881afaa55f30ec7e78ba046a0e90178fc45882eaba1b7a35f1a43c20a859f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7d1881afaa55f30ec7e78ba046a0e90178fc45882eaba1b7a35f1a43c20a859f->leave($__internal_7d1881afaa55f30ec7e78ba046a0e90178fc45882eaba1b7a35f1a43c20a859f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3cb75bbe3a3c16c72d34b999568fb7f9ff2f9acf67c38f79d3edd0b156da8d5 = $this->env->getExtension("native_profiler");
        $__internal_c3cb75bbe3a3c16c72d34b999568fb7f9ff2f9acf67c38f79d3edd0b156da8d5->enter($__internal_c3cb75bbe3a3c16c72d34b999568fb7f9ff2f9acf67c38f79d3edd0b156da8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c3cb75bbe3a3c16c72d34b999568fb7f9ff2f9acf67c38f79d3edd0b156da8d5->leave($__internal_c3cb75bbe3a3c16c72d34b999568fb7f9ff2f9acf67c38f79d3edd0b156da8d5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24d14c078f516ece8c762b56aa54ab345e7a6dbc1cfa4972969a18d4140a7771 = $this->env->getExtension("native_profiler");
        $__internal_24d14c078f516ece8c762b56aa54ab345e7a6dbc1cfa4972969a18d4140a7771->enter($__internal_24d14c078f516ece8c762b56aa54ab345e7a6dbc1cfa4972969a18d4140a7771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_24d14c078f516ece8c762b56aa54ab345e7a6dbc1cfa4972969a18d4140a7771->leave($__internal_24d14c078f516ece8c762b56aa54ab345e7a6dbc1cfa4972969a18d4140a7771_prof);

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
