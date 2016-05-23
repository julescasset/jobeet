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
        $__internal_ecd8e54d352cbea8dbdac4711c5d8cb5dc3db7febaee5f8f68976447b816b7a9 = $this->env->getExtension("native_profiler");
        $__internal_ecd8e54d352cbea8dbdac4711c5d8cb5dc3db7febaee5f8f68976447b816b7a9->enter($__internal_ecd8e54d352cbea8dbdac4711c5d8cb5dc3db7febaee5f8f68976447b816b7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd8e54d352cbea8dbdac4711c5d8cb5dc3db7febaee5f8f68976447b816b7a9->leave($__internal_ecd8e54d352cbea8dbdac4711c5d8cb5dc3db7febaee5f8f68976447b816b7a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f9ae018c28c88c7664e8eea08148ed4650c7256f587e1cdd7d41e8c5cb9030a = $this->env->getExtension("native_profiler");
        $__internal_5f9ae018c28c88c7664e8eea08148ed4650c7256f587e1cdd7d41e8c5cb9030a->enter($__internal_5f9ae018c28c88c7664e8eea08148ed4650c7256f587e1cdd7d41e8c5cb9030a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f9ae018c28c88c7664e8eea08148ed4650c7256f587e1cdd7d41e8c5cb9030a->leave($__internal_5f9ae018c28c88c7664e8eea08148ed4650c7256f587e1cdd7d41e8c5cb9030a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_878fe15c6712e9809eece65f55bb1f562bf2d3fcc60a4176af807c8abc9a636e = $this->env->getExtension("native_profiler");
        $__internal_878fe15c6712e9809eece65f55bb1f562bf2d3fcc60a4176af807c8abc9a636e->enter($__internal_878fe15c6712e9809eece65f55bb1f562bf2d3fcc60a4176af807c8abc9a636e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_878fe15c6712e9809eece65f55bb1f562bf2d3fcc60a4176af807c8abc9a636e->leave($__internal_878fe15c6712e9809eece65f55bb1f562bf2d3fcc60a4176af807c8abc9a636e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eff5c8f4906cf7c6d2a23d4993ad873e8b158d24670fab3c5d7b9e382023cd3f = $this->env->getExtension("native_profiler");
        $__internal_eff5c8f4906cf7c6d2a23d4993ad873e8b158d24670fab3c5d7b9e382023cd3f->enter($__internal_eff5c8f4906cf7c6d2a23d4993ad873e8b158d24670fab3c5d7b9e382023cd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eff5c8f4906cf7c6d2a23d4993ad873e8b158d24670fab3c5d7b9e382023cd3f->leave($__internal_eff5c8f4906cf7c6d2a23d4993ad873e8b158d24670fab3c5d7b9e382023cd3f_prof);

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
