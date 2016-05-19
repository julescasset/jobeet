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
        $__internal_f9a569eafe1f107b6928dbb95fd126081a60cb064ab94f07cee406ff02830171 = $this->env->getExtension("native_profiler");
        $__internal_f9a569eafe1f107b6928dbb95fd126081a60cb064ab94f07cee406ff02830171->enter($__internal_f9a569eafe1f107b6928dbb95fd126081a60cb064ab94f07cee406ff02830171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f9a569eafe1f107b6928dbb95fd126081a60cb064ab94f07cee406ff02830171->leave($__internal_f9a569eafe1f107b6928dbb95fd126081a60cb064ab94f07cee406ff02830171_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ea3be323a9fadb242ab151248f2e22fc9e82ac0d28dbef7acc6928c1b6c3632 = $this->env->getExtension("native_profiler");
        $__internal_3ea3be323a9fadb242ab151248f2e22fc9e82ac0d28dbef7acc6928c1b6c3632->enter($__internal_3ea3be323a9fadb242ab151248f2e22fc9e82ac0d28dbef7acc6928c1b6c3632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ea3be323a9fadb242ab151248f2e22fc9e82ac0d28dbef7acc6928c1b6c3632->leave($__internal_3ea3be323a9fadb242ab151248f2e22fc9e82ac0d28dbef7acc6928c1b6c3632_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e61f8ccbf899c011ce31188c0a45adf5057f85debff47bed226798603673ef6 = $this->env->getExtension("native_profiler");
        $__internal_4e61f8ccbf899c011ce31188c0a45adf5057f85debff47bed226798603673ef6->enter($__internal_4e61f8ccbf899c011ce31188c0a45adf5057f85debff47bed226798603673ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e61f8ccbf899c011ce31188c0a45adf5057f85debff47bed226798603673ef6->leave($__internal_4e61f8ccbf899c011ce31188c0a45adf5057f85debff47bed226798603673ef6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b21213ee6575673102b3bfcbdce709d2d82277f6121deb894907c1589a18b6b5 = $this->env->getExtension("native_profiler");
        $__internal_b21213ee6575673102b3bfcbdce709d2d82277f6121deb894907c1589a18b6b5->enter($__internal_b21213ee6575673102b3bfcbdce709d2d82277f6121deb894907c1589a18b6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b21213ee6575673102b3bfcbdce709d2d82277f6121deb894907c1589a18b6b5->leave($__internal_b21213ee6575673102b3bfcbdce709d2d82277f6121deb894907c1589a18b6b5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42df2e8b4df95148acc657dbf0218229e80492ff7798dded2eda8fd4e52c0544 = $this->env->getExtension("native_profiler");
        $__internal_42df2e8b4df95148acc657dbf0218229e80492ff7798dded2eda8fd4e52c0544->enter($__internal_42df2e8b4df95148acc657dbf0218229e80492ff7798dded2eda8fd4e52c0544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42df2e8b4df95148acc657dbf0218229e80492ff7798dded2eda8fd4e52c0544->leave($__internal_42df2e8b4df95148acc657dbf0218229e80492ff7798dded2eda8fd4e52c0544_prof);

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
