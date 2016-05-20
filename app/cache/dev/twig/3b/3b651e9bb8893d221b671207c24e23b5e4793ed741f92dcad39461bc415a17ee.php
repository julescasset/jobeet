<?php

/* :job:new.html.twig */
class __TwigTemplate_1a851bb689d3652dc49fb3e5ba8cc82e2520bac7031a2a91d015fa32bfa33a9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1522be820da7fbd4ea995d67f520c70ab8632f96483e2ff9877de2e4eaeb10d3 = $this->env->getExtension("native_profiler");
        $__internal_1522be820da7fbd4ea995d67f520c70ab8632f96483e2ff9877de2e4eaeb10d3->enter($__internal_1522be820da7fbd4ea995d67f520c70ab8632f96483e2ff9877de2e4eaeb10d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1522be820da7fbd4ea995d67f520c70ab8632f96483e2ff9877de2e4eaeb10d3->leave($__internal_1522be820da7fbd4ea995d67f520c70ab8632f96483e2ff9877de2e4eaeb10d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0804f9cf437e36643cc6e8cf9ffa0fa6cc47169c3bd970a68ac197d70a21e16 = $this->env->getExtension("native_profiler");
        $__internal_b0804f9cf437e36643cc6e8cf9ffa0fa6cc47169c3bd970a68ac197d70a21e16->enter($__internal_b0804f9cf437e36643cc6e8cf9ffa0fa6cc47169c3bd970a68ac197d70a21e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b0804f9cf437e36643cc6e8cf9ffa0fa6cc47169c3bd970a68ac197d70a21e16->leave($__internal_b0804f9cf437e36643cc6e8cf9ffa0fa6cc47169c3bd970a68ac197d70a21e16_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
