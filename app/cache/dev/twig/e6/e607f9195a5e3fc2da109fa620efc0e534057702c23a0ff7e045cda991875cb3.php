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
        $__internal_0061fdbaddf340804b0c5ea2db15adaa69bb270c89447a27398dac3013a23075 = $this->env->getExtension("native_profiler");
        $__internal_0061fdbaddf340804b0c5ea2db15adaa69bb270c89447a27398dac3013a23075->enter($__internal_0061fdbaddf340804b0c5ea2db15adaa69bb270c89447a27398dac3013a23075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0061fdbaddf340804b0c5ea2db15adaa69bb270c89447a27398dac3013a23075->leave($__internal_0061fdbaddf340804b0c5ea2db15adaa69bb270c89447a27398dac3013a23075_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80d7cd5bf4ef205e813749533378c19be6182122436e4bde520d3d8086dd8486 = $this->env->getExtension("native_profiler");
        $__internal_80d7cd5bf4ef205e813749533378c19be6182122436e4bde520d3d8086dd8486->enter($__internal_80d7cd5bf4ef205e813749533378c19be6182122436e4bde520d3d8086dd8486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80d7cd5bf4ef205e813749533378c19be6182122436e4bde520d3d8086dd8486->leave($__internal_80d7cd5bf4ef205e813749533378c19be6182122436e4bde520d3d8086dd8486_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17000003038169f1804c04b2b53d64c5a21eed812501649d743fefefeaf897b6 = $this->env->getExtension("native_profiler");
        $__internal_17000003038169f1804c04b2b53d64c5a21eed812501649d743fefefeaf897b6->enter($__internal_17000003038169f1804c04b2b53d64c5a21eed812501649d743fefefeaf897b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17000003038169f1804c04b2b53d64c5a21eed812501649d743fefefeaf897b6->leave($__internal_17000003038169f1804c04b2b53d64c5a21eed812501649d743fefefeaf897b6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_51afd2deb500b567045e6008260482a9475e80b5da2425bca06b273727866316 = $this->env->getExtension("native_profiler");
        $__internal_51afd2deb500b567045e6008260482a9475e80b5da2425bca06b273727866316->enter($__internal_51afd2deb500b567045e6008260482a9475e80b5da2425bca06b273727866316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_51afd2deb500b567045e6008260482a9475e80b5da2425bca06b273727866316->leave($__internal_51afd2deb500b567045e6008260482a9475e80b5da2425bca06b273727866316_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_167ef358b973c85ecdeb77522a92edb7fb5ff9dea7928ded59379c38d0194de3 = $this->env->getExtension("native_profiler");
        $__internal_167ef358b973c85ecdeb77522a92edb7fb5ff9dea7928ded59379c38d0194de3->enter($__internal_167ef358b973c85ecdeb77522a92edb7fb5ff9dea7928ded59379c38d0194de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_167ef358b973c85ecdeb77522a92edb7fb5ff9dea7928ded59379c38d0194de3->leave($__internal_167ef358b973c85ecdeb77522a92edb7fb5ff9dea7928ded59379c38d0194de3_prof);

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
