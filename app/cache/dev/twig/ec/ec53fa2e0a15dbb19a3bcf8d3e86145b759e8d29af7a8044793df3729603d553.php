<?php

/* jobAdmin/list_image.html.twig */
class __TwigTemplate_dc915c145d89c4fafeec4f72d749d47eb161cf4abc488bf8b6a0ac1f7d9921d3 extends Twig_Template
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
        $__internal_cda9cc35ff1cb768c9d6690d2e43b54cefda0bed0b8be5796212a7b5e62eb2a7 = $this->env->getExtension("native_profiler");
        $__internal_cda9cc35ff1cb768c9d6690d2e43b54cefda0bed0b8be5796212a7b5e62eb2a7->enter($__internal_cda9cc35ff1cb768c9d6690d2e43b54cefda0bed0b8be5796212a7b5e62eb2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jobAdmin/list_image.html.twig"));

        // line 1
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>";
        
        $__internal_cda9cc35ff1cb768c9d6690d2e43b54cefda0bed0b8be5796212a7b5e62eb2a7->leave($__internal_cda9cc35ff1cb768c9d6690d2e43b54cefda0bed0b8be5796212a7b5e62eb2a7_prof);

    }

    public function getTemplateName()
    {
        return "jobAdmin/list_image.html.twig";
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
