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
        $__internal_4cea1556608efc347f3bc2928fb317efc88f2090c315fc9cb1070b0e2a48a6f7 = $this->env->getExtension("native_profiler");
        $__internal_4cea1556608efc347f3bc2928fb317efc88f2090c315fc9cb1070b0e2a48a6f7->enter($__internal_4cea1556608efc347f3bc2928fb317efc88f2090c315fc9cb1070b0e2a48a6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4cea1556608efc347f3bc2928fb317efc88f2090c315fc9cb1070b0e2a48a6f7->leave($__internal_4cea1556608efc347f3bc2928fb317efc88f2090c315fc9cb1070b0e2a48a6f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4df0ea3a99563993bc1c0eef98de8a87c3615f58dd6d6ffaf9355eb4181820e6 = $this->env->getExtension("native_profiler");
        $__internal_4df0ea3a99563993bc1c0eef98de8a87c3615f58dd6d6ffaf9355eb4181820e6->enter($__internal_4df0ea3a99563993bc1c0eef98de8a87c3615f58dd6d6ffaf9355eb4181820e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4df0ea3a99563993bc1c0eef98de8a87c3615f58dd6d6ffaf9355eb4181820e6->leave($__internal_4df0ea3a99563993bc1c0eef98de8a87c3615f58dd6d6ffaf9355eb4181820e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7f953dc7790414b6757bf8d4543178566bd066fd2a5890a3d463a74a789c7e3 = $this->env->getExtension("native_profiler");
        $__internal_a7f953dc7790414b6757bf8d4543178566bd066fd2a5890a3d463a74a789c7e3->enter($__internal_a7f953dc7790414b6757bf8d4543178566bd066fd2a5890a3d463a74a789c7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a7f953dc7790414b6757bf8d4543178566bd066fd2a5890a3d463a74a789c7e3->leave($__internal_a7f953dc7790414b6757bf8d4543178566bd066fd2a5890a3d463a74a789c7e3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5b18eae154af829a0d4030e3cd9f4ac95a014c68076d454f40e916058529ad1 = $this->env->getExtension("native_profiler");
        $__internal_f5b18eae154af829a0d4030e3cd9f4ac95a014c68076d454f40e916058529ad1->enter($__internal_f5b18eae154af829a0d4030e3cd9f4ac95a014c68076d454f40e916058529ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5b18eae154af829a0d4030e3cd9f4ac95a014c68076d454f40e916058529ad1->leave($__internal_f5b18eae154af829a0d4030e3cd9f4ac95a014c68076d454f40e916058529ad1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f430aa03b97e60c698260c99da611550ebe38fe7aede8adfde076a0f04727ea4 = $this->env->getExtension("native_profiler");
        $__internal_f430aa03b97e60c698260c99da611550ebe38fe7aede8adfde076a0f04727ea4->enter($__internal_f430aa03b97e60c698260c99da611550ebe38fe7aede8adfde076a0f04727ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f430aa03b97e60c698260c99da611550ebe38fe7aede8adfde076a0f04727ea4->leave($__internal_f430aa03b97e60c698260c99da611550ebe38fe7aede8adfde076a0f04727ea4_prof);

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
