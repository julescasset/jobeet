<?php

/* :job:list.html.twig */
class __TwigTemplate_454f63b622e6b1c85fbd9dac5583ea428f72c766d6601ec903d93b67c5143090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd26fa7ae9533d5c9c7c0eaf1eca5650671cd9bda61b9076dc58a70b3ac1ec5f = $this->env->getExtension("native_profiler");
        $__internal_cd26fa7ae9533d5c9c7c0eaf1eca5650671cd9bda61b9076dc58a70b3ac1ec5f->enter($__internal_cd26fa7ae9533d5c9c7c0eaf1eca5650671cd9bda61b9076dc58a70b3ac1ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:list.html.twig"));

        // line 1
        echo "<table class=\"jobs\">
    ";
        // line 2
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
            <td class=\"location\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
            <td class=\"position\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "
                </a>
            </td>
            <td class=\"company\">";
            // line 10
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
        // line 13
        echo "</table>";
        
        $__internal_cd26fa7ae9533d5c9c7c0eaf1eca5650671cd9bda61b9076dc58a70b3ac1ec5f->leave($__internal_cd26fa7ae9533d5c9c7c0eaf1eca5650671cd9bda61b9076dc58a70b3ac1ec5f_prof);

    }

    public function getTemplateName()
    {
        return ":job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  62 => 10,  56 => 7,  52 => 6,  47 => 4,  42 => 3,  25 => 2,  22 => 1,);
    }
}
/* <table class="jobs">*/
/*     {% for entity in jobs %}*/
/*         <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*             <td class="location">{{ entity.location }}</td>*/
/*             <td class="position">*/
/*                 <a href="{{ path('job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}">*/
/*                     {{ entity.position }}*/
/*                 </a>*/
/*             </td>*/
/*             <td class="company">{{ entity.company }}</td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
