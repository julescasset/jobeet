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
        $__internal_c1c928ad105f3df62ba5436a5111427ebdb9cf0a8d66a7538631804f3e634eed = $this->env->getExtension("native_profiler");
        $__internal_c1c928ad105f3df62ba5436a5111427ebdb9cf0a8d66a7538631804f3e634eed->enter($__internal_c1c928ad105f3df62ba5436a5111427ebdb9cf0a8d66a7538631804f3e634eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c928ad105f3df62ba5436a5111427ebdb9cf0a8d66a7538631804f3e634eed->leave($__internal_c1c928ad105f3df62ba5436a5111427ebdb9cf0a8d66a7538631804f3e634eed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d5ed36fb9cae3c2bf6816af0ffce4f895c6fe29c8db251406f9cb0d37fc74083 = $this->env->getExtension("native_profiler");
        $__internal_d5ed36fb9cae3c2bf6816af0ffce4f895c6fe29c8db251406f9cb0d37fc74083->enter($__internal_d5ed36fb9cae3c2bf6816af0ffce4f895c6fe29c8db251406f9cb0d37fc74083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5ed36fb9cae3c2bf6816af0ffce4f895c6fe29c8db251406f9cb0d37fc74083->leave($__internal_d5ed36fb9cae3c2bf6816af0ffce4f895c6fe29c8db251406f9cb0d37fc74083_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a472e673f6b0b082e0b68d9fc1d9b64d060511f18b26a3b07f2769aaf0610e0 = $this->env->getExtension("native_profiler");
        $__internal_3a472e673f6b0b082e0b68d9fc1d9b64d060511f18b26a3b07f2769aaf0610e0->enter($__internal_3a472e673f6b0b082e0b68d9fc1d9b64d060511f18b26a3b07f2769aaf0610e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a472e673f6b0b082e0b68d9fc1d9b64d060511f18b26a3b07f2769aaf0610e0->leave($__internal_3a472e673f6b0b082e0b68d9fc1d9b64d060511f18b26a3b07f2769aaf0610e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b96084d8fb64ccfcf8196a76abde012fd3ef8d100868192e30babe4eff6fc6b = $this->env->getExtension("native_profiler");
        $__internal_3b96084d8fb64ccfcf8196a76abde012fd3ef8d100868192e30babe4eff6fc6b->enter($__internal_3b96084d8fb64ccfcf8196a76abde012fd3ef8d100868192e30babe4eff6fc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b96084d8fb64ccfcf8196a76abde012fd3ef8d100868192e30babe4eff6fc6b->leave($__internal_3b96084d8fb64ccfcf8196a76abde012fd3ef8d100868192e30babe4eff6fc6b_prof);

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
