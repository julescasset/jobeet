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
        $__internal_978dee345a3890a1473f061da2478c28581bbc87f7e8d30d66cee855affd7fc3 = $this->env->getExtension("native_profiler");
        $__internal_978dee345a3890a1473f061da2478c28581bbc87f7e8d30d66cee855affd7fc3->enter($__internal_978dee345a3890a1473f061da2478c28581bbc87f7e8d30d66cee855affd7fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_978dee345a3890a1473f061da2478c28581bbc87f7e8d30d66cee855affd7fc3->leave($__internal_978dee345a3890a1473f061da2478c28581bbc87f7e8d30d66cee855affd7fc3_prof);

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
