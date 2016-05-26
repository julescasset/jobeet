<?php

/* :jobAdmin:list_image.html.twig */
class __TwigTemplate_8e349bfcdd3af8096e699b37a0755a2f420e44233e9525d5312b5e69e8c1855c extends Twig_Template
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
        $__internal_e7fa4a2ba8e5572ee960da306fdfe6a93f1ad6f5fb942486734816bc25cbd36c = $this->env->getExtension("native_profiler");
        $__internal_e7fa4a2ba8e5572ee960da306fdfe6a93f1ad6f5fb942486734816bc25cbd36c->enter($__internal_e7fa4a2ba8e5572ee960da306fdfe6a93f1ad6f5fb942486734816bc25cbd36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":jobAdmin:list_image.html.twig"));

        // line 1
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>";
        
        $__internal_e7fa4a2ba8e5572ee960da306fdfe6a93f1ad6f5fb942486734816bc25cbd36c->leave($__internal_e7fa4a2ba8e5572ee960da306fdfe6a93f1ad6f5fb942486734816bc25cbd36c_prof);

    }

    public function getTemplateName()
    {
        return ":jobAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <tr>*/
/*     <th>Logo</th>*/
/*     <td><img src="{{ asset(object.webPath) }}" /></td>*/
/* </tr>*/
