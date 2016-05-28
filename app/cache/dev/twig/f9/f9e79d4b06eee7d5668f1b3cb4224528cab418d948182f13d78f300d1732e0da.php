<?php

/* base.html.twig */
class __TwigTemplate_e12325ee3b8755639f62c4b0197a5939e7f0cf73b22a015062bcd2378d8e1c9a extends Twig_Template
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
        $__internal_ae0596a5a80a5d4195b29d2ef90005ca3172382078c799738113a52f320db738 = $this->env->getExtension("native_profiler");
        $__internal_ae0596a5a80a5d4195b29d2ef90005ca3172382078c799738113a52f320db738->enter($__internal_ae0596a5a80a5d4195b29d2ef90005ca3172382078c799738113a52f320db738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ae0596a5a80a5d4195b29d2ef90005ca3172382078c799738113a52f320db738->leave($__internal_ae0596a5a80a5d4195b29d2ef90005ca3172382078c799738113a52f320db738_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd6f07b9868f52afdea5432fc8161dc919f6c641df6e62b3011959c7ab0e3aec = $this->env->getExtension("native_profiler");
        $__internal_dd6f07b9868f52afdea5432fc8161dc919f6c641df6e62b3011959c7ab0e3aec->enter($__internal_dd6f07b9868f52afdea5432fc8161dc919f6c641df6e62b3011959c7ab0e3aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd6f07b9868f52afdea5432fc8161dc919f6c641df6e62b3011959c7ab0e3aec->leave($__internal_dd6f07b9868f52afdea5432fc8161dc919f6c641df6e62b3011959c7ab0e3aec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10824ffadb636d6e3dc2b74bb5cccdb0b5809fc83e4c9db99d0b61071b5748aa = $this->env->getExtension("native_profiler");
        $__internal_10824ffadb636d6e3dc2b74bb5cccdb0b5809fc83e4c9db99d0b61071b5748aa->enter($__internal_10824ffadb636d6e3dc2b74bb5cccdb0b5809fc83e4c9db99d0b61071b5748aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_10824ffadb636d6e3dc2b74bb5cccdb0b5809fc83e4c9db99d0b61071b5748aa->leave($__internal_10824ffadb636d6e3dc2b74bb5cccdb0b5809fc83e4c9db99d0b61071b5748aa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6908f337f6aa4768ab3a9c434734378416d7fa2954c0506e147df6eef7ed730f = $this->env->getExtension("native_profiler");
        $__internal_6908f337f6aa4768ab3a9c434734378416d7fa2954c0506e147df6eef7ed730f->enter($__internal_6908f337f6aa4768ab3a9c434734378416d7fa2954c0506e147df6eef7ed730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6908f337f6aa4768ab3a9c434734378416d7fa2954c0506e147df6eef7ed730f->leave($__internal_6908f337f6aa4768ab3a9c434734378416d7fa2954c0506e147df6eef7ed730f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc9b4eb5e1058151e4f47eebfe81e94f80234f86b79b798ac4c543c752b23f89 = $this->env->getExtension("native_profiler");
        $__internal_fc9b4eb5e1058151e4f47eebfe81e94f80234f86b79b798ac4c543c752b23f89->enter($__internal_fc9b4eb5e1058151e4f47eebfe81e94f80234f86b79b798ac4c543c752b23f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fc9b4eb5e1058151e4f47eebfe81e94f80234f86b79b798ac4c543c752b23f89->leave($__internal_fc9b4eb5e1058151e4f47eebfe81e94f80234f86b79b798ac4c543c752b23f89_prof);

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
