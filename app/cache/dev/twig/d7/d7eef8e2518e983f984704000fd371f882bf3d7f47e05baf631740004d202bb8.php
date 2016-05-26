<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b31dd221ff8a725199dd60fc90c743af56562d159f18b07baa9b1212638635d7 extends Twig_Template
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
        $__internal_75bbc8a8da9a822be82c65f898461a48ffbf2e620a4573b72ce1291938e2bea1 = $this->env->getExtension("native_profiler");
        $__internal_75bbc8a8da9a822be82c65f898461a48ffbf2e620a4573b72ce1291938e2bea1->enter($__internal_75bbc8a8da9a822be82c65f898461a48ffbf2e620a4573b72ce1291938e2bea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_75bbc8a8da9a822be82c65f898461a48ffbf2e620a4573b72ce1291938e2bea1->leave($__internal_75bbc8a8da9a822be82c65f898461a48ffbf2e620a4573b72ce1291938e2bea1_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
