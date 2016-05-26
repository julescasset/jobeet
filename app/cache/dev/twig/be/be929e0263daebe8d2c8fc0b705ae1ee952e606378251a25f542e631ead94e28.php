<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_43e62d4f44cf7e29d86ba2063773a815c94892f6329d08cab230fbb3caa42051 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1668dc5a78667a19a76ce1cb9d3c3b3acae6b7cfea174c85e5f6697b58bd489 = $this->env->getExtension("native_profiler");
        $__internal_f1668dc5a78667a19a76ce1cb9d3c3b3acae6b7cfea174c85e5f6697b58bd489->enter($__internal_f1668dc5a78667a19a76ce1cb9d3c3b3acae6b7cfea174c85e5f6697b58bd489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1668dc5a78667a19a76ce1cb9d3c3b3acae6b7cfea174c85e5f6697b58bd489->leave($__internal_f1668dc5a78667a19a76ce1cb9d3c3b3acae6b7cfea174c85e5f6697b58bd489_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
