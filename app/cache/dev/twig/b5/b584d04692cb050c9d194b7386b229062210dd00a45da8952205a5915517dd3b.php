<?php

/* job/index.html.twig */
class __TwigTemplate_ff5f69dd78597e7fdd8d53d0d59731e46707e9c16c504c20eab1a23d32f193ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", "job/index.html.twig", 1);
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
        $__internal_59bb206d6d0aa4e74efe0c69f9c715d63932007b98bbfc74f8535e63d916abb9 = $this->env->getExtension("native_profiler");
        $__internal_59bb206d6d0aa4e74efe0c69f9c715d63932007b98bbfc74f8535e63d916abb9->enter($__internal_59bb206d6d0aa4e74efe0c69f9c715d63932007b98bbfc74f8535e63d916abb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59bb206d6d0aa4e74efe0c69f9c715d63932007b98bbfc74f8535e63d916abb9->leave($__internal_59bb206d6d0aa4e74efe0c69f9c715d63932007b98bbfc74f8535e63d916abb9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1113f9d5c2429b32c310bd97cf20876d6dbb4b483f37831560b3af1b444a2489 = $this->env->getExtension("native_profiler");
        $__internal_1113f9d5c2429b32c310bd97cf20876d6dbb4b483f37831560b3af1b444a2489->enter($__internal_1113f9d5c2429b32c310bd97cf20876d6dbb4b483f37831560b3af1b444a2489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1113f9d5c2429b32c310bd97cf20876d6dbb4b483f37831560b3af1b444a2489->leave($__internal_1113f9d5c2429b32c310bd97cf20876d6dbb4b483f37831560b3af1b444a2489_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_545b8c5b072b8a4806fdd77c028fab29a64a4ec5615e86bba64b1d30a7441f94 = $this->env->getExtension("native_profiler");
        $__internal_545b8c5b072b8a4806fdd77c028fab29a64a4ec5615e86bba64b1d30a7441f94->enter($__internal_545b8c5b072b8a4806fdd77c028fab29a64a4ec5615e86bba64b1d30a7441f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_545b8c5b072b8a4806fdd77c028fab29a64a4ec5615e86bba64b1d30a7441f94->leave($__internal_545b8c5b072b8a4806fdd77c028fab29a64a4ec5615e86bba64b1d30a7441f94_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
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
