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
        $__internal_072d12e9ebb890bdc37db7c83368612d5637eac91b05d44ad0092f051a23aa8e = $this->env->getExtension("native_profiler");
        $__internal_072d12e9ebb890bdc37db7c83368612d5637eac91b05d44ad0092f051a23aa8e->enter($__internal_072d12e9ebb890bdc37db7c83368612d5637eac91b05d44ad0092f051a23aa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_072d12e9ebb890bdc37db7c83368612d5637eac91b05d44ad0092f051a23aa8e->leave($__internal_072d12e9ebb890bdc37db7c83368612d5637eac91b05d44ad0092f051a23aa8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e01cf9ecd1bb726a63a3a141f675605f7933677428dcc186d8e834e193eaa3a = $this->env->getExtension("native_profiler");
        $__internal_0e01cf9ecd1bb726a63a3a141f675605f7933677428dcc186d8e834e193eaa3a->enter($__internal_0e01cf9ecd1bb726a63a3a141f675605f7933677428dcc186d8e834e193eaa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0e01cf9ecd1bb726a63a3a141f675605f7933677428dcc186d8e834e193eaa3a->leave($__internal_0e01cf9ecd1bb726a63a3a141f675605f7933677428dcc186d8e834e193eaa3a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbb6d1ea74289cd004dc464d5c291606fbf8c02e389ebd1616da0de58cb20ebc = $this->env->getExtension("native_profiler");
        $__internal_bbb6d1ea74289cd004dc464d5c291606fbf8c02e389ebd1616da0de58cb20ebc->enter($__internal_bbb6d1ea74289cd004dc464d5c291606fbf8c02e389ebd1616da0de58cb20ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbb6d1ea74289cd004dc464d5c291606fbf8c02e389ebd1616da0de58cb20ebc->leave($__internal_bbb6d1ea74289cd004dc464d5c291606fbf8c02e389ebd1616da0de58cb20ebc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_70c08d1677988cc1297b45a1af45ef66505c76e32416411aa52f1bf94bf755bd = $this->env->getExtension("native_profiler");
        $__internal_70c08d1677988cc1297b45a1af45ef66505c76e32416411aa52f1bf94bf755bd->enter($__internal_70c08d1677988cc1297b45a1af45ef66505c76e32416411aa52f1bf94bf755bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70c08d1677988cc1297b45a1af45ef66505c76e32416411aa52f1bf94bf755bd->leave($__internal_70c08d1677988cc1297b45a1af45ef66505c76e32416411aa52f1bf94bf755bd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80399f582343a012749f48098e9c1899475aee9cea7fde80c972f67541a25086 = $this->env->getExtension("native_profiler");
        $__internal_80399f582343a012749f48098e9c1899475aee9cea7fde80c972f67541a25086->enter($__internal_80399f582343a012749f48098e9c1899475aee9cea7fde80c972f67541a25086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_80399f582343a012749f48098e9c1899475aee9cea7fde80c972f67541a25086->leave($__internal_80399f582343a012749f48098e9c1899475aee9cea7fde80c972f67541a25086_prof);

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
