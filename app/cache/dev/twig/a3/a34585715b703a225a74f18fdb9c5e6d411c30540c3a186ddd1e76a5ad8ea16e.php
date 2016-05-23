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
        $__internal_bc68999883fd75ade2685821aa78fbcca9e07e15132f8b4ce496c4356c4598da = $this->env->getExtension("native_profiler");
        $__internal_bc68999883fd75ade2685821aa78fbcca9e07e15132f8b4ce496c4356c4598da->enter($__internal_bc68999883fd75ade2685821aa78fbcca9e07e15132f8b4ce496c4356c4598da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc68999883fd75ade2685821aa78fbcca9e07e15132f8b4ce496c4356c4598da->leave($__internal_bc68999883fd75ade2685821aa78fbcca9e07e15132f8b4ce496c4356c4598da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_074731b37f3e9b2e1d08c7b0ecfc03f86fb0a1458d3504b9af2910500472e0a4 = $this->env->getExtension("native_profiler");
        $__internal_074731b37f3e9b2e1d08c7b0ecfc03f86fb0a1458d3504b9af2910500472e0a4->enter($__internal_074731b37f3e9b2e1d08c7b0ecfc03f86fb0a1458d3504b9af2910500472e0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_074731b37f3e9b2e1d08c7b0ecfc03f86fb0a1458d3504b9af2910500472e0a4->leave($__internal_074731b37f3e9b2e1d08c7b0ecfc03f86fb0a1458d3504b9af2910500472e0a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d8400cd43e19777311ec533bf7a5993e1adb45c9ab9442279ccf55c457da5e8 = $this->env->getExtension("native_profiler");
        $__internal_3d8400cd43e19777311ec533bf7a5993e1adb45c9ab9442279ccf55c457da5e8->enter($__internal_3d8400cd43e19777311ec533bf7a5993e1adb45c9ab9442279ccf55c457da5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d8400cd43e19777311ec533bf7a5993e1adb45c9ab9442279ccf55c457da5e8->leave($__internal_3d8400cd43e19777311ec533bf7a5993e1adb45c9ab9442279ccf55c457da5e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_019fadb5d599a1bbe7f3d6918fdbd6fb670c8e1f3d75c7b17452abed2ba1dc14 = $this->env->getExtension("native_profiler");
        $__internal_019fadb5d599a1bbe7f3d6918fdbd6fb670c8e1f3d75c7b17452abed2ba1dc14->enter($__internal_019fadb5d599a1bbe7f3d6918fdbd6fb670c8e1f3d75c7b17452abed2ba1dc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_019fadb5d599a1bbe7f3d6918fdbd6fb670c8e1f3d75c7b17452abed2ba1dc14->leave($__internal_019fadb5d599a1bbe7f3d6918fdbd6fb670c8e1f3d75c7b17452abed2ba1dc14_prof);

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
