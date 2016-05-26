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
        $__internal_c5d301ef66b58aca27acd411ea220f997d1519fda53e69a50f2c3fec014a1932 = $this->env->getExtension("native_profiler");
        $__internal_c5d301ef66b58aca27acd411ea220f997d1519fda53e69a50f2c3fec014a1932->enter($__internal_c5d301ef66b58aca27acd411ea220f997d1519fda53e69a50f2c3fec014a1932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c5d301ef66b58aca27acd411ea220f997d1519fda53e69a50f2c3fec014a1932->leave($__internal_c5d301ef66b58aca27acd411ea220f997d1519fda53e69a50f2c3fec014a1932_prof);

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
