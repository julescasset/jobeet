<?php

/* job/edit.html.twig */
class __TwigTemplate_cd94dfbc2e32e10f5d7475df088cc0691355a287fc008bc80c5e1885b7ba607e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", "job/edit.html.twig", 1);
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
        $__internal_0f51a1ec64ad57fe786cc95de19fbcdb3db8ef4d3f48c8e98303171b225320f9 = $this->env->getExtension("native_profiler");
        $__internal_0f51a1ec64ad57fe786cc95de19fbcdb3db8ef4d3f48c8e98303171b225320f9->enter($__internal_0f51a1ec64ad57fe786cc95de19fbcdb3db8ef4d3f48c8e98303171b225320f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f51a1ec64ad57fe786cc95de19fbcdb3db8ef4d3f48c8e98303171b225320f9->leave($__internal_0f51a1ec64ad57fe786cc95de19fbcdb3db8ef4d3f48c8e98303171b225320f9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_69fc5d995dcabe8ad4ace4e12ed9445e11911a0b6b07097aabbb2592b26f9917 = $this->env->getExtension("native_profiler");
        $__internal_69fc5d995dcabe8ad4ace4e12ed9445e11911a0b6b07097aabbb2592b26f9917->enter($__internal_69fc5d995dcabe8ad4ace4e12ed9445e11911a0b6b07097aabbb2592b26f9917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Job edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_69fc5d995dcabe8ad4ace4e12ed9445e11911a0b6b07097aabbb2592b26f9917->leave($__internal_69fc5d995dcabe8ad4ace4e12ed9445e11911a0b6b07097aabbb2592b26f9917_prof);

    }

    public function getTemplateName()
    {
        return "job/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Job edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
