<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ab0886b2c580037722ee3e23c6e79064760e2bce2d8047d56578b8dbf508c8cf extends Twig_Template
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
        $__internal_747c3e0bee001f9b6c399a8b5d34e9b62758a128477c78f9e069ceb6265053ac = $this->env->getExtension("native_profiler");
        $__internal_747c3e0bee001f9b6c399a8b5d34e9b62758a128477c78f9e069ceb6265053ac->enter($__internal_747c3e0bee001f9b6c399a8b5d34e9b62758a128477c78f9e069ceb6265053ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747c3e0bee001f9b6c399a8b5d34e9b62758a128477c78f9e069ceb6265053ac->leave($__internal_747c3e0bee001f9b6c399a8b5d34e9b62758a128477c78f9e069ceb6265053ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64baa2cc874757157eb7d42ce0a52e834a947365f1fa5b907daa920d13f63d5c = $this->env->getExtension("native_profiler");
        $__internal_64baa2cc874757157eb7d42ce0a52e834a947365f1fa5b907daa920d13f63d5c->enter($__internal_64baa2cc874757157eb7d42ce0a52e834a947365f1fa5b907daa920d13f63d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64baa2cc874757157eb7d42ce0a52e834a947365f1fa5b907daa920d13f63d5c->leave($__internal_64baa2cc874757157eb7d42ce0a52e834a947365f1fa5b907daa920d13f63d5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b72620d6faf9e92e1fd81cb5fc4aec93fa14603ca00d30937cd0083b3454de9c = $this->env->getExtension("native_profiler");
        $__internal_b72620d6faf9e92e1fd81cb5fc4aec93fa14603ca00d30937cd0083b3454de9c->enter($__internal_b72620d6faf9e92e1fd81cb5fc4aec93fa14603ca00d30937cd0083b3454de9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b72620d6faf9e92e1fd81cb5fc4aec93fa14603ca00d30937cd0083b3454de9c->leave($__internal_b72620d6faf9e92e1fd81cb5fc4aec93fa14603ca00d30937cd0083b3454de9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9113d533f6f2a379b3d2ea9bcbb96fc3b9e6e16643e9bff314c3fc056f52b565 = $this->env->getExtension("native_profiler");
        $__internal_9113d533f6f2a379b3d2ea9bcbb96fc3b9e6e16643e9bff314c3fc056f52b565->enter($__internal_9113d533f6f2a379b3d2ea9bcbb96fc3b9e6e16643e9bff314c3fc056f52b565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9113d533f6f2a379b3d2ea9bcbb96fc3b9e6e16643e9bff314c3fc056f52b565->leave($__internal_9113d533f6f2a379b3d2ea9bcbb96fc3b9e6e16643e9bff314c3fc056f52b565_prof);

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
