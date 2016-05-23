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
        $__internal_a39e15c9add9e2444ce9b9e755277d6a91e06a41852e55042dcaa87253e4c417 = $this->env->getExtension("native_profiler");
        $__internal_a39e15c9add9e2444ce9b9e755277d6a91e06a41852e55042dcaa87253e4c417->enter($__internal_a39e15c9add9e2444ce9b9e755277d6a91e06a41852e55042dcaa87253e4c417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a39e15c9add9e2444ce9b9e755277d6a91e06a41852e55042dcaa87253e4c417->leave($__internal_a39e15c9add9e2444ce9b9e755277d6a91e06a41852e55042dcaa87253e4c417_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_228bc9938429bc410155d67b8875db8ab16b898a49bcd2523d5e47964bbfd568 = $this->env->getExtension("native_profiler");
        $__internal_228bc9938429bc410155d67b8875db8ab16b898a49bcd2523d5e47964bbfd568->enter($__internal_228bc9938429bc410155d67b8875db8ab16b898a49bcd2523d5e47964bbfd568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_228bc9938429bc410155d67b8875db8ab16b898a49bcd2523d5e47964bbfd568->leave($__internal_228bc9938429bc410155d67b8875db8ab16b898a49bcd2523d5e47964bbfd568_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9eee27bf8611d3ae93a8e094418b01bc51d5543707cdcdfe998dbb2d7a198fe2 = $this->env->getExtension("native_profiler");
        $__internal_9eee27bf8611d3ae93a8e094418b01bc51d5543707cdcdfe998dbb2d7a198fe2->enter($__internal_9eee27bf8611d3ae93a8e094418b01bc51d5543707cdcdfe998dbb2d7a198fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9eee27bf8611d3ae93a8e094418b01bc51d5543707cdcdfe998dbb2d7a198fe2->leave($__internal_9eee27bf8611d3ae93a8e094418b01bc51d5543707cdcdfe998dbb2d7a198fe2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_676bff139f2a6cd8ee190415007b524927126c97159b388f64be0773a3702c11 = $this->env->getExtension("native_profiler");
        $__internal_676bff139f2a6cd8ee190415007b524927126c97159b388f64be0773a3702c11->enter($__internal_676bff139f2a6cd8ee190415007b524927126c97159b388f64be0773a3702c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_676bff139f2a6cd8ee190415007b524927126c97159b388f64be0773a3702c11->leave($__internal_676bff139f2a6cd8ee190415007b524927126c97159b388f64be0773a3702c11_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cea1e566b004532490e6cb944333bc42c9dd060dee0b5f4726dfe4ede1a31d3 = $this->env->getExtension("native_profiler");
        $__internal_3cea1e566b004532490e6cb944333bc42c9dd060dee0b5f4726dfe4ede1a31d3->enter($__internal_3cea1e566b004532490e6cb944333bc42c9dd060dee0b5f4726dfe4ede1a31d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cea1e566b004532490e6cb944333bc42c9dd060dee0b5f4726dfe4ede1a31d3->leave($__internal_3cea1e566b004532490e6cb944333bc42c9dd060dee0b5f4726dfe4ede1a31d3_prof);

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
