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
        $__internal_6e382196d909a890c8e6be0fc4aa815505951b3880964747adf32d8219956fd5 = $this->env->getExtension("native_profiler");
        $__internal_6e382196d909a890c8e6be0fc4aa815505951b3880964747adf32d8219956fd5->enter($__internal_6e382196d909a890c8e6be0fc4aa815505951b3880964747adf32d8219956fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6e382196d909a890c8e6be0fc4aa815505951b3880964747adf32d8219956fd5->leave($__internal_6e382196d909a890c8e6be0fc4aa815505951b3880964747adf32d8219956fd5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62146518bc2689e7e66fa143a640a06a0bd57ee2e44eb2321000418bd375ae8c = $this->env->getExtension("native_profiler");
        $__internal_62146518bc2689e7e66fa143a640a06a0bd57ee2e44eb2321000418bd375ae8c->enter($__internal_62146518bc2689e7e66fa143a640a06a0bd57ee2e44eb2321000418bd375ae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_62146518bc2689e7e66fa143a640a06a0bd57ee2e44eb2321000418bd375ae8c->leave($__internal_62146518bc2689e7e66fa143a640a06a0bd57ee2e44eb2321000418bd375ae8c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c94a232a43fc170717d12575013f34709227a068c5410996c2cbf754f49cf74 = $this->env->getExtension("native_profiler");
        $__internal_8c94a232a43fc170717d12575013f34709227a068c5410996c2cbf754f49cf74->enter($__internal_8c94a232a43fc170717d12575013f34709227a068c5410996c2cbf754f49cf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c94a232a43fc170717d12575013f34709227a068c5410996c2cbf754f49cf74->leave($__internal_8c94a232a43fc170717d12575013f34709227a068c5410996c2cbf754f49cf74_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b343075a22763394b1bf5bc23e0f71bd5ff6908223f2a2a7491655de846dee4 = $this->env->getExtension("native_profiler");
        $__internal_6b343075a22763394b1bf5bc23e0f71bd5ff6908223f2a2a7491655de846dee4->enter($__internal_6b343075a22763394b1bf5bc23e0f71bd5ff6908223f2a2a7491655de846dee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b343075a22763394b1bf5bc23e0f71bd5ff6908223f2a2a7491655de846dee4->leave($__internal_6b343075a22763394b1bf5bc23e0f71bd5ff6908223f2a2a7491655de846dee4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5c8337095a3f77c3baf1b6f62eb42ef0263c31a43bf09538f4419201ec07d7b = $this->env->getExtension("native_profiler");
        $__internal_c5c8337095a3f77c3baf1b6f62eb42ef0263c31a43bf09538f4419201ec07d7b->enter($__internal_c5c8337095a3f77c3baf1b6f62eb42ef0263c31a43bf09538f4419201ec07d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5c8337095a3f77c3baf1b6f62eb42ef0263c31a43bf09538f4419201ec07d7b->leave($__internal_c5c8337095a3f77c3baf1b6f62eb42ef0263c31a43bf09538f4419201ec07d7b_prof);

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
