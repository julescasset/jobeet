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
        $__internal_9720eb35d57a4e68262d436a64c4976057c7b0672c47362c31365eb1a38970c7 = $this->env->getExtension("native_profiler");
        $__internal_9720eb35d57a4e68262d436a64c4976057c7b0672c47362c31365eb1a38970c7->enter($__internal_9720eb35d57a4e68262d436a64c4976057c7b0672c47362c31365eb1a38970c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9720eb35d57a4e68262d436a64c4976057c7b0672c47362c31365eb1a38970c7->leave($__internal_9720eb35d57a4e68262d436a64c4976057c7b0672c47362c31365eb1a38970c7_prof);

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
