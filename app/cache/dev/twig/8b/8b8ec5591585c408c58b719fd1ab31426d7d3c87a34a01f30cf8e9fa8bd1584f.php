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
        $__internal_0352fbfc82d27aa67d89cf18389e02cc8daa1271ef7e79cb83d9b77167e57887 = $this->env->getExtension("native_profiler");
        $__internal_0352fbfc82d27aa67d89cf18389e02cc8daa1271ef7e79cb83d9b77167e57887->enter($__internal_0352fbfc82d27aa67d89cf18389e02cc8daa1271ef7e79cb83d9b77167e57887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0352fbfc82d27aa67d89cf18389e02cc8daa1271ef7e79cb83d9b77167e57887->leave($__internal_0352fbfc82d27aa67d89cf18389e02cc8daa1271ef7e79cb83d9b77167e57887_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01d36fa8101bcc9c76c6809f794d5a2a55fbfba5604cce3a82b7e95b6f186aef = $this->env->getExtension("native_profiler");
        $__internal_01d36fa8101bcc9c76c6809f794d5a2a55fbfba5604cce3a82b7e95b6f186aef->enter($__internal_01d36fa8101bcc9c76c6809f794d5a2a55fbfba5604cce3a82b7e95b6f186aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_01d36fa8101bcc9c76c6809f794d5a2a55fbfba5604cce3a82b7e95b6f186aef->leave($__internal_01d36fa8101bcc9c76c6809f794d5a2a55fbfba5604cce3a82b7e95b6f186aef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c4c1cf2ad9f27063c1aa874fce5888224850d09d80f7bfb4a81c46ae513cfde = $this->env->getExtension("native_profiler");
        $__internal_8c4c1cf2ad9f27063c1aa874fce5888224850d09d80f7bfb4a81c46ae513cfde->enter($__internal_8c4c1cf2ad9f27063c1aa874fce5888224850d09d80f7bfb4a81c46ae513cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c4c1cf2ad9f27063c1aa874fce5888224850d09d80f7bfb4a81c46ae513cfde->leave($__internal_8c4c1cf2ad9f27063c1aa874fce5888224850d09d80f7bfb4a81c46ae513cfde_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87cda71508a27d117a56b3ee475950e8e0d11f266bf84f60155be94c32822d3 = $this->env->getExtension("native_profiler");
        $__internal_a87cda71508a27d117a56b3ee475950e8e0d11f266bf84f60155be94c32822d3->enter($__internal_a87cda71508a27d117a56b3ee475950e8e0d11f266bf84f60155be94c32822d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a87cda71508a27d117a56b3ee475950e8e0d11f266bf84f60155be94c32822d3->leave($__internal_a87cda71508a27d117a56b3ee475950e8e0d11f266bf84f60155be94c32822d3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9315617c189f5da2ccb2ba2df32bfdec188054f4743ac669a60ca4fd31e8f0c9 = $this->env->getExtension("native_profiler");
        $__internal_9315617c189f5da2ccb2ba2df32bfdec188054f4743ac669a60ca4fd31e8f0c9->enter($__internal_9315617c189f5da2ccb2ba2df32bfdec188054f4743ac669a60ca4fd31e8f0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9315617c189f5da2ccb2ba2df32bfdec188054f4743ac669a60ca4fd31e8f0c9->leave($__internal_9315617c189f5da2ccb2ba2df32bfdec188054f4743ac669a60ca4fd31e8f0c9_prof);

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
