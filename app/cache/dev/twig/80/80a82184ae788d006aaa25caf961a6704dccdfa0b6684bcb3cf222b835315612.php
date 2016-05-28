<?php

/* category/show.atom.twig */
class __TwigTemplate_c4db09161096051ddd6b865bfd8f31628c5a280ad9da77b321107fc5cc379ccb extends Twig_Template
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
        $__internal_0a143ccd759a9e32d7f3c4d2f29af2be019fce795129a4635577d1adbf3c39fe = $this->env->getExtension("native_profiler");
        $__internal_0a143ccd759a9e32d7f3c4d2f29af2be019fce795129a4635577d1adbf3c39fe->enter($__internal_0a143ccd759a9e32d7f3c4d2f29af2be019fce795129a4635577d1adbf3c39fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.atom.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo ")</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()))), "html", null, true);
        echo "\" />
    <updated>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()), 0, array(), "array"), "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 12
            echo "        <entry>
            <title>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo ")</title>
            <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companyslug", array()), "location" => $this->getAttribute($context["job"], "locationslug", array()), "position" => $this->getAttribute(            // line 15
$context["job"], "positionslug", array()))), "html", null, true);
            echo "\" />
            <id>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "</id>
            <updated>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["job"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 20
            if ($this->getAttribute($context["job"], "logo", array())) {
                // line 21
                echo "                        <div>
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
                echo "\">
                                <img src=\"http://";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "logo", array()), "html", null, true);
                echo "\"
                                     alt=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
                echo " logo\" />
                            </a>
                        </div>
                    ";
            }
            // line 28
            echo "                    <div>
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
        echo "</feed>";
        
        $__internal_0a143ccd759a9e32d7f3c4d2f29af2be019fce795129a4635577d1adbf3c39fe->leave($__internal_0a143ccd759a9e32d7f3c4d2f29af2be019fce795129a4635577d1adbf3c39fe_prof);

    }

    public function getTemplateName()
    {
        return "category/show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  114 => 35,  108 => 32,  102 => 29,  99 => 28,  92 => 24,  86 => 23,  82 => 22,  79 => 21,  77 => 20,  71 => 17,  67 => 16,  63 => 15,  62 => 14,  56 => 13,  53 => 12,  49 => 11,  44 => 9,  39 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/*     <title>Jobeet ({{ category.name }})</title>*/
/*     <subtitle>Latest Jobs</subtitle>*/
/*     <link href="{{ url('category_show', { 'slug': category.slug, '_format': 'atom' }) }}" rel="self" />*/
/*     <link href="{{ url('category_show', { 'slug': category.slug }) }}" />*/
/*     <updated>{{ category.activejobs[0].createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*     <author><name>Jobeet</name></author>*/
/*     <id>{{ feedId }}</id>*/
/* */
/*     {% for job in category.activejobs %}*/
/*         <entry>*/
/*             <title>{{ job.position }} ({{ job.location }})</title>*/
/*             <link href="{{ url('job_show', { 'id': job.id, 'company': job.companyslug, 'location': job.locationslug,*/
/*                 'position': job.positionslug }) }}" />*/
/*             <id>{{ job.id }}</id>*/
/*             <updated>{{ job.createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*             <summary type="xhtml">*/
/*                 <div xmlns="http://www.w3.org/1999/xhtml">*/
/*                     {% if job.logo %}*/
/*                         <div>*/
/*                             <a href="{{ job.url }}">*/
/*                                 <img src="http://{{ app.request.host }}/uploads/jobs/{{ job.logo }}"*/
/*                                      alt="{{ job.company }} logo" />*/
/*                             </a>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div>*/
/*                         {{ job.description|nl2br }}*/
/*                     </div>*/
/*                     <h4>How to apply?</h4>*/
/*                     <p>{{ job.howtoapply }}</p>*/
/*                 </div>*/
/*             </summary>*/
/*             <author><name>{{ job.company }}</name></author>*/
/*         </entry>*/
/*     {% endfor %}*/
/* </feed>*/
