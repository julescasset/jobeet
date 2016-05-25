<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aee55f2e73d8377bc82120b77e1f78b35c5b4946842f31cbbaaf8c2bc22b29bb extends Twig_Template
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
        $__internal_5f6fa841a5efb2a67e5183ac36d2770fbc977cf182149c8c9dfe5cb7afb39f19 = $this->env->getExtension("native_profiler");
        $__internal_5f6fa841a5efb2a67e5183ac36d2770fbc977cf182149c8c9dfe5cb7afb39f19->enter($__internal_5f6fa841a5efb2a67e5183ac36d2770fbc977cf182149c8c9dfe5cb7afb39f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6fa841a5efb2a67e5183ac36d2770fbc977cf182149c8c9dfe5cb7afb39f19->leave($__internal_5f6fa841a5efb2a67e5183ac36d2770fbc977cf182149c8c9dfe5cb7afb39f19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7ef0858cb6fb7b44726f464f9901f2b9cedf3701a9ca0ed7c893dfb0dadded5 = $this->env->getExtension("native_profiler");
        $__internal_f7ef0858cb6fb7b44726f464f9901f2b9cedf3701a9ca0ed7c893dfb0dadded5->enter($__internal_f7ef0858cb6fb7b44726f464f9901f2b9cedf3701a9ca0ed7c893dfb0dadded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f7ef0858cb6fb7b44726f464f9901f2b9cedf3701a9ca0ed7c893dfb0dadded5->leave($__internal_f7ef0858cb6fb7b44726f464f9901f2b9cedf3701a9ca0ed7c893dfb0dadded5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fef920efdd3a71c02600221bbae75a2185672bac31518451c674ec5ccb52bfd = $this->env->getExtension("native_profiler");
        $__internal_4fef920efdd3a71c02600221bbae75a2185672bac31518451c674ec5ccb52bfd->enter($__internal_4fef920efdd3a71c02600221bbae75a2185672bac31518451c674ec5ccb52bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4fef920efdd3a71c02600221bbae75a2185672bac31518451c674ec5ccb52bfd->leave($__internal_4fef920efdd3a71c02600221bbae75a2185672bac31518451c674ec5ccb52bfd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b9ab0395f1d6317b506e0cfa9b727f519828108d6dc62a2f5c1f9dfc77431 = $this->env->getExtension("native_profiler");
        $__internal_085b9ab0395f1d6317b506e0cfa9b727f519828108d6dc62a2f5c1f9dfc77431->enter($__internal_085b9ab0395f1d6317b506e0cfa9b727f519828108d6dc62a2f5c1f9dfc77431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_085b9ab0395f1d6317b506e0cfa9b727f519828108d6dc62a2f5c1f9dfc77431->leave($__internal_085b9ab0395f1d6317b506e0cfa9b727f519828108d6dc62a2f5c1f9dfc77431_prof);

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
