<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_781a2028e9f409a142442f11f11b5bcec4bfe52ddf68d9d46fd04fc19280823b extends Twig_Template
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
        $__internal_2833ecfa45d0741d0f3c24feda71ad2996a564c8dd9ab56f91a97517eff0453c = $this->env->getExtension("native_profiler");
        $__internal_2833ecfa45d0741d0f3c24feda71ad2996a564c8dd9ab56f91a97517eff0453c->enter($__internal_2833ecfa45d0741d0f3c24feda71ad2996a564c8dd9ab56f91a97517eff0453c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2833ecfa45d0741d0f3c24feda71ad2996a564c8dd9ab56f91a97517eff0453c->leave($__internal_2833ecfa45d0741d0f3c24feda71ad2996a564c8dd9ab56f91a97517eff0453c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
