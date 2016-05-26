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
        $__internal_20660b3946886ded62d588991b692f9130cfbce435909a1acb97202778684918 = $this->env->getExtension("native_profiler");
        $__internal_20660b3946886ded62d588991b692f9130cfbce435909a1acb97202778684918->enter($__internal_20660b3946886ded62d588991b692f9130cfbce435909a1acb97202778684918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20660b3946886ded62d588991b692f9130cfbce435909a1acb97202778684918->leave($__internal_20660b3946886ded62d588991b692f9130cfbce435909a1acb97202778684918_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dd250e7d8d3119d3092d191d64aadfdf6cdba5d857ade32c9219702a8cf695d = $this->env->getExtension("native_profiler");
        $__internal_6dd250e7d8d3119d3092d191d64aadfdf6cdba5d857ade32c9219702a8cf695d->enter($__internal_6dd250e7d8d3119d3092d191d64aadfdf6cdba5d857ade32c9219702a8cf695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6dd250e7d8d3119d3092d191d64aadfdf6cdba5d857ade32c9219702a8cf695d->leave($__internal_6dd250e7d8d3119d3092d191d64aadfdf6cdba5d857ade32c9219702a8cf695d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f92cbef9c26ac2fa454fbbea9a80007a58440ddb89f78996014946e26b740af = $this->env->getExtension("native_profiler");
        $__internal_6f92cbef9c26ac2fa454fbbea9a80007a58440ddb89f78996014946e26b740af->enter($__internal_6f92cbef9c26ac2fa454fbbea9a80007a58440ddb89f78996014946e26b740af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f92cbef9c26ac2fa454fbbea9a80007a58440ddb89f78996014946e26b740af->leave($__internal_6f92cbef9c26ac2fa454fbbea9a80007a58440ddb89f78996014946e26b740af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95975206d43578e2cf107a3964305762c2f8b60e24ad62ebe383c10620cb2f56 = $this->env->getExtension("native_profiler");
        $__internal_95975206d43578e2cf107a3964305762c2f8b60e24ad62ebe383c10620cb2f56->enter($__internal_95975206d43578e2cf107a3964305762c2f8b60e24ad62ebe383c10620cb2f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_95975206d43578e2cf107a3964305762c2f8b60e24ad62ebe383c10620cb2f56->leave($__internal_95975206d43578e2cf107a3964305762c2f8b60e24ad62ebe383c10620cb2f56_prof);

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
