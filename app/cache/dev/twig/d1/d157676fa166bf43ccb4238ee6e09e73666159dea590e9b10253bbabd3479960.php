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
        $__internal_e28b179d9deb05811a04b262589e8cf4ec74d5ae71ec0973dc888eecf6573c72 = $this->env->getExtension("native_profiler");
        $__internal_e28b179d9deb05811a04b262589e8cf4ec74d5ae71ec0973dc888eecf6573c72->enter($__internal_e28b179d9deb05811a04b262589e8cf4ec74d5ae71ec0973dc888eecf6573c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e28b179d9deb05811a04b262589e8cf4ec74d5ae71ec0973dc888eecf6573c72->leave($__internal_e28b179d9deb05811a04b262589e8cf4ec74d5ae71ec0973dc888eecf6573c72_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab455c28539895adbd1ab5a1b6df10a26a815eee39c1b799c4b49b92596e970d = $this->env->getExtension("native_profiler");
        $__internal_ab455c28539895adbd1ab5a1b6df10a26a815eee39c1b799c4b49b92596e970d->enter($__internal_ab455c28539895adbd1ab5a1b6df10a26a815eee39c1b799c4b49b92596e970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab455c28539895adbd1ab5a1b6df10a26a815eee39c1b799c4b49b92596e970d->leave($__internal_ab455c28539895adbd1ab5a1b6df10a26a815eee39c1b799c4b49b92596e970d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e4dc764264d17eab5459656d9fc92300c16caf4726b5cf7c7a5fb30768ce148 = $this->env->getExtension("native_profiler");
        $__internal_1e4dc764264d17eab5459656d9fc92300c16caf4726b5cf7c7a5fb30768ce148->enter($__internal_1e4dc764264d17eab5459656d9fc92300c16caf4726b5cf7c7a5fb30768ce148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1e4dc764264d17eab5459656d9fc92300c16caf4726b5cf7c7a5fb30768ce148->leave($__internal_1e4dc764264d17eab5459656d9fc92300c16caf4726b5cf7c7a5fb30768ce148_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea37c9179770f262fa02496c1ef6da93a7c826cc6dbf3d15b11a0d0caef71a2c = $this->env->getExtension("native_profiler");
        $__internal_ea37c9179770f262fa02496c1ef6da93a7c826cc6dbf3d15b11a0d0caef71a2c->enter($__internal_ea37c9179770f262fa02496c1ef6da93a7c826cc6dbf3d15b11a0d0caef71a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea37c9179770f262fa02496c1ef6da93a7c826cc6dbf3d15b11a0d0caef71a2c->leave($__internal_ea37c9179770f262fa02496c1ef6da93a7c826cc6dbf3d15b11a0d0caef71a2c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccd46f913b9bb61a0b21dbb423dd1d84909d9a3cb8657ff20ef226e6fd93aa8f = $this->env->getExtension("native_profiler");
        $__internal_ccd46f913b9bb61a0b21dbb423dd1d84909d9a3cb8657ff20ef226e6fd93aa8f->enter($__internal_ccd46f913b9bb61a0b21dbb423dd1d84909d9a3cb8657ff20ef226e6fd93aa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccd46f913b9bb61a0b21dbb423dd1d84909d9a3cb8657ff20ef226e6fd93aa8f->leave($__internal_ccd46f913b9bb61a0b21dbb423dd1d84909d9a3cb8657ff20ef226e6fd93aa8f_prof);

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
