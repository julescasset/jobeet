<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_75bb0d3a870f734a7587ae94f6607c5e38d5c8c2472816d95f73835a4e4627b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_ab3809293b89fc89c9a608e7a1f9e61ffb715420e0b022b9fd24268f71cee015 = $this->env->getExtension("native_profiler");
        $__internal_ab3809293b89fc89c9a608e7a1f9e61ffb715420e0b022b9fd24268f71cee015->enter($__internal_ab3809293b89fc89c9a608e7a1f9e61ffb715420e0b022b9fd24268f71cee015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3809293b89fc89c9a608e7a1f9e61ffb715420e0b022b9fd24268f71cee015->leave($__internal_ab3809293b89fc89c9a608e7a1f9e61ffb715420e0b022b9fd24268f71cee015_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e72e7933c085cd976c4952a7e3c7e2e5f1abf8487d3e325667d92eef0d41d753 = $this->env->getExtension("native_profiler");
        $__internal_e72e7933c085cd976c4952a7e3c7e2e5f1abf8487d3e325667d92eef0d41d753->enter($__internal_e72e7933c085cd976c4952a7e3c7e2e5f1abf8487d3e325667d92eef0d41d753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e72e7933c085cd976c4952a7e3c7e2e5f1abf8487d3e325667d92eef0d41d753->leave($__internal_e72e7933c085cd976c4952a7e3c7e2e5f1abf8487d3e325667d92eef0d41d753_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c825f876379a920f5149f6b9721bd982ce842b8244ba8a96192c4ef430711f5 = $this->env->getExtension("native_profiler");
        $__internal_3c825f876379a920f5149f6b9721bd982ce842b8244ba8a96192c4ef430711f5->enter($__internal_3c825f876379a920f5149f6b9721bd982ce842b8244ba8a96192c4ef430711f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3c825f876379a920f5149f6b9721bd982ce842b8244ba8a96192c4ef430711f5->leave($__internal_3c825f876379a920f5149f6b9721bd982ce842b8244ba8a96192c4ef430711f5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60900faef179e6cd30878f482a7a420d11fb4b94642dd5b8d481a478dcc29bf6 = $this->env->getExtension("native_profiler");
        $__internal_60900faef179e6cd30878f482a7a420d11fb4b94642dd5b8d481a478dcc29bf6->enter($__internal_60900faef179e6cd30878f482a7a420d11fb4b94642dd5b8d481a478dcc29bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_60900faef179e6cd30878f482a7a420d11fb4b94642dd5b8d481a478dcc29bf6->leave($__internal_60900faef179e6cd30878f482a7a420d11fb4b94642dd5b8d481a478dcc29bf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
