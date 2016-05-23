<?php

/* ::base.html.twig */
class __TwigTemplate_60f186c204e9c015dc2305e1e72c465cb390c5ad80c0fee470959e12a22782e3 extends Twig_Template
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
        $__internal_2dcb6eccb6b10ccdc3566fc79de0fb09ca098c7b6260701d517a3580866d2a5f = $this->env->getExtension("native_profiler");
        $__internal_2dcb6eccb6b10ccdc3566fc79de0fb09ca098c7b6260701d517a3580866d2a5f->enter($__internal_2dcb6eccb6b10ccdc3566fc79de0fb09ca098c7b6260701d517a3580866d2a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2dcb6eccb6b10ccdc3566fc79de0fb09ca098c7b6260701d517a3580866d2a5f->leave($__internal_2dcb6eccb6b10ccdc3566fc79de0fb09ca098c7b6260701d517a3580866d2a5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41a13410228ce8cfa19100fda331cfdc08785d7b843863154778b5feb1f61286 = $this->env->getExtension("native_profiler");
        $__internal_41a13410228ce8cfa19100fda331cfdc08785d7b843863154778b5feb1f61286->enter($__internal_41a13410228ce8cfa19100fda331cfdc08785d7b843863154778b5feb1f61286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41a13410228ce8cfa19100fda331cfdc08785d7b843863154778b5feb1f61286->leave($__internal_41a13410228ce8cfa19100fda331cfdc08785d7b843863154778b5feb1f61286_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2ea098a15c7ea0a26d537141c89b1edcb965b2bea802388ed6f8a2aaef3be17 = $this->env->getExtension("native_profiler");
        $__internal_c2ea098a15c7ea0a26d537141c89b1edcb965b2bea802388ed6f8a2aaef3be17->enter($__internal_c2ea098a15c7ea0a26d537141c89b1edcb965b2bea802388ed6f8a2aaef3be17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c2ea098a15c7ea0a26d537141c89b1edcb965b2bea802388ed6f8a2aaef3be17->leave($__internal_c2ea098a15c7ea0a26d537141c89b1edcb965b2bea802388ed6f8a2aaef3be17_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e943bb5d0125699611141cdeec2c83352f953502513eb79a16fdb89b8682054b = $this->env->getExtension("native_profiler");
        $__internal_e943bb5d0125699611141cdeec2c83352f953502513eb79a16fdb89b8682054b->enter($__internal_e943bb5d0125699611141cdeec2c83352f953502513eb79a16fdb89b8682054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e943bb5d0125699611141cdeec2c83352f953502513eb79a16fdb89b8682054b->leave($__internal_e943bb5d0125699611141cdeec2c83352f953502513eb79a16fdb89b8682054b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de68ebef2bbaddbd1d1ffcd728b966b42c08049e888e426590de046a464a41e4 = $this->env->getExtension("native_profiler");
        $__internal_de68ebef2bbaddbd1d1ffcd728b966b42c08049e888e426590de046a464a41e4->enter($__internal_de68ebef2bbaddbd1d1ffcd728b966b42c08049e888e426590de046a464a41e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de68ebef2bbaddbd1d1ffcd728b966b42c08049e888e426590de046a464a41e4->leave($__internal_de68ebef2bbaddbd1d1ffcd728b966b42c08049e888e426590de046a464a41e4_prof);

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
