<?php

/* EnsManonBundle::layout.html.twig */
class __TwigTemplate_adce9c60f98aeb929b85b9c37e6143ebb1b05148f2d8992546de5374c81b02cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5618e24bc5daae0b401e0cbdfe0da117fcb9d55ed157bc5349ef38678a7eb91f = $this->env->getExtension("native_profiler");
        $__internal_5618e24bc5daae0b401e0cbdfe0da117fcb9d55ed157bc5349ef38678a7eb91f->enter($__internal_5618e24bc5daae0b401e0cbdfe0da117fcb9d55ed157bc5349ef38678a7eb91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsManonBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("job_index", array("_format" => "atom"));
        echo "\" />
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ens_manon_homepage");
        echo "\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("job_new");
        echo "\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"job_history\">
        Recent viewed jobs:
        <ul>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 52
            echo "                <li>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companyslug", array()), "location" => $this->getAttribute(            // line 54
$context["job"], "locationslug", array()), "position" => $this->getAttribute($context["job"], "positionslug", array()))), "html", null, true);
            echo "\">
                        ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </ul>
    </div>

    <div id=\"content\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 64
            echo "            <div class=\"flash-notice\">
                ";
            // line 65
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 70
            echo "            <div class=\"flash-error\">
                ";
            // line 71
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
        <div class=\"content\">
            ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("job_index", array("_format" => "atom"));
        echo "\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_5618e24bc5daae0b401e0cbdfe0da117fcb9d55ed157bc5349ef38678a7eb91f->leave($__internal_5618e24bc5daae0b401e0cbdfe0da117fcb9d55ed157bc5349ef38678a7eb91f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_165b65dfbb611db01a7cb8409d14ba50c0fb9d6589f52e7d1924b39d9a2770fa = $this->env->getExtension("native_profiler");
        $__internal_165b65dfbb611db01a7cb8409d14ba50c0fb9d6589f52e7d1924b39d9a2770fa->enter($__internal_165b65dfbb611db01a7cb8409d14ba50c0fb9d6589f52e7d1924b39d9a2770fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_165b65dfbb611db01a7cb8409d14ba50c0fb9d6589f52e7d1924b39d9a2770fa->leave($__internal_165b65dfbb611db01a7cb8409d14ba50c0fb9d6589f52e7d1924b39d9a2770fa_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c88064631cbe083dfbe1ae3111decdc405a5335a3e210a589b383f5339fa7b46 = $this->env->getExtension("native_profiler");
        $__internal_c88064631cbe083dfbe1ae3111decdc405a5335a3e210a589b383f5339fa7b46->enter($__internal_c88064631cbe083dfbe1ae3111decdc405a5335a3e210a589b383f5339fa7b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_c88064631cbe083dfbe1ae3111decdc405a5335a3e210a589b383f5339fa7b46->leave($__internal_c88064631cbe083dfbe1ae3111decdc405a5335a3e210a589b383f5339fa7b46_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f476ea6f49415f5611f5102ab3231480a96c70d3f5c3eac6de2c95e91800a6ef = $this->env->getExtension("native_profiler");
        $__internal_f476ea6f49415f5611f5102ab3231480a96c70d3f5c3eac6de2c95e91800a6ef->enter($__internal_f476ea6f49415f5611f5102ab3231480a96c70d3f5c3eac6de2c95e91800a6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_f476ea6f49415f5611f5102ab3231480a96c70d3f5c3eac6de2c95e91800a6ef->leave($__internal_f476ea6f49415f5611f5102ab3231480a96c70d3f5c3eac6de2c95e91800a6ef_prof);

    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf5bce437d0829c02d44a7863b4cf7e0623e97304f4b99590603257e4545a003 = $this->env->getExtension("native_profiler");
        $__internal_cf5bce437d0829c02d44a7863b4cf7e0623e97304f4b99590603257e4545a003->enter($__internal_cf5bce437d0829c02d44a7863b4cf7e0623e97304f4b99590603257e4545a003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 77
        echo "            ";
        
        $__internal_cf5bce437d0829c02d44a7863b4cf7e0623e97304f4b99590603257e4545a003->leave($__internal_cf5bce437d0829c02d44a7863b4cf7e0623e97304f4b99590603257e4545a003_prof);

    }

    public function getTemplateName()
    {
        return "EnsManonBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 77,  246 => 76,  239 => 14,  233 => 13,  223 => 11,  217 => 10,  209 => 6,  203 => 5,  187 => 91,  179 => 86,  174 => 84,  166 => 78,  164 => 76,  160 => 74,  151 => 71,  148 => 70,  144 => 69,  141 => 68,  132 => 65,  129 => 64,  125 => 63,  119 => 59,  107 => 55,  103 => 54,  102 => 53,  99 => 52,  95 => 51,  71 => 30,  61 => 23,  57 => 22,  48 => 16,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>*/
/*         {% block title %}*/
/*             Jobeet - Your best job board*/
/*         {% endblock %}*/
/*     </title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/ensmanon/css/main.css') }}" type="text/css" media="all" />*/
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/ensmanon/images/favicon.ico') }}" />*/
/*     <link rel="alternate" type="application/atom+xml" title="Latest Jobs" href="{{ url('job_index', {'_format': 'atom'}) }}" />*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*     <div id="header">*/
/*         <div class="content">*/
/*             <h1><a href="{{ path('ens_manon_homepage') }}">*/
/*                     <img src="{{ asset('bundles/ensmanon/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*                 </a></h1>*/
/* */
/*             <div id="sub_header">*/
/*                 <div class="post">*/
/*                     <h2>Ask for people</h2>*/
/*                     <div>*/
/*                         <a href="{{ path('job_new') }}">Post a Job</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="search">*/
/*                     <h2>Ask for a job</h2>*/
/*                     <form action="" method="get">*/
/*                         <input type="text" name="keywords" id="search_keywords" />*/
/*                         <input type="submit" value="search" />*/
/*                         <div class="help">*/
/*                             Enter some keywords (city, country, position, ...)*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="job_history">*/
/*         Recent viewed jobs:*/
/*         <ul>*/
/*             {% for job in app.session.get('job_history') %}*/
/*                 <li>*/
/*                     <a href="{{ path('job_show', { 'id': job.id, 'company': job.companyslug,*/
/*                         'location': job.locationslug, 'position': job.positionslug }) }}">*/
/*                         {{ job.position }} - {{ job.company }}*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div id="content">*/
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash-notice">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('error') %}*/
/*             <div class="flash-error">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="footer">*/
/*         <div class="content">*/
/*           <span class="symfony">*/
/*             <img src="{{ asset('bundles/ensmanon/images/jobeet-mini.png') }}" />*/
/*             powered by <a href="http://www.symfony.com/">*/
/*               <img src="{{ asset('bundles/ensmanon/images/symfony.gif') }}" alt="symfony framework" />*/
/*             </a>*/
/*           </span>*/
/*             <ul>*/
/*                 <li><a href="">About Jobeet</a></li>*/
/*                 <li><a href="{{ path('job_index', {'_format': 'atom'}) }}">Full feed</a></li>*/
/*                 <li><a href="">Jobeet API</a></li>*/
/*                 <li class="last"><a href="">Affiliates</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
