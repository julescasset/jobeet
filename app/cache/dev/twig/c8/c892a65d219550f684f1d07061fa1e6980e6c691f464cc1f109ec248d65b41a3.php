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
        $__internal_86bc0435d786465c52380d99fd17bbc0fcbbae366d1543d061474b145373a4be = $this->env->getExtension("native_profiler");
        $__internal_86bc0435d786465c52380d99fd17bbc0fcbbae366d1543d061474b145373a4be->enter($__internal_86bc0435d786465c52380d99fd17bbc0fcbbae366d1543d061474b145373a4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_86bc0435d786465c52380d99fd17bbc0fcbbae366d1543d061474b145373a4be->leave($__internal_86bc0435d786465c52380d99fd17bbc0fcbbae366d1543d061474b145373a4be_prof);

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
