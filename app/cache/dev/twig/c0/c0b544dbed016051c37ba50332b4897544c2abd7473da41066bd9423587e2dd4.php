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
        $__internal_90f87821fabdc6e39da1c3f35f95ae7f2af13e92c2b3da5eb5a11f79f7075bf6 = $this->env->getExtension("native_profiler");
        $__internal_90f87821fabdc6e39da1c3f35f95ae7f2af13e92c2b3da5eb5a11f79f7075bf6->enter($__internal_90f87821fabdc6e39da1c3f35f95ae7f2af13e92c2b3da5eb5a11f79f7075bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f87821fabdc6e39da1c3f35f95ae7f2af13e92c2b3da5eb5a11f79f7075bf6->leave($__internal_90f87821fabdc6e39da1c3f35f95ae7f2af13e92c2b3da5eb5a11f79f7075bf6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6381112fbf5e1d33c06660bd746f7cefe0c4b31aa54235f2446b9aaa07a4ee01 = $this->env->getExtension("native_profiler");
        $__internal_6381112fbf5e1d33c06660bd746f7cefe0c4b31aa54235f2446b9aaa07a4ee01->enter($__internal_6381112fbf5e1d33c06660bd746f7cefe0c4b31aa54235f2446b9aaa07a4ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6381112fbf5e1d33c06660bd746f7cefe0c4b31aa54235f2446b9aaa07a4ee01->leave($__internal_6381112fbf5e1d33c06660bd746f7cefe0c4b31aa54235f2446b9aaa07a4ee01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f45cbbd68c87818de08b340920e1e1e10f4eadfc11efef3441c703dd7d37805 = $this->env->getExtension("native_profiler");
        $__internal_2f45cbbd68c87818de08b340920e1e1e10f4eadfc11efef3441c703dd7d37805->enter($__internal_2f45cbbd68c87818de08b340920e1e1e10f4eadfc11efef3441c703dd7d37805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f45cbbd68c87818de08b340920e1e1e10f4eadfc11efef3441c703dd7d37805->leave($__internal_2f45cbbd68c87818de08b340920e1e1e10f4eadfc11efef3441c703dd7d37805_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff3430256cb05413e9919b5b5392b5ac098e8fba1a8f0ca6989b4384fa35efa0 = $this->env->getExtension("native_profiler");
        $__internal_ff3430256cb05413e9919b5b5392b5ac098e8fba1a8f0ca6989b4384fa35efa0->enter($__internal_ff3430256cb05413e9919b5b5392b5ac098e8fba1a8f0ca6989b4384fa35efa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ff3430256cb05413e9919b5b5392b5ac098e8fba1a8f0ca6989b4384fa35efa0->leave($__internal_ff3430256cb05413e9919b5b5392b5ac098e8fba1a8f0ca6989b4384fa35efa0_prof);

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
