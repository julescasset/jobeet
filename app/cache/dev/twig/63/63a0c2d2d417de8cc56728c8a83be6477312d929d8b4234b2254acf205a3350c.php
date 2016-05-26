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
        $__internal_1f4c06f25b6f7f69bceb1916f29c42164845342af11f0bedf943648fc2729f35 = $this->env->getExtension("native_profiler");
        $__internal_1f4c06f25b6f7f69bceb1916f29c42164845342af11f0bedf943648fc2729f35->enter($__internal_1f4c06f25b6f7f69bceb1916f29c42164845342af11f0bedf943648fc2729f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1f4c06f25b6f7f69bceb1916f29c42164845342af11f0bedf943648fc2729f35->leave($__internal_1f4c06f25b6f7f69bceb1916f29c42164845342af11f0bedf943648fc2729f35_prof);

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
