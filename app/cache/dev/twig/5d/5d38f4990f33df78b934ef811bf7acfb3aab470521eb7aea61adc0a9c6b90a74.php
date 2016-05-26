<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_aed7a941484854fd17f1ba6224fd677b0afee9f1ff0333c345f0d812db850a7a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce95a1460e61d612c8f6c5b557ef045689262e18c1defe822c5b3ee62c096791 = $this->env->getExtension("native_profiler");
        $__internal_ce95a1460e61d612c8f6c5b557ef045689262e18c1defe822c5b3ee62c096791->enter($__internal_ce95a1460e61d612c8f6c5b557ef045689262e18c1defe822c5b3ee62c096791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce95a1460e61d612c8f6c5b557ef045689262e18c1defe822c5b3ee62c096791->leave($__internal_ce95a1460e61d612c8f6c5b557ef045689262e18c1defe822c5b3ee62c096791_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4f1d121b39ee98645407662f6b4256d5e3365a8e5c5c26a51238a0f76dcc89f3 = $this->env->getExtension("native_profiler");
        $__internal_4f1d121b39ee98645407662f6b4256d5e3365a8e5c5c26a51238a0f76dcc89f3->enter($__internal_4f1d121b39ee98645407662f6b4256d5e3365a8e5c5c26a51238a0f76dcc89f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4f1d121b39ee98645407662f6b4256d5e3365a8e5c5c26a51238a0f76dcc89f3->leave($__internal_4f1d121b39ee98645407662f6b4256d5e3365a8e5c5c26a51238a0f76dcc89f3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
