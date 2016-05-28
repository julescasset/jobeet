<?php

/* job/index.atom.twig */
class __TwigTemplate_49768ac54342c512437b48b5101307a4550300514c1b2f61143b8a8edf09df0a extends Twig_Template
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
        $__internal_699382157785b9eda0560d46e2ce4e5e61496e858287e5a2a65fbf2bd808f091 = $this->env->getExtension("native_profiler");
        $__internal_699382157785b9eda0560d46e2ce4e5e61496e858287e5a2a65fbf2bd808f091->enter($__internal_699382157785b9eda0560d46e2ce4e5e61496e858287e5a2a65fbf2bd808f091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.atom.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("job_index", array("_format" => "atom"));
        echo "\" rel=\"self\"/>
    <link href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ens_manon_homepage");
        echo "\"/>
    <updated>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : $this->getContext($context, "lastUpdated")), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 13
                echo "            <entry>
                <title>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
                echo ")</title>
                <link href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companyslug", array()), "location" => $this->getAttribute($context["job"], "locationslug", array()), "position" => $this->getAttribute(                // line 16
$context["job"], "positionslug", array()))), "html", null, true);
                echo "\" />
                <id>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
                echo "</id>
                <updated>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["job"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
                <summary type=\"xhtml\">
                    <div xmlns=\"http://www.w3.org/1999/xhtml\">
                        ";
                // line 21
                if ($this->getAttribute($context["job"], "logo", array())) {
                    // line 22
                    echo "                            <div>
                                <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
                    echo "\">
                                    <img src=\"http://";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
                    echo "/uploads/jobs/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "logo", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
                    echo " logo\" />
                                </a>
                            </div>
                        ";
                }
                // line 28
                echo "                        <div>
                            ";
                // line 29
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["job"], "description", array()), "html", null, true));
                echo "
                        </div>
                        <h4>How to apply?</h4>
                        <p>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "howtoapply", array()), "html", null, true);
                echo "</p>
                    </div>
                </summary>
                <author><name>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
                echo "</name></author>
            </entry>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</feed>";
        
        $__internal_699382157785b9eda0560d46e2ce4e5e61496e858287e5a2a65fbf2bd808f091->leave($__internal_699382157785b9eda0560d46e2ce4e5e61496e858287e5a2a65fbf2bd808f091_prof);

    }

    public function getTemplateName()
    {
        return "job/index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  123 => 38,  114 => 35,  108 => 32,  102 => 29,  99 => 28,  88 => 24,  84 => 23,  81 => 22,  79 => 21,  73 => 18,  69 => 17,  65 => 16,  64 => 15,  58 => 14,  55 => 13,  50 => 12,  46 => 11,  41 => 9,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/*     <title>Jobeet</title>*/
/*     <subtitle>Latest Jobs</subtitle>*/
/*     <link href="{{ url('job_index', {'_format': 'atom'}) }}" rel="self"/>*/
/*     <link href="{{ url('ens_manon_homepage') }}"/>*/
/*     <updated>{{ lastUpdated }}</updated>*/
/*     <author><name>Jobeet</name></author>*/
/*     <id>{{ feedId }}</id>*/
/* */
/*     {% for category in categories %}*/
/*         {% for job in category.activejobs %}*/
/*             <entry>*/
/*                 <title>{{ job.position }} ({{ job.location }})</title>*/
/*                 <link href="{{ url('job_show', { 'id': job.id, 'company': job.companyslug, 'location': job.locationslug,*/
/*                     'position': job.positionslug }) }}" />*/
/*                 <id>{{ job.id }}</id>*/
/*                 <updated>{{ job.createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*                 <summary type="xhtml">*/
/*                     <div xmlns="http://www.w3.org/1999/xhtml">*/
/*                         {% if job.logo %}*/
/*                             <div>*/
/*                                 <a href="{{ job.url }}">*/
/*                                     <img src="http://{{ app.request.host }}/uploads/jobs/{{ job.logo }}" alt="{{ job.company }} logo" />*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         <div>*/
/*                             {{ job.description|nl2br }}*/
/*                         </div>*/
/*                         <h4>How to apply?</h4>*/
/*                         <p>{{ job.howtoapply }}</p>*/
/*                     </div>*/
/*                 </summary>*/
/*                 <author><name>{{ job.company }}</name></author>*/
/*             </entry>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* </feed>*/
