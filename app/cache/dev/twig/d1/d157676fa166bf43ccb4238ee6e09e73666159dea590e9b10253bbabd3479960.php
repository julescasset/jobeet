<?php

/* base.html.twig */
class __TwigTemplate_ee8cd5557d913d86f251e73154f6d0da19d547123831d9628e4fb750c8c729a6 extends Twig_Template
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
        $__internal_ce3a7a0e2b7156af371225d672bea7bf1eebd1485264751a2572eca693228ec1 = $this->env->getExtension("native_profiler");
        $__internal_ce3a7a0e2b7156af371225d672bea7bf1eebd1485264751a2572eca693228ec1->enter($__internal_ce3a7a0e2b7156af371225d672bea7bf1eebd1485264751a2572eca693228ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ce3a7a0e2b7156af371225d672bea7bf1eebd1485264751a2572eca693228ec1->leave($__internal_ce3a7a0e2b7156af371225d672bea7bf1eebd1485264751a2572eca693228ec1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fd90ae910a8a90f29f59e36d238b714edeeb4ba30b25b7509f47eebe38f6996 = $this->env->getExtension("native_profiler");
        $__internal_6fd90ae910a8a90f29f59e36d238b714edeeb4ba30b25b7509f47eebe38f6996->enter($__internal_6fd90ae910a8a90f29f59e36d238b714edeeb4ba30b25b7509f47eebe38f6996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6fd90ae910a8a90f29f59e36d238b714edeeb4ba30b25b7509f47eebe38f6996->leave($__internal_6fd90ae910a8a90f29f59e36d238b714edeeb4ba30b25b7509f47eebe38f6996_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eecaa5e637b19056a1c46d042f4cca52125b4b4ee761397ec0ada483ff91e92f = $this->env->getExtension("native_profiler");
        $__internal_eecaa5e637b19056a1c46d042f4cca52125b4b4ee761397ec0ada483ff91e92f->enter($__internal_eecaa5e637b19056a1c46d042f4cca52125b4b4ee761397ec0ada483ff91e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eecaa5e637b19056a1c46d042f4cca52125b4b4ee761397ec0ada483ff91e92f->leave($__internal_eecaa5e637b19056a1c46d042f4cca52125b4b4ee761397ec0ada483ff91e92f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d6a39dae747dd82f5070e7a67b87a2a4922e7129ae4054803833fac36e52ce4 = $this->env->getExtension("native_profiler");
        $__internal_7d6a39dae747dd82f5070e7a67b87a2a4922e7129ae4054803833fac36e52ce4->enter($__internal_7d6a39dae747dd82f5070e7a67b87a2a4922e7129ae4054803833fac36e52ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d6a39dae747dd82f5070e7a67b87a2a4922e7129ae4054803833fac36e52ce4->leave($__internal_7d6a39dae747dd82f5070e7a67b87a2a4922e7129ae4054803833fac36e52ce4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62d7f4429ed90e6226eea60285ffd9b37eef5a0a4d7e054601cf2597f3113cd6 = $this->env->getExtension("native_profiler");
        $__internal_62d7f4429ed90e6226eea60285ffd9b37eef5a0a4d7e054601cf2597f3113cd6->enter($__internal_62d7f4429ed90e6226eea60285ffd9b37eef5a0a4d7e054601cf2597f3113cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62d7f4429ed90e6226eea60285ffd9b37eef5a0a4d7e054601cf2597f3113cd6->leave($__internal_62d7f4429ed90e6226eea60285ffd9b37eef5a0a4d7e054601cf2597f3113cd6_prof);

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
