<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e4b4fd95aa501f71d1e1a678e87f0a37ce3553e6eb278fa034fc2ea76385762e extends Twig_Template
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
        $__internal_cc2f2c17f6aad0687d1c891e13ba6fe10bac327e7f94ddb68aa8bcba692d39e0 = $this->env->getExtension("native_profiler");
        $__internal_cc2f2c17f6aad0687d1c891e13ba6fe10bac327e7f94ddb68aa8bcba692d39e0->enter($__internal_cc2f2c17f6aad0687d1c891e13ba6fe10bac327e7f94ddb68aa8bcba692d39e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_cc2f2c17f6aad0687d1c891e13ba6fe10bac327e7f94ddb68aa8bcba692d39e0->leave($__internal_cc2f2c17f6aad0687d1c891e13ba6fe10bac327e7f94ddb68aa8bcba692d39e0_prof);

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
