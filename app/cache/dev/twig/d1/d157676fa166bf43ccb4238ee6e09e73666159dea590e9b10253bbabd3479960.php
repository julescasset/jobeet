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
        $__internal_d9cbaf8915340393b053dad7df22894940f5026528fb018a02907ebceee65082 = $this->env->getExtension("native_profiler");
        $__internal_d9cbaf8915340393b053dad7df22894940f5026528fb018a02907ebceee65082->enter($__internal_d9cbaf8915340393b053dad7df22894940f5026528fb018a02907ebceee65082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d9cbaf8915340393b053dad7df22894940f5026528fb018a02907ebceee65082->leave($__internal_d9cbaf8915340393b053dad7df22894940f5026528fb018a02907ebceee65082_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_33a7409701d5f03eb35a3f7a4b909e63dba1c53753010d192ae53db5f871cdab = $this->env->getExtension("native_profiler");
        $__internal_33a7409701d5f03eb35a3f7a4b909e63dba1c53753010d192ae53db5f871cdab->enter($__internal_33a7409701d5f03eb35a3f7a4b909e63dba1c53753010d192ae53db5f871cdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_33a7409701d5f03eb35a3f7a4b909e63dba1c53753010d192ae53db5f871cdab->leave($__internal_33a7409701d5f03eb35a3f7a4b909e63dba1c53753010d192ae53db5f871cdab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e163f9ee95c89c2dad1ada73fca817a0caecf22bf8d7acf12039565069b52491 = $this->env->getExtension("native_profiler");
        $__internal_e163f9ee95c89c2dad1ada73fca817a0caecf22bf8d7acf12039565069b52491->enter($__internal_e163f9ee95c89c2dad1ada73fca817a0caecf22bf8d7acf12039565069b52491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e163f9ee95c89c2dad1ada73fca817a0caecf22bf8d7acf12039565069b52491->leave($__internal_e163f9ee95c89c2dad1ada73fca817a0caecf22bf8d7acf12039565069b52491_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c26a6d3caf811b4508aff43c4dc3e9edfe16f6767a0f8fc2ceb58223681813df = $this->env->getExtension("native_profiler");
        $__internal_c26a6d3caf811b4508aff43c4dc3e9edfe16f6767a0f8fc2ceb58223681813df->enter($__internal_c26a6d3caf811b4508aff43c4dc3e9edfe16f6767a0f8fc2ceb58223681813df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c26a6d3caf811b4508aff43c4dc3e9edfe16f6767a0f8fc2ceb58223681813df->leave($__internal_c26a6d3caf811b4508aff43c4dc3e9edfe16f6767a0f8fc2ceb58223681813df_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89278e64ce66f189c34609b31f7f5649678ce32d333b25e33cda53be1e00ffa4 = $this->env->getExtension("native_profiler");
        $__internal_89278e64ce66f189c34609b31f7f5649678ce32d333b25e33cda53be1e00ffa4->enter($__internal_89278e64ce66f189c34609b31f7f5649678ce32d333b25e33cda53be1e00ffa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89278e64ce66f189c34609b31f7f5649678ce32d333b25e33cda53be1e00ffa4->leave($__internal_89278e64ce66f189c34609b31f7f5649678ce32d333b25e33cda53be1e00ffa4_prof);

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
