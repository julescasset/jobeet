<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_88f876b954a8fbd308b05e6c4cb404cdbc8080cceaa515d3fbc822230c29ffce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26c3074e8fd296acd7b90c63e1e563bbb1898c874320dde4cf2cd98c5b61efbf = $this->env->getExtension("native_profiler");
        $__internal_26c3074e8fd296acd7b90c63e1e563bbb1898c874320dde4cf2cd98c5b61efbf->enter($__internal_26c3074e8fd296acd7b90c63e1e563bbb1898c874320dde4cf2cd98c5b61efbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_26c3074e8fd296acd7b90c63e1e563bbb1898c874320dde4cf2cd98c5b61efbf->leave($__internal_26c3074e8fd296acd7b90c63e1e563bbb1898c874320dde4cf2cd98c5b61efbf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="{{ _charset }}" />*/
/*         <title>An Error Occurred: {{ status_text }}</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Oops! An Error Occurred</h1>*/
/*         <h2>The server returned a "{{ status_code }} {{ status_text }}".</h2>*/
/* */
/*         <div>*/
/*             Something is broken. Please let us know what you were doing when this error occurred.*/
/*             We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
