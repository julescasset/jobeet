<?php

/* job/new.html.twig */
class __TwigTemplate_22ec1e89b02c712be492844830a5c81696bf4af963c335e7de892a8f35dfd133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsManonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85bc004466c031adf1b31640245532f0dcbeda2ec5daba89b133461c63d41ab4 = $this->env->getExtension("native_profiler");
        $__internal_85bc004466c031adf1b31640245532f0dcbeda2ec5daba89b133461c63d41ab4->enter($__internal_85bc004466c031adf1b31640245532f0dcbeda2ec5daba89b133461c63d41ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85bc004466c031adf1b31640245532f0dcbeda2ec5daba89b133461c63d41ab4->leave($__internal_85bc004466c031adf1b31640245532f0dcbeda2ec5daba89b133461c63d41ab4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_13c5116a0b0c0c2304db0c2219d3adf571c2b62251feebe3366ebb28ec6550dd = $this->env->getExtension("native_profiler");
        $__internal_13c5116a0b0c0c2304db0c2219d3adf571c2b62251feebe3366ebb28ec6550dd->enter($__internal_13c5116a0b0c0c2304db0c2219d3adf571c2b62251feebe3366ebb28ec6550dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_13c5116a0b0c0c2304db0c2219d3adf571c2b62251feebe3366ebb28ec6550dd->leave($__internal_13c5116a0b0c0c2304db0c2219d3adf571c2b62251feebe3366ebb28ec6550dd_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
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
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
