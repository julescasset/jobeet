<?php

/* @EnsManon/layout.html.twig */
class __TwigTemplate_d0726c9738232b95fde8392d50fa2280310ecc6eb883152d3788a8d87407883e extends Twig_Template
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
        $__internal_0d35be10631f19eda4ba9a62901da31ff39ce5aa2851904854b35072a1b5bcea = $this->env->getExtension("native_profiler");
        $__internal_0d35be10631f19eda4ba9a62901da31ff39ce5aa2851904854b35072a1b5bcea->enter($__internal_0d35be10631f19eda4ba9a62901da31ff39ce5aa2851904854b35072a1b5bcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsManon/layout.html.twig"));

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

    <div id=\"content\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "            <div class=\"flash-notice\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "            <div class=\"flash-error\">
                ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        <div class=\"content\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 71
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
        
        $__internal_0d35be10631f19eda4ba9a62901da31ff39ce5aa2851904854b35072a1b5bcea->leave($__internal_0d35be10631f19eda4ba9a62901da31ff39ce5aa2851904854b35072a1b5bcea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_498945f8fd65107530e6228976204afde119faf306c0cc95cdeb50612bcba08a = $this->env->getExtension("native_profiler");
        $__internal_498945f8fd65107530e6228976204afde119faf306c0cc95cdeb50612bcba08a->enter($__internal_498945f8fd65107530e6228976204afde119faf306c0cc95cdeb50612bcba08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_498945f8fd65107530e6228976204afde119faf306c0cc95cdeb50612bcba08a->leave($__internal_498945f8fd65107530e6228976204afde119faf306c0cc95cdeb50612bcba08a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e05d5c665650a962013727d4ef0946d88eecfd5d544073292e1fbde0497a742 = $this->env->getExtension("native_profiler");
        $__internal_4e05d5c665650a962013727d4ef0946d88eecfd5d544073292e1fbde0497a742->enter($__internal_4e05d5c665650a962013727d4ef0946d88eecfd5d544073292e1fbde0497a742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_4e05d5c665650a962013727d4ef0946d88eecfd5d544073292e1fbde0497a742->leave($__internal_4e05d5c665650a962013727d4ef0946d88eecfd5d544073292e1fbde0497a742_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58dca47a2bc5d3713f6ac9fe2c0d4f3d99b3c198789ceca9c79c85ad373529d5 = $this->env->getExtension("native_profiler");
        $__internal_58dca47a2bc5d3713f6ac9fe2c0d4f3d99b3c198789ceca9c79c85ad373529d5->enter($__internal_58dca47a2bc5d3713f6ac9fe2c0d4f3d99b3c198789ceca9c79c85ad373529d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_58dca47a2bc5d3713f6ac9fe2c0d4f3d99b3c198789ceca9c79c85ad373529d5->leave($__internal_58dca47a2bc5d3713f6ac9fe2c0d4f3d99b3c198789ceca9c79c85ad373529d5_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_aceb3ad593a4ce7888a990554a71a86ea29c1c9bafbe0d9a0b196d1d1bf14161 = $this->env->getExtension("native_profiler");
        $__internal_aceb3ad593a4ce7888a990554a71a86ea29c1c9bafbe0d9a0b196d1d1bf14161->enter($__internal_aceb3ad593a4ce7888a990554a71a86ea29c1c9bafbe0d9a0b196d1d1bf14161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "            ";
        
        $__internal_aceb3ad593a4ce7888a990554a71a86ea29c1c9bafbe0d9a0b196d1d1bf14161->leave($__internal_aceb3ad593a4ce7888a990554a71a86ea29c1c9bafbe0d9a0b196d1d1bf14161_prof);

    }

    public function getTemplateName()
    {
        return "@EnsManon/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 62,  207 => 61,  200 => 14,  194 => 13,  184 => 11,  178 => 10,  170 => 6,  164 => 5,  143 => 71,  138 => 69,  130 => 63,  128 => 61,  124 => 59,  115 => 56,  112 => 55,  108 => 54,  105 => 53,  96 => 50,  93 => 49,  89 => 48,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
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
