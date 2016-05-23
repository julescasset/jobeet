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
        $__internal_6811daa23f8b2686162c118c48f0950f613eb4d676a459ad16457ebc6a5f7f15 = $this->env->getExtension("native_profiler");
        $__internal_6811daa23f8b2686162c118c48f0950f613eb4d676a459ad16457ebc6a5f7f15->enter($__internal_6811daa23f8b2686162c118c48f0950f613eb4d676a459ad16457ebc6a5f7f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6811daa23f8b2686162c118c48f0950f613eb4d676a459ad16457ebc6a5f7f15->leave($__internal_6811daa23f8b2686162c118c48f0950f613eb4d676a459ad16457ebc6a5f7f15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e06989a29b3961f14d75782d7eaea89ccc593b906727831a6a518a76a7675dd = $this->env->getExtension("native_profiler");
        $__internal_4e06989a29b3961f14d75782d7eaea89ccc593b906727831a6a518a76a7675dd->enter($__internal_4e06989a29b3961f14d75782d7eaea89ccc593b906727831a6a518a76a7675dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4e06989a29b3961f14d75782d7eaea89ccc593b906727831a6a518a76a7675dd->leave($__internal_4e06989a29b3961f14d75782d7eaea89ccc593b906727831a6a518a76a7675dd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05ed15bab9fd9ad94aa635c52aa125660f55db8b5c25a8c2c743bac6e658bbbf = $this->env->getExtension("native_profiler");
        $__internal_05ed15bab9fd9ad94aa635c52aa125660f55db8b5c25a8c2c743bac6e658bbbf->enter($__internal_05ed15bab9fd9ad94aa635c52aa125660f55db8b5c25a8c2c743bac6e658bbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_05ed15bab9fd9ad94aa635c52aa125660f55db8b5c25a8c2c743bac6e658bbbf->leave($__internal_05ed15bab9fd9ad94aa635c52aa125660f55db8b5c25a8c2c743bac6e658bbbf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_211222aa6d78bf91efb35adf5ce6a5479ed72890d307db731f82b7e4c8005cb5 = $this->env->getExtension("native_profiler");
        $__internal_211222aa6d78bf91efb35adf5ce6a5479ed72890d307db731f82b7e4c8005cb5->enter($__internal_211222aa6d78bf91efb35adf5ce6a5479ed72890d307db731f82b7e4c8005cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_211222aa6d78bf91efb35adf5ce6a5479ed72890d307db731f82b7e4c8005cb5->leave($__internal_211222aa6d78bf91efb35adf5ce6a5479ed72890d307db731f82b7e4c8005cb5_prof);

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
