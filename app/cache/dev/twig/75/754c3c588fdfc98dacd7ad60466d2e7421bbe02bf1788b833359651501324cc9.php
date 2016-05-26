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
        $__internal_12a3b11ac0818455e7a7ae3bf87465a926c8d6b1d940645de9e295d393d2a442 = $this->env->getExtension("native_profiler");
        $__internal_12a3b11ac0818455e7a7ae3bf87465a926c8d6b1d940645de9e295d393d2a442->enter($__internal_12a3b11ac0818455e7a7ae3bf87465a926c8d6b1d940645de9e295d393d2a442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a3b11ac0818455e7a7ae3bf87465a926c8d6b1d940645de9e295d393d2a442->leave($__internal_12a3b11ac0818455e7a7ae3bf87465a926c8d6b1d940645de9e295d393d2a442_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_204d7b64449754f3cba30d32d1aa2c41ba513ad66a9ea1ce36767c263bc4ec53 = $this->env->getExtension("native_profiler");
        $__internal_204d7b64449754f3cba30d32d1aa2c41ba513ad66a9ea1ce36767c263bc4ec53->enter($__internal_204d7b64449754f3cba30d32d1aa2c41ba513ad66a9ea1ce36767c263bc4ec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_204d7b64449754f3cba30d32d1aa2c41ba513ad66a9ea1ce36767c263bc4ec53->leave($__internal_204d7b64449754f3cba30d32d1aa2c41ba513ad66a9ea1ce36767c263bc4ec53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_428216f684340b497462d450bbd976636aabd87d1f34ea5a8cff72d78deeaab2 = $this->env->getExtension("native_profiler");
        $__internal_428216f684340b497462d450bbd976636aabd87d1f34ea5a8cff72d78deeaab2->enter($__internal_428216f684340b497462d450bbd976636aabd87d1f34ea5a8cff72d78deeaab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_428216f684340b497462d450bbd976636aabd87d1f34ea5a8cff72d78deeaab2->leave($__internal_428216f684340b497462d450bbd976636aabd87d1f34ea5a8cff72d78deeaab2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_392fd5818a827436246502c11ee3c85da54fbb3b33659b3aaccb9016c65eab93 = $this->env->getExtension("native_profiler");
        $__internal_392fd5818a827436246502c11ee3c85da54fbb3b33659b3aaccb9016c65eab93->enter($__internal_392fd5818a827436246502c11ee3c85da54fbb3b33659b3aaccb9016c65eab93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_392fd5818a827436246502c11ee3c85da54fbb3b33659b3aaccb9016c65eab93->leave($__internal_392fd5818a827436246502c11ee3c85da54fbb3b33659b3aaccb9016c65eab93_prof);

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
