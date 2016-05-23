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
        $__internal_bd4cd6eafcd5ebfe4534e24bd8defb66dde9dd14545bb205221a7c01b169bdca = $this->env->getExtension("native_profiler");
        $__internal_bd4cd6eafcd5ebfe4534e24bd8defb66dde9dd14545bb205221a7c01b169bdca->enter($__internal_bd4cd6eafcd5ebfe4534e24bd8defb66dde9dd14545bb205221a7c01b169bdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bd4cd6eafcd5ebfe4534e24bd8defb66dde9dd14545bb205221a7c01b169bdca->leave($__internal_bd4cd6eafcd5ebfe4534e24bd8defb66dde9dd14545bb205221a7c01b169bdca_prof);

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
