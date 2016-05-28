<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_9051a8f17da7bbbf7499dbdadb3e29f5fb8813450a30c78f95775d9ef5d32320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94a4dc75e756111965ed44d490ba13ed6044304c9dc49f154fa7fe335df92500 = $this->env->getExtension("native_profiler");
        $__internal_94a4dc75e756111965ed44d490ba13ed6044304c9dc49f154fa7fe335df92500->enter($__internal_94a4dc75e756111965ed44d490ba13ed6044304c9dc49f154fa7fe335df92500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a4dc75e756111965ed44d490ba13ed6044304c9dc49f154fa7fe335df92500->leave($__internal_94a4dc75e756111965ed44d490ba13ed6044304c9dc49f154fa7fe335df92500_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_caad7a649e87df7eb3ee771d4801dc2a9c65e490414623c0d62ff34a70f2f9f1 = $this->env->getExtension("native_profiler");
        $__internal_caad7a649e87df7eb3ee771d4801dc2a9c65e490414623c0d62ff34a70f2f9f1->enter($__internal_caad7a649e87df7eb3ee771d4801dc2a9c65e490414623c0d62ff34a70f2f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_caad7a649e87df7eb3ee771d4801dc2a9c65e490414623c0d62ff34a70f2f9f1->leave($__internal_caad7a649e87df7eb3ee771d4801dc2a9c65e490414623c0d62ff34a70f2f9f1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
