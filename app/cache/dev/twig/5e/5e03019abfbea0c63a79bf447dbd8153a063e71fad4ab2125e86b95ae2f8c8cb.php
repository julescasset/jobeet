<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a32b927f24044f33a903a675f28d7fb76ec169dc1bd948bc62377ddc080246d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_8197387e305b4fefb64635bb25f613cff2a5f51ab25114b5c5270b8a4a6f55c8 = $this->env->getExtension("native_profiler");
        $__internal_8197387e305b4fefb64635bb25f613cff2a5f51ab25114b5c5270b8a4a6f55c8->enter($__internal_8197387e305b4fefb64635bb25f613cff2a5f51ab25114b5c5270b8a4a6f55c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8197387e305b4fefb64635bb25f613cff2a5f51ab25114b5c5270b8a4a6f55c8->leave($__internal_8197387e305b4fefb64635bb25f613cff2a5f51ab25114b5c5270b8a4a6f55c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bd03ca137967e0cbe35325be8ceb5ceec668f22ffebfe58db66acd730cf77f0 = $this->env->getExtension("native_profiler");
        $__internal_0bd03ca137967e0cbe35325be8ceb5ceec668f22ffebfe58db66acd730cf77f0->enter($__internal_0bd03ca137967e0cbe35325be8ceb5ceec668f22ffebfe58db66acd730cf77f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0bd03ca137967e0cbe35325be8ceb5ceec668f22ffebfe58db66acd730cf77f0->leave($__internal_0bd03ca137967e0cbe35325be8ceb5ceec668f22ffebfe58db66acd730cf77f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5128c6123cc3ab6bcd25ce52b2d46c0112aa7488da43266afe6d970bd58083a5 = $this->env->getExtension("native_profiler");
        $__internal_5128c6123cc3ab6bcd25ce52b2d46c0112aa7488da43266afe6d970bd58083a5->enter($__internal_5128c6123cc3ab6bcd25ce52b2d46c0112aa7488da43266afe6d970bd58083a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5128c6123cc3ab6bcd25ce52b2d46c0112aa7488da43266afe6d970bd58083a5->leave($__internal_5128c6123cc3ab6bcd25ce52b2d46c0112aa7488da43266afe6d970bd58083a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
