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
        $__internal_de8e83e2e670954dd2a3e8e15c66fbafeb27bcc8ed8f07cd9dd7fcbc26be8030 = $this->env->getExtension("native_profiler");
        $__internal_de8e83e2e670954dd2a3e8e15c66fbafeb27bcc8ed8f07cd9dd7fcbc26be8030->enter($__internal_de8e83e2e670954dd2a3e8e15c66fbafeb27bcc8ed8f07cd9dd7fcbc26be8030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_de8e83e2e670954dd2a3e8e15c66fbafeb27bcc8ed8f07cd9dd7fcbc26be8030->leave($__internal_de8e83e2e670954dd2a3e8e15c66fbafeb27bcc8ed8f07cd9dd7fcbc26be8030_prof);

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