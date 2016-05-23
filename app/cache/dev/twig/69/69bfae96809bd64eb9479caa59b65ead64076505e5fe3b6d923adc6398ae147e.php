<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5a873b2835ac03104af093937ca5e54d0f5fd714a693ff175088332141594b9e extends Twig_Template
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
        $__internal_bc2b7a2bf0da97af7804d12a2800517e7162d01ab7e5fe355bb4af5db0eb9b75 = $this->env->getExtension("native_profiler");
        $__internal_bc2b7a2bf0da97af7804d12a2800517e7162d01ab7e5fe355bb4af5db0eb9b75->enter($__internal_bc2b7a2bf0da97af7804d12a2800517e7162d01ab7e5fe355bb4af5db0eb9b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bc2b7a2bf0da97af7804d12a2800517e7162d01ab7e5fe355bb4af5db0eb9b75->leave($__internal_bc2b7a2bf0da97af7804d12a2800517e7162d01ab7e5fe355bb4af5db0eb9b75_prof);

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
