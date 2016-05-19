<?php

/* base.html.twig */
class __TwigTemplate_ee8cd5557d913d86f251e73154f6d0da19d547123831d9628e4fb750c8c729a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07f4d108c91bf3a974da0de892612b7b312772b92c0f554756dab342f1066754 = $this->env->getExtension("native_profiler");
        $__internal_07f4d108c91bf3a974da0de892612b7b312772b92c0f554756dab342f1066754->enter($__internal_07f4d108c91bf3a974da0de892612b7b312772b92c0f554756dab342f1066754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_07f4d108c91bf3a974da0de892612b7b312772b92c0f554756dab342f1066754->leave($__internal_07f4d108c91bf3a974da0de892612b7b312772b92c0f554756dab342f1066754_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_610805f83ff7769c5f0fa0aa0a46cc4995ce6926f38d0145f6727b1b5267c696 = $this->env->getExtension("native_profiler");
        $__internal_610805f83ff7769c5f0fa0aa0a46cc4995ce6926f38d0145f6727b1b5267c696->enter($__internal_610805f83ff7769c5f0fa0aa0a46cc4995ce6926f38d0145f6727b1b5267c696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_610805f83ff7769c5f0fa0aa0a46cc4995ce6926f38d0145f6727b1b5267c696->leave($__internal_610805f83ff7769c5f0fa0aa0a46cc4995ce6926f38d0145f6727b1b5267c696_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0377d3348c568e79d70b336a9a4f0198234aa056da1056d1107b98ef49453a5 = $this->env->getExtension("native_profiler");
        $__internal_f0377d3348c568e79d70b336a9a4f0198234aa056da1056d1107b98ef49453a5->enter($__internal_f0377d3348c568e79d70b336a9a4f0198234aa056da1056d1107b98ef49453a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0377d3348c568e79d70b336a9a4f0198234aa056da1056d1107b98ef49453a5->leave($__internal_f0377d3348c568e79d70b336a9a4f0198234aa056da1056d1107b98ef49453a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87870d32ee14fe1b9fe51b1d78f579fdf3ff6c9a337516904790e880183180f = $this->env->getExtension("native_profiler");
        $__internal_a87870d32ee14fe1b9fe51b1d78f579fdf3ff6c9a337516904790e880183180f->enter($__internal_a87870d32ee14fe1b9fe51b1d78f579fdf3ff6c9a337516904790e880183180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a87870d32ee14fe1b9fe51b1d78f579fdf3ff6c9a337516904790e880183180f->leave($__internal_a87870d32ee14fe1b9fe51b1d78f579fdf3ff6c9a337516904790e880183180f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eccd45f60e08eb9a40cf866aaa14a7f6efed31c68d6985c8a48c833e395fcb0d = $this->env->getExtension("native_profiler");
        $__internal_eccd45f60e08eb9a40cf866aaa14a7f6efed31c68d6985c8a48c833e395fcb0d->enter($__internal_eccd45f60e08eb9a40cf866aaa14a7f6efed31c68d6985c8a48c833e395fcb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eccd45f60e08eb9a40cf866aaa14a7f6efed31c68d6985c8a48c833e395fcb0d->leave($__internal_eccd45f60e08eb9a40cf866aaa14a7f6efed31c68d6985c8a48c833e395fcb0d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
