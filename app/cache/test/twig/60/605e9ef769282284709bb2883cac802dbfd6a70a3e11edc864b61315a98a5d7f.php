<?php

/* job/show.html.twig */
class __TwigTemplate_6b08d76806f88da73d1cac8be4ca51bd07a4f9c00e93f1a0a5c6cd536bfc5656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", "job/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsManonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f90eae9f6174728b3b5fd47806258e659deca6ed8bd70e6514363a780c97b9c6 = $this->env->getExtension("native_profiler");
        $__internal_f90eae9f6174728b3b5fd47806258e659deca6ed8bd70e6514363a780c97b9c6->enter($__internal_f90eae9f6174728b3b5fd47806258e659deca6ed8bd70e6514363a780c97b9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f90eae9f6174728b3b5fd47806258e659deca6ed8bd70e6514363a780c97b9c6->leave($__internal_f90eae9f6174728b3b5fd47806258e659deca6ed8bd70e6514363a780c97b9c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d668e06da8a68fc79c1d28ea85c7ad54eddbd2c3eacc5413b805b0dce8d99d8e = $this->env->getExtension("native_profiler");
        $__internal_d668e06da8a68fc79c1d28ea85c7ad54eddbd2c3eacc5413b805b0dce8d99d8e->enter($__internal_d668e06da8a68fc79c1d28ea85c7ad54eddbd2c3eacc5413b805b0dce8d99d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_d668e06da8a68fc79c1d28ea85c7ad54eddbd2c3eacc5413b805b0dce8d99d8e->leave($__internal_d668e06da8a68fc79c1d28ea85c7ad54eddbd2c3eacc5413b805b0dce8d99d8e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fcf5aa9ceba802e148a42fe49af3c692fe99926a080c87eae9bfeaa97c791b6 = $this->env->getExtension("native_profiler");
        $__internal_9fcf5aa9ceba802e148a42fe49af3c692fe99926a080c87eae9bfeaa97c791b6->enter($__internal_9fcf5aa9ceba802e148a42fe49af3c692fe99926a080c87eae9bfeaa97c791b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9fcf5aa9ceba802e148a42fe49af3c692fe99926a080c87eae9bfeaa97c791b6->leave($__internal_9fcf5aa9ceba802e148a42fe49af3c692fe99926a080c87eae9bfeaa97c791b6_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_3be10b6c9241fb8e135a6e31d98d14a61588f294c3345ccb5f1f6e728ab491f0 = $this->env->getExtension("native_profiler");
        $__internal_3be10b6c9241fb8e135a6e31d98d14a61588f294c3345ccb5f1f6e728ab491f0->enter($__internal_3be10b6c9241fb8e135a6e31d98d14a61588f294c3345ccb5f1f6e728ab491f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div id=\"job\">
        <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 21
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 22
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
                         alt=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"description\">
            ";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
        
        $__internal_3be10b6c9241fb8e135a6e31d98d14a61588f294c3345ccb5f1f6e728ab491f0->leave($__internal_3be10b6c9241fb8e135a6e31d98d14a61588f294c3345ccb5f1f6e728ab491f0_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  141 => 39,  135 => 36,  127 => 31,  123 => 29,  116 => 25,  111 => 24,  107 => 23,  104 => 22,  102 => 21,  96 => 18,  92 => 17,  87 => 15,  83 => 14,  80 => 13,  74 => 12,  65 => 9,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/*  */
/* {% block title %}*/
/*     {{ job.company }} is looking for a {{ job.position }}*/
/* {% endblock %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensmanon/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <div id="job">*/
/*         <h1>{{ job.company }}</h1>*/
/*         <h2>{{ job.location }}</h2>*/
/*         <h3>*/
/*             {{ job.position }}*/
/*             <small> - {{ job.type }}</small>*/
/*         </h3>*/
/* */
/*         {% if job.logo %}*/
/*             <div class="logo">*/
/*                 <a href="{{ job.url }}">*/
/*                     <img src="{{ asset('bundles/ensmanon/images/') }}{{ job.logo }}"*/
/*                          alt="{{ job.company }} logo" />*/
/*                 </a>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="description">*/
/*             {{ job.description|nl2br }}*/
/*         </div>*/
/* */
/*         <h4>How to apply?</h4>*/
/* */
/*         <p class="how_to_apply">{{ job.howtoapply }}</p>*/
/* */
/*         <div class="meta">*/
/*             <small>posted on {{ job.createdat|date('m/d/Y') }}</small>*/
/*         </div>*/
/* */
/*         <div style="padding: 20px 0">*/
/*             <a href="{{ path('job_edit', { 'id': job.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
