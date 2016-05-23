<?php

/* :category:show.html.twig */
class __TwigTemplate_acf4e526ce18074ba3d658da9721dab6b1741bcd0b9efada0c2cd9dfba7cde08 extends Twig_Template
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
        $__internal_204e215bfee5f608b69cb2459cc1a3da8aae67ec08e0145ec86e9f6c955da9d8 = $this->env->getExtension("native_profiler");
        $__internal_204e215bfee5f608b69cb2459cc1a3da8aae67ec08e0145ec86e9f6c955da9d8->enter($__internal_204e215bfee5f608b69cb2459cc1a3da8aae67ec08e0145ec86e9f6c955da9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_204e215bfee5f608b69cb2459cc1a3da8aae67ec08e0145ec86e9f6c955da9d8->leave($__internal_204e215bfee5f608b69cb2459cc1a3da8aae67ec08e0145ec86e9f6c955da9d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_169c57cf96cc2aa1db4ed3fba14ff65cf6b9073d74d320ac4dfdeefcdb6ec6d6 = $this->env->getExtension("native_profiler");
        $__internal_169c57cf96cc2aa1db4ed3fba14ff65cf6b9073d74d320ac4dfdeefcdb6ec6d6->enter($__internal_169c57cf96cc2aa1db4ed3fba14ff65cf6b9073d74d320ac4dfdeefcdb6ec6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_169c57cf96cc2aa1db4ed3fba14ff65cf6b9073d74d320ac4dfdeefcdb6ec6d6->leave($__internal_169c57cf96cc2aa1db4ed3fba14ff65cf6b9073d74d320ac4dfdeefcdb6ec6d6_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3455565945140b1f2fa7ecaf880bf671a574e7da6b27a912ad4992be6949e7a = $this->env->getExtension("native_profiler");
        $__internal_a3455565945140b1f2fa7ecaf880bf671a574e7da6b27a912ad4992be6949e7a->enter($__internal_a3455565945140b1f2fa7ecaf880bf671a574e7da6b27a912ad4992be6949e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3455565945140b1f2fa7ecaf880bf671a574e7da6b27a912ad4992be6949e7a->leave($__internal_a3455565945140b1f2fa7ecaf880bf671a574e7da6b27a912ad4992be6949e7a_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_f3c9470eb352830320ca628e70ec6ce67d4358e9bb81ba0d61800449f493c3dd = $this->env->getExtension("native_profiler");
        $__internal_f3c9470eb352830320ca628e70ec6ce67d4358e9bb81ba0d61800449f493c3dd->enter($__internal_f3c9470eb352830320ca628e70ec6ce67d4358e9bb81ba0d61800449f493c3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

    <table class=\"jobs\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()));
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
            // line 22
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                <td class=\"location\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
                <td class=\"position\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"company\">";
            // line 29
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
        // line 32
        echo "    </table>
";
        
        $__internal_f3c9470eb352830320ca628e70ec6ce67d4358e9bb81ba0d61800449f493c3dd->leave($__internal_f3c9470eb352830320ca628e70ec6ce67d4358e9bb81ba0d61800449f493c3dd_prof);

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
        return array (  145 => 32,  128 => 29,  122 => 26,  118 => 25,  113 => 23,  108 => 22,  91 => 21,  84 => 17,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Jobs in the {{ category.name }} category*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensmanon/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="category">*/
/*         <div class="feed">*/
/*             <a href="">Feed</a>*/
/*         </div>*/
/*         <h1>{{ category.name }}</h1>*/
/*     </div>*/
/* */
/*     <table class="jobs">*/
/*         {% for entity in category.activejobs %}*/
/*             <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                 <td class="location">{{ entity.location }}</td>*/
/*                 <td class="position">*/
/*                     <a href="{{ path('job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}">*/
/*                         {{ entity.position }}*/
/*                     </a>*/
/*                 </td>*/
/*                 <td class="company">{{ entity.company }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
