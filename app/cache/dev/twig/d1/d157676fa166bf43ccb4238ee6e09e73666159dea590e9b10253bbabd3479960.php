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
        $__internal_509ee3e2e4e0e51b6cb693301118b5765fa272905642c48787fcca84c8536e68 = $this->env->getExtension("native_profiler");
        $__internal_509ee3e2e4e0e51b6cb693301118b5765fa272905642c48787fcca84c8536e68->enter($__internal_509ee3e2e4e0e51b6cb693301118b5765fa272905642c48787fcca84c8536e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_509ee3e2e4e0e51b6cb693301118b5765fa272905642c48787fcca84c8536e68->leave($__internal_509ee3e2e4e0e51b6cb693301118b5765fa272905642c48787fcca84c8536e68_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_245602203d5939c6b42e264a7af7408960af5c7c17a8c65d2bbd035ae6b64996 = $this->env->getExtension("native_profiler");
        $__internal_245602203d5939c6b42e264a7af7408960af5c7c17a8c65d2bbd035ae6b64996->enter($__internal_245602203d5939c6b42e264a7af7408960af5c7c17a8c65d2bbd035ae6b64996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_245602203d5939c6b42e264a7af7408960af5c7c17a8c65d2bbd035ae6b64996->leave($__internal_245602203d5939c6b42e264a7af7408960af5c7c17a8c65d2bbd035ae6b64996_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acd318c4613c652c1443cea11db7788cdfcda6df2e0cf54309ffba479844947f = $this->env->getExtension("native_profiler");
        $__internal_acd318c4613c652c1443cea11db7788cdfcda6df2e0cf54309ffba479844947f->enter($__internal_acd318c4613c652c1443cea11db7788cdfcda6df2e0cf54309ffba479844947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_acd318c4613c652c1443cea11db7788cdfcda6df2e0cf54309ffba479844947f->leave($__internal_acd318c4613c652c1443cea11db7788cdfcda6df2e0cf54309ffba479844947f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ecaf05b255ce1c4bb051a509e9cfa00ed6c958acd1f04aafe67e5b07f1fa1ee = $this->env->getExtension("native_profiler");
        $__internal_7ecaf05b255ce1c4bb051a509e9cfa00ed6c958acd1f04aafe67e5b07f1fa1ee->enter($__internal_7ecaf05b255ce1c4bb051a509e9cfa00ed6c958acd1f04aafe67e5b07f1fa1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ecaf05b255ce1c4bb051a509e9cfa00ed6c958acd1f04aafe67e5b07f1fa1ee->leave($__internal_7ecaf05b255ce1c4bb051a509e9cfa00ed6c958acd1f04aafe67e5b07f1fa1ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a1360fc65764762c830caf32dad1a6b060dd27f1e667e40c0b98667086fc552 = $this->env->getExtension("native_profiler");
        $__internal_9a1360fc65764762c830caf32dad1a6b060dd27f1e667e40c0b98667086fc552->enter($__internal_9a1360fc65764762c830caf32dad1a6b060dd27f1e667e40c0b98667086fc552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9a1360fc65764762c830caf32dad1a6b060dd27f1e667e40c0b98667086fc552->leave($__internal_9a1360fc65764762c830caf32dad1a6b060dd27f1e667e40c0b98667086fc552_prof);

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
