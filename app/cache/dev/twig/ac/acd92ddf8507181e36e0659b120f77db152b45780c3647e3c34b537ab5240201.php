<?php

/* job/show.html.twig */
class __TwigTemplate_406f30e827139193d1aef90c16eb0fa4db76ce2dadc1f37093528f8e8d6a789f extends Twig_Template
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
        $__internal_e1d615624c92d93c53967e99c298b3aabb7872c6f85681d6c5ea58f6ca08ebe0 = $this->env->getExtension("native_profiler");
        $__internal_e1d615624c92d93c53967e99c298b3aabb7872c6f85681d6c5ea58f6ca08ebe0->enter($__internal_e1d615624c92d93c53967e99c298b3aabb7872c6f85681d6c5ea58f6ca08ebe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d615624c92d93c53967e99c298b3aabb7872c6f85681d6c5ea58f6ca08ebe0->leave($__internal_e1d615624c92d93c53967e99c298b3aabb7872c6f85681d6c5ea58f6ca08ebe0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d83ac0e2f4a5c81bfdd160a40d34431da1a46cbc945d5f06f37e3b0af60b6d6 = $this->env->getExtension("native_profiler");
        $__internal_1d83ac0e2f4a5c81bfdd160a40d34431da1a46cbc945d5f06f37e3b0af60b6d6->enter($__internal_1d83ac0e2f4a5c81bfdd160a40d34431da1a46cbc945d5f06f37e3b0af60b6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_1d83ac0e2f4a5c81bfdd160a40d34431da1a46cbc945d5f06f37e3b0af60b6d6->leave($__internal_1d83ac0e2f4a5c81bfdd160a40d34431da1a46cbc945d5f06f37e3b0af60b6d6_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_306d35c160e60c962ab649f0f46ea5cec7e69e329d7d674ebca0cc36cd15296c = $this->env->getExtension("native_profiler");
        $__internal_306d35c160e60c962ab649f0f46ea5cec7e69e329d7d674ebca0cc36cd15296c->enter($__internal_306d35c160e60c962ab649f0f46ea5cec7e69e329d7d674ebca0cc36cd15296c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_306d35c160e60c962ab649f0f46ea5cec7e69e329d7d674ebca0cc36cd15296c->leave($__internal_306d35c160e60c962ab649f0f46ea5cec7e69e329d7d674ebca0cc36cd15296c_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_ebc7af62410d260ff8688499b4d72dca48dc7bb4dc521f0e3f8c9f5995fba2a6 = $this->env->getExtension("native_profiler");
        $__internal_ebc7af62410d260ff8688499b4d72dca48dc7bb4dc521f0e3f8c9f5995fba2a6->enter($__internal_ebc7af62410d260ff8688499b4d72dca48dc7bb4dc521f0e3f8c9f5995fba2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 14
            echo "        ";
            $this->loadTemplate(":Job:admin.html.twig", "job/show.html.twig", 14)->display(array_merge($context, array("job" => (isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"job\">
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 24
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 25
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
                         alt=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 32
        echo "
        <div class=\"description\">
            ";
        // line 34
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>
    </div>
";
        
        $__internal_ebc7af62410d260ff8688499b4d72dca48dc7bb4dc521f0e3f8c9f5995fba2a6->leave($__internal_ebc7af62410d260ff8688499b4d72dca48dc7bb4dc521f0e3f8c9f5995fba2a6_prof);

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
        return array (  150 => 42,  144 => 39,  136 => 34,  132 => 32,  125 => 28,  120 => 27,  116 => 26,  113 => 25,  111 => 24,  105 => 21,  101 => 20,  96 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  74 => 12,  65 => 9,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*     {% if app.request.get('token') %}*/
/*         {% include ':Job:admin.html.twig' with {'job': job} %}*/
/*     {% endif %}*/
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
/*     </div>*/
/* {% endblock %}*/
