<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8e45dc837e34381e12ad3a85a7aae4dcb28f2bb9a77532f2c9aabddd2852c14c extends Twig_Template
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
        $__internal_49348a8ac63a14c184861556e9f9073419d64abe825fc585f93e2a83211b17a7 = $this->env->getExtension("native_profiler");
        $__internal_49348a8ac63a14c184861556e9f9073419d64abe825fc585f93e2a83211b17a7->enter($__internal_49348a8ac63a14c184861556e9f9073419d64abe825fc585f93e2a83211b17a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_49348a8ac63a14c184861556e9f9073419d64abe825fc585f93e2a83211b17a7->leave($__internal_49348a8ac63a14c184861556e9f9073419d64abe825fc585f93e2a83211b17a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
