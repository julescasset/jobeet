<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_d4e01593fb8750005459feea738feefab0edabb5fe05174ba283987b5e2d039c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cca3531f8a2427ab652d5befc48bd6be761b65cbd52fe372e6d091d90216eef3 = $this->env->getExtension("native_profiler");
        $__internal_cca3531f8a2427ab652d5befc48bd6be761b65cbd52fe372e6d091d90216eef3->enter($__internal_cca3531f8a2427ab652d5befc48bd6be761b65cbd52fe372e6d091d90216eef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cca3531f8a2427ab652d5befc48bd6be761b65cbd52fe372e6d091d90216eef3->leave($__internal_cca3531f8a2427ab652d5befc48bd6be761b65cbd52fe372e6d091d90216eef3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
