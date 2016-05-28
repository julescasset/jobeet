<?php

/* base.html.twig */
class __TwigTemplate_e12325ee3b8755639f62c4b0197a5939e7f0cf73b22a015062bcd2378d8e1c9a extends Twig_Template
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
        $__internal_a51a9e2f4dd337ded4bab5ad375fa7e9c2c4e9368c34862a20be9c9c6edf13af = $this->env->getExtension("native_profiler");
        $__internal_a51a9e2f4dd337ded4bab5ad375fa7e9c2c4e9368c34862a20be9c9c6edf13af->enter($__internal_a51a9e2f4dd337ded4bab5ad375fa7e9c2c4e9368c34862a20be9c9c6edf13af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a51a9e2f4dd337ded4bab5ad375fa7e9c2c4e9368c34862a20be9c9c6edf13af->leave($__internal_a51a9e2f4dd337ded4bab5ad375fa7e9c2c4e9368c34862a20be9c9c6edf13af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_745f9c0dc71390473150febbe3caa369b7dd56d80d172c56979e0c1b7053466e = $this->env->getExtension("native_profiler");
        $__internal_745f9c0dc71390473150febbe3caa369b7dd56d80d172c56979e0c1b7053466e->enter($__internal_745f9c0dc71390473150febbe3caa369b7dd56d80d172c56979e0c1b7053466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_745f9c0dc71390473150febbe3caa369b7dd56d80d172c56979e0c1b7053466e->leave($__internal_745f9c0dc71390473150febbe3caa369b7dd56d80d172c56979e0c1b7053466e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c1f82c550988ed8452110c9d3ebe434c8f7fca7f019a71f851f76b89274929c = $this->env->getExtension("native_profiler");
        $__internal_2c1f82c550988ed8452110c9d3ebe434c8f7fca7f019a71f851f76b89274929c->enter($__internal_2c1f82c550988ed8452110c9d3ebe434c8f7fca7f019a71f851f76b89274929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c1f82c550988ed8452110c9d3ebe434c8f7fca7f019a71f851f76b89274929c->leave($__internal_2c1f82c550988ed8452110c9d3ebe434c8f7fca7f019a71f851f76b89274929c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b24a4ecdc8358a2616502ffab575b4a7a87032e998bae744cf21a03af0badb9 = $this->env->getExtension("native_profiler");
        $__internal_1b24a4ecdc8358a2616502ffab575b4a7a87032e998bae744cf21a03af0badb9->enter($__internal_1b24a4ecdc8358a2616502ffab575b4a7a87032e998bae744cf21a03af0badb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b24a4ecdc8358a2616502ffab575b4a7a87032e998bae744cf21a03af0badb9->leave($__internal_1b24a4ecdc8358a2616502ffab575b4a7a87032e998bae744cf21a03af0badb9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_328d1d5b73e25e969ada513b1d2460787aba751cd6ca2188a81fe1a78e629138 = $this->env->getExtension("native_profiler");
        $__internal_328d1d5b73e25e969ada513b1d2460787aba751cd6ca2188a81fe1a78e629138->enter($__internal_328d1d5b73e25e969ada513b1d2460787aba751cd6ca2188a81fe1a78e629138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_328d1d5b73e25e969ada513b1d2460787aba751cd6ca2188a81fe1a78e629138->leave($__internal_328d1d5b73e25e969ada513b1d2460787aba751cd6ca2188a81fe1a78e629138_prof);

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
