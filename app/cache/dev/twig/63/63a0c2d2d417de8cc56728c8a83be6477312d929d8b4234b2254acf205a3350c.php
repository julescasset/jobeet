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
        $__internal_73f682d0b56b24196112a921609f95f72675e3d2380a9d98d1033477872a0ede = $this->env->getExtension("native_profiler");
        $__internal_73f682d0b56b24196112a921609f95f72675e3d2380a9d98d1033477872a0ede->enter($__internal_73f682d0b56b24196112a921609f95f72675e3d2380a9d98d1033477872a0ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_73f682d0b56b24196112a921609f95f72675e3d2380a9d98d1033477872a0ede->leave($__internal_73f682d0b56b24196112a921609f95f72675e3d2380a9d98d1033477872a0ede_prof);

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
