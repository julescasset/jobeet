<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_295d0e48222cc9de78a126662de64f5d5921dda356187832f6c2529fcd1f019d extends Twig_Template
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
        $__internal_3fa4672c1445bcb6f86d20df33dbdba989a5556b0d6122bc42e3e1cd652d2096 = $this->env->getExtension("native_profiler");
        $__internal_3fa4672c1445bcb6f86d20df33dbdba989a5556b0d6122bc42e3e1cd652d2096->enter($__internal_3fa4672c1445bcb6f86d20df33dbdba989a5556b0d6122bc42e3e1cd652d2096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa4672c1445bcb6f86d20df33dbdba989a5556b0d6122bc42e3e1cd652d2096->leave($__internal_3fa4672c1445bcb6f86d20df33dbdba989a5556b0d6122bc42e3e1cd652d2096_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_948f9205517f5883e1d144edaa31efe152e0ad0bdb7ce5f4e4d0d4473633c7a7 = $this->env->getExtension("native_profiler");
        $__internal_948f9205517f5883e1d144edaa31efe152e0ad0bdb7ce5f4e4d0d4473633c7a7->enter($__internal_948f9205517f5883e1d144edaa31efe152e0ad0bdb7ce5f4e4d0d4473633c7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_948f9205517f5883e1d144edaa31efe152e0ad0bdb7ce5f4e4d0d4473633c7a7->leave($__internal_948f9205517f5883e1d144edaa31efe152e0ad0bdb7ce5f4e4d0d4473633c7a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d33dff3b3a159ab814230b3d2ad3718ac6e3c224fda94db211dd6c700af1a3f = $this->env->getExtension("native_profiler");
        $__internal_8d33dff3b3a159ab814230b3d2ad3718ac6e3c224fda94db211dd6c700af1a3f->enter($__internal_8d33dff3b3a159ab814230b3d2ad3718ac6e3c224fda94db211dd6c700af1a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8d33dff3b3a159ab814230b3d2ad3718ac6e3c224fda94db211dd6c700af1a3f->leave($__internal_8d33dff3b3a159ab814230b3d2ad3718ac6e3c224fda94db211dd6c700af1a3f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_41d1b010c598764a05eacab95ea991c2f17d4f97b728aafbbcbbee62d713bff6 = $this->env->getExtension("native_profiler");
        $__internal_41d1b010c598764a05eacab95ea991c2f17d4f97b728aafbbcbbee62d713bff6->enter($__internal_41d1b010c598764a05eacab95ea991c2f17d4f97b728aafbbcbbee62d713bff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_41d1b010c598764a05eacab95ea991c2f17d4f97b728aafbbcbbee62d713bff6->leave($__internal_41d1b010c598764a05eacab95ea991c2f17d4f97b728aafbbcbbee62d713bff6_prof);

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
