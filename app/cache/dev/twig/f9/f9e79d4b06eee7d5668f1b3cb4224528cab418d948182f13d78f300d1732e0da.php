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
        $__internal_90d3db952b0386e80b34f10f414bd275d3752cba37c06cc781156db46c754e16 = $this->env->getExtension("native_profiler");
        $__internal_90d3db952b0386e80b34f10f414bd275d3752cba37c06cc781156db46c754e16->enter($__internal_90d3db952b0386e80b34f10f414bd275d3752cba37c06cc781156db46c754e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_90d3db952b0386e80b34f10f414bd275d3752cba37c06cc781156db46c754e16->leave($__internal_90d3db952b0386e80b34f10f414bd275d3752cba37c06cc781156db46c754e16_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dfdd1da287f9d2feb925571e6ce2b4c6aa11a8a201d5243fd00b0b8897ae5d0 = $this->env->getExtension("native_profiler");
        $__internal_3dfdd1da287f9d2feb925571e6ce2b4c6aa11a8a201d5243fd00b0b8897ae5d0->enter($__internal_3dfdd1da287f9d2feb925571e6ce2b4c6aa11a8a201d5243fd00b0b8897ae5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3dfdd1da287f9d2feb925571e6ce2b4c6aa11a8a201d5243fd00b0b8897ae5d0->leave($__internal_3dfdd1da287f9d2feb925571e6ce2b4c6aa11a8a201d5243fd00b0b8897ae5d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14072320c765e280a3cb3c7a5ae8d20cae2f9282f94363218aae3f85031b3603 = $this->env->getExtension("native_profiler");
        $__internal_14072320c765e280a3cb3c7a5ae8d20cae2f9282f94363218aae3f85031b3603->enter($__internal_14072320c765e280a3cb3c7a5ae8d20cae2f9282f94363218aae3f85031b3603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_14072320c765e280a3cb3c7a5ae8d20cae2f9282f94363218aae3f85031b3603->leave($__internal_14072320c765e280a3cb3c7a5ae8d20cae2f9282f94363218aae3f85031b3603_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a055f3190e4e609f08a9888aa8cf224afcafd34fa810bbffe96b75e718feba6 = $this->env->getExtension("native_profiler");
        $__internal_1a055f3190e4e609f08a9888aa8cf224afcafd34fa810bbffe96b75e718feba6->enter($__internal_1a055f3190e4e609f08a9888aa8cf224afcafd34fa810bbffe96b75e718feba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a055f3190e4e609f08a9888aa8cf224afcafd34fa810bbffe96b75e718feba6->leave($__internal_1a055f3190e4e609f08a9888aa8cf224afcafd34fa810bbffe96b75e718feba6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0f880fb276c540fa9cf866d9bd1095265c55406dfaa1e603f7ae7c5d9774d1f = $this->env->getExtension("native_profiler");
        $__internal_f0f880fb276c540fa9cf866d9bd1095265c55406dfaa1e603f7ae7c5d9774d1f->enter($__internal_f0f880fb276c540fa9cf866d9bd1095265c55406dfaa1e603f7ae7c5d9774d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0f880fb276c540fa9cf866d9bd1095265c55406dfaa1e603f7ae7c5d9774d1f->leave($__internal_f0f880fb276c540fa9cf866d9bd1095265c55406dfaa1e603f7ae7c5d9774d1f_prof);

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
