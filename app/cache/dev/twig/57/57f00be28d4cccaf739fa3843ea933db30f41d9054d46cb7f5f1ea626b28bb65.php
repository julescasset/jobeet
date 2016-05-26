<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_64ddee258b5ee3b763d00664f34fd10cce1f6eb43b195b9cc2ad2a211cd04376 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d91ca22fc6da106daf5078b7478bbf8c90e9a34bc6380a7b1a663b36f597e762 = $this->env->getExtension("native_profiler");
        $__internal_d91ca22fc6da106daf5078b7478bbf8c90e9a34bc6380a7b1a663b36f597e762->enter($__internal_d91ca22fc6da106daf5078b7478bbf8c90e9a34bc6380a7b1a663b36f597e762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d91ca22fc6da106daf5078b7478bbf8c90e9a34bc6380a7b1a663b36f597e762->leave($__internal_d91ca22fc6da106daf5078b7478bbf8c90e9a34bc6380a7b1a663b36f597e762_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_02955833be5fad5c1ba7cd43e5edbeb9498ff89f85bf4eb37a99e7cf24787e08 = $this->env->getExtension("native_profiler");
        $__internal_02955833be5fad5c1ba7cd43e5edbeb9498ff89f85bf4eb37a99e7cf24787e08->enter($__internal_02955833be5fad5c1ba7cd43e5edbeb9498ff89f85bf4eb37a99e7cf24787e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_02955833be5fad5c1ba7cd43e5edbeb9498ff89f85bf4eb37a99e7cf24787e08->leave($__internal_02955833be5fad5c1ba7cd43e5edbeb9498ff89f85bf4eb37a99e7cf24787e08_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
