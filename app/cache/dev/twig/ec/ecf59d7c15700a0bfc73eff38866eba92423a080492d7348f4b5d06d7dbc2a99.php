<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_cddc43cbe37dbad64783cf3747d570463ae72c6b043c9498f9a9d64e38d28bc8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4062931bd527f277149e702d6f7717378d2958f73852a52233fb0bcbd00a8ee5 = $this->env->getExtension("native_profiler");
        $__internal_4062931bd527f277149e702d6f7717378d2958f73852a52233fb0bcbd00a8ee5->enter($__internal_4062931bd527f277149e702d6f7717378d2958f73852a52233fb0bcbd00a8ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4062931bd527f277149e702d6f7717378d2958f73852a52233fb0bcbd00a8ee5->leave($__internal_4062931bd527f277149e702d6f7717378d2958f73852a52233fb0bcbd00a8ee5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9e51dcfea0e7f73aaf2d59933ad98436b7c44d12391b68a48698595b90e99cdd = $this->env->getExtension("native_profiler");
        $__internal_9e51dcfea0e7f73aaf2d59933ad98436b7c44d12391b68a48698595b90e99cdd->enter($__internal_9e51dcfea0e7f73aaf2d59933ad98436b7c44d12391b68a48698595b90e99cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_9e51dcfea0e7f73aaf2d59933ad98436b7c44d12391b68a48698595b90e99cdd->leave($__internal_9e51dcfea0e7f73aaf2d59933ad98436b7c44d12391b68a48698595b90e99cdd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
