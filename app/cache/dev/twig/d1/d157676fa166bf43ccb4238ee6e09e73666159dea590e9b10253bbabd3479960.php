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
        $__internal_a5b705ea117e7aa3568b8b794dbcfa67a87589011838acf4f2a7686dd3612d11 = $this->env->getExtension("native_profiler");
        $__internal_a5b705ea117e7aa3568b8b794dbcfa67a87589011838acf4f2a7686dd3612d11->enter($__internal_a5b705ea117e7aa3568b8b794dbcfa67a87589011838acf4f2a7686dd3612d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a5b705ea117e7aa3568b8b794dbcfa67a87589011838acf4f2a7686dd3612d11->leave($__internal_a5b705ea117e7aa3568b8b794dbcfa67a87589011838acf4f2a7686dd3612d11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f3926cb37d16c2bbdcc675d6cd98b5cbfc5dd2839c2b06f8b3a7e6c386cb341 = $this->env->getExtension("native_profiler");
        $__internal_3f3926cb37d16c2bbdcc675d6cd98b5cbfc5dd2839c2b06f8b3a7e6c386cb341->enter($__internal_3f3926cb37d16c2bbdcc675d6cd98b5cbfc5dd2839c2b06f8b3a7e6c386cb341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3f3926cb37d16c2bbdcc675d6cd98b5cbfc5dd2839c2b06f8b3a7e6c386cb341->leave($__internal_3f3926cb37d16c2bbdcc675d6cd98b5cbfc5dd2839c2b06f8b3a7e6c386cb341_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4aae44ddc003b2d94a2decbd4e3d91f59ca695bdea35a67f7ffa4dc78531fb9 = $this->env->getExtension("native_profiler");
        $__internal_a4aae44ddc003b2d94a2decbd4e3d91f59ca695bdea35a67f7ffa4dc78531fb9->enter($__internal_a4aae44ddc003b2d94a2decbd4e3d91f59ca695bdea35a67f7ffa4dc78531fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4aae44ddc003b2d94a2decbd4e3d91f59ca695bdea35a67f7ffa4dc78531fb9->leave($__internal_a4aae44ddc003b2d94a2decbd4e3d91f59ca695bdea35a67f7ffa4dc78531fb9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aff482eb0b009e2af6f0b5555944d3fedb42ebc0cabc91eddd7aef951370a47 = $this->env->getExtension("native_profiler");
        $__internal_5aff482eb0b009e2af6f0b5555944d3fedb42ebc0cabc91eddd7aef951370a47->enter($__internal_5aff482eb0b009e2af6f0b5555944d3fedb42ebc0cabc91eddd7aef951370a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5aff482eb0b009e2af6f0b5555944d3fedb42ebc0cabc91eddd7aef951370a47->leave($__internal_5aff482eb0b009e2af6f0b5555944d3fedb42ebc0cabc91eddd7aef951370a47_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17ae0959ee0a28675543394b7a486991addf95a04e6b0effcbacd004d7ac9171 = $this->env->getExtension("native_profiler");
        $__internal_17ae0959ee0a28675543394b7a486991addf95a04e6b0effcbacd004d7ac9171->enter($__internal_17ae0959ee0a28675543394b7a486991addf95a04e6b0effcbacd004d7ac9171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_17ae0959ee0a28675543394b7a486991addf95a04e6b0effcbacd004d7ac9171->leave($__internal_17ae0959ee0a28675543394b7a486991addf95a04e6b0effcbacd004d7ac9171_prof);

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
