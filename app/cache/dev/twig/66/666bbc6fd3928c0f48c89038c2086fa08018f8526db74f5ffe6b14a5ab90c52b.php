<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2efa0ec5984f3b0dd2208a6e3cd01ddeb768f77b096c086692671332ae1ac3c0 extends Twig_Template
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
        $__internal_8027b488532b7b0d0e0c56d89dab7987e69e8dd329d74be09fac2549339bbb43 = $this->env->getExtension("native_profiler");
        $__internal_8027b488532b7b0d0e0c56d89dab7987e69e8dd329d74be09fac2549339bbb43->enter($__internal_8027b488532b7b0d0e0c56d89dab7987e69e8dd329d74be09fac2549339bbb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8027b488532b7b0d0e0c56d89dab7987e69e8dd329d74be09fac2549339bbb43->leave($__internal_8027b488532b7b0d0e0c56d89dab7987e69e8dd329d74be09fac2549339bbb43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
