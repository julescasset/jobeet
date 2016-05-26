<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fc4a3ed3ba65c0edbac4d7949252f5d87fbb333fdbc60a2c454810dc58acee06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcbabd8fd3d04078016732f395f01bf8d428dd8bfd5c04c28ee4e65698463403 = $this->env->getExtension("native_profiler");
        $__internal_fcbabd8fd3d04078016732f395f01bf8d428dd8bfd5c04c28ee4e65698463403->enter($__internal_fcbabd8fd3d04078016732f395f01bf8d428dd8bfd5c04c28ee4e65698463403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcbabd8fd3d04078016732f395f01bf8d428dd8bfd5c04c28ee4e65698463403->leave($__internal_fcbabd8fd3d04078016732f395f01bf8d428dd8bfd5c04c28ee4e65698463403_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c5a49e92e2f99a3c6cc268963b3f33fd02024e558284f3c1b63225ea1d19561 = $this->env->getExtension("native_profiler");
        $__internal_4c5a49e92e2f99a3c6cc268963b3f33fd02024e558284f3c1b63225ea1d19561->enter($__internal_4c5a49e92e2f99a3c6cc268963b3f33fd02024e558284f3c1b63225ea1d19561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c5a49e92e2f99a3c6cc268963b3f33fd02024e558284f3c1b63225ea1d19561->leave($__internal_4c5a49e92e2f99a3c6cc268963b3f33fd02024e558284f3c1b63225ea1d19561_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0db25baa23904ada4fb7f5e0e2aba58e865dbbcc38df2ab0c3eb9ede51131699 = $this->env->getExtension("native_profiler");
        $__internal_0db25baa23904ada4fb7f5e0e2aba58e865dbbcc38df2ab0c3eb9ede51131699->enter($__internal_0db25baa23904ada4fb7f5e0e2aba58e865dbbcc38df2ab0c3eb9ede51131699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0db25baa23904ada4fb7f5e0e2aba58e865dbbcc38df2ab0c3eb9ede51131699->leave($__internal_0db25baa23904ada4fb7f5e0e2aba58e865dbbcc38df2ab0c3eb9ede51131699_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61d5938e4d9cbc94a490586c986553a7d7ce14eb1437b9b19817a6a63560b380 = $this->env->getExtension("native_profiler");
        $__internal_61d5938e4d9cbc94a490586c986553a7d7ce14eb1437b9b19817a6a63560b380->enter($__internal_61d5938e4d9cbc94a490586c986553a7d7ce14eb1437b9b19817a6a63560b380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_61d5938e4d9cbc94a490586c986553a7d7ce14eb1437b9b19817a6a63560b380->leave($__internal_61d5938e4d9cbc94a490586c986553a7d7ce14eb1437b9b19817a6a63560b380_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
