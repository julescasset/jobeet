<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_db5713f1c9b1a76681287b0a0e5b48d26547a264960fe58e624ecaed1049214d extends Twig_Template
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
        $__internal_3528294018313cc6adb5b0e7922e83b9352f532f03874c06abdadf3b3141e09b = $this->env->getExtension("native_profiler");
        $__internal_3528294018313cc6adb5b0e7922e83b9352f532f03874c06abdadf3b3141e09b->enter($__internal_3528294018313cc6adb5b0e7922e83b9352f532f03874c06abdadf3b3141e09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3528294018313cc6adb5b0e7922e83b9352f532f03874c06abdadf3b3141e09b->leave($__internal_3528294018313cc6adb5b0e7922e83b9352f532f03874c06abdadf3b3141e09b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
