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
        $__internal_3e2bcc7492c03592d27b419c1b07d22a5d9d5ef662ee95df181235805b9b6eca = $this->env->getExtension("native_profiler");
        $__internal_3e2bcc7492c03592d27b419c1b07d22a5d9d5ef662ee95df181235805b9b6eca->enter($__internal_3e2bcc7492c03592d27b419c1b07d22a5d9d5ef662ee95df181235805b9b6eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2bcc7492c03592d27b419c1b07d22a5d9d5ef662ee95df181235805b9b6eca->leave($__internal_3e2bcc7492c03592d27b419c1b07d22a5d9d5ef662ee95df181235805b9b6eca_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2e5e7fc9fcb071bcd4db838a3ded7a467814116fd7d87526e0b6497469be6f5f = $this->env->getExtension("native_profiler");
        $__internal_2e5e7fc9fcb071bcd4db838a3ded7a467814116fd7d87526e0b6497469be6f5f->enter($__internal_2e5e7fc9fcb071bcd4db838a3ded7a467814116fd7d87526e0b6497469be6f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_2e5e7fc9fcb071bcd4db838a3ded7a467814116fd7d87526e0b6497469be6f5f->leave($__internal_2e5e7fc9fcb071bcd4db838a3ded7a467814116fd7d87526e0b6497469be6f5f_prof);

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
