<?php

/* :job:show.html.twig */
class __TwigTemplate_1cc2670e5596bcb7b74849903b76aab03ccae326520b7cfdc942922afa1b769f extends Twig_Template
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
        $__internal_6c20ca4178111ba834300ca6f7fff2b8d087563e6413755ddb2d00e3bfa5bbc9 = $this->env->getExtension("native_profiler");
        $__internal_6c20ca4178111ba834300ca6f7fff2b8d087563e6413755ddb2d00e3bfa5bbc9->enter($__internal_6c20ca4178111ba834300ca6f7fff2b8d087563e6413755ddb2d00e3bfa5bbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c20ca4178111ba834300ca6f7fff2b8d087563e6413755ddb2d00e3bfa5bbc9->leave($__internal_6c20ca4178111ba834300ca6f7fff2b8d087563e6413755ddb2d00e3bfa5bbc9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2eca0a3a720ea2659fcd8c9d74c3f62c7909fa38d5c6353638809eaa9ed03edf = $this->env->getExtension("native_profiler");
        $__internal_2eca0a3a720ea2659fcd8c9d74c3f62c7909fa38d5c6353638809eaa9ed03edf->enter($__internal_2eca0a3a720ea2659fcd8c9d74c3f62c7909fa38d5c6353638809eaa9ed03edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_2eca0a3a720ea2659fcd8c9d74c3f62c7909fa38d5c6353638809eaa9ed03edf->leave($__internal_2eca0a3a720ea2659fcd8c9d74c3f62c7909fa38d5c6353638809eaa9ed03edf_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d1757bab9bb31ed5ea0639a37ec0c111a108c4aa7fc2cd3676154c2ba44bcbd = $this->env->getExtension("native_profiler");
        $__internal_2d1757bab9bb31ed5ea0639a37ec0c111a108c4aa7fc2cd3676154c2ba44bcbd->enter($__internal_2d1757bab9bb31ed5ea0639a37ec0c111a108c4aa7fc2cd3676154c2ba44bcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d1757bab9bb31ed5ea0639a37ec0c111a108c4aa7fc2cd3676154c2ba44bcbd->leave($__internal_2d1757bab9bb31ed5ea0639a37ec0c111a108c4aa7fc2cd3676154c2ba44bcbd_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c431dea728120c889435c8fba7afcf04e602572b96d1c79499b06d7f38a8108 = $this->env->getExtension("native_profiler");
        $__internal_4c431dea728120c889435c8fba7afcf04e602572b96d1c79499b06d7f38a8108->enter($__internal_4c431dea728120c889435c8fba7afcf04e602572b96d1c79499b06d7f38a8108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 14
            echo "        ";
            $this->loadTemplate(":Job:admin.html.twig", ":job:show.html.twig", 14)->display(array_merge($context, array("job" => (isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")))));
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
        
        $__internal_4c431dea728120c889435c8fba7afcf04e602572b96d1c79499b06d7f38a8108->leave($__internal_4c431dea728120c889435c8fba7afcf04e602572b96d1c79499b06d7f38a8108_prof);

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
