<?php

/* ::base.html.twig */
class __TwigTemplate_2eeeb91ffec3e6abc6c41952ecb3e47d530abc02dc132c82febd180121e507c3 extends Twig_Template
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
        $__internal_5709c76eb25a5adbe4fa0664694abc4a22153e11e074d5165073ac71f4f3b409 = $this->env->getExtension("native_profiler");
        $__internal_5709c76eb25a5adbe4fa0664694abc4a22153e11e074d5165073ac71f4f3b409->enter($__internal_5709c76eb25a5adbe4fa0664694abc4a22153e11e074d5165073ac71f4f3b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5709c76eb25a5adbe4fa0664694abc4a22153e11e074d5165073ac71f4f3b409->leave($__internal_5709c76eb25a5adbe4fa0664694abc4a22153e11e074d5165073ac71f4f3b409_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb5425dd00af2e04b91672af5d57fd4e7f8c81a8efb2f931e5f2fac3ff1c800c = $this->env->getExtension("native_profiler");
        $__internal_eb5425dd00af2e04b91672af5d57fd4e7f8c81a8efb2f931e5f2fac3ff1c800c->enter($__internal_eb5425dd00af2e04b91672af5d57fd4e7f8c81a8efb2f931e5f2fac3ff1c800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb5425dd00af2e04b91672af5d57fd4e7f8c81a8efb2f931e5f2fac3ff1c800c->leave($__internal_eb5425dd00af2e04b91672af5d57fd4e7f8c81a8efb2f931e5f2fac3ff1c800c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2e075ea8844ef4737660b7ccff3c956f47ef3277c7005a56b53f7aa8a0a21a6 = $this->env->getExtension("native_profiler");
        $__internal_e2e075ea8844ef4737660b7ccff3c956f47ef3277c7005a56b53f7aa8a0a21a6->enter($__internal_e2e075ea8844ef4737660b7ccff3c956f47ef3277c7005a56b53f7aa8a0a21a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2e075ea8844ef4737660b7ccff3c956f47ef3277c7005a56b53f7aa8a0a21a6->leave($__internal_e2e075ea8844ef4737660b7ccff3c956f47ef3277c7005a56b53f7aa8a0a21a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5355ea5d4bda14a6bd407818cfe36d66ace74e39f49983cc6a405b9e3ded4db8 = $this->env->getExtension("native_profiler");
        $__internal_5355ea5d4bda14a6bd407818cfe36d66ace74e39f49983cc6a405b9e3ded4db8->enter($__internal_5355ea5d4bda14a6bd407818cfe36d66ace74e39f49983cc6a405b9e3ded4db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5355ea5d4bda14a6bd407818cfe36d66ace74e39f49983cc6a405b9e3ded4db8->leave($__internal_5355ea5d4bda14a6bd407818cfe36d66ace74e39f49983cc6a405b9e3ded4db8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e645099e00b7d02df2e166ac83e69f9809d9f4b2fea5a05d940c5fc1fa1e354 = $this->env->getExtension("native_profiler");
        $__internal_6e645099e00b7d02df2e166ac83e69f9809d9f4b2fea5a05d940c5fc1fa1e354->enter($__internal_6e645099e00b7d02df2e166ac83e69f9809d9f4b2fea5a05d940c5fc1fa1e354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e645099e00b7d02df2e166ac83e69f9809d9f4b2fea5a05d940c5fc1fa1e354->leave($__internal_6e645099e00b7d02df2e166ac83e69f9809d9f4b2fea5a05d940c5fc1fa1e354_prof);

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
