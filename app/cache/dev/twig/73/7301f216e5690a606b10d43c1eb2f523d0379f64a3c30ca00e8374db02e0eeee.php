<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_0eae37c1c4726276ab707a070550b591bbb098c53dc34e4beec1b3aac49ccb8e extends Twig_Template
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
        $__internal_4a34cc413a19fd359107093b7c3bec3bb19ae83d5a33d9a8c21fa1bc4d0aabf9 = $this->env->getExtension("native_profiler");
        $__internal_4a34cc413a19fd359107093b7c3bec3bb19ae83d5a33d9a8c21fa1bc4d0aabf9->enter($__internal_4a34cc413a19fd359107093b7c3bec3bb19ae83d5a33d9a8c21fa1bc4d0aabf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4a34cc413a19fd359107093b7c3bec3bb19ae83d5a33d9a8c21fa1bc4d0aabf9->leave($__internal_4a34cc413a19fd359107093b7c3bec3bb19ae83d5a33d9a8c21fa1bc4d0aabf9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
