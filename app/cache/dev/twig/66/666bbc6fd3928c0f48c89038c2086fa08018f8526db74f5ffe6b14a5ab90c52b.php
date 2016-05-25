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
        $__internal_1fe9fad10b0093f7527e4669e91703fd927d5f009f4c645607b6e26e07bac032 = $this->env->getExtension("native_profiler");
        $__internal_1fe9fad10b0093f7527e4669e91703fd927d5f009f4c645607b6e26e07bac032->enter($__internal_1fe9fad10b0093f7527e4669e91703fd927d5f009f4c645607b6e26e07bac032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1fe9fad10b0093f7527e4669e91703fd927d5f009f4c645607b6e26e07bac032->leave($__internal_1fe9fad10b0093f7527e4669e91703fd927d5f009f4c645607b6e26e07bac032_prof);

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
