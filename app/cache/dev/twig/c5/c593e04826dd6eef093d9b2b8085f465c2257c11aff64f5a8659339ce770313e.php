<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e79868ed5e5aa01e493964e602e4a9911a1fea1acb39c79d0fd5c07db343ffc3 extends Twig_Template
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
        $__internal_519718b644fd0af89c09843b46f9da7f7eb939ea7d1f4fdc862e2ca74ed7535e = $this->env->getExtension("native_profiler");
        $__internal_519718b644fd0af89c09843b46f9da7f7eb939ea7d1f4fdc862e2ca74ed7535e->enter($__internal_519718b644fd0af89c09843b46f9da7f7eb939ea7d1f4fdc862e2ca74ed7535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_519718b644fd0af89c09843b46f9da7f7eb939ea7d1f4fdc862e2ca74ed7535e->leave($__internal_519718b644fd0af89c09843b46f9da7f7eb939ea7d1f4fdc862e2ca74ed7535e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
