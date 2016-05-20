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
        $__internal_d328d75fbb4533a8b4f04765d02f740978d6b055158b762590a3a524200fa10d = $this->env->getExtension("native_profiler");
        $__internal_d328d75fbb4533a8b4f04765d02f740978d6b055158b762590a3a524200fa10d->enter($__internal_d328d75fbb4533a8b4f04765d02f740978d6b055158b762590a3a524200fa10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d328d75fbb4533a8b4f04765d02f740978d6b055158b762590a3a524200fa10d->leave($__internal_d328d75fbb4533a8b4f04765d02f740978d6b055158b762590a3a524200fa10d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d76b9e53a7bd8cd5bd0bbc4ffc0c6d3d52aec53f3d16ca68362f05f23618c4f3 = $this->env->getExtension("native_profiler");
        $__internal_d76b9e53a7bd8cd5bd0bbc4ffc0c6d3d52aec53f3d16ca68362f05f23618c4f3->enter($__internal_d76b9e53a7bd8cd5bd0bbc4ffc0c6d3d52aec53f3d16ca68362f05f23618c4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d76b9e53a7bd8cd5bd0bbc4ffc0c6d3d52aec53f3d16ca68362f05f23618c4f3->leave($__internal_d76b9e53a7bd8cd5bd0bbc4ffc0c6d3d52aec53f3d16ca68362f05f23618c4f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15832132584d15c5a0106970bb523adca04ca337627b29c9d66128b15683f15e = $this->env->getExtension("native_profiler");
        $__internal_15832132584d15c5a0106970bb523adca04ca337627b29c9d66128b15683f15e->enter($__internal_15832132584d15c5a0106970bb523adca04ca337627b29c9d66128b15683f15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15832132584d15c5a0106970bb523adca04ca337627b29c9d66128b15683f15e->leave($__internal_15832132584d15c5a0106970bb523adca04ca337627b29c9d66128b15683f15e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8c06b57f5df43971f181059603dda9d776db71b3ce2152575e0d9dc857a67d5 = $this->env->getExtension("native_profiler");
        $__internal_f8c06b57f5df43971f181059603dda9d776db71b3ce2152575e0d9dc857a67d5->enter($__internal_f8c06b57f5df43971f181059603dda9d776db71b3ce2152575e0d9dc857a67d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8c06b57f5df43971f181059603dda9d776db71b3ce2152575e0d9dc857a67d5->leave($__internal_f8c06b57f5df43971f181059603dda9d776db71b3ce2152575e0d9dc857a67d5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fefdf47dba63a7089064d0aeeefd05ff5ae9955d1dfe05fdbbdfd46c5c663bb0 = $this->env->getExtension("native_profiler");
        $__internal_fefdf47dba63a7089064d0aeeefd05ff5ae9955d1dfe05fdbbdfd46c5c663bb0->enter($__internal_fefdf47dba63a7089064d0aeeefd05ff5ae9955d1dfe05fdbbdfd46c5c663bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fefdf47dba63a7089064d0aeeefd05ff5ae9955d1dfe05fdbbdfd46c5c663bb0->leave($__internal_fefdf47dba63a7089064d0aeeefd05ff5ae9955d1dfe05fdbbdfd46c5c663bb0_prof);

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
