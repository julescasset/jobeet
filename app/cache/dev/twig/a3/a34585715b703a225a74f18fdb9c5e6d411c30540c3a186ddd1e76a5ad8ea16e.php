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
        $__internal_ed3839f5411a554f50c1fd381a424932c81616978148d45553387b56dfb58757 = $this->env->getExtension("native_profiler");
        $__internal_ed3839f5411a554f50c1fd381a424932c81616978148d45553387b56dfb58757->enter($__internal_ed3839f5411a554f50c1fd381a424932c81616978148d45553387b56dfb58757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3839f5411a554f50c1fd381a424932c81616978148d45553387b56dfb58757->leave($__internal_ed3839f5411a554f50c1fd381a424932c81616978148d45553387b56dfb58757_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7378f0409c117729d619ba6109be7644740d3806285baa3e8989c209df36de73 = $this->env->getExtension("native_profiler");
        $__internal_7378f0409c117729d619ba6109be7644740d3806285baa3e8989c209df36de73->enter($__internal_7378f0409c117729d619ba6109be7644740d3806285baa3e8989c209df36de73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7378f0409c117729d619ba6109be7644740d3806285baa3e8989c209df36de73->leave($__internal_7378f0409c117729d619ba6109be7644740d3806285baa3e8989c209df36de73_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f66cecdb9a3ca53fbdfe76576131a36af4ab72f4f898364393ac75da343f1d90 = $this->env->getExtension("native_profiler");
        $__internal_f66cecdb9a3ca53fbdfe76576131a36af4ab72f4f898364393ac75da343f1d90->enter($__internal_f66cecdb9a3ca53fbdfe76576131a36af4ab72f4f898364393ac75da343f1d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f66cecdb9a3ca53fbdfe76576131a36af4ab72f4f898364393ac75da343f1d90->leave($__internal_f66cecdb9a3ca53fbdfe76576131a36af4ab72f4f898364393ac75da343f1d90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_907cae1bf43cf5ba42e041b41482ef9016fd8c2a6c7b1dbcb1631726fdc48b37 = $this->env->getExtension("native_profiler");
        $__internal_907cae1bf43cf5ba42e041b41482ef9016fd8c2a6c7b1dbcb1631726fdc48b37->enter($__internal_907cae1bf43cf5ba42e041b41482ef9016fd8c2a6c7b1dbcb1631726fdc48b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_907cae1bf43cf5ba42e041b41482ef9016fd8c2a6c7b1dbcb1631726fdc48b37->leave($__internal_907cae1bf43cf5ba42e041b41482ef9016fd8c2a6c7b1dbcb1631726fdc48b37_prof);

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
