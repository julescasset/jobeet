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
        $__internal_51f16f913941d5d9ca3f893512f493cbbc69625364426b6194b032b3cceffc9c = $this->env->getExtension("native_profiler");
        $__internal_51f16f913941d5d9ca3f893512f493cbbc69625364426b6194b032b3cceffc9c->enter($__internal_51f16f913941d5d9ca3f893512f493cbbc69625364426b6194b032b3cceffc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51f16f913941d5d9ca3f893512f493cbbc69625364426b6194b032b3cceffc9c->leave($__internal_51f16f913941d5d9ca3f893512f493cbbc69625364426b6194b032b3cceffc9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec2caf3661cd3f1f628ce6e0ee37d2a259bd73302a36da0f877c0d0f56bb54ad = $this->env->getExtension("native_profiler");
        $__internal_ec2caf3661cd3f1f628ce6e0ee37d2a259bd73302a36da0f877c0d0f56bb54ad->enter($__internal_ec2caf3661cd3f1f628ce6e0ee37d2a259bd73302a36da0f877c0d0f56bb54ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec2caf3661cd3f1f628ce6e0ee37d2a259bd73302a36da0f877c0d0f56bb54ad->leave($__internal_ec2caf3661cd3f1f628ce6e0ee37d2a259bd73302a36da0f877c0d0f56bb54ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ea3041c945352ef70ee5d829fc9f0b8b0d12c28871d813f027979c9badb207a = $this->env->getExtension("native_profiler");
        $__internal_9ea3041c945352ef70ee5d829fc9f0b8b0d12c28871d813f027979c9badb207a->enter($__internal_9ea3041c945352ef70ee5d829fc9f0b8b0d12c28871d813f027979c9badb207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ea3041c945352ef70ee5d829fc9f0b8b0d12c28871d813f027979c9badb207a->leave($__internal_9ea3041c945352ef70ee5d829fc9f0b8b0d12c28871d813f027979c9badb207a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e977937d2d19abc267600df9f0030168f86bc07ad5eb428f91d17543a5595fdf = $this->env->getExtension("native_profiler");
        $__internal_e977937d2d19abc267600df9f0030168f86bc07ad5eb428f91d17543a5595fdf->enter($__internal_e977937d2d19abc267600df9f0030168f86bc07ad5eb428f91d17543a5595fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e977937d2d19abc267600df9f0030168f86bc07ad5eb428f91d17543a5595fdf->leave($__internal_e977937d2d19abc267600df9f0030168f86bc07ad5eb428f91d17543a5595fdf_prof);

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
