<?php

/* :job:show.html.twig */
class __TwigTemplate_554717a6179eaf8b812dbc44289ded690f4a289464a2f9a0436d4be80b33409b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", ":job:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "position", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "token"), "method")) {
            // line 14
            echo "        ";
            $this->loadTemplate(":Job:admin.html.twig", ":job:show.html.twig", 14)->display(array_merge($context, array("job" => (isset($context["job"]) ? $context["job"] : null))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"job\">
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 24
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "logo", array())) {
            // line 25
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "logo", array()), "html", null, true);
            echo "\"
                         alt=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company", array()), "html", null, true);
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
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  129 => 42,  123 => 39,  115 => 34,  111 => 32,  104 => 28,  99 => 27,  95 => 26,  92 => 25,  90 => 24,  84 => 21,  80 => 20,  75 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  50 => 9,  45 => 8,  42 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/* */
/*         <div style="padding: 20px 0">*/
/*             <a href="{{ path('job_edit', { 'token': job.token }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
