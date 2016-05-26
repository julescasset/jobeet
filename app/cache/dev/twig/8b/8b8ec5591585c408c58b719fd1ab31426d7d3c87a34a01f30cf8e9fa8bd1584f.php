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
        $__internal_4d046437e28854796cc8b6fc56bfeda3708a645e8ab891a53abe77d444eb3cd3 = $this->env->getExtension("native_profiler");
        $__internal_4d046437e28854796cc8b6fc56bfeda3708a645e8ab891a53abe77d444eb3cd3->enter($__internal_4d046437e28854796cc8b6fc56bfeda3708a645e8ab891a53abe77d444eb3cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4d046437e28854796cc8b6fc56bfeda3708a645e8ab891a53abe77d444eb3cd3->leave($__internal_4d046437e28854796cc8b6fc56bfeda3708a645e8ab891a53abe77d444eb3cd3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_335633ba4274c897a6900406320d109acee8ffc62526be5c7b58ef2a2bdde0c6 = $this->env->getExtension("native_profiler");
        $__internal_335633ba4274c897a6900406320d109acee8ffc62526be5c7b58ef2a2bdde0c6->enter($__internal_335633ba4274c897a6900406320d109acee8ffc62526be5c7b58ef2a2bdde0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_335633ba4274c897a6900406320d109acee8ffc62526be5c7b58ef2a2bdde0c6->leave($__internal_335633ba4274c897a6900406320d109acee8ffc62526be5c7b58ef2a2bdde0c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04ccb2378150043d66493843349e02fb990f445fcce97525f354fe4cd9409c7b = $this->env->getExtension("native_profiler");
        $__internal_04ccb2378150043d66493843349e02fb990f445fcce97525f354fe4cd9409c7b->enter($__internal_04ccb2378150043d66493843349e02fb990f445fcce97525f354fe4cd9409c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_04ccb2378150043d66493843349e02fb990f445fcce97525f354fe4cd9409c7b->leave($__internal_04ccb2378150043d66493843349e02fb990f445fcce97525f354fe4cd9409c7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0309ed231585d4126336ed869bfd6f2049ef37164448c6c8038fba09edd9ceb4 = $this->env->getExtension("native_profiler");
        $__internal_0309ed231585d4126336ed869bfd6f2049ef37164448c6c8038fba09edd9ceb4->enter($__internal_0309ed231585d4126336ed869bfd6f2049ef37164448c6c8038fba09edd9ceb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0309ed231585d4126336ed869bfd6f2049ef37164448c6c8038fba09edd9ceb4->leave($__internal_0309ed231585d4126336ed869bfd6f2049ef37164448c6c8038fba09edd9ceb4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6102e0ff00cf90a6a027db9de56f9b703e632f1f551f61e3c51a644843048c0 = $this->env->getExtension("native_profiler");
        $__internal_c6102e0ff00cf90a6a027db9de56f9b703e632f1f551f61e3c51a644843048c0->enter($__internal_c6102e0ff00cf90a6a027db9de56f9b703e632f1f551f61e3c51a644843048c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c6102e0ff00cf90a6a027db9de56f9b703e632f1f551f61e3c51a644843048c0->leave($__internal_c6102e0ff00cf90a6a027db9de56f9b703e632f1f551f61e3c51a644843048c0_prof);

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
