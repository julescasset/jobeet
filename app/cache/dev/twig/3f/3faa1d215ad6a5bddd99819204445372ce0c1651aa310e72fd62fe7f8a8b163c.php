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
        $__internal_ed4dd321983e397b93614c87e0fbadacde99cb82f05b7601f9ae2d5d383817f0 = $this->env->getExtension("native_profiler");
        $__internal_ed4dd321983e397b93614c87e0fbadacde99cb82f05b7601f9ae2d5d383817f0->enter($__internal_ed4dd321983e397b93614c87e0fbadacde99cb82f05b7601f9ae2d5d383817f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed4dd321983e397b93614c87e0fbadacde99cb82f05b7601f9ae2d5d383817f0->leave($__internal_ed4dd321983e397b93614c87e0fbadacde99cb82f05b7601f9ae2d5d383817f0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcd4eb303f0c181cc1041b74ddb5cd397e640a25535f73da1406b98c9e67e278 = $this->env->getExtension("native_profiler");
        $__internal_dcd4eb303f0c181cc1041b74ddb5cd397e640a25535f73da1406b98c9e67e278->enter($__internal_dcd4eb303f0c181cc1041b74ddb5cd397e640a25535f73da1406b98c9e67e278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dcd4eb303f0c181cc1041b74ddb5cd397e640a25535f73da1406b98c9e67e278->leave($__internal_dcd4eb303f0c181cc1041b74ddb5cd397e640a25535f73da1406b98c9e67e278_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f143f738a487c9b2b592f82df1a2ca7b503d5e54f5c53219dbbdb6c60724fdad = $this->env->getExtension("native_profiler");
        $__internal_f143f738a487c9b2b592f82df1a2ca7b503d5e54f5c53219dbbdb6c60724fdad->enter($__internal_f143f738a487c9b2b592f82df1a2ca7b503d5e54f5c53219dbbdb6c60724fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <a href=\"\">Feed</a>
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
        
        $__internal_f143f738a487c9b2b592f82df1a2ca7b503d5e54f5c53219dbbdb6c60724fdad->leave($__internal_f143f738a487c9b2b592f82df1a2ca7b503d5e54f5c53219dbbdb6c60724fdad_prof);

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
        return array (  129 => 27,  114 => 25,  105 => 21,  102 => 20,  99 => 19,  97 => 18,  90 => 16,  81 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*                         <a href="">Feed</a>*/
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
