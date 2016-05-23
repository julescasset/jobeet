<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dacbcef3561821a179ce5686dc00404a6e5e5ecd3e4afd747e85334287430496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8a0ee018a6ddf2afe740120c9b77eaaa8c817cd6849fed4e73a9f90397b25bee = $this->env->getExtension("native_profiler");
        $__internal_8a0ee018a6ddf2afe740120c9b77eaaa8c817cd6849fed4e73a9f90397b25bee->enter($__internal_8a0ee018a6ddf2afe740120c9b77eaaa8c817cd6849fed4e73a9f90397b25bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0ee018a6ddf2afe740120c9b77eaaa8c817cd6849fed4e73a9f90397b25bee->leave($__internal_8a0ee018a6ddf2afe740120c9b77eaaa8c817cd6849fed4e73a9f90397b25bee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fe1ec5fec252b9869028739e500dce1e0a99d008ac2021890f21f05efeb17f4 = $this->env->getExtension("native_profiler");
        $__internal_7fe1ec5fec252b9869028739e500dce1e0a99d008ac2021890f21f05efeb17f4->enter($__internal_7fe1ec5fec252b9869028739e500dce1e0a99d008ac2021890f21f05efeb17f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7fe1ec5fec252b9869028739e500dce1e0a99d008ac2021890f21f05efeb17f4->leave($__internal_7fe1ec5fec252b9869028739e500dce1e0a99d008ac2021890f21f05efeb17f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2daf3ca41fedc51af7e97b55b5f1ecd2090484e7085f6207b4c3f3076550610f = $this->env->getExtension("native_profiler");
        $__internal_2daf3ca41fedc51af7e97b55b5f1ecd2090484e7085f6207b4c3f3076550610f->enter($__internal_2daf3ca41fedc51af7e97b55b5f1ecd2090484e7085f6207b4c3f3076550610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2daf3ca41fedc51af7e97b55b5f1ecd2090484e7085f6207b4c3f3076550610f->leave($__internal_2daf3ca41fedc51af7e97b55b5f1ecd2090484e7085f6207b4c3f3076550610f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b251da350566fa9616a46ca0d881bab278f8b4e921d951885d5a67129e9d0b31 = $this->env->getExtension("native_profiler");
        $__internal_b251da350566fa9616a46ca0d881bab278f8b4e921d951885d5a67129e9d0b31->enter($__internal_b251da350566fa9616a46ca0d881bab278f8b4e921d951885d5a67129e9d0b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b251da350566fa9616a46ca0d881bab278f8b4e921d951885d5a67129e9d0b31->leave($__internal_b251da350566fa9616a46ca0d881bab278f8b4e921d951885d5a67129e9d0b31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
