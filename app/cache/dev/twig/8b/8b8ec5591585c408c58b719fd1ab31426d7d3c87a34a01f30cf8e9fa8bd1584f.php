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
        $__internal_e017221a59fd311dddb664130fd7ebacf0a8fe2970488d4fe468af270fc79089 = $this->env->getExtension("native_profiler");
        $__internal_e017221a59fd311dddb664130fd7ebacf0a8fe2970488d4fe468af270fc79089->enter($__internal_e017221a59fd311dddb664130fd7ebacf0a8fe2970488d4fe468af270fc79089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e017221a59fd311dddb664130fd7ebacf0a8fe2970488d4fe468af270fc79089->leave($__internal_e017221a59fd311dddb664130fd7ebacf0a8fe2970488d4fe468af270fc79089_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea25d62bdcf87cdd8dad4245005eae9b60cb4e9afff30aefdfb2676e8c456b59 = $this->env->getExtension("native_profiler");
        $__internal_ea25d62bdcf87cdd8dad4245005eae9b60cb4e9afff30aefdfb2676e8c456b59->enter($__internal_ea25d62bdcf87cdd8dad4245005eae9b60cb4e9afff30aefdfb2676e8c456b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea25d62bdcf87cdd8dad4245005eae9b60cb4e9afff30aefdfb2676e8c456b59->leave($__internal_ea25d62bdcf87cdd8dad4245005eae9b60cb4e9afff30aefdfb2676e8c456b59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c636ba4afb985646c7a4056586bd100ed8a7b9e5f30b49aa788debd3a94cc75 = $this->env->getExtension("native_profiler");
        $__internal_4c636ba4afb985646c7a4056586bd100ed8a7b9e5f30b49aa788debd3a94cc75->enter($__internal_4c636ba4afb985646c7a4056586bd100ed8a7b9e5f30b49aa788debd3a94cc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4c636ba4afb985646c7a4056586bd100ed8a7b9e5f30b49aa788debd3a94cc75->leave($__internal_4c636ba4afb985646c7a4056586bd100ed8a7b9e5f30b49aa788debd3a94cc75_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_30fbc0f6b0685dc9251e4b4759476428203dae51f10fa27f9d80dfb92bc10b98 = $this->env->getExtension("native_profiler");
        $__internal_30fbc0f6b0685dc9251e4b4759476428203dae51f10fa27f9d80dfb92bc10b98->enter($__internal_30fbc0f6b0685dc9251e4b4759476428203dae51f10fa27f9d80dfb92bc10b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30fbc0f6b0685dc9251e4b4759476428203dae51f10fa27f9d80dfb92bc10b98->leave($__internal_30fbc0f6b0685dc9251e4b4759476428203dae51f10fa27f9d80dfb92bc10b98_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e9e5234c571165772ac91d0d3fda2a9c7322143e24b98b152cb7ae04ea2d2ea = $this->env->getExtension("native_profiler");
        $__internal_9e9e5234c571165772ac91d0d3fda2a9c7322143e24b98b152cb7ae04ea2d2ea->enter($__internal_9e9e5234c571165772ac91d0d3fda2a9c7322143e24b98b152cb7ae04ea2d2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e9e5234c571165772ac91d0d3fda2a9c7322143e24b98b152cb7ae04ea2d2ea->leave($__internal_9e9e5234c571165772ac91d0d3fda2a9c7322143e24b98b152cb7ae04ea2d2ea_prof);

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
