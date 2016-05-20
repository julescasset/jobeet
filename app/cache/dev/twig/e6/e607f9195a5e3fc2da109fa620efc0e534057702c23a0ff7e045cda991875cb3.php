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
        $__internal_ebe0b82d2ff7b2a4780334353ca132707dbe40a2bc8bd1d88b4c17249e4eefe4 = $this->env->getExtension("native_profiler");
        $__internal_ebe0b82d2ff7b2a4780334353ca132707dbe40a2bc8bd1d88b4c17249e4eefe4->enter($__internal_ebe0b82d2ff7b2a4780334353ca132707dbe40a2bc8bd1d88b4c17249e4eefe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ebe0b82d2ff7b2a4780334353ca132707dbe40a2bc8bd1d88b4c17249e4eefe4->leave($__internal_ebe0b82d2ff7b2a4780334353ca132707dbe40a2bc8bd1d88b4c17249e4eefe4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bb29863d05ecf12a2fa354f6c6071c16cf883f880f5720aa71ba85cf3e8de59 = $this->env->getExtension("native_profiler");
        $__internal_9bb29863d05ecf12a2fa354f6c6071c16cf883f880f5720aa71ba85cf3e8de59->enter($__internal_9bb29863d05ecf12a2fa354f6c6071c16cf883f880f5720aa71ba85cf3e8de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9bb29863d05ecf12a2fa354f6c6071c16cf883f880f5720aa71ba85cf3e8de59->leave($__internal_9bb29863d05ecf12a2fa354f6c6071c16cf883f880f5720aa71ba85cf3e8de59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_850a5b1dd627d0ee7bfb951383dae8e8d541a8bb1e112b5264d9fbd44342452d = $this->env->getExtension("native_profiler");
        $__internal_850a5b1dd627d0ee7bfb951383dae8e8d541a8bb1e112b5264d9fbd44342452d->enter($__internal_850a5b1dd627d0ee7bfb951383dae8e8d541a8bb1e112b5264d9fbd44342452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_850a5b1dd627d0ee7bfb951383dae8e8d541a8bb1e112b5264d9fbd44342452d->leave($__internal_850a5b1dd627d0ee7bfb951383dae8e8d541a8bb1e112b5264d9fbd44342452d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b99dc597d437579bf77671911c6a88b743f83d0697d4e35123cba7fac57bdfac = $this->env->getExtension("native_profiler");
        $__internal_b99dc597d437579bf77671911c6a88b743f83d0697d4e35123cba7fac57bdfac->enter($__internal_b99dc597d437579bf77671911c6a88b743f83d0697d4e35123cba7fac57bdfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b99dc597d437579bf77671911c6a88b743f83d0697d4e35123cba7fac57bdfac->leave($__internal_b99dc597d437579bf77671911c6a88b743f83d0697d4e35123cba7fac57bdfac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1ed9ea14617870074a1ab9710f85a4d014bf09aefcea8a51d0c77174704ea65 = $this->env->getExtension("native_profiler");
        $__internal_a1ed9ea14617870074a1ab9710f85a4d014bf09aefcea8a51d0c77174704ea65->enter($__internal_a1ed9ea14617870074a1ab9710f85a4d014bf09aefcea8a51d0c77174704ea65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1ed9ea14617870074a1ab9710f85a4d014bf09aefcea8a51d0c77174704ea65->leave($__internal_a1ed9ea14617870074a1ab9710f85a4d014bf09aefcea8a51d0c77174704ea65_prof);

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
