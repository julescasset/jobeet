<?php

/* :category:show.html.twig */
class __TwigTemplate_495649fb972e4e69f75dedb24c4b6440219cae9f674411612538deed658ecbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", ":category:show.html.twig", 1);
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
        $__internal_905a3041b2087f3bd7ef6851313fff8a1e38de3aec4ff8c9353f0d122e08fa72 = $this->env->getExtension("native_profiler");
        $__internal_905a3041b2087f3bd7ef6851313fff8a1e38de3aec4ff8c9353f0d122e08fa72->enter($__internal_905a3041b2087f3bd7ef6851313fff8a1e38de3aec4ff8c9353f0d122e08fa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_905a3041b2087f3bd7ef6851313fff8a1e38de3aec4ff8c9353f0d122e08fa72->leave($__internal_905a3041b2087f3bd7ef6851313fff8a1e38de3aec4ff8c9353f0d122e08fa72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd1a8abda052a1a802122ffb879d65dd8303393b035506c017b349401af23a8a = $this->env->getExtension("native_profiler");
        $__internal_dd1a8abda052a1a802122ffb879d65dd8303393b035506c017b349401af23a8a->enter($__internal_dd1a8abda052a1a802122ffb879d65dd8303393b035506c017b349401af23a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_dd1a8abda052a1a802122ffb879d65dd8303393b035506c017b349401af23a8a->leave($__internal_dd1a8abda052a1a802122ffb879d65dd8303393b035506c017b349401af23a8a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_036c9ffdb13f946184db10fde5d3e4bb2ff5c897165ca02b0a77dea31b736e7b = $this->env->getExtension("native_profiler");
        $__internal_036c9ffdb13f946184db10fde5d3e4bb2ff5c897165ca02b0a77dea31b736e7b->enter($__internal_036c9ffdb13f946184db10fde5d3e4bb2ff5c897165ca02b0a77dea31b736e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_036c9ffdb13f946184db10fde5d3e4bb2ff5c897165ca02b0a77dea31b736e7b->leave($__internal_036c9ffdb13f946184db10fde5d3e4bb2ff5c897165ca02b0a77dea31b736e7b_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_82054062a45ba5624e9ad79913a96c662d3a70aa4c019bc37e0614b3a1b33dbe = $this->env->getExtension("native_profiler");
        $__internal_82054062a45ba5624e9ad79913a96c662d3a70aa4c019bc37e0614b3a1b33dbe->enter($__internal_82054062a45ba5624e9ad79913a96c662d3a70aa4c019bc37e0614b3a1b33dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed</a>
        </div>
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 20
        $this->loadTemplate(":Job:list.html.twig", ":category:show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        // line 21
        echo "
    ";
        // line 22
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 23
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
            </a>

            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
            </a>

            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "                ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 34
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                ";
                } else {
                    // line 36
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => $context["page"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                ";
                }
                // line 38
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
            </a>

            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    ";
        }
        // line 49
        echo "
    <div class=\"pagination_desc\">
        <strong>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : $this->getContext($context, "total_jobs")), "html", null, true);
        echo "</strong> jobs in this category

        ";
        // line 53
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 54
            echo "            - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
        ";
        }
        // line 56
        echo "    </div>
";
        
        $__internal_82054062a45ba5624e9ad79913a96c662d3a70aa4c019bc37e0614b3a1b33dbe->leave($__internal_82054062a45ba5624e9ad79913a96c662d3a70aa4c019bc37e0614b3a1b33dbe_prof);

    }

    public function getTemplateName()
    {
        return ":category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 56,  182 => 54,  180 => 53,  175 => 51,  171 => 49,  164 => 45,  160 => 44,  154 => 41,  150 => 40,  147 => 39,  141 => 38,  133 => 36,  127 => 34,  124 => 33,  120 => 32,  114 => 29,  110 => 28,  104 => 25,  100 => 24,  97 => 23,  95 => 22,  92 => 21,  90 => 20,  84 => 17,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/*  */
/* {% block title %}*/
/*     Jobs in the {{ category.name }} category*/
/* {% endblock %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensmanon/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <div class="category">*/
/*         <div class="feed">*/
/*             <a href="">Feed</a>*/
/*         </div>*/
/*         <h1>{{ category.name }}</h1>*/
/*     </div>*/
/* */
/*     {% include ':Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/* */
/*     {% if last_page > 1 %}*/
/*         <div class="pagination">*/
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': 1 }) }}">*/
/*                 <img src="{{ asset('bundles/ensmanon/images/first.png') }}" alt="First page" title="First page" />*/
/*             </a>*/
/* */
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': previous_page }) }}">*/
/*                 <img src="{{ asset('bundles/ensmanon/images/previous.png') }}" alt="Previous page" title="Previous page" />*/
/*             </a>*/
/* */
/*             {% for page in 1..last_page %}*/
/*                 {% if page == current_page %}*/
/*                     {{ page }}*/
/*                 {% else %}*/
/*                     <a href="{{ path('category_show', { 'slug': category.slug, 'page': page }) }}">{{ page }}</a>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': next_page }) }}">*/
/*                 <img src="{{ asset('bundles/ensmanon/images/next.png') }}" alt="Next page" title="Next page" />*/
/*             </a>*/
/* */
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': last_page }) }}">*/
/*                 <img src="{{ asset('bundles/ensmanon/images/last.png') }}" alt="Last page" title="Last page" />*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="pagination_desc">*/
/*         <strong>{{ total_jobs }}</strong> jobs in this category*/
/* */
/*         {% if last_page > 1 %}*/
/*             - page <strong>{{ current_page }}/{{ last_page }}</strong>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
