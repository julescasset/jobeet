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
        $__internal_67d80b935b9de0e79d11b79d30e55272bede5573b4aa78c5ef42be5a1f024e7c = $this->env->getExtension("native_profiler");
        $__internal_67d80b935b9de0e79d11b79d30e55272bede5573b4aa78c5ef42be5a1f024e7c->enter($__internal_67d80b935b9de0e79d11b79d30e55272bede5573b4aa78c5ef42be5a1f024e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsManonBundle::layout.html.twig"));

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
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ens_manon_homepage");
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 29
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
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 51
            echo "                <li>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companyslug", array()), "location" => $this->getAttribute(            // line 53
$context["job"], "locationslug", array()), "position" => $this->getAttribute($context["job"], "positionslug", array()))), "html", null, true);
            echo "\">
                        ";
            // line 54
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
        // line 58
        echo "        </ul>
    </div>

    <div id=\"content\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 63
            echo "            <div class=\"flash-notice\">
                ";
            // line 64
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 69
            echo "            <div class=\"flash-error\">
                ";
            // line 70
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
        <div class=\"content\">
            ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_67d80b935b9de0e79d11b79d30e55272bede5573b4aa78c5ef42be5a1f024e7c->leave($__internal_67d80b935b9de0e79d11b79d30e55272bede5573b4aa78c5ef42be5a1f024e7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4119d5845d3dd38220c6d4ffa97f10aea3266302b54e9282f2a560d6aa84a5fa = $this->env->getExtension("native_profiler");
        $__internal_4119d5845d3dd38220c6d4ffa97f10aea3266302b54e9282f2a560d6aa84a5fa->enter($__internal_4119d5845d3dd38220c6d4ffa97f10aea3266302b54e9282f2a560d6aa84a5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_4119d5845d3dd38220c6d4ffa97f10aea3266302b54e9282f2a560d6aa84a5fa->leave($__internal_4119d5845d3dd38220c6d4ffa97f10aea3266302b54e9282f2a560d6aa84a5fa_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9cbcb0d682fb30a73cb02a5173edfe3b30be9dd3304bc60421279b0ed6b4560 = $this->env->getExtension("native_profiler");
        $__internal_b9cbcb0d682fb30a73cb02a5173edfe3b30be9dd3304bc60421279b0ed6b4560->enter($__internal_b9cbcb0d682fb30a73cb02a5173edfe3b30be9dd3304bc60421279b0ed6b4560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_b9cbcb0d682fb30a73cb02a5173edfe3b30be9dd3304bc60421279b0ed6b4560->leave($__internal_b9cbcb0d682fb30a73cb02a5173edfe3b30be9dd3304bc60421279b0ed6b4560_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cfdc6bcf5ea01edfff358441c793212baa9a3890888dcc20ab1fa9bb7e0c1c8 = $this->env->getExtension("native_profiler");
        $__internal_8cfdc6bcf5ea01edfff358441c793212baa9a3890888dcc20ab1fa9bb7e0c1c8->enter($__internal_8cfdc6bcf5ea01edfff358441c793212baa9a3890888dcc20ab1fa9bb7e0c1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_8cfdc6bcf5ea01edfff358441c793212baa9a3890888dcc20ab1fa9bb7e0c1c8->leave($__internal_8cfdc6bcf5ea01edfff358441c793212baa9a3890888dcc20ab1fa9bb7e0c1c8_prof);

    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ef02aa3e2599c5ab742c2452e3e8a6ee745f5706b2d69ef7cebbea5545b4c38 = $this->env->getExtension("native_profiler");
        $__internal_7ef02aa3e2599c5ab742c2452e3e8a6ee745f5706b2d69ef7cebbea5545b4c38->enter($__internal_7ef02aa3e2599c5ab742c2452e3e8a6ee745f5706b2d69ef7cebbea5545b4c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 76
        echo "            ";
        
        $__internal_7ef02aa3e2599c5ab742c2452e3e8a6ee745f5706b2d69ef7cebbea5545b4c38->leave($__internal_7ef02aa3e2599c5ab742c2452e3e8a6ee745f5706b2d69ef7cebbea5545b4c38_prof);

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
        return array (  245 => 76,  239 => 75,  232 => 14,  226 => 13,  216 => 11,  210 => 10,  202 => 6,  196 => 5,  175 => 85,  170 => 83,  162 => 77,  160 => 75,  156 => 73,  147 => 70,  144 => 69,  140 => 68,  137 => 67,  128 => 64,  125 => 63,  121 => 62,  115 => 58,  103 => 54,  99 => 53,  98 => 52,  95 => 51,  91 => 50,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
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
/*                 <li class="feed"><a href="">Full feed</a></li>*/
/*                 <li><a href="">Jobeet API</a></li>*/
/*                 <li class="last"><a href="">Affiliates</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
