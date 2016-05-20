<?php

/* job/edit.html.twig */
class __TwigTemplate_cd94dfbc2e32e10f5d7475df088cc0691355a287fc008bc80c5e1885b7ba607e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/edit.html.twig", 1);
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
        $__internal_f661dfa47a85781a6ef98c44c881f7d24376c082a99432a58eaaf4679d5cdc2c = $this->env->getExtension("native_profiler");
        $__internal_f661dfa47a85781a6ef98c44c881f7d24376c082a99432a58eaaf4679d5cdc2c->enter($__internal_f661dfa47a85781a6ef98c44c881f7d24376c082a99432a58eaaf4679d5cdc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f661dfa47a85781a6ef98c44c881f7d24376c082a99432a58eaaf4679d5cdc2c->leave($__internal_f661dfa47a85781a6ef98c44c881f7d24376c082a99432a58eaaf4679d5cdc2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9132d05a28b8a6cd3ea031e04d26c2acbd909fc09e4ff32addfbab6c0f75b623 = $this->env->getExtension("native_profiler");
        $__internal_9132d05a28b8a6cd3ea031e04d26c2acbd909fc09e4ff32addfbab6c0f75b623->enter($__internal_9132d05a28b8a6cd3ea031e04d26c2acbd909fc09e4ff32addfbab6c0f75b623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
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
        
        $__internal_9132d05a28b8a6cd3ea031e04d26c2acbd909fc09e4ff32addfbab6c0f75b623->leave($__internal_9132d05a28b8a6cd3ea031e04d26c2acbd909fc09e4ff32addfbab6c0f75b623_prof);

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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
