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
        $__internal_ebd28d6a824a06a35ac788891bec52c9d7761cd7d5dfb20e3ae961d5da77a52f = $this->env->getExtension("native_profiler");
        $__internal_ebd28d6a824a06a35ac788891bec52c9d7761cd7d5dfb20e3ae961d5da77a52f->enter($__internal_ebd28d6a824a06a35ac788891bec52c9d7761cd7d5dfb20e3ae961d5da77a52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd28d6a824a06a35ac788891bec52c9d7761cd7d5dfb20e3ae961d5da77a52f->leave($__internal_ebd28d6a824a06a35ac788891bec52c9d7761cd7d5dfb20e3ae961d5da77a52f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_709579112a36b7535e351ba8215cdcfa3843051edd4032196dd9dc4c88014201 = $this->env->getExtension("native_profiler");
        $__internal_709579112a36b7535e351ba8215cdcfa3843051edd4032196dd9dc4c88014201->enter($__internal_709579112a36b7535e351ba8215cdcfa3843051edd4032196dd9dc4c88014201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_709579112a36b7535e351ba8215cdcfa3843051edd4032196dd9dc4c88014201->leave($__internal_709579112a36b7535e351ba8215cdcfa3843051edd4032196dd9dc4c88014201_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_e786a35502f2c89287ef7cbfacf9fd14a67f66ff85ce1976edd273523d0c1a50 = $this->env->getExtension("native_profiler");
        $__internal_e786a35502f2c89287ef7cbfacf9fd14a67f66ff85ce1976edd273523d0c1a50->enter($__internal_e786a35502f2c89287ef7cbfacf9fd14a67f66ff85ce1976edd273523d0c1a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        <table class=\"jobs\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 12
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td class=\"location\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                    <td class=\"position\">
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "company", array()), "location" => $this->getAttribute($context["job"], "location", array()), "position" => $this->getAttribute(            // line 16
$context["job"], "position", array()))), "html", null, true);
            echo "\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td class=\"company\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </table>
    </div>
";
        
        $__internal_e786a35502f2c89287ef7cbfacf9fd14a67f66ff85ce1976edd273523d0c1a50->leave($__internal_e786a35502f2c89287ef7cbfacf9fd14a67f66ff85ce1976edd273523d0c1a50_prof);

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
        return array (  120 => 23,  103 => 20,  97 => 17,  93 => 16,  92 => 15,  87 => 13,  82 => 12,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*         <table class="jobs">*/
/*             {% for job in jobs %}*/
/*                 <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                     <td class="location">{{ job.location }}</td>*/
/*                     <td class="position">*/
/*                         <a href="{{ path('job_show', { 'id': job.id, 'company': job.company, 'location': job.location,*/
/*                             'position': job.position }) }}">*/
/*                             {{ job.position }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td class="company">{{ job.company }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
