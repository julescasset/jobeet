<?php

/* job/index.html.twig */
class __TwigTemplate_27e35a8294a2f6174e3209d2b14750d983aa93ab241544b22611ed3777d04854 extends Twig_Template
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
        $__internal_787f7f1eea451f98d230b6c8ca8903d80d29e9e76ad5caf38691fea3216b9546 = $this->env->getExtension("native_profiler");
        $__internal_787f7f1eea451f98d230b6c8ca8903d80d29e9e76ad5caf38691fea3216b9546->enter($__internal_787f7f1eea451f98d230b6c8ca8903d80d29e9e76ad5caf38691fea3216b9546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787f7f1eea451f98d230b6c8ca8903d80d29e9e76ad5caf38691fea3216b9546->leave($__internal_787f7f1eea451f98d230b6c8ca8903d80d29e9e76ad5caf38691fea3216b9546_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61d0f2c4c876a580c8230f53e41dfc33a91f3eb3e8491c439e8b55a0e2378b20 = $this->env->getExtension("native_profiler");
        $__internal_61d0f2c4c876a580c8230f53e41dfc33a91f3eb3e8491c439e8b55a0e2378b20->enter($__internal_61d0f2c4c876a580c8230f53e41dfc33a91f3eb3e8491c439e8b55a0e2378b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61d0f2c4c876a580c8230f53e41dfc33a91f3eb3e8491c439e8b55a0e2378b20->leave($__internal_61d0f2c4c876a580c8230f53e41dfc33a91f3eb3e8491c439e8b55a0e2378b20_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_4372840b6d87fd42b954d5be9a04f571eb8281ce4c935e3c6231cc318b15b75f = $this->env->getExtension("native_profiler");
        $__internal_4372840b6d87fd42b954d5be9a04f571eb8281ce4c935e3c6231cc318b15b75f->enter($__internal_4372840b6d87fd42b954d5be9a04f571eb8281ce4c935e3c6231cc318b15b75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div class=\"category_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
            echo "\">
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()), "_format" => "atom")), "html", null, true);
            echo "\">Feed</a>
                    </div>
                    <h1><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
                </div>
                ";
            // line 18
            $this->loadTemplate(":job:list.html.twig", "job/index.html.twig", 18)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
            // line 19
            echo "                ";
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 20
                echo "                    <div class=\"more_jobs\">
                        and <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                        more...
                    </div>
                ";
            }
            // line 25
            echo "            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
";
        
        $__internal_4372840b6d87fd42b954d5be9a04f571eb8281ce4c935e3c6231cc318b15b75f->leave($__internal_4372840b6d87fd42b954d5be9a04f571eb8281ce4c935e3c6231cc318b15b75f_prof);

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
        return array (  132 => 27,  117 => 25,  108 => 21,  105 => 20,  102 => 19,  100 => 18,  93 => 16,  88 => 14,  81 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <div class="category_{{ category.slug }}">*/
/*                 <div class="category">*/
/*                     <div class="feed">*/
/*                         <a href="{{ path('category_show', { 'slug': category.slug, '_format': 'atom' }) }}">Feed</a>*/
/*                     </div>*/
/*                     <h1><a href="{{ path('category_show', { 'slug': category.slug }) }}">{{ category.name }}</a></h1>*/
/*                 </div>*/
/*                 {% include ':job:list.html.twig' with {'jobs': category.activejobs} %}*/
/*                 {% if category.morejobs %}*/
/*                     <div class="more_jobs">*/
/*                         and <a href="{{ path('category_show', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*                         more...*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
