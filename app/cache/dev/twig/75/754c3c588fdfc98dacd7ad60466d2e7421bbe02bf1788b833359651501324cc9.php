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
        $__internal_af2c09ffc626e038313e93b3533ea3629830098c8ddadd2f105c008fc4b35e7e = $this->env->getExtension("native_profiler");
        $__internal_af2c09ffc626e038313e93b3533ea3629830098c8ddadd2f105c008fc4b35e7e->enter($__internal_af2c09ffc626e038313e93b3533ea3629830098c8ddadd2f105c008fc4b35e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af2c09ffc626e038313e93b3533ea3629830098c8ddadd2f105c008fc4b35e7e->leave($__internal_af2c09ffc626e038313e93b3533ea3629830098c8ddadd2f105c008fc4b35e7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58061a120242573f58c6b8fb53af7714c2d4672836a6db571149c29aef3c789e = $this->env->getExtension("native_profiler");
        $__internal_58061a120242573f58c6b8fb53af7714c2d4672836a6db571149c29aef3c789e->enter($__internal_58061a120242573f58c6b8fb53af7714c2d4672836a6db571149c29aef3c789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58061a120242573f58c6b8fb53af7714c2d4672836a6db571149c29aef3c789e->leave($__internal_58061a120242573f58c6b8fb53af7714c2d4672836a6db571149c29aef3c789e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b9eb302c3caebfbd4e0878c8967349cdb7a99460176f275e3487750fb951661 = $this->env->getExtension("native_profiler");
        $__internal_9b9eb302c3caebfbd4e0878c8967349cdb7a99460176f275e3487750fb951661->enter($__internal_9b9eb302c3caebfbd4e0878c8967349cdb7a99460176f275e3487750fb951661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b9eb302c3caebfbd4e0878c8967349cdb7a99460176f275e3487750fb951661->leave($__internal_9b9eb302c3caebfbd4e0878c8967349cdb7a99460176f275e3487750fb951661_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c0216484b5a7449bdea37db397555a584e7f2e286922f84b35c6648e39b5fb0 = $this->env->getExtension("native_profiler");
        $__internal_9c0216484b5a7449bdea37db397555a584e7f2e286922f84b35c6648e39b5fb0->enter($__internal_9c0216484b5a7449bdea37db397555a584e7f2e286922f84b35c6648e39b5fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c0216484b5a7449bdea37db397555a584e7f2e286922f84b35c6648e39b5fb0->leave($__internal_9c0216484b5a7449bdea37db397555a584e7f2e286922f84b35c6648e39b5fb0_prof);

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
