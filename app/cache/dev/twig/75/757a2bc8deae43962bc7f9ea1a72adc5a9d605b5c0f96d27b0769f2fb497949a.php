<?php

/* job/new.html.twig */
class __TwigTemplate_22ec1e89b02c712be492844830a5c81696bf4af963c335e7de892a8f35dfd133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d851a5a8b03efd0b14b0a538455b2b094b3114d5e9c1df40c717ef3e5aa0d0ed = $this->env->getExtension("native_profiler");
        $__internal_d851a5a8b03efd0b14b0a538455b2b094b3114d5e9c1df40c717ef3e5aa0d0ed->enter($__internal_d851a5a8b03efd0b14b0a538455b2b094b3114d5e9c1df40c717ef3e5aa0d0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d851a5a8b03efd0b14b0a538455b2b094b3114d5e9c1df40c717ef3e5aa0d0ed->leave($__internal_d851a5a8b03efd0b14b0a538455b2b094b3114d5e9c1df40c717ef3e5aa0d0ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c823c4fd4a168d2460475791ff4956446098c8b6975045d751154f91329ab57f = $this->env->getExtension("native_profiler");
        $__internal_c823c4fd4a168d2460475791ff4956446098c8b6975045d751154f91329ab57f->enter($__internal_c823c4fd4a168d2460475791ff4956446098c8b6975045d751154f91329ab57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c823c4fd4a168d2460475791ff4956446098c8b6975045d751154f91329ab57f->leave($__internal_c823c4fd4a168d2460475791ff4956446098c8b6975045d751154f91329ab57f_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
