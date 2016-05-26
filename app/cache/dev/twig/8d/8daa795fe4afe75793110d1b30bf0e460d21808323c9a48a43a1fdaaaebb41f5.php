<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f90cc660bffbb620a3d65020f5a057b05047b3df0c97f9cc39cc85b9172340df extends Twig_Template
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
        $__internal_bffa4fa1ceaa2bcc7c395800ad95be273f05c1fd6e450a3274351b3b54f88d16 = $this->env->getExtension("native_profiler");
        $__internal_bffa4fa1ceaa2bcc7c395800ad95be273f05c1fd6e450a3274351b3b54f88d16->enter($__internal_bffa4fa1ceaa2bcc7c395800ad95be273f05c1fd6e450a3274351b3b54f88d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bffa4fa1ceaa2bcc7c395800ad95be273f05c1fd6e450a3274351b3b54f88d16->leave($__internal_bffa4fa1ceaa2bcc7c395800ad95be273f05c1fd6e450a3274351b3b54f88d16_prof);

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
