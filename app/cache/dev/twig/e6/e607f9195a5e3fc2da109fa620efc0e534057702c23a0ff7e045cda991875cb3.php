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
        $__internal_67553bdbb05680511351b3f55542d49c645ef1e21a66f0793d19a001fb901319 = $this->env->getExtension("native_profiler");
        $__internal_67553bdbb05680511351b3f55542d49c645ef1e21a66f0793d19a001fb901319->enter($__internal_67553bdbb05680511351b3f55542d49c645ef1e21a66f0793d19a001fb901319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_67553bdbb05680511351b3f55542d49c645ef1e21a66f0793d19a001fb901319->leave($__internal_67553bdbb05680511351b3f55542d49c645ef1e21a66f0793d19a001fb901319_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e8410b758d5ab60d50ed5109d4a346b23466390be38cc4cc440578c5f2a9570 = $this->env->getExtension("native_profiler");
        $__internal_2e8410b758d5ab60d50ed5109d4a346b23466390be38cc4cc440578c5f2a9570->enter($__internal_2e8410b758d5ab60d50ed5109d4a346b23466390be38cc4cc440578c5f2a9570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e8410b758d5ab60d50ed5109d4a346b23466390be38cc4cc440578c5f2a9570->leave($__internal_2e8410b758d5ab60d50ed5109d4a346b23466390be38cc4cc440578c5f2a9570_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef904bf79360dae69402dccc86b539f00d59df5a451404785b78bda4b4f6dc7b = $this->env->getExtension("native_profiler");
        $__internal_ef904bf79360dae69402dccc86b539f00d59df5a451404785b78bda4b4f6dc7b->enter($__internal_ef904bf79360dae69402dccc86b539f00d59df5a451404785b78bda4b4f6dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ef904bf79360dae69402dccc86b539f00d59df5a451404785b78bda4b4f6dc7b->leave($__internal_ef904bf79360dae69402dccc86b539f00d59df5a451404785b78bda4b4f6dc7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc72f2421e429f908710afcc7131d1b0e0859e8cc27110726d666f45de3917c3 = $this->env->getExtension("native_profiler");
        $__internal_cc72f2421e429f908710afcc7131d1b0e0859e8cc27110726d666f45de3917c3->enter($__internal_cc72f2421e429f908710afcc7131d1b0e0859e8cc27110726d666f45de3917c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc72f2421e429f908710afcc7131d1b0e0859e8cc27110726d666f45de3917c3->leave($__internal_cc72f2421e429f908710afcc7131d1b0e0859e8cc27110726d666f45de3917c3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8ece8682e852338eed67a415d3517adbf1b563beaeffd4e7b7d168599481360 = $this->env->getExtension("native_profiler");
        $__internal_b8ece8682e852338eed67a415d3517adbf1b563beaeffd4e7b7d168599481360->enter($__internal_b8ece8682e852338eed67a415d3517adbf1b563beaeffd4e7b7d168599481360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8ece8682e852338eed67a415d3517adbf1b563beaeffd4e7b7d168599481360->leave($__internal_b8ece8682e852338eed67a415d3517adbf1b563beaeffd4e7b7d168599481360_prof);

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
