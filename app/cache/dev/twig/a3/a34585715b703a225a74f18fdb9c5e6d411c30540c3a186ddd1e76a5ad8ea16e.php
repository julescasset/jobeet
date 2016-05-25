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
        $__internal_37ca573b2ba1327c9c0183a98e7a6a1ff27dc8df75747de8b9ac786312e2bc15 = $this->env->getExtension("native_profiler");
        $__internal_37ca573b2ba1327c9c0183a98e7a6a1ff27dc8df75747de8b9ac786312e2bc15->enter($__internal_37ca573b2ba1327c9c0183a98e7a6a1ff27dc8df75747de8b9ac786312e2bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ca573b2ba1327c9c0183a98e7a6a1ff27dc8df75747de8b9ac786312e2bc15->leave($__internal_37ca573b2ba1327c9c0183a98e7a6a1ff27dc8df75747de8b9ac786312e2bc15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_991cf8ce9ebda9c9ee0b3b8461d8417807ccaea7317e05e518c64c293835fbf4 = $this->env->getExtension("native_profiler");
        $__internal_991cf8ce9ebda9c9ee0b3b8461d8417807ccaea7317e05e518c64c293835fbf4->enter($__internal_991cf8ce9ebda9c9ee0b3b8461d8417807ccaea7317e05e518c64c293835fbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_991cf8ce9ebda9c9ee0b3b8461d8417807ccaea7317e05e518c64c293835fbf4->leave($__internal_991cf8ce9ebda9c9ee0b3b8461d8417807ccaea7317e05e518c64c293835fbf4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ca40e263e526e20052f249b86a7e49ae89c6bedac3b56984d62e0a06466b620 = $this->env->getExtension("native_profiler");
        $__internal_0ca40e263e526e20052f249b86a7e49ae89c6bedac3b56984d62e0a06466b620->enter($__internal_0ca40e263e526e20052f249b86a7e49ae89c6bedac3b56984d62e0a06466b620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ca40e263e526e20052f249b86a7e49ae89c6bedac3b56984d62e0a06466b620->leave($__internal_0ca40e263e526e20052f249b86a7e49ae89c6bedac3b56984d62e0a06466b620_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_940dc8482273cdae317d5916405393c0513dfddd07884aa33669f1e8ecc5896e = $this->env->getExtension("native_profiler");
        $__internal_940dc8482273cdae317d5916405393c0513dfddd07884aa33669f1e8ecc5896e->enter($__internal_940dc8482273cdae317d5916405393c0513dfddd07884aa33669f1e8ecc5896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_940dc8482273cdae317d5916405393c0513dfddd07884aa33669f1e8ecc5896e->leave($__internal_940dc8482273cdae317d5916405393c0513dfddd07884aa33669f1e8ecc5896e_prof);

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
