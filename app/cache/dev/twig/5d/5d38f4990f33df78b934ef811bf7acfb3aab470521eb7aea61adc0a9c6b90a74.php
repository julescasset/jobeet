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
        $__internal_55546b8cb71cc43e744a9c547671c0ee4af1224d739afea0a1f5fb6d26564635 = $this->env->getExtension("native_profiler");
        $__internal_55546b8cb71cc43e744a9c547671c0ee4af1224d739afea0a1f5fb6d26564635->enter($__internal_55546b8cb71cc43e744a9c547671c0ee4af1224d739afea0a1f5fb6d26564635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55546b8cb71cc43e744a9c547671c0ee4af1224d739afea0a1f5fb6d26564635->leave($__internal_55546b8cb71cc43e744a9c547671c0ee4af1224d739afea0a1f5fb6d26564635_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c695a12396e56ede6db9660ea4f6b53e733b63428293df66aced0e7cfb94427 = $this->env->getExtension("native_profiler");
        $__internal_6c695a12396e56ede6db9660ea4f6b53e733b63428293df66aced0e7cfb94427->enter($__internal_6c695a12396e56ede6db9660ea4f6b53e733b63428293df66aced0e7cfb94427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_6c695a12396e56ede6db9660ea4f6b53e733b63428293df66aced0e7cfb94427->leave($__internal_6c695a12396e56ede6db9660ea4f6b53e733b63428293df66aced0e7cfb94427_prof);

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
