<?php

/* @SonataAdmin/CRUD/dashboard__action.html.twig */
class __TwigTemplate_868a41010b3251d1c85e8d19d8860a91fb9b9c12cbcec78f8c2ab32fa26e828d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0fb77b058245e7edf9facf1df31e579bcf5a8a9993514ad40f1a8fbb2971f21 = $this->env->getExtension("native_profiler");
        $__internal_b0fb77b058245e7edf9facf1df31e579bcf5a8a9993514ad40f1a8fbb2971f21->enter($__internal_b0fb77b058245e7edf9facf1df31e579bcf5a8a9993514ad40f1a8fbb2971f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>";
        
        $__internal_b0fb77b058245e7edf9facf1df31e579bcf5a8a9993514ad40f1a8fbb2971f21->leave($__internal_b0fb77b058245e7edf9facf1df31e579bcf5a8a9993514ad40f1a8fbb2971f21_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <a class="btn btn-link btn-flat" href="{{ action.url }}">*/
/*     <i class="fa fa-{{ action.icon }}"></i>*/
/*     {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}*/
/* </a>*/
