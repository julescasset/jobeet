<?php

/* ::base.html.twig */
class __TwigTemplate_2eeeb91ffec3e6abc6c41952ecb3e47d530abc02dc132c82febd180121e507c3 extends Twig_Template
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
        $__internal_e90982ec244ddfbd1f30b56fe7980edf08d42a77e8cf689304b3a0edf4990d9a = $this->env->getExtension("native_profiler");
        $__internal_e90982ec244ddfbd1f30b56fe7980edf08d42a77e8cf689304b3a0edf4990d9a->enter($__internal_e90982ec244ddfbd1f30b56fe7980edf08d42a77e8cf689304b3a0edf4990d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e90982ec244ddfbd1f30b56fe7980edf08d42a77e8cf689304b3a0edf4990d9a->leave($__internal_e90982ec244ddfbd1f30b56fe7980edf08d42a77e8cf689304b3a0edf4990d9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c26ccaced84aff603502d5bce749337319c1526cd2f32e24cd4173214fedaa5 = $this->env->getExtension("native_profiler");
        $__internal_6c26ccaced84aff603502d5bce749337319c1526cd2f32e24cd4173214fedaa5->enter($__internal_6c26ccaced84aff603502d5bce749337319c1526cd2f32e24cd4173214fedaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6c26ccaced84aff603502d5bce749337319c1526cd2f32e24cd4173214fedaa5->leave($__internal_6c26ccaced84aff603502d5bce749337319c1526cd2f32e24cd4173214fedaa5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d94b7147c6aa7a5cf2e1dfc5d7ffc3d75375e92b7040a7a92a8b63ee2e735e6 = $this->env->getExtension("native_profiler");
        $__internal_1d94b7147c6aa7a5cf2e1dfc5d7ffc3d75375e92b7040a7a92a8b63ee2e735e6->enter($__internal_1d94b7147c6aa7a5cf2e1dfc5d7ffc3d75375e92b7040a7a92a8b63ee2e735e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d94b7147c6aa7a5cf2e1dfc5d7ffc3d75375e92b7040a7a92a8b63ee2e735e6->leave($__internal_1d94b7147c6aa7a5cf2e1dfc5d7ffc3d75375e92b7040a7a92a8b63ee2e735e6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4c9d187a8b7299b6ab9a126b68b383d0a361837c79fb5b70af75136d7edea7 = $this->env->getExtension("native_profiler");
        $__internal_0a4c9d187a8b7299b6ab9a126b68b383d0a361837c79fb5b70af75136d7edea7->enter($__internal_0a4c9d187a8b7299b6ab9a126b68b383d0a361837c79fb5b70af75136d7edea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a4c9d187a8b7299b6ab9a126b68b383d0a361837c79fb5b70af75136d7edea7->leave($__internal_0a4c9d187a8b7299b6ab9a126b68b383d0a361837c79fb5b70af75136d7edea7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c28962a731ae83cc5e39d40eeaa72f95b6f47e58daa7463f477bc9958dda04f = $this->env->getExtension("native_profiler");
        $__internal_5c28962a731ae83cc5e39d40eeaa72f95b6f47e58daa7463f477bc9958dda04f->enter($__internal_5c28962a731ae83cc5e39d40eeaa72f95b6f47e58daa7463f477bc9958dda04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c28962a731ae83cc5e39d40eeaa72f95b6f47e58daa7463f477bc9958dda04f->leave($__internal_5c28962a731ae83cc5e39d40eeaa72f95b6f47e58daa7463f477bc9958dda04f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
