<?php

/* :job:new.html.twig */
class __TwigTemplate_1a851bb689d3652dc49fb3e5ba8cc82e2520bac7031a2a91d015fa32bfa33a9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsManonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfe610b3000f60e4a5a1f20d4d7c916e179f9b1d25a8d5a067f8e2c9f0c5994b = $this->env->getExtension("native_profiler");
        $__internal_dfe610b3000f60e4a5a1f20d4d7c916e179f9b1d25a8d5a067f8e2c9f0c5994b->enter($__internal_dfe610b3000f60e4a5a1f20d4d7c916e179f9b1d25a8d5a067f8e2c9f0c5994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe610b3000f60e4a5a1f20d4d7c916e179f9b1d25a8d5a067f8e2c9f0c5994b->leave($__internal_dfe610b3000f60e4a5a1f20d4d7c916e179f9b1d25a8d5a067f8e2c9f0c5994b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e65675f8e855dc8cea727bc8a942218b02ef13c8ac48322d3e5911a5bbebc177 = $this->env->getExtension("native_profiler");
        $__internal_e65675f8e855dc8cea727bc8a942218b02ef13c8ac48322d3e5911a5bbebc177->enter($__internal_e65675f8e855dc8cea727bc8a942218b02ef13c8ac48322d3e5911a5bbebc177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e65675f8e855dc8cea727bc8a942218b02ef13c8ac48322d3e5911a5bbebc177->leave($__internal_e65675f8e855dc8cea727bc8a942218b02ef13c8ac48322d3e5911a5bbebc177_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
