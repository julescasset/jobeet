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
        $__internal_d4bd5b00315d7afd5a39bc02f40f609f6cc0a0fb8381698b2ac2e0348edc8831 = $this->env->getExtension("native_profiler");
        $__internal_d4bd5b00315d7afd5a39bc02f40f609f6cc0a0fb8381698b2ac2e0348edc8831->enter($__internal_d4bd5b00315d7afd5a39bc02f40f609f6cc0a0fb8381698b2ac2e0348edc8831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jobAdmin/list_image.html.twig"));

        // line 1
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>";
        
        $__internal_d4bd5b00315d7afd5a39bc02f40f609f6cc0a0fb8381698b2ac2e0348edc8831->leave($__internal_d4bd5b00315d7afd5a39bc02f40f609f6cc0a0fb8381698b2ac2e0348edc8831_prof);

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
