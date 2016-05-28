<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7f1d8590f2ce61dd78600186b3584651f7e80ef9e21bece46c9e801728ac95fc extends Twig_Template
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
        $__internal_5d172276665d699a9beaed1e55321fc9af75135c5368e9bfeb457fd6d0d92d9b = $this->env->getExtension("native_profiler");
        $__internal_5d172276665d699a9beaed1e55321fc9af75135c5368e9bfeb457fd6d0d92d9b->enter($__internal_5d172276665d699a9beaed1e55321fc9af75135c5368e9bfeb457fd6d0d92d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5d172276665d699a9beaed1e55321fc9af75135c5368e9bfeb457fd6d0d92d9b->leave($__internal_5d172276665d699a9beaed1e55321fc9af75135c5368e9bfeb457fd6d0d92d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
