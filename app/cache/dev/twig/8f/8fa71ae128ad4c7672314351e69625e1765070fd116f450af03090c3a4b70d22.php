<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ea0c4dd6c7ca3e549e159a8c705d75ba83b243d5db3d1c2a33a438b7789635ca extends Twig_Template
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
        $__internal_87c88cedb57f793aa5e6156f29fcb30aa92672318c39694eda5fe0bfa619dfbe = $this->env->getExtension("native_profiler");
        $__internal_87c88cedb57f793aa5e6156f29fcb30aa92672318c39694eda5fe0bfa619dfbe->enter($__internal_87c88cedb57f793aa5e6156f29fcb30aa92672318c39694eda5fe0bfa619dfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_87c88cedb57f793aa5e6156f29fcb30aa92672318c39694eda5fe0bfa619dfbe->leave($__internal_87c88cedb57f793aa5e6156f29fcb30aa92672318c39694eda5fe0bfa619dfbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
