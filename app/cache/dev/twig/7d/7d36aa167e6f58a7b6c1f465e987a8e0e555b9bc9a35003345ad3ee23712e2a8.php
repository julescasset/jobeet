<?php

/* :job:index.html.twig */
class __TwigTemplate_67e2e8afc9c4c3845e1ffd0050dedb7e8c7185272e7dc24751d65b7040c4dc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", ":job:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9a7f91964a9dc185d06542551d32fa4d78252a662d12ea9ef7cf96bbef504284 = $this->env->getExtension("native_profiler");
        $__internal_9a7f91964a9dc185d06542551d32fa4d78252a662d12ea9ef7cf96bbef504284->enter($__internal_9a7f91964a9dc185d06542551d32fa4d78252a662d12ea9ef7cf96bbef504284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a7f91964a9dc185d06542551d32fa4d78252a662d12ea9ef7cf96bbef504284->leave($__internal_9a7f91964a9dc185d06542551d32fa4d78252a662d12ea9ef7cf96bbef504284_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_502167a2d82ab3e083e39288842b9db8a6d25bd14e2d48d5e871a65fce8f242f = $this->env->getExtension("native_profiler");
        $__internal_502167a2d82ab3e083e39288842b9db8a6d25bd14e2d48d5e871a65fce8f242f->enter($__internal_502167a2d82ab3e083e39288842b9db8a6d25bd14e2d48d5e871a65fce8f242f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_502167a2d82ab3e083e39288842b9db8a6d25bd14e2d48d5e871a65fce8f242f->leave($__internal_502167a2d82ab3e083e39288842b9db8a6d25bd14e2d48d5e871a65fce8f242f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6c123cc96f3fdfe58c75fc0efd20e21350eed5142a5e29acd5b6930e4fe15b1 = $this->env->getExtension("native_profiler");
        $__internal_d6c123cc96f3fdfe58c75fc0efd20e21350eed5142a5e29acd5b6930e4fe15b1->enter($__internal_d6c123cc96f3fdfe58c75fc0efd20e21350eed5142a5e29acd5b6930e4fe15b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div>
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"\">Feed</a>
                    </div>
                    <h1><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_manon_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
                </div>
                <table class=\"jobs\">
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 20
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                            <td class=\"location\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
                echo "</td>
                            <td class=\"position\">
                                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td class=\"company\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </table>
                ";
            // line 31
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 32
                echo "                    <div class=\"more_jobs\">
                        and <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_manon_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                        more...
                    </div>
                ";
            }
            // line 37
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
";
        
        $__internal_d6c123cc96f3fdfe58c75fc0efd20e21350eed5142a5e29acd5b6930e4fe15b1->leave($__internal_d6c123cc96f3fdfe58c75fc0efd20e21350eed5142a5e29acd5b6930e4fe15b1_prof);

    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 39,  154 => 37,  145 => 33,  142 => 32,  140 => 31,  137 => 30,  120 => 27,  114 => 24,  110 => 23,  105 => 21,  100 => 20,  83 => 19,  75 => 16,  68 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensmanon/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="jobs">*/
/*         {% for category in categories %}*/
/*             <div>*/
/*                 <div class="category">*/
/*                     <div class="feed">*/
/*                         <a href="">Feed</a>*/
/*                     </div>*/
/*                     <h1><a href="{{ path('ens_manon_category', { 'slug': category.slug }) }}">{{ category.name }}</a></h1>*/
/*                 </div>*/
/*                 <table class="jobs">*/
/*                     {% for entity in category.activejobs %}*/
/*                         <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                             <td class="location">{{ entity.location }}</td>*/
/*                             <td class="position">*/
/*                                 <a href="{{ path('job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}">*/
/*                                     {{ entity.position }}*/
/*                                 </a>*/
/*                             </td>*/
/*                             <td class="company">{{ entity.company }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*                 {% if category.morejobs %}*/
/*                     <div class="more_jobs">*/
/*                         and <a href="{{ path('ens_manon_category', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*                         more...*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
